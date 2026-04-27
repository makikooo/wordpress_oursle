<?php get_header(); ?>

<!-- Main -->
<main>
    <section class="BGwhite catch-copy">
        <h2 class="title2">薬について</h2>
        <p class="title-text">薬と上手につき合うための基本の考え方</p>	
    </section>
    
    <section class="BGpink future">
        <figure>
            <img class="sle-tell-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flower.png" alt="一輪の花">
        </figure>							
    </section>

    <section class="breadcrumb_wrapper">
        <!-- パンくずリスト　スタート -->
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
        <!-- パンくずリスト　終わり -->
    </section>


    <section class="BGwhite kansen" id="sentaku">
        <h5 class="medicine_title">治療の背景</h5>
        <p class="tiryou_tokutyou mb20">
            SLEは国から難病指定されています。根本的な治療法は現代の医療ではありません。<br>
            重症の場合は命に関わることがあります。<br>
            かつては亡くなる人も多く、十数年前までは「生存率３年」と言われるほど治療が難しい病気でした。<br><br>
            しかし、グルココルチコイドいわゆるステロイドが使われるようになってから炎症や免疫反応を強力に抑える働きがあり、治療が大きく進みました。<br>
            <br>
            最近では免疫抑制薬や免疫調整薬、生物学的製剤などの効果の高い薬が次々と登場して10年生存率が90%以上超えるようになり社会的寛解が治療の目標となっています。<br>
            <br>
            グルココルチコイドを使う量は、今ではぐっと少なく抑えられるようになりました。場合によっては、グルココルチコイドを使わずに治療できるケースも増えています。<br>
            <br>
            治療に使える薬の選択肢が増えたことで、患者さんごとにより効果が高く、副作用の少ない治療法を選びやすくなってきています。
        </p>
        <a class="button mb50" href="<?php echo esc_url( home_url('/kankai/')); ?>">社会的寛解とは</a>


        <h5 class="medicine_title">治療の方法</h5>
        <p class="tiryou_tokutyou">
            病態、臓器障害の種類や程度、合併症など全身の状態を診て治療方針が決められる<br>
            個々の症状により治療方法が異なります。
        </p>
        <figure>
            <img class="treatment_img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/treatment.jpg" alt="SLEの治療の流れ">
        </figure>
    </section>
    
    
    <a class="button medicine_link" href="<?php echo esc_url( home_url('/aboutmedicine/')); ?>">内服薬や外用薬の説明　▶︎</a>
    

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/kensa/') ); ?>">検査結果の見方</a>
            <a class="page-next" href="<?php echo esc_url( home_url('/aboutmedicine/') ); ?>">薬について</a>
        </div>
        <!-- ページネーション　終わり -->
    </section>


</main>
<?php get_footer(); ?>