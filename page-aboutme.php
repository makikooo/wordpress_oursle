<?php get_header(); ?>
	<!-- Main -->
    <main>
        <section class="BGwhite1 catch-copy">
            <h2 class="title2">わたしについて</h2>
            <p class="title-text">同じ悩みを持つ人へ、伝えたいこと</p>	
        </section>
        <section class="BGpink future">
            <figure>
                <img class="sle-tell-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/flower.png" alt="一輪の花">
            </figure>							
        </section>
        <section class="BGwhite text">
            <!-- パンくずリスト　スタート -->
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
            <!-- パンくずリスト　終わり -->

            <div class="comment-outer">
                <p class="comment">私は「まきこ」と申します。<br>
                    よろしくお願いいたします。<br>
                    <br>
                    わたしたちのSLEを立ち上げたのは、SLEで悲観的になりすぎないで少しでも笑って暮らせれるようになって欲しい気持ちを込めています。<br>
                    わたしも発症すぐと調子が悪い時は悲観的になってしまいますが、楽しく生きることを心がけています。<br>
                    みなさまにとって、ご家族の方々や関係者の方にとってSLEの理解が深まり過ごしやすい人生になることを願っています。<br>
                    <br>
                    <br>
                    わたしのことを少し紹介します。<br>
                    私はSLE患者です。<br>
                    2005年の春に皮疹と倦怠感を感じ皮膚科にて膠原病と診断を受けました。<br>
                    のちに腎臓内科にて精密検査をしてから、全身性エリテマトーデスと診断されました。<br>
                    <br>
                    25ミリのプレドニンから始まり、ゆっくりゆっくり減量していき、2019年春よりプラケニルを服用するようになってから<br>
                    プレドニンが5ミリを切るようになりました。<br>
                    5ミリになるまで長い時間がかかりました。<br>
                    <br>
                    2022年にはプレドニン2ミリに減量できました<br>
                    わたしのSLEのパターンではプレドニン0を目指すのは難しいと言われています。<br>
                    2025年12月現在、プレドニン2ミリのままですが寛解期で倦怠感も皮疹も少なく済んでいます。<br>
                </p>
            </div>
            <div class="to_contact">
                <a class="to_contact_link" href="<?php echo esc_url( home_url('/contact/') ); ?>">お問い合わせは<br>こちらから</a>
            </div>
        </section>
    </main>
<?php get_footer(); ?>