<?php get_header(); ?>

<?php
    //投稿ページに指定されている固定ページのIDを $page_for_posts に入れる
    $page_for_posts = (int) get_option('page_for_posts');
    
    $title = $page_for_posts ? get_the_title($page_for_posts) : 'お知らせ';
?>

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


<main class="blog-archive">
    <h1 class="blog-archive__title"><?php echo esc_html($title); ?></h1>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="post-card">
                <a href="<?php the_permalink(); ?>">
                    <h2 class="post-card__title">
                        <?php the_title(); ?>
                    </h2>

                    <time class="post-card__date" datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
                        <?php echo esc_html( get_the_date('Y.m.d') ); ?>
                    </time>

                    <p class="post-card__excerpt">
                        <?php
                            $excerpt = get_the_excerpt();
                            $excerpt = wp_strip_all_tags( strip_shortcodes( $excerpt ), true );
                            echo esc_html( wp_html_excerpt( $excerpt, 120, '…' ) );
                        ?>
                    </p>
                </a>
                <a class="post-card__more" href="<?php the_permalink(); ?>">続きを読む</a>
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>

    <?php else : ?>
        <p>投稿がありません。</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
