<?php
/*
Template Name: Service
*/
?>

<?php get_header(); ?>

<!-- sub-main -->
<section class="sub-main wow fadeIn">
    <img src="<?php echo get_template_directory_uri() ?>/image/service_image.jpg" alt="自己紹介メイン画像" class="sub-main-image">
</section>


<!-- Service -->
<section class="service-page inner">
    <div class="title-wrapper">
        <p class="title-text">Service</p>
        <p class="title-subtext">サービス</p>
    </div>

    <div class="service-page-wrapper">
        <p class="service-page-title">ECサイト構築</p>
        <div class="service-page-content">
            <img src="<?php echo get_template_directory_uri() ?>/image/ec_site.jpg" alt="ECサイト実績画像" class="service-page-image">
            <p class="service-page-text">
                Shopifyを用いて、お客様だけのオンラインショップを構築いたします。既存のテンプレートを使用し、お好みのサイトデザインをカスタマイズいたします。プランは３つご用意しておりますので、ご予算にあったプランをお選びください。
                Shopifyを使用する理由としましては、強力なSNS連携があります。instagramやfacebookの販売チャンネル開設、またLINEなどを利用した集客サポートもいたします。
            </p>
        </div>
        <div class="more-read">
            <button onclick="location.href='https://shoheishimizu.com/service/'" class="more-read-button" type="button">詳細ページへ</button>
        </div>
    </div>

    <div class="service-page-wrapper">
        <p class="service-page-title">Webサイト制作</p>
        <div class="service-page-content">
            <img src="<?php echo get_template_directory_uri() ?>/image/casse-tete.jpg" alt="Webサイト実績画像" class="service-page-image">
            <p class="service-page-text">
                Shopifyを用いて、お客様だけのオンラインショップを構築いたします。既存のテンプレートを使用し、お好みのサイトデザインをカスタマイズいたします。プランは３つご用意しておりますので、ご予算にあったプランをお選びください。
                Shopifyを使用する理由としましては、強力なSNS連携があります。instagramやfacebookの販売チャンネル開設、またLINEなどを利用した集客サポートもいたします。
            </p>
        </div>
        <div class="more-read">
            <button onclick="location.href='https://shoheishimizu.com/service/'" class="more-read-button" type="button">詳細ページへ</button>
        </div>
    </div>

    <div class="service-page-wrapper">
        <p class="service-page-title">ビジネスアニメーション動画</p>
        <div class="service-page-content">
            <div class="service-page-video">
                <?php
                $work_animation = SCF::get('works_animation', 18);
                $work_array = $work_animation[0];
                echo wp_oembed_get($work_array['youtube_url']);
                ?>
            </div>
            <p class="service-page-text">
                Shopifyを用いて、お客様だけのオンラインショップを構築いたします。既存のテンプレートを使用し、お好みのサイトデザインをカスタマイズいたします。プランは３つご用意しておりますので、ご予算にあったプランをお選びください。
                Shopifyを使用する理由としましては、強力なSNS連携があります。instagramやfacebookの販売チャンネル開設、またLINEなどを利用した集客サポートもいたします。
            </p>
        </div>
        <div class="more-read">
            <button onclick="location.href='https://shoheishimizu.com/service/'" class="more-read-button" type="button">詳細ページへ</button>
        </div>
    </div>

</section>

<?php get_footer(); ?>