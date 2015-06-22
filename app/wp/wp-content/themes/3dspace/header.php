<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slider.css" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>
<body class="home">
    
<header>
    <div class="row">
        <div class="columns large-2 logo">
            <div>
                <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt=""></a>
            </div>
        </div> 
        <div class="columns large-8 menu">
            <?php
							if(function_exists('wp_nav_menu'))
								wp_nav_menu( array( 'menu_class' => 'nav', 'theme_location' => 'menu_head') );
							else
								wp_page_menu('show_home=1&menu_class=nav&title_li=&depth=1&sort_column=menu_order');
						?>
        </div> 
        <div class="columns large-2 language">
            <div>
                <?php echo qtranxf_generateLanguageSelectCode('text') ?>
            </div>
        </div>
    </div>
</header>