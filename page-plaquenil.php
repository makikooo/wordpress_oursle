<?php get_header(); ?>
<!-- Main -->
<main id="plaquenil_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">プラケニル</h2>
        <p class="title-text">SLE治療の基本薬：プラケニルのポイント</p>	
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

    <section class="BGwhite cellcept medicine_width">
        <div class="flex">
            <div class="kihonjouhou_left">
                <div class="medicine_name_box">
                    <p class="senpatu">先発品(後発品あり)</p>
                    <p class="syurui">免疫調整剤</p>
                    <h4 class="highlighter medicine_name">プラケニル</h4>
                    <h3 class="geniric">ジェネリック名）<br>
                        ヒドロキシクロロキン硫酸塩</h3>
                </div>
                <!-- <p class="yakka_title">薬価</p>
                <p class="yakka">402.4円<span class="medicine1">(200mg1錠)</span></p> -->
                <p class="kouka_subtitle">
                    マラリアの薬のグループに属します。<br>世界70カ国以上広く使われている。日本においては2015年に承認されました。
                </p>
                <p class="tiryo_doctor">
                    免疫のスイッチを弱めて、炎症の出方をおだやかに整える薬<br>
                    SLEと診断されたらどんな症状の場合でも最初に飲む薬は今はプラケニルになっています。
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/purakenil.webp" alt="プラケニルの写真">
        </div>
        <div class="index_box">
            <p class="index">index</p>
            <ul>
                <li><a href="#sikumi">体の中で何が起きる？</a></li>
                <li><a href="#kouka">プラケニルの効果</a></li>
                <li><a href="#SLE_tiryou">プラケニルのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="sikumi">
        <div class="sikumi_wrapper">
            <h5 class="medicine_title">プラケニルをのむと体の中で何が起きる？</h5>
            <table class="sikumi_table">
                <tr>
                    <th class="sikumi_th">免疫細胞の中に入り込む</th>
                    <td class="sikumi_td">
                        プラケニルは、免疫細胞の中の“ふくろ（リソソーム）”の中にたまりやすい薬です。<br>
                        そこでその“ふくろ”の中の 酸性度（pH）を変える。<br>
                        すると、その中で働く酵素や受容体の働き方が変わる<br>
                        → 結果として、免疫が過剰に反応しにくくなる方向に働きます。
                    </td>
                </tr>
                <tr>
                    <th class="sikumi_th">「自分を攻撃するサイン」を拾いにくくする</th>
                    <td class="sikumi_td">
                        免疫細胞の中にある TLR（トール様受容体） という「センサー」の働きを弱める（特に TLR7・TLR9 など、自己DNA/RNAを感知するもの）その結果、「自己抗体を作れ！」というシグナルが出にくくなる<br>
                        → 自己抗体の産生や炎症のスイッチを弱める 方向に働きます。
                    </td>
                </tr>
                <tr>
                    <th class="sikumi_th">サイトカイン（炎症のメッセージ物質）を減らす</th>
                    <td class="sikumi_td">
                        免疫細胞が興奮すると、インターフェロン、TNFα、IL-1・IL-6 などいろいろな**炎症物質（サイトカイン）**が出てきます。<br>
                        プラケニルは、免疫細胞（T細胞・B細胞・樹状細胞など）の活性化をやわらげる。それにより、炎症のメッセージ物質が出にくくなる<br>
                        → 全身の炎症がじわっと落ち着きやすくなる、というイメージです。</td>
                </tr>
            </table>
        </div>
    </section>

    <section class="BG" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">プラケニルの効果</h5>
            <p>プラケニルを続けることで</p>
            <ul class="kouka_list">
                <li class="kouka_item">発熱・関節痛・発疹などのSLEの活動性が下がりやすい</li>
                <li class="kouka_item">再燃（ flare ）の頻度が減る</li>
                <li class="kouka_item">ステロイドの量を少しずつ減らしやすくなる</li>
                <li class="kouka_item">長期的には、臓器（腎臓など）へのダメージを減らす方向に働くと考えられている</li>
            </ul>
            <p class="kouka_subtitle">
                飲んですぐ効く、即効性の痛み止め」のような薬ではなく、数か月〜年単位でジワジワと効果が見えてくるタイプ
            </p>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">プラケニルのSLEの治療の特徴</h5>
        <p class="tiryou_tokutyou">プラケニルは、全身性エリテマトーデス（SLE）の治療に使用される薬剤の一つです。</p>
        <ul>
            <li>免疫系を抑制する薬剤ではないため、感染症や白血球減少症のリスクは低いとされています。</li>
            <li>腎臓の炎症や腎機能障害の進行を遅らせる効果があるとされています。</li>
            <li>通常、経口投与されます。また、食事後に服用することで、吸収が改善されます。</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">プラケニルの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">視力障害</th>
                    <td class="fukusayo_tabletd">長期間の使用や高用量の場合、視力障害が起こることがあります。<br>
                    視力障害は、網膜の変性や色覚異常などが引き起こされることがあります。<br>
                    ・網膜症<br>
                    目の網膜の障害で失明の危険性があるので、定期的な眼科検査が重要！<br>
                    ー初期の網膜症は自覚症状がないことが多いので、視力検査、細隙灯顕微鏡検査、眼圧検査、眼底検査、視野検査、色覚検査、光干渉断層計検査（OCT）などの眼科検査を定期的に（少なくとも年に1回）行う<br>
                    異常が見つかったら直ちにプラケニルを中止して網膜症の進行を防ぐ</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">肝機能障害</th>
                    <td class="fukusayo_tabletd">肝臓の機能障害が引き起こされることがあります。肝機能検査を定期的に行い、異常があれば使用を中止する必要があります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">皮膚障害</th>
                    <td class="fukusayo_tabletd">発疹やかゆみ、紅斑などの薬疹、皮膚粘膜眼症症候群（スティーブン・ジョンソン症候群）いつもと違った皮膚症状が出た時は医療機関に受診すること</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">消化器障害</th>
                    <td class="fukusayo_tabletd">吐き気、嘔吐、下痢などの消化器障害が引き起こされることがあります。軽度の場合、使用を続けることができますが、重症の場合は使用を中止する必要があります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">神経障害</th>
                    <td class="fukusayo_tabletd">頭痛やめまい、不眠症などの神経障害が引き起こされることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">低血糖障害</th>
                    <td class="fukusayo_tabletd">生あくび、吐き気、頭痛、ひどいときは意識がもうろうとして昏睡に至ることがある。<br>
                    糖分を服用する→症状が治らないときはすぐに医療機関へ連絡する
                    </td>
                </tr>
            </table>
            <p class="fukusayo_doctor">プラケニルの副作用は、患者によって異なります。<br>
            治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
            定期的な検査やフォローアップが必要なため、<br>
            医師の指示に従って治療を受けるようにしましょう。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">プラケニルの注意点</h5>
        <ul class="kouka_list">
            <li class="kouka_item"><span class="highlighter">眼科</span>：特に、長期間使用する場合には、網膜症のリスクがありますので、眼科医のチェックが必要です。</li>
            <li class="kouka_item"><span class="highlighter">妊娠</span>：プラケニルは、妊娠中の女性にも使用が可能であり、授乳中の女性にも使用することができます。<br>
            プラケニルの添付文書では、妊婦または妊娠している可能性のある人は慎重投与となっていて禁忌ではない<br>
            有効性があると考えられる場合は妊娠中も継続な薬です。<br>
            海外でも、催奇形性はとくにないということになっています<br>
            プラケニルを中止した妊婦さんが関節痛、倦怠感が増悪している<br>
            プラケニル®は新生児のエリテマトーデス（心臓の伝導障害など）のリスクを下げるのではないかともいわれていますが、まだ検証が必要です。</li>
            <li class="kouka_item"><span class="highlighter">服用量</span>：服用中に稀に網膜症が起こる可能性があるので指示された量を正しく服用することが大事<br>
            理想体重が３１ｋｇ以上４６ｋｇ未満の場合、１日１回１錠（２００ｍｇ）を経口投与する。<br>
            理想体重が４６ｋｇ以上６２ｋｇ未満の場合、１日１回１錠（２００ｍｇ）と１日１回２錠（４００ｍｇ）を１日おきに経口投与する。<br>
            理想体重が６２ｋｇ以上の場合、１日１回２錠（４００ｍｇ）を経口投与する。<br>
            目安なので肝臓や腎臓の働きなどで個々の患者さんによって量が変わる<br>
            プラケニルは腎臓から排泄される薬なので、腎機能が低下している場合、推奨量より減らしたり、使用を諦めないといけないこともある。</li>
            <li class="kouka_item"><span class="highlighter">うっかり服用を忘れたら</span>：2日分まとめて服用しないでください。
            翌日から、通常の量で服薬してください。<br>
            1錠と2錠を1日おきに服用していたら、服用し忘れた日の分量を服用してください。</li>
            
        </ul>
        <hr class="medicine_line">
        <p class="doctor">
            プラケニルの服用には、医師の指示に従うことが非常に重要です。<br>
            特に、副作用の監視などが重要です。
        </p>
    </section>
            
    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/aboutMedicine/')); ?>">薬について</a>
            <a class="page-next" href="<?php echo esc_url( home_url('/gappeisyo/') ); ?>"><span class="px16">起こりやすい合併症</span></a>
        </div>
        <!-- ページネーション　終わり -->
    </section>

</main>
<?php get_footer(); ?>