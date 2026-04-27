<?php get_header(); ?>
<!-- Main -->
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">ネオーラル</h2>
        <p class="title-text">効果・飲み方・注意点をまとめました（シクロスポリン）</p>	
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
                    <h4 class="highlighter medicine_name">ネオーラル</h4>
                </div>
                <!-- <p class="yakka_title">薬価</p> -->
                <!-- <p class="yakka">192.90円<span class="medicine1">(50mg1カプセル)</span></p> -->
                <p class="kouhatu_title">後発品名</p>
                <p class="kouhatu">シクロスポリンカプセル</p>

                <p class="tiryo_doctor">
                    従来の治療法と併用されることがあります。適切な医療専門家の監視の下で使用する必要があります
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/neoral.webp" alt="ネオーラルの写真">
        </div>
        <div class="index_box">
            <p class="index">index</p>
            <ul>
                <li><a href="#kouka">ネオーラルの効果</a></li>
                <li><a href="#SLE_tiryou">ネオーラルのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">ネオーラルの効果</h5>
            <p class="kouka_subtitle">
            ネオーラルは、主にヘルパーT細胞の活性化を抑制しインターロイキンなどのサイトカイン産生を抑制する
            </p>
            <ul class="kouka_list">
                <li class="kouka_item"><span class="highlighter">移植片拒否反応の抑制</span>：移植片拒否反応を抑制する効果があります。移植手術を受けた患者さんが、新しい臓器や組織を受け入れるために、免疫系を抑制するために使用されます。</li>
                <li class="kouka_item"><span class="highlighter">自己免疫疾患の治療</span>：自己免疫疾患の治療にも使用されます。ベーチェット病、尋常性乾癬に使われることがあります</li>
                <li class="kouka_item"><span class="highlighter">重症湿疹の治療</span>：重症の湿疹を治療するためにも使用されます。湿疹の原因となる免疫反応を抑制することによって、炎症を抑え、湿疹を改善する効果があります。</li>
            </ul>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">ネオーラルのSLEの治療の特徴</h5>
        <p class="tiryou_tokutyou">SLEの治療では、ネオーラルは免疫系の異常を抑制し、病状の進行を遅らせることが期待されます。</p>
        <ul class="kouka_list">
            <li class="kouka_item"><span class="highlighter">免疫系の抑制</span>：T細胞の活性化を抑制することにより、免疫系を抑制する効果があります。SLEの原因の一つとされる自己免疫反応を抑制することで、症状の改善が期待できます。</li>
            <li class="kouka_item"><span class="highlighter">腎障害の進行抑制</span>：SLEの患者さんの中には、腎障害を持っている方がいます。シクロスポリンは、腎臓の免疫反応を抑制することにより、腎障害の進行を抑制する効果が期待できます。</li>
            <li class="kouka_item"><span class="highlighter">皮膚症状の改善</span>：SLEの患者さんには、皮膚症状がある方もいます。シクロスポリンは、皮膚症状の改善にも効果があります。</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">ネオーラルの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">感染症</th>
                    <td class="fukusayo_tabletd">免疫抑制作用により、感染症にかかりやすくなります。特に、真菌感染やヘルペスウイルス感染に注意が必要です。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">腎機能障害</th>
                    <td class="fukusayo_tabletd">腎臓に負担をかけるため、腎機能障害を引き起こすことがあります。定期的に腎機能の検査を受ける必要があります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">血圧上昇</th>
                    <td class="fukusayo_tabletd">血圧を上昇させる作用があるため、定期的に血圧の測定を受ける必要があります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">糖尿病</th>
                    <td class="fukusayo_tabletd">糖尿病を引き起こすことがあります。血糖値の変化に注意が必要です。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">その他</th>
                    <td class="fukusayo_tabletd">筋力低下、振戦、けいれん、頭痛、めまい、胃腸障害、発汗過多、頭痛、振戦などの神経学的な副作用も報告されています。</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">ネオーラルの副作用は、患者によって異なります。<br>
            治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
            定期的な検査やフォローアップが必要なため、<br>
            医師の指示に従って治療を受けるようにしましょう。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">ネオーラルの注意点</h5>
        <p class="tiryou_tyuui">
        妊娠中や授乳中の女性、免疫機能が低下している患者、高血圧や腎機能障害、糖尿病、神経学的な疾患を持つ患者、シクロスポリンに過敏症の既往がある患者など、特定の患者群では使用を避ける必要があります<br>
        他の医薬品との相互作用を引き起こすことがあるため、他の薬剤との併用には注意が必要です。特に、抗生物質や抗真菌薬、心臓病治療薬、抗痙攣薬、非ステロイド性抗炎症薬などと併用する場合には、十分な注意が必要です。<br>
        定期的に血液検査や尿検査を受ける必要があります。特に、腎機能障害や貧血の発生を早期に発見するため、定期的な検査が必要です。<br>
        飲み忘れた場合や用量を誤った場合には、治療効果が低下する恐れがあります。定められた用法・用量を厳守し、指示された通りに正確に服用するようにしましょう。<br>
        血中濃度が上昇する場合があるため、グレープフルーツジュースの摂取は避けることが望ましいとされる
        </p>
        <hr class="medicine_line">
        <p class="doctor">
        ネオーラルの服用には、医師の指示に従うことが非常に重要です。<br>
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