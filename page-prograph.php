<?php get_header(); ?>
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">プログラフ</h2>
        <p class="title-text">免疫を調整する薬：プログラフの基本がわかる</p>	
    </section>
    <section class="BGpink future">
        <figure>
            <img class="sle-tell-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flower.png" alt="一輪の花">
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
                    <p class="senpatu">先発品(後発品あり)</p>
                    <p class="syurui">免疫抑制剤</p>
                    <h4 class="highlighter medicine_name">プログラフ</h4>
                </div>
                <p class="yakka_title">薬価</p>
                <p class="yakka">245.50円<span class="medicine1">(0.5mg1カプセル)</span></p>
                <p class="kouhatu_title">後発品名</p>
                <p class="kouhatu">タクロリムスカプセル</p>

                <p class="tiryo_doctor">
                    SLEの症状のループス腎炎、間質性肺炎合併多発性筋炎・皮膚筋炎に有用であり、従来の治療法と併用されることがあります。しかし、これらの薬剤には副作用があり、適切な医療専門家の監視の下で使用する必要があります。
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/purogurafu.webp" alt="プログラフの写真">
        </div>
        <div class="index_box">
            <p class="index">もくじ</p>
            <ul>
                <li><a href="#kouka">プログラフの効果</a></li>
                <li><a href="#SLE_tiryou">プログラフのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">プログラフの効果</h5>
            <p class="kouka_subtitle">
            プログラフは、免疫系の異常を抑制し、病状の進行を遅らせることが期待されます、以下のような症状に効果があることが報告されています。
            </p>
            <ul class="kouka_list">
                <li class="kouka_item"><span class="highlighter">移植片対宿主病</span>：移植手術後に生じる免疫反応を抑制するために使用されます。</li>
                <li class="kouka_item"><span class="highlighter">臓器移植後の拒絶反応</span>：移植された臓器を拒絶する免疫反応を抑制するために使用されます。</li>
                <li class="kouka_item"><span class="highlighter">関節リウマチ</span>：関節炎、関節の腫れや痛み、運動制限などの症状を軽減することが期待されます。</li>
                <li class="kouka_item"><span class="highlighter">非感染性腸炎</span>：クローン病、潰瘍性大腸炎などの炎症性腸疾患による腸管炎を抑制するために使用されます。</li>
                <li class="kouka_item"><span class="highlighter">マラリア</span>：抗マラリア薬の一種であり、マラリアの予防や治療にも使用されます。</li>
            </ul>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">プログラフのSLEの治療の特徴</h5>
        <ul>
            <li>SLEの免疫系の異常を抑制し、炎症を抑える作用が期待されます。</li>
            <li>主に皮膚、関節、筋肉、そして内臓における炎症を抑える効果があります。</li>
            <li>光線過敏症や関節炎の症状の緩和、そして病状の進行を遅らせる効果があるとされています。</li>
            <li>通常は経口薬として投与されます。投与量は患者の体重に応じて調整されます。</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">プログラフの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">消化器症状</th>
                    <td class="fukusayo_tabletd">吐き気、嘔吐、下痢、腹痛などの消化器症状が現れることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">腎機能障害</th>
                    <td class="fukusayo_tabletd">腎機能の低下が生じることがあります</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">血糖値上昇</th>
                    <td class="fukusayo_tabletd">高血糖が生じることがあります</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">神経障害</th>
                    <td class="fukusayo_tabletd">手足のしびれや痛み、頭痛、めまいなどの神経障害が生じることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">高血圧</th>
                    <td class="fukusayo_tabletd">血圧が上昇することがあります</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">プログラフの副作用は、患者によって異なります。<br>
            治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
            また、定期的な検査やフォローアップが必要なため、医師の指示に従って治療を受けるようにしましょう。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">プログラフの注意点</h5>
        <p class="tiryou_tyuui">
        <span class="bold">指示された用法・用量を守ること</span><br>
        <br>
        <span class="bold">飲み忘れをしないこと</span><br>
        <br>
        <span class="bold">食事との併用に注意すること</span><br>
        プログラフは、食事と一緒に服用することができますが、脂肪分の多い食事と一緒に服用すると効果が低下することがあります。できるだけ軽い食事や空腹時に服用するようにしましょう。<br>
        <br>
        <span class="bold">無断で中止しないこと</span><br>
        プログラフは、突然中止すると副作用が現れることがあります。中止する場合は、医師の指示に従って徐々に量を減らすようにしましょう。
        </p>
        <hr class="medicine_line">
        <p class="doctor">
        プログラフの服用には、医師の指示に従うことが非常に重要です。<br>
        特に、副作用の監視などが重要です。
        </p>
    </section>

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/aboutmedicine/')) ?>">薬について</a>
            <a class="page-next" href="<?php echo esc_url( home_url('/gappeisyo/')) ?>"><span class="px16">起こりやすい合併症</span></a>
        </div>
        <!-- ページネーション　終わり -->
    </section>
</main>
<?php get_footer(); ?>