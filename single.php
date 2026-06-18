<?php get_header(); ?>

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
                // お知らせ（news）はアーカイブを、通常投稿はカテゴリーを親として表示する
                if ( get_post_type() === 'news' ) {
                    $news_archive = get_post_type_archive_link('news');
                    if ( $news_archive ) {
                        echo '<li class="breadcrumb__list"><a href="' . esc_url($news_archive) . '">更新のお知らせ</a></li>';
                    }
                } else {
                    $cats = get_the_category();
                    if ( ! empty($cats) ) {
                        $cat = $cats[0];
                        echo '<li class="breadcrumb__list"><a href="' . esc_url(get_category_link($cat->term_id)) . '">'
                            . esc_html($cat->name) . '</a></li>';
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


<main class="single">
    <?php while ( have_posts() ) : the_post(); ?>

        <article class="single-article">

            <header class="single-article__header">
                <?php
                    // カテゴリー（通常投稿のみ）
                    if ( get_post_type() !== 'news' ) {
                        $cats = get_the_category();
                        if ( ! empty($cats) ) {
                            echo '<div class="single-article__cats">';
                            foreach ( $cats as $cat ) {
                                echo '<a class="single-article__cat" href="' . esc_url(get_category_link($cat->term_id)) . '">'
                                    . esc_html($cat->name) . '</a>';
                            }
                            echo '</div>';
                        }
                    }
                ?>

                <h1 class="single-article__title"><?php the_title(); ?></h1>

                <div class="single-article__meta">
                    <time class="single-article__date" datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
                        <?php echo esc_html( get_the_date('Y.m.d') ); ?>
                    </time>
                    <?php if ( get_the_modified_date('Y.m.d') !== get_the_date('Y.m.d') ) : ?>
                        <time class="single-article__updated" datetime="<?php echo esc_attr( get_the_modified_date('c') ); ?>">
                            更新：<?php echo esc_html( get_the_modified_date('Y.m.d') ); ?>
                        </time>
                    <?php endif; ?>
                </div>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <figure class="single-article__thumb">
                    <?php the_post_thumbnail('large', array('loading' => 'eager')); ?>
                </figure>
            <?php endif; ?>

            <div class="single-article__body">
                <?php the_content(); ?>
            </div>

            <?php
                wp_link_pages(array(
                    'before' => '<div class="single-article__pagelinks">ページ：',
                    'after'  => '</div>',
                ));
            ?>

            <?php
                $tags = get_the_tag_list('<ul class="single-article__tags"><li>', '</li><li>', '</li></ul>');
                if ( $tags ) {
                    echo $tags;
                }
            ?>
        </article>


        <!-- 前後の記事ナビゲーション -->
        <nav class="single-nav" aria-label="記事ナビゲーション">
            <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
            ?>

            <?php if ( $prev_post ) : ?>
                <a class="single-nav__link single-nav__link--prev" href="<?php echo esc_url( get_permalink($prev_post) ); ?>">
                    <span class="single-nav__label">前の記事</span>
                    <span class="single-nav__title"><?php echo esc_html( get_the_title($prev_post) ); ?></span>
                </a>
            <?php else : ?>
                <span class="single-nav__link single-nav__link--disabled"></span>
            <?php endif; ?>

            <?php if ( $next_post ) : ?>
                <a class="single-nav__link single-nav__link--next" href="<?php echo esc_url( get_permalink($next_post) ); ?>">
                    <span class="single-nav__label">次の記事</span>
                    <span class="single-nav__title"><?php echo esc_html( get_the_title($next_post) ); ?></span>
                </a>
            <?php else : ?>
                <span class="single-nav__link single-nav__link--disabled"></span>
            <?php endif; ?>
        </nav>

        <div class="single-back">
            <?php
                if ( get_post_type() === 'news' ) {
                    $back_url   = get_post_type_archive_link('news');
                    $back_label = '更新のお知らせ一覧へ';
                } else {
                    $posts_page = (int) get_option('page_for_posts');
                    $back_url   = $posts_page ? get_permalink($posts_page) : home_url('/');
                    $back_label = '記事一覧へ戻る';
                }
            ?>
            <a class="single-back__link" href="<?php echo esc_url( $back_url ); ?>"><?php echo esc_html( $back_label ); ?></a>
        </div>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
