<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shohei Shimizu</title>
    <link rel="stylesheet" href="css/reset.css">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@ShoheiShimizu" />
    <meta property="og:url" content="https://shoheishimizu.com/" />
    <meta property="og:title" content="Shohei Shimizu" />
    <meta property="og:description" content="Shohei's Portfolio Website" />
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/image/twitter_card.png" />

    <?php wp_head(); ?>
</head>

<body>
    <!-- header -->
    <header class="header header-inner" id="header">
        <div class="drawer">
            <div class="drawer-icon">
                <span class="drawer-open"><i class="fas fa-bars"></i></span><!-- /drawer-open -->
                <span class="drawer-close"><i class="fas fa-times"></i></span><!-- drawer-close -->
            </div>

            <div class="drawer-content">
                <nav class="drawer-nav">
                    <ul class="drawer-list">
                        <?php
                        wp_nav_menu(

                            array(
                                'depth' => 1,
                                'theme_location' => 'drawer', //グローバルメニューをここに表示すると指定
                                'container' => 'nav',
                                'container_class' => 'drawer-menu-item',
                                'menu_class' => 'drawer-list',
                            )
                        );
                        ?>
                    </ul>
                </nav>
            </div>
        </div>

        <nav class="header-nav">
            <?php
            wp_nav_menu(

                array(
                    'depth' => 1,
                    'theme_location' => 'global', //グローバルメニューをここに表示すると指定
                    'container' => 'false',
                    'menu_class' => 'header-menu',
                )
            );
            ?>
        </nav>
    </header>