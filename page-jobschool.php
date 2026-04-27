<?php get_header(); ?>
<!-- Main -->
<main>
    <section class="BGwhite1 catch-copy">
        <h2 class="title2">仕事と学校</h2>
        <p class="title-text">無理なく続けるための工夫と相談のしかた</p>	
    </section>
    <section class="BGpink future">
        <figure>
            <img class="sle-tell-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flower.png" alt="一輪の花">
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

    <section class="BGwhite cellcept medicine_width">
        <div class="flex">
            <div class="kihonjouhou_left">
                <div class="medicine_name_box">
                <p class="syurui">SLEと仕事・学校</p>
                </div>
            </div>
            </div>
            <div class="index_box withsle_index">
            <p class="index">もくじ</p>
            <ul>
                <li><a href="#job">仕事</a></li>
                <li><a href="#school">学校</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="job">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">仕事</h5>
            <p class="kouka_subtitle">
                症状によっては仕事ができます。<br>
                時間を短くしてもらったり、日数を減らしたりなど休息を必ず取れるように心がけたら仕事が続けやすいです。<br>
                仕事をしたいけど好きな仕事に体力的につけれない方は結構います。<br>
                体力勝負の仕事は時短を心がけることが大事だと思います。<br>
                体力勝負は無理だから内勤のできる仕事を探す方も多いです。<br>
                <br>
                「少し、体力的に物足りないくらい」が体力を温存するにはちょうどいいかなと思います。<br>
                <br>睡眠時間の確保、休息時間を増やす努力、趣味などを持って没頭できる時間も疲れやストレスを溜めないポイントになるかと思います。
                <br><br>人間関係で苦労もしますが、オープン（病気だと公表すること）にして仕事に取り掛かると必ず理解してくれる方が何人かいます。<br>
                もちろん理解してもらえない時もあるので少しずつちょっとずつ理解してもらえるように努力は必要かと思います。<br><br>
                <br>参考までに<br>
                実際にされている仕事内容：事務員、接客業（週３日）、就労継続支援の利用者さんや指導員さん、保育士、内職（パソコンを使った仕事）、教員、自営業、ネイルサロン、生命保険の営業<br>
                <br>
                就職活動するときに不安を抱えている方もいらっしゃると思います。<br>
                特定疾患受給者票をお持ちの方で地域によりますがハローワークにて難病就職相談や難病相談支援センターに相談できます。<br><br>
                体力的にまだ就職は難しい方や生活リズムを仕事モードにしてみたい方は特定疾患受給者票でも使える障害福祉サービスの就労支援を利用してみてもいいかもしれません。
            </p>
        </div>
    </section>

    <section class="BGwhite kansen" id="school">
        <h5 class="medicine_title">学校</h5>
        <p class="tiryou_tokutyou">
            学校からの理解が学生生活を円滑になるように感じます。<br>
            SLEのことや日常生活での注意、学校生活での制限などを伝えることが大事だと思います。<br>
            <br>
            先生からの理解が円滑に結びやすいと感じます。
            <br><br>
            とても小さな社会の中で孤独感を感じたりしやすいですが、通信教育で中学校、高校、大学を通う方法もあるので検討してみるものいいかもしれません。
        </p>
    </section>

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/qa/')); ?>">よくある質問</a>
            <a class="page-next" href="<?php echo esc_url( home_url('/enquete_info/') ); ?>">アンケート結果</a>
        </div>
        <!-- ページネーション　終わり -->
    </section>

</main>
<?php get_footer(); ?>