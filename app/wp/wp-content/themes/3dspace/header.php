<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?wp_head();?>
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
            <ul>
                <li><a href="portfolio.html">Портфоліо</a></li>
                <li><a href="blog.html">Новини</a></li>
                <li><a href="content.html">Про нас</a></li>
                <li><a href="contacts.html">Контакти</a></li>
            </ul>
        </div> 
        <div class="columns large-2 language">
            <div>
                <?php echo qtranxf_generateLanguageSelectCode('text') ?>
            </div>
        </div>
    </div>
</header>