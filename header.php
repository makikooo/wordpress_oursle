<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
        <!-- Google tag (gtag.js) SEO -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-6EFCJLN9JT"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-6EFCJLN9JT');
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WPDVZ44N');</script>
        <!-- End Google Tag Manager -->

        
		<?php wp_head(); ?> <!-- タイトル -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="keywords" content="わたしたちのSLE,患者サイト,全身性エリテマトーデス,患者,SLE,難病,膠原病,免疫">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="google-site-verification" content="qIH9dMDogsJGKGM9sRwSUBv87jedXALeSX-X3WdGabw" />
		<!-- Adobe fonts -->
        <script>
            (function(d) {
                var config = {
                kitId: 'qnf2grf',
                scriptTimeout: 3000,
                async: true
                },
                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
            })(document);
        </script>
        <!-- <link rel="stylesheet" href="https://use.typekit.net/qnf2grf.css"> -->
        <?php wp_head(); ?> 
	</head>
	<body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPDVZ44N"
                height="0" width="0" style="display:none;visibility:hidden">
            </iframe>
        </noscript>
        
        
        
        <div class="container">
            <header class="header">
                <div class="logo-title-box">
                    <a href="<?php echo esc_url( home_url() ); ?>"><img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>
                    <div class="logo_right">
                        <h1 class="logo-title"><a href="<?php echo esc_url( home_url() ); ?>">SLE 全身性エリテマトーデス</a></h1>
                        <p class="logo-subtitle"><a href="<?php echo esc_url( home_url() ); ?>">患者目線の情報サイト</a></p>
                    </div>
                </div>						        
                <div class="header_flex">
                    
                    <nav class="list-box pc-only">
							<ul class="nav_list-pc">
								<li class="has-child nav_item-pc">SLEとは
									<ul>
                                        <li><a href="<?php echo esc_url( home_url('/aboutsle/') ); ?>">SLEとは</a></li>
                                        <li><a href="<?php echo esc_url( home_url('/symptoms/') ); ?>">SLEの症状</a></li>
                                        <li><a href="<?php echo esc_url( home_url('/gappeisyo/') ); ?>">起こりやすい合併症</a></li>
                                        <li><a href="<?php echo esc_url( home_url('/sindan_info/') ); ?>">SLEの診断</a></li>
                                        <li><a href="<?php echo esc_url( home_url('/treatment_index/') ); ?>">SLEの治療</a></li>
									</ul>
								</li>
								<li class="has-child nav_item-pc">SLEと付き合う
									<ul>
										<li><a href="<?php echo esc_url( home_url('/qa/') ); ?>">お悩みQ＆A</a></li>
										<li><a href="<?php echo esc_url( home_url('/jobschool/') ); ?>">仕事・学校</a></li>
										<li><a href="https://tayori.com/feedback/ad1d76b8d521d8c6bb5bb54b0fac796046b5b30b/">アンケート</a></li>
										<li><a href="<?php echo esc_url( home_url('/enquete_info/') ); ?>">アンケート結果</a></li>
										<li><a href="<?php echo esc_url( home_url('/withsle_index/') ); ?>">付き合ういいコツ</a></li>
									</ul>
								</li>
								<li class="nav_item-pc"><a href="<?php echo esc_url( home_url('/friend/') ); ?>">SLE仲間とつながる</a></li>
								<li class="has-child nav_item-pc">お役立ちニュース
									<ul>
										<li><a href="<?php echo esc_url( home_url('/tokuteisikkann/') ); ?>">特定疾患受給者証の便利な使い方</a></li>
										<li><a href="<?php echo esc_url( home_url('/nanbyouteate/') ); ?>">難病手当</a></li>
								</ul>
								</li>							
								<li class="nav_item-pc"><a href="<?php echo esc_url( home_url('/aboutme/') ); ?>">わたしのこと</a></li>
								<li class="nav_item-pc"><a href="<?php echo esc_url( home_url('/contact/') ); ?>">お問い合わせ</a></li>
								<li class="nav_item-pc"><a href="<?php echo esc_url( home_url('/search/') ); ?>">サイト内検索</a></li>
							</ul>
					</nav>

                    <!-- ★ハンバーガーメニュー -->
                    <div class="nav sp_only">
                        <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->						
                        <input id="drawer_input" class="drawer_hidden" type="checkbox">
                
                        <!-- ハンバーガーアイコン -->
                        <label for="drawer_input" class="drawer_open"><span></span></label>
                
                        <!-- メニュー -->
                        <nav class="nav_content">
                            <div class="nav-box">
                                <a href="<?php echo esc_url( home_url() ); ?>"><img class="nav-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt=""></a>
                                <p class="nav-text">笑って生きていくために一緒に考えよう</p>
                                <div class="menu_flex">
                                    <?php
                                    wp_nav_menu([
                                        'theme_location' => 'header_menu',
                                        'container'      => false,
                                        'menu_class'     => 'nav_list', 
                                        'depth'          => 2,
                                        'fallback_cb'    => false,
                                    ]);
                                    ?>
                                </div>
                                <picture class="x_wrapper">
                                    <a href="https://x.com/SLE_makikoooo?ref_src=twsrc%5Etfw"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/twitter.png" alt="X"></a>
                                </picture>
                                <a class="to_contact" href="<?php echo esc_url( home_url('/contact/') ); ?>">お問い合わせ</a>
                                <!-- ★ヘッダー検索フォーム -->
                                <form role="search" method="get" class="header-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <input
                                        type="search"
                                        class="header-search-field"
                                        placeholder="サイト内検索"
                                        value="<?php echo get_search_query(); ?>"
                                        name="s"
                                    />
                                    <button type="submit" class="header-search-submit">検索</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>

