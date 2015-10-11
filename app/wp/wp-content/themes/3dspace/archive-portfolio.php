<?php get_header();?>   
    <div class="top-image" style="background: url('<?php bloginfo('stylesheet_directory');?>/pictures/slider/03.jpg')"></div>
    
    <div class="row title-page">
        <div class="columns large-12">
            <h1><?php if(get_locale() == 'uk') {?>Всі проекти<?php }elseif(get_locale() == 'ru_RU') { ?>Все проекты<?php } ?></h1>
        </div>
    </div>
    
    <div class="row content-holder portfolio">
       <?php if(function_exists('bcn_display') && !is_front_page()) { ?>
						<div class="breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">
							<?php bcn_display(); ?>
						</div>
					<?php } ?>        
        <div class="change-class">
            <a href="/portfolio_category/dyzajn-ynterera/" class="class-1"><?php if(get_locale() == 'uk') {?>Дизайн інтер'єру<?php }elseif(get_locale() == 'ru_RU') { ?>Дизайн интерьера<?php } ?></a>
            <a href="/portfolio_category/dyzajn-eksterera/" class="class-2"><?php if(get_locale() == 'uk') {?>Дизайн екстер'єру<?php }elseif(get_locale() == 'ru_RU') { ?>Дизайн экстерьера<?php } ?></a>
            <a href="/portfolio_category/proekty-domov/" class="class-3"><?php if(get_locale() == 'uk') {?>Проекти будинків<?php }elseif(get_locale() == 'ru_RU') { ?>Проекты домов<?php } ?></a>
            <a href="/portfolio/" class="all active"><?php if(get_locale() == 'uk') {?>Всі проекти<?php }elseif(get_locale() == 'ru_RU') { ?>Все проекты<?php } ?></a>
        </div>
       
        <div class="wrapper clearfix">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
            <div class="columns large-4">
                <div class="my-wrap">
                    <div class="name"><h2><?php the_title();?></h2></div>
                    <div class="my-block" style="background: url('<?php if(get_post_meta($post->ID, 'main_image', true) != ""){ echo "".get_post_meta($post->ID, 'main_image', true).""; }?>')">
                        <a href="<?php the_permalink();?>">Відкрити</a>
                    </div>
                </div>
            </div>
 <?php endwhile; 
else : ?>
<div class="row content-holder content-text">
	<div class="columns large-12 item">
		<h1><?php if(get_locale() == 'uk') {?>Помилка 404<?php }elseif(get_locale() == 'ru_RU') { ?>Ошибка 404<?php } ?></h1>
        <p><?php if(get_locale() == 'uk') {?>Вибачте, такої сторінки не існує.<?php }elseif(get_locale() == 'ru_RU') { ?>Простите, такой страницы не существует.<?php } ?></p>  
    </div>        
</div>
<?php endif; ?>
        </div>
        
<div class="pagination-centered paginations">
    <?php wp_pagination(); ?>
</div>        
    </div>
<?php get_footer();?>