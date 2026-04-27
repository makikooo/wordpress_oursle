<?php get_header(); ?>
<section class="BGwhite catch-copy">
    <h2 class="title2">アンケート一覧</h2>
    <p class="title-text">みんなの声を、テーマ別にまとめています</p>	
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
    <h3>アンケート実施したもの</h3>	
    
    <ul class="enquete_list">
        <li class="enquete_item"><a href="<?php echo esc_url( home_url('/covid19/')); ?>">コロナワクチンについて</a></li>
        <li class="enquete_item"><a href="<?php echo esc_url( home_url('/openchat_enquete1/')); ?>">オープンチャットでのアンケート1</a></li>
        <li class="enquete_item"><a href="<?php echo esc_url( home_url('/openchat_enquete2/')); ?>">オープンチャットでのアンケート2</a></li>
    </ul>
</section>

<section class="pagenation">
    <!-- ページネーション　スタート -->
    <div class="nav-links">
        <a class="page-prev" target="_blank" href="https://tayori.com/feedback/a25d995c6a1c995bafa7b550273942e20fec4700/">アンケート</a>
        <a class="page-next font_16" href="<?php echo esc_url( home_url('/withsle/') ); ?>">SLEと付き合うコツ</a>
    </div>
    <!-- ページネーション　終わり -->
</section>
<?php get_footer(); ?>