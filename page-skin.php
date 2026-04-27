<?php get_header(); ?>
<!-- Main -->
<main>
    <section class="BGwhite catch-copy">
        <h2 class="title2">外用薬</h2>
        <p class="title-text">ステロイド外用薬など、よく使う塗り薬を整理</p>	
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

    <section class="BGwhite medicine_width">
        <div class="kihonjouhou_left">
            <div class="medicine_name_box">
                <p class="syurui">外用薬</p>
            </div>
        </div>
        <div class="index_box">
            <p class="index">もくじ</p>
            <ul>
                <li><a href="#syouen">経皮吸収型鎮痛・消炎剤</a></li>
                <li><a href="#hositu">保湿剤</a></li>
                <li><a href="#steroid">外用のステロイド</a></li>
                <li><a href="#steroid_strong">外用薬のステロイドの強さ</a></li>
                <li><a href="#steroid_fukusayo">外用薬のステロイドの副作用</a></li>
                <li><a href="#other">その他</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="syouen">
        <div class="kouka_wrapper">
            <div class="syouen_flex">
                <div class="syouen_left">
                    <h5 class="medicine_title">経皮吸収型鎮痛・消炎剤</h5>
                    <p class="kouka_subtitle">
                        フェルビナクスチック軟膏<br>
                        抗炎症薬（NSAIDs）の一種です。主成分としてフェルビナクスという成分が含まれています。-6の働きを抑制することで、炎症を緩和する作用があります。<br>
                        フェルビナクスチック軟膏の効用
                    </p>
                    <ul class="kouka_list">
                        <li class="kouka_item">抗炎症作用：フェルビナクスが炎症を抑える働きがあります。関節炎や腱鞘炎、捻挫などの痛みや腫れを軽減します。</li>
                        <li class="kouka_item">鎮痛作用：フェルビナクスが痛みを和らげる働きがあります。筋肉痛や腰痛、肩こりなどの症状を緩和します。</li>
                        <li class="kouka_item">筋弛緩作用：フェルビナクスが筋肉を弛緩させる働きがあります。筋肉のこわばりや痙攣を和らげます。</li>
                        <li class="kouka_item">血行促進作用：フェルビナクスが血行を促進することで、炎症部位の代謝を活性化し、治癒を促進します。</li>
                    </ul>
                    <p>フェルビナクスチック軟膏は、関節炎や腱鞘炎、捻挫、打撲、筋肉痛、腰痛、肩こり、頚部痛などの症状を和らげるために用いられます。しかし、副作用として、かぶれや発疹、かゆみ、かぜ症状などが現れる場合があります。</p>
                </div>
            </div>
            <img class="syouen_img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ferubina.webp" alt="">
        </div>
    </section>

    <section class="BGwhite" id="hositu">
        <h5 class="medicine_title">保湿剤</h5>
        <p class="tiryou_tokutyou">ヒルドイド　（後発品：ヘパリン類似物質）</p>
        <ul class="kouka_list">
            <li class="kouka_item"><span class="highlighter">保湿作用</span>：尿素が皮膚の角質層に浸透し、水分を保持することで、皮膚をしっとりと保ちます。</li>
            <li class="kouka_item"><span class="highlighter">抗炎症作用</span>：ヘパリンが炎症を抑える働きがあります。皮膚炎やかゆみなどの症状を軽減します。</li>
            <li class="kouka_item"><span class="highlighter">瘢痕治療作用</span>：ヒルドイドは、傷跡やあざなどの瘢痕を改善することができます。瘢痕の赤みや硬さを軽減する効果があります。</li>
            <li class="kouka_item"><span class="highlighter">血行促進作用</span>：ヘパリンが血行を促進し、皮膚の代謝を活性化することで、皮膚の健康を維持します。</li>
            <li class="kouka_item"><span class="highlighter">角質柔軟化作用</span>：尿素が角質層を柔軟化することで、角質の厚さを薄くし、皮膚の透明感を高めます</li>
        </ul>
        <p class="about_hositu">
            保湿剤を使うことで皮膚を保湿し、かゆみを軽減することができます。また、皮膚が乾燥していると、痒みによって掻いてしまい、皮膚が傷ついて感染症を引き起こすリスクが高まります。保湿剤を使うことで、皮膚を健康に保ち、感染症のリスクを軽減することができます。<br>
            さらに、SLEによる皮疹には、紫外線によって悪化することがあります。保湿剤には紫外線吸収剤が含まれているものがあり、このような保湿剤を使うことで、皮膚を紫外線から守ることができます。
        </p>
        <div class="hositu_flex">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hirudoido.webp" alt="ヒルロイドクリーム">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/heparin.webp" alt="ヘパリン">
        </div>
    </section>

    <section class="BGcream" id="steroid">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">外用のステロイド</h5>
            <p>アンテベート（後発：ベタメタゾン酪酸エステルプロピオン酸エステル）<br>
                抗炎症作用を有するステロイド外用剤で、皮膚の赤みや腫れ、かゆみなどの症状を改善するために使用されます。 ステロイド外用薬は強さにより5段階に分類されますが、アンテベートの強さは上から2番目のベリーストロングクラスです。
            </p>
            <div class="steroid_flex">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/antebeto.webp" alt="アンテベート">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/betametazon.webp" alt="ベタメタゾン">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/betametazon_cream.webp" alt="ベタメタゾン">
            </div>
            <p>
                マイザー<br>
                （後発：ジフルプレドナート）<br><br>

                合成副腎皮質ステロイドで、血管収縮作用、抗炎症作用などにより、皮膚の炎症症状を緩和します。 通常、湿疹・皮膚炎群、痒疹群、虫さされ、薬疹・中毒疹、円形脱毛症、ケロイドなど広範囲の皮膚疾患の治療に用いられます。
            </p>
            <img class="maiza_img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/maiza.png" alt="マイザー">
        </div>
    </section>

    <section class="BGwhite" id="tyuui">
        <h5 class="medicine_title">ステロイド外用薬の上手な付き合い方</h5>
        <ul class="kouka_list">
            <li class="kouka_item"><span class="highlighter">優しく塗る</span>：薬をすり込まず、優しく伸ばして塗りましょう</li>
            <li class="kouka_item"><span class="highlighter">適量を塗る</span>：1FTUを基本に塗るようにしましょう（1FTUとは人差し指の第一関節まで薬を押し出した量0.5mg）</li>
            <li class="kouka_item"><span class="highlighter">長時間使用しない</span>：5〜6日間使用しても良くならない時は再度病院に受診してください。</li>
            <li class="kouka_item"><span class="highlighter">通常は一日1〜2回の塗布</span>：よくなってきたら回数を減らすかノンステロイドタイプの皮膚用薬に変えましょう</li>
            <li class="kouka_item"><span class="highlighter">化膿している患部には</span>：抗生物質の入った皮膚用薬を使いましょう</li>
        </ul>
    </section>
    <section class="BGcream" id="steroid_strong">
        <div class="fukusayo_wrapper">
        <h5 class="medicine_title">ステロイド外用薬の強さ</h5>
        <p>
            外用のステロイド剤には、使用する部位や炎症の程度に応じて様々な強さのものがあります。一般的には、ステロイドの強さを表すポテンシーと呼ばれる指標によって、ランク付けされることがあります。以下は、ポテンシーによってランク付けされた外用ステロイド剤の例です。
        </p>
            <table>
                <tr>
                    <th class="fukusayo_tableth">
                        strongest <br>
                        (最も強い)
                    </th>
                    <td class="fukusayo_tabletd">デルモベート、ジフラール</td>
                </tr>
                <tr>
                    <th class="fukusayo_tableth">
                        very strong <br>
                        (とても強い)
                    </th>
                    <td class="fukusayo_tabletd">
                        フルメタ、アンテベート、トプシム、リンデロンDP、マイザー、ビスダーム
                    </td>
                </tr>
                <tr>
                    <th class="fukusayo_tableth">
                        強い <br>
                        （strong）
                    </th>
                    <td class="fukusayo_tabletd">メサデルム、ボアラ、ベトネート、プロパデルム、フルコート、リドメックス</td>
                </tr>
                <tr>
                    <th class="fukusayo_tableth">
                        普通 <br>
                        （medium）
                    </th>
                    <td class="fukusayo_tabletd">レダコート、キンダベート、ロコイド、アルメタ</td>
                </tr>
                <tr>
                    <th class="fukusayo_tableth">
                        弱い <br>
                        （weak）
                    </th>
                    <td class="fukusayo_tabletd">コルテス、プレドニゾロン</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">
                ステロイド外用薬の吸収率は<br>
                腕を1とした場合<br>
                頭皮は3.5<br>
                手のひらは0.8 <br>
                足の裏は0.1 <br>
                頬は13 <br>
                陰部は42 <br>
                と、主に皮膚の厚さによって異なる
            </p>
        </div>
    </section>

    <section class="BGwhite" id="fukusayo">
        <h5 class="medicine_title">外用薬のステロイドの副作用</h5>
        <ul class="kouka_list">
            <li class="kouka_item"><span class="highlighter">皮膚の萎縮や色素沈着</span>：ステロイドを長期間使用すると、皮膚が薄くなり、色素沈着が起こることがあります。特に、顔や陰部などの皮膚が薄く、敏感な部位に使用する場合には注意が必要です。</li>
            <li class="kouka_item"><span class="highlighter">乾燥や痒み</span>：ステロイドを使用すると、皮膚の油分が減少し、乾燥や痒みが生じることがあります。この場合には、保湿剤の使用が有効です。</li>
            <li class="kouka_item"><span class="highlighter">毛細血管拡張や毛細血管浮腫</span>：皮膚の血管が拡張することで、赤みが生じたり、皮膚が浮腫むことがあります。</li>
            <li class="kouka_item"><span class="highlighter">皮膚感染症</span>：ステロイド使用によって、皮膚のバリア機能が低下し、感染症を引き起こすリスクが増加することがあります。</li>
            <li class="kouka_item"><span class="highlighter">ステロイド離脱症候群</span>：ステロイドを長期間使用していると、突然ステロイドを中止すると、離脱症状が現れることがあります。離脱症状には、頭痛、倦怠感、筋肉痛、関節痛、吐き気、発熱などが含まれます。</li>
        </ul>
    </section>

    <section class="BGcream" id="other">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">その他</h5>
            <div class="other_flex">
                <p>
                    プロスタンディン<br><br>

                    褥瘡（床ずれ）、潰瘍ができている部分の血流を改善し、肉芽形成および表皮形成を促進します。
                </p>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/IMG_0025 1.png" alt="プロスタンティン">
            </div>
            <div class="other_flex">
                <p>
                    プロトピック<br><br>

                    プロトピックは、主成分としてタクロリムスを含む外用薬で、炎症性皮膚疾患の治療に用いられます。プロトピックは、以下のような効果があります。<br>
                    抗炎症作用：タクロリムスが炎症を抑える働きがあります。アトピー性皮膚炎や接触性皮膚炎などの症状を軽減します。<br>
                    免疫抑制作用：タクロリムスが免疫系を抑制する働きがあります。自己免疫疾患の治療にも使用されます。
                </p>
                <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img21.png" alt="プロトピット"> -->
            </div>
            
            <hr class="medicine_line">
            <p class="doctor">
                外用薬には、医師の指示に従うことが非常に重要です。
            </p>
        </div>
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