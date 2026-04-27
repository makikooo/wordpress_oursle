<?php get_header(); ?>
<!-- Main -->
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">アザニン</h2>
        <p class="title-text">免疫を調整する薬：アザニンの基本がわかる</p>	
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
                    <h4 class="highlighter medicine_name">アザニン</h4>
                </div>
                <p class="yakka_title">薬価</p>
                <!-- <p class="yakka">94.80円<span class="medicine1">(50mg1錠)</span></p> -->

                <p class="tiryo_doctor">
                    SLEの症状の管理に有用であり、従来の治療法と併用されることがあります。しかし、これらの薬剤には副作用があり、適切な医療専門家の監視の下で使用する必要があります。
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/azanin.webp" alt="アザニンの写真">
        </div>
		<div class="index_box">
            <p class="index">もくじ</p>
            <ul>
                <li><a href="#kouka">アザニンの効果</a></li>
                <li><a href="#SLE_tiryou">アザニンのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
	</section>
    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">アザニンの効果</h5>
            <p class="kouka_subtitle">
            アザニンは、細胞のDNA合成を阻害する代謝拮抗薬です。
            </p>
            <ul class="kouka_list">
                <li class="kouka_item"><span class="highlighter">全身性血管炎</span></li>
                <li class="kouka_item"><span class="highlighter">全身性エリテマトーデスなどの膠原病</span></li>
            </ul>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">アザニンのSLEの治療の特徴</h5>
        <ul>
            <li>SLE（全身性エリテマトーデス）の治療において、免疫系の抑制を目的として使用されることがあります。アザニンは、腎炎の治療に特に効果的であり、このような効果が報告されています。</li>
            <li>腎炎の治療：SLEに伴う腎炎の治療に使用されることがあります。</li>
            <li>皮膚症状の改善：SLEの主要な症状の一つである皮膚症状に効果があることが報告されています。</li>
            <li>他の免疫抑制剤やステロイド薬と併用することができ、併用することでより強力な免疫抑制効果が期待されます。</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">アザニンの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">消化器症状</th>
                    <td class="fukusayo_tabletd">吐き気、嘔吐、下痢、腹痛などの消化器症状が現れることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">貧血</th>
                    <td class="fukusayo_tabletd">貧血が生じることがあります</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">感染症</th>
                    <td class="fukusayo_tabletd">免疫系の抑制作用により、感染症にかかりやすくなることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">骨髄抑制</th>
                    <td class="fukusayo_tabletd">造血細胞の働きを抑制することがあり、白血球や血小板などの減少が生じることがあります。</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">
            アザニンの副作用は、患者によって異なります。<br>
            治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
            また、定期的な検査やフォローアップが必要なため、医師の指示に従って治療を受けるようにしましょう。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">アザニンの注意点</h5>
        <p class="tiryou_tyuui">
            投与開始後数か月間は効果が現れにくく、投与期間中は定期的な血液検査が必要となります。<br><br>
            妊娠中の女性には使用しない方が良いとされています<br><br>
            アザニンの投与量は、患者の体重や症状に応じて調整されます。<br>
        </p>
        <hr class="medicine_line">
        <p class="doctor">
            アザニンを使用する場合、医師の指示に従って定期的に血液検査を受ける必要があります。<br>
            特に、肝臓や腎臓の機能についても監視する必要があります。
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