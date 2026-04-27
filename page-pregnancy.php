<?php get_header(); ?>
				<!-- Main -->
				<main id="main">
					<section class="BGwhite catch-copy">
                        <h2 class="title2">SLEと妊娠・出産</h2>
                        <p class="title-text">妊娠・出産を考えたときの“はじめの一歩”</p>	
                    </section>

					<!-- 私たちの未来 -->
					<section class="BGpink future">
						<figure>
							<img class="sle-tell-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flower.png" alt="一輪の花">
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

					<section class="white medicine_width">
						妊娠に関わる抗体検査
                        抗リン脂質抗体、抗SS-A抗体、抗SS-B抗体を調べる
                        抗リン脂質抗体ができると血液が固まりやすいので胎盤の血液循環が悪くなり妊娠しても流産や死産、早産をくりかえす場合がある

                        抗SS-A抗体が陽性だとまれに胎児の心臓に高度の心ブロックという障害が起こる
                        抗SS-A抗体、抗SS-B抗体が母体から胎盤を通じて胎児に移行し新生児ループスを発症させることがある。症状は一過性。

					</section>

					<section class="pagenation">
						<!-- ページネーション　スタート -->
						<div class="nav-links">
							<a class="page-prev" href="<?php echo esc_url( home_url('/gappeisyo/')); ?>"><span class="px16">起こりやすい合併症</span></a>
							<a class="page-next" href="<?php echo esc_url( home_url('/qa/') ); ?>">よくある質問</a>
						</div>
						<!-- ページネーション　終わり -->
					</section>

<?php get_footer(); ?>