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
        mb_send_mail('truehope320@gmail.com','わたしたちのSLEからお問い合わせいただきました',$message);
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

<?php get_header(); ?>
    <!-- Main -->
    <main>
        <section class="BGwhite1 catch-copy">
            <h2 class="title2">お問い合わせ</h2>
            <p class="title-text">内容の誤りや追加してほしい情報があればご連絡ください</p>	
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
        
        <section class="BGwhite">
        

            <?php if( $mode == 'input') { ?>
                <!-- 入力画面  POSTではない（GETということ）　-->
            <section class="sec02_cannot">
              <p>現在は使えません</p>
                <!-- <p class="contact_text">ご依頼・ご相談や、ホームページのご感想など<br>
                    お気軽にお問い合わせくださいませ。<br>
                    <span class="red">※</span>は必須項目です。</p> -->
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
                        お問い合わせのご返信は2日以内(土日祝日以外)を心がけております。お客様のご利用環境、また迷惑メール対策等の設定により、お返事が届かない場合があります。5日経過しても返信のない場合、大変お手数をおかけしますが再度お送りいただくよう、お願い申し上げます。
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
                            お問い合わせのご返信は2日以内を心がけております。(土日祝日以外)お客様のご利用環境、また迷惑メール対策等の設定により、お返事が届かない場合があります。5日経過しても返信のない場合、大変お手数をおかけしますが再度お送りいただくよう、お願い申し上げます。
                        </p>
                        <a href="./index.html" class="to_top to_about_me_button">TOPへ戻る</a>
                    <?php } ?>
                </div>
            </section>
        </section>
    </main>
<?php get_footer(); ?>