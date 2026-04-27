<?php get_header(); ?>

<!-- Main -->
<main>
    <section class="BGwhite catch-copy">
        <h2 class="title2">医療費以外の特定疾患受給者票</h2>
        <p class="title-text">医療費だけじゃない。受給者証の活用ガイド</p>	
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


    <section class="BGwhite medicine_width">
        <div class="flex">
            <div class="kihonjouhou_left">
                <div class="medicine_name_box">
                <h4 class="highlighter medicine_name">特定疾患受給票で<br>使えるサービス</h4>
                </div>
            </div>
        </div>
        <h5 class="ninteikijun_title ninteikijun">
            <span class="highlighter">特定疾患受給者票で使えるサービスや<br>行政などの情報を更新していきます。<br>医療費助成を始め、次のことをしてあります。
        </h5>
        <div class="index_box">
            <p class="index">もくじ</p>
            <ul>
                <li><a href="#syougai">1.障害福祉サービスの利用可能</a></li>
                <li><a href="#syusyoku">2.難病患者就職サポーター</a></li>
                <li><a href="#parking">3.身体障害者等用駐車場利用証</a></li>
                <li><a href="#phone">4.携帯電話の基本使用料等の割引制度</a></li>
                <li><a href="#park">5.公園などの入園料、入館料減免</a></li>
                <li><a href="#pablic">6.公立の駐車場の免除</a></li>
                <li><a href="#help_mark">7.ヘルプマーク</a></li>
                <li><a href="#help_mark">8.保育に関わる配慮（入園基準、保育料）</a></li>
                <li><a href="#bicycle">9.大阪市 駐輪場利用、半額</a></li>
                <li><a href="#spot">10.特定疾患受給者表で割引になる場所</a></li>
            </ul>
        </div>
    </section>


    <section class="BGcream" id="syougai">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">1.障害者総合支援法による福祉サービスの利用可能</h5>
            <ul class="kouka_list">
                <li class="kouka_item">●居宅介護（ホームヘルプ：身体介護・家事援助・通院等介助）</li>
                <li class="kouka_item">●地域活動支援センターの利用や地域相談支援給付や計画相談支援給付</li>
                <li class="kouka_item">●相談支援</li>
                <li class="kouka_item">●就労移行支援や自立訓練</li>
                <li class="kouka_item">●補装具の助成</li>
            </ul>
        </div>
    </section>

    <section class="BGwhite medicine_width left" id="syusyoku">
        <h5 class="medicine_title">2.難病患者就職サポーター(ハローワークにて）</h5>
        <ul class="kouka_list">
            <li class="kouka_item"><a target="_blank" href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/koyou_roudou/koyou/shougaishakoyou/06e.html">就職・転職活動を手伝ってもらうことができる</a></li>
            <li class="kouka_item"></li>
            <li class="kouka_item"></li>
        </ul>
    </section>	
    
    <section class="BGcream" id="parking">
        <div class="kouka_wrapper">
        <h5 class="medicine_title"> 3.「身体障害者等用駐車場利用証」（自治体により呼び方は異なります。)</h5>
        <ul class="kouka_list">
            <li class="kouka_item"></li>
            <li class="kouka_item"></li>
            <li class="kouka_item"></li>
        </ul>
        </div>
    </section>

    <section class="BGwhite medicine_width left" id="phone">
        <h5 class="medicine_title">4.携帯電話の基本使用料等の割引制度や、割安な料金プランが利用で きるなどのサービスを行っています。各携帯電話会社により割引制度 が異なります。</h5>
        <ul class="kouka_list">
            <li class="kouka_item">NTTドコモのハーティ割引、auのスマイルハート割引、ソフトバンクのハートフレンド割引、UQ Wimaxのハート割、各社で内容が異なりますが、基本料金の割引など大きなメリットがあります。</li>
            <li class="kouka_item"></li>
            <li class="kouka_item"></li>
        </ul>
    </section>	

    <section class="BGcream" id="park">
        <div class="kouka_wrapper">
            <h5 class="medicine_title"> 5.公園などの入園料・入館料免除</h5>
            <ul class="kouka_list">
                <li class="kouka_item">
                    美術館や博物館、動物園など、公共施設の多くで、提示すると入場料割引しています。<br>
                    デパート内の有料ギャラリー、ミュージアムとかもしています            
                </li>
                <li class="kouka_item"></li>
                <li class="kouka_item"></li>
            </ul>
        </div>
    </section>

    <section class="BGwhite medicine_width left" id="phone">
        <h5 class="medicine_title">6.大阪府なら府立や市立の駐車場の免除、空港の駐車場の減免</h5>
        <ul class="kouka_list">
            <li class="kouka_item"></li>
            <li class="kouka_item"></li>
            <li class="kouka_item"></li>
        </ul>
    </section>
                    
    <section class="BGcream" id="park">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">7.ヘルプマーク</h5>
            <ul class="kouka_list">
                <li class="kouka_item">ヘルプマークとは内部障害の人や難病の人など、外見から分からなくても、支援や配慮を必要としている人が身につけておくことで、周囲の人に配慮を必要としていることを知らせることができるマークです。</li>
                <li class="kouka_item"></li>
                <li class="kouka_item"></li>
            </ul>
        </div>
    </section>

    <section class="BGwhite medicine_width left" id="phone">
        <h5 class="medicine_title">8.保育に関わる配慮（入園基準）</h5>
        <ul class="kouka_list">
            <li class="kouka_item">
                点数は少ないですが入園基準になります。<br>
                保育料は自治体によっては減免してくれるところがあります。
            </li>
            <li class="kouka_item"></li>
            <li class="kouka_item"></li>
        </ul>
    </section>

    <section class="BGcream" id="bicycle">
        <div class="kouka_wrapper">
            <h5 class="medicine_title">9.大阪市内の駐輪場</h5>
            <ul class="kouka_list">
                <li class="kouka_item">Osaka Metro、JRの大阪市内の駅の駐輪場</li>
                <li class="kouka_item">定期券か一時利用回数券を半額になります</li>
                <li class="kouka_item"></li>
            </ul>
        </div>
    </section>

    <section class="BGwhite medicine_width left" id="spot">
        <h5 class="medicine_title">10.特定疾患受給者表で割引になる場所</h5>
        <ul class="kouka_list">
            <li class="kouka_item spot_item">
                <p class="spot_title">東京ディズニーリゾート（ディズニーランド・ディズニーシー）</p>
                <p class="bold">公式ホームページに「難病法に規定する特定医療費（指定難病）受給者証」と記載あり</p>
                <p class="spot_subtitle">1ディパスポートが提示すると割引あり、同伴者も可能<br>
                列に並ぶことができない方は<a target="_blank" href="https://www.tokyodisneyresort.jp/tdr/bfree/supporttool.html">ディスアビリティアクセスサービス</a>も使えます。同伴者可能</p>
                <a class="spot_link" target="_blank" href="https://www.tokyodisneyresort.jp/tdr/bfree/bfree_ticket.html">ディズニーリゾートの公式ホームページ</a>
            </li>
            <li class="kouka_item spot_item">
                <p class="spot_title">ジブリパーク</p>
                <p class="spot_subtitle">ネットで購入の時に『障害者　大人』『障害者　小人』を選び、入場の際に提示する。<br>半額になります。同伴者1名まで可能<br>
                <a class="spot_link" target="_blank" href="https://ghibli-park.jp/ticket/#:~:text=%E3%82%B8%E3%83%96%E3%83%AA%E3%83%91%E3%83%BC%E3%82%AF%E3%81%8C%E6%8C%87%E5%AE%9A%E3%81%99%E3%82%8B%E9%9A%9C%E5%AE%B3%E8%80%85%E6%89%8B%E5%B8%B3%EF%BC%88%E3%80%8C%E8%BA%AB%E4%BD%93%E9%9A%9C%E5%AE%B3%E8%80%85%E6%89%8B%E5%B8%B3%E3%80%8D%E3%80%81%E3%80%8C%E7%B2%BE%E7%A5%9E%E9%9A%9C%E5%AE%B3%E8%80%85%E4%BF%9D%E5%81%A5%E7%A6%8F%E7%A5%89%E6%89%8B%E5%B8%B3%E3%80%8D%E3%80%81%E3%80%8C%E7%99%82%E8%82%B2%E6%89%8B%E5%B8%B3%E3%80%8D%E3%80%81%E9%9B%A3%E7%97%85%E3%81%AE%E6%82%A3%E8%80%85%E3%81%AF%E3%80%8C%E7%89%B9%E5%AE%9A%E5%8C%BB%E7%99%82%E8%B2%BB%E5%8F%97%E7%B5%A6%E8%80%85%E8%A8%BC%E3%80%8D%E3%80%81%E3%80%8C%E8%A2%AB%E7%88%86%E8%80%85%E5%81%A5%E5%BA%B7%E6%89%8B%E5%B8%B3%E3%80%8D%E3%80%81%E3%80%8C%E6%88%A6%E5%82%B7%E7%97%85%E8%80%85%E6%89%8B%E5%B8%B3%E3%80%8D%EF%BC%89%E3%82%92%E3%81%8A%E6%8C%81%E3%81%A1%E3%81%AE%E6%96%B9%E3%81%A8%E3%80%81%E5%90%8C%E4%BC%B4%E8%80%851%E5%90%8D%E3%81%BE%E3%81%A7%E3%81%AF%E3%80%8C%E9%9A%9C%E5%AE%B3%E8%80%85%E3%80%80%E5%A4%A7%E4%BA%BA%E3%80%8D%E3%82%82%E3%81%97%E3%81%8F%E3%81%AF%E3%80%8C%E9%9A%9C%E5%AE%B3%E8%80%85%E3%80%80%E5%AD%90%E3%81%A9%E3%82%82%E3%80%8D%E3%81%AE%E5%88%B8%E7%A8%AE%E3%82%92%E3%81%8A%E8%B2%B7%E3%81%84%E6%B1%82%E3%82%81%E3%81%8F%E3%81%A0%E3%81%95%E3%81%84%E3%80%82%E4%B8%80%E8%88%AC%E5%88%B8%E7%A8%AE%E3%81%AE%E5%8D%8A%E9%A1%8D%E6%96%99%E9%87%91%E3%81%A7%E3%81%99%E3%80%82%E3%81%94%E5%85%A5%E5%A0%B4%E3%81%AE%E9%9A%9B%E3%81%AB%E6%89%8B%E5%B8%B3%E3%81%AE%E5%8E%9F%E6%9C%AC%E3%81%BE%E3%81%9F%E3%81%AF%E3%82%B3%E3%83%94%E3%83%BC%E3%80%81%E3%83%9F%E3%83%A9%E3%82%A4%E3%83%ADID%E3%81%AE%E3%81%84%E3%81%9A%E3%82%8C%E3%81%8B%E3%82%92%E3%81%94%E6%8F%90%E7%A4%BA%E3%81%8F%E3%81%A0%E3%81%95%E3%81%84%E3%80%82">ジブリパークのチケット販売の公式ホームページ</a>
            </li>
        </ul>
    </section>	

    <section class="pagenation">
        <!-- ページネーション　スタート -->
        <div class="nav-links">
            <a class="page-prev" href="<?php echo esc_url( home_url('/friend/') ); ?>"><span class="px16">SLE仲間とつながる</span></a>
            <a class="page-next" href="<?php echo esc_url( home_url('/nanbyouteate/') ); ?>">難病手当</a>
        </div>
        <!-- ページネーション　終わり -->
    </section>
</main>

<?php get_footer(); ?>