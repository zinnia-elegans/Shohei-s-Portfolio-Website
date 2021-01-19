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


