<?php get_header(); ?>
    <!-- Main -->
    <main>
        <section class="BGwhite catch-copy">
            <h2 class="title2">症状</h2>
            <p class="title-text">“これってSLE？”を確認する症状ガイド</p>	
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
            <!-- パンくずリスト　終わり -->
        </section>
        <section class="BGwhite symptoms">
            <p>
                初期症状で多いのは関節痛、倦怠感、発熱、体重減少になります。<br>
                紫外線が多く当たると発症しやすい蝶形紅斑（鼻から両頬にかけて現れる蝶のような形の赤い発疹）などの皮膚症状があります。<br>
                <br>
                むくみや食欲不振、光線過敏症、脱毛、口内炎、筋肉痛、ドライアイ、息苦しさ、腹痛、下痢などの症状もあります。<br>
                <br>
                そして重症になりますと腎臓や心臓、神経、血管などに障害が起こることもあります。<br>
                <br>
                どの症状が出るか、重症度は患者さんによって異なります。<br>
                一度に複数の症状が同時にでたり、少しずつ出たりすることもあり、良くなったり悪くなったり繰り返すことがあります。
            </p>
        </section>
        <section class="BGwhite syoujou">
            <div class="square">
                <h3 class="sub-title symptoms_sub_title">症状</h3>
                <a class="square_link" href="#systemic">全身の症状</a>
                <a class="square_link" href="#skin">皮膚や粘膜の症状</a>
                <a class="square_link" href="#joints">筋肉や関節の症状</a>
                <a class="square_link" href="#kidney">腎臓の症状</a>
                <a class="square_link" href="#lung">肺や心臓の症状</a>
                <a class="square_link" href="#nerve">神経の症状</a>
                <a class="square_link" href="#blood">血液の異常</a>
                <a class="square_link" href="#other">その他の症状</a>
            </div>

        </section>
        <section class="BGwhite systemic" id="systemic">
            <h3 class="border_title highlighter">全身の症状</h3>
            <h4>だるい、疲れやすい</h4>
            <p>
                体の全体的な疲れや倦怠感を感じることがあります。
            </p>
            <h4>発熱</h4>
            <p>
                微熱〜38℃以上の高熱になることも少なくありません。
            </p>
            <h4>リンパ節の腫れ</h4>
            <p>
                多くの場合、腫れは柔らかく、痛みはありません。
            </p>
            <h4>感染症</h4>
            <p>
                免疫力が低下します。
            </p>
            <h4>体重が減る・増える　むくみ</h4>
        </section>

        <section class="BGwhite skin" id="skin">
            <h3 class="border_title highlighter">皮膚や粘膜の症状</h3>
            <h4>ループスエリテマトーデス</h4>
            <p>
                蝶形紅班や円板状皮疹が狼がかんだ傷を想像させることから由来します。
            </p>
            <h4>頬部紅斑（蝶形紅斑）</h4>
            <p>
                ほお骨から鼻に広がる両翼を広げた蝶の形に似た紅斑で、蝶形紅斑と呼ばれる。<br>
            </p>
            <h4>円板状皮疹（discoid lupus）ディスコイド疹</h4>
            <p>
                慢性の鱗屑を伴う円板状皮疹は次第に周囲が肥厚し中央が陥没様になっていく。<br>
            </p> 
            <h4>日光過敏</h4>
            <p>
                紫外線に当たっていた肌に発赤や水泡形成などの反応がでる。<br>
                日光過敏症は特に皮膚の色が薄い人にみられます。
            </p>
            <h4>口腔内潰瘍</h4>
            <p>
                痛みのない口腔内潰瘍で、典型的な場所は硬口蓋。<br>
                特に口の中の天井部分、頬の内側、歯ぐき、鼻の内部にできる<br>
                お医師さんの口腔内診察で初めて気づかれることがある。
            </p>
            <h4>環状紅斑</h4>
            <p>
                環状の紅斑局面である環状紅斑。
            </p>
            <h4>凍瘡様皮疹</h4>
            <p>
                手の指先に凍瘡のような見た目をすることがある。
                爪の周りに紅斑があることもある。
            </p>
            
            <h4>レイノー症状</h4>
            <p>
                寒冷刺激によって手指の色が白色化・青紫色化するレイノー症状。
                <br>
                血流が悪くなり青白くなる→紫→赤→数分〜10分程度で元に戻る
            </p>
            <h4>リベドー疹</h4>
            <p>
                手足に淡褐色の網目状皮疹。<br>
                SLEの特徴的ではないが、発見された場合は血管炎もしくは腎炎を疑う。
            </p>
            <h4>脱毛</h4>
            <p>
                頭皮に紅斑が形成され局所的な脱毛もしくは皮疹を伴わずびまん性の脱毛を伴うことがある。
                再燃の際に全身、局所の脱毛がよく見られる。
            </p>
            <h4>深在性ループス</h4>
            <p>
                皮下脂肪組織に炎症が発生し、脂肪組織が自壊、瘢痕形成に至る。<br>
                脂肪組織が豊富な顔面頬部や臀部などに好発し、外観上は陥凹した局面を形成する。<br>
                触診上、内部の瘢痕を硬結として触れる。<br>
                治癒後も皮膚陥凹が残りやすく治療は急がれる。
            </p>
            <h3>皮膚症状の治療</h3>
            <p>
                日本ではエリテマトーデスの皮膚疾患はステロイドや効果は落ちるが副作用が少ないことから、プロトピック軟膏が使われている <br>
                世界ではプラケニルが皮膚疾患に効き用いられている<br>
                半数以上のプラケニル服用者が皮膚疾患が改善されている<br><br>

                効果は4〜8週程度と言われているが、それ以上かかることもある
            </p>		
        </section>
        <section class="BGwhite joints" id="joints">
            <h3 class="border_title highlighter">筋肉や関節の症状</h3>
            <h4>筋肉痛</h4>
            <p>
                血液検査でCPK・CKという項目が上昇する。CPK・CKの軽度の上昇は、普通の運動などでもおこりますので、あまり神経質になる必要はありません。
            </p>
            <h4>関節の痛み・腫れ</h4>
            <p>
                複数の関節に症状があらわれることが多いです。<br>
                関節の炎症は一般に間欠的で、通常は関節に損傷が起こることはありません。
                痛みはあちこちにある
            </p>
            <h4>こわばり</h4>
            <p>
                手が握りにくい、手に力が入りにくいといった症状のことを言います。 朝起きた時によく起こりますが、朝に限らず、長時間じっとしていたり、昼寝をしたりした後に起こることもあります。
            </p> 
            
        </section>

        <section class="BGwhite kidney" id="kidney">
            <h3 class="border_title highlighter">腎臓の症状</h3>
            <h4>ループス腎炎</h4>
            <p>
                腎臓の濾過がうまくできなくなり炎症が起きる。
                わたしたちの３人に1人が腎臓に重篤な炎症が起き、腎障害が起こることもある。
                自覚症状がわかりにくく、顔や足のむくみ、全身倦怠感、食欲不振、高血圧も要注意<br>
                ループス腎炎になると、タンパク尿、血尿、ネフローゼ症候群などさまざまな症状がみられることがあります。<br><br>
                
                ＊尿が泡立つ（タンパク尿） <br>
                ＊尿が赤茶色になる（血尿） <br>
                ＊足の浮腫（腎障害により尿が作れなくなる、ネフローゼ症候群などが原因）
            </p>
                        
        </section>

        <section class="BGwhite lung" id="lung">
            <h3 class="border_title highlighter">肺や心臓の症状</h3>
            <h4>心臓の炎症</h4>
            <p>
                無症状のことも多いですが、脈が速い、息苦しいなどの症状があらわれることがあります。
            </p>
            <h4>胸膜炎</h4>
            <p>
                肺を覆う胸膜に炎症が生じ、胸の痛みや呼吸困難などの症状があらわれます。呼吸・体動時にこれらの症状が強くなるのが特徴です。
            </p> 
                        
            <h4>漿膜炎</h4>
            <p>
                漿膜に炎症が発生し胸膜炎や心外膜炎をおこし、炎症性浸出液が貯留する<br>
                CRPが上昇されることがある
            </p>        
        </section>

        <section class="BGwhite nerve" id="nerve">
            <h3 class="border_title highlighter">神経の症状</h3>
            <h4>偏頭痛</h4>
            <p>
            わたしたちの３人の1人に偏頭痛を抱えて、不安やうつ病を患うこともある
            </p>
            <h4>けいれん発作（てんかん発作）</h4>
            <p>
                免疫抑制剤や抗炎症治療と抗けいれん剤を用いる。
            </p> 
                        
            <h4>髄膜炎</h4>
            <p>
                強い頭痛、吐き気、嘔吐、高熱などの症状
            </p> 
                        
            <h4>末梢神経障害 </h4>
            <p>
                手足のしびれ、手足が動かしにくいなど
            </p>      
        </section>

        <section class="BGwhite blood" id="blood">
            <h3 class="border_title highlighter">血液の異常</h3>
            <h4>血球成分の減少</h4>
            <p>
                異常な免疫が血球成分を攻撃し、減少します。赤血球が少なくなると貧血、白血球では感染症にかかりやすくなる。
                血小板では出血しやすい・出血が止まりにくいといった症状がみられます。
            </p>
            <h4>自己抗体</h4>
            <p>
                自分自身を排除しようとする抗体（免疫物質）です。いくつかの全身性エリテマトーデスの患者さんで検出されやすいものとして抗核抗体（特に抗 dsDNA 抗体、抗 Sm 抗体）があり、その他、抗 SS-A 抗体、抗リン脂質抗体などがあります。
            </p> 
            <h4>低補体血症</h4>
            <p>
                SLEの活動性を反映して補体低値（C3, C4, CH50）を示すことが多い。免疫複合体が組織に沈着すると補体が動員・消費され、末梢血中の補体が減少する。障害臓器の組織検査では補体の沈着が観察される。腎生検におけるC1qの沈着はSLEに比較的特徴的である。漿膜炎や感染症併発などでCRP高値の場合は、補体低下が、炎症による補体の産生増加によって打ち消されることがある。こうした炎症状態では、補体が正常値であっても補体が消費されていないとは言えない。
            </p>       
        </section>

        <section class="BGwhite other" id="other">
            <h3 class="border_title highlighter">その他の症状</h3>
            <h4>ループス膀胱炎</h4>
            <p>
                頻尿になる
            </p>
            <h4>腸炎</h4>
            <p>
                下痢・吸収不良・腹痛（ループス腸炎）
            </p> 
            <h4>皮下出血や紫斑</h4>
            <p>
                血小板減少であざができやすい
            </p>   
            <h4>自己免疫疾患を併発しやすい</h4>
            <p>
                例えば、自己免疫性甲状腺疾患(特に甲状腺機能低下症)、シェーグレン症候群、関節リウマチや筋炎
            </p>
            <img class="syoujou_img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/syoujou.jpg" alt="SLEの全身の症状の図">
        </section>

        <section class="pagenation">
            <!-- ページネーション　スタート -->
            <div class="nav-links">
                <a class="page-prev" href="<?php echo esc_url( home_url('/aboutsle/') ); ?>">SLEとは</a>
                <a class="page-next" href="<?php echo esc_url( home_url('/sindan_info/') ); ?>">診断</a>
            </div>
            <!-- ページネーション　終わり -->
        </section>        
    </main>
<?php get_footer(); ?>