<?php get_header(); ?>
				<!-- Main -->
				<main id="main">
					<section class="BGwhite catch-copy">
                        <h2 class="title2">合併症</h2>
                        <p class="title-text">知っておくと安心：合併症のポイントとサイン</p>	
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

					<section class="BGwhite cellcept medicine_width">
						<div class="flex">
                        <div class="kihonjouhou_left">
                            <div class="medicine_name_box">
                            <p class="syurui">合併症</p>
                            </div>
                        </div>
                        </div>
                                    <div class="index_box">
                        <p class="index">index</p>
                        <ul>
                            <li><a href="#kourin">抗リン脂質症候群</a></li>
                            <li><a href="#kansen">感染症</a></li>
                            <li><a href="#sinkekkan">心血管イベント（CVD）</a></li>
                        </ul>
                        </div>
                                </section>
                    <section class="BGcream" id="kourin">
                        <div class="kouka_wrapper">
                        <h5 class="medicine_title">抗リン脂質症候群</h5>
                        <p class="kouka_subtitle">
                                            抗リン脂質抗体という自己抗体が原因となって、動脈や静脈の血が固まる血栓症や習慣性流産などの妊娠合併症を発症する病気です。<br>
                            全身性エリテマトーデス患者の16%くらいに抗リン脂質抗体症候群が合併するといわれています。<br>
                        </p>
                        </div>
                    </section>

                    <section class="BGwhite kansen" id="kansen">
                        <h5 class="medicine_title">感染症</h5>
                        <p class="tiryou_tokutyou">
                                        副腎皮質ホルモンや免疫抑制剤に共通の副作用として、感染症があります。<br>
                                        SLEでは最も頻度の高い合併症です。<br>
                                        一般的にはプレドニン20mg/日以上の中高量では日和見感染が多いです。
                                        真菌症（カンジダ）などの発症リスクが増加します。
                                    </p>
                    </section>

                    <section class="BGcream" id="sinkekkan">
                        <div class="fukusayo_wrapper">
                        <h5 class="medicine_title">心血管イベント（CVD）</h5>
                        <p class="kouka_subtitle">
                            心筋梗塞、心不全、脳血管障害のリスクがあります。<br>
                                            心血管イベントは若年者や病気の初期の時でも発症率が高いです。<br>
                                            SLEの病態による血管壁での自己免疫、炎症反応が推測されています。<br><br>

                                            血圧、HbA1c、BMIや胸部X戦や心電図を定期的に検査することが必要です
                        </p>
                        </div>
                    </section>

					<section class="pagenation">
						<!-- ページネーション　スタート -->
						<div class="nav-links">
							<a class="page-prev" href="<?php echo esc_url( home_url('/aboutmedicine/')); ?>">薬について</a>
							<a class="page-next" href="<?php echo esc_url( home_url('/pregnancy/')); ?>"><span class="px16">治療中の妊娠・出産</span></a>
						</div>
						<!-- ページネーション　終わり -->
					</section>
                        </main>

					<?php get_footer(); ?>