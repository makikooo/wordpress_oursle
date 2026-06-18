<?php get_header(); ?>
<!-- Main -->
    <main id="main">
        <section class="white catch-copy">
            <h2 class="title">わたしたちのSLE</h2>
            <p class="title-text">一緒に笑って生きていくために</p>
            <img class="hero-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero.png" alt="談笑している女性たち">
        </section>

        <!-- 私たちの未来 -->
        <section class="pink future">
                <h3 class="future-title">わたしたちの未来</h3>
                <p class="future-text">SLEになって悲観的になりすぎていませんか？<br>あなたの幸せのために小さな喜びを見つけて、<br class="sp-only">生きるコツを一緒に見つけませんか</p>
        </section>

        <section class="white tell">

            <!-- 更新のお知らせ -->
            <div class="info_flex">
                <div class="top_information_box">
                    <h4 class="information-title">お知らせ</h4>
                    <table class="information_table">
                        <?php
                            // お知らせを取得（お知らせがカスタム投稿の想定）
                            $args = array(
                                'post_type'      => 'post',   // ← お知らせのスラッグ。違うならここを変更
                                'posts_per_page' => 3,        // 表示件数
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                            );
                            $post_query = new WP_Query($args);
                            
                            if ($post_query->have_posts()) :
                                while ($post_query->have_posts()) : $post_query->the_post();
                                
                                // ▼リンク先URL
                                // Page Links To を使っている場合 → get_permalink() が自動で書き換わるのでそのままでOK
                                $link_url = get_permalink();
                                
                                // プラグインなしで、カスタムフィールドにURLを入れている場合はこんな感じ：
                                // $custom_link = get_post_meta(get_the_ID(), 'news_link_url', true);
                                // $link_url    = !empty($custom_link) ? esc_url($custom_link) : get_permalink();
                                ?>
                            <tr>
                                <th class="info_date">
                                    <a class="informatiln_link" href="<?php echo esc_url($link_url); ?>">
                                        <?php echo esc_html(get_the_date('Y.m.d')); ?>
                                    </a>
                                </th>
                                <td class="info_message">
                                    <a class="informatiln_link" href="<?php echo esc_url($link_url); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </td>
                            </tr>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                                else :
                            ?>
                        <tr>
                            <td colspan="2">現在、お知らせはありません。</td>
                        </tr>
                        <?php endif; ?>
                    </table>
                    <div class="information_more">
                        <?php
                            $page_for_posts = (int) get_option('page_for_posts');
                            if ($page_for_posts) {
                            $post_archive_url = get_permalink($page_for_posts);
                            } else {
                            $post_archive_url = home_url('/blog/'); // ←好きな固定URLに変更
                            }
                        ?>
                        <a class="information_more-link" href="<?php echo esc_url($post_archive_url); ?>">
                            もっと見る<span class="information_more-arrow">＞</span>
                        </a>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="green future aboutsle">
            <div class="subtitle_wrapper">
                <h3 class="subtitle_title">SLEとは</h3>
                <p class="subtitle_sle_text">
                    SLEは、免疫が誤作動しまうことで、全身のいろいろな場所（関節・皮膚・内臓など）に不調が出る膠原病のひとつです。重くなると、命に関わることもある病気です。<br>
                    しかし、ここ十数年で新しい薬がどんどん出てきていて、SLEの方の10年生存率は今では90％を超えています。今は、「健康な人とほとんど同じように社会生活を送れる状態（社会的寛解）」を目標にできる時代になっています。<br>
                    <br>
                    大事なのは、早めにちゃんと診断と治療を受けることです。<br>
                    「ちょっと変だな」「気になる症状が続くな」と思ったら、ガマンせずに早めにかかりつけの病院を受診してください。<br>
                    <br>
                    SLEと診断されたあとも、定期的に通院して、お薬を続けていくことで、安定した状態を長く保てる人が増えています。
                </p>
                <a class="to_aboutsle_link" href="<?php echo esc_url( home_url('/aboutsle/') ); ?>">詳しくみる</a>
            </div>                            
        </section>
        <section class="white tell">
            <img class="tell-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flower_green.png" alt="一輪の花">
            
            
            <!-- 伝えたいこと -->
            <h3 class="message_title">わたしから伝えたいこと</h3>
            <p class="message_by_me highlighter bold">
                <a href="<?php echo esc_url( home_url( '/kankai/' ) ); ?>">社会的寛解</a>を目指して<br class="sp_only">皆さんの気持ちが落ち着きますように。
            </p>
            <div class="to_kankai_box">
                <a class="to_kankai_link" href="<?php echo esc_url( home_url('/kankai/') ); ?>">社会的寛解とは<span class="bold"> こちら</span></a>
            </div>

            <ul class="tell-box">
                <li class="utagai">
                    <div class="border">
                        <h4 class="tell-title">疑いと言われた方へ</h4>
                        <!-- モーダル1 -->	
                        <div class="modal-001__wrap">
                            <input type="radio" id="modal-001__open" class="modal-001__open-input" name="modal-001__trigger"/>
                            <label for="modal-001__open" class="modal-001__open-label">＋</label>
                            <input type="radio" id="modal-001__close" name="modal-001__trigger"/>
                            <div class="modal-001">
                                    <div class="modal-001__content-wrap">
                                            <label for="modal-001__close" class="modal-001__close-label">×</label>
                                            <div class="modal-001__content">
                                                難病である全身性エリテマトーデスの疑いです。<br><br>
                                            
                                                と言われたらとても不安ですよね<br><br>
                                                
                                                主治医からの言葉をしっかりお聞きになり<br>
                                                どう付き合ったらいいのか<br>
                                                どんな薬があるのか<br>
                                                もしくはどんな薬がないのかを<br>
                                                尋ねられるとるといいかと思います。<br><br>
                                                
                                                膠原病内科のある大きな病院に紹介状を書いてもらい<br>
                                                受診して検査をすることも一つの手かもしれません<br><br>
                                                
                                                あと、大事なこととして、無理をせずにいてくださいね<br>
                                                ストレスになるようなことは避けてください<br>
                                                医療費がかかると思いますので、高額療養費制度を利用されることをお勧めします
                                            
                                            </div>
                                    </div>
                                    <label for="modal-001__close">
                                            <div class="modal-001__background"></div>
                                    </label>
                            </div>
                    </div>
                </li>
                <li class="sindan">
                    <h4 class="tell-title">診断を受けたばかり方へ</h4>
                    <!-- モーダル2 -->
                    <div class="modal-002__wrap">
                        <input type="radio" id="modal-002__open" class="modal-002__open-input" name="modal-002__trigger"/>
                        <label for="modal-002__open" class="modal-002__open-label">＋</label>
                        <input type="radio" id="modal-002__close" name="modal-002__trigger"/>
                        <div class="modal-002">
                                <div class="modal-002__content-wrap">
                                        <label for="modal-002__close" class="modal-002__close-label">×</label>
                                        <div class="modal-002__content">
                                            診断を受けたばかりだと絶望感でいっぱいなんじゃないでしょうか？<br><br>

                                            私が診断を受けたばかりの時は寝たきりのように寝込んでいたので子育てがうまくいかずに悔しい思いをしました。<br><br>
                                            
                                            でもゆっくりゆっくり時間をかけていたら健常者とまではいかなくても、就労支援で利用できるようになってます。<br>
                                            <br>
                                            今すぐに治したい気持ちは分かりますが焦ると本当によくないです。<br><br>
                                            
                                            気長に気長にいてくださいね<br><br>
                                            
                                            その中でも気になるのが医療費ですよね。<br>
                                            SLE(全身性エリテマトーデス)です<br>
                                            とお医者さんから言われましたら、特定疾患の医療券の手続きを早めにしてください。<br>
                                            昨年の世帯の所得によって金額は変わりますが難病に関しての診察代、薬代などが月に決まったお金までしか払わなくていい制度があります<br>
                                            特定疾患治療研究事業の医療費助成制度と言います。<br><br>
                                            
                                            病院のソーシャルワーカーさんに聞くのが一番話が進みやすいかと思います</div>
                                </div>
                                <label for="modal-002__close">
                                        <div class="modal-002__background"></div>
                                </label>
                        </div>
                </div>
                </li>
                <li class="family">
                    <h4 class="tell-title">ご家族や身近な方へ</h4>
                    <!-- モーダル3 -->
                    <div class="modal-003__wrap">
                        <input type="radio" id="modal-003__open" class="modal-003__open-input" name="modal-003__trigger"/>
                        <label for="modal-003__open" class="modal-003__open-label">＋</label>
                        <input type="radio" id="modal-003__close" name="modal-003__trigger"/>
                        <div class="modal-003">
                                <div class="modal-003__content-wrap">
                                        <label for="modal-003__close" class="modal-003__close-label">×</label>
                                        <div class="modal-003__content">
                                            ご家族や身近な方に「難病と診断されたり」、「疑いがある」と医者から言われるととても心配になると思います。<br><br>

                                            この病気は感染しません。<br>
                                            ご家族や身近な方のご協力やご理解がないと生活しにくく、とても精神的に辛い病気です。<br><br>

                                            全身性エリテマトーデスとは、免疫が異常を起こし自分の細胞をやっつけてしまう病気です。<br>
                                            頭の先から足の先まで、病名の通り、全身に症状が出ます。<br>
                                            皮膚、内臓、神経、関節などその人によって症状は違います。<br>
                                            倦怠感であるダルさはとてもダルいです。理解しがたいくらいダルいです。<br><br>

                                            寝ないとダルさが取れないので寝ることが多いですがなまけてるわけでは有りません。<br>
                                            治療の一環として心広く見守っていただけたらと思います。<br>
                                            患者様の未来を考えて不安になり過ぎずに<br>
                                            見守り、手助けをしていただけるとご本人も喜びになり生活がしやすくなるかと思います。</div>
                                </div>
                                <label for="modal-003__close">
                                        <div class="modal-003__background"></div>
                                </label>
                        </div>
                </div>
                </li>
            </ul>
        </section>
        <!-- スライド -->
        <section>
            <div class="slide">
                <img class="slide_img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sample.png">
            </div>
        </section>
<?php get_footer(); ?>
					