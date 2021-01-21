<?php
/*
Template Name: animation
*/
?>

<?php get_header(); ?>

<!-- sub-main -->
<section class="sub-main wow fadeIn">
    <img src="<?php echo get_template_directory_uri() ?>/image/animation_image.jpg" alt="ビジネスアニメーションメイン画像" class="sub-main-image">
</section>

<div class="breadcrumbs inner wow fadeIn" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>

<!-- ec-page-top -->
<section class="ec-page inner">
    <div class="title-wrapper wow fadeIn">
        <p class="title-text">Business Animation</p>
        <p class="title-subtext">ビジネスアニメーション</p>
    </div>
    <div class="arrowWrap">
        <div class="arrowInner">
            <p>SCROLL DOWN</p>
            <div class="arrow"></div>
        </div>
    </div>
    <div class="ec-top">
        <p class="ec-top-text">
            Vyondでアニメーション動画を制作いたします。ご希望のビジネスシーンに合わせて、作成可能です。アニメーションを使用することで、サービス理解度の向上、お問い合わせや契約率アップにも繋がります。一般的な実写、オリジナルアニメに比べ、価格を抑えられますので、圧倒的なコストパフォーマンスを実現できます。
        </p>
    </div>

    <div class="ec-video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/HdaPegTlzf4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>

<!-- Flow -->
<section class="ec-flow inner">
    <div class="title-wrapper wow fadeIn">
        <p class="title-text">Flow</p>
        <p class="title-subtext">ビジネスアニメーション制作の流れ</p>
    </div>

    <div class="ec-flow-wrapper wow fadeIn">
        <p class="ec-price-number">01</p>
        <div class="ec-flow-content">
            <div class="ec-flow-top">
                <p class="ec-flow-title">Direction</p>
                <p class="ec-flow-subtitle">ヒヤリング</p>
            </div>
            <div class="ec-flow-content-bottom">
                <p class="ec-flow-text">
                    企画、構成を考える上で必要な要素をヒヤリングシートに沿ってお聞きいたします。動画に差し込んでほしい画像やテキストをご用意ください。また、秒数によって金額が決まりますので、ご予算に限りがある方はこの時にご相談ください。
                </p>
            </div>
        </div>
    </div>

    <div class="ec-flow-arrow wow fadeIn">
        <span class="arrow-bottom"></span>
    </div>


    <div class="ec-flow-wrapper wow fadeIn">
        <p class="ec-price-number">02</p>
        <div class="ec-flow-content">
            <div class="ec-flow-top">
                <p class="ec-flow-title">Storyboard</p>
                <p class="ec-flow-subtitle">絵コンテ</p>
            </div>
            <div class="ec-flow-content-bottom">
                <p class="ec-flow-text">
                    ヒヤリングの内容を反映させた絵コンテを作成いたします。絵コンテの修正は２回までとさせていただきます。テキストや画像の変更、追加があればご相談ください。この工程後に、実際にアニメーションをつけていきます。
                </p>
            </div>
        </div>
    </div>

    <div class="ec-flow-arrow wow fadeIn">
        <span class="arrow-bottom"></span>
    </div>

    <div class="ec-flow-wrapper wow fadeIn">
        <p class="ec-price-number">03</p>
        <div class="ec-flow-content">
            <div class="ec-flow-top">
                <p class="ec-flow-title">Animation</p>
                <p class="ec-flow-subtitle">動画</p>
            </div>
            <div class="ec-flow-content-bottom">
                <p class="ec-flow-text">
                    絵コンテに動きをつけ、アニメーションが完成します。エフェクトや細かいアニメーションの変更があればこの時にお願いします。修正は２回までとさせていただきます。問題がなければ、mp4形式の動画ファイルにて納品させていただきます。
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Price -->
<section class="ec-price inner">
    <div class="title-wrapper wow fadeIn">
        <p class="title-text">Price</p>
        <p class="title-subtext">アニメーション制作料金</p>
    </div>

    <!-- Coding -->
    <table class="web-site-table wow fadeIn">
        <thead>
            <tr>
                <td></td>
                <th scope="col">内容</th>
                <th scope="col">価格</th>
            </tr>
        </thead>
        <tbody class="web-site-tbody">
            <tr>
                <th>基本料金</th>
                <td data-label="内容" class="txt">
                    <span>Vyondには「著作権譲渡手数料」というものがかかります。基本料金でいただくお金は、そちらの支払いに使わせていただきます。</span>
                </td>
                <td data-label="価格" class="web-site-price"><span class="web-site-price-all">¥20,000</span></td>
            </tr>
            <tr>
                <th>1秒毎</th>
                <td data-label="内容" class="txt">
                    動画の長さによって金額が変わります。お見積り時と実際にアニメーションが完成された時、秒数の誤差がでることがあります。予めご了承ください。
                </td>
                <td data-label="価格" class="web-site-price">+ <span class="web-site-price-all">¥1,000</span></td>
            </tr>
        </tbody>
    </table>

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


    <div class="more-read">
        <button onclick="location.href='https://shoheishimizu.com/contact'" class="more-read-button" type="button">無料でお見積り</button>
    </div>

</section>

<?php get_footer(); ?>