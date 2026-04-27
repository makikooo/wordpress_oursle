<?php get_header(); ?>
<!-- Main -->
<main>
    <section class="BGwhite catch-copy">
        <h2 class="title2">非ステロイド性抗炎症薬</h2>
        <p class="title-text">飲み合わせ・副作用など、気をつけたいポイント</p>	
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
        <div class="index_box">
            <p class="index">index</p>
            <ul>
                <li><a href="#kouka">非ステロイド抗炎症薬の効果</a></li>
                <li><a href="#SLE_tiryou">非ステロイド抗炎症薬のSLEの治療の特徴</a></li>
                <li><a href="#daihyo">代表的な非ステロイド抗炎症薬</a></li>
                <li><a href="#fukusayo">副作用</a></li>
                <li><a href="#tyuui_cream">注意点</a></li>
            </ul>
        </div>
    </section>
    <section class="BGcream" id="kouka">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">非ステロイド抗炎症薬の効果</h5>
            <p class="kouka_subtitle">
                非ステロイド抗炎症薬（Nonsteroidal anti-inflammatory drugs、NSAIDs）は、炎症や痛みを軽減する効果を持つ薬剤の総称です。主に痛みや発熱、炎症の緩和に用いられます。<br>
                NSAIDsは、主に炎症反応を引き起こすプロスタグランジンという物質を抑制することで、痛みや熱、腫れなどの炎症症状を軽減する作用があります。<br>
                NSAIDsは、鎮痛作用や解熱作用があるため、頭痛、歯痛、関節痛、生理痛、風邪やインフルエンザなどの発熱に対して用いられます。また、炎症疾患やリウマチ、腰痛、関節炎、肩こりなどの痛みを緩和する目的でも使用されます。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="SLE_tiryou">
        <h5 class="medicine_title">非ステロイド抗炎症薬のSLEの治療の特徴</h5>
        <p class="tiryou_tokutyou">
            SLEの治療には、症状に合わせた多岐にわたる薬剤の使用が必要ですが、非ステロイド抗炎症薬（NSAIDs）は、痛みや関節炎などの症状を軽減するために頻繁に用いられます。<br>
            SLE患者に対するNSAIDsの適切な使用は、痛みや発熱を緩和するために用いられます。関節痛や筋肉痛には、非ステロイド系の鎮痛剤が使用されます。
        </p>
    </section>

    <section class="BGcream" id="fukusayo">
        <div class="fukusayo_wrapper">
            <h5 class="medicine_title">非ステロイド抗炎症薬の副作用</h5>
            <table>
                <tr>
                    <th class="fukusayo_tableth">消化器系の副作用</th>
                    <td class="fukusayo_tabletd">胃潰瘍、胃出血、消化器出血、腸閉塞、腸穿孔など。これらの副作用は、NSAIDsが胃酸分泌を抑制することで、胃粘膜や小腸粘膜の傷害を引き起こすことが原因です。</td>
                </tr>
                <tr>
                    <th class="fukusayo_tableth">腎障害</th>
                    <td class="fukusayo_tabletd">腎臓の機能障害、尿毒症、急性腎不全などがあります。これらの副作用は、NSAIDsが腎臓の血流を低下させ、腎臓の機能を損なうことが原因です。</td>
                </tr>
                <tr>
                    <th class="fukusayo_tableth">循環器系の副作用</th>
                    <td class="fukusayo_tabletd">高血圧、心不全、心筋梗塞、脳梗塞などがあります。これらの副作用は、NSAIDsが血管を収縮させ、血栓形成を促進することが原因です。</td>
                </tr>
                <tr>
                    <th class="fukusayo_tableth">アレルギー反応</th>
                    <td class="fukusayo_tabletd">皮膚炎、かゆみ、発疹、呼吸困難などのアレルギー反応が起こることがあります。</td>
                </tr>
                <tr>
                    <th class="fukusayo_tableth">中枢神経系の副作用</th>
                    <td class="fukusayo_tabletd">眩暈、頭痛、不眠、興奮、幻覚、意識障害などがあります。これらの副作用は、NSAIDsが中枢神経系に作用することが原因です。</td>
                </tr>
                <tr>
                    <th class="fukusayo_tableth">喘息発作の増悪</th>
                    <td class="fukusayo_tabletd">NSAIDsは喘息発作を引き起こすことがあります</td>
                </tr>
            </table>
            <p class="fukusayo_doctor">
                NSAIDsの副作用は、個人差があり、使用方法や用量によっても影響を受けます。特に、高齢者や胃潰瘍や消化器出血の既往歴がある人、または腎臓や心臓に疾患がある人は、NSAIDsの使用には注意が必要です。医師の指示に従い、適切な用法・用量を守って使用することが大切です。
            </p>
        </div>
    </section>

    <section class="BGwhite" id="daihyo">
        <h5 class="medicine_title">代表的な非ステロイド抗炎症薬</h5>
        <ul class="kouka_list">
            <li class="kouka_item">ロキソニン、ロキソニンSなど</li>
            <li class="kouka_item">ボルタレン</li>
            <li class="kouka_item">ツートラム</li>
            <li class="kouka_item">トラマール</li>
            <li class="kouka_item">セレコキシブ</li>
            <li class="kouka_item">カロナール</li>
        </ul>
        <p class="doctor">
            多くの薬剤が、内服薬、注射薬、外用薬（湿布剤・塗布剤、座薬）として使用されています。
        </p>
    </section>

    <section class="BGcream" id="tyuui_cream">
        <div class="tyuui_wrapper">
            <h5 class="medicine_title">非ステロイド抗炎症薬の注意点</h5>
            <p class="tiryou_tokutyou">
                発熱や痛みといった症状を抑える薬剤であり、病気の原因そのものを治療している薬剤ではありません。解熱鎮痛剤の使用によって症状が改善しても、病気そのものは回復していない場合がありますので注意してください。
            </p>
            <ul class="kouka_list">
                <li class="kouka_item"><span class="highlighter">用法・用量を守る</span>：NSAIDsは一般的には症状の軽減に有効ですが、用法・用量を守らないと副作用が生じることがあります。</li>
                <li class="kouka_item"><span class="highlighter">胃腸障害に注意</span>：胃腸障害を引き起こす可能性があるため、胃潰瘍や胃炎、消化器出血などの既往歴がある場合や高齢者、喫煙者、アルコール摂取者などは、使用に注意が必要です。食事と一緒に摂ることで胃腸への負担を軽減することができます。</li>
                <li class="kouka_item"><span class="highlighter">腎障害に注意</span>：腎臓の機能障害を引き起こす可能性があるため、腎臓に疾患を抱えている患者は、使用に注意が必要です。定期的に腎機能のチェックを受けることが重要です。</li>
                <li class="kouka_item"><span class="highlighter">他の薬剤との併用に注意</span>：血圧降下薬、抗凝固薬、糖尿病治療薬などとの併用により相互作用を起こすことがあります。医師に相談して使用するようにしましょう。</li>
                <li class="kouka_item"><span class="highlighter">妊娠中・授乳中の使用に注意</span>：妊娠中・授乳中に使用する場合には、胎児や乳児に影響を与える可能性があるため、医師の指示に従って使用するようにしましょう。</li>
                <li class="kouka_item"><span class="highlighter">アスピリンの使用に注意</span>：NSAIDsの一種であるアスピリンは、血液をサラサラにする効果がありますが、出血リスクを高めることがあります。また、アスピリン喘息という副作用を引き起こすことがあるため、使用には注意が必要です。</li>
            </ul>
            <hr class="medicine_line">
            <p class="doctor">
                非ステロイド抗炎症薬の服用には、医師の指示に従うことが非常に重要です。<br>
                特に、副作用の監視などが重要です。
            </p>
        </div>
    </section>

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('aboutMedicine') ); ?>">薬について</a>
            <a class="page-next" href="<?php echo esc_url( home_url('gappeisyo') ); ?>"><span class="px16">起こりやすい合併症</span></a>
        </div>
        <!-- ページネーション　終わり -->
    </section>
    
</main>
<?php get_footer(); ?>