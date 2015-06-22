<?php
add_action('admin_init', 'post_extra_fields', 1);
function post_extra_fields(){
add_meta_box('extra_fields', 'Options', 'post_extra_fields_box_func', 'post', 'normal', 'high');
}
function post_extra_fields_box_func($post){ ?>
	<p>
		<label for="upload_image">Background image</label><br/>
		<input id="upload_image" type="text" size="90" name="extra[background_image]" value="<?php echo get_post_meta($post->ID, 'background_image', true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>
	</p>
<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
<?php }
add_action('save_post', 'post_extra_fields_update', 0);
function post_extra_fields_update($post_id){
if (!wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__))return false;
if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return false;
if (!current_user_can('edit_post', $post_id)) return false;
if (!isset($_POST['extra'])) return false;
$_POST['extra'] = array_map('trim', $_POST['extra']);
foreach( $_POST['extra'] as $key=>$value ){
if(empty($value)){
delete_post_meta($post_id, $key);
continue;
}
update_post_meta($post_id, $key, $value);
}
return $post_id;
}
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
<?php }
add_action('save_post', 'slide_extra_fields_update', 0);
function slide_extra_fields_update($post_id){
if (!wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__))return false;
if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return false;
if (!current_user_can('edit_post', $post_id)) return false;
if (!isset($_POST['extra'])) return false;
$_POST['extra'] = array_map('trim', $_POST['extra']);
foreach( $_POST['extra'] as $key=>$value ){
if(empty($value)){
delete_post_meta($post_id, $key);
continue;
}
update_post_meta($post_id, $key, $value);
}
return $post_id;
}
add_action('admin_init', 'portfolio_extra_fields', 1);
function portfolio_extra_fields(){
add_meta_box('extra_fields', 'Options', 'portfolio_extra_fields_box_func', 'portfolio', 'normal', 'high');
}
function portfolio_extra_fields_box_func($post){?>
	<p>
		<label for="upload_image">Main image</label><br/>
		<input id="upload_image" type="text" size="90" name="extra[main_image]" value="<?php echo get_post_meta($post->ID, 'main_image', true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>
	</p>
	<p>
		<label for="upload_image">Image 2</label><br/>
		<input id="upload_image" type="text" size="90" name="extra[image_2]" value="<?php echo get_post_meta($post->ID, 'image_2', true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>
	</p>
	<p>
		<label for="upload_image">Image 3</label><br/>
		<input id="upload_image" type="text" size="90" name="extra[image_3]" value="<?php echo get_post_meta($post->ID, 'image_3', true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>
	</p>
	<p>
		<label for="upload_image">Image 4</label><br/>
		<input id="upload_image" type="text" size="90" name="extra[image_4]" value="<?php echo get_post_meta($post->ID, 'image_4', true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>
	</p>
	<p>
		<label for="upload_image">Image 5</label><br/>
		<input id="upload_image" type="text" size="90" name="extra[image_5]" value="<?php echo get_post_meta($post->ID, 'image_5', true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>
	</p>
	<p>
		<label for="upload_image">Image 6</label><br/>
		<input id="upload_image" type="text" size="90" name="extra[image_6]" value="<?php echo get_post_meta($post->ID, 'image_6', true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>
	</p>
	<p>
		<label for="upload_image">Image 7</label><br/>
		<input id="upload_image" type="text" size="90" name="extra[image_7]" value="<?php echo get_post_meta($post->ID, 'image_7', true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>
	</p>
	<p>
		<label for="upload_image">Image 8</label><br/>
		<input id="upload_image" type="text" size="90" name="extra[image_8]" value="<?php echo get_post_meta($post->ID, 'image_8', true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>
	</p>
	<p>
		<label for="upload_image">Image 9</label><br/>
		<input id="upload_image" type="text" size="90" name="extra[image_9]" value="<?php echo get_post_meta($post->ID, 'image_9', true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>
	</p>
<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
<?php }
add_action('save_post', 'portfolio_extra_fields_update', 0);
function portfolio_extra_fields_update($post_id){
if (!wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__))return false;
if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return false;
if (!current_user_can('edit_post', $post_id)) return false;
if (!isset($_POST['extra'])) return false;
$_POST['extra'] = array_map('trim', $_POST['extra']);
foreach( $_POST['extra'] as $key=>$value ){
if(empty($value)){
delete_post_meta($post_id, $key);
continue;
}
update_post_meta($post_id, $key, $value);
}
return $post_id;
}
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