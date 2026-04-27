<?php get_header(); ?>

<!-- Main -->
<main id="aboutMedicine">
    <section class="BGwhite catch-copy">
        <h2 class="title2">薬について</h2>
        <p class="title-text">SLEの治療に使われる薬を、種類別にまとめました</p>	
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


    <section class="BGwhite aboutMedicine">
        <h4 class="am_subtitle">SLEの薬について</h4>
        <p class="overview">
            グルココルチコイド（ステロイド）の副作用は辛く、とても多いためグルココルチコイドを減らすためには<br>
            <span class="highlighter">他の薬と組み合わせたり、他の薬で置き換える</span>ことも視野に入れた処方の仕方が主流です。<br>
            その薬が<span class="bold">免疫調整薬、免疫抑制薬</span>もしくは<span class="bold">生物学的製剤(バイオ)</span>になります。
        </p>
        <div class="left">
            <h5 class="highlighter am_title">SLEのメインとなる薬</h5>
        </div>
        
        <div class="left">
            <h5 class="highlighter yokuseizai_title">従来からある治療法</h5>
        </div>
        <div class="am_grid">
            <div class="medicine">
                <a href="<?php echo esc_url( home_url('/steroid/') ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/predonizoron.webp" alt="プレドニゾロンの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">ステロイド<br><span class="bold">成分名）グルココルチコイド</span></p>
                        <p>代表となる薬<br><span class="medicine_name">プレドニゾロン</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">一昔前までは治療の中心となる薬でした。今はできるだけ少ない量・短期間にしようとしています。しかし現在でも急な悪化を抑える時にも使われます。</p>
                        <!-- <p class="price">8.6円/1mg</p> -->
                    </div>
                </a>
            </div>
            <div class="medicine">
                <a href="<?php echo esc_url( home_url('/nsaid/') ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/rokisopurofen.webp" alt="ロキソプロフェンの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">非ステロイド性抗炎症薬</p>
                        <p>代表となる薬<br><span class="medicine_name">ロキソプロフェン</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">痛みや熱、炎症を抑える薬です。関節の痛みや発熱など、SLEの症状を和らげるために使われることがあります。ただし腎臓への負担になることがあるため、使い方には注意が必要です。</p>
                        <!-- <p class="price">10.1円／60mg錠</p> -->
                    </div>
                </a>
            </div>
        </div>
        
        <!-- 免疫調整剤 スタート -->
        <div class="left tyouseizai">
            <h5 class="highlighter yokuseizai_title">免疫調整剤</h5>
        </div>
        
        <div class="am_grid">
            <div class="medicine">
                <a href="<?php echo esc_url( home_url('/plaquenil/') ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/purakenil.webp" alt="プラケニルの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="sle_medicine">SLEの代表となる薬</p>
                        <p>成分名）ヒドロキシクロロキン<br><span class="medicine_name">プラケニル</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">SLEと診断されたら最初に飲むことが多い。過剰な免疫反応を穏やかに抑え、関節痛・発疹・倦怠感などの症状を和らげ、ステロイド量を減らすことも期待できる薬です。</p>
                        <!-- <p class="price">277.3円／200mg錠</p> -->
                    </div>
                </a>
            </div>
        </div>
        <!-- 免疫抑制剤　スタート -->
        <div class="left">
            <h5 class="highlighter yokuseizai_title">免疫抑制剤</h5>
        </div>
        <p class="yokuseizai_text">
            グルココルチコイドは、少し前までは「症状が出ているときにまず使う薬」として単独で使われることが多くありました。<br>
            しかし現在は、副作用を減らすためにグルココルチコイドの量をできるだけ少なくする方針が一般的になっており、<span class="highlighter">最初からSLEの治療薬（免疫抑制薬など）を併用して使う</span>ケースが増えています。<br>
            <br>
            特に、腎臓に炎症が起こるループス腎炎や、その他の重い症状がある場合には、免疫抑制薬とグルココルチコイドを組み合わせて治療を行うことがほとんどです。<br>
            <br>
            免疫を抑える薬のため、肺炎や帯状疱疹などの感染症に注意が必要です。<br>
            また、血液の細胞を作る骨髄に障害が起こり、血液中の細胞が減少することがあります。<br>
            <br>
            薬の種類によっては、流産や胎児の奇形の原因となるものもあるため、治療中は避妊が必要です。<br>
        </p>
        <div class="am_grid">
            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/cellcept/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/seruseputo.webp" alt="セルセプトの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">免疫抑制剤</p>
                        <p>Mycophenolate mofetil<br><span class="medicine_name">セルセプト</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">免疫の働きを抑えて、臓器へのダメージを防ぐ薬です。ステロイドと組み合わせて使うことが多く、ステロイドを減らす助けにもなります。妊娠中は使えないため、使用中は避妊が必要です。</p>
                        <!-- <p class="price">91.10円／250カプセル</p> -->
                    </div>
                <!-- </a> -->
            </div>
            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/prograph/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/purogurafu.webp" alt="プログラフの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">免疫抑制剤</p>
                        <p>Tacrolimus<br><span class="medicine_name">プログラフ</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">免疫の働きを強力に抑える薬で、主にループス腎炎の治療に使われます。効果が高い一方、腎臓や血圧への影響が出ることがあるため、定期的な血液検査が必要です。</p>
                        <!-- <p class="price">372.90円／カプセル(1mg)</p> -->
                    </div>
                <!-- </a> -->
            </div>
            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/Imuran/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/imuran.webp" alt="イムランの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">免疫抑制剤</p>
                        <p>Azathioprine<br><span class="medicine_name">イムラン</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">免疫の働きを抑える薬で、ステロイドを減らすサポート役として使われることが多いです。効果が出るまでに時間がかかりますが、長期間にわたって病気を落ち着かせるのに役立ちます。</p>
                        <!-- <p class="price">69円／錠　50mg</p> -->
                    </div>
                <!-- </a> -->
            </div>

            <!-- <div class="medicine">
                <a href="<?php echo esc_url( home_url('/Azanin/') ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/azanin.webp" alt="アザニンの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">免疫抑制剤</p>
                        <p>Cyclophosphamide<br><span class="medicine_name">アザニン</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">重症のSLEやSLEによる腎炎の治療に使用されることがあります。</p>
                        <p class="price">94.80円 / 錠50mg</p>
                    </div>
                </a>
            </div> -->


            <!-- <div class="medicine">
                <a href="<?php echo esc_url( home_url('/Endoxan/') ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/endkisan.webp" alt="エンドキサンの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">免疫抑制剤</p>
                        <p>Cyclophosphamide<br><span class="medicine_name">エンドキサン</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">重症のSLEやSLEによる腎炎の治療に使用されることがあります。</p>
                        <p class="price">24.60円　/ 錠50mg</p>
                    </div>
                </a>
            </div> -->


            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/methotrexate/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metotorekisato.webp" alt="メトトレキサートの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">免疫抑制剤</p>
                        <p>Methotrexate<br><span class="medicine_name">メトトレキサート</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">関節リウマチ治療に用いられ、免疫の働きを抑えて炎症を鎮める薬です。関節の症状や皮膚症状に効果が期待できます。飲むのは週1回だけですが、葉酸を一緒に補うことが大切です。</p>
                        <!-- <p class="price">49.70円/2mg1錠<br>サワイ</p> -->
                    </div>
                <!-- </a> -->
            </div>
            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/Certican/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/satikan.webp" alt="サーティカンの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">免疫抑制剤</p>
                        <p>（エベロリムス錠）<br><span class="medicine_name">サーティカン</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">免疫の働きを抑える薬で、主にループス腎炎の治療に使われます。プログラフと似た仲間の薬ですが、腎臓への負担が比較的少ないとされ、状況に応じて使い分けられます。</p>
                        <!-- <p class="price">811.20円／0.75mg1錠 </p> -->
                    </div>
                <!-- </a> -->
            </div>
            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/Neoral/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/neoral.webp" alt="ネオーラルの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">免疫抑制剤</p>
                        <p><span class="medicine_name">ネオーラル</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">免疫の働きを抑える薬で、ループス腎炎などの治療に使われます。プログラフと同じ仲間の薬です。腎臓や血圧への影響が出ることがあるため、定期的な検査が必要です。</p>
                        <!-- <p class="price">151.60円／カプセル50mg</p> -->
                    </div>
                <!-- </a> -->
            </div>
            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/Graceptor/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/grasepter.webp" alt="グラセプターの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">免疫抑制剤</p>
                        <p><span class="medicine_name">グラセプター</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">プログラフと同じ成分の薬で、効果や注意点も同じです。免疫の働きを抑えて臓器へのダメージを防ぎます。腎臓や血圧への影響があるため、定期的な血液検査が欠かせません。</p>
                        <!-- <p class="price">557.80円／カプセル1mg</p> -->
                    </div>
                <!-- </a> -->
            </div>
        </div>	
        
        <!-- 生物学的製剤　スタート -->
        <div class="left">
            <h5 class="highlighter yokuseizai_title">生物学的製剤</h5>
        </div>
        <p class="bio_text">
            免疫の中の、ごく特定のたんぱく質だけをピンポイントで狙って効く薬です。<br>
            上記の薬で十分な効果が得られない場合に使用されます。<br>
            <br>
            SLEでは、免疫細胞が過剰に働いて、自分自身を攻撃する抗体（自己抗体）を作ってしまうことが問題になります。<br>
            この薬は、その「自分に対する免疫（自己免疫）」の働きを抑えて、自己抗体ができにくくなるようにする薬、というイメージです。<br>
            自己抗体は「B細胞」という免疫の細胞から作られます。
        </p>
        <div class="am_grid">
            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/Benlysta/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/benrista.webp" alt="ベンリスタの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">生物学的製剤</p>
                        <p>成分名）ベリムマブ<br><span class="medicine_name">ベンリスタ</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">SLEの治療のために開発された薬で、異常に活発になったB細胞の働きを抑えます。注射または点滴で投与します。ステロイドを減らす助けにもなり、再発を防ぐ効果が期待できます。</p>
                        <!-- <p class="price">16,616円/120mg</p> -->
                    </div>
                <!-- </a> -->
            </div>

            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/safneroo/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tenteki.webp" alt="点滴の写真" class="medicine_img img_wrapper">
                    <div class="medicine_center">
                        <p class="medicine_kind">生物学的製剤</p>
                        <p>成分名）アニフロルマブ<br><span class="medicine_name">サフネロー</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">看護士さんから点滴を受けます。皮下注射の治験がされています。免疫の働きを過剰に強くしてしまう「1型インターフェロン」というたんぱく質の働きを抑える薬です。自己注射もあります。</p>
                        <!-- <p class="price">300mg2ml1瓶<br>96,068円</p> -->
                    </div>
                <!-- </a> -->
            </div>

            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/rituximab/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tenteki.webp" alt="点滴の写真" class="medicine_img img_wrapper">
                    <div class="medicine_center">
                        <p class="medicine_kind">生物学的製剤</p>
                        <p>成分名）リツキシマブ<br><span class="medicine_name">リツキサン</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">抗がん剤にも使われ厳重に管理されています。B細胞そのものを減らす力の強い薬で、ループス腎炎などに使えるようになりました。点滴で投与し、毎回入院して受ける必要があります。</p>
                        <!-- <p class="price">300mg2ml1瓶<br>96,068円</p> -->
                    </div>
                <!-- </a> -->
            </div>

            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/Actemra/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/akutemura.webp" alt="アクテムラの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">生物学的製剤</p>
                        <p><span class="medicine_name">アクテムラ</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">IL-6という炎症のスイッチを止める、生物学的製剤。ループス血管炎にも使われます。点滴（静脈）タイプもあります。関節リウマチに使われます。</p>
                        <!-- <p class="price">32,485円／162mg</p> -->
                    </div>
                <!-- </a> -->
            </div>
        </div>

        <!-- 補助的な薬　スタート -->
        <div class="left">
            <h5 class="highlighter am_title">SLEの対処療法の補助的な薬</h5>
        </div>	
        <div class="am_grid">
            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/other/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/rokaruto.webp" alt="ロカルトロールの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">内服薬</p>
                        <p><span class="medicine_name">ロカルトロール</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">腎臓の働きが低下すると不足しがちな活性型ビタミンDを補う薬です。骨を丈夫に保つ働きがあり、長期間ステロイドを使っている場合などに処方されることがあります。</p>
                        <!-- <p class="price">8.60円／カプセル</p> -->
                    </div>
                <!-- </a> -->
            </div>

            
            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/other/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arufaro.webp" alt="アルファロールの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">内服薬</p>
                        <p><span class="medicine_name">アルファロール</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">骨粗しょう症の治療に広く使用される活性型ビタミンD3製剤であり、骨折のリスクを減らす効果</p>
                        <!-- <p class="price">6.90円／カプセル0.5μg</p> -->
                    </div>
                <!-- </a> -->
            </div>

            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/other/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prosirin.webp" alt="プロサイリンの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">内服薬</p>
                        <p><span class="medicine_name">プロサイリン</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">血管を広げて血流をよくする薬です。手足の先が白くなったり青くなったりするレイノー現象の予防や、末端の血流改善に使われます。出血しやすい状態のときは使えません。</p>
                        <!-- <p class="price">22.40円／20μg錠</p> -->
                    </div>
                <!-- </a> -->
            </div>
            
            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/other/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bonaron.webp" alt="ボナロン経口ゼリーの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">内服薬</p>
                        <p><span class="medicine_name">ボナロン経口ゼリー</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">骨を壊す働きを抑えて骨を丈夫に保つ薬です。長期間ステロイドを使うと骨がもろくなりやすいため、骨粗しょう症の予防・治療に使われます。週1回、起床後すぐに水で服用します。</p>
                        <!-- <p class="price">590.30円／包</p> -->
                    </div>
                <!-- </a> -->
            </div>

            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/other/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/rebo.webp" alt="レボレードの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">内服薬</p>
                        <p><span class="medicine_name">レボレード</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">血小板を増やす働きを促す薬です。SLEでは血小板が減少することがあり、他の治療で効果が不十分な場合に使われます。1日1回、食事の前後2時間を空けて服用します。</p>
                        <!-- <p class="price">2,377.30円／12.5mg錠</p> -->
                    </div>
                <!-- </a> -->
            </div>



            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/other/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arendoron.png" alt="アレンドロン酸錠の写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">内服薬</p>
                        <p><span class="medicine_name">アレンドロン酸錠</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">骨を壊す働きを抑えて骨を丈夫に保つ薬です。長期間ステロイドを使うと骨がもろくなりやすいため、骨粗しょう症の予防・治療に使われます。週1回、起床後すぐに水で服用します。</p>
                        <!-- <p class="price">15.60円（5mg1錠)</p> -->
                    </div>
                <!-- </a> -->
            </div>

            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/other/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/minodoron.webp" alt="ミノドロンの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">内服薬</p>
                        <p><span class="medicine_name">ミノドロン</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">骨を壊す働きを抑えて骨を丈夫に保つ薬です。長期間ステロイドを使うと骨がもろくなりやすいため、骨粗しょう症の予防・治療に使われます。月1回または週1回服用するタイプがあります。</p>
                        <!-- <p class="price">513.10円／50mg1錠<br>NIG</p> -->
                    </div>
                <!-- </a> -->
            </div>

            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/other/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/risedoron.webp" alt="リセドロン酸Na錠の写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">内服薬</p>
                        <p><span class="medicine_name">リセドロン酸Na錠</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">骨を壊す働きを抑えて骨を丈夫に保つ薬です。長期間ステロイドを使うと骨がもろくなりやすいため、骨粗しょう症の予防・治療に使われます。毎日・週1回・月1回と服用タイプが選べます。</p>
                        <!-- <p class="price">329.1円／75mg1錠</p> -->
                    </div>
                <!-- </a> -->
            </div>

            <div class="medicine">
                <!-- <a href="<?php echo esc_url( home_url('/other/') ); ?>"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/akutoneru.webp" alt="アクトネル錠の写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">内服薬</p>
                        <p><span class="medicine_name">アクトネル錠</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">骨を壊す働きを抑えて骨を丈夫に保つ薬です。長期間ステロイドを使うと骨がもろくなりやすいため、骨粗しょう症の予防・治療に使われます。毎日・週1回・月1回と服用タイプが選べます。</p>
                        <!-- <p class="price">225.2円／17.5mg1錠</p> -->
                    </div>
                <!-- </a> -->
            </div>
        </div>


        <!-- 塗り薬　スタート -->
        <div class="left">
            <h5 class="highlighter am_title skin_medicine">SLEの主な皮膚に塗る薬</h5>						
        </div>	
        <div class="am_grid">
            <div class="medicine">
                <a href="<?php echo esc_url( home_url('/skin/') ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hirudoido.webp" alt="ヒルドイドの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">外用薬</p>
                        <p><span class="medicine_name">ヒルドイド</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">皮膚の保湿や血行を改善する薬です。SLEでは皮膚が乾燥しやすく、炎症や傷つきやすい状態になりやすいため、皮膚のケアとして処方されることがあります。クリームやローションなど剤形が選べます。</p>
                        <!-- <p class="price">18.20円／ｇ</p> -->
                    </div>
                </a>
            </div>

            <div class="medicine">
                <a href="<?php echo esc_url( home_url('/skin/') ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/antebeto.webp" alt="アンテベートの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">外用薬</p>
                        <p><span class="medicine_name">アンテベート</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">皮膚の炎症を抑えるステロイド外用薬です。SLEでは皮膚に赤みや発疹が出ることがあり、その症状を和らげるために使われます。強めのステロイドのため、長期間の使用には注意が必要です。</p>
                        <!-- <p class="price">18.9円／ｇ</p> -->
                    </div>
                </a>
            </div>

            <div class="medicine">
                <a href="<?php echo esc_url( home_url('/skin/') ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/purosuta.webp" alt="プロスタンディンの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">外用薬</p>
                        <p><span class="medicine_name">プロスタンディン</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">皮膚の潰瘍や床ずれの治療に使う軟膏です。血流を改善して傷の回復を助ける働きがあります。SLEで皮膚に潰瘍ができたときや、血流が悪くなった部位のケアに使われることがあります。</p>
                        <!-- <p class="price">34.30円／ｇ</p> -->
                    </div>
                </a>
            </div>
            <div class="medicine">
                <a href="<?php echo esc_url( home_url('/skin/') ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/protpic.webp" alt="プロトピックの写真" class="medicine_img">
                    <div class="medicine_center">
                        <p class="medicine_kind">外用薬</p>
                        <p><span class="medicine_name">プロトピック</span></p>
                    </div>
                    <div class="medicine_text_box">
                        <p class="medicine_text">ステロイドとは異なる成分で皮膚の炎症を抑える塗り薬です。顔や首など皮膚の薄い部分にも使いやすく、SLEの皮膚症状である赤みや発疹の治療に使われることがあります。</p>
                        <!-- <p class="price">58.40円/g</p> -->
                    </div>
                </a>
            </div>
        </div>


    </section>

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/treatment_index/') ); ?>">治療</a>
            <a class="page-next" href="<?php echo esc_url( home_url('/gappeisyo/') ); ?>"><span class="px16">起こりやすい合併症</span></a>
        </div>
        <!-- ページネーション　終わり -->
    </section>



</main>
<?php get_footer(); ?>