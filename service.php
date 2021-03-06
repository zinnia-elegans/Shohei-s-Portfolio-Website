<?php
/*
Template Name: Service
*/
?>

<?php get_header(); ?>

<!-- sub-main -->
<section class="sub-main wow fadeIn">
    <img src="<?php echo get_template_directory_uri() ?>/image/service_image.jpg" alt="サービスメイン画像" class="sub-main-image">
</section>

<div class="breadcrumbs inner" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>

<!-- Service -->
<section class="service-page inner">
    <div class="title-wrapper wow fadeIn">
        <p class="title-text">Service</p>
        <p class="title-subtext">サービス</p>
    </div>

    <div class="service-page-wrapper wow fadeIn">
        <p class="service-page-title">ECサイト構築</p>
        <div class="service-page-content">
            <img src="<?php echo get_template_directory_uri() ?>/image/ec_site.jpg" alt="ECサイト実績画像" class="service-page-image">
            <p class="service-page-text">
                Shopifyを用いて、お客様だけのオンラインショップを構築いたします。既存のテンプレートを使用し、お好みのサイトデザインをカスタマイズいたします。プランは３つご用意しておりますので、ご予算にあったプランをお選びください。
                Shopifyを使用する理由としましては、強力なSNS連携があります。instagramやfacebookの販売チャンネル開設、またLINEなどを利用した集客サポートもいたします。
            </p>
        </div>
        <div class="more-read">
            <button onclick="location.href='https://shoheishimizu.com/service/ec-site'" class="more-read-button" type="button">詳細ページへ</button>
        </div>
    </div>

    <div class="service-page-wrapper wow fadeIn">
        <p class="service-page-title">Webサイト制作</p>
        <div class="service-page-content">
            <img src="<?php echo get_template_directory_uri() ?>/image/casse-tete.jpg" alt="Webサイト実績画像" class="service-page-image">
            <p class="service-page-text">
                お客様のWebサイトを作成いたします。デザイン、コーディング、更新機能（WordPress）実装まで承ります。記載する文章や画像は予めご用意ください。サーバー、ドメイン契約の代行も承ります。お客様のWebサイトが実際にインターネット上にアップされるまで、責任をもって対応させていただきます。
            </p>
        </div>
        <div class="more-read">
            <button onclick="location.href='https://shoheishimizu.com/service/web-site'" class="more-read-button" type="button">詳細ページへ</button>
        </div>
    </div>

    <div class="service-page-wrapper wow fadeIn">
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
                ビジネス全般にしようできるアニメーションを作成いたします。商品PR、会社 / 店舗紹介、自己紹介、営業資料、マニュアル / 教育資料など、使用用途は多種多様です。アニメーションを使用することで、複雑な情報もよりわかりやすく相手に伝えることができます。お問い合わせ率の上昇や売上アップなど、使用するうえで多くのメリットがあります。
            </p>
        </div>
        <div class="more-read">
            <button onclick="location.href='https://shoheishimizu.com/service/business-animation/'" class="more-read-button" type="button">詳細ページへ</button>
        </div>
    </div>

</section>

<?php get_footer(); ?>