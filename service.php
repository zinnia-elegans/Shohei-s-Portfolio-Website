<?php
/*
Template Name: Service
*/
?>

<?php get_header(); ?>

<?php get_template_part('template_parts/main'); ?>

<?php
$service = SCF::get('service', 49);
foreach ($service as $field_name => $field_value) {
?>
    <!-- Service -->
    <section class="service-page inner">
        <div class="service-wrapper">

            <div class="service-content">
                <p class="service-subtitle">ディレクション</p>
                <p class="service-title">Direction</p>
                <img src="<?php echo get_template_directory_uri() ?>/image/mbri-edit.svg" alt="ディレクションアイコン">
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
        </div>
    </section>

    <section class="business-animation inner">
        <p class="business-animation-text">Vyondを使用したビジネスアニメーション動画も作成可能です。作例実績は７０本以上あります。サンプル動画もございますので、ぜひご確認ください。</p>
        <div class="business-animation-content">
            <p class="service-subtitle">ビジネスアニメーション</p>
            <p class="service-title">Business Animation</p>
            <div class="business-animation-icon"></div>
            <img src="<?php echo get_template_directory_uri() ?>/image/mbri-video.svg" alt="ビジネスアニメーションアイコン" class="business-animation-img">
            <p class="business-animation-content-text">
                <?php echo esc_html($field_value['service_animation']); ?>
            </p>
        </div>
    </section>
<?php } ?>

<?php get_footer(); ?>