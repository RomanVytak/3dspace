<div class="step step-6 wow">
    <div class="lines">
        <span></span>
        <span></span>
    </div>
    <div class="row collapse top-wrapper">
        <div class="columns large-10 large-centered" id="step-6">
            <h1><?php 
if(get_locale() == 'uk') {
	echo "".get_option('ok_management_block_title_ua')."";
} elseif(get_locale() == 'en_US') {
	echo "".get_option('ok_management_block_title_en')."";
}elseif(get_locale() == 'ru_RU') {
echo "".get_option('ok_management_block_title_ru')."";
} ?></h1>
            <div class="item-wrapper clearfix">
<?php
global $post;
$tmp_post = $post;
$args = array( 'numberposts' => 999, 'post_type' => 'management' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post);?>
                <div class="item">
                    <div class="wrapper clearfix">
                        <div class="img-wrapper">
                            <span><?php if ( has_post_thumbnail() ) the_post_thumbnail('trumb'); ?></span>
                        </div>
                        <div class="text-wrapper">
                            <div class="top-text">
                                <h4><?php the_title();?></h4>
                                <h5><?php echo get_post_meta($post->ID, 'appointment_management', 1); ?></h5>
                            </div>
                            <div class="more-text">
                                <div class="head">
                                    <h4><?php the_title();?></h4>
                                    <h5><?php echo get_post_meta($post->ID, 'appointment_management', 1); ?></h5>
                                </div>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
 <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>