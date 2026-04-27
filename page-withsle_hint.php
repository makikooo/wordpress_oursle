
<?php get_header(); ?>
<main>
    <section class="BGwhite1 catch-copy">
        <h2 class="title2">SLEと付き合うコツ</h2>
        <p class="title-text">体調の波と上手につき合うために</p>	
    </section>
    <section class="BGpink future">
        <figure>
            <img class="sle-tell-img" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/flower.png" alt="一輪の花">
        </figure>							
    </section>

        <!-- パンくずリスト　スタート -->
        <nav aria-label="breadcrumb" class="breadcrumb_wrapper">
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
        <!-- パンくずリスト　終わり -->


    <section class="BGwhite cellcept medicine_width">
        <div class="flex">
            <div class="kihonjouhou_left">
                <div class="medicine_name_box">
                    <p class="syurui">SLEと付き合うコツ</p>
                </div>
            </div>
        </div>
        <div class="index_box withsle_index">
            <p class="index">SLEと付き合うコツ</p>
            <ul>
                <li><a href="#mental">メンタル</a></li>
                <li><a href="#sigaisen">紫外線</a></li>
                <li><a href="#kansen">感染予防</a></li>
                <li><a href="#food">食生活</a></li>
                <li><a href="#undo">運動</a></li>
                <li><a href="#suimin">睡眠</a></li>
                <li><a href="#haaku">症状の把握</a></li>
                <li><a href="#reino">レイノー</a></li>
                <li><a href="#kiatu">気圧の変化</a></li>
                <li><a href="#seikatu">生活の知恵</a></li>
                <li><a href="#cook">料理</a></li>
                <li><a href="#sentaku">洗濯</a></li>
                <li><a href="#ikuji">育児</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="mental">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">メンタル</h5>
            <p class="kouka_subtitle">
                SLEになったらすごく落ち込むと思います。<br>
                だけど生きていけます。<br><br>

                生きづらいと感じることもあるかもしれないけれど<br>
                <br>生きていけます。<br>
                <br>
                小さな幸せをみつけると人生楽しくなってきます<br><br>

                それと、SLEの治療は気長に流されずに居てください。<br><br>

                ステロイドを服用するので、もしかしたら「ステロイドはよくない」って親切なつもりで言う人もいるでしょう。<br>
                これが効くとか言うキャッチフレーズにも<span class="highlighter">流されず試したりもせず</span>に居てください。<br><br>

                SLEの病気の理解して病気を受け入れて気長に付き合うのがQOL(生活の質)を高めれることになります。<br><br>

                症状がないからといって勝手に薬を飲む事をやめたり減らしたりせずにいることも寛解期を保てれる一つの方法です。<br><br>

                再燃や改善を繰り返すのでメンタルがついていけなくなることもありますが、お医者さんの言うことをきちんと守りながら生活していくことが大事です
            </p>
        </div>
    </section>

    <section class="BGwhite kansen" id="sigaisen">
        <h5 class="medicine_title">紫外線対策</h5>
        <p class="tiryou_tokutyou">
            SLEは、紫外線を浴びることで皮膚の症状が悪化したり、病気そのものの勢いが強くなることがあります。<br>
            そのため、紫外線対策はとても大切です。<br>
            <br>
            帽子・日傘・サングラス・日焼け止めなどを上手に使って、できるだけ紫外線を避けるようにしましょう。<br>
            <br>
            ただし、これは「一歩も外に出てはいけない」という意味ではありません。<br>
            わたしたちが外に出て社会生活を送り、自分らしい日常を大切にできるようにするためにしっかり紫外線対策をしたうえで、安心して日常生活や外出を楽しんでいただければと思います。<br>
            <br>
            紫外線クリームは化粧下地の前にムラなく塗ります<br>
            耳にも忘れずに<br>
            室内でいても紫外線クリームを塗ってくださいね<br>
            目に入るとすごく痛いので目の周りは注意します<br>
            2〜3時間ごと（紫外線が強い時はもう少し短時間）で塗りなおします<br>
            <br>
            私は皮膚が弱いのでSPF50だと皮疹の原因になることもあります。<br>
            皮膚が弱っている時は特にベビー用の紫外線クリームを使うようにしています。<br>
                
            私の場合、3月から11月までの紫外線は倦怠感を引き起こす原因になります<br>
            <br>
            夏の格好は<br>
            カーディガンは背中が暑くなることや脱いでからの持ち物が増えるので着ていません。<br>
            脇から指近くまである60cmのアームカバーをしています。室内に入っても簡単に脱ぎ着できます。<br>
            縁の広い帽子を被ります。帽子の後ろ側に布があるので後ろからの紫外線は気になりません。<br>
            できるだけ日陰を狙って歩くと倦怠感も少なく感じます					
        </p>
    </section>

    <section class="BGcream" id="kansen">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">感染予防</h5>
            <p class="kouka_subtitle">
                こちらもSLEの増悪因子と考えられている感染症の予防は大事です。<br>
                人混みは避ける、マスクの着用、帰宅後手洗いうがいをする<br>
                インフルエンザワクチンや肺炎球菌のワクチンを接種する<br>
                疲れなどにより体力の低下で感染症を起こしやすくするので、思ったより睡眠を取るようにしています。
            </p>
        </div>
    </section>

    <section class="BGwhite kansen" id="food">
        <h5 class="medicine_title">食生活</h5>
        <p class="tiryou_tokutyou">
            ステロイド薬を長期服用することにより生活習慣病になりやすいので食生活を正すことも大事です。<br>
            1.　腹八分目にする<br>
            2.　糖分の取りすぎには気をつけ間食は控える<br>
            3.　脂肪の多い食品は避ける<br>
            4.　繊維の多い野菜を摂る
        </p>
    </section>

    <section class="BGcream" id="undo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">運動</h5>
            <p class="kouka_subtitle">
                筋力や骨量の維持で適度な運動をオススメします<br>
                散歩や体操、プールでの水中歩行、水泳<br>
                <span class="highlighter">翌日にダルさが出ない程度の運動量にする</span><br>
                紫外線が過敏な方は室内での運動にし<br>
                プールでの感染症が気になる方はプールでの運動はやめていてくださいね
            </p>
        </div>
    </section>

    <section class="BGwhite kansen" id="suimin">
        <h5 class="medicine_title">睡眠</h5>
        <p class="tiryou_tokutyou">
            睡眠時間が短かったり睡眠の質が悪いと倦怠感が出やすくなります。<br>
            倦怠感だけでなくメンタルも弱るので睡眠を大事にしていこうと思っています。

        </p>
    </section>

    <section class="BGcream" id="haaku">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">症状の把握</h5>
            <p class="kouka_subtitle">
                人によって再燃のきっかけが違うのでキッカケを気づくように自分の体の状態をこまめにチェックすることが大事<br>
                簡単な日記、体温の変化や体調が悪いなど書き込むと悪化した時も素早い対処ができます<br><br>

                私の場合、睡眠不足になると倦怠感が出やすく、汗をかくようなことがあると皮疹が出やすいです。<br>
                このようにストレスになるサインをわかると生活しやすくなります。
            </p>
        </div>
    </section>

    <section class="BGwhite kansen" id="reino">
        <h5 class="medicine_title">レイノー</h5>
        <p class="tiryou_tokutyou">
            3首(首、手首、足首)を特に冷やさないようにしてください<br>
            体を冷やさないことはとても重要で、夏の冷房の冷えすぎにも気をつけてください。<br>
            寒い時期には手袋をし、炊事や洗濯のときには、冷たい水は避けてお湯を使うなどの対策が重要です。<br>
            疲労やストレスを避け、タバコは血管の収縮の元なので控えましょう
        </p>
    </section>

    <section class="BGcream" id="kiatu">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">気圧の変化</h5>
            <p class="kouka_subtitle">
                私の体感的にSLE患者さんの7割位は気圧や天気で体の不調を感じる方がいます。<br>
                気圧の変化、季節の変わり目などに役立つのは<br>
                スマホのアプリで<span class="highlighter">「頭痛ーる」</span>を使っています。<br>
                私は気圧が低下する時、気圧が上がる時、季節の変わり目の時に倦怠感が出やすくなるので五苓散で予防しています。<br>
                飲まないより飲んだ方が体は楽になる感覚です。
            </p>
        </div>
    </section>

    <section class="BGwhite kansen" id="seikatu">
        <h5 class="medicine_title">生活の知恵</h5>
        <p class="tiryou_tokutyou">
            完璧にしなくてもいいんです。<br>
            自分のできることをする。<br>
            周りの人にお願いしてもいいんです。<br>
            福祉サービスの利用もしてもいいと思います。
        </p>
    </section>

    <section class="BGcream" id="cook">
        <div class="suteroid">
            <h5 class="medicine_title">料理</h5>
            <p class="kouka_subtitle">
                どうしてもしなくてはいけない事、「料理」だと思ってます。<br>
                料理と言っても買い出し、献立づくりもあります。<br>
                最近、メインの買い出しはネットスーパーにすることにしました。手数料かかるし、お高いんじゃ？という意見もあると思いますが、断然、身体には優しいです。<br>
                調子いいときに足りないものをスーパーやドラッグストアに買い物に行ってみるのもアリかと思ってます。
            </p>
        </div>
    </section>

    <section class="BGwhite kansen" id="sentaku">
        <h5 class="medicine_title">洗濯</h5>
        <p class="tiryou_tokutyou">
            特に注意しないといけないのが、<br>
            紫外線対策！寒さ対策！<br>
            洗濯物は室内である程度広げておいてから干したり<br>
            寒い時期は手袋をして洗濯物を干す事をオススメします
        </p>
    </section>

    <section class="BGcream" id="ikuji">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">育児</h5>
            <p class="kouka_subtitle">
                お子さんの年齢によってはお外での遊ぶ時間があると思います。<br>
                紫外線対策は万全でも室外プールや海水浴は死ぬ気で遊んだことがあります。<br>
                もちろん、その日の夕方から死ぬんじゃないかと思うことがあったのでお勧めしません！<br>
                私のように子供と一緒に遊びたい気持ちの方もいらっしゃると思いますが、無理しないで周りの人の協力に甘えてもいいかと思います。<br>
                <br>
                症状が出ているときにした小さい子供との遊び<br>
                お人形ごっこ遊び、折り紙、ブロック、本読み、iPad <br>
                時間を見つけて横になれるように、体力を保てるようにしてくださいね
            </p>
        </div>
    </section>

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/enquete_info/'));?>">アンケート結果</a>
            <a class="page-next" href="<?php echo esc_url( home_url('/friend/')); ?>"><span class="px16">SLE仲間とつながる</span></a>
        </div>
        <!-- ページネーション　終わり -->
    </section>
</main>
<?php get_footer(); ?>