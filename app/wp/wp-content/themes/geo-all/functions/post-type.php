<?

 add_action( 'init', 'my_custom_post_strategy' );
function my_custom_post_strategy() {
   $labels = array(
     'name'               => _x( 'Strategy', 'post type general name' ),
     'singular_name'      => _x( 'Strategy', 'post type singular name' ),
     'add_new'            => _x( 'Add strategy', 'strategy' ),
     'add_new_item'       => __( 'Add new strategy' ),
     'edit_item'          => __( 'Edit strategy' ),
     'new_item'           => __( 'New strategy' ),
     'all_items'          => __( 'All strategy' ),
     'view_item'          => __( 'View' ),
     'search_items'       => __( 'Search strategy' ),
     'not_found'          => __( 'Not found' ),
     'not_found_in_trash' => __( 'Not found' ), 
     'parent_item_colon'  => '',
     'menu_name'          => 'Strategy'
   );
   $args = array(
     'labels'        => $labels,
     'description'   => 'strategy',
     'public'        => true,
     'menu_position' => 5,
	 'rewrite' 		 => array( 'slug' => 'strategy', 'with_front' => true ),
     'supports'      => array( 'title', 'editor'),
     'has_archive'   => true,
   );
   register_post_type( 'strategy', $args );
   flush_rewrite_rules(false);
}

 add_action( 'init', 'my_custom_post_history' );
function my_custom_post_history() {
   $labels = array(
     'name'               => _x( 'History', 'post type general name' ),
     'singular_name'      => _x( 'History', 'post type singular name' ),
     'add_new'            => _x( 'Add history', 'history' ),
     'add_new_item'       => __( 'Add new history' ),
     'edit_item'          => __( 'Edit History' ),
     'new_item'           => __( 'New History' ),
     'all_items'          => __( 'All History' ),
     'view_item'          => __( 'View' ),
     'search_items'       => __( 'Search History' ),
     'not_found'          => __( 'Not found' ),
     'not_found_in_trash' => __( 'Not found' ), 
     'parent_item_colon'  => '',
     'menu_name'          => 'History'
   );
   $args = array(
     'labels'        => $labels,
     'description'   => 'history',
     'public'        => true,
     'menu_position' => 5,
	 'rewrite' 		 => array( 'slug' => 'history', 'with_front' => true ),
     'supports'      => array( 'title', 'editor'),
     'has_archive'   => true,
   );
   register_post_type( 'history', $args );
   flush_rewrite_rules(false);
}

 add_action( 'init', 'my_custom_post_management' );
function my_custom_post_management() {
   $labels = array(
     'name'               => _x( 'Management', 'post type general name' ),
     'singular_name'      => _x( 'Management', 'post type singular name' ),
     'add_new'            => _x( 'Add management', 'management' ),
     'add_new_item'       => __( 'Add new management' ),
     'edit_item'          => __( 'Edit Management' ),
     'new_item'           => __( 'New Management' ),
     'all_items'          => __( 'All Management' ),
     'view_item'          => __( 'View' ),
     'search_items'       => __( 'Search Management' ),
     'not_found'          => __( 'Not found' ),
     'not_found_in_trash' => __( 'Not found' ), 
     'parent_item_colon'  => '',
     'menu_name'          => 'Management'
   );
   $args = array(
     'labels'        => $labels,
     'description'   => 'management',
     'public'        => true,
     'menu_position' => 5,
	 'rewrite' 		 => array( 'slug' => 'management', 'with_front' => true ),
     'supports'      => array( 'title', 'editor', 'thumbnail'),
     'has_archive'   => true,
   );
   register_post_type( 'management', $args );
   flush_rewrite_rules(false);
}

add_action( 'init', 'my_custom_post_media' );
function my_custom_post_media() {
   $labels = array(
     'name'               => _x( 'Mass Media', 'post type general name' ),
     'singular_name'      => _x( 'Mass Media', 'post type singular name' ),
     'add_new'            => _x( 'Add media', 'media' ),
     'add_new_item'       => __( 'Add new media' ),
     'edit_item'          => __( 'Edit Mass Media' ),
     'new_item'           => __( 'New Mass Media' ),
     'all_items'          => __( 'All Mass Media' ),
     'view_item'          => __( 'View' ),
     'search_items'       => __( 'Search Mass Media' ),
     'not_found'          => __( 'Not found' ),
     'not_found_in_trash' => __( 'Not found' ), 
     'parent_item_colon'  => '',
     'menu_name'          => 'Mass Media'
   );
   $args = array(
     'labels'        => $labels,
     'description'   => 'media',
     'public'        => true,
     'menu_position' => 5,
	 'rewrite' 		 => array( 'slug' => 'media', 'with_front' => true ),
     'supports'      => array( 'title', 'editor', 'thumbnail'),
     'has_archive'   => true,
   );
   register_post_type( 'media', $args );
   flush_rewrite_rules(false);
}
?>