<?php
function sle_title() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'sle_title');

function sle_enqueue_styles() {
    
    // sanitize.css（今のフォルダ構造に合わせてパス調整）
    wp_enqueue_style(
        'sle-sanitize',
        get_template_directory_uri() . '/assets/CSS/sanitize.css',
        array('sle-style'), // 読み込み順の依存関係（なくてもOK）
        '1.0'
    );
    
    // ベースのstyle.css（テーマ直下のファイル）
    wp_enqueue_style(
        'sle-style',
        get_template_directory_uri() . '/assets/CSS/style.css',
        array(),
        '1.0'
    );

}
add_action('wp_enqueue_scripts', 'sle_enqueue_styles');


// JSを読み込む
function oursle_enqueue_scripts() {

    // WP同梱のjQuery
    wp_enqueue_script('jquery');

    // Chart.js（2.8.0）
    wp_enqueue_script(
        'chartjs',
        'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js',
        array(),
        '2.8.0',
        true
    );

    // inview（jQuery依存）
    wp_enqueue_script(
        'jquery-inview',
        'https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js',
        array('jquery'),
        '1.1.2',
        true
    );

    // ugokuweb（jQuery依存）
    wp_enqueue_script(
        'ugokuweb-5-4-1',
        'https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-4-1/js/5-4-1.js',
        array('jquery'),
        null,
        true
    );

    // 自作JS
    wp_enqueue_script(
        'oursle-script',
        get_template_directory_uri() . '/assets/js/script.js',
        ['jquery'],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'oursle_enqueue_scripts');

// メニュー
function oursle_setup() {
    add_theme_support('menus');

    register_nav_menus([
        'header_menu' => 'ヘッダーメニュー',
        
        'footer_top_left'     => 'フッター上段（左）',
        'footer_top_right'    => 'フッター上段（右）',
        'footer_bottom_left'  => 'フッター下段（左）',
        'footer_bottom_right' => 'フッター下段（右）',
    ]);
}
add_action('after_setup_theme', 'oursle_setup');

// ハンバーガーメニューのクラス名をつける
// li に nav_item を付ける
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
    if (!empty($args->theme_location) && $args->theme_location === 'header_menu') {
        $classes[] = 'nav_item';
    }
    return $classes;
}, 10, 3);

// a に nav_link を付ける
add_filter('nav_menu_link_attributes', function ($atts, $item, $args) {
    if (!empty($args->theme_location) && $args->theme_location === 'header_menu') {
        $atts['class'] = trim(($atts['class'] ?? '') . ' nav_link');
    }
    return $atts;
}, 10, 3);

// サブメニュー ul に class を足したい場合（必要なら）
add_filter('nav_menu_submenu_css_class', function ($classes, $args, $depth) {
    if (!empty($args->theme_location) && $args->theme_location === 'header_menu') {
        $classes[] = 'nav_submenu';
    }
    return $classes;
}, 10, 3);

// タイトル
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

// お知らせ投稿タイプを追加
function create_news_post_type() {
    register_post_type('news', array(
        'label' => '更新のお知らせ',
        'public' => true,
        'show_in_rest' => true, // ブロックエディタ対応
        'has_archive' => true,  // 一覧ページ /news を有効化
        'menu_position' => 5,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'news'),
    ));
}
add_action('init', 'create_news_post_type');


// パンくずリスト
function my_breadcrumb() {
    if (is_front_page()) return;

    echo '<nav class="breadcrumb" aria-label="breadcrumb">';
    echo '<a href="' . esc_url(home_url('/')) . '">ホーム</a>';

    // カテゴリ（投稿）
    if (is_single()) {
        $cats = get_the_category();
        if (!empty($cats)) {
            $cat = $cats[0];
            $parents = get_category_parents($cat, true, ' / ');
            // get_category_parentsはリンク付きHTMLを返すのでそのまま使う
            echo ' / ' . $parents;
        } else {
            echo ' / ';
        }
        echo '<span>' . esc_html(get_the_title()) . '</span>';
    }

    // 固定ページ
    elseif (is_page()) {
        $ancestors = array_reverse(get_post_ancestors(get_the_ID()));
        foreach ($ancestors as $ancestor_id) {
            echo ' / <a href="' . esc_url(get_permalink($ancestor_id)) . '">'
                . esc_html(get_the_title($ancestor_id)) . '</a>';
        }
        echo ' / <span>' . esc_html(get_the_title()) . '</span>';
    }

    // カテゴリ一覧
    elseif (is_category()) {
        echo ' / <span>' . esc_html(single_cat_title('', false)) . '</span>';
    }

    // 検索結果
    elseif (is_search()) {
        echo ' / <span>検索結果: ' . esc_html(get_search_query()) . '</span>';
    }

    // 404
    elseif (is_404()) {
        echo ' / <span>ページが見つかりません</span>';
    }

    echo '</nav>';
}

// 検索結果に「投稿＋固定ページ＋news」を含める（ただし特定スラッグは除外）
function my_search_post_types($q) {
    if (is_admin() || ! $q->is_main_query()) return;

    if ($q->is_search()) {
        $q->set('post_type', array('post', 'page', 'news'));

        // 除外したいスラッグ
        $slugs = array(
            'azanin','actemra','benlysta','cellcept','certican','endoxan','graceptor','imuran',
            'methotrexate','neoral','prograph','rituximab','safneroo'
        );

        $exclude_ids = array();

        foreach ($slugs as $slug) {
            $ids = get_posts(array(
                'post_type'      => array('post', 'page', 'news'), // 探す対象
                'name'           => $slug,                         // スラッグ一致
                'post_status'    => 'publish',
                'fields'         => 'ids',
                'posts_per_page' => -1,
                'no_found_rows'  => true,
            ));
            if (!empty($ids)) {
                $exclude_ids = array_merge($exclude_ids, $ids);
            }
        }

        // 除外を反映
        $current = (array) $q->get('post__not_in');
        $q->set('post__not_in', array_values(array_unique(array_merge($current, $exclude_ids))));
    }
}
add_action('pre_get_posts', 'my_search_post_types');
