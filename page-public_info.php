<?php get_header(); ?>
<section class="BGwhite catch-copy">
    <h2 class="title2">制度のまとめ</h2>
    <p class="title-text">ひとりで抱えないための制度まとめ</p>	
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

<section class="BGwhite syoujou">
    <h4>制度のまとめ</h4>
        <p><a class="button" target="_blank" href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/koyou_roudou/koyou/shougaishakoyou/06e.html">就労支援　▶︎</a></p>
        <p><a class="button" target="_blank" href="https://www.nanbyou.or.jp/entry/5460">特定疾患受給者票　▶︎</a></p>
        <p><a class="button" href="<?php echo esc_url( home_url('/tokuteisikkann/') ); ?>">医療以外の特定疾患受給者票　▶︎</a></p>
        <p><a class="button" href="<?php echo esc_url( home_url('/nanbyouteate/') ); ?>">難病手当　▶︎</a></p>
        <p><a class="button" target="_blank" href="https://www.nanbyou.or.jp/wp-content/uploads/2024/04/20240401_shien1f.pdf">難病登録者証　▶︎</a></p>
</section>

<section class="pagenation">
    <!-- ページネーション　スタート -->
    <div class="nav-links">
        <a class="page-prev" href="<?php echo esc_url( home_url('/friend/') ); ?>">仲間とつながる</a>
        <a class="page-next font_16" href="<?php echo esc_url( home_url('/tokuteisikkann/') ); ?>">お得に使う特定疾患</a>
    </div>
    <!-- ページネーション　終わり -->
</section>

<?php get_footer(); ?>