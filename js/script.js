/* drawer */
jQuery('.drawer-icon').on('click', function () {
    jQuery('.drawer').toggleClass('m_checked');
});

//ヘッダーの高さ分だけコンテンツを下げる
$(function () {
    var height = $("#header").height();
    $("body").css("margin-top", height + 80);//10pxだけ余裕をもたせる
});

jQuery(document).ready(function ($) {
    $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
    });

    $('.showOlderChanges').on('click', function (e) {
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
    })
});
