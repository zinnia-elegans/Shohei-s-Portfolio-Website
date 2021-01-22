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
    <div class="arrowWrap">
        <div class="arrowInner">
            <p>SCROLL DOWN</p>
            <div class="arrow"></div>
        </div>
    </div>
    <div class="concept-content wow fadeIn">
        <p class="concept-text">
            <?php
            $concept = SCF::get('concept', 111);
            echo $concept;
            ?>
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
        <button onclick="location.href='https://shoheishimizu.com/service/'" class="more-read-button" type="button">サービス一覧</button>
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
            <?php
            $ec_site = SCF::get('ec_site', 115);
            foreach ($ec_site as $field_name => $field_value) {
            ?>
                <ul class="business-content-list">
                    <li class="business-content-text"><?php echo esc_html($field_value['ec_site_text']); ?></li>
                </ul>
            <?php } ?>
            <p class="business-price"><span class="business-price-size">30,000</span>円〜</p>
        </div>

        <div class="business-content">
            <p class="business-content-title">ビジネスアニメーション</p>
            <?php
            $business_animation = SCF::get('business_animation', 122);
            foreach ($business_animation as $field_name => $field_value) {
            ?>
                <ul class="business-content-list">
                    <li class="business-content-text"><?php echo esc_html($field_value['business_animation_text']); ?></li>
                </ul>
            <?php } ?>
            <p class="business-price">30秒 / <span class="business-price-size">40,000</span>円〜</p>
        </div>

        <div class="business-content">
            <p class="business-content-title">Webデザイン</p>
            <?php
            $web_design = SCF::get('web_design', 125);
            foreach ($web_design as $field_name => $field_value) {
            ?>
                <ul class="business-content-list">
                    <li class="business-content-text"><?php echo esc_html($field_value['web_design_text']); ?></li>
                </ul>
            <?php } ?>
            <p class="business-price">1ページ / <span class="business-price-size">20,000</span>円〜</p>
        </div>

        <div class="business-content">
            <p class="business-content-title">Webサイト</p>
            <?php
            $web_site = SCF::get('web_site', 128);
            foreach ($web_site as $field_name => $field_value) {
            ?>
                <ul class="business-content-list">
                    <li class="business-content-text"><?php echo esc_html($field_value['web_site_text']); ?></li>
                </ul>
            <?php } ?>
            <p class="business-sub-price">LP / <span class="business-price-size">30,000</span>円〜</p>
            <p class="business-price">HP / <span class="business-price-size">50,000</span>円〜</p>
        </div>



    </div>
    <div class="price-more-read">
        <button onclick="location.href='https://shoheishimizu.com/contact'" class="price-more-read-button" type="button">無料でお見積り</button>
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
        <button onclick="location.href='https://shoheishimizu.com/work/'" class="more-read-button" type="button">制作実績一覧</button>
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
        <button onclick="location.href='https://shoheishimizu.com/about/'" class="more-read-button" type="button">プロフィール詳細</button>
    </div>
</section>

<section class="top-contact inner">
    <p class="top-contact-text">Webからのお問い合わせ</p>
    <div class="contact-more-read">
        <button onclick="location.href='https://shoheishimizu.com/contact'" class="contact-more-read-button" type="button"><i class="fas fa-envelope"></i> お問い合わせフォームへ</button>
    </div>
</section>

<?php get_footer(); ?>