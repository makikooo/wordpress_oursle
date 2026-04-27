<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>気圧変動予測</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }
        
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 2.5rem;
            background: linear-gradient(45deg, #3498db, #2980b9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .api-input {
            margin-bottom: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }
        
        .api-input:focus-within {
            border-color: #3498db;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.2);
        }
        
        .api-input label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .api-input input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }
        
        .api-input input:focus {
            outline: none;
            border-color: #3498db;
        }
        
        .api-note {
            background: #e8f4fd;
            border-left: 4px solid #3498db;
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
            font-size: 14px;
            line-height: 1.5;
        }
        
        .button-group {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        
        .fetch-btn, .save-btn {
            background: linear-gradient(45deg, #3498db, #2980b9);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }
        
        .save-btn {
            background: linear-gradient(45deg, #2ecc71, #27ae60);
            box-shadow: 0 4px 15px rgba(46, 204, 113, 0.3);
        }
        
        .fetch-btn:hover, .save-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
        }
        
        .fetch-btn:disabled, .save-btn:disabled {
            background: #bdc3c7;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        
        .loading {
            text-align: center;
            padding: 20px;
            color: #7f8c8d;
        }
        
        .error {
            background: #fee;
            border: 1px solid #fcc;
            color: #c33;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
        }
        
        .success {
            background: #efe;
            border: 1px solid #cfc;
            color: #3c3;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
        }
        
        .chart-container {
            position: relative;
            height: 500px;
            margin: 30px 0;
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        
        .stat-card {
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            color: white;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(116, 185, 255, 0.3);
            transition: transform 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-value {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .pressure-trend {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }
        
        .trend-icon {
            font-size: 1.5rem;
        }
        
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }
        
        .loading-animation {
            animation: pulse 1.5s infinite;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🌤️ 気圧変動予測</h1>
        
        <div class="api-input">
            <label for="cityName">都市名:</label>
            <input type="text" id="cityName" placeholder="例: 大阪, Tokyo, New York" value="大阪">
            <div class="api-note">
                <strong>都市名の入力例:</strong><br>
                • 日本語: 大阪, 東京, 福岡, 札幌<br>
                • 英語: Tokyo, Osaka, Kyoto, Hiroshima<br>
                • 海外: London, Paris, New York, Seoul
            </div>
        </div>
        
        <div class="button-group">
            <button class="fetch-btn" onclick="fetchWeatherData()">気圧データを取得</button>
        </div>
        
        <div id="loading" class="loading" style="display: none;">
            <div class="loading-animation">📡 気圧データを取得中...</div>
        </div>
        
        <div id="error" class="error" style="display: none;"></div>
        <div id="success" class="success" style="display: none;"></div>
        
        <div class="stats" id="stats" style="display: none;">
            <div class="stat-card">
                <div class="stat-value" id="currentPressure">--</div>
                <div class="stat-label">現在の気圧 (hPa)</div>
            </div>
            <div class="stat-card">
                <div class="stat-value" id="maxPressure">--</div>
                <div class="stat-label">最高気圧 (hPa)</div>
            </div>
            <div class="stat-card">
                <div class="stat-value" id="minPressure">--</div>
                <div class="stat-label">最低気圧 (hPa)</div>
            </div>
            <div class="stat-card" id="pressureTrend">
                <div class="pressure-trend">
                    <span class="trend-icon">➡️</span>
                    <div class="stat-value">--</div>
                </div>
                <div class="stat-label">変動傾向</div>
            </div>
        </div>
        
        <div class="chart-container" id="chartContainer" style="display: none;">
            <canvas id="pressureChart"></canvas>
        </div>
    </div>

    <script>
        let chart = null;
        let currentLocation = null;
        
        // APIキーを埋め込み
        const EMBEDDED_API_KEY = 'fa8da5f4fd78f601ad834cfc47e3c750';
        
        // ページ読み込み時の処理は不要
        
        async function getLocationCoordinates(cityName, apiKey) {
            try {
                const response = await fetch(
                    `https://api.openweathermap.org/geo/1.0/direct?q=${encodeURIComponent(cityName)}&limit=1&appid=${apiKey}`
                );
                
                if (!response.ok) {
                    throw new Error(`位置情報の取得に失敗しました: ${response.status}`);
                }
                
                const data = await response.json();
                
                if (!data || data.length === 0) {
                    throw new Error(`都市「${cityName}」が見つかりませんでした。別の都市名を試してください。`);
                }
                
                return {
                    lat: data[0].lat,
                    lon: data[0].lon,
                    name: data[0].local_names?.ja || data[0].name,
                    country: data[0].country
                };
            } catch (err) {
                throw new Error(`位置情報取得エラー: ${err.message}`);
            }
        }
        
        async function fetchWeatherData() {
            const apiKey = EMBEDDED_API_KEY;
            const cityName = document.getElementById('cityName').value.trim();
            
            if (!cityName) {
                showError('都市名を入力してください。');
                return;
            }
            
            const loading = document.getElementById('loading');
            const error = document.getElementById('error');
            const success = document.getElementById('success');
            const stats = document.getElementById('stats');
            const chartContainer = document.getElementById('chartContainer');
            const fetchBtn = document.querySelector('.fetch-btn');
            
            // UI状態をリセット
            loading.style.display = 'block';
            error.style.display = 'none';
            success.style.display = 'none';
            stats.style.display = 'none';
            chartContainer.style.display = 'none';
            fetchBtn.disabled = true;
            
            try {
                // 都市名から座標を取得
                const location = await getLocationCoordinates(cityName, apiKey);
                currentLocation = location;
                
                const response = await fetch(
                    `https://api.openweathermap.org/data/2.5/forecast?lat=${location.lat}&lon=${location.lon}&appid=${apiKey}&units=metric&lang=ja`
                );
                
                if (!response.ok) {
                    throw new Error(`天気API エラー: ${response.status} - ${response.statusText}`);
                }
                
                const data = await response.json();
                
                // データを処理
                const pressureData = data.list.map(item => ({
                    time: new Date(item.dt * 1000),
                    pressure: item.main.pressure,
                    temp: item.main.temp,
                    humidity: item.main.humidity,
                    weather: item.weather[0].description
                }));
                
                // 統計を計算
                const pressures = pressureData.map(d => d.pressure);
                const currentPressure = pressures[0];
                const maxPressure = Math.max(...pressures);
                const minPressure = Math.min(...pressures);
                
                // 変動傾向を計算
                const firstHalf = pressures.slice(0, Math.floor(pressures.length / 2));
                const secondHalf = pressures.slice(Math.floor(pressures.length / 2));
                const avgFirst = firstHalf.reduce((a, b) => a + b, 0) / firstHalf.length;
                const avgSecond = secondHalf.reduce((a, b) => a + b, 0) / secondHalf.length;
                const trend = avgSecond - avgFirst;
                
                // 統計を表示
                updateStats(currentPressure, maxPressure, minPressure, trend);
                
                // チャートを作成
                createChart(pressureData);
                
                // UI表示
                stats.style.display = 'grid';
                chartContainer.style.display = 'block';
                
            } catch (err) {
                console.error('Error:', err);
                showError(err.message);
            } finally {
                loading.style.display = 'none';
                fetchBtn.disabled = false;
            }
        }
        
        function updateStats(current, max, min, trend) {
            document.getElementById('currentPressure').textContent = current.toFixed(1);
            document.getElementById('maxPressure').textContent = max.toFixed(1);
            document.getElementById('minPressure').textContent = min.toFixed(1);
            
            const trendElement = document.getElementById('pressureTrend');
            const trendIcon = trendElement.querySelector('.trend-icon');
            const trendValue = trendElement.querySelector('.stat-value');
            
            if (trend > 1) {
                trendIcon.textContent = '📈';
                trendValue.textContent = '上昇';
                trendElement.style.background = 'linear-gradient(135deg, #00b894, #00a085)';
            } else if (trend < -1) {
                trendIcon.textContent = '📉';
                trendValue.textContent = '下降';
                trendElement.style.background = 'linear-gradient(135deg, #e17055, #d63031)';
            } else {
                trendIcon.textContent = '➡️';
                trendValue.textContent = '安定';
                trendElement.style.background = 'linear-gradient(135deg, #74b9ff, #0984e3)';
            }
        }
        
        function createChart(data) {
            const ctx = document.getElementById('pressureChart').getContext('2d');
            
            // 既存のチャートを破棄
            if (chart) {
                chart.destroy();
            }
            
            const labels = data.map(d => d.time.toLocaleString('ja-JP', {
                month: 'short',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            }));
            
            const pressures = data.map(d => d.pressure);
            
            // 各ポイントの色を計算（5hPa以上の変動で赤色）
            const pointColors = [];
            const segmentColors = [];
            
            for (let i = 0; i < pressures.length; i++) {
                if (i === 0) {
                    pointColors.push('#3498db');
                    segmentColors.push('#3498db');
                } else {
                    const diff = pressures[i] - pressures[i - 1];
                    const absDiff = Math.abs(diff);
                    
                    // 5hPa以上の変動があれば赤色
                    if (absDiff >= 5) {
                        pointColors.push('#e74c3c');
                        segmentColors.push('#e74c3c');
                    } else {
                        pointColors.push('#3498db');
                        segmentColors.push('#3498db');
                    }
                }
            }
            
            chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: '気圧 (hPa)',
                        data: pressures,
                        borderColor: '#3498db',
                        backgroundColor: 'rgba(52, 152, 219, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: pointColors,
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 5,
                        pointHoverRadius: 8,
                        segment: {
                            borderColor: ctx => {
                                const idx = ctx.p1DataIndex;
                                return segmentColors[idx] || '#3498db';
                            },
                            borderWidth: ctx => {
                                const idx = ctx.p1DataIndex;
                                return segmentColors[idx] === '#e74c3c' ? 4 : 3;
                            }
                        }
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: `${currentLocation.name} 5日間気圧予報`,
                            font: {
                                size: 18,
                                weight: 'bold'
                            },
                            color: '#2c3e50'
                        },
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: '#3498db',
                            borderWidth: 1,
                            callbacks: {
                                label: function(context) {
                                    const dataPoint = data[context.dataIndex];
                                    const result = [
                                        `気圧: ${dataPoint.pressure} hPa`,
                                        `気温: ${dataPoint.temp.toFixed(1)}°C`,
                                        `湿度: ${dataPoint.humidity}%`,
                                        `天気: ${dataPoint.weather}`
                                    ];
                                    
                                    // 前のポイントとの差分を表示
                                    if (context.dataIndex > 0) {
                                        const prevPressure = data[context.dataIndex - 1].pressure;
                                        const diff = dataPoint.pressure - prevPressure;
                                        const diffText = diff > 0 ? `+${diff.toFixed(1)}` : diff.toFixed(1);
                                        result.push(`変動: ${diffText} hPa`);
                                        
                                        if (Math.abs(diff) >= 5) {
                                            result.push('⚠️ 大きな変動');
                                        }
                                    }
                                    
                                    return result;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: false,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            },
                            ticks: {
                                color: '#666',
                                callback: function(value) {
                                    return value + ' hPa';
                                }
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            },
                            ticks: {
                                color: '#666',
                                maxRotation: 45
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    }
                }
            });
        }
        
        function showError(message) {
            const errorDiv = document.getElementById('error');
            const successDiv = document.getElementById('success');
            errorDiv.textContent = message;
            errorDiv.style.display = 'block';
            successDiv.style.display = 'none';
        }
        
        function showSuccess(message) {
            const successDiv = document.getElementById('success');
            const errorDiv = document.getElementById('error');
            successDiv.textContent = message;
            successDiv.style.display = 'block';
            errorDiv.style.display = 'none';
            
            // 3秒後に自動で非表示
            setTimeout(() => {
                successDiv.style.display = 'none';
            }, 3000);
        }
        
        // Enterキーでデータ取得
        document.getElementById('cityName').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                fetchWeatherData();
            }
        });
    </script>
</body>
</html>
