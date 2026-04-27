<?php get_header(); ?>
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">サフネロー</h2>
        <p class="title-text">点滴で行う治療：サフネローの基本がわかる</p>	
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
                    <p class="senpatu">先発品(後発品なし)</p>
                    <p class="syurui">生物学的製剤</p>
                    <h4 class="highlighter medicine_name">サフネロー</h4>
                </div>
                <p class="yakka_title">薬価</p>
                <!-- <p class="yakka">96,068円<span class="medicine1">(300mg2mL1瓶)</span></p> -->
                <p class="tiryo_doctor">
                    SLEの症状の管理に有用であり、従来の治療法と併用されることがあります。しかし、これらの薬剤には副作用があり、適切な医療専門家の監視の下で使用する必要があります。
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/tenteki.webp" alt="サフネローの写真">
        </div>
        <div class="index_box">
            <p class="index">index</p>
            <ul>
                <li><a href="#kouka">サフネローの効果</a></li>
                <li><a href="#SLE_tiryou">サフネローのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
	</section>
    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">サフネローの効果</h5>
            <p class="kouka_subtitle">
            2021 年に日本で承認された新しい生物学的製剤です。<br>
            SLEの病態に関与している「インターフェロン」を抑える薬です。
            </p>
            <ul class="kouka_list">
                <li class="kouka_item"><span class="highlighter">腎細胞がんの治療</span>：腎細胞がんの治療に使用されます。腎細胞がんは、腎臓の細胞ががん化した病気であり、進行すると他の臓器に転移しやすいため、治療が重要です。サフネローは、腎細胞がんの増殖を阻害することで、がんの進行を遅らせることができます。</li>
                <li class="kouka_item"><span class="highlighter">進行性甲状腺がんの治療</span>：進行性甲状腺がんの治療にも使用されます。甲状腺がんは、甲状腺の細胞ががん化した病気であり、進行すると周辺の組織やリンパ節に転移しやすいため、治療が必要です。サフネローは、甲状腺がんの成長を抑制することができます</li>
            </ul>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">サフネローのSLEの治療の特徴</h5>
        <p class="tiryou_tokutyou">全身性エリテマトーデス（SLE）の治療に使用されるバイオロジック製剤の一つです。</p>
        <ul>
            <li>皮膚症状や関節症状などを抑えることが期待されます。</li>
            <li>腎炎を伴うSLEの治療に特に効果があります。具体的には、免疫系を調節することで、腎臓の炎症を抑える作用が期待されます。</li>
            
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">サフネローの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">呼吸器系</th>
                    <td class="fukusayo_tabletd">上気道感染 、 上咽頭炎 、 咽頭炎 、 気管支炎 、 ウイルス性気管支炎 、 気管気管支炎</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">重大な副作用</th>
                    <td class="fukusayo_tabletd">重篤な感染症 、 肺炎 、 播種性帯状疱疹 、 アナフィラキシー</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">その他</th>
                    <td class="fukusayo_tabletd">重篤な感染症、帯状疱疹、過敏症、注入に伴う反応</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">サフネローの副作用は、患者によって異なります。<br>
            治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
            定期的な検査やフォローアップが必要なため、<br>
            医師の指示に従って治療を受けるようにしましょう。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">サフネローの注意点</h5>
        <p class="tiryou_tyuui">
            妊娠中の女性には禁忌とされています。<br>
            サフネローは、SLEの治療において、比較的新しい治療法であるため、長期的な有効性や安全性については、まだ多くのデータが蓄積されていません。治療方針は、専門医によって個々の患者の症状や病態に応じて選択されます。
        </p>
        <hr class="medicine_line">
        <p class="doctor">
            サフネローの服用には、医師の指示に従うことが非常に重要です。<br>
            特に、副作用の監視などが重要です。
        </p>
    </section>

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/aboutmedicine/')); ?>">薬について</a>
            <a class="page-next" href="<?php echo esc_url( home_url('/gappeisyo/')); ?>"><span class="px16">起こりやすい合併症</span></a>
        </div>
        <!-- ページネーション　終わり -->
    </section>
</main>
<?php get_footer(); ?>