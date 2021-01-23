<?php
/*
Template Name: Complete
*/
?>

<?php get_header(); ?>

<div class="complete inner">
    <p class="complete-title">お問い合わせを受け付けました。</p>
    <p class="complete-subtitle">確認のためお客様へ自動返信メールをお送りさせていただきました。</p>
    <p class="complete-subtitle">この度はお問い合わせ頂き、誠にありがとうございます。</p>

    <div class="complete-more-read">
        <button onclick="location.href='<?php echo esc_url(home_url('/')); ?>'" class="complete-more-read-button" type="button">トップページへ戻る</button>
    </div>
</div>

<?php get_footer(); ?>