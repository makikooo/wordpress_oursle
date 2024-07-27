<?php
    session_start();
    // セッションとはサーバーにデータを保存する(ブラウザごとに) セッションスタートの関数
    // 処理の先頭にセッションの宣言をする
    $errmessage = array();
    // エラーメッセージの初期化
    $mode ='input';
    if( isset($_POST['back']) && $_POST['back']){ // 戻るボタン押した時
       
        // 何もしない 
        // backがあり、backの中身がある時
    } else if( isset($_POST['confirm']) && $_POST['confirm'] ){ // 確認ボタンクリックの時

        if(!$_POST['fullname']){ // 名前欄がからだった時
            $errmessage[] = "名前を入力してください";
        } else if (mb_strlen($_POST['fullname']) > 100 ){ // 文字数が100文字以上のときは
            $errmessage[] = "名前は100文字以内にしてください";
        }
        $_SESSION['fullname'] = htmlspecialchars($_POST['fullname'], ENT_QUOTES); //セッションに保存している htmlspecialchars関数でプログラムコードを無害化（サニタイズ）する処理



        if(!$_POST['email']){ // メールアドレス欄がからだった時
            $errmessage[] = "メールアドレスを入力してください";
        } else if (mb_strlen($_POST['email']) > 200 ){ // 文字数が200文字以上のときは
            $errmessage[] = "メールアドレスは200文字以内にしてください";
        } else if (!filter_var($_POST['email'])) { // Eメール形式ではないときに
            $errmessage[] = "メールアドレスが不正です";
        }
        $_SESSION['email']    = htmlspecialchars($_POST['email'], ENT_QUOTES); //セッションに保存している

        if(!$_POST['message']){ // お問い合わせ欄がからだった時
            $errmessage[] = "お問い合わせ内容を入力してください";
        } else if (mb_strlen($_POST['message']) > 500 ){ // 文字数が500文字以上のときは
            $errmessage[] = "お問い合わせは500文字以内にしてください";
        } 
        $_SESSION['message']  = htmlspecialchars($_POST['message'], ENT_QUOTES); //セッションに保存している
        // modeの前に書くことで3つの値のセッションが保存している

        if($errmessage) {
            $mode = 'input';
        } else {
            $mode ='confirm';
        }
        
    } else if ( isset($_POST['send']) && $_POST['send']){ // 送信ボタン押した時
        $message =  "お問い合わせを受けつけました。\r\n"
                    ."名前:".$_SESSION['fullname']."\r\n"
                    ."email:".$_SESSION['email']."\r\n"
                    ."お問い合わせ内容：\r\n"
                    .preg_replace("/\r\n|\r|\n/","\r\n",$_SESSION['message']);
                    // \r\nと\rと\n/を\r\nに変換する関数(preg_replace)
                    // ピリオドで文字列を結合

        mb_language("ja");
        mb_internal_encoding("UTF-8");
        mb_send_mail($_SESSION['email'],'お問い合わせありがとうございます',$message);
        // 記入者へ確認メール
        mb_send_mail('info@全身性エリテマトーデス.com','ホームページからお問い合わせいただきました',$message);
        // 管理者宛にメール

        $_SESSION = array();
        // セッションを初期化
        $mode = 'send';
        
    } else { // GETできた時
        $_SESSION['fullname'] = "";
        $_SESSION['email']    = "";
        $_SESSION['message']  = "";
        // から文字の方が親切
        // もしくは
        // $_SESSION = array();
        // セッションを空にする（クリア＝初期化にする）  
    }
?>

<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<title>お問い合わせ - わたしたちのSLE</title>
		<meta charset="utf-8">
		<meta name="Description" content="SLE(全身性エリテマトーデス)を患っているみなさま、ご家族や身近な方々の情報スペースです">
		<meta name="keywords" content="わたしたちのSLE,患者サイト,全身性エリテマトーデス,患者,SLE,難病,膠原病,免疫">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="google-site-verification" content="qIH9dMDogsJGKGM9sRwSUBv87jedXALeSX-X3WdGabw" />
		<link rel="stylesheet" href="assets/CSS/sanitize.css">
		<link rel="stylesheet" href="assets/CSS/style.css">
		<link rel="icon" href="assets/images/logo.ico">
		<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
		<script>
			(function(d) {
				var config = {
					kitId: 'zeu1jfc',
					scriptTimeout: 3000,
					async: true
				},
				h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			})(document);
		</script>
	</head>
	<body>
			<div class="container" id="contact">
				<header class="header">
					<div class="logo-title-box">
						<a href="index.html"><img class="logo" src="assets/images/logo.png" alt="SLEロゴ"></a>
						<div class="logo_right">
							<h1 class="logo-title"><a href="index.html">SLE 全身性エリテマトーデス</a></h1>
							<p class="logo-subtitle"><a href="index.html">患者目線の情報サイト</a></p>
						</div>
					</div>						
					<nav class="list-box pc-only">
							<ul class="nav_list-pc">
								<li class="has-child nav_item-pc">SLEとは
									<ul>
											<li><a href="aboutsle.html">SLEとは</a></li>
											<li><a href="symptoms.html">SLEの症状</a></li>
											<li><a href="gappeisyo.html">起こりやすい合併症</a></li>
											<li><a href="sindan/sindan.html">SLEの診断</a></li>
											<li><a href="treatment/index.html">SLEの治療</a></li>
									</ul>
								</li>
								<li class="has-child nav_item-pc">SLEと付き合う
									<ul>
										<li><a href="withsle/Q&A.html">お悩みQ＆A</a></li>
										<li><a href="withsle/job&school.html">仕事・学校</a></li>
										<li><a href="https://tayori.com/feedback/a25d995c6a1c995bafa7b550273942e20fec4700/">アンケート</a></li>
										<li><a href="withsle/covid19.html">アンケート結果</a></li>
										<li><a href="withsle/withsle.html">付き合ういいコツ</a></li>
									</ul>
								</li>
								<li class="nav_item-pc"><a href="freind.html">SLE仲間とつながる</a></li>
								<li class="has-child nav_item-pc">お役立ちニュース
									<ul>
										<li><a href="news/tokuteisikkann.html">特定疾患受給者証の便利な使い方</a></li>
										<li><a href="news/nanbyouteate.html">難病手当</a></li>
								</ul>
								</li>							
								<li class="nav_item-pc"><a href="aboutme.html">私のこと</a></li>
								<li class="nav_item-pc"><a href="contact.php">お問い合わせ</a></li>
							</ul>
					</nav>
						

						<!-- ハンバーガーメニュー部分 -->
					<div class="nav tablet-only">
    
						<!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->						
							<span class="nav-toggle-btn_label">MENU</span>
							<input id="drawer_input" class="drawer_hidden" type="checkbox">
				
						<!-- ハンバーガーアイコン -->
						<label for="drawer_input" class="drawer_open"><span></span></label>
				
						<!-- メニュー -->
						<nav class="nav_content">
							<div class="nav-box">
								<img class="nav-logo" src="assets/images/logo.png" alt="">
									<h2>私たちのSLE</h2>
									<p class="nav-text">笑って生きていくために一緒に考えよう</p>
									<div class="menu_flex">
										<ul class="nav_list">
											<li class="nav_item"><a href="/index.html">トップ</a></li>
											<li class="nav_item"><a href="aboutsle.html">SLEとは</a></li>
											<li class="nav_item"><a href="symptoms.html">SLEの症状</a></li>
											<li class="nav_item"><a href="gappeisyo.html">合併症</a></li>
											<li class="nav_item"><a href="pregnancy.html">妊娠・出産</a></li>							
											<li class="nav_item"><a href="sindan/sindan.html">診断</a></li>
											<li class="nav_item"><a href="treatment/aboutMedicine.html">薬について</a></li>
										</ul>
										<ul class="nav_list">
											<li class="nav_item"><a href="withsle/withsle.html">SLEと付き合う</a></li>
											<li class="nav_item"><a href="withsle/Q&A.html">お悩みQ＆A</a></li>
											<li class="nav_item"><a href="withsle/covid19.html">アンケート結果</a></li>
											<li class="nav_item"><a href="freind.html">SLE仲間とつながる</a></li>
											<li class="nav_item"><a href="news/tokuteisikkann.html">特定疾患受給者票</a></li>							
											<li class="nav_item"><a href="aboutme.html">私のこと</a></li>
											<li class="nav_item"><a href="contact.php">お問い合わせ</a></li>
										</ul>
									</div>
								<picture>
									<a href="https://lin.ee/MzmPby4" class="line"><img src="assets/images/LINE.png" alt="ライン"></a>
									<a href="https://twitter.com/SLE_makikoooo?ref_src=twsrc%5Etfw"><img src="assets/images/twitter.png" alt="ツイッター"></a>
								</picture>
							</div>
						</nav>
					</div>		
				</header>
				<!-- Main -->
				<main>
					<section class="BGwhite1 catch-copy">
						<h2 class="title2">私たちのSLE</h2>
						<p class="title-text">笑って生きていくために一緒に考えよう</p>	
					</section>
					<section class="BGpink future">
						<h3 class="sub-title">お問い合わせ</h3>						
					</section>
					<section class="BGwhite text">
						<!-- パンくずリスト　スタート -->
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb__list"><a href="/"><img class="icon_home" src="assets/images/home.svg" alt="home">私たちのSLE(TOP PAGE)</a></li>
								<li class="breadcrumb__list">お問い合わせ</li>
							</ol>
						</nav>
						<!-- パンくずリスト　終わり -->
					</section>
                    <?php if( $mode == 'input') { ?>
                        <!-- 入力画面  POSTではない（GETということ）　-->
                    <section class="sec02_cannot">
                        <p class="contact_text">ご依頼・ご相談や、ホームページのご感想など<br>
                            お気軽にお問い合わせくださいませ。<br>
                            <span class="red">※</span>は必須項目です。</p>
                    </section>
                    <section class="sec03_contact">
                        <?php
                            if( $errmessage ){
                                echo '<div style="color:red;">';
                                echo implode('<br>', $errmessage );
                                echo '</div>';
                            }
                        ?>
                        <form action="./contact.php" method="post">  <!-- actionは次のファイル名　methodは情報が入っているのでpost -->
                            <table class="contact_table">
                                <tr class="contact_tr">
                                    <th class="contact_th"><label for="name">お名前<span class="red">※</span></label></th>
                                    <td class="contact_td"><input type="text" id="name" required="required" name="fullname" value="<?php echo $_SESSION['fullname'] ?>"></td> <!-- type,name,valueは必ず入れる valueはインプットタグの中の文字を入れる -->
                                </tr>
                                <!-- <tr class="contact_tr">
                                    <th class="contact_th"><label for="furigana">ふりがな</label></th>
                                    <td class="contact_td"><input type="text" id="furigana"></td>
                                </tr> -->
                                <tr class="contact_tr">
                                    <th class="contact_th"><label for="email">メールアドレス<span class="red">※</span></label></th>
                                    <td class="contact_td"><input type="email" id="email" required="required" name="email" value="<?php echo $_SESSION['email'] ?>"></td>  <!-- typeにemailにするとブラウザがemail方式以外をいう -->
                                </tr>
                                <!-- <tr class="contact_tr">
                                    <th class="contact_th"><label for="tel">電話番号</label></th>
                                    <td class="contact_td"><input type="text" id="tel"></td>
                                </tr> -->
                                <tr class="contact_tr">
                                    <th class="contact_th"><label for="text">お問い合わせ内容<span class="red">※</span></label></th>
                                    <td class="contact_td"><textarea id="text" cols="30" rows="10" name="message"><?php echo $_SESSION['message'] ?></textarea></td> <!-- cols横幅　rows行数 textareaの閉じタグがいる -->
                                </tr>
                            </table>
                            <!-- <div class="checkbox_box">
                                <input type="checkbox" id="check"><label for="check"><a href="privacy.html">個人情報保護方針</a>に同意する</label>
                            </div> -->
                            <input type="submit" name="confirm" value="送信する" class="to_about_me_button to_contact_button button"> <!-- typeはsubmitにする -->
                            
                            
                            <div class="send_text">
                                お問い合わせのご返信は2日以内(土日祝日以外)を心がけております。お客様のご利用環境、また迷惑メール対策等の設定により、お返事が届かない場合があります。「@全身性エリテマトーデス.com」もしくは「@xn--ick8aybee5knd7g4522au24ar60i.com」からのメール受信が可能な設定にしていただきますようお願いいたします。5日経過しても返信のない場合、大変お手数をおかけしますが再度お送りいただくよう、お願い申し上げます。
                            </div> 
                        </form>    
                    
                        <?php } else if ( $mode == 'confirm') { ?>
                        <!-- 確認画面 -->
                        <div class="contact_conf">
                            <form action="./contact.php" method="post" class="confirm_form">
                                <h3 class="confirm_title">
                                    入力の確認の上、送信を押してください。
                                </h3>
                                <table class="confirm_table">
                                    <tr>
                                        <th>名前  </th>
                                        <td><?php echo $_SESSION['fullname'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Eメール </th>
                                        <td><?php echo $_SESSION['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <th cols="2">お問い合わせ内容</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><?php echo nl2br($_SESSION['message']) ?></td> <!-- nl2brは改行が入っているので改行マークに変換するための関数 -->
                                    </tr>
                                </table>
                                <div class="button_wrapper">
                                    <input type="submit" name="back" class="back to_about_me_button" value="戻る" />
                                    <input type="submit" name="send" class="send to_about_me_button" value="送信" />
                                    <!-- 戻る、送信、どっちもPOSTにする -->
                                </div>               
                            </form>
                        </div> 
                        <div class="contact_completion">

                            <?php } else { ?>  <!-- 完了画面 -->
                                <h3 class="completion_title">
                                    送信しました。ありがとうございました。
                                </h3>
                                <p class="completion_text">
                                    お問い合わせのご返信は2日以内を心がけております。(土日祝日以外)お客様のご利用環境、また迷惑メール対策等の設定により、お返事が届かない場合があります。「info@全身性エリテマトーデス.com」もしくは「info@xn--ick8aybee5knd7g4522au24ar60i.com」からのメール受信が可能な設定にしていただきますようお願いいたします。5日経過しても返信のない場合、大変お手数をおかけしますが再度お送りいただくよう、お願い申し上げます。
                                </p>
                                <a href="./index.html" class="to_top to_about_me_button">TOPへ戻る</a>
                            <?php } ?>
                        </div>
                    </section>
					<footer class="footer">
						<div class="footer_upside_flex">
							<div class="footer_upside_left">
								<h5 class="link_title"><a href="aboutsle.html">SLEとは</a></h5>
								<h5 class="link_title"><a href="symptoms.html">SLEの症状</a></h5>
								<h5 class="link_title"><a href="sindan/sindan.html">診断</a></h5>
								<h5 class="link_title"><a href="sindan/kensa.html">検査結果の見方</a></h5>
							</div>   	<!-- /footer_upside_left -->
							<div class="footer_upside_right">
								<h5 class="link_title"><a href="treatment/index.html">SLEの治療</a></h5>
								<ul class="link_sindan_list">
									<li class="link_item"><a href="treatment/aboutMedicine.html">薬について</a></li>
								</ul>								
								<h5 class="link_title"><a href="gappeisyo.html">起こりやすい合併症</a></h5>
								<h5 class="link_title"><a href="pregnancy.html">治療中の妊娠・出産</a></h5>
							</div>	<!-- /footer_upside_right -->
						</div> 	<!-- /footer_upside_flex -->
						
						<hr class="link_line">

						<div class="footer_bottom_downside">
							<div class="footer_downside_flex">
								<div class="footer_downside_left">
									<h5 class="link_title"><a href="withsle/withsle.html">SLEと付き合うコツ</a></h5>
									<ul class="pc-only">
										<li class="link_item"><a href="withsle/Q&A.html">SLEの疑問</a></li>
										<li class="link_item"><a href="withsle/job&school.html">仕事・学校</a></li>
										<li class="link_item"><a href="https://tayori.com/feedback/a25d995c6a1c995bafa7b550273942e20fec4700/">アンケート</a></li>
										<li class="link_item"><a href="withsle/covid19.html">アンケート結果</a></li>
										<li class="link_item"><a href="withsle/withsle.html">SLEと付き合うコツ</a></li>
									</ul>
									<h5 class="link_title"><a href="freind.html">SLE仲間とつながる</a></h5>
								</div>   <!-- /footer_bottom_left -->
								<div class="footer_downside_right">
									<h5 class="link_title"><a href="news/system.html">SLEに役立つ支援・機関</a></h5>
									<ul>
										<li class="link_item"><a href="news/tokuteisikkann.html">特定疾患受給者票の便利な使い方</a></li>
										<li class="link_item"><a href="news/nanbyouteate.html">難病手当</a></li>
									</ul>
									<br>
									<h5 class="link_title"><a href="aboutme.html">わたしのこと</a></h5>
									<h5 class="link_title"><a href="contact.php">HPのお問い合わせ</a></h5>
								</div>   <!-- /footer_bottom_right -->
							</div>   <!-- /footer_bottom_flex -->
						</div>	<!-- /footer_bottom_downside -->
					</footer>
					<p class="copy">&copy;2021-2024 わたしたちのSLE. ALL RIGHTS RESERVED.</p>
				</main>
			</div>
			
			<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
			<script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-4-1/js/5-4-1.js"></script>
			<script src="assets/js/script.js"></script>
		</body>
</html>