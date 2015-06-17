	
<div class="step step-3 wow">
    <div class="top-block row wow">
        <div class="columns large-12 top-wrapper">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="" class="logo">
            <h3><?php 
if(get_locale() == 'uk') {
	echo "".get_option('ok_top_text_ua')."";
} elseif(get_locale() == 'en_US') {
	echo "".get_option('ok_top_text_en')."";
}elseif(get_locale() == 'ru_RU') {
echo "".get_option('ok_top_text_ru')."";
} ?></h3>
        </div>
        <div class="columns large-12 title" id="step-3">
            <h1><?php 
if(get_locale() == 'uk') {
	echo "".get_option('ok_title_text_ua')."";
} elseif(get_locale() == 'en_US') {
	echo "".get_option('ok_title_text_en')."";
}elseif(get_locale() == 'ru_RU') {
echo "".get_option('ok_title_text_ru')."";
} ?></h1>
        </div>
    </div>
    <div class="lines">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="item-wrapper wow">
<?php
global $post;
$tmp_post = $post;
$args = array( 'numberposts' => 999, 'post_type' => 'strategy' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post);?>
		<div class="block">
            <div class="row">
                <div class="columns large-8 large-centered">
                    <div class="item">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
<?php endforeach; ?>
        <span class="no-hover"></span>
    </div>
</div>
