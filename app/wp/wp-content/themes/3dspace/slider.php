<!--start slider-->
<div class="slider-wrapper">
    <div id="sequence">
        <span class="bt">
            <span class="sequence-prev"></span>
            <span class="sequence-next"></span>
        </span>
        <ul class="sequence-canvas">
<?php
global $post;
$tmp_post = $post;
$args = array( 'numberposts' => 999, 'post_type' => 'slide' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post);?>
            <li style="" class="">
                <span style="background:url('<?echo "".get_post_meta($post->ID, 'slide_image', true)."";?>');" class="banner-likn"></span>
            </li>
<?php endforeach; ?>
        </ul>
        <ul class="sequence-pagination">
<?php
global $post;
$tmp_post = $post;
$args = array( 'numberposts' => 999, 'post_type' => 'slide' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post);?>
            <li></li>
<?php endforeach; ?>
        </ul>
    </div>
    <div class="text">
		<?
		if(get_locale() == 'uk') {
			if(get_option('ok_slider_text_ua') != ""){ echo "".get_option('ok_slider_text_ua').""; }
		}elseif(get_locale() == 'ru_RU') {
			if(get_option('ok_slider_text_ru') != ""){ echo "".get_option('ok_slider_text_ru').""; }
		}
		?>        
    </div>
</div>
<!--end slider-->