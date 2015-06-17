<?php
function additional_mime_types( $mimes ) {
	$mimes['rar'] = 'application/x-rar-compressed';
	$mimes['swf'] = 'application/x-shockwave-flash';

	return $mimes;
}
add_filter( 'upload_mimes', 'additional_mime_types' );
// Створити користувацьке меню
add_action('admin_menu', 'omr_create_menu');
function omr_create_menu() {
//Створити нове меню верхнього рівня
add_menu_page('Налаштування головної сторінки', '.Main options', 'administrator', 
__FILE__, 'omr_settings_page', ''.get_bloginfo('stylesheet_directory').'/functions/ico.png');

//виклик функції register settings
add_action( 'admin_init', 'register_mysettings' );
}

function mytheme_add_init() {
    if ( is_admin() ) {
        wp_enqueue_style("functions", "".get_bloginfo('stylesheet_directory')."/functions/functions.css", false, "1.0", "all");
        wp_enqueue_script("rm_script", "".get_bloginfo('stylesheet_directory')."/functions/script.js", false, "1.0");
    }
}
add_action( 'admin_print_styles', 'mytheme_add_init' );

function register_mysettings() {
/*загальні налаштування*/
register_setting( 'omr-settings-group', 'ok_ga_code' );
register_setting( 'omr-settings-group', 'ok_facebook' );
register_setting( 'omr-settings-group', 'ok_tweet' );
register_setting( 'omr-settings-group', 'ok_vk' );
/*ukraine options*/
register_setting( 'omr-settings-group', 'ok_slider_text_ua' );
register_setting( 'omr-settings-group', 'ok_underslider_text_ua' );
register_setting( 'omr-settings-group', 'ok_home_content_title_ua' );
register_setting( 'omr-settings-group', 'ok_home_content_ua' );
/*russian options*/
register_setting( 'omr-settings-group', 'ok_slider_text_ru' );
register_setting( 'omr-settings-group', 'ok_underslider_text_ru' );
register_setting( 'omr-settings-group', 'ok_home_content_title_ru' );
register_setting( 'omr-settings-group', 'ok_home_content_ru' );
}
function omr_settings_page() {
?>
<div class="wrap">
<h1>Загальні налаштування</h1>

<form method="post" action="options.php">
<?php settings_fields('omr-settings-group'); ?>
<div class="rm_section">
	<div class="rm_title">
		<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/functions/3.gif" class="inactive" alt=""/>
		Ukrainian options</h3>
	<div class="clearfix"></div>
	</div>
	<div class="rm_options">
		<div class="rm_input rm_text">			
			<label for="ok_slider_text_ua" style="display:block;">Slider text</label>
			<textarea name="ok_slider_text_ua" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_slider_text_ua'); ?></textarea>
			<br />			
			<label for="ok_underslider_text_ua" style="display:block;">Under slider text</label>
			<textarea name="ok_underslider_text_ua" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_underslider_text_ua'); ?></textarea>
			<br />
			<hr />
			<h3>Home content title:</h3>
			<input style="width:350px; background:#fff;" name="ok_home_content_title_ua" id="ok_facebook" type="text" value="<?php echo get_option('ok_home_content_title_ua'); ?>" />
			<br />
			<h3>Home content:</h3>
			<?php
			$content = get_option('ok_home_content_ua');
			$editor_id = 'ok_home_content_ua';
			wp_editor( $content, $editor_id );
			?>
			<br />
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="rm_section">
	<div class="rm_title">
		<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/functions/3.gif" class="inactive" alt=""/>
		Russian options</h3>
	<div class="clearfix"></div>
	</div>
	<div class="rm_options">
		<div class="rm_input rm_text">
			<label for="ok_slider_text_ru" style="display:block;">Slider text</label>
			<textarea name="ok_slider_text_ru" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_slider_text_ru'); ?></textarea>
			<br />			
			<label for="ok_underslider_text_ru" style="display:block;">Under slider text</label>
			<textarea name="ok_underslider_text_ru" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_underslider_text_ru'); ?></textarea>
			<br />
			<hr />
			<h3>Home content title:</h3>
			<input style="width:350px; background:#fff;" name="ok_home_content_title_ru" id="ok_facebook" type="text" value="<?php echo get_option('ok_home_content_title_ru'); ?>" />
			<br />
			<h3>Home content:</h3>
			<?php
			$content = get_option('ok_home_content_ru');
			$editor_id = 'ok_home_content_ru';
			wp_editor( $content, $editor_id );
			?>
			<br />
		<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="rm_section">
	<div class="rm_title">
		<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/functions/3.gif" class="inactive" alt=""/>
		Other options</h3>
	<div class="clearfix"></div>
	</div>
	<div class="rm_options">
		<div class="rm_input rm_text">	
			<label for="ok_facebook">Facebook URL:</label>
			<input style="width:350px;" name="ok_facebook" id="ok_facebook" type="text" value="<?php echo get_option('ok_facebook'); ?>" />
			<small>enter a link to your account.</small><br />
			<label for="ok_vk">Vk URL:</label>
			<input style="width:350px;" name="ok_vk" id="ok_vk" type="text" value="<?php echo get_option('ok_vk'); ?>" />
			<small>enter a link to your account.</small><br />	
			<label for="ok_tweet">Twitter URL:</label>
			<input style="width:350px;" name="ok_tweet" id="ok_tweet" type="text" value="<?php echo get_option('ok_tweet'); ?>" />
			<small>enter a link to your account.</small><br />
			<label for="ok_ga_code" style="display:block;">Google Analytics</label>
			<textarea name="ok_ga_code" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_ga_code'); ?></textarea>
			<small>enter google analytics code, or other</small>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<p class="submit">
<input style="width:350px;" type="submit" class="button-primary" value="Save" 
/>
</p>
</form>
</div>
<?php } ?>