<?php get_header(); ?>

<main class="site-main">
    <div class="information_box">
        <h1 class="information-title">更新のお知らせ</h1>

        <table class="information_table">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                    // ▼リンク先URL
                    // Page Links To を使っている場合：get_permalink() が自動で書き換わる
                    $link_url = get_permalink();

                    // ※プラグインなしでカスタムフィールドを使うなら：
                    // $custom_link = get_post_meta(get_the_ID(), 'news_link_url', true);
                    // $link_url    = !empty($custom_link) ? esc_url($custom_link) : get_permalink();
                    ?>
                    <tr>
                        <th class="info_date">
                            <a class="informatiln_link" href="<?php echo esc_url($link_url); ?>">
                                <?php echo esc_html( get_the_date('Y.m.d') ); ?>
                            </a>
                        </th>
                        <td class="info_message">
                            <a class="informatiln_link" href="<?php echo esc_url($link_url); ?>">
                                <?php the_title(); ?>
                            </a>
                        </td>
                    </tr>

                <?php endwhile; ?>
            <?php else : ?>
                <tr>
                    <td colspan="2">現在、お知らせはありません。</td>
                </tr>
            <?php endif; ?>
        </table>

        <?php
        // ページャー（必要なら）
        the_posts_pagination(array(
            'prev_text' => '＜ 前へ',
            'next_text' => '次へ ＞',
        ));
        ?>
    </div>
</main>

<?php get_footer(); ?>
