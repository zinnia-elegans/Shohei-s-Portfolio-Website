<?php get_header(); ?>

<!-- main -->
<section class="main main-inner">
    <div class="main-content wow fadeIn">
        <h1 class="main-text">Shohei's Portfolio Website</h1>
    </div>
</section>

<!-- about -->
<section class="about inner" id="about">
    <div class="title-wrapper">
        <p class="title-text">About</p>
        <span class="title-line"></span>
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
                    <h2 class="about-name">Shohei Shimizu</h2>
                    <div class="about-sns">
                        <a href="https://twitter.com/ShoheiShimizu"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/zinnia.elegans/"><i class="fab fa-instagram"></i></a>
                    </div>
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

<!-- Service -->
<section class="service inner" id="service">
    <div class="title-wrapper">
        <p class="title-text">Service</p>
        <span class="title-line"></span>
    </div>
    <div class="service-wrapper wow fadeIn">
        <?php
        $service = SCF::get('service', 49);
        foreach ($service as $field_name => $field_value) {
        ?>
            <div class="service-content">
                <p class="service-subtitle">ディレクション</p>
                <p class="service-title">Direction</p>
                <img src="<?php echo get_template_directory_uri() ?>/image/mbri-file.svg" alt="ディレクションアイコン">
                <p class="service-text">
                    <?php echo esc_html($field_value['service_direction']); ?>
                </p>
            </div>

            <div class="service-content">
                <p class="service-subtitle">デザイン</p>
                <p class="service-title">Design</p>
                <img src="<?php echo get_template_directory_uri() ?>/image/mbri-website-theme.svg" alt="デザインアイコン">
                <p class="service-text">
                    <?php echo esc_html($field_value['service_design']); ?>
                </p>
            </div>

            <div class="service-content">
                <p class="service-subtitle">コーディング</p>
                <p class="service-title">Coding</p>
                <img src="<?php echo get_template_directory_uri() ?>/image/mbri-code.svg" alt="コーディングアイコン">
                <p class="service-text">
                    <?php echo esc_html($field_value['service_coding']); ?>
                </p>
            </div>
        <?php } ?>
    </div>
    <div class="more-read">
        <button onclick="location.href='https://shoheishimizu.com/service/'" class="more-read-button" type="button">more read</button>
    </div>
</section>

<!-- business -->
<section class="business inner" id="business">
    <div class="title-wrapper">
        <p class="title-text">Business</p>
        <span class="title-line"></span>
    </div>
    <div class="business-wrapper wow fadeIn">
        <?php
        $business = SCF::get('business', 84);
        foreach ($business as $field_name => $field_value) {
        ?>
            <div class="business-content">
                <p class="business-content-title"><?php echo esc_html($field_value['business_name']); ?></p>
                <div class="business-line"></div>
                <p class="business-price"><?php echo esc_html($field_value['business_price']); ?></p>
            </div>
        <?php } ?>
    </div>
    <div class="more-read">
        <button onclick="location.href='https://shoheishimizu.com/business'" class="more-read-button" type="button">more read</button>
    </div>

</section>

<!-- work -->
<section class="work inner" id="work">
    <div class="title-wrapper">
        <p class="title-text">Work</p>
        <span class="title-line"></span>
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

<?php get_template_part('template_parts/contact'); ?>

<?php get_footer(); ?>