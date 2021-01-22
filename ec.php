<?php
/*
Template Name: EC site
*/
?>

<?php get_header(); ?>

<!-- sub-main -->
<section class="sub-main wow fadeIn">
    <img src="<?php echo get_template_directory_uri() ?>/image/ecsite_image.jpg" alt="ECサイトメイン画像" class="sub-main-image">
</section>

<div class="breadcrumbs inner wow fadeIn" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>

<!-- ec-page-top -->
<section class="ec-page inner">
    <div class="title-wrapper wow fadeIn">
        <p class="title-text">EC site</p>
        <p class="title-subtext">ECサイト構築</p>
    </div>
    <div class="arrowWrap">
        <div class="arrowInner">
            <p>SCROLL DOWN</p>
            <div class="arrow"></div>
        </div>
    </div>
    <div class="ec-top">
        <p class="ec-top-text">
            ECサイト構築には、Shopifyというプラットフォームを使用します。Shopifyをご使用するメリットをこちらの動画にまとめましたので、ぜひ御覧ください。
        </p>
    </div>

    <div class="ec-video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/TkBLRO4YnhY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>

<!-- Flow -->
<section class="ec-flow inner">
    <div class="title-wrapper wow fadeIn">
        <p class="title-text">Flow</p>
        <p class="title-subtext">Shopifyサイト構築の流れ</p>
    </div>

    <div class="ec-flow-wrapper wow fadeIn">
        <p class="ec-price-number">01</p>
        <div class="ec-flow-content">
            <div class="ec-flow-top">
                <p class="ec-flow-title">Build</p>
                <p class="ec-flow-subtitle">構築</p>
            </div>
            <div class="ec-flow-content-bottom">
                <p class="ec-flow-text">お客様の要望を元に、ストアテーマのデザイン、商品の登録、規約や配送の設定、テスト決済を行います。これらの工程が完了しましたら、お客様が作成したShopifyアカウントの方へ移行手続きを行います。</p>
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
                <p class="ec-flow-title">Open</p>
                <p class="ec-flow-subtitle">公開</p>
            </div>
            <div class="ec-flow-content-bottom">
                <p class="ec-flow-text">オーナーアカウントの譲渡が完了しましたら、お客様のアカウントでアプリの設定、ドメインの設定、本番用決済の設定を行います。全ての設定が完了しましたら、オンラインストアがインターネット上に公開されます。</p>
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
                <p class="ec-flow-title">Marketing</p>
                <p class="ec-flow-subtitle">運用</p>
            </div>
            <div class="ec-flow-content-bottom">
                <p class="ec-flow-text">公開後の集客のサポートもお任せください。オンライストアの流入の50%~70%がSNSと言われています。instagram、Twitter、Facebook等を使用し、ネット集客のサポートをいたします。</p>
            </div>
        </div>
    </div>
</section>

<!-- Price -->
<section class="ec-price inner">
    <div class="title-wrapper wow fadeIn">
        <p class="title-text">Price</p>
        <p class="title-subtext">基本料金</p>
    </div>

    <div id="wrap">
        <div id="tab1" class="tab selected">ベーシックプラン</div>
        <div id="tab2" class="tab">アドバンスプラン</div>
        <div id="tab3" class="tab">プロプラン</div>

        <div id="container">
            <div id="slide" class="wow fadeIn">

                <!-- ベーシックプラン -->
                <div id="first" class="box">
                    <div class="ec-price-content">
                        <p class="ec-price-content-text">テンプレートカスタマイズ（コーディングなし）</p>
                        <p class="ec-price-content-text">商品登録 （1件まで）</p>
                        <p class="ec-price-content-text">規約、プライバシーポリシー設定</p>
                        <p class="ec-price-content-text">配送設定</p>
                        <p class="ec-price-content-text">一週間の質問サポート</p>
                        <p class="ec-price-content-explain">ECサイト運営する上での最低限の設定をさせていただきます。まずは自分のストアを公開したいという方へオススメのプランです。</p>
                        <div class="ec-price-all">
                            <p class="ec-price-all-fee">料金（税込）<span class="ec-price-all-yen">10,000</span>円</p>
                        </div>
                    </div>
                </div>

                <!-- アドバンスプラン -->
                <div id="second" class="box">
                    <div class="ec-price-content">
                        <p class="ec-price-content-text">テンプレートカスタマイズ（コーディングあり）</p>
                        <p class="ec-price-content-text">商品登録 （5件まで）</p>
                        <p class="ec-price-content-text">規約、プライバシーポリシー設定</p>
                        <p class="ec-price-content-text">配送設定</p>
                        <p class="ec-price-content-text">各種SNS連携</p>
                        <p class="ec-price-content-text">SNS販売チャンネル開設</p>
                        <p class="ec-price-content-text">独自ドメイン取得</p>
                        <p class="ec-price-content-text">二週間の質問サポート</p>
                        <p class="ec-price-content-explain">ベーシップランに加え、デザインのカスタマイズも承ります。また、instagramやfacebookへの販売チャンネル開設、SNS連携等のお手伝いをいたします。</p>
                        <div class="ec-price-all">
                            <p class="ec-price-all-fee">料金（税込）<span class="ec-price-all-yen">50,000</span>円</p>
                        </div>
                    </div>
                </div>

                <!-- プロプラン -->
                <div id="third" class="box">
                    <div class="ec-price-content">
                        <p class="ec-price-content-text">テンプレートカスタマイズ（コーディングあり）</p>
                        <p class="ec-price-content-text">商品登録 （10件まで）</p>
                        <p class="ec-price-content-text">規約、プライバシーポリシー設定</p>
                        <p class="ec-price-content-text">配送設定</p>
                        <p class="ec-price-content-text">各種SNS連携</p>
                        <p class="ec-price-content-text">SNS販売チャンネル開設</p>
                        <p class="ec-price-content-text">独自ドメイン取得</p>
                        <p class="ec-price-content-text">SNS運用サポート</p>
                        <p class="ec-price-content-text">三週間の質問サポート</p>
                        <p class="ec-price-content-explain">アドバンスプランに加え、SNSや広告を用いた集客のサポートをいたします。お客様の売上げアップに貢献いたします。</p>
                        <div class="ec-price-all">
                            <p class="ec-price-all-fee">料金（税込）<span class="ec-price-all-yen">100,000</span>円</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="plan-detail">
        <p class="plan-detail-text">※ いずれもShopifyのプラン（月額$29~299）に加入していただく必要があります。</p>
    </div>

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