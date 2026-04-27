

<form role="search" method="get" class="header-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="header-search-label">
        <span class="screen-reader-text">サイト内検索</span>
        <input
            type="search"
            class="header-search-field"
            placeholder="サイト内検索"
            value="<?php echo get_search_query(); ?>"
            name="s"
        >
    </label>
    <button type="submit" class="header-search-submit">
        検索
    </button>
</form>