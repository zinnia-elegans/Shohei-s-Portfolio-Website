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
        <nav class="header-nav dc-menu">
            <div class="header-menu">
                <h1 class="header-link">Shohei's Portfolio Website</h1>
                <div class="contact-link">
                    <button onclick="location.href='https://shoheishimizu.com/contact'" class="contact-link-button" type="button">Contact</button>
                </div>
            </div>

            <!-- drawer_menu -->
            <div class="custom-header">
                <div id="nav-toggle">
                    <div>
                        <span class="toggle"></span>
                        <span class="toggle"></span>
                        <span class="toggle"></span>
                    </div>
                </div>
                <div id="global-nav">
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
                    <nav>
                        <ul>
                            <li class="header-sns">
                                <a href="https://twitter.com/ShoheiShimizu" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/zinnia.elegans/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100045366891800" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </nav>

    </header>