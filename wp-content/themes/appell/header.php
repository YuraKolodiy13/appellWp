<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <meta name='description' content='<?php bloginfo('description'); ?>'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>

    <header class="header">
        <div class="header__wrapper">
            <div class="header__logo">
                <a href=""><img src="img/logo.png" alt="Логотип"></a>
            </div>
            <nav class="header__nav nav">
                <button class="nav__btn">
                    <span></span>
                    Menu
                </button>
                <?php wp_nav_menu(array(
                                'theme_location' => 'topMenu',
                                'container' => null,
                                'menu_class' => 'topNav',
                            )); ?>
            </nav>
            <div class="header__btn">
                <a href="">get a quote</a>
            </div>
        </div>
    </header>