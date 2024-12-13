<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="YB0p0hoKDA3RHUsfXHSQl0HpYRbU2scRr8DAjaLuy3M" />
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header__container">
            <div class="header__row">
                <div class="header__logo">
                    <a href="<?php echo home_url(); ?>" class="header__logo-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.svg" alt="Logo">
                    </a>
                </div>
                <nav class="header__nav">
                    <?php wp_nav_menu(array('container' => false, 'theme_location' => 'primary', 'items_wrap' => '<ul id="top-nav" class="top-nav">%3$s</ul>')); ?>
                </nav>
                <div class="header__toggle">
                    <button class="header__toggle-button">
                        <span class="toggle-icon">☰</span>
                    </button>
                </div>
                <div class="header__cta">
                    <a href="#!" class="header__cta-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SideLeft.svg"
                            alt="Side Left Button">
                        <span>Let’s Collaborate</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SideRight.svg"
                            alt="Side Right Button">
                    </a>
                </div>
            </div>
        </div>
        <div class="mobile-nav" id="mobile-nav">
            <?php wp_nav_menu(array('container' => false, 'theme_location' => 'primary', 'items_wrap' => '<ul class="mobile-nav-list">%3$s</ul>')); ?>
        </div>
    </header>