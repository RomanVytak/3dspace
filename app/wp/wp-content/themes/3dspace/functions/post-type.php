<?

 add_action( 'init', 'my_custom_post_slide' );
function my_custom_post_slide() {
   $labels = array(
     'name'               => _x( 'Slides', 'post type general name' ),
     'singular_name'      => _x( 'Slides', 'post type singular name' ),
     'add_new'            => _x( 'Add Slide', 'slide' ),
     'add_new_item'       => __( 'Add new Slide' ),
     'edit_item'          => __( 'Edit Slide' ),
     'new_item'           => __( 'New Slide' ),
     'all_items'          => __( 'All Slides' ),
     'view_item'          => __( 'View' ),
     'search_items'       => __( 'Search slide' ),
     'not_found'          => __( 'Not found' ),
     'not_found_in_trash' => __( 'Not found' ), 
     'parent_item_colon'  => '',
     'menu_name'          => 'Slides'
   );
   $args = array(
     'labels'        => $labels,
     'description'   => 'slide',
     'public'        => true,
     'menu_position' => 5,
	 'rewrite' 		 => array( 'slug' => 'slide', 'with_front' => true ),
     'supports'      => array( 'title'),
     'has_archive'   => true,
   );
   register_post_type( 'slide', $args );
   flush_rewrite_rules(false);
}
/**/
add_action( 'init', 'my_custom_post_partners' );
function my_custom_post_partners() {
   $labels = array(
     'name'               => _x( 'Partners', 'post type general name' ),
     'singular_name'      => _x( 'Partners', 'post type singular name' ),
     'add_new'            => _x( 'Add Partner', 'partners' ),
     'add_new_item'       => __( 'Add new Partner' ),
     'edit_item'          => __( 'Edit Partner' ),
     'new_item'           => __( 'New Partner' ),
     'all_items'          => __( 'All Partners' ),
     'view_item'          => __( 'View' ),
     'search_items'       => __( 'Search Partners' ),
     'not_found'          => __( 'Not found' ),
     'not_found_in_trash' => __( 'Not found' ), 
     'parent_item_colon'  => '',
     'menu_name'          => 'Partners'
   );
   $args = array(
     'labels'        => $labels,
     'description'   => 'partners',
     'public'        => true,
     'menu_position' => 5,
	 'rewrite' 		 => array( 'slug' => 'partners', 'with_front' => true ),
     'supports'      => array( 'title', 'thumbnail'),
     'has_archive'   => true,
   );
   register_post_type( 'partners', $args );
   flush_rewrite_rules(false);
}

?>