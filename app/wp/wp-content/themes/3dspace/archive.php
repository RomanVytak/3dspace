<?php get_header();?>   
    <div class="top-image" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/pictures/slider/render_.jpg')"></div>
    
    <div class="row title-page">
        <div class="columns large-12">
            <h1><?php _e(single_term_title(),'qtranslate');?></h1>
        </div>
    </div>
    
    <div class="row content-holder blog">
        <?php if(function_exists('bcn_display') && !is_front_page()) { ?>
						<div class="breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">
							<?php bcn_display(); ?>
						</div>
					<?php } ?> 
           
        <div class="wrapper clearfix">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="columns large-12 item clearfix">
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
				<?php if($url != '') {?>
				<div class="image-wrapper" style="background:url(<?php echo $url;?>);"></div>
				<?php } else {?>	
				<div class="image-wrapper" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/pictures/slider/render_.jpg);"></div>
				<?php } ?>                
                <div class="text-wrapper">
                    <div class="title-wrapper clearfix">
                        <h2><?php the_title(); ?></h2>
                        <span class="tags">
                            <?php the_tags( '', ''); ?> 
                        </span>
                    </div>
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink();?>" class="more">Читати більше</a>
                </div>
            </div>
<?php endwhile; ?>
<?php else : ?>
<div class="columns large-12 item clearfix">
	<h1><?php if(get_locale() == 'uk') {?>Помилка 404<?php }elseif(get_locale() == 'ru_RU') { ?>Ошибка 404<?php } ?></h1>
	<p><?php if(get_locale() == 'uk') {?>Вибачте, такої сторінки не існує.<?php }elseif(get_locale() == 'ru_RU') { ?>Простите, такой страницы не существует.<?php } ?></p> 
</div>
<?php endif; ?>
        </div>
        
<div class="pagination-centered paginations">
	<?php wp_pagination(); ?>
</div>       
    </div>
<?php get_footer();?>