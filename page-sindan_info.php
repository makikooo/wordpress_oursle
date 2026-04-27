<?php get_header(); ?>
<!-- Main -->
<main id="sindan_index">
    <section class="BGwhite catch-copy">
        <h2 class="title2">診断のまとめページ</h2>
        <p class="title-text">受診前後に役立つ“診断の情報”まとめ</p>
    </section>
    <section class="BGpink future">
        <figure>
            <img
            class="sle-tell-img"
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flower.png"
            alt="一輪の花"
            />
        </figure>
    </section>
    <section class="BGwhite syoujou">
        <!-- パンくずリスト　スタート -->
        <section class="breakcrumb">

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

    <section class="sindan_index">
        <ul class="sindan_list">
            <li class="sindan_item"><a class="sindan_link" href="<?php echo esc_url( home_url('/sindan_index/')); ?>">診断の基準</a></li>
            <li class="sindan_item"><a class="sindan_link" href="<?php echo esc_url( home_url('/kensa/')); ?>">検査結果の見方</a></li>
            <li class="sindan_item"><a class="sindan_link" href="<?php echo esc_url( home_url('/kankai/')); ?>">社会的寛解</a></li>
        </ul>
    </section>

    
    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/symptoms/') ); ?>">SLEの症状</a>
            <a class="page-next" href="<?php echo esc_url( home_url('/sindan_index/') ); ?>">診断の基準</a>
        </div>
        <!-- ページネーション　終わり -->
    </section>
</main>
<?php get_footer(); ?>