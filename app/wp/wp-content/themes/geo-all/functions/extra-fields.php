<? 
/*================================================= management EXTRA FIELDS =============================================================*/
add_action('admin_init', 'management_extra_fields', 1);
function management_extra_fields(){
add_meta_box('extra_fields', 'Options', 'management_extra_fields_box_func', 'management', 'normal', 'high');
}
function management_extra_fields_box_func($post){?>
	<p>
		<label style="font-weight:bold; width:100px; display: block; float: left;">Appointment:</label><input class="multilanguage-input" type="text" name="extra[appointment_management]" value="<?php echo get_post_meta($post->ID, 'appointment_management', 1); ?>" style="width:50%;" />
	</p>
<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
<?}
add_action('save_post', 'management_extra_fields_update', 0);
function management_extra_fields_update($post_id){
if (!wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__))return false;
if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return false;
if (!current_user_can('edit_post', $post_id)) return false;
if (!isset($_POST['extra'])) return false;
$_POST['extra'] = array_map('trim', $_POST['extra']);
foreach($_POST['extra'] as $key=>$value){
if(empty($value))
continue delete_post_meta($post_id, $key);
update_post_meta($post_id, $key, $value);
}
return $post_id;
}
/*================================================= END management EXTRA FIELDS =============================================================*/
/*================================================= END baners EXTRA FIELDS =============================================================*/
/*================================================= video EXTRA FIELDS =============================================================*/
add_action('admin_init', 'video_extra_fields', 1);
function video_extra_fields(){
add_meta_box('extra_fields', 'Options', 'video_extra_fields_box_func', 'video', 'normal', 'high');
}
function video_extra_fields_box_func($post){?>
	<p>
		<label style="font-weight:bold; width:80px; display: block; float: left;">Time:</label><input type="text" name="extra[time_video]" value="<?php echo get_post_meta($post->ID, 'time_video', 1); ?>" style="width:50%;" />
	</p>
	<p>
		<label style="font-weight:bold; width:80px; display: block; float: left;">Код відео:</label><input type="text" name="extra[ssil_video]" value="<?php echo get_post_meta($post->ID, 'ssil_video', 1); ?>" style="width:50%;" />
	</p>
	<hr />
<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
<?}
add_action('save_post', 'video_extra_fields_update', 0);
function video_extra_fields_update($post_id){
if (!wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__))return false;
if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return false;
if (!current_user_can('edit_post', $post_id)) return false;
if (!isset($_POST['extra'])) return false;
$_POST['extra'] = array_map('trim', $_POST['extra']);
foreach($_POST['extra'] as $key=>$value){
if(empty($value))
continue delete_post_meta($post_id, $key);
update_post_meta($post_id, $key, $value);
}
return $post_id;
}
/*================================================= END video EXTRA FIELDS =============================================================*/
function upload_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', get_bloginfo('template_directory').'/functions/custom_uploader.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
} 
function upload_styles() {
	wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'upload_scripts'); 
add_action('admin_print_styles', 'upload_styles');
?>