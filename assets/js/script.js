//アコーディオンをクリックした時の動作
$('.title').on('click', function() {//タイトル要素をクリックしたら
  $('.box').slideUp(500);//クラス名.boxがついたすべてのアコーディオンを閉じる
    
  var findElm = $(this).next(".box");//タイトル直後のアコーディオンを行うエリアを取得
    
  if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
    $(this).removeClass('close');//クラス名を除去    
  }else{//それ以外は
    $('.close').removeClass('close'); //クラス名closeを全て除去した後
    $(this).addClass('close');//クリックしたタイトルにクラス名closeを付与し
    $(findElm).slideDown(500);//アコーディオンを開く
  }
});

//ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
$(window).on('load', function(){
  $('.accordion-area li:first-of-type section').addClass("open"); //accordion-areaのはじめのliにあるsectionにopenクラスを追加
  $(".open").each(function(index, element){ //openクラスを取得
    var Title =$(element).children('.title'); //openクラスの子要素のtitleクラスを取得
    $(Title).addClass('close');       ///タイトルにクラス名closeを付与し
    var Box =$(element).children('.box'); //openクラスの子要素boxクラスを取得
    $(Box).slideDown(500);          //アコーディオンを開く
  });
});

//値をグラフに表示させる
Chart.plugins.register({
  afterDatasetsDraw: function (chart, easing) {
      var ctx = chart.ctx;

      chart.data.datasets.forEach(function (dataset, i) {
          var meta = chart.getDatasetMeta(i);
          if (!meta.hidden) {
              meta.data.forEach(function (element, index) {
                  // 値の表示
                  ctx.fillStyle = 'rgb(0, 0, 0,0.8)';//文字の色
                  var fontSize = 12;//フォントサイズ
                  var fontStyle = 'normal';//フォントスタイル
                  var fontFamily = 'Arial';//フォントファミリー
                  ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

                  var dataString = dataset.data[index].toString();
        
                  // 値の位置
                  ctx.textAlign = 'center';//テキストを中央寄せ
                  ctx.textBaseline = 'middle';//テキストベースラインの位置を中央揃え

                  var padding = 5;//余白
                  var position = element.tooltipPosition();
                  ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
  
              });
          }
      });
  }
});


//=========== 円グラフ ============//
$('#chart01').on('inview', function(event, isInView) {//画面上に入ったらグラフを描画
if (isInView) {

var ctx=document.getElementById("chart01");//グラフを描画したい場所のid
var chart=new Chart(ctx,{
type:'pie',//グラフのタイプ
data:{//グラフのデータ
labels:["許可","自己判断",],//データの名前
datasets:[{
    label:"お医者さんからの接種許可状況",//グラフのタイトル
    backgroundColor:["#BB5179","#FAFF67"],//グラフの背景色
    data:["90","10",]//データ
  }]
},

options:{//グラフのオプション
maintainAspectRatio: false,//CSSで大きさを調整するため、自動縮小をさせない
legend:{
  display:true//グラフの説明を表示
},
tooltips:{//グラフへカーソルを合わせた際の詳細表示の設定
  callbacks:{
      label: function (tooltipItem, data) {
    return data.labels[tooltipItem.index]+ ": "+ data.datasets[0].data[tooltipItem.index] + "%";//%を最後につける
  }
  },    
},
title:{//上部タイトル表示の設定
  display: true,
  fontSize:10,
  text: '単位：%'
},
}
});

}
});

//値をグラフに表示させる
Chart.plugins.register({
  afterDatasetsDraw: function (chart, easing) {
      var ctx = chart.ctx;

      chart.data.datasets.forEach(function (dataset, i) {
          var meta = chart.getDatasetMeta(i);
          if (!meta.hidden) {
              meta.data.forEach(function (element, index) {
                  // 値の表示
                  ctx.fillStyle = 'rgb(0, 0, 0,0.8)';//文字の色
                  var fontSize = 12;//フォントサイズ
                  var fontStyle = 'normal';//フォントスタイル
                  var fontFamily = 'Arial';//フォントファミリー
                  ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

                  var dataString = dataset.data[index].toString();
        
                  // 値の位置
                  ctx.textAlign = 'center';//テキストを中央寄せ
                  ctx.textBaseline = 'middle';//テキストベースラインの位置を中央揃え

                  var padding = 5;//余白
                  var position = element.tooltipPosition();
                  ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
  
              });
          }
      });
  }
});


//=========== 円グラフ ============//
$('#chart02').on('inview', function(event, isInView) {//画面上に入ったらグラフを描画
if (isInView) {

var ctx=document.getElementById("chart02");//グラフを描画したい場所のid
var chart=new Chart(ctx,{
type:'pie',//グラフのタイプ
data:{//グラフのデータ
labels:["ファイザー","モデルナ","未接種",],//データの名前
datasets:[{
    label:"ワクチンの会社別",//グラフのタイトル
    backgroundColor:["#BB5179","#FAFF67", "#58A27C"],//グラフの背景色
    data:["90","5","5",]//データ
  }]
},

options:{//グラフのオプション
maintainAspectRatio: false,//CSSで大きさを調整するため、自動縮小をさせない
legend:{
  display:true//グラフの説明を表示
},
tooltips:{//グラフへカーソルを合わせた際の詳細表示の設定
  callbacks:{
      label: function (tooltipItem, data) {
    return data.labels[tooltipItem.index]+ ": "+ data.datasets[0].data[tooltipItem.index] + "%";//%を最後につける
  }
  },    
},
title:{//上部タイトル表示の設定
  display: true,
  fontSize:10,
  text: '単位：%'
},
}
});

}
});

//=========== 円グラフ ============//
$('#chart03').on('inview', function(event, isInView) {//画面上に入ったらグラフを描画
  if (isInView) {
  
  var ctx=document.getElementById("chart03");//グラフを描画したい場所のid
  var chart=new Chart(ctx,{
  type:'pie',//グラフのタイプ
  data:{//グラフのデータ
  labels:["あり","なし",],//データの名前
  datasets:[{
      label:"副反応の割合",//グラフのタイトル
      backgroundColor:["#BB5179","#FAFF67"],//グラフの背景色
      data:["84","16",]//データ
    }]
  },
  
  options:{//グラフのオプション
  maintainAspectRatio: false,//CSSで大きさを調整するため、自動縮小をさせない
  legend:{
    display:true//グラフの説明を表示
  },
  tooltips:{//グラフへカーソルを合わせた際の詳細表示の設定
    callbacks:{
        label: function (tooltipItem, data) {
      return data.labels[tooltipItem.index]+ ": "+ data.datasets[0].data[tooltipItem.index] + "%";//%を最後につける
    }
    },    
  },
  title:{//上部タイトル表示の設定
    display: true,
    fontSize:10,
    text: '単位：%'
  },
  }
  });
  
  }
  });




// グローバルナビゲーション
// -ドロップダウンメニュー（写真付 上ナビ）-

//ドロップダウンの設定を関数でまとめる
function mediaQueriesWin(){
  var width = $(window).width();
  if(width <= 768) {//横幅が768px以下の場合
    $(".has-child>a").off('click'); //has-childクラスがついたaタグのonイベントを複数登録を避ける為offにして一旦初期状態へ
    $(".has-child>a").on('click', function() {//has-childクラスがついたaタグをクリックしたら
      var parentElem =  $(this).parent();// aタグから見た親要素の<li>を取得し
      $(parentElem).toggleClass('active');//矢印方向を変えるためのクラス名を付与して
      $(parentElem).children('ul').stop().slideToggle(500);//liの子要素のスライドを開閉させる※数字が大きくなるほどゆっくり開く
      return false;//リンクの無効化
    });
  }else{//横幅が768px以上の場合
    $(".has-child>a").off('click');//has-childクラスがついたaタグのonイベントをoff(無効)にし
    $(".has-child").removeClass('active');//activeクラスを削除
    $('.has-child').children('ul').css("display","");//スライドトグルで動作したdisplayも無効化にする
  }
}

// ページがリサイズされたら動かしたい場合の記述
$(window).resize(function() {
  mediaQueriesWin();/* ドロップダウンの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load',function(){
  mediaQueriesWin();/* ドロップダウンの関数を呼ぶ*/
});
