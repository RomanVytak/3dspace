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
//реєструємо наші налаштування
register_setting( 'omr-settings-group', 'ok_contacts' );
register_setting( 'omr-settings-group', 'ok_ga_code' );
/*english options*/
register_setting( 'omr-settings-group', 'ok_first_field_en' );
register_setting( 'omr-settings-group', 'ok_second_field_en' );
register_setting( 'omr-settings-group', 'ok_third_field_en' );
register_setting( 'omr-settings-group', 'ok_fourth_field_en' );
register_setting( 'omr-settings-group', 'ok_fifth_field_en' );
register_setting( 'omr-settings-group', 'ok_sixth_field_en' );
register_setting( 'omr-settings-group', 'ok_seventh_field_en' );
register_setting( 'omr-settings-group', 'ok_eighth_field_en' );
register_setting( 'omr-settings-group', 'ok_top_text_en' );
register_setting( 'omr-settings-group', 'ok_title_text_en' );
register_setting( 'omr-settings-group', 'ok_third_block_title_en' );
register_setting( 'omr-settings-group', 'ok_third_block_left_title_en' );
register_setting( 'omr-settings-group', 'ok_third_block_left_first_en' );
register_setting( 'omr-settings-group', 'ok_third_block_left_second_en' );
register_setting( 'omr-settings-group', 'ok_third_block_left_third_en' );
register_setting( 'omr-settings-group', 'ok_third_block_left_fourth_en' );
register_setting( 'omr-settings-group', 'ok_third_block_right_title_en' );
register_setting( 'omr-settings-group', 'ok_third_block_right_first_en' );
register_setting( 'omr-settings-group', 'ok_third_block_right_second_en' );
register_setting( 'omr-settings-group', 'ok_third_block_right_third_en' );
register_setting( 'omr-settings-group', 'ok_third_block_right_fourth_en' );
register_setting( 'omr-settings-group', 'ok_history_block_title_en' );
register_setting( 'omr-settings-group', 'ok_management_block_title_en' );
register_setting( 'omr-settings-group', 'ok_title_four_en' );
register_setting( 'omr-settings-group', 'ok_text_four_en' );
register_setting( 'omr-settings-group', 'ok_text2_four_en' );
register_setting( 'omr-settings-group', 'ok_left_title_four_en' );
register_setting( 'omr-settings-group', 'ok_left_size_four_en' );
register_setting( 'omr-settings-group', 'ok_right_title_four_en' );
register_setting( 'omr-settings-group', 'ok_right_size_four_en' );
register_setting( 'omr-settings-group', 'ok_assets_title_en' );
register_setting( 'omr-settings-group', 'ok_assets_text_en' );



register_setting( 'omr-settings-group', 'ok_phone_en' );
register_setting( 'omr-settings-group', 'ok_map_en' );
register_setting( 'omr-settings-group', 'ok_adress_en' );
register_setting( 'omr-settings-group', 'ok_email_en' );
/*ukraine options*/
register_setting( 'omr-settings-group', 'ok_first_field_ua' );
register_setting( 'omr-settings-group', 'ok_second_field_ua' );
register_setting( 'omr-settings-group', 'ok_third_field_ua' );
register_setting( 'omr-settings-group', 'ok_fourth_field_ua' );
register_setting( 'omr-settings-group', 'ok_fifth_field_ua' );
register_setting( 'omr-settings-group', 'ok_sixth_field_ua' );
register_setting( 'omr-settings-group', 'ok_seventh_field_ua' );
register_setting( 'omr-settings-group', 'ok_eighth_field_ua' );
register_setting( 'omr-settings-group', 'ok_top_text_ua' );
register_setting( 'omr-settings-group', 'ok_title_text_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_title_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_left_title_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_left_first_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_left_second_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_left_third_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_left_fourth_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_right_title_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_right_title_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_right_first_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_right_second_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_right_third_ua' );
register_setting( 'omr-settings-group', 'ok_third_block_right_fourth_ua' );
register_setting( 'omr-settings-group', 'ok_history_block_title_ua' );
register_setting( 'omr-settings-group', 'ok_management_block_title_ua' );
register_setting( 'omr-settings-group', 'ok_title_four_ua' );
register_setting( 'omr-settings-group', 'ok_text_four_ua' );
register_setting( 'omr-settings-group', 'ok_text2_four_ua' );
register_setting( 'omr-settings-group', 'ok_left_title_four_ua' );
register_setting( 'omr-settings-group', 'ok_left_size_four_ua' );
register_setting( 'omr-settings-group', 'ok_right_title_four_ua' );
register_setting( 'omr-settings-group', 'ok_right_size_four_ua' );
register_setting( 'omr-settings-group', 'ok_assets_title_ua' );
register_setting( 'omr-settings-group', 'ok_assets_text_ua' );


register_setting( 'omr-settings-group', 'ok_phone_ua' );
register_setting( 'omr-settings-group', 'ok_map_ua' );
register_setting( 'omr-settings-group', 'ok_adress_ua' );
register_setting( 'omr-settings-group', 'ok_email_ua' );
/*russian options*/
register_setting( 'omr-settings-group', 'ok_first_field_ru' );
register_setting( 'omr-settings-group', 'ok_second_field_ru' );
register_setting( 'omr-settings-group', 'ok_third_field_ru' );
register_setting( 'omr-settings-group', 'ok_fourth_field_ru' );
register_setting( 'omr-settings-group', 'ok_fifth_field_ru' );
register_setting( 'omr-settings-group', 'ok_sixth_field_ru' );
register_setting( 'omr-settings-group', 'ok_seventh_field_ru' );
register_setting( 'omr-settings-group', 'ok_eighth_field_ru' );
register_setting( 'omr-settings-group', 'ok_top_text_ru' );
register_setting( 'omr-settings-group', 'ok_title_text_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_title_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_left_title_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_left_first_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_left_second_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_left_third_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_left_fourth_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_right_title_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_right_title_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_right_first_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_right_second_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_right_third_ru' );
register_setting( 'omr-settings-group', 'ok_third_block_right_fourth_ru' );
register_setting( 'omr-settings-group', 'ok_history_block_title_ru' );
register_setting( 'omr-settings-group', 'ok_management_block_title_ru' );
register_setting( 'omr-settings-group', 'ok_title_four_ru' );
register_setting( 'omr-settings-group', 'ok_text_four_ru' );
register_setting( 'omr-settings-group', 'ok_text2_four_ru' );
register_setting( 'omr-settings-group', 'ok_left_title_four_ru' );
register_setting( 'omr-settings-group', 'ok_left_size_four_ru' );
register_setting( 'omr-settings-group', 'ok_right_title_four_ru' );
register_setting( 'omr-settings-group', 'ok_right_size_four_ru' );
register_setting( 'omr-settings-group', 'ok_assets_title_ru' );
register_setting( 'omr-settings-group', 'ok_assets_text_ru' );


register_setting( 'omr-settings-group', 'ok_phone_ru' );
register_setting( 'omr-settings-group', 'ok_map_ru' );
register_setting( 'omr-settings-group', 'ok_adress_ru' );
register_setting( 'omr-settings-group', 'ok_email_ru' );
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
		English options</h3>
	<div class="clearfix"></div>
	</div>
	<div class="rm_options">
		<div class="rm_input rm_text">
			<h2>Statistics block</h2>
			<hr />
			<label for="ok_first_field_en" style="display:block;">First field</label>
			<textarea name="ok_first_field_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_first_field_en'); ?></textarea>
			<br />
			<label for="ok_second_field_en" style="display:block;">Second field</label>
			<textarea name="ok_second_field_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_second_field_en'); ?></textarea>
			<br />
			<label for="ok_third_field_en" style="display:block;">Third field</label>
			<textarea name="ok_third_field_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_field_en'); ?></textarea>
			<br />
			<label for="ok_fourth_field_en" style="display:block;">Fourth field</label>
			<textarea name="ok_fourth_field_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_fourth_field_en'); ?></textarea>
			<br />
			<label for="ok_fifth_field_en" style="display:block;">Fifth field</label>
			<textarea name="ok_fifth_field_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_fifth_field_en'); ?></textarea>
			<br />
			<label for="ok_sixth_field_en" style="display:block;">Sixth field</label>
			<textarea name="ok_sixth_field_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_sixth_field_en'); ?></textarea>
			<br />
			<label for="ok_seventh_field_en" style="display:block;">Seventh field</label>
			<textarea name="ok_seventh_field_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_seventh_field_en'); ?></textarea>
			<br />
			<label for="ok_eighth_field_en" style="display:block;">Eighth field</label>
			<textarea name="ok_eighth_field_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_eighth_field_en'); ?></textarea>
			<hr />
			<h2>Strategy block</h2>
			<hr />
			<label for="ok_top_text_en" style="display:block;">Top text</label>
			<textarea name="ok_top_text_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_top_text_en'); ?></textarea>
			<br />
			<label for="ok_title_text_en" style="display:block;">Title text</label>
			<textarea name="ok_title_text_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_title_text_en'); ?></textarea>
			<br />
			<hr />
			<h2>Values block</h2>
			<hr />
			<label for="ok_third_block_title_en" style="display:block;">Title</label>
			<textarea name="ok_third_block_title_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_title_en'); ?></textarea>
			<br />
			<label for="ok_third_block_left_title_en" style="display:block;">Left side title</label>
			<textarea name="ok_third_block_left_title_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_title_en'); ?></textarea>
			<br />
			<label for="ok_third_block_left_first_en" style="display:block;">Left first field</label>
			<textarea name="ok_third_block_left_first_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_first_en'); ?></textarea>
			<br />
			<label for="ok_third_block_left_second_en" style="display:block;">Left second field</label>
			<textarea name="ok_third_block_left_second_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_second_en'); ?></textarea>
			<br />
			<label for="ok_third_block_left_third_en" style="display:block;">Left third field</label>
			<textarea name="ok_third_block_left_third_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_third_en'); ?></textarea>
			<br />
			<label for="ok_third_block_left_fourth_en" style="display:block;">Left fourth field</label>
			<textarea name="ok_third_block_left_fourth_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_fourth_en'); ?></textarea>
			<br />
			<label for="ok_third_block_right_title_en" style="display:block;">Right side title</label>
			<textarea name="ok_third_block_right_title_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_title_en'); ?></textarea>
			<br />
			<label for="ok_third_block_right_first_en" style="display:block;">Right first field</label>
			<textarea name="ok_third_block_right_first_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_first_en'); ?></textarea>
			<br />
			<label for="ok_third_block_right_second_en" style="display:block;">Right second field</label>
			<textarea name="ok_third_block_right_second_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_second_en'); ?></textarea>
			<br />
			<label for="ok_third_block_right_third_en" style="display:block;">Right third field</label>
			<textarea name="ok_third_block_right_third_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_third_en'); ?></textarea>
			<br />
			<hr />
			<h2>History block</h2>
			<hr />
			<label for="ok_history_block_title_en" style="display:block;">Title</label>
			<textarea name="ok_history_block_title_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_history_block_title_en'); ?></textarea>
			<br />
			<hr />
			<h2>Management block</h2>
			<hr />
			<label for="ok_management_block_title_en" style="display:block;">Title</label>
			<textarea name="ok_management_block_title_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_management_block_title_en'); ?></textarea>
			<br />
			<hr />
			<h2>Activities block</h2>
			<hr />
			<label for="ok_title_four_en" style="display:block;">Title</label>
			<textarea name="ok_title_four_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_title_four_en'); ?></textarea>
			<br />
			<label for="ok_text_four_en" style="display:block;">Text</label>
			<textarea name="ok_text_four_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_text_four_en'); ?></textarea>
			<br />
			<label for="ok_text2_four_en" style="display:block;">Text 2</label>
			<textarea name="ok_text2_four_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_text2_four_en'); ?></textarea>
			<br />
			<label for="ok_left_title_four_en" style="display:block;">Left title</label>
			<textarea name="ok_left_title_four_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_left_title_four_en'); ?></textarea>
			<br />
			<label for="ok_left_size_four_en" style="display:block;">Left size</label>
			<textarea name="ok_left_size_four_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_left_size_four_en'); ?></textarea>
			<br />
			<label for="ok_right_title_four_en" style="display:block;">Right title</label>
			<textarea name="ok_right_title_four_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_right_title_four_en'); ?></textarea>
			<br />
			<label for="ok_right_size_four_en" style="display:block;">Right size</label>
			<textarea name="ok_right_size_four_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_right_size_four_en'); ?></textarea>
			<br />
			<hr />
			<h2>Assets block</h2>
			<hr />
			<label for="ok_assets_title_en" style="display:block;">Title</label>
			<textarea name="ok_assets_title_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_assets_title_en'); ?></textarea>
			<br />
			<label for="ok_assets_text_en" style="display:block;">Text</label>
			<textarea name="ok_assets_text_en" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_assets_text_en'); ?></textarea>
			<br />
			
			
			
			<hr />
			<br />
			<br />
			<hr />
			<label for="ok_phone_en" style="display:block;">Phone number</label>
			<textarea name="ok_phone_en" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_phone_en'); ?></textarea>
			<br />
			<label for="ok_map_en" style="display:block;">Map link</label>
			<textarea name="ok_map_en" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_map_en'); ?></textarea>
			<br />
			<label for="ok_adress_en" style="display:block;">Adress</label>
			<textarea name="ok_adress_en" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_adress_en'); ?></textarea>
			<br />
			<label for="ok_email_en" style="display:block;">E-mail</label>
			<textarea name="ok_email_en" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_email_en'); ?></textarea>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="rm_section">
	<div class="rm_title">
		<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/functions/3.gif" class="inactive" alt=""/>
		Ukrainian options</h3>
	<div class="clearfix"></div>
	</div>
	<div class="rm_options">
		<div class="rm_input rm_text">
			<h2>Statistics block</h2>
			<hr />
			<label for="ok_first_field_ua" style="display:block;">First field</label>
			<textarea name="ok_first_field_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_first_field_ua'); ?></textarea>
			<br />
			<label for="ok_second_field_ua" style="display:block;">Second field</label>
			<textarea name="ok_second_field_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_second_field_ua'); ?></textarea>
			<br />
			<label for="ok_third_field_ua" style="display:block;">Third field</label>
			<textarea name="ok_third_field_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_field_ua'); ?></textarea>
			<br />
			<label for="ok_fourth_field_ua" style="display:block;">Fourth field</label>
			<textarea name="ok_fourth_field_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_fourth_field_ua'); ?></textarea>
			<br />
			<label for="ok_fifth_field_ua" style="display:block;">Fifth field</label>
			<textarea name="ok_fifth_field_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_fifth_field_ua'); ?></textarea>
			<br />
			<label for="ok_sixth_field_ua" style="display:block;">Sixth field</label>
			<textarea name="ok_sixth_field_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_sixth_field_ua'); ?></textarea>
			<br />
			<label for="ok_seventh_field_ua" style="display:block;">Seventh field</label>
			<textarea name="ok_seventh_field_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_seventh_field_ua'); ?></textarea>
			<br />
			<label for="ok_eighth_field_ua" style="display:block;">Eighth field</label>
			<textarea name="ok_eighth_field_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_eighth_field_ua'); ?></textarea>
			<hr />
			<h2>Strategy block</h2>
			<hr />
			<label for="ok_top_text_ua" style="display:block;">Top text</label>
			<textarea name="ok_top_text_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_top_text_ua'); ?></textarea>
			<br />
			<label for="ok_title_text_ua" style="display:block;">Title text</label>
			<textarea name="ok_title_text_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_title_text_ua'); ?></textarea>
			<br />
			<hr />
			<h2>Values block</h2>
			<hr />
			<label for="ok_third_block_title_ua" style="display:block;">Title</label>
			<textarea name="ok_third_block_title_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_title_ua'); ?></textarea>
			<br />
			<label for="ok_third_block_left_title_ua" style="display:block;">Left side title</label>
			<textarea name="ok_third_block_left_title_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_title_ua'); ?></textarea>
			<br />
			<label for="ok_third_block_left_first_ua" style="display:block;">Left first field</label>
			<textarea name="ok_third_block_left_first_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_first_ua'); ?></textarea>
			<br />
			<label for="ok_third_block_left_second_ua" style="display:block;">Left second field</label>
			<textarea name="ok_third_block_left_second_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_second_ua'); ?></textarea>
			<br />
			<label for="ok_third_block_left_third_ua" style="display:block;">Left third field</label>
			<textarea name="ok_third_block_left_third_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_third_ua'); ?></textarea>
			<br />
			<label for="ok_third_block_left_fourth_ua" style="display:block;">Left fourth field</label>
			<textarea name="ok_third_block_left_fourth_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_fourth_ua'); ?></textarea>
			<br />
			<label for="ok_third_block_right_title_ua" style="display:block;">Right side title</label>
			<textarea name="ok_third_block_right_title_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_title_ua'); ?></textarea>
			<br />
			<label for="ok_third_block_right_first_ua" style="display:block;">Right first field</label>
			<textarea name="ok_third_block_right_first_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_first_ua'); ?></textarea>
			<br />
			<label for="ok_third_block_right_second_ua" style="display:block;">Right second field</label>
			<textarea name="ok_third_block_right_second_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_second_ua'); ?></textarea>
			<br />
			<label for="ok_third_block_right_third_ua" style="display:block;">Right third field</label>
			<textarea name="ok_third_block_right_third_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_third_ua'); ?></textarea>
			<br />
			<hr />
			<h2>History block</h2>
			<hr />
			<label for="ok_history_block_title_ua" style="display:block;">Title</label>
			<textarea name="ok_history_block_title_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_history_block_title_ua'); ?></textarea>
			<br />
			<hr />
			<h2>Management block</h2>
			<hr />
			<label for="ok_management_block_title_ua" style="display:block;">Title</label>
			<textarea name="ok_management_block_title_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_management_block_title_ua'); ?></textarea>
			<br />
			<hr />
			<h2>Activities block</h2>
			<hr />
			<label for="ok_title_four_ua" style="display:block;">Title</label>
			<textarea name="ok_title_four_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_title_four_ua'); ?></textarea>
			<br />
			<label for="ok_text_four_ua" style="display:block;">Text</label>
			<textarea name="ok_text_four_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_text_four_ua'); ?></textarea>
			<br />
			<label for="ok_text2_four_ua" style="display:block;">Text 2</label>
			<textarea name="ok_text2_four_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_text2_four_ua'); ?></textarea>
			<br />
			<label for="ok_left_title_four_ua" style="display:block;">Left title</label>
			<textarea name="ok_left_title_four_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_left_title_four_ua'); ?></textarea>
			<br />
			<label for="ok_left_size_four_ua" style="display:block;">Left size</label>
			<textarea name="ok_left_size_four_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_left_size_four_ua'); ?></textarea>
			<br />
			<label for="ok_right_title_four_ua" style="display:block;">Right title</label>
			<textarea name="ok_right_title_four_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_right_title_four_ua'); ?></textarea>
			<br />
			<label for="ok_right_size_four_ua" style="display:block;">Right size</label>
			<textarea name="ok_right_size_four_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_right_size_four_ua'); ?></textarea>
			<br />
			<hr />
			<h2>Assets block</h2>
			<hr />
			<label for="ok_assets_title_ua" style="display:block;">Title</label>
			<textarea name="ok_assets_title_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_assets_title_ua'); ?></textarea>
			<br />			
			<label for="ok_assets_text_ua" style="display:block;">Text</label>
			<textarea name="ok_assets_text_ua" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_assets_text_ua'); ?></textarea>
			<br />
			
			
			<br />
			<br />
			<hr />
			<label for="ok_phone_ua" style="display:block;">Phone number</label>
			<textarea name="ok_phone_ua" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_phone_ua'); ?></textarea>
			<br />
			<label for="ok_map_ua" style="display:block;">Map link</label>
			<textarea name="ok_map_ua" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_map_ua'); ?></textarea>
			<br />
			<label for="ok_adress_ua" style="display:block;">Adress</label>
			<textarea name="ok_adress_ua" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_adress_ua'); ?></textarea>
			<br />
			<label for="ok_email_ua" style="display:block;">E-mail</label>
			<textarea name="ok_email_ua" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_email_ua'); ?></textarea>
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
			<h2>Statistics block</h2>
			<hr />
			<label for="ok_first_field_ru" style="display:block;">First field</label>
			<textarea name="ok_first_field_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_first_field_ru'); ?></textarea>
			<br />
			<label for="ok_second_field_ru" style="display:block;">Second field</label>
			<textarea name="ok_second_field_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_second_field_ru'); ?></textarea>
			<br />
			<label for="ok_third_field_ru" style="display:block;">Third field</label>
			<textarea name="ok_third_field_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_field_ru'); ?></textarea>
			<br />
			<label for="ok_fourth_field_ru" style="display:block;">Fourth field</label>
			<textarea name="ok_fourth_field_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_fourth_field_ru'); ?></textarea>
			<br />
			<label for="ok_fifth_field_ru" style="display:block;">Fifth field</label>
			<textarea name="ok_fifth_field_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_fifth_field_ru'); ?></textarea>
			<br />
			<label for="ok_sixth_field_ru" style="display:block;">Sixth field</label>
			<textarea name="ok_sixth_field_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_sixth_field_ru'); ?></textarea>
			<br />
			<label for="ok_seventh_field_ru" style="display:block;">Seventh field</label>
			<textarea name="ok_seventh_field_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_seventh_field_ru'); ?></textarea>
			<br />
			<label for="ok_eighth_field_ru" style="display:block;">Eighth field</label>
			<textarea name="ok_eighth_field_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_eighth_field_ru'); ?></textarea>
			<hr />
			<h2>Strategy block</h2>
			<hr />
			<label for="ok_top_text_ru" style="display:block;">Top text</label>
			<textarea name="ok_top_text_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_top_text_ru'); ?></textarea>
			<br />
			<label for="ok_title_text_ru" style="display:block;">Title text</label>
			<textarea name="ok_title_text_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_title_text_ru'); ?></textarea>
			<br />
			<hr />
			<h2>Values block</h2>
			<hr />
			<label for="ok_third_block_title_ru" style="display:block;">Title</label>
			<textarea name="ok_third_block_title_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_title_ru'); ?></textarea>
			<br />
			<label for="ok_third_block_left_title_ru" style="display:block;">Left side title</label>
			<textarea name="ok_third_block_left_title_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_title_ru'); ?></textarea>
			<br />
			<label for="ok_third_block_left_first_ru" style="display:block;">Left first field</label>
			<textarea name="ok_third_block_left_first_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_first_ru'); ?></textarea>
			<br />
			<label for="ok_third_block_left_second_ru" style="display:block;">Left second field</label>
			<textarea name="ok_third_block_left_second_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_second_ru'); ?></textarea>
			<br />
			<label for="ok_third_block_left_third_ru" style="display:block;">Left third field</label>
			<textarea name="ok_third_block_left_third_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_third_ru'); ?></textarea>
			<br />
			<label for="ok_third_block_left_fourth_ru" style="display:block;">Left fourth field</label>
			<textarea name="ok_third_block_left_fourth_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_left_fourth_ru'); ?></textarea>
			<br />
			<label for="ok_third_block_right_title_ru" style="display:block;">Right side title</label>
			<textarea name="ok_third_block_right_title_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_title_ru'); ?></textarea>
			<br />
			<label for="ok_third_block_right_first_ru" style="display:block;">Right first field</label>
			<textarea name="ok_third_block_right_first_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_first_ru'); ?></textarea>
			<br />
			<label for="ok_third_block_right_second_ru" style="display:block;">Right second field</label>
			<textarea name="ok_third_block_right_second_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_second_ru'); ?></textarea>
			<br />
			<label for="ok_third_block_right_third_ru" style="display:block;">Right third field</label>
			<textarea name="ok_third_block_right_third_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_third_block_right_third_ru'); ?></textarea>
			<br />
			<hr />
			<h2>History block</h2>
			<hr />
			<label for="ok_history_block_title_ru" style="display:block;">Title</label>
			<textarea name="ok_history_block_title_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_history_block_title_ru'); ?></textarea>
			<br />
			<hr />
			<h2>Management block</h2>
			<hr />
			<label for="ok_management_block_title_ru" style="display:block;">Title</label>
			<textarea name="ok_management_block_title_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_management_block_title_ru'); ?></textarea>
			<br />
			<hr />
			<h2>Activities block</h2>
			<hr />
			<label for="ok_title_four_ru" style="display:block;">Title</label>
			<textarea name="ok_title_four_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_title_four_ru'); ?></textarea>
			<br />
			<label for="ok_text_four_ru" style="display:block;">Text</label>
			<textarea name="ok_text_four_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_text_four_ru'); ?></textarea>
			<br />
			<label for="ok_text2_four_ru" style="display:block;">Text 2</label>
			<textarea name="ok_text2_four_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_text2_four_ru'); ?></textarea>
			<br />
			<label for="ok_left_title_four_ru" style="display:block;">Left title</label>
			<textarea name="ok_left_title_four_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_left_title_four_ru'); ?></textarea>
			<br />
			<label for="ok_left_size_four_ru" style="display:block;">Left size</label>
			<textarea name="ok_left_size_four_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_left_size_four_ru'); ?></textarea>
			<br />
			<label for="ok_right_title_four_ru" style="display:block;">Right title</label>
			<textarea name="ok_right_title_four_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_right_title_four_ru'); ?></textarea>
			<br />
			<label for="ok_right_size_four_ru" style="display:block;">Right size</label>
			<textarea name="ok_right_size_four_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_right_size_four_ru'); ?></textarea>
			<br />
			<hr />
			<h2>Assets block</h2>
			<hr />
			<label for="ok_assets_title_ru" style="display:block;">Title</label>
			<textarea name="ok_assets_title_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_assets_title_ru'); ?></textarea>
			<br />
			<label for="ok_assets_text_ru" style="display:block;">Text</label>
			<textarea name="ok_assets_text_ru" style="width:320px;height:150px;" type="textarea" class="multilanguage-input"><?php echo get_option('ok_assets_text_ru'); ?></textarea>
			<br />
			
			
			<br />
			<br />
			<hr />
			<label for="ok_phone_ru" style="display:block;">Phone number</label>
			<textarea name="ok_phone_ru" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_phone_ru'); ?></textarea>
			<br />
			<label for="ok_map_ru" style="display:block;">Map link</label>
			<textarea name="ok_map_ru" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_map_ru'); ?></textarea>
			<br />
			<label for="ok_adress_ru" style="display:block;">Adress</label>
			<textarea name="ok_adress_ru" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_adress_ru'); ?></textarea>
			<br />
			<label for="ok_email_ru" style="display:block;">E-mail</label>
			<textarea name="ok_email_ru" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_email_ru'); ?></textarea>
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