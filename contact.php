<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="contact inner" id="contact">

    <div class="title-wrapper">
        <p class="title-text">Contact</p>
        <p class="title-subtext">お問い合わせ</p>
    </div>

    <div class="contact-form wow fadeIn">
        <?php echo do_shortcode('[contact-form-7 id="203" title="form"]'); ?>
    </div>

</section>

<?php get_footer(); ?>