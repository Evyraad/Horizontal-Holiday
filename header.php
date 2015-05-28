<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--
            Запрещает браузеру использовать Quirks Mode, т.к. Quirks Mode может 
            поломать разметку
        -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
        <!--Ссылка на фойл стилей style.css -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
        <!--Сообщают различным сервисам об обновлениях на сайте -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
        <!--Favicon пока не работает
        <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
        --> 
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
