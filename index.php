<?php get_header(); ?>

<!-- main -->
<section class="main main-inner">
    <div class="main-content wow fadeIn">
        <h1 class="main-text fede">Shohei Shimizu</h1>
        <p class="main-subtext fade">お客様の課題解決のため、価値あるサービスを</p>
    </div>
</section>

<!-- Concept -->
<section class="concept inner">
    <div class="title-wrapper">
        <p class="title-text">Concept</p>
        <p class="title-subtext">コンセプト</p>
    </div>
    <div class="concept-content">
        <p class="concept-text">
            ウェブを中心に活動しているフリーランスのWebクリエイターです。Webサイト制作ではデザインからコーディング、WorPress実装まで承ります。また、自身のオンラインショップが欲しいお客様に関しましては、Shopifyを用いたECサイト構築や運用サポート、またVyondを用いたビジネスアニメーション動画制作のご依頼も承っております。様々なアイデアを提案する中で、お客様の課題解決のため、一緒に考えながら制作を進めていければと思っております。お見積りは無料です。まずはお気軽にご相談ください。
        </p>
    </div>
</section>


<!-- Service -->
<section class="service inner" id="service">
    <div class="title-wrapper">
        <p class="title-text">Service</p>
        <p class="title-subtext">サービス</p>
    </div>
    <div class="service-wrapper wow fadeIn">
        <?php
        $service = SCF::get('service', 49);
        foreach ($service as $field_name => $field_value) {
        ?>
            <div class="service-content">
                <img src="<?php echo get_template_directory_uri() ?>/image/cart.png" alt="ディレクションアイコン">
                <p class="service-subtitle">ECサイト構築</p>
                <p class="service-text">
                    <?php echo esc_html($field_value['service_ec_site']); ?>
                </p>
            </div>

            <div class="service-content">
                <img src="<?php echo get_template_directory_uri() ?>/image/browser.png" alt="デザインアイコン">
                <p class="service-subtitle">Webサイト制作</p>
                <p class="service-text">
                    <?php echo esc_html($field_value['service_web_site']); ?>
                </p>
            </div>

            <div class="service-content">
                <img src="<?php echo get_template_directory_uri() ?>/image/video.png" alt="コーディングアイコン">
                <p class="service-subtitle">ビジネスアニメーション</p>
                <p class="service-text">
                    <?php echo esc_html($field_value['service_movie']); ?>
                </p>
            </div>
        <?php } ?>
    </div>
    <div class="more-read">
        <button onclick="location.href='https://shoheishimizu.com/service/'" class="more-read-button" type="button">サービス一覧へ</button>
    </div>
</section>

<!-- Price -->
<section class="price" id="business">
    <div class="title-wrapper">
        <p class="title-text">Price</p>
        <p class="title-subtext">費用目安</p>
    </div>
    <div class="business-wrapper wow fadeIn">

        <div class="business-content">
            <p class="business-content-title">ECサイト構築</p>
            <ul class="business-content-list">
                <li class="business-content-text">テンプレートを利用したオリジナルのデザインカスタマイズ</li>
                <li class="business-content-text">商品登録</li>
                <li class="business-content-text">各種アプリ設定</li>
                <li class="business-content-text">各種SNS連携</li>
                <li class="business-content-text">販売チャンネル追加</li>
            </ul>
            <p class="business-price"><span class="business-price-size">30,000</span>円〜</p>
        </div>

        <div class="business-content">
            <p class="business-content-title">ビジネスアニメーション</p>
            <ul class="business-content-list">
                <li class="business-content-text">商品PR</li>
                <li class="business-content-text">会社 / 店舗紹介</li>
                <li class="business-content-text">自己紹介</li>
                <li class="business-content-text">営業資料</li>
                <li class="business-content-text">マニュアル / 教育資料</li>
            </ul>
            <p class="business-price">30秒 / <span class="business-price-size">40,000</span>円〜</p>
        </div>

        <div class="business-content">
            <p class="business-content-title">Webデザイン</p>
            <ul class="business-content-list">
                <li class="business-content-text">トップページ</li>
                <li class="business-content-text">下層ページ</li>
                <li class="business-content-text">スマホ版デザイン</li>
            </ul>
            <p class="business-price">1ページ / <span class="business-price-size">20,000</span>円〜</p>
        </div>

        <div class="business-content">
            <p class="business-content-title">Webサイト</p>
            <ul class="business-content-list">
                <li class="business-content-text">各ページのコーディング</li>
                <li class="business-content-text">更新機能（WordPress）</li>
                <li class="business-content-text">ドメイン / サーバー契約</li>
                <li class="business-content-text">お問い合わせフォーム</li>
                <li class="business-content-text">アナリティクス設置</li>
            </ul>
            <p class="business-sub-price">LP / <span class="business-price-size">30,000</span>円〜</p>
            <p class="business-price">HP / <span class="business-price-size">50,000</span>円〜</p>
        </div>



    </div>
    <div class="more-read">
        <button onclick="location.href='https://shoheishimizu.com/business'" class="more-read-button" type="button">more read</button>
    </div>

</section>

<!-- work -->
<section class="work inner" id="work">
    <div class="title-wrapper">
        <p class="title-text">Work</p>
        <p class="title-subtext">制作実績</p>
    </div>

    <div class="work-wrapper wow fadeIn">
        <?php
        $work = SCF::get('works', 18);
        foreach ($work as $field_name => $field_value) {
        ?>
            <div class="work-content">
                <div class="work-content-image">
                    <a href="<?php echo esc_html($field_value['works_link']); ?>" target="_blank" rel="noopener noreferrer">
                        <?php
                        if (wp_get_attachment_image_src($field_value['works_image'], 'large')) {
                            echo wp_get_attachment_image($field_value['works_image'], 'large');
                        } else {
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/noimg.png" alt="No Image">';
                        }
                        ?>
                    </a>
                </div>
                <div class="work-content-text">
                    <p class="work-title"><?php echo esc_html($field_value['works_category']); ?></p>
                    <p class="work-text"><?php echo esc_html($field_value['works_text']); ?></p>
                </div>
            </div>

        <?php } ?>

    </div>

    <div class="more-read">
        <button onclick="location.href='https://shoheishimizu.com/work/'" class="more-read-button" type="button">more read</button>
    </div>

</section>

<!-- about -->
<section class="about inner" id="about">
    <div class="title-wrapper">
        <p class="title-text">About</p>
        <p class="title-subtext">自己紹介</p>
    </div>
    <div class="about-wrapper">
        <?php
        $about_profile = SCF::get('about_profile', 39);
        foreach ($about_profile as $field_name => $field_value) {
        ?>
            <div class="about-image wow fadeIn">
                <?php
                echo wp_get_attachment_image($field_value['about_profile_image'], 'large');
                ?>
            </div>
            <div class="about-content wow fadeIn">
                <div class="about-top">
                    <h2 class="about-name-japanese">清水 翔平</h2>
                    <h2 class="about-name-english">Shohei Shimizu</h2>
                </div>
                <p class="about-text">
                    <?php echo esc_html($field_value['about_profile_text']); ?>
                </p>
            </div>
        <?php } ?>
    </div>
    <div class="more-read">
        <button onclick="location.href='https://shoheishimizu.com/about/'" class="more-read-button" type="button">more read</button>
    </div>
</section>

<?php get_template_part('template_parts/contact'); ?>

<?php get_footer(); ?>