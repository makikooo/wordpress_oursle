<?php get_header(); ?>
<main>
    <section class="BGwhite1 catch-copy">
        <h2 class="title2">SLEと付き合う</h2>
        <p class="title-text">SLEと付き合うためのヒントを、テーマ別にまとめました</p>	
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
        <ul class="withsle_list">
            <li><a href="<?php echo esc_url( home_url('/qa/')); ?>">よくある質問</a></li>
            <li><a href="<?php echo esc_url( home_url('/jobschool/')); ?>">仕事・学校</a></li>
            <li><a target="_blank" href="https://tayori.com/feedback/a25d995c6a1c995bafa7b550273942e20fec4700/">アンケート</a></li>
            <li><a href="<?php echo esc_url( home_url('/covid19/')); ?>">コロナワクチンアンケート結果</a></li>
            <li><a href="<?php echo esc_url( home_url('/openchat_enquete1/')); ?>">オープンチャットでのアンケート1</a></li>
            <li><a href="<?php echo esc_url( home_url('/openchat_enquete2/')); ?>">オープンチャットでのアンケート2</a></li>
            <li><a href="<?php echo esc_url( home_url('/withsle_hint/')); ?>">SLEと付き合うコツ</a></li>
            <li><a href="<?php echo esc_url( home_url('/qa/')); ?>"></a></li>
        </ul>
    </section>
    
    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/pregnancy/') ); ?>"><span class="px16">SLEと妊娠・出産</span></a>
            <a class="page-next" href="<?php echo esc_url( home_url('/qa/')); ?>"><span class="px16">よくある質問</span></a>
        </div>
        <!-- ページネーション　終わり -->
    </section>

</main>
<?php get_footer(); ?>
