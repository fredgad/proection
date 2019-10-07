
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>

    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body <?php body_class(); ?>>
<div id="wrapper">

    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main/page-background.png" alt="background">

    <header id="header"> 
        <a href="#" class="header-left">   
            <h1>ХАЧАТУРЯН&nbsp;ЛЕВОН&nbsp;ГРАНТОВИЧ</h1>
            <div>
                <div class="header-left__line1"></div>
                <h2>АРХИТЕКТОР</h2>
                <div class="header-left__line2"></div>
            </div>
        </a>
        <div class="header-right">
            <div class="header-right__arrow"></div>
            <p>КОМПЛЕКСНОЕ ПРОЕКТИРОВАНИЕ <br/>
                ЗДАНИЙ ЖИЛОГО И ОБЩЕСТВЕННОГО НАЗНАЧЕНИЯ <br/>
                ЛЮБОЙ СЛОЖНОСТИ И КАТЕГОРИИ</p>
        </div>
    </header>
