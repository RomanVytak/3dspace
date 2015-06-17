<?get_header();?>
<?php include('slider.php'); ?>
<!--start text-->
<div class="row start-block">
    <div class="columns large-12">
        <p><?
		if(get_locale() == 'uk') {
			if(get_option('ok_underslider_text_ua') != ""){ echo "".get_option('ok_underslider_text_ua').""; }
		}elseif(get_locale() == 'ru_RU') {
			if(get_option('ok_underslider_text_ru') != ""){ echo "".get_option('ok_underslider_text_ru').""; }
		}
		?></p>
    </div>
</div>
<!--end start text-->

<!--start home-block-->
<div class="row home-block">
<?php
global $post;
$tmp_post = $post;
$args = array( 'numberposts' => 4, 'category' => 2 );
$myposts = get_posts( $args );
$i = 0;
foreach( $myposts as $post ) : setup_postdata($post); $i ++ ?>
    <div class="columns large-3 item item-<?=$i;?>">
        <div class="wrapper">
            <div class="wrapper-face">
                <div class="top-text">
                    <h2><?the_title();?></h2>
                </div>
				<?$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                <div class="image" style="background:url('<?=$url;?>');"></div>
            </div>
            <div class="wrapper-back image" style="background:url('<?=$url;?>');">
				<?php the_excerpt(); ?>	
                <a href="<?the_permalink();?>" class="button">Детальніше</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<!--end home-block-->

<!--home content-->
<div class="home-content-holder">
    <div class="row">
        <div class="columns large-12">
            <?
		if(get_locale() == 'uk') {
			if(get_option('ok_home_content_title_ua') != ""){ echo "<h2>".get_option('ok_home_content_title_ua')."</h2>"; }
			if(get_option('ok_home_content_title_ua') != ""){ echo "".get_option('ok_home_content_ua').""; }
		}elseif(get_locale() == 'ru_RU') {
			if(get_option('ok_home_content_title_ru') != ""){ echo "<h2>".get_option('ok_home_content_title_ru')."</h2>"; }
			if(get_option('ok_home_content_ru') != ""){ echo "".get_option('ok_home_content_ru').""; }
		}
		?>
        </div>
    </div>
</div>
<!--end home content-->


<div class="row partners">
    <div class="columns large-12">
        <h2><? if(get_locale() == 'uk') {?>Наші партнери<?}elseif(get_locale() == 'ru_RU') {?>Наши партнеры<?}?></h2>
        <div class="logos-wrapper">
<?php
global $post;
$tmp_post = $post;
$args = array( 'numberposts' => 999, 'post_type' => 'partners' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post);?>
            <?php if ( has_post_thumbnail() ) the_post_thumbnail('trumb'); ?>
<?php endforeach; ?>
        </div>
    </div>
</div>
<?get_footer();?>