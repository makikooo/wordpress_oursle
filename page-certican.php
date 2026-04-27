<?php get_header(); ?>
<!-- Main -->
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">サーティカン</h2>
        <p class="title-text">効果・飲み方・注意点をまとめました（エベロリムス）</p>	
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
                    <p class="syurui">免疫抑制剤</p>
                    <h4 class="highlighter medicine_name">サーティカン</h4>
                </div>
                <!-- <p class="yakka_title">薬価</p>
                <p class="yakka">1,063.80円<span class="medicine1">(0.75mg1錠)</span></p> -->
                <p class="tiryo_doctor">
                    SLEの従来の治療法と併用されることがあります。適切な医療専門家の監視の下で使用する必要があります
                </p>
            </div>
            <!-- <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/seruseputo.webp" alt="サーティカンの写真"> -->
        </div>
        <div class="index_box">
            <p class="index">index</p>
            <ul>
                <li><a href="#kouka">サーティカンの効果</a></li>
                <li><a href="#SLE_tiryou">サーティカンのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
    </section>

    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">サーティカンの効果</h5>
            <p class="kouka_subtitle">
                腎細胞がん（腎細胞癌）や、脳腫瘍である脳下垂体腫瘍、血管腫などの治療に使用されます。
            </p>
            <ul class="kouka_list">
                <li class="kouka_item"><span class="highlighter">腫瘍細胞の増殖を抑制</span>：ターゲットとなる酵素であるmTOR（マンマリアン・ターゲット・オブ・ラピャマイシン）の活性を阻害することで、細胞の増殖や生存に必要なシグナル伝達を妨げ、がん細胞や腫瘍細胞の増殖を抑制する作用があります。</li>
            </ul>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">サーティカンのSLEの治療の特徴</h5>
        <p class="tiryou_tokutyou">免疫抑制作用があることから、SLEによる自己免疫疾患の症状を改善する効果が期待できます。</p>
        <ul>
            <li>細胞の増殖や生存に必要なシグナル伝達を妨げることで、自己免疫反応を抑制する作用があります。これにより、SLEによる関節炎や皮膚症状などの炎症が緩和され、症状の改善が期待できます。</li>
            <li>SLEによる腎炎（腎臓の炎症）の治療にも使用されます。腎炎は、SLEの合併症として非常に重篤な症状の一つであり、早期の治療が必要です。エベロリムスは、腎臓の炎症を抑制することで、腎機能の改善や腎炎の進行を遅らせる効果が期待されます。</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">サーティカンの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">感染症</th>
                    <td class="fukusayo_tabletd">感染症の発症や再発が報告されており、特に肺炎や尿路感染症、ウイルス感染症などが多く報告されています。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">消化器症状</th>
                    <td class="fukusayo_tabletd">下痢、嘔吐、口内炎などが報告されています。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">高血圧</th>
                    <td class="fukusayo_tabletd">高血圧を引き起こすことがあります</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">腎障害</th>
                    <td class="fukusayo_tabletd">腎機能障害、腎炎などの症状が現れることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">血糖値上昇</th>
                    <td class="fukusayo_tabletd">血糖値の上昇を引き起こすことがあります</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">脂質異常症</th>
                    <td class="fukusayo_tabletd">脂質異常症（高脂血症）を引き起こすことがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">その他</th>
                    <td class="fukusayo_tabletd">間質性肺炎、心血管障害、悪性腫瘍の発生リスクが高まることがあります。</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">サーティカンの副作用は、患者によって異なります。<br>
                治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
                定期的な検査やフォローアップが必要なため、<br>
                医師の指示に従って治療を受けるようにしましょう。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">サーティカンの注意点</h5>
        <ul class="kouka_list">
            <li class="kouka_item"><span class="highlighter">感染症リスク</span>：免疫抑制剤であるため、感染症のリスクが高くなることがあります。感染症を引き起こした場合は、治療が必要です。また、予防的な措置として、手洗いやマスクの着用などが推奨されます。</li>
            <li class="kouka_item"><span class="highlighter">脂質異常症</span>：脂質異常症（高脂血症）を引き起こすことがあります。定期的な血液検査が必要です。</li>
            <li class="kouka_item"><span class="highlighter">血糖値上昇</span>：血糖値の上昇を引き起こすことがあります。糖尿病のある患者さんは、血糖値を定期的にチェックする必要があります。</li>
            <li class="kouka_item"><span class="highlighter">妊婦への投与</span>：妊婦への投与により、胎児に影響を及ぼす可能性があります。妊娠中・授乳中の場合は、医師と相談してください。</li>
            <li class="kouka_item"><span class="highlighter">重篤な副作用</span>：間質性肺炎、心臓病や脳卒中、悪性腫瘍などが報告されています。これらの副作用が現れた場合には、すぐに医師に相談し、適切な対処を行うようにしましょう。</li>

        </ul>
        <hr class="medicine_line">
        <p class="doctor">
            サーティカンの服用には、医師の指示に従うことが非常に重要です。<br>
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