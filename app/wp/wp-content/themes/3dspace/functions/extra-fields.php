<? 
/*================================================= slide EXTRA FIELDS =============================================================*/
add_action('admin_init', 'slide_extra_fields', 1);
function slide_extra_fields(){
add_meta_box('extra_fields', 'Options', 'slide_extra_fields_box_func', 'slide', 'normal', 'high');
}
function slide_extra_fields_box_func($post){?>
	<p>
		<label for="upload_image">Slide image</label><br/>
		<input id="upload_image" type="text" size="90" name="extra[slide_image]" value="<?php echo get_post_meta($post->ID, 'slide_image', true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>
	</p>
<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
<?}
add_action('save_post', 'slide_extra_fields_update', 0);
function slide_extra_fields_update($post_id){
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
/*================================================= END slide EXTRA FIELDS =============================================================*/



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