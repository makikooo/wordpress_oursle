<?php get_header(); ?>

<!-- Main -->
<main id="medicine_wrapper tiryouhouhou">
    <section class="BGwhite catch-copy">
        <h2 class="title2">副腎皮質ステロイド剤</h2>
        <p class="title-text">ステロイド治療の目的と“つき合い方”</p>	
    </section>
    <section class="BGpink future">
        <figure>
            <img class="sle-tell-img" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/flower.png" alt="一輪の花">
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


    <section class="BGwhite medicine_width">
        <div class="flex">
            <div class="kihonjouhou_left">
                <div class="medicine_name_box">
                    <h4 class="highlighter medicine_name">副腎皮質ステロイド剤</h4>
                </div>
            </div>
        </div>
        <p class="steroid_overview">
            基本的に飲み薬（内服薬）として服用します。<br>
            重症度によっては量が増えたりします。<br>
            重症な場合は入院して大量のグルココルチコイドを点滴する<span class="bold">パルス療法</span>を行うこともあります。
        </p>
        <div class="index_box">
            <p class="index">もくじ</p>
            <ul>
                <li><a href="#kouka">ステロイド剤の効果</a></li>
                <li><a href="#syurui">ステロイドの種類</a></li>
                <li><a href="#time">ステロイドの作用時間と違い</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#fukusayo_time">副作用の期間</a></li>
                <li><a href="#fukusayo_yobou">副作用の予防と治療</a></li>
                <li><a href="#tyuui">ステロイド剤の注意点</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
        <h5 class="medicine_title">ステロイド剤の効果</h5>
        <ul class="kouka_list">
            <li class="kouka_item"><span class="highlighter">抗炎症作用</span>：細胞内の転写因子である核内受容体に作用し、転写因子の働きを抑制する作用があります。この作用により、炎症反応の進行を抑制し、症状の緩和につながります。</li>
            <li class="kouka_item"><span class="highlighter">抗アレルギー作用</span>：免疫細胞の活性化を抑制し、アレルギー反応を抑制する作用があります。この作用により、アレルギー性皮膚炎や喘息などの症状の緩和につながります。</li>
            <li class="kouka_item"><span class="highlighter">免疫を抑制する働き</span></li>
            <li class="kouka_item"><span class="highlighter">使用法</span>：経口薬や注射剤などの形で投与されます。投与量や使用期間は、患者の症状や病態に合わせて、医師が適切に決定します</li>
        </ul>
        </div>
    </section>

    <section class="BGwhite suteroid" id="syurui">
        <h5 class="medicine_title">副腎皮質ステロイド剤の代表的な種類</h5>
        <h6 class="syurui"><span class="highlighter">プレドニン</span><br class="sp-only">（後発品：プレドニゾロン）</h6>
        <!-- <p class="suteroid_yakka">薬価　先発後発ともに9.80円/5mg</p> -->
        <p class="suteroid_text">室温で保管してください</p>
        <div class="puredonin_flex">
        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/puredonin.webp" alt="プレドニンの写真">
        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/puredonizoron.webp" alt="プレドニゾロンの写真">
        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/puredonizoron1.webp" alt="プレドニゾロン1mgの写真">
        </div>

        <h6 class="syurui"><span class="highlighter">デカドロン<br class="sp-only"></span>（一般名：デキサメタゾン）</h6>
        <!-- <p class="suteroid_yakka">薬価　5.70円/0.5mg</p> -->
        <p class="suteroid_text">炎症を抑制する効果があり、より長期間作用するため、短期間の使用での治療に適しています。</p>

        <h6 class="syurui"><span class="highlighter">コートリル</span><br class="sp-only">（一般名：ヒドロコルチゾン）</h6>
        <!-- <p class="suteroid_yakka">薬価　7.40円/10mg</p> -->
        <p class="suteroid_text">プレドニゾロンと同様に一般的なステロイド薬です。</p>

        <h6 class="syurui"><span class="highlighter">リンデロン</span><br class="sp-only">（後発品：ベタメタゾン）</h6>
        <!-- <p class="suteroid_yakka">薬価　11.40円/0.5mg</p> -->
        <p class="suteroid_text"> 効果は非常に早くすぐに効きます。 排泄も早いと言われます</p>

    </section>

    <section class="BGcream" id="time">
        <div class="fukusayo_wrapper">
        <h5 class="medicine_title">ステロイドの作用時間と違い</h5>

        <div class="suteroid_box">
            <p class="index">ステロイドの作用時間</p>
            <p ><span class="highlighter">短時間作用型　半日弱（8〜12時間）</span>：<br class="sp-only">コートリル・ソルコーテフ</p>
            <p><span class="highlighter">中時間作用型  1日前後（12〜36時間）</span>：<br class="sp-only">プレドニン・メドロール</p>
            <p><span class="highlighter">長時間作用型　2日前後（36〜56時間）</span>：<br class="sp-only">デカドロン・リンデロン</p>
        </div>

        <div class="suteroid_box">
            <p class="index">抗炎症作用の違い</p>
            <p>コートリル20mgに対して<br><br>

            プレドニン5mgに相当<br>
            メドロール4mgに相当<br>
            デカドロン0.75mgに相当<br>
            リンデロン0.6mgに相当します。</p>
        </div>

        </div>
    </section>

    <section class="BGwhite suteroid" id="fukusayo">
        <h5 class="medicine_title">ステロイドの副作用</h5>
        <p class="tiryou_tyuui">
        副作用は、プレドニンの使用量や使用期間によって異なる場合があります。
        </p>
        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/fukusayo.jpg" alt="副作用のイメージ" class="fukusayo_img">
        
        <h6 class="fukusayo_subtitle">特に注意すべき副作用</h6>
        <p class="fukusayo_text">
            正常な免疫低下による感染症<br>
            骨頭無菌性壊死<br>
            動脈硬化（心筋梗塞、脳梗塞、動脈瘤、血栓症）<br>
            副腎不全、ステロイド離脱症状<br>
            消化管障害（出血、潰瘍、穿孔、閉塞）<br>
            糖尿病の誘発・増悪<br>
            精神神経障害（精神変調・うつ状態・けいれん）
        </p>
        <h6 class="fukusayo_subtitle">他の注意すべき副作用</h6>
        <p class="fukusayo_text">
            生ワクチンによる発症<br>
            不活化ワクチンの効果減弱<br>
            白内障、緑内障、視力障害、失明<br>
            高血圧、浮腫、うっ血性心不全、不整脈<br>
            脂質異常症<br>
            肥満<br>
            低K血症<br>
            尿路結石、尿中Ca排泄増加<br>
            ステロイド筋症<br>
            膵炎、肝機能障害<br>
            骨粗鬆症
        </p>
        <h6 class="fukusayo_subtitle">高頻度の軽症副作用</h6>
        <p class="fukusayo_text fukusayo_last_text">
            異常脂肪沈着（中心性肥満、満月のように顔が丸くなるムーンフェース、野牛肩、眼球突出）<br>
            ニキビ<br>
            ざ瘡、多毛症、皮膚線条、皮膚萎縮、皮下出血、発汗異常<br>
            月経異常（周期異常、無月経、過多・過少月経）<br>
            食欲亢進、体重増加、さまざまな消化器症状<br>
            白血球増加
        </p>

        <p class="doctor">
        医師の指示に従って正しい<br class="sp-only">用法で使用することが重要です。<br>
        また、突然の中止はショック状態を<br class="sp-only">引き起こすことがあるため、<br>
        使用中には医師の指示を<br class="sp-only">受ける必要があります。
        </p>
    </section>

    <section class="BGcream" id="fukusayo_time">
        <div class="fukusayo_wrapper">
        <h5 class="medicine_title">ステロイドの副作用の時期</h5>
        <ul>
            <li class="steroid_li"><span class="highlighter bold">数時間から（大量投与）</span>：食欲亢進、不眠、うつ、不整脈</li>
            <li class="steroid_li"><span class="highlighter bold">数日から　（中等量以上）</span>：高血圧、不整脈、精神障害、浮腫、高血糖</li>
            <li class="steroid_li"><span class="highlighter bold">2〜3週間</span>：副腎抑制、コレステロール上昇、耐糖能異常、創傷治療が長引く、ステロイド潰瘍</li>
            <li class="steroid_li"><span class="highlighter bold">1ヶ月〜2ヶ月（中等量以上）</span>：感染症にかかりやすい、中心性肥満、多毛、ざ瘡、無月経、無菌性骨壊死、ムーンフェイス、緑内障、ステロイド筋症、消化性潰瘍、紫斑、皮膚線条、皮膚萎縮、ステロイド筋症</li>
            <li class="steroid_li"><span class="highlighter bold">長期（少量でも）</span>：白内障、骨粗鬆症、圧迫骨折（骨が弱くなり背骨を骨折することがよくある）、感染症（ウィルス・結核）、結核、二次性副腎不全、動脈硬化も進んでしまい脳梗塞を起こしてマヒを残す</li>
        </ul>
        </div>
    </section>

    <section class="BGwhite suteroid" id="fukusayo_yobou">
        <h5 class="medicine_title">副作用の予防と治療</h5>
        <ul>
        <li class="steroid_li"><span class="highlighter bold">感染症</span>：手洗い、マスク、うがい、栄養状態の維持、ワクチン接種</li>
        <li class="steroid_li"><span class="highlighter bold">耐糖能異常</span>：血糖測定、間食を控える、適度な運動</li>
        <li class="steroid_li"><span class="highlighter bold">高血圧</span>：減塩、体重管理、適度な運動</li>
        <li class="steroid_li"><span class="highlighter bold">脂質異常</span>：体重管理、適度な運動</li>
        <li class="steroid_li"><span class="highlighter bold">骨粗鬆症</span>：程度な日光浴と運動、Ca,ビタミンDの接種、骨塩の測定、適度なカルシウム摂取、骨粗鬆症の治療薬</li>
        <li class="steroid_li"><span class="highlighter bold">消化器潰瘍</span>：潰瘍治療薬（特に鎮痛剤を併用しているとき）</li>
        <li class="steroid_li"><span class="highlighter bold">精神障害（多幸、うつ、過食）</span>：精神科、神経内科的な管理</li>
        </ul>
    </section>

    <section class="BGcream" id="steroid_tyuui">
        <div class="kouka_wrapper">
        <h5 class="medicine_title">ステロイド剤の注意点</h5>
        <p class="fukusayo_text fukusayo_last_text">
            体調がよくなったと自己判断して使用を中止したり、量を減らしたりすると、<span class="highlighter">離脱症状の発熱、頭痛、食欲不振、脱力感、倦怠感、血圧低下、筋肉痛、関節痛や重症の時はショック状態になる</span>こともあります。中止する場合は徐々に減量されます。医師の指示どおりに飲み続けることが重要です。
        </p>
        <hr class="medicine_line">
        <p class="doctor">
            ステロイドの服用には、<br class="sp-only">医師の指示に従うことが<br class="sp-only">非常に重要です。<br>
            特に、副作用の監視などが重要です。
        </p>
        </div>
    </section>

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url(home_url('/aboutMedicine/')); ?>">薬について</a>
            <a class="page-next" href="<?php echo esc_url(home_url('/gappeisyo/')); ?>"><span class="px16">起こりやすい合併症</span></a>
        </div>
        <!-- ページネーション　終わり -->
    </section>           
</main>

<?php get_footer(); ?>