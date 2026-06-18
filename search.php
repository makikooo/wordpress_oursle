<?php get_header(); ?>
<?php global $wp_query; ?>

<main class="search">
    <header class="search-header">
        <h1 class="search-heading">
        「<?php echo esc_html( get_search_query() ); ?>」の検索結果
        </h1>
        <p class="search-count"><?php echo (int) $wp_query->found_posts; ?> 件</p>
    </header>

    <?php if ( have_posts() ) : ?>
        <ul class="search-list">
        <?php while ( have_posts() ) : the_post(); ?>
            <li class="search-item">
            <a class="search-link" href="<?php the_permalink(); ?>">
                <h2 class="search-title"><?php the_title(); ?></h2>

                <p class="search-excerpt">
                <?php
                $excerpt = get_the_excerpt();
                if ( ! $excerpt ) {
                    $excerpt = wp_strip_all_tags( get_the_content() );
                }
                // 本文がDBに無い（テンプレート直書き）ページはテンプレートから抜粋
                if ( ! trim( $excerpt ) && function_exists( 'oursle_get_template_text' ) ) {
                    $excerpt = oursle_get_template_text( get_post_field( 'post_name', get_the_ID() ) );
                }
                echo esc_html( wp_trim_words( $excerpt, 40, '…' ) );
                ?>
                </p>

                <time class="search-date" datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
                <?php echo esc_html( get_the_date() ); ?>
                </time>
            </a>
            </li>
        <?php endwhile; ?>
        </ul>

        <nav class="search-pagination">
            <?php
            the_posts_pagination([
                'mid_size'  => 1,
                'prev_text' => '＜',
                'next_text' => '＞',
            ]);
            ?>
        </nav>

    <?php else : ?>
        <p class="search-empty">見つかりませんでした。別のキーワードで試してみてください。</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
