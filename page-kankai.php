<?php get_header(); ?>
				<!-- Main -->
				<main id="kankai">
					<section class="BGwhite catch-copy">
						<h2 class="title2">社会的寛解</h2>
						<p class="title-text">社会的寛解とは何か、わかりやすく整理</p>	
					</section>
					<section class="BGpink future">
						<figure>
							<img class="sle-tell-img" src="<?php echo esc_url(get_template_directory_uri() ); ?>/assets/images/flower.png" alt="一輪の花">
						</figure>							
					</section>
					
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

					<section class="BGwhite kankai_content">
						<h3>社会的寛解とは</h3>
						<p class="kankai_text">
                            SLEは慢性の疾患なので完治してSLEがなくなることはありません。<br>
                            わたしたちは<span class="highlighter bold">治療の目標</span>を病気がコントロールされてSLEの症状がない状態である寛解を目指していきます。<br>
                            さらに<span class="highlighter bold">仕事や家事や妊娠、出産など健康な方と変わらない社会活動を行える状態</span>が<span class="bold">社会的寛解</span>と言われています。<br>
                            <br>
                            それだけ治療法が進歩しているが、重症な方もいらっしゃいます。<br>
                            早く症状に気づいて適切な治療に繋げることが大切です。
                        </p>
                        <section class="references">
                            <h2 class="references_title">参考・出典</h2>
                            <p class="references_item">
                                出典：NHK「きょうの健康～SLE特集～」（放送日：2025年12月9日）<br>
                                監修・解説：渥美達也 先生
                            </p>
                        </section>

						<div class="square">
							<a href="#first" class="square_link">アンケート</a>
							<a href="#kanjasuu" class="square_link">患者数・男女比・発症年齢</a>
							<a href="#cause" class="square_link">SLEの原因</a>
							<a href="#sistem" class="square_link">免疫の異常とは</a>
							<a href="#progress" class="square_link">長期的な経過</a>
						</div>
 
						<h4 class="kankai_subtitle" id="first">アンケート</h4>
						<p class="kankai_text">
							私は2025年12月現在、寛解とは言われていますが、SLEの症状がない状態ではありません。<br>
                            家事や仕事もできないことも多く社会的寛解にはなっていないのでSLE患者さんは社会的寛解ができているのかとても気になりました。<br>
                            そこで、簡易的にXにてアンケートを取ってみました。
						</p>
						<ul class="kankai_text">
                            <li>33人の方からご協力いただけました</li>
                            <li>うち、16人が社会的寛解になっている</li>
                            <li>うち、17人が社会的寛解になっていない</li>
                        </ul>
                        <div class="chart-box04">
                            <h4>社会的寛解別</h4>
                            <div class="chart-area02">
                                <canvas id="chart04"></canvas>
                            </div>
                        </div>
						<p class="kankai_sub_text">
							（ご協力いただきました皆さま、ありがとうございました）</p>
					</section>

					<section class="pagenation">
						<!-- ページネーション　スタート -->
						<div class="nav-links">
							<a class="page-prev" href="<?php echo esc_url( home_url() ); ?>">TOP PAGE</a>
							<a class="page-next" href="<?php echo esc_url( home_url('/symptoms/')); ?>">SLEの症状</a>
						</div>
						<!-- ページネーション　終わり -->
					</section>

<?php get_footer(); ?>