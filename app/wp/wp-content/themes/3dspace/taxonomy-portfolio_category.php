<?get_header();?>   
    <div class="top-image" style="background: url('<? bloginfo('stylesheet_directory');?>/pictures/slider/03.jpg')"></div>
    
    <div class="row title-page">
        <div class="columns large-12">
            <h1><?php _e(single_term_title(),'qtranslate');?></h1>
        </div>
    </div>
    
    <div class="row content-holder portfolio">
       <?php if(function_exists('bcn_display') && !is_front_page()) { ?>
						<div class="breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">
							<?php bcn_display(); ?>
						</div>
					<?php } ?>      
        <div class="change-class">
            <a href="/portfolio_category/dyzajn-ynterera/" class="class-1 <?if(is_tax('portfolio_category','5')){echo'active';}?>"><? if(get_locale() == 'uk') {?>Дизайн інтер'єру<? }elseif(get_locale() == 'ru_RU') { ?>Дизайн интерьера<? } ?></a>
            <a href="/portfolio_category/dyzajn-eksterera/" class="class-2 <?if(is_tax('portfolio_category','6')){echo'active';}?>"><? if(get_locale() == 'uk') {?>Дизайн екстер'єру<? }elseif(get_locale() == 'ru_RU') { ?>Дизайн экстерьера<? } ?></a>
            <a href="/portfolio_category/proekty-domov/" class="class-3 <?if(is_tax('portfolio_category','7')){echo'active';}?>"><? if(get_locale() == 'uk') {?>Проекти будинків<? }elseif(get_locale() == 'ru_RU') { ?>Проекты домов<? } ?></a>
            <a href="/portfolio/" class="all"><? if(get_locale() == 'uk') {?>Всі проекти<? }elseif(get_locale() == 'ru_RU') { ?>Все проекты<? } ?></a>
        </div>
       
        <div class="wrapper clearfix">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
            <div class="columns large-4">
                <div class="my-wrap">
                    <div class="name"><h2><?the_title();?></h2></div>
                    <div class="my-block" style="background: url('<?php if(get_post_meta($post->ID, 'main_image', true) != ""){ echo "".get_post_meta($post->ID, 'main_image', true).""; }?>')">
                        <a href="<?the_permalink();?>">Відкрити</a>
                    </div>
                </div>
            </div>
 <?php endwhile; 
else : ?>
<div class="row content-holder content-text">
	<div class="columns large-12 item">
		<h1><? if(get_locale() == 'uk') {?>Помилка 404<? }elseif(get_locale() == 'ru_RU') { ?>Ошибка 404<? } ?></h1>
        <p><? if(get_locale() == 'uk') {?>Вибачте, такої сторінки не існує.<? }elseif(get_locale() == 'ru_RU') { ?>Простите, такой страницы не существует.<? } ?></p>  
    </div>        
</div>
<?php endif; ?>
        </div>
        
<div class="pagination-centered paginations">
    <?php wp_pagination(); ?>
</div>        
    </div>
<?get_footer();?>