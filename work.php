<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>

<?php get_template_part('template_parts/main'); ?>

<!-- web sites -->
<section class="work-section inner">
    <p class="work-title">Web Site</p>
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
                    <p class="work-text"><?php echo esc_html($field_value['works_text']); ?></p>
                </div>
            </div>

        <?php } ?>

    </div>
</section>

<!-- work-design -->
<section class="work-section">
    <p class="work-title">Web Design</p>
    <div class="work-wrapper inner">
        <?php
        $work_design = SCF::get('works_design', 18);
        foreach ($work_design as $field_name => $field_value) {
        ?>
            <div class="work-content">
                <div class="work-content-image">
                    <div rel="lightbox">
                        <?php
                        if (wp_get_attachment_image_src($field_value['design_image'], 'large')) {
                            echo wp_get_attachment_image($field_value['design_image'], 'large');
                        } else {
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/noimg.png" alt="No Image">';
                        }
                        ?>
                    </div>
                </div>
                <div class="work-content-text">
                    <p class="work-text"><?php echo esc_html($field_value['design_text']); ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<!-- EC_site -->
<section class="work-section">
    <p class="work-title">EC site</p>
    <div class="work-wrapper inner">
        <?php
        $work_design = SCF::get('ec_site', 18);
        foreach ($work_design as $field_name => $field_value) {
        ?>
            <div class="work-content">
                <div class="work-content-image">
                    <a href="<?php echo esc_html($field_value['ec_site_link']); ?>" target="_blank" rel="noopener noreferrer">
                        <?php
                        if (wp_get_attachment_image_src($field_value['ec_site_image'], 'large')) {
                            echo wp_get_attachment_image($field_value['ec_site_image'], 'large');
                        } else {
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/noimg.png" alt="No Image">';
                        }
                        ?>
                    </a>
                </div>
                <div class="work-content-text">
                    <p class="work-text"><?php echo esc_html($field_value['ec_site_text']); ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<!-- business-animation -->
<section class="work-section">
    <p class="work-title">Business Animation</p>
    <div class="work-page-wrapper inner">
        <?php
        $work_animation = SCF::get('works_animation', 18);
        foreach ($work_animation as $field_name => $field_value) {
        ?>
            <div class="work-page-content">
                <div class="youtube-frame">
                    <?php echo wp_oembed_get($field_value['youtube_url']); ?>
                </div>
                <div class="work-content-text">
                    <p class="work-text"><?php echo esc_html($field_value['animation_text']); ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php get_footer(); ?>