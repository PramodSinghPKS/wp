<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css">
</head>
<body <?php body_class(); ?>>
    <header id="ma__header" class="ma__header">
        <div class="ma__header__content">
            <h1 class="ma__header__logo">Mitch Alton</h1>
        </div>
        <div class="ma__header__options-contrast">
            <span class="ma__header__options-contrast__black">B</span> / <span class="ma__header__options-contrast__white">W</span>
        </div>
    </header>