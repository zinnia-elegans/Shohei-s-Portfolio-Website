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
    });
});


$(function () {
    $('#nav-toggle').on('click', function () {
        $('header').toggleClass('open');
    });
});

$(function () {
    // アニメーションさせたいクラス
    var container = $(".main-text");
    // アニメーションスピード
    var speed = 80;

    // テキストの間にスペースを入れます
    var content = $(container).html();
    var text = $.trim(content);
    var newHtml = "";

    // スペースで区切ったテキストを、テキストの数だけspanで囲む
    text.split("").forEach(function (v) {
        newHtml += '<span>' + v + '</span>';
    });

    // spanで囲んだテキスト群をHTMLに戻す
    $(container).html(newHtml);

    // 1文字ずつ表示
    var txtNum = 0;

    setInterval(function () {
        $(container).find('span').eq(txtNum).css({ opacity: 1 });
        txtNum++
    }, speed);
});

$(function () {
    var container = $(".main-subtext");
    var speed = 100;
    var content = $(container).html();
    var text = $.trim(content);
    var newHtml = "";

    text.split("").forEach(function (v) {
        newHtml += '<span>' + v + '</span>';
    });

    $(container).html(newHtml);

    var txtNum = 0;

    setInterval(function () {
        $(container).find('span').eq(txtNum).css({ opacity: 1 });
        txtNum++
    }, speed);
});

$(function () {
    $("#tab1").click(moveToFirst);
    $("#tab2").click(moveToSecond);
    $("#tab3").click(moveToThird);

    function moveToFirst() {
        $("#slide").attr('class', 'move-to-first');
        $(".tab").attr('class', 'tab');
        $("#tab1").attr('class', 'tab selected');
    }

    function moveToSecond() {
        $("#slide").attr('class', 'move-to-second');
        $(".tab").attr('class', 'tab');
        $("#tab2").attr('class', 'tab selected');
    }

    function moveToThird() {
        $("#slide").attr('class', 'move-to-third');
        $(".tab").attr('class', 'tab');
        $("#tab3").attr('class', 'tab selected');
    }
});


jQuery(window).on("scroll", function ($) {
    if (jQuery(this).scrollTop() > 100) {
        jQuery('.arrowWrapTop').show();
    } else {
        jQuery('.arrowWrapTop').hide();
    }
});

jQuery('.arrowWrapTop').click(function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 500);
    return false;
});

// スクロール検知
jQuery(window).on("scroll", function () {
    // トップから100px以上スクロールしたら
    if (100 < jQuery(this).scrollTop()) {
        // is-showクラスをつける
        jQuery('.arrowInnerTop').addClass('is-show');
    } else {
        // 100pxを下回ったらis-showクラスを削除
        jQuery('.arrowInnerTop').removeClass('is-show');
    }
});