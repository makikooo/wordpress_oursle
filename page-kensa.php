<?php get_header(); ?>

<!-- Main スタート-->
<main id="kensa">
    <section class="BGwhite catch-copy">
        <h2 class="title2">検査結果のみかた</h2>
        <p class="title-text">変化に気づくためのチェックポイント</p>	
    </section>
    <section class="BGpink future">
        <figure>
            <img class="sle-tell-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flower.png" alt="一輪の花">
        </figure>							
    </section>
    <section class="BGwhite kensa">
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

        <h4 class="kensa_doctor">検査結果の解釈には、<br class="sp-only">専門医が総合的に判断する必要があります。</h4>
    </section>
    <section class="blood-kensa">
        <div class="kensa_wrapper">
            <h5 class="highlighter yokuseizai_title">血液学検査</h5>

            <table class="kensa_table">
                <tr class="sp-none kenasa_table_left">
                    <th class="koumoku">検査項目・基準値</th>
                    <th class="kensa_setumei setumei">検査説明</th>
                </tr>
                <tr>
                    <td class="kensa_table_left"><span class="bold">RBC 赤血球</span><br>
                        <span class="sp-only kijunti">基準値</span>
                        男：400万〜539万/㎣<br>
                        ⼥：360万〜489万/㎣
                    </td>
                    <td class="kensa_setumei">
                        すべての細胞に酸素を運び込む 炎症のために赤血球があまり作られなくなったり破壊されたりして数が減り、貧血になる赤血球に対する自己抗体ができて赤血球を破壊する貧血(自己免疫性溶血性貧血)
                    </td>
                </tr>
                <tr>
                    <td class="kensa_table_left"><span class="bold">WBC 白血球</span><br>
                        <span class="sp-only kijunti">基準値</span>
                        男 ：3,600-9,000 /㎕ <br>
                        女： 3,000-7,800 /㎕
                    </td>
                    <td class="kensa_setumei">
                        体内に入った細菌やウイルスと闘う免疫細胞SLEをはじめ膠原病では白血球の減少がみられる。白血球のなかでは主にリンパ球が減少する。
                    </td>
                </tr>
                <tr>
                    <td class="kensa_table_left point"><span class="bold">PLT 血小板</span><br>
                        <span class="sp-only kijunti">基準値</span>
                        13.8-30.9万/㎕
                        <div class="point-img"><img src="../assets/images/tyuumoku.png" alt=""></div>
                    </td>
                    <td class="kensa_setumei">
                        小さなかけら状の細胞で粘り気を出して傷口をふさいで血液をかためる働き。<br>SLEでは血小板にくっつきやすいタンパクができ、血小板が脾臓で破壊されるという通常の働きが高まり、血小板の減少がある。<br>血小板減少は再燃の予測因子。
                    </td>
                </tr>
            </table>

        </div>
    </section>

    <section class="blood-wrapper">
        <h5 class="highlighter yokuseizai_title">炎症のあるなしを調べる検査  　　赤沈検査とCRP検査が重要</h5>
            <table class="kensa_table">
            <tr class="sp-none kenasa_table_left">
                <th class="koumoku">検査項目・基準値</th>
                <th class="kensa_setumei setumei">検査説明</th>
            </tr>
            <tr>
                <td class="kensa_table_left"><span class="bold">ESR　赤沈検査</span><br>
                    <span class="sp-only kijunti">1時間血の基準値</span>
                    男性で10mm以下<br>
                    女性で15～20mm以下
                </td>
                <td class="kensa_setumei">
                    赤血球が沈んでいく速さを調べる検査炎症があると沈む速さが速まり数値が上昇するこれだけではSLEによる炎症であるとは特定できない								</td>
            </tr>
            <tr>
                <td class="kensa_table_left point"><span class="bold">CRP</span><br>
                    <span class="sp-only kijunti">基準値</span>
                    0.3mg/dl以下
                    <div class="point-img"><img src="../assets/images/tyuumoku.png" alt=""></div>
                </td>
                <td class="kensa_setumei">
                    CRPとはC反応性蛋白といわれ体内に炎症があるとただちに血液中に増える。炎症がおさまるとすぐ消えるCRPが陽性の場合は感染症が考えられ、関節炎、漿膜炎などがあると陽性になることもある<br>
                    <span class="highlighter">お医者さんはこの数値をよく見ているように思います</span>
                </td>
            </tr>
        </table>
    </section>

    <section class="blood-kensa">
        <div class="kensa_wrapper">
            <h5 class="highlighter yokuseizai_title">免疫の異常を調べる検査</h5>
            <p class="kensa_text">健康な人にはほとんどみられない自己抗体と呼ばれるタンパク質</p>
            <table class="kensa_table">
                <tr class="sp-none kenasa_table_left">
                    <th class="koumoku">検査項目・基準値</th>
                    <th class="kensa_setumei setumei">検査説明</th>
                </tr>
                <tr>
                    <td class="kensa_table_left point"><span class="bold">ANA 抗核抗体</span><br>
                        <span class="sp-only kijunti">基準値</span>
                        40または80倍未満
                        <div class="point-img"><img src="../assets/images/tyuumoku.png" alt=""></div>
                    </td>
                    <td class="kensa_setumei">
                        自分の細胞内にある核のさまざまな成分に対してできる抗体。SLEだとほぼ100％この抗体をもっている抗核抗体があれば抗2本鎖DNA抗体や抗Sm抗体を検査する。(DNAやSmは核の成分)<br>
                        SLEの診断に最もよく使われる検査で、自己免疫反応が起こっていることを示す抗体です。陽性の場合、SLEの可能性が高くなります。ただし、他の自己免疫疾患や感染症でも陽性になることがあるため、他の検査と併せて判断する必要があります。

                    </td>
                </tr>
                <tr>
                    <td class="kensa_table_left point"><span class="bold">dsDNA抗体　抗DNA抗体</span><br>
                        <span class="sp-only kijunti">基準値</span>
                        10.0未満 IU/mL
                        <div class="point-img"><img src="../assets/images/tyuumoku.png" alt=""></div>
                    </td>
                    <td class="kensa_setumei">
                        免疫系がDNAを異物として認識して攻撃する自己免疫疾患である全身性エリテマトーデス（SLE）患者などの血液中に存在する抗体の一種です。
                    </td>
                </tr>
                <tr>
                    <td class="kensa_table_left"><span class="bold">抗リボソーム抗体</span><br>
                        <span class="sp-only kijunti">基準値</span>
                        100Ｕ／ｍＬ未満
                    </td>
                    <td class="kensa_setumei">
                        SLEの診断に用いられる抗体で、脳や腎臓、血液などに対して攻撃を加えることがあります。陽性の場合は、重症化する可能性が高いとされています。
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <section class="blood-wrapper">
        <h5 class="highlighter yokuseizai_title">補体の量を調べる検査</h5>
        <h6 class="kensa_subtitle">補体とは血液中のタンパク質のひとつで、抗体の働きを活性化させる役割</h6>
        <p class="kensa_text">
            補体は、体内で炎症反応や感染を引き起こす菌やウイルスなどの異物を攻撃するための免疫系の一部です。<br>
            自己免疫疾患では、自己抗体が活発に自分の細胞を攻撃すると補体がたくさん使われるため、補体の量が減少するとくにSLEの活動期では保体値が低くなることが多いので病気の勢いを見るのに役立つ
        </p>
            <table class="kensa_table">
            <tr class="sp-none kenasa_table_left">
                <th class="koumoku">検査項目・基準値</th>
                <th class="kensa_setumei setumei">検査説明</th>
            </tr>
            <tr>
                <td class="kensa_table_left point"><span class="bold">C3 補体第3成分</span><br>
                    <span class="sp-only kijunti">基準値</span>
                    86～160mg/dL
                    <div class="point-img"><img src="../assets/images/tyuumoku.png" alt=""></div>
                </td>
                <td class="kensa_setumei">
                    SLE患者の多くは、補体のうちのC3およびC4が低下していることが報告されています。<br>
                    補体が低下すると細菌を排除する能力が低下します。
                </td>
            </tr>
            <tr>
                <td class="kensa_table_left point"><span class="bold">C4 補体第4成分</span><br>
                    <span class="sp-only kijunti">基準値</span>
                    17～45mg/dL
                    <div class="point-img"><img src="../assets/images/tyuumoku.png" alt=""></div>
                </td>
                <td class="kensa_setumei">
                    SLE患者の多くは、補体のうちのC3およびC4が低下していることが報告されています。<br>
                    補体が低下すると細菌を排除する能力が低下します。
                </td>
            </tr>
        </table>
    </section>

    <section class="blood-kensa">
        <div class="kensa_wrapper">
            <h5 class="highlighter yokuseizai_title">尿検査で腎臓の障害を調べる</h5>
            <p class="kensa_text">腎臓機能が低下すると老廃物が体に溜まりむくみが出たりタンパク尿になるSLEではループス腎炎を起こしやすいので尿タンパク検査と尿沈さ検査をする</p>
            <table class="kensa_table">
                <tr class="sp-none kenasa_table_left">
                    <th class="koumoku">検査項目・基準値</th>
                    <th class="kensa_setumei setumei">検査説明</th>
                </tr>
                <tr>
                    <td class="kensa_table_left point"><span class="bold">尿たんぱく検査</span><br>
                        <span class="sp-only kijunti">基準値</span>
                        （－）
                        <div class="point-img"><img src="../assets/images/tyuumoku.png" alt=""></div>
                    </td>
                    <td class="kensa_setumei">
                        1日分の尿の中に含まれるタンパク質の濃度を測定する尿タンパクは腎臓のはたらきが低下してると高い数値になる。激しい運動や発熱などのときも一時的に高くなる
                    </td>
                </tr>
                <tr>
                    <td class="kensa_table_left"><span class="bold">潜⾎</span><br>
                        <span class="sp-only kijunti">基準値</span>
                        （－）
                    </td>
                    <td class="kensa_setumei">
                        ⾁眼ではわからない微量の⾎液が混⼊していないかを調べます。陽性では⽷球体腎炎・膀胱炎・尿路結⽯などが疑われます。
                    </td>
                </tr>
            </table>

            <h5 class="highlighter yokuseizai_title">尿沈さ検査</h5>
            <p class="kensa_text">
                尿中のさまざまな成分を沈澱させて調べる<br>
                赤血球、タンパク質や細胞成分が固まったもの(細胞性円柱)があるか調べる<br>
                赤血球尿、細胞性円柱尿があれば腎臓で病変がある
            </p>
            <table class="kensa_table">
                <tr class="sp-none kenasa_table_left">
                    <th class="koumoku">検査項目・基準値</th>
                    <th class="kensa_setumei setumei">検査説明</th>
                </tr>
                <tr>
                    <td class="kensa_table_left"><span class="bold">⾚⾎球</span><br>
                        <span class="sp-only kijunti">基準値</span>
                        1〜4個/HPF
                    </td>
                    <td class="kensa_setumei">
                        多いと腎臓や尿路の炎症・結⽯・腫瘍などが疑われます。
                    </td>
                </tr>
                <tr>
                    <td class="kensa_table_left"><span class="bold">細菌</span><br>
                        <span class="sp-only kijunti">基準値</span>
                        （－）
                    </td>
                    <td class="kensa_setumei">
                        陽性では腎臓や尿路の炎症が疑われます
                    </td>
                </tr>
            </table>

            <h5 class="highlighter yokuseizai_title">内臓の状態を調べる検査</h5>
            <p class="kensa_text">
                腎機能検査、肝機能検査、血糖、コレステロール、中性脂肪などが一般的な検査SLEでは腎臓に関するクレアチン、尿素窒素(BUN)を調べる腎臓のはたらきが低下すると、血液の中にたまる、これらの数値が高くなる
            </p>
        </div>
    </section>

    <section class="blood-wrapper">
        <h5 class="highlighter yokuseizai_title">その他の検査</h5>
            <table class="kensa_table">
            <tr class="sp-none kenasa_table_left">
                <th class="koumoku">検査項目</th>
                <th class="kensa_setumei setumei">検査説明</th>
            </tr>
            <tr>
                <td class="kensa_table_left"><span class="bold">胸部X線検査</span>
                </td>
                <td class="kensa_setumei">
                    肺結核のほか肺炎・肺気腫・⾃然気胸などの肺の病気、<br>
                    ⼼肥⼤・弁膜症・先天性⼼疾患など⼼臓の病気の<br>
                    発⾒や診断に使われます。
                </td>
            </tr>
            <tr>
                <td class="kensa_table_left"><span class="bold">安静時⼼電図</span>
                </td>
                <td class="kensa_setumei">
                    ⼼臓全体の働きを調べることができ、⼼臓病の発⾒や診断、病状の把握、薬の副作⽤の発⾒などに⽋かせない検査です。
                </td>
            </tr>
            <tr>
                <td class="kensa_table_left"><span class="bold">超⾳波検査（エコー）</span>
                </td>
                <td class="kensa_setumei">
                    腹部（みぞおちから脇腹あたり）に超⾳波をあて、５つの臓器（肝臓・胆のう・膵臓・脾臓・腎臓）を中⼼に、異常がないかを調べます。
                </td>
            </tr>
            <tr>
                <td class="kensa_table_left"><span class="bold">脳波</span>
                </td>
                <td class="kensa_setumei">
                    中枢神経けいれんなど筋電図は筋肉の症状、萎縮など
                </td>
            </tr>
            <tr>
                <td class="kensa_table_left"><span class="bold">生体検査（生検）	病理組織検査</span>
                </td>
                <td class="kensa_setumei">
                    症状のある皮膚や内臓の組織をとって検査する
                </td>
            </tr>
        </table>
    </section>

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/sindan/') ); ?>">診断</a>
            <a class="page-next" href="<?php echo esc_url( home_url('/treatment_index/') ); ?>">SLEの治療</a>
        </div>
        <!-- ページネーション　終わり -->
    </section>
</main>

<?php get_footer(); ?>