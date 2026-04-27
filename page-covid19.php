<?php get_header(); ?>
<!-- Main -->
<main class="main">
    <section class="BGwhite catch-copy">
        <h2 class="title2">ワクチンの接種状況</h2>
        <p class="title-text">不安な気持ちを整理する、ワクチンの話</p>	
    </section>
    <section class="BGpink future">
        <figure>
            <img class="sle-tell-img" src="<?php echo( get_template_directory_uri());?>/assets/images/flower.png" alt="一輪の花">
        </figure>							
    </section>

    <!-- パンくずリスト　スタート -->
    <nav aria-label="breadcrumb" class="breadcrumb_wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb__list">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
                <img class="icon_home" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home.svg" alt="home">
                私たちのSLE(TOP PAGE)
            </a>
            </li>

            <?php
                if (is_page()) {
                    $ancestors = array_reverse(get_post_ancestors(get_the_ID()));
                    foreach ($ancestors as $ancestor_id) {
                    echo '<li class="breadcrumb__list"><a href="' . esc_url(get_permalink($ancestor_id)) . '">'
                        . esc_html(get_the_title($ancestor_id)) . '</a></li>';
                    }
                }
            ?>

            <li class="breadcrumb__list">
            <?php echo esc_html( get_the_title() ); ?>
            </li>
        </ol>
    </nav>
    <!-- パンくずリスト　終わり -->


    <section class="BGwhite syoujou">
        <h4>ワクチンの接種状況</h4>
        
        <h3>コロナウィルスワクチンの接種状況　2021年夏</h3>	
        <div class="chart-box">
            <h4>お医者さんからの接種許可状況</h4>
            <div class="chart-area">
                <canvas id="chart01"></canvas>
            </div>
        </div>


        <div class="chart-box02">
            <h4>ワクチンの会社別</h4>
            <div class="chart-area02">
                <canvas id="chart02"></canvas>
            </div>
        </div>
                

        <div class="chart-box03">
            <h4>副反応の有無</h4>
            <div class="chart-area03">
                <canvas id="chart03"></canvas>
            </div>
        </div>
        <div class="covit19-center">
            <h4>副反応のアンケート<br>
                20名に聞きました</h4>
            <ul class="left">
                <li class="covid19_li">打った部分の痛み</li>
                <li class="covid19_li">38度の発熱、打った部分の痛み</li>
                <li class="covid19_li">打った部分の痛み、倦怠感、発熱37.2度</li>
                <li class="covid19_li">20分後にアナフィラキシー（蕁麻疹、咳）ボスミン、ストロイドを打つ</li>
                <li class="covid19_li">腕が上がりにくい</li>
                <li class="covid19_li">腕の痛み、倦怠感</li>
                <li class="covid19_li">打った部分の痛み、腫れ、全身のだるさ</li>
                <li class="covid19_li">鈍痛のみ</li>
                <li class="covid19_li">腕の痛み、倦怠感、微熱</li>
                <li class="covid19_li">腕が痛い、微熱、倦怠感</li>
                <li class="covid19_li">全身痒くなり、顔が少し腫れる、微熱、筋肉痛</li>
                <li class="covid19_li">腕の痛み、38度の発熱</li>
                <li class="covid19_li">軽い筋肉痛</li>
                <li class="covid19_li">筋肉痛</li>
                <li class="covid19_li">腕が痛い、38度の発熱</li>
                <li class="covid19_li">筋肉痛</li>
                <li class="covid19_li">妊活で摂取しない</li>
                <li class="covid19_li">副反応はなかった方3名</li>
            </ul>
        </div>
    </section>

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/enquete_info/') ); ?>">アンケート結果</a>
            <a class="page-next font_16" href="<?php echo esc_url( home_url('/withsle/') ); ?>">SLEと付き合うコツ</a>
        </div>
        <!-- ページネーション　終わり -->
    </section>
</main>
<?php get_footer(); ?>