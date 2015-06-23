<?php get_header();?>  
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>    
    <?php if(get_post_meta($post->ID, 'main_image', true) != ''){?>
	<div class="top-image" style="background: url('<?php echo get_post_meta($post->ID, 'main_image', true);?>')"></div>
	<?php }else {?>
	<div class="top-image" style="background: url('<?php bloginfo('stylesheet_directory');?>/pictures/slider/2_finish.jpg')"></div>
	<?php } ?>
    <div class="row title-page">
        <div class="columns large-12">
            <h1><?php the_title();?></h1>
        </div>
    </div>
    
    <div class="row content-holder project">
		<?php if(function_exists('bcn_display') && !is_front_page()) { ?>
						<div class="breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">
							<?php bcn_display(); ?>
						</div>
					<?php } ?>
<?php //if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
      
        <div class="wrapper">
            <div class="columns large-12">
                <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1104px; height: 556px; background: #191919; overflow: hidden;">

					<!-- Loading Screen -->
					<div u="loading" style="position: absolute; top: 0px; left: 0px;">
						<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
							background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
						</div>
						<div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
							top: 0px; left: 0px;width: 100%;height:100%;">
						</div>
					</div>

					<!-- Slides Container -->
					<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:1104px; height: 456px; overflow: hidden;">
						<?php if(get_post_meta($post->ID, 'main_image', true) != ""){?>
						<div>
							<img class="autoimg" u="image" src="<?php echo "".get_post_meta($post->ID, 'main_image', true).""; ?>" />
							<img u="thumb" src="<?php echo "".get_post_meta($post->ID, 'main_image', true)."";?>" />
						</div>
						<?php }?>
						<?php if(get_post_meta($post->ID, 'image_2', true) != ""){?>
						<div>
							<img class="autoimg" u="image" src="<?php echo "".get_post_meta($post->ID, 'image_2', true)."";?>" />
							<img u="thumb" src="<?php echo "".get_post_meta($post->ID, 'image_2', true)."";?>" />
						</div>
						<?php }?>
						<?php if(get_post_meta($post->ID, 'image_3', true) != ""){?>
						<div>
							<img class="autoimg" u="image" src="<?php echo "".get_post_meta($post->ID, 'image_3', true)."";?>" />
							<img u="thumb" src="<?php echo "".get_post_meta($post->ID, 'image_3', true)."";?>" />
						</div>
						<?php }?>
						<?php if(get_post_meta($post->ID, 'image_4', true) != ""){?>
						<div>
							<img class="autoimg" u="image" src="<?php echo "".get_post_meta($post->ID, 'image_4', true)."";?>" />
							<img u="thumb" src="<?php echo "".get_post_meta($post->ID, 'image_4', true)."";?>" />
						</div>
						<?php }?>
						<?php if(get_post_meta($post->ID, 'image_5', true) != ""){?>
						<div>
							<img class="autoimg" u="image" src="<?php echo "".get_post_meta($post->ID, 'image_5', true)."";?>" />
							<img u="thumb" src="<?php echo "".get_post_meta($post->ID, 'image_5', true)."";?>" />
						</div>
						<?php }?>
						<?php if(get_post_meta($post->ID, 'image_6', true) != ""){?>
						<div>
							<img class="autoimg" u="image" src="<?php echo "".get_post_meta($post->ID, 'image_6', true)."";?>" />
							<img u="thumb" src="<?php echo "".get_post_meta($post->ID, 'image_6', true)."";?>" />
						</div>
						<?php }?>
						<?php if(get_post_meta($post->ID, 'image_7', true) != ""){?>
						<div>
							<img class="autoimg" u="image" src="<?php echo "".get_post_meta($post->ID, 'image_7', true)."";?>" />
							<img u="thumb" src="<?php echo "".get_post_meta($post->ID, 'image_7', true)."";?>" />
						</div>
						<?php }?>
						<?php if(get_post_meta($post->ID, 'image_8', true) != ""){?>
						<div>
							<img class="autoimg" u="image" src="<?php echo "".get_post_meta($post->ID, 'image_8', true)."";?>" />
							<img u="thumb" src="<?php echo "".get_post_meta($post->ID, 'image_8', true)."";?>" />
						</div>
						<?php }?>
						<?php if(get_post_meta($post->ID, 'image_9', true) != ""){?>
						<div>
							<img class="autoimg" u="image" src="<?php echo "".get_post_meta($post->ID, 'image_9', true)."";?>" />
							<img u="thumb" src="<?php echo "".get_post_meta($post->ID, 'image_9', true)."";?>" />
						</div>
						<?php }?>
						<?php if(get_post_meta($post->ID, 'image_10', true) != ""){?>
						<div>
							<img class="autoimg" u="image" src="<?php echo "".get_post_meta($post->ID, 'image_10', true)."";?>" />
							<img u="thumb" src="<?php echo "".get_post_meta($post->ID, 'image_10', true)."";?>" />
						</div>
						<?php }?>
					</div>
					<!-- Arrow Left -->
					<span u="arrowleft" class="jssora05l" style="top: 158px; left: 8px;">
					</span>
					<!-- Arrow Right -->
					<span u="arrowright" class="jssora05r" style="top: 158px; right: 8px">
					</span>
					<!-- thumbnail navigator container -->
					<div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
						<!-- Thumbnail Item Skin Begin -->
						<div u="slides" style="cursor: default;">
							<div u="prototype" class="p">
								<div class=w><div u="thumbnailtemplate" class="t"></div></div>
								<div class=c></div>
							</div>
						</div>
						<!-- Thumbnail Item Skin End -->
					</div>
				</div>
            </div>
            <div class="columns large-12 more-text">
                <?php the_content();?>
            </div>
        </div>
        
    </div>
<?php endwhile; 
else : ?>
<div class="top-image" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/pictures/slider/finish.jpg')"></div>
    
    <div class="row title-page">
        <div class="columns large-12">
            <h1><?php if(get_locale() == 'uk') {?>Помилка 404<?php }elseif(get_locale() == 'ru_RU') { ?>Ошибка 404<?php } ?></h1>
        </div> 
    </div>
<div class="row content-holder content-text">
	<div class="columns large-12 item">
        <p><?php if(get_locale() == 'uk') {?>Вибачте, такої сторінки не існує.<?php }elseif(get_locale() == 'ru_RU') { ?>Простите, такой страницы не существует.<?php } ?></p>  
    </div>        
</div>
<?php endif; ?>
 <?php get_footer();?>