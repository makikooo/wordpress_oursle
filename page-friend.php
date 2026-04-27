<?php get_header(); ?>
    <main>
        <section class="BGwhite1 catch-copy">
            <h3 class="title2">仲間とつながる</h3>
            <p class="title-text">ひとりじゃないと思えるつながりの場所</p>	
        </section>
        <section class="BGpink faq-title">
            <figure>
                <img class="sle-tell-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flower.png" alt="一輪の花">
            </figure>
        </section>

        
        <section class="freind-outer BGwhite1">
            <div class="inner">
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

                <h5 class="medicine_title">仲間探しの方法</h5>
                <p>
                    保健所や病院の患者会などでも患者仲間を見つけれるかと思います。<BR>
                    SNSでも仲間を増やせれます。<BR><BR>
                    LINEの「オープンチャット」はご存知でしょうか？<br>
                    メリットとして匿名で参加でき、いつでも退会ができます。<br><br>
                    私が管理しているオープンチャットがあり、全身性エリテマトーデスの患者の方やご家族や身近な方の集まりなので楽しく、共感しながら話をしています。<BR>
                    よかったら参加してみませんか？<br>いつでもお待ちしています。<BR>
                    <a class="button chat" href="https://line.me/ti/g2/vthSUWGZnAREorbZw_pkxZ1umVSj0lhslOhGsA?utm_source=invitation&utm_medium=link_copy&utm_campaign=default" target="_blank" rel="noopener noreferrer">オープンチャット<br>「SLE🍀全身性エリテマトーデス✨<br>Happy to be with you」はこちら</a>
                </p>
            </div>
        </section>

        <section class="BGcream" id="time">
            <div class="fukusayo_wrapper">
                <h5 class="medicine_title">てくてくぴあねっと</h5>
                <p>闘病しながら子育てをする方々や、その家族を応援する団体<BR>
                    <a class="button chat" target="_blank" href="https://tekutekupeer.com/" target="_blank" rel="noopener noreferrer">てくてくぴあねっと</a>
                </p>
                
        </section>
            
        <section class="pagenation">
            <!-- ページネーション　スタート -->
            <div class="nav-links">
                <a class="page-prev" href="<?php echo esc_url( home_url('/withsle_hint/') ); ?>"><span class="px16">SLEと付き合うコツ</span></a>
                <a class="page-next" href="<?php echo esc_url( home_url('/public_info/') ); ?>"><span class="px16">公共機関からの支援</span></a>
            </div>
            <!-- ページネーション　終わり -->
        </section>
    </main>
<?php get_footer(); ?>