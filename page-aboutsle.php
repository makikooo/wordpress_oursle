<?php get_header(); ?>
				<!-- Main -->
				<main>
					<section class="BGwhite catch-copy">
						<h2 class="title2">SLEとは</h2>
						<p class="title-text">まず知っておきたいSLEのこと</p>	
					</section>
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


					<section class="BGwhite about_sle_content">
						<h3>SLEとは</h3>
						<p class="about_sle_text">
                            全身性エリテマトーデスは、細菌やウイルスと戦う免疫機能が異常
							をきたし、自分自身の身体を傷つけてしまう「<ruby>膠原病<rt>こうげんびょう</rt></ruby>」の一つです。<br>

                            英語の病名 Systemic Lupus Erythematosus の頭文字をとり
                            <ruby>SLE<rt>エスエルイー</rt></ruby>と呼ばれます。<br>
                            身体のさまざまな場所・臓器に症状が
                            あらわれることから Systemic（全身）、オオカミに噛まれたような
                            赤い紅斑（腫れ）が頬にできることから Lupus（ラテン語でオオ
                            カミ）、Erythematosus（紅斑）と命名されています。
                            <br>
                            全身性と名前の通り 特徴的に関節、皮膚、腎臓、血管、神経など全身の臓器に障害を起こしやすいです。
</p>
						<div class="square">
							<a href="#first" class="square_link">初期症状</a>
							<a href="#kanjasuu" class="square_link">患者数・男女比・発症年齢</a>
							<a href="#cause" class="square_link">SLEの原因</a>
							<a href="#sistem" class="square_link">免疫の異常とは</a>
							<a href="#progress" class="square_link">長期的な経過</a>
						</div>

						<h4 class="about_sle_subtitle" id="first">初期症状</h4>
						<p class="about_sle_text">
							三大初期症状は<span class="highlighter">発熱、関節炎、皮疹</span>です
						</p>
						<div class="aboutsle_flex">
							<img class="aboutsle_img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fever.png" alt="発熱のイメージ">
							<img class="aboutsle_img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/jointpain.png" alt="関節痛のイメージ">
							<img class="aboutsle_img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/rash.png" alt="皮疹のイメージ">
						</div>
						<p class="about_sle_text">その他の初期症状を調べてみました</p>
						<p class="about_sle_text">
							リンパの腫れ<br>
							脱毛<br>
							体のだるさ<br>
							脱力感などなど<br>
							（ご協力いただきました皆さま、ありがとうございました）</p>
						
							
						<h4 class="about_sle_subtitle" id="kanjasuu">
							患者数・男女比・発症年齢
						</h4>
						<h5 class="about_sle_thirdtitle">患者数</h5>
						<p class="about_sle_text">
							指定難病として申請をしている患者さんは2025年で約65,000人＊います。<br>
							しかし、申請をしていない患者さん、治療を受けていない患者さんもおり、実際には約10万の患者さんがいると推測されています。<br>
							＊特定医療費（指定難病）受給者証所持者数
						</p>
						<h5 class="about_sle_thirdtitle">男女差</h5>	
						<p class="about_sle_text">
							男女比は1：9で、女性が多いです。
						</p>
						<img class="people_img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people.png" alt="９：1の女性が多い状態">
                        <h5 class="about_sle_thirdtitle">発症年齢</h5>
                        <p class="about_sle_text">
							10代から70歳以上まで、幅広い年齢の患者さんが治療を受けられています。<br>
							発症年齢も幅広いですが、特に妊娠や出産が可能な20～40代の女性に多いとされています。
						</p>

						<h4 class="about_sle_subtitle" id="cause">
							SLEの原因
						</h4>
						<p class="about_sle_text">
							はっきりした原因はわかっていません。<br>
                            発症に関わる遺伝的要因（遺伝子）それに加えてなんらかの環境要因が複合的に関わって発症すると考えられています。<br>
							なんらかのきっかけによって病気が起こったり、悪化したりすることが考えられます。
							きっかけや誘因には大きく分けて４つあり複雑に組み合わさっていると考えられています。<br>
							<span class="bold highlighter">【環境要因】</span>　紫外線に浴びたり、喫煙、ウイルスや細菌感染、寒冷刺激、外傷、手術、妊娠・出産、薬剤、ストレス、特定の薬、ケガや手術が想定されています。<br>
							<span class="bold highlighter">【遺伝的要因】</span>　病気と関連する遺伝子が幾つか報告されています<br>
							<span class="bold highlighter">【免疫の異常】</span>　自分の体を免疫が攻撃してしまう。<br>
							<span class="bold highlighter">【性ホルモン】</span>発症時期が20〜30代が多いことから性ホルモンが影響されていると考えられてます。<br>
                            日光に長時間にさらされることで発症のきっかけになることもあり、<br>
                            たばこを吸う人は吸わない人よりも発症率が高くなっています。
						</p>

						<h4 class="about_sle_subtitle" id="sistem">
							免疫の異常とは
						</h4>
						<p class="about_sle_text">
							自分の体を自分の免疫が攻撃してしまう、自己免疫反応によりさまざまな炎症が起こります。<br>
							抗体はウイルスや細菌などにくっついて捕まえ、体を守ります。<br>
							SLEなどの自己免疫疾患では血液中に抗核抗体があると、自分の細胞内の核の成分を攻撃し、くっついて免疫複合体を作ります。<br>
							免疫複合体が血液に乗って体内を流れ、腎臓や皮膚などにくっついたり、たまったりして炎症が起こます。
						</p>
						<h4 class="about_sle_subtitle" id="progress">
							長期的な経過
						</h4>
						<p class="about_sle_text">
							長期的な経過をたどる病気です。<br>
							症状が悪化する時を活動期、症状が軽い時を寛解期といいます。<br>
							症状が落ち着いてからも薬を服用しないといけないのでわたしたちには根気が必要です。<br>
							症状が落ちつていれば健康な人とほとんど変わらない日常生活を送れます。<br>
							病気とうまく付き合いながら暮らすのは変わりないですが仕事・学校や家事、育児などを行えます。<br><br>

							症状がぶり返す再燃の可能性もあるので前触れに気付くように体調をこまめにチェックし、簡単な日記などを利用して体調の変化を把握し、悪化しても素早い対処ができます。<br>
							1日の中でも症状が変動するので細かい変化に神経質になりすぎないようにしてみてください。
						</p>
					</section>

					<section class="pagenation">
						<!-- ページネーション　スタート -->
						<div class="nav-links">
							<div></div>
							<a class="page-next" href="<?php echo esc_url( home_url('/symptoms/') ); ?>">SLEの症状</a>
						</div>
						<!-- ページネーション　終わり -->
					</section>

<?php get_footer(); ?>