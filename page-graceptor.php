<?php get_header(); ?>
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">グラセプター</h2>
        <p class="title-text">効果・飲み方・注意点をまとめました（タクロリムス）</p>	
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
                    <h4 class="highlighter medicine_name">グラセプター</h4>
                </div>
                <!-- <p class="yakka_title">薬価</p>
                <p class="yakka">722.60円<span class="medicine1">(1mg1カプセル)</span></p> -->
                <p class="tiryo_doctor">
                    SLEの従来の治療法と併用されることがあります。適切な医療専門家の監視の下で使用する必要があります
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/grasepter.webp" alt="グラセプターの写真">
        </div>
        <div class="index_box">
            <p class="index">index</p>
            <ul>
                <li><a href="#kouka">グラセプターの効果</a></li>
                <li><a href="#SLE_tiryou">グラセプターのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">グラセプターの効果</h5>
            <p class="kouka_subtitle">
                グラセプターは、免疫系の異常を抑制し、病状の進行を遅らせることが期待されます、慢性腎臓病や以下のような症状に効果があることが報告されています。
            </p>
            <ul class="kouka_list">
                <li class="kouka_item"><span class="highlighter">臓器移植における拒絶反応の抑制</span>：移植後の免疫系の攻撃を防ぎ、新しい臓器の拒絶反応を抑制する効果があります。</li>
                <li class="kouka_item"><span class="highlighter">骨髄移植における拒絶反応及び移植片対宿主病の抑制。</span></li>
            </ul>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">グラセプターのSLEの治療の特徴</h5>
        <p class="tiryou_tokutyou">SLEの治療では、グラセプターは免疫系の異常を抑制し、病状の進行を遅らせることが期待されます。</p>
        <ul>
            <li>免疫が自己の細胞や移植後の臓器などを攻撃することで自己免疫疾患や移植後の拒絶反応がおこる</li>
            <li>免疫反応においてリンパ球などは中心的な役割を担い、免疫反応を引き起こすサイトカインの産生などに関わる</li>
            <li>グラセプターはリンパ球からのサイトカイン産生を抑えたり、リンパ球の増殖を抑える作用などをあらわす</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">グラセプターの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">感染症</th>
                    <td class="fukusayo_tabletd">感染症にかかりやすくなります。特に、肺炎やインフルエンザなどの呼吸器系の感染症にかかりやすくなる傾向があります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">腎機能障害</th>
                    <td class="fukusayo_tabletd">腎臓に負担をかけるため、腎機能障害が起こることがあります。定期的な腎機能検査が必要です。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">高血圧</th>
                    <td class="fukusayo_tabletd">血圧が上昇することがあります</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">糖尿病</th>
                    <td class="fukusayo_tabletd">血糖値が上昇することがあり、糖尿病を発症する可能性があります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">骨粗鬆症</th>
                    <td class="fukusayo_tabletd">長期使用すると、骨粗鬆症を引き起こすことがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">皮膚障害</th>
                    <td class="fukusayo_tabletd">ニキビ、湿疹、かゆみなどの皮膚障害が起こることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">神経障害</th>
                    <td class="fukusayo_tabletd">手足のしびれや痛み、震えなどの神経障害が起こることがあります</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">グラセプターの副作用は、患者によって異なります。<br>
            治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
            定期的な検査やフォローアップが必要なため、<br>
            医師の指示に従って治療を受けるようにしましょう。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">グラセプターの注意点</h5>
        <p class="tiryou_tyuui">
            グラセプターは免疫系を抑制するため、感染症にかかりやすくなるため、感染予防に努めてください。特に、風邪やインフルエンザに感染しないように注意が必要です。<br>
            腎機能に影響を与えるため、腎機能検査を定期的に受けるようにしてください。<br>
            グラセプターは免疫系を抑制するため、免疫力の低下によるがんの発生リスクが高まる可能性があります。定期的な健康診断を受けることが重要です。<br>
            グラセプターは食事の影響を受けやすいため、常に同じ量の食事を摂取するようにしてください。また、グレープフルーツジュースなど一部の果物との併用は避けてください。<br>
            グラセプターは、妊娠中や授乳中の女性には使用できません。また、妊娠の可能性のある女性は、必ず医師に相談してください。
        </p>
        <hr class="medicine_line">
        <p class="doctor">
            グラセプターの服用には、医師の指示に従うことが非常に重要です。<br>
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