<?php get_header(); ?>
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">セルセプト</h2>
        <p class="title-text">免疫を調整する薬：セルセプトの基本がわかる</p>	
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
                    <p class="senpatu">先発品(後発品あり)</p>
                    <p class="syurui">免疫抑制剤</p>
                    <h4 class="highlighter medicine_name">セルセプト</h4>
                </div>
                <!-- <p class="yakka_title">薬価</p>
                <p class="yakka">134.60円<span class="medicine1">(250mg1カプセル)</span></p> -->
                <p class="kouhatu_title">後発品名</p>
                <p class="kouhatu">ミコフェノール酸モフェチルカプセル</p>

                <p class="tiryo_doctor">
                    SLEの症状のループス腎炎に有用であり、従来の治療法と併用されることがあります。適切な医療専門家の監視の下で使用する必要があります
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/seruseputo.webp" alt="セルセプトの写真">
        </div>
        <div class="index_box">
            <p class="index">index</p>
            <ul>
                <li><a href="#kouka">セルセプトの効果</a></li>
                <li><a href="#SLE_tiryou">セルセプトのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
    </section>

    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">セルセプトの効果</h5>
            <p class="kouka_subtitle">
            セルセプトは、免疫系の異常を抑制し、病状の進行を遅らせることが期待されます、慢性腎臓病や以下のような症状に効果があることが報告されています。
            </p>
            <ul class="kouka_list">
                <li class="kouka_item"><span class="highlighter">移植片対宿主病</span>：移植手術後に生じる免疫反応を抑制するために使用されます。</li>
                <li class="kouka_item"><span class="highlighter">関節リウマチ</span>：関節炎、関節の腫れや痛み、運動制限などの症状を軽減することが期待されます。</li>
                <li class="kouka_item"><span class="highlighter">慢性腎臓病</span>：腎臓の炎症や腎機能障害の進行を遅らせる効果があるとされています。</li>
                <li class="kouka_item"><span class="highlighter">全身性エリテマトーデス</span>：自己免疫疾患による症状を軽減することが期待されます。炎症や発疹、関節痛、疲れやだるさなどの症状が改善することが報告されています。</li>
            </ul>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">セルセプトのSLEの治療の特徴</h5>
        <p class="tiryou_tokutyou">SLEの治療では、セルセプトは免疫系の異常を抑制し、病状の進行を遅らせることが期待されます。</p>
        <ul>
            <li>リンパ球の増殖に必要なDNA合成を抑制する</li>
            <li>T細胞とB細胞の増殖を抑制することにより、自己免疫反応を抑制します。</li>
            <li>腎臓の炎症や腎機能障害の進行を遅らせる効果があるとされています。</li>
            <li>通常は経口薬として投与されますが、SLEの治療では、静脈内注射として投与される場合があります。</li>
            <li>免疫系の異常を抑制し、病状の進行を遅らせることが期待されます。</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">セルセプトの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">感染症</th>
                    <td class="fukusayo_tabletd">セルセプトは免疫を抑制する作用があるため、感染症を引き起こすリスクが高まります。風邪、インフルエンザ、細菌感染症、真菌感染症などが報告されています</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">腫瘍リスク</th>
                    <td class="fukusayo_tabletd">セルセプトは、免疫を抑制することにより、腫瘍の発生リスクを高める可能性があります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">消化器症状</th>
                    <td class="fukusayo_tabletd">吐き気、嘔吐、下痢、腹痛などの消化器症状が報告されています。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">血液障害</th>
                    <td class="fukusayo_tabletd">貧血、白血球減少症、血小板減少症などの血液障害が報告されています。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">間質性肺炎</th>
                    <td class="fukusayo_tabletd">まれに間質性肺炎を引き起こすことがあります</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">その他</th>
                    <td class="fukusayo_tabletd">頭痛、眼の症状、震え、筋肉の痛みなどの神経症状が報告されています。</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">セルセプトの副作用は、患者によって異なります。<br>
                治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
                定期的な検査やフォローアップが必要なため、<br>
                医師の指示に従って治療を受けるようにしましょう。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">セルセプトの注意点</h5>
        <p class="tiryou_tyuui">
            生ワクチンは摂取しないでください。<br>
            日光や紫外線は避けて下さい。<br>
            服用前、服用中、服用終了後6週間は避妊をして下さい。<br>
            湿気を避けて保存して下さい<br><br>

            セルセプトの治療中には、定期的に血液検査を受ける必要があります。特に、白血球や血小板の数、肝臓の酵素値、腎機能を監視する必要があります。
        </p>
        <hr class="medicine_line">
        <p class="doctor">
            セルセプトの服用には、医師の指示に従うことが非常に重要です。<br>
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