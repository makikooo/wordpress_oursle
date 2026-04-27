<?php get_header(); ?>

<main class="search">

    <!-- パンクズリスト開始 -->
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
    <!-- パンクズリスト終わり -->

    <header class="search-header">
        <h1 class="search-heading">
        サイト内検索ができます
        </h1>
        <p>
            例：プレドニン なども可能です
        </p>
    </header>

    <form role="search" method="get" class="header-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input
            type="search"
            class="header-search-field"
            placeholder="プレドニン"
            value="<?php echo get_search_query(); ?>"
            name="s"
        />
        <button type="submit" class="header-search-submit">検索</button>
    </form>
</main>

<?php get_footer(); ?>
