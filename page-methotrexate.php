<?php get_header(); ?>
<!-- Main -->
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">メトトレキサート</h2>
        <p class="title-text">メトトレキサート（MTX）の基本がわかるページ</p>	
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

    <section class="BGwhite methotrexate medicine_width">
        <div class="flex">
            <div class="kihonjouhou_left">
                <div class="medicine_name_box">
                    <p class="senpatu">後発品</p>
                    <p class="syurui">免疫抑制剤</p>
                    <h4 class="highlighter medicine_name">メトトレキサート</h4>
                </div>
                <p class="yakka_title">薬価</p>
                <p class="yakka">97.40円<span class="medicine1">(2mg1錠)</span></p>
                <p class="kouhatu_title">先発品名</p>
                <p class="kouhatu">リウマトレックスカプセル2mg（剤形違い）</p>

                <p class="tiryo_doctor">
                    SLEの症状の管理に有用であり、従来の治療法と併用されることがあります。しかし、これらの薬剤には副作用があり、適切な医療専門家の監視の下で使用する必要があります。
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/metotorekisato.webp" alt="メトトレキサートの写真">
        </div>
        <div class="index_box">
            <p class="index">index</p>
            <ul>
                <li><a href="#kouka">メトトレキサートの効果</a></li>
                <li><a href="#SLE_tiryou">メトトレキサートのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">メトトレキサートの効果</h5>
            <p class="kouka_subtitle">
                メトトレキサートは、関節リウマチの免疫系を抑制することによって、炎症を抑える効果が期待されます。<br>
                免疫細胞の中でも特に細胞分裂を必要とするB細胞やT細胞の働きを抑制することで、炎症を抑え、免疫疾患の症状を改善します。
            </p>
            <ul class="kouka_list">
                <li class="kouka_item"><span class="highlighter">葉酸の働きを妨げる</span>：主に葉酸というビタミンの働きを妨げることにより効き目をあらわします。また、アデノシンという炎症を抑える物質を増やす働きもあります</li>
                <li class="kouka_item"><span class="highlighter">炎症の抑制効果</span>：免疫系の働きを抑制するため、炎症を起こす細胞や物質の働きを抑える効果があります。このため、リウマチや乾癬などの自己免疫疾患や、関節リウマチ、乾癬性関節炎などの関節痛の治療に使用されます。</li>
                <li class="kouka_item"><span class="highlighter">関節の壊れを抑える</span>：症状の改善に加えて、関節の軟骨や骨の壊れを抑えることもわかっています。</li>
                <li class="kouka_item"><span class="highlighter">抗がん剤としての効果</span>：細胞のDNA合成を妨げ、がん細胞の増殖を抑制する効果があります。悪性リンパ腫や白血病などのがんの治療に使用されます。</li>
                <li class="kouka_item"><span class="highlighter">免疫抑制効果</span>：免疫系の働きを抑制するため、移植手術などで拒絶反応を起こすのを抑える効果があります。</li>
            </ul>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">メトトレキサートのSLEの治療の特徴</h5>
        <p class="tiryou_tokutyou">SLEの治療では、メトトレキサートは免疫系の異常を抑制し、病状の進行を遅らせることが期待されます。</p>
        <ul>
            <li><span class="highlighter">関節病変</span>：症状の改善に加えて、関節の軟骨や骨の壊れを抑えることもわかっています。</li>
            <li><span class="highlighter">皮膚症状の改善</span>：SLEによる皮膚症状の改善にも効果があります。</li>
            <li>口から飲む錠剤、筋肉注射、静脈注射、皮下注射などの方法で投与されます。SLEの場合には、低用量のメトトレキサートが使用されることが多く、通常は週に1回の投与となります。</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">メトトレキサートの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">血球減少症</th>
                    <td class="fukusayo_tabletd">メトトレキサートが細胞の増殖を強く抑えすぎると、白血球、赤血球や血小板が減少することがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">間質性肺炎</th>
                    <td class="fukusayo_tabletd">肺胞という肺の中の一番小さな部屋の壁に炎症がおきる病気が間質性肺炎です。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">感染症</th>
                    <td class="fukusayo_tabletd">肺炎、尿路感染症（膀胱炎や腎盂炎）、敗血症、皮膚や関節の感染症など急性の感染症がおきることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">リンパ腫</th>
                    <td class="fukusayo_tabletd">リンパ腫という病気が出現することがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">肝機能障害</th>
                    <td class="fukusayo_tabletd">軽度の肝機能障害のときは、自覚症状は全くありませんので、定期検査で早期発見することが重要です。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">その他</th>
                    <td class="fukusayo_tabletd">吐き気、口内炎、頭痛</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">メトトレキサートの副作用は、患者によって異なります。<br>
            メトトレキサートの使用中は、血液検査や肝機能検査などの定期的な検査が必要となります。<br>
            治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
            定期的な検査やフォローアップが必要なため、<br>
            医師の指示に従って治療を受けるようにしましょう。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">メトトレキサートの注意点</h5>
        <p class="tiryou_tyuui">
            メトトレキサートは、流産や胎児の奇形を誘発する可能性がある薬剤として知られています。<br>
            喫煙、飲酒は控えましょう<br>
            メトトレキサートを使用中に生ワクチンを受けてはいけません。<br>
            毎年、冬場に行うインフルエンザ予防接種は不活化ワクチンですので、進んで受けてください。<br>
            <br>
            メトトレキサートの効き目は服用を始めてすぐにあらわれません。早くて2週間目ごろより関節症状が良くなり始めます。
        </p>
        <p class="kaihen">日本リウマチ学会　「メトトレキサートを服用する患者さんへ　第3版」引用</p>
        <hr class="medicine_line">
        <p class="doctor">
        SLEの治療には、患者の状態に応じて、複数の薬剤が組み合わせて使用されることがあります。<br>
        治療方針は、専門医によって個々の患者の症状や病態に応じて選択されます。
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