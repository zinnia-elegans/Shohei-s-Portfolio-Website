<?php
/*
Template Name: Web site
*/
?>

<?php get_header(); ?>

<!-- sub-main -->
<section class="sub-main wow fadeIn">
    <img src="<?php echo get_template_directory_uri() ?>/image/website_image.jpg" alt="ECサイトメイン画像" class="sub-main-image">
</section>

<div class="breadcrumbs inner wow fadeIn" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>

<!-- ec-page-top -->
<section class="ec-page inner">
    <div class="title-wrapper wow fadeIn">
        <p class="title-text">Web site</p>
        <p class="title-subtext">Webサイト制作</p>
    </div>
    <div class="arrowWrap">
        <div class="arrowInner">
            <p>SCROLL DOWN</p>
            <div class="arrow"></div>
        </div>
    </div>
    <div class="ec-top">
        <p class="ec-top-text">
            お客様のWebサイトを作成いたします。デザイン、コーディング、更新機能（WordPress）実装まで承ります。記載する文章や画像は予めご用意ください。サーバー、ドメイン契約の代行も承ります。お客様のWebサイトが実際にインターネット上に公開されるまで、責任をもって対応させていただきます。
        </p>
    </div>

</section>

<!-- Flow -->
<section class="ec-flow inner">
    <div class="title-wrapper wow fadeIn">
        <p class="title-text">Flow</p>
        <p class="title-subtext">Webサイト制作の流れ</p>
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
                    ヒヤリングシートを元に現状の問題点を洗い出し、お客様に最適なプランを提案いたします。Webサイト制作において、デザインに入る前の事前準備が何よりも重要です。必要であるもの、ないものを判断し、費用対効果の高いWebサイトを作成をお手伝いいたします。
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
                <p class="ec-flow-title">Design</p>
                <p class="ec-flow-subtitle">デザイン</p>
            </div>
            <div class="ec-flow-content-bottom">
                <p class="ec-flow-text">
                    ヒアリングに基づいたプランに沿って、デザインを作成いたします。「何となくカッコいい」デザインではなく、訪れたお客様が知りたい情報にアクセスでき、それを最適な形でお見せし、購入・お問い合わせなどの成果を上げるための流れをデザインで最適化いたします。
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
                <p class="ec-flow-title">Coding</p>
                <p class="ec-flow-subtitle">コーディング</p>
            </div>
            <div class="ec-flow-content-bottom">
                <p class="ec-flow-text">
                    完成されたデザイン案を元に、コーディングを行います。スマートフォンサイズのサイトや、WordPressを使用した更新性の高いサイト、アニメーションを追加した動きのあるWebサイトを作成いたします。
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Price -->
<section class="ec-price inner">
    <div class="title-wrapper wow fadeIn">
        <p class="title-text">Design</p>
        <p class="title-subtext">デザイン料金</p>
    </div>

    <!-- Design -->
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
                <th>トップページデザイン</th>
                <td data-label="内容" class="txt">
                    <span>ホームページの基礎となるデザインを制作します。基本的な構成は、ヘッダー、メイン画像、コンテンツ、フッターを想定しております。ボリュームによって費用も変わるため、まずはご相談ください</span>
                </td>
                <td data-label="価格" class="web-site-price">1ページ / <span class="web-site-price-all">¥20,000~</span></td>
            </tr>
            <tr>
                <th>下層ページデザイン</th>
                <td data-label="内容" class="txt">
                    トップページのデザインを元に、下層ページをデザインします。使用する画像の枚数や、文章量によって費用は変わってきますので、事前にご相談ください。
                </td>
                <td data-label="価格" class="web-site-price">1ページ / <span class="web-site-price-all">¥10,000~</span></td>
            </tr>
            <tr>
                <th>レスポンシブデザイン</th>
                <td data-label="内容" class="txt">
                    PCサイズのデザインを元に、スマホ版のデザインを作成いたします。
                </td>
                <td data-label="価格" class="web-site-price">1ページ / <span class="web-site-price-all">¥5,000~</span></td>
            </tr>
        </tbody>
    </table>

    <div class="title-wrapper wow fadeIn">
        <p class="title-text">Coding</p>
        <p class="title-subtext">コーディング料金</p>
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
                <th>トップページコーディング</th>
                <td data-label="内容" class="txt">
                    <span>デザインを元に、HTML + CSSでコーディングし、jQueryを用いてアニメーションも追加します。</span>
                </td>
                <td data-label="価格" class="web-site-price">1ページ / <span class="web-site-price-all">¥10,000~</span></td>
            </tr>
            <tr>
                <th>下層ページコーディング</th>
                <td data-label="内容" class="txt">
                    トップページと同じように、下層ページもコーディングいたします。
                </td>
                <td data-label="価格" class="web-site-price">1ページ / <span class="web-site-price-all">¥5,000~</span></td>
            </tr>
            <tr>
                <th>レスポンシブコーディング</th>
                <td data-label="内容" class="txt">
                    スマホ版デザインを元に、サイズを最適化いたします。
                </td>
                <td data-label="価格" class="web-site-price">1ページ / <span class="web-site-price-all">¥2,500~</span></td>
            </tr>
            <tr>
                <th>WordPress</th>
                <td data-label="内容" class="txt">
                    WordPressを用いた更新システムを導入いたします。今後、差し替える可能性のあるテキスト、画像、動画等、ご希望の箇所に更新機能を実装いたします。
                </td>
                <td data-label="価格" class="web-site-price">1ページ / <span class="web-site-price-all">¥10,000~</span></td>
            </tr>
        </tbody>
    </table>

</section>

<!-- Price -->
<section class="ec-price inner">
    <div class="title-wrapper wow fadeIn">
        <p class="title-text">Price</p>
        <p class="title-subtext">料金目安</p>
    </div>

    <div id="wrap">
        <div id="tab1" class="tab selected">LP制作</div>
        <div id="tab2" class="tab">HP制作</div>
        <div id="tab3" class="tab">HP制作 + 更新機能</div>

        <div id="container">
            <div id="slide" class="wow fadeIn">

                <!-- ベーシックプラン -->
                <div id="first" class="box">
                    <div class="ec-price-content">
                        <p class="ec-price-content-text">トップページデザイン x 1</p>
                        <p class="ec-price-content-text">トップページコーディング x 1</p>
                        <p class="ec-price-content-text">お問い合わせフォーム設置</p>
                        <p class="ec-price-content-text">スマホ版対応</p>
                        <p class="ec-price-content-explain">
                            基本的な構成のLPサイトです。予算に限りがある場合は、テンプレートを使用した安価なプランもございますので、ご相談ください。
                        </p>
                        <div class="ec-price-all">
                            <p class="ec-price-all-fee">料金（税込）<span class="ec-price-all-yen">50,000</span>円〜</p>
                        </div>
                    </div>
                </div>

                <!-- アドバンスプラン -->
                <div id="second" class="box">
                    <div class="ec-price-content">
                        <p class="ec-price-content-text">トップページデザイン x 1</p>
                        <p class="ec-price-content-text">下層ページデザイン x 4</p>
                        <p class="ec-price-content-text">トップページコーディング x 1</p>
                        <p class="ec-price-content-text">下層ページコーディング x 4p</p>
                        <p class="ec-price-content-text">お問い合わせフォーム設置</p>
                        <p class="ec-price-content-text">スマホ版対応</p>
                        <p class="ec-price-content-explain">
                            一般的なページ構成、トップページ / 会社概要 / 事業内容 / 採用情報 / お問い合わせ 等を想定しております。ペース数が5Pより少ない場合は割引とさせていただきます。
                        </p>
                        <div class="ec-price-all">
                            <p class="ec-price-all-fee">料金（税込）<span class="ec-price-all-yen">100,000</span>円〜</p>
                        </div>
                    </div>
                </div>

                <!-- プロプラン -->
                <div id="third" class="box">
                    <div class="ec-price-content">
                        <p class="ec-price-content-text">トップページデザイン x 1</p>
                        <p class="ec-price-content-text">下層ページデザイン x 4</p>
                        <p class="ec-price-content-text">トップページコーディング x 1</p>
                        <p class="ec-price-content-text">下層ページコーディング x 4p</p>
                        <p class="ec-price-content-text">お問い合わせフォーム設置</p>
                        <p class="ec-price-content-text">スマホ版対応</p>
                        <p class="ec-price-content-text">WordPress実装</p>
                        <p class="ec-price-content-explain">
                            基本的な構成のHPサイトに、更新機能を追加した場合の予算目安です。更新機能にはWordPressを使用します。お客様ご自身で画像やテキストを差し替えることができるように、サイトをカスタマイズいたします。
                        </p>
                        <div class="ec-price-all">
                            <p class="ec-price-all-fee">料金（税込）<span class="ec-price-all-yen">150,000</span>円〜</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- プラン説明 -->
    <div class="plan-detail">
        <p class="plan-detail-text">※ サーバー契約にかかる初期費用及び、ドメイン取得の月額料金はお客様のご負担となります。</p>
    </div>

    <!-- web sites -->
    <section class="work-section">
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

    <div class="more-read">
        <button onclick="location.href='https://shoheishimizu.com/contact'" class="more-read-button" type="button">無料でお見積り</button>
    </div>

</section>

<section class="to_top to_top_fixed">
    <div class="arrowWrapTop">
        <a href="#" class="arrowInnerTop" id="to_top">
            <div class="arrow_top"></div>
            <p>TO TOP</p>
        </a>
    </div>
</section>

<?php get_footer(); ?>