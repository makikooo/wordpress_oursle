<?php get_header(); ?>
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">アクテムラ</h2>
        <p class="title-text">アクテムラの基本がわかる：どんな薬？何に使う？</p>	
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
                    <h4 class="highlighter medicine_name">アクテムラ</h4>
                </div>
                <p class="yakka_title">薬価</p>
                <!-- <p class="yakka">32,608円<span class="medicine1">(162mg)</span></p> -->
                <p class="tiryo_doctor">
                    従来の治療法と併用されることがあります。適切な医療専門家の監視の下で使用する必要があります
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/seruseputo.webp" alt="アクテムラの写真">
        </div>
        <div class="index_box">
            <p class="index">もくじ</p>
            <ul>
                <li><a href="#kouka">アクテムラの効果</a></li>
                <li><a href="#SLE_tiryou">アクテムラのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">アクテムラの効果</h5>
            <p class="kouka_subtitle">
            アクテムラは、免疫系に作用して、炎症性サイトカインであるIL-6の働きを抑制することで、炎症を緩和する作用があります。
            </p>
            <ul class="kouka_list">
                <li class="kouka_item">関節炎や血管炎など、炎症を伴う疾患に対して、炎症の緩和効果が期待できます。</li>
                <li class="kouka_item">炎症性サイトカインが産生されるリウマチ性多発筋痛症に対しても効果があります。</li>
                <li class="kouka_item">アクテムラは、炎症の原因となる免疫反応を抑制するため、免疫抑制剤としても使用されます。</li>
                <li class="kouka_item">COVID-19に感染している患者の治療にも使われることがあります。COVID-19は、IL-6などの炎症性サイトカインが過剰に産生されることによって、重症化することがあるため、アクテムラはこの過剰な炎症反応を抑制する効果が期待されます。</li>
            </ul>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">アクテムラのSLEの治療の特徴</h5>
        <p class="tiryou_tokutyou">SLEの治療薬としてアクテムラが使用される場合、その効果は以下のように期待されています。</p>
        <ul class="kouka_list">
            <li class="kouka_item"><span class="highlighter">炎症を抑制する</span>：アクテムラは、IL-6という炎症性サイトカインの働きを抑制することで、炎症を緩和します。SLEでは、炎症が全身にわたって起こるため、この作用が効果的です。</li>
            <li class="kouka_item"><span class="highlighter">細胞傷害を抑制する</span>：SLEでは、自己抗体が細胞に結合し、細胞を傷害することがあります。アクテムラは、細胞傷害を引き起こす自己抗体の産生を抑制することができます。</li>
            <li class="kouka_item"><span class="highlighter">病気の進行を遅らせる</span>：SLEは、時間の経過とともに病気が進行していく場合がありますが、アクテムラの使用によって、その進行を遅らせることができます。</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">アクテムラの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">感染症</th>
                    <td class="fukusayo_tabletd">免疫系の低下によって、感染症が発生するリスクが高まります。特に、結核の再活性化が報告されています。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">腫瘍リスク</th>
                    <td class="fukusayo_tabletd">悪性腫瘍の発生率が上昇することが報告されています</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">アナフィラキシー</th>
                    <td class="fukusayo_tabletd">稀にアクテムラによってアナフィラキシーが発生することがあります</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">血液障害</th>
                    <td class="fukusayo_tabletd">貧血や白血球減少症、血小板減少症などが報告されています。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">肝機能障害</th>
                    <td class="fukusayo_tabletd">肝機能障害や黄疸が報告されています</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">その他</th>
                    <td class="fukusayo_tabletd">発熱、嘔吐、下痢、筋肉痛、関節痛、頭痛、めまいなどの一般的な副作用が報告されています。</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">アクテムラの副作用は、患者によって異なります。<br>
            治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
            定期的な検査やフォローアップが必要なため、<br>
            医師の指示に従って治療を受けるようにしましょう。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">アクテムラの注意点</h5>
        <ul class="kouka_list">
            <li class="kouka_item"><span class="highlighter">感染症のリスク</span>：免疫系に作用するため、感染症を発症するリスクが増加する可能性があります。そのため、アクテムラを使用する前に、結核や他の感染症の検査を行い、感染症を発症していないことを確認する必要があります。また、感染症を発症した場合には、直ちに医師に相談し、適切な治療を受ける必要があります。</li>
            <li class="kouka_item"><span class="highlighter">結核の再活性化のリスク</span>：結核の再活性化を引き起こす可能性があるため、結核の治療歴や感染リスクを考慮して使用する必要があります。</li>
            <li class="kouka_item"><span class="highlighter">腫瘍のリスク</span>：アクテムラの使用によって、悪性腫瘍の発生率が上昇することが報告されています。そのため、悪性腫瘍の既往歴がある場合や、他の腫瘍リスクを持つ場合には、注意が必要です。</li>
            <li class="kouka_item"><span class="highlighter">妊娠中・授乳中の使用について</span>：アクテムラは、胎児や乳児に対する影響が不明なため、妊娠中や授乳中の使用には注意が必要です。医師と相談し、リスクと利益を慎重に判断する必要があります。</li>
            <li class="kouka_item"><span class="highlighter">免疫抑制剤やステロイドとの併用について</span>：アクテムラと免疫抑制剤やステロイドなどの免疫系に作用する薬剤を併用する場合には、副作用のリスクが増加することがあります。そのため、医師とよく相談し、必要に応じて投薬量を調整する必要があります。</li>
        </ul>
        <hr class="medicine_line">
        <p class="doctor">
        アクテムラの服用には、医師の指示に従うことが非常に重要です。<br>
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