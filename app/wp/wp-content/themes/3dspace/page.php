<?get_header();?> 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
	<?$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
	<? if($url != '') {?>
	<div class="top-image" style="background: url('<?=$url;?>')"></div>
	<? } else {?>	
	<div class="top-image" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/pictures/slider/finish.jpg')"></div>
	<? } ?>
    
    <div class="row title-page">
        <div class="columns large-12">
            <h1><?the_title();?></h1>
        </div> 
    </div>
    
    <div class="row content-holder content-text <?php global $post; echo $post->post_name; ?>">
        
<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

        <div class="columns large-12 item">
            <?the_content();?>
        </div>
        
    </div>
<?php endwhile; ?>
<?php else : ?>
<div class="top-image" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/pictures/slider/finish.jpg')"></div>
    
    <div class="row title-page">
        <div class="columns large-12">
            <h1>Помилка 404</h1>
        </div> 
    </div>
<div class="row content-holder content-text">
	<div class="columns large-12 item">
        <p>Вибачте, такої сторінки не існує.</p>  
    </div>        
</div>
<?php endif; ?>
<?get_footer();?>