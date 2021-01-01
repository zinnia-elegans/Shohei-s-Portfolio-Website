<?php
/*
Template Name: Business
*/
?>

<?php get_header(); ?>

<?php get_template_part('template_parts/main'); ?>

<!-- business -->
<section class="business-page inner">
    <p class="business-page-title">基本料金</p>
    <div class="business-wrapper">
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
</section>

<!-- business-price -->
<section class="business-page-price inner">
    <p class="business-price-title">料金例：Web制作（一般的なHPの場合）</p>
    <div class="business-price-wrapper">
        <div class="business-price-content">
            <p class="business-price-content-title">デザインカンプ</p>
            <div class="business-page-line"></div>
            <p class="business-price-content-text">
                ・トップページ 1P <br>
                ・下層ページ 4P <br>
                ・お問い合わせページ 1P <br>
                ・スマホサイズ 6P</p>
            <p class="business-price-content-price">70,000円</p>
        </div>

        <div class="business-page-icon">
            <img src="<?php echo get_template_directory_uri() ?>/image/mbri-plus.svg" alt="プラスアイコン" class="business-page-plus">
        </div>

        <div class="business-price-content">
            <p class="business-price-content-title">コーディング</p>
            <div class="business-page-line"></div>
            <p class="business-price-content-text">
                ・トップページ 1P <br>
                ・下層ページ 4P <br>
                ・お問い合わせページ 1P <br>
                ・スマホサイズ 6P <br>
                ・WordPress実装<br>
            </p>
            <p class="business-price-content-price">40,000円</p>
        </div>


        <div class="business-page-icon">
            <img src="<?php echo get_template_directory_uri() ?>/image/mbri-plus.svg" alt="プラスアイコン" class="business-page-plus">
        </div>

        <div class="business-price-content">
            <p class="business-price-content-title">仕上げ</p>
            <div class="business-page-line"></div>
            <p class="business-price-content-text">
                ・サーバー設定 <br>
                ・ドメイン取得 <br>
                ・サーバーアップロード <br>
                ・アクセス解析設置 <br>
                ・基本的な内部SEO対策</p>
            <p class="business-price-content-price">10,000円</p>
        </div>
    </div>
    <p class="business-page-price-text">※ サーバー契約にかかる初期費用及び、ドメイン取得の月額料金はお客様のご負担となります。</p>
    <p class="business-price-all-price">合計：120,000円</p>
</section>

<!-- animation-price -->
<section class="business-page-price inner">
    <p class="business-price-title">料金例：アニメーション動画（20秒動画）</p>
    <div class="animation-price-content">
        <p class="business-price-content-title">動画作成</p>
        <div class="business-line"></div>
        <p class="animation-price-content-text">基本料金：20,000円</p>
        <div class="business-page-icon">
            <img src="<?php echo get_template_directory_uri() ?>/image/mbri-plus.svg" alt="プラスアイコン" class="business-page-plus">
        </div>
        <p class="animation-price-content-text2">1秒毎に2,000円</p>
        <p class="animation-price-content-text2">（30秒 = 60,000円）</p>
    </div>
    <p class="business-price-all-price">合計：80,000円</p>
</section>

<?php get_footer(); ?>