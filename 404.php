<?php get_header(); ?>

<main class="l-main">
    <section class="notfound">
        <h1 class="notfound__title">ページが見つかりませんでした（404）</h1>
        <p class="notfound__text">
        URLが間違っているか、ページが移動・削除された可能性があります。
        </p>

        <div class="notfound__actions">
        <a class="notfound__btn" href="<?php echo esc_url( home_url('/') ); ?>">
            トップへ戻る
        </a>
        </div>

        <div class="notfound__search">
        <?php get_search_form(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>