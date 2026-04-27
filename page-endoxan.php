<?php get_header(); ?>
<!-- Main -->
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">エンドキサン</h2>
        <p class="title-text">効果・治療の位置づけ・注意点をまとめました</p>	
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
                    <p class="senpatu">先発品情報(その他)</p>
                    <p class="syurui">免疫抑制剤</p>
                    <h4 class="highlighter medicine_name">エンドキサン</h4>
                </div>
                <!-- <p class="yakka_title">薬価</p>
                <p class="yakka">24.60円<span class="medicine1">(50mg1錠)</span></p> -->
                <p class="tiryo_doctor">
                    SLEの症状の管理に有用であり、従来の治療法と併用されることがあります。しかし、これらの薬剤には副作用があり、適切な医療専門家の監視の下で使用する必要があります。
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/endkisan.webp" alt="エンドキサンの写真">
        </div>
        <div class="index_box">
            <p class="index">index</p>
            <ul>
                <li><a href="#kouka">エンドキサンの効果</a></li>
                <li><a href="#SLE_tiryou">エンドキサンのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
    </section>

    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">エンドキサンの効果</h5>
            <p class="kouka_subtitle">
            細胞のDNA合成を阻害し、B細胞を抑制するアルキル化薬に分類されます。
            </p>
            <ul class="kouka_list">
                <li class="kouka_item"><span class="highlighter">全身性エリテマトーデス（ループス腎炎）ループス腎炎</span></li>
                <li class="kouka_item"><span class="highlighter">血管炎（急速進行性糸球体腎炎）</span></li>
                <li class="kouka_item"><span class="highlighter">ネフローゼ症候群の場合</span></li>
                <li class="kouka_item"><span class="highlighter">パルス療法</span>：注射薬を入院にて1回点滴します。 原則として4週間隔で繰り返し使用し、投与回数は年齢や症状に応じて適宜調整します。</li>
            </ul>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">エンドキサンのSLEの治療の特徴</h5>
        <p class="tiryou_tokutyou">免疫系の抑制を目的として使用されることがあります。主な効果としては以下のようなものが挙げられます。</p>
        <ul>
            <li>腎炎の治療：SLEに伴う腎炎の治療に使用されることがあります。</li>
            <li>関節炎の改善：関節炎を引き起こす炎症を抑え、痛みや腫れを緩和する効果があるとされています</li>
            <li>皮膚症状の改善：SLEの主要な症状の一つである皮膚症状にも効果があることが報告されています。</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">エンドキサンの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">消化器症状</th>
                    <td class="fukusayo_tabletd">吐き気、嘔吐、食欲不振、腹痛など。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">血液障害</th>
                    <td class="fukusayo_tabletd">白血球減少、貧血、血小板減少など。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">感染症</th>
                    <td class="fukusayo_tabletd">免疫系の抑制作用により、感染症にかかりやすくなることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">腎障害</th>
                    <td class="fukusayo_tabletd">腎機能障害を引き起こすことがあります</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">膀胱炎、膀胱癌</th>
                    <td class="fukusayo_tabletd">長期間の使用によって膀胱炎や膀胱癌の発生リスクがあることが報告されています</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">エンドキサン錠には重篤な副作用があり、腎障害、血液障害、感染症などが生じることがあります。また、長期投与によって膀胱癌や白血病などのリスクもあるため、定期的な血液検査や医師の指示に従った服薬が必要となります。治療の選択肢としては、エンドキサン錠は重症度が高く、かつ他の治療法が有効でない場合に使用されることが多いです。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">エンドキサンの注意点</h5>
        <p class="tiryou_tyuui">
            出血性膀胱炎への対策出血性膀胱炎が出現した場合、膀胱の中で血液が固まってしまうことがあります。それを予防するため、投与日は点滴や飲水（2~3リットルの水分）を十分に行い、尿をたくさん出すようにします。<br>
            感染症に注意血球減少を起こすことが多いので、血液検査でモニターするとともに、感染症の併発にも注意します。<br>
            累積投与量に注意生殖機能を低下させたり、長期的に膀胱腫瘍やリンパ腫を生じることがあるので、累積投与量が過量にならないように注意します。<br>
            エンドキサンは妊娠中や授乳中の使用は禁忌とされています。
        </p>
        <hr class="medicine_line">
        <p class="doctor">
            エンドキサンの服用には、医師の指示に従うことが非常に重要です。<br>
            特に、副作用の監視などが重要です。
        </p>
    </section>

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/aboutmedicin/') ); ?>">薬について</a>
            <a class="page-next" href="<?php echo esc_url( home_url('/gappeisyo/') ); ?>"><span class="px16">起こりやすい合併症</span></a>
        </div>
        <!-- ページネーション　終わり -->
    </section>
</main>
<?php get_footer(); ?>