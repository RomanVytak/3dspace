<?get_header();?> 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
	<?if(get_post_meta($post->ID, 'background_image', true) != ''){?>
	<div class="top-image" style="background: url('<? echo get_post_meta($post->ID, 'background_image', true);?>')"></div>
	<? }else {?>
	<div class="top-image" style="background: url('<? bloginfo('stylesheet_directory');?>/pictures/slider/finish.jpg')"></div>
	<? } ?>
    
    <div class="row title-page">
        <div class="columns large-12">
            <h1><?the_title();?></h1>
        </div> 
    </div>
    
    <div class="row content-holder content-text">
        <?php if(function_exists('bcn_display') && !is_front_page()) { ?>
						<div class="breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">
							<?php bcn_display(); ?>
						</div>
					<?php } ?> 

        <div class="columns large-12 item">
            <?the_content();?>
        </div>
        
    </div>
<?php endwhile; ?>
<?php else : ?>
<div class="top-image" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/pictures/slider/finish.jpg')"></div>
    
    <div class="row title-page">
        <div class="columns large-12">
            <h1><? if(get_locale() == 'uk') {?>Помилка 404<? }elseif(get_locale() == 'ru_RU') { ?>Ошибка 404<? } ?></h1>
        </div> 
    </div>
<div class="row content-holder content-text">
	<div class="columns large-12 item">
        <p><? if(get_locale() == 'uk') {?>Вибачте, такої сторінки не існує.<? }elseif(get_locale() == 'ru_RU') { ?>Простите, такой страницы не существует.<? } ?></p>  
    </div>        
</div>
<?php endif; ?>
<?get_footer();?>