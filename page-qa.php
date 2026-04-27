<?php get_header(); ?>
<!-- Main -->
<main>
    <?php if( have_posts()): while ( have_posts() ): the_post(); ?>
        <section class="BGwhite1 catch-copy">
            <h3 class="title2">よくある質問</h3>
            <p class="title-text">気になる疑問を、短く分かりやすく回答</p>	
        </section>
        <section class="BGpink faq-title">
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

        <section class="faq BGwhite">
            <div class="menu">
                <label for="Panel1">Q  相談するところはありますか</label>
                <input type="checkbox" id="Panel1" class="on-off" />
                <ul>
                    <li>
                        <div class="box">
                            <p>A.お住まいの市町村の難病相談支援センターで相談ができます
                                <a class="button" target="_blank" href="https://www.nanbyou.or.jp/entry/1361">こちらから</a>
                            </p>
                        </div>
                    </li>
                </ul>
                <label for="Panel2">Q  救急車を呼ぼうか悩んでます</label>
                <input type="checkbox" id="Panel2" class="on-off" />
                <ul>
                        <li>
                            <div class="box">
                                <p>A.地域によりますが、救急車を呼ぼうか考える時に看護士さんなどが相談に乗ってくれます。
                                    電話から「#7119」をかけて下さい。
                                    <a class="button" target="_blank" href="https://kakarikata.mhlw.go.jp/kakaritsuke/7119.html">詳細はこちら</a> 
                                </p>
                            </div>
                        </li>
                </ul>
                <label for="Panel3">Q  給付金はもらえますか</label>
                <input type="checkbox" id="Panel3" class="on-off" />
                <ul>
                        <li>
                            <div class="box">
                                <p>A.お住まいの地域によっては難病見舞金をもらえます。
                                    一人につき年度2万円くらいです</p>
                            </div>
                        </li>
                </ul>
                
                <label for="Panel4">Q  障害手帳や障害年金はもらえますか</label>
                <input type="checkbox" id="Panel4" class="on-off" />
                <ul>
                    <li>
                        <div class="box">
                            <p>
                                A.まれですがもらえます<br>
                                SLEではなくてもメンタル疾患になったり大腿骨頭壊死などで手帳をもらえることもあります
                            </p>
                        </div>
                    </li>
                </ul>
                <label for="Panel5">Q  医療費が高いのでなんとかなりませんか</label>
                <input type="checkbox" id="Panel5" class="on-off" />
                <ul>
                    <li>
                        <div class="box">
                            <p>A.特定疾患受給者票を使うと上限があるので生活に負担が軽くなります
                                <a class="button" target="_blank" href="https://www.nanbyou.or.jp/entry/5460">詳しくはこちらから</a> 
                                <a class="button" target="_blank" href="https://www.shouman.jp/support/prefecture/">小児はこちら</a></p>
                        </div>
                    </li>
                </ul>
        
        
                <label for="Panel6">Q  特定疾患でお得なサービスなどありますか</label>
                <input type="checkbox" id="Panel6" class="on-off" />
                <ul>
                    <li>
                        <div class="box">
                            <p>A.色々ありますのでご覧ください
                                <a class="button" href="<?php echo esc_url( home_url('/tokuteisikkann/')); ?>">こちら</a>
                            </p>
                        </div>
                    </li>
                </ul>

                <label for="Panel7">Q  コロナワクチンの情報はありますか</label>
                <input type="checkbox" id="Panel7" class="on-off" />
                <ul>
                    <li>
                        <div class="box">
                            <p>少しですがまとめました。ご覧ください<a class="button" href="<?php echo esc_url( home_url('/covid19/')); ?>">こちら</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="pagenation">
            <!-- ページネーション　スタート -->
            <div class="nav-links">
                <a class="page-prev" href="<?php echo esc_url( home_url('/pregnancy/')); ?>"><span class="px16">SLEと妊娠・出産</span></a>
                <a class="page-next" href="<?php echo esc_url( home_url('/jobschool/')); ?>">仕事と学校</a>
            </div>
            <!-- ページネーション　終わり -->
        </section>

    <?php endwhile; endif;?>
</main>
<?php get_footer(); ?>