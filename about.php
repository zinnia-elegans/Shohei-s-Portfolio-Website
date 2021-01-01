<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<?php get_template_part('template_parts/main'); ?>

<!-- about-page -->
<section class="about-page inner">
    <div class="about-page-profile">
        <p class="about-page-profile-name">Shohei Shimizu</p>
        <?php
        $about_profile = SCF::get('about_profile', 39);
        foreach ($about_profile as $field_name => $field_value) {
        ?>
            <div class="about-page-profile-image">
                <?php
                echo wp_get_attachment_image($field_value['about_profile_image'], 'large');
                ?>
            </div>
            <p class="about-page-profile-text">
                <?php echo esc_html($field_value['about_profile_text']); ?>
            </p>
        <?php } ?>
    </div>
</section>

<section class="about-skill inner">
    <p class="about-skill-title">所有スキル</p>
    <?php
    $about_skill = SCF::get('about_skill', 39);
    foreach ($about_skill as $field_name => $field_value) {
    ?>
        <p class="about-skill-text">Coding：<?php echo esc_html($field_value['about_coding']); ?></p>
        <p class="about-skill-text">Design：<?php echo esc_html($field_value['about_design']); ?></p>
        <p class="about-skill-text">Movie：<?php echo esc_html($field_value['about_movie']); ?></p>
    <?php } ?>
</section>

<section class="about-page-info inner">
    <p class="about-info-name">清水 翔平</p>
    <p class="about-info-address">お問い合わせ：Shohei.Shimizu.22@gmail.com</p>
    <p class="about-info-work">事業内容：
        <?php
        $about_info_work = SCF::get('about_info_work', 39);
        echo esc_html($about_info_work);
        ?>
    </p>
</section>

<section class="about-page-sns inner">
    <?php
    $about_sns = SCF::get('about_sns', 39);
    foreach ($about_sns as $field_name => $field_value) {
    ?>
        <p class="about-sns-text">Twitter： <?php echo esc_html($field_value['about_twitter']); ?></p>
        <p class="about-sns-text">Instagram： <?php echo esc_html($field_value['about_instagram']); ?></p>
        <p class="about-sns-text">Facebook： <?php echo esc_html($field_value['about_facebook']); ?></p>
    <?php } ?>
</section>

<?php get_footer(); ?>