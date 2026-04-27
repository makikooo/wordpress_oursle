<?php get_header(); ?>
<!-- Main -->
<main>
    <section class="BGwhite catch-copy">
        <h2 class="title2">難病手当</h2>
        <p class="title-text">もらえるかも？を確認するために</p>	
    </section>
    <section class="BGpink future">
        <figure>
            <img class="sle-tell-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/flower.png" alt="一輪の花">
        </figure>							
    </section>

    <!-- パンくずリスト　スタート -->
    <section class="breadcrumb_wrapper">

        <nav aria-label="breadcrumb">
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
    </section>
    <!-- パンくずリスト　終わり -->



    <section class="BGwhite medicine_width">
        <div class="flex">
            <div class="kihonjouhou_left">
                <div class="medicine_name_box">
                    <h4 class="highlighter medicine_name">難病手当</h4>
                </div>
            </div>
        </div>
        <h5 class="ninteikijun_title ninteikijun">
            <span class="highlighter">（市区町村によって言い方がちがいます）
        </h5>
    </section>


    <section class="BGcream" id="syougai">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">
                <a href="
                    <!-- 
                        全国社協からの許可待ち　許可出たら 
                        https://www.shakyo.or.jp/download/shougai_pamph/date.pdf
                        をリンクする
                    -->
                    ">
                    東京都中央区では『難病患者福祉手当』という名で所得制限あるが月額15,500円手続きしたらもらえます。
                </a>
            </h5>
            <p class="jukyuusya_button">
                <a href=""></a>
            </p>
        </div>
    </section>

    <section class="BGwhite medicine_width left" id="syusyoku">
        <h5 class="medicine_title">区市町村によって違いがあるので自分の住んでいる役所で確認するのが賢明です</h5>
    </section>	
    
    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/tokuteisikkann/') ); ?>"><span class="px16">特定疾患受給者証</span></a>
            <a class="page-next" href="<?php echo esc_url( home_url('/aboutme/') ); ?>"><span class="px16">わたしのこと</span></a>
        </div>
        <!-- ページネーション　終わり -->
    </section>
</main>
<?php get_footer(); ?>