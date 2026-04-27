<?php get_header(); ?>
<main id="medicine_wrapper">
    <section class="BGwhite catch-copy">
        <h2 class="title2">イムラン</h2>
        <p class="title-text">免疫を調整する薬：イムランの基本がわかる</p>	
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
                    <h4 class="highlighter medicine_name">イムラン</h4>
                </div>
                <!-- <p class="yakka_title">薬価</p>
                <p class="yakka">97.5円<span class="medicine1">(50mg1錠)</span></p> -->

                <p class="tiryo_doctor">
                    治療抵抗性のリウマチ性疾患に有用であり、従来の治療法と併用されることがあります。しかし、これらの薬剤には副作用があり、適切な医療専門家の監視の下で使用する必要があります。
                </p>
            </div>
            <img class="medicine_img_right" src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/images/imuran.webp" alt="イムランの写真">
        </div>
        <div class="index_box">
            <p class="index">index</p>
            <ul>
                <li><a href="#kouka">イムランの効果</a></li>
                <li><a href="#SLE_tiryou">イムランのSLEの治療の特徴</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui">注意点</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">イムランの効果</h5>
            <p class="kouka_subtitle">
            イムランは、免疫抑制薬の一種であり、過剰に働いている免疫を抑えることで、炎症を鎮める働きがあります。イムランには以下のような効果があります。
            </p>
            <ul class="kouka_list">
                <li class="kouka_item"><span class="highlighter">免疫抑制効果</span>：移植後に免疫システムが移植臓器を攻撃するのを防ぐために使用されます。イムランは、T細胞の活性化を抑制することにより、免疫システムを抑制する効果があります。</li>
                <li class="kouka_item"><span class="highlighter">抗炎症効果</span>：炎症反応を抑制する効果があります。特に、自己免疫疾患（ループスや関節リウマチなど）や、慢性的な炎症を引き起こす疾患（クローン病や潰瘍性大腸炎など）に対して有効です。</li>
                <li class="kouka_item"><span class="highlighter">腎臓病の治療効果</span>：腎臓病の治療にも使用されます。イムランは、腎臓の免疫システムに対する攻撃を抑制し、病気の進行を遅らせることができます。</li>
                <li class="kouka_item"><span class="highlighter">他の免疫抑制薬との併用効果</span>：他の免疫抑制薬との併用により、より強力な免疫抑制効果を発揮することができます。このため、複数の免疫抑制薬を併用することで、移植手術後の拒絶反応を抑制することができます。</li>
            </ul>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">イムランのSLEの治療の特徴</h5>
        <ul>
            <li>SLEにおいては、免疫系の異常によって引き起こされる炎症を抑えるために使用されます。</li>
            <li>主に重度の皮膚症状や腎炎などの内臓炎症の治療に使用されます。</li>
            <li>SLEにおいてステロイド薬の使用量を減らすためにも使用されることがあります。</li>
            <li>腎炎の治療：SLEに伴う腎炎の治療に使用されることがあります。</li>
            <li>投与開始後数か月間は効果が現れにくく、投与期間中は定期的な血液検査が必要となります。</li>
        </ul>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">イムランの副作用</h5>
            <table>
                <tr>
                    <td class="fukusayo_tableth">吐き気</th>
                    <td class="fukusayo_tabletd">気持ちが悪くなったり、吐き気を催すことがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">全身倦怠感</th>
                    <td class="fukusayo_tabletd">風邪をひいた時のようななんとなくだるい感じがするなどの倦怠感や、筋痛、関節痛があらわれることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">骨髄抑制</th>
                    <td class="fukusayo_tabletd">血液をつくる骨髄の機能が低下し、血液成分（赤血球・白血球・血小板）が少なくなることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">感染症</th>
                    <td class="fukusayo_tabletd">発熱、悪寒、咳などの症状があらわれることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">脱毛</th>
                    <td class="fukusayo_tabletd">腹痛や食欲不振などの症状があらわれることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">膵炎</th>
                    <td class="fukusayo_tabletd">蕁麻疹、発疹、かゆみ、息苦しさなどの過敏症が生じることがあります。</td>
                </tr>
                <tr>
                    <td class="fukusayo_tableth">ショック様症状</th>
                    <td class="fukusayo_tabletd">お薬の服用後に、寒気、震え、意識の低下などの症状があらわれることがあります。</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">
                イムランの副作用は、患者によって異なります。<br>
                治療中に副作用が現れた場合には、早期に医師に相談することが重要です。<br>
                また、定期的な検査やフォローアップが必要なため、医師の指示に従って治療を受けるようにしましょう。
            </p>
            <p class="kaihen">SANDOZ株式会社　「潰瘍性大腸炎ネット」引用</p>
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">イムランの注意点</h5>
        <p class="tiryou_tyuui">
            イムランは、アジャンタンやアルロプリノールなどの薬剤と併用する場合には、副作用のリスクが高まるため注意が必要です。<br><br>
            <span class="bold">医師の指示に従う</span><br><br>
            <span class="bold">定期的な血液検査</span><br><br>
            <span class="bold">感染症への注意</span><br>
            <span class="bold">生ワクチンの接種は医師と相談してください。</span><br>
            <br>
            <span class="bold">食事との併用に注意すること</span><br>
            感染症の症状（発熱、咳、下痢など）が現れた場合は、すぐに医師に相談してください。<br>
            <br>
            <span class="bold">避妊の必要性</span><br>
            イムランは、妊娠中や授乳中の女性には禁忌とされています。また、イムランを服用する男性は、イムランの影響で生殖能力が低下する可能性があるため、避妊をする必要があります。<br>
            <span class="bold">薬物相互作用</span><br>
            イムランは、アジャンタンやアルロプリノールなどの薬剤と併用する場合には、副作用のリスクが高まるため注意が必要です。。特に、鎮痛剤や抗生物質、抗真菌薬などの薬剤との相互作用には注意が必要です。
        </p>
        <hr class="medicine_line">
        <p class="doctor">
            イムランの服用には、医師の指示に従うことが非常に重要です。<br>
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