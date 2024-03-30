<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset')?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(  ) ?>
</head>
<header class="main_header layout">
    <div>
        <a href="#"><img class="logo-brand"
                src="<?php echo get_theme_file_uri('/assets/images/logo-placeholder.svg') ?>" alt="" /></a>
    </div>
    <nav class="main_header_navigation">
        <menu class="">
            <li><a class="main__header__navigation-item" href="<?php echo esc_url(home_url( '/' )) ?>">Home</a></li>
            <li><a class="main__header__navigation-item" href="<?php echo esc_url(home_url( '/menu' )) ?>">Menu</a></li>
            <li><a class="main__header__navigation-item" href="<?php echo esc_url(home_url( '/events' )) ?>">Events</a>
            </li>
            <li><a class="main__header__navigation-item"
                    href="<?php echo esc_url(home_url( '/contact' )) ?>">Contact</a></li>
        </menu>
    </nav>
</header>

<body>