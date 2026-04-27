<?php get_header(); ?>
<!-- Main -->
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">私たちのSLE</h2>
        <p class="title-text">効果・使われ方（点滴／皮下注）・注意点まとめ</p>	
    </section>
    <section class="BGpink future">
        <figure>
            <img class="sle-tell-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/flower.png" alt="一輪の花">
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
                    <p class="senpatu">先発品(後発品なし)</p>
                    <p class="syurui">生物学的製剤</p>
                    <h4 class="highlighter medicine_name">ベンリスタ</h4>
                </div>
                <!-- <p class="yakka_title">薬価</p>
                <p class="yakka">24994円<span class="medicine1">(200mg1mL1筒)</span></p> -->


                <p class="tiryo_doctor">
                    SLEの症状の管理に有用であり、従来の治療法と併用されることがあります。しかし、これらの薬剤には副作用があり、適切な医療専門家の監視の下で使用する必要があります。
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/benrista.webp" alt="ベンリスタの写真">
        </div>
        <div class="index_box">
            <p class="index">index</p>
            <ul>
                <li><a href="#kouka">ベンリスタの効果</a></li>
                <li><a href="#SLE_tiryou">ベンリスタのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">ベンリスタの効果</h5>
            <p class="kouka_subtitle">
                日本において 2017 年に承認された SLE に対する初めての生物学的製剤です。自己抗体を産生する Bリンパ球を抑えることにより、抗DNA抗体が低下し、活動性を抑えることができます。長期に続けることで有効性を発揮し、臓器障害の蓄積を抑えることができます。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">ベンリスタのSLEの治療の特徴</h5>
        <p class="tiryou_tokutyou">ベンリスタ（ベルツリズマブ）は、SLEの治療薬の一つであり、主に炎症や免疫反応を抑制する効果があります。</p>
        <ul>
            <li>ベンリスタは、B細胞活性化因子（BAFF）と呼ばれるタンパク質を標的とするモノクローナル抗体です。BAFFは、B細胞の生存や増殖を促進するタンパク質であり、SLEにおいては過剰に分泌されることが知られています。ベンリスタはBAFFに結合してその活性を阻害し、B細胞の異常な活性化を抑制することでSLEの症状を改善する効果が期待されます。</li>
            <li>抗リン脂質抗体症候群（APS）を伴う場合や、他の免疫抑制剤が効果を示さなかった場合に使用されます。治療開始前には、ワクチン接種歴や感染症の有無などの検査が必要であり、定期的な血液検査や健康管理が必要です。</li>
            <li>成人にはとして、1回200mgを1週間の間隔で皮下注射する。</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">ベンリスタの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">呼吸器系</th>
                    <td class="fukusayo_tabletd">肺炎、敗血症、結核</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">消化器系</th>
                    <td class="fukusayo_tabletd">便秘、下痢、吐き気、嘔吐、消化不良、腹痛など。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">神経系</th>
                    <td class="fukusayo_tabletd">頭痛、めまい、ふらつき、眠気、不眠症、疲れなど</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">代謝系</th>
                    <td class="fukusayo_tabletd">発汗、ほてり、体重増加、食欲増加など</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">心血管系</th>
                    <td class="fukusayo_tabletd">血圧の上昇、心拍数の増加、不整脈、動悸、頻脈など</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">感覚系</th>
                    <td class="fukusayo_tabletd">眼のかすみ、聴力障害、耳鳴り、口の渇きなど</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">その他</th>
                    <td class="fukusayo_tabletd">重篤な副作用として、、注射部位反応、肝臓機能障害、血小板減少症、精神症状（うつ、自殺念慮）など</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">ベンリスタの副作用は、患者によって異なります。<br>
                治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
                定期的な検査やフォローアップが必要なため、<br>
                医師の指示に従って治療を受けるようにしましょう。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">ベンリスタの注意点</h5>
        <p class="tiryou_tyuui">
            用量や服用方法を守ることが重要です。<br>
            感染症への注意 ベンリスタを服用すると、免疫システムが抑制されるため、感染症の発症リスクが高くなります。感染症の症状（発熱、咳、下痢など）が現れた場合は、すぐに医師に相談してください。<br>
            避妊の必要性 ベンリスタは、妊娠中や授乳中の女性には禁忌とされています。また、ベンリスタを服用する男性は、ベンリスタの影響で生殖能力が低下する可能性があるため、避妊をする必要があります。<br>
            薬物相互作用 ベンリスタは、他の薬剤との相互作用があるため、併用する場合は医師に相談してください。特に、免疫システムを抑制する薬剤や、抗真菌薬などの薬剤との相互作用には注意が必要です。<br>
            注射を行う場合は、必ず医師や看護師の指示に従ってください。また、注射部位の消毒を徹底し、注射器の使用方法にも注意してください。<br>
            同じ場所に同じ場所に繰り返し注射しないようにする<br>
            光を避けて、冷蔵庫で保存して下さい。
        </p>
        <hr class="medicine_line">
        <p class="doctor">
            ベンリスタの服用には、医師の指示に従うことが非常に重要です。<br>
            特に、副作用の監視などが重要です。
        </p>
    </section>
    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/aboutmedicine/') ); ?>">薬について</a>
            <a class="page-next" href="<?php echo esc_url( home_url('/gappeisyo/') ); ?>"><span class="px16">起こりやすい合併症</span></a>
        </div>
        <!-- ページネーション　終わり -->
    </section>
</main>
<?php get_footer(); ?>