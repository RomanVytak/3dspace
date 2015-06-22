<?php
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
add_action( 'init', 'my_custom_post_portfolio' );
function my_custom_post_portfolio() {
   $labels = array(
     'name'               => _x( 'Portfolio', 'post type general name' ),
     'singular_name'      => _x( 'Portfolio', 'post type singular name' ),
     'add_new'            => _x( 'Додати', 'portfolio' ),
     'add_new_item'       => __( 'Додати проект' ),
     'edit_item'          => __( 'Редагувати' ),
     'new_item'           => __( 'Новий проект' ),
     'all_items'          => __( 'Всі проекти' ),
     'view_item'          => __( 'Переглянути' ),
     'search_items'       => __( 'Знайти проект' ),
     'not_found'          => __( 'Не знайдено' ),
     'not_found_in_trash' => __( 'Немає видалених' ), 
     'parent_item_colon'  => '',
     'menu_name'          => 'Portfolio'
   );
   $args = array(
     'labels'        => $labels,
     'description'   => 'Portfolio',
     'public'        => true,
     'menu_position' => 5,
	 'rewrite' 		 => array( 'slug' => 'portfolio', 'with_front' => true ),
     'supports'      => array( 'title', 'portfolio_category', 'editor', 'comments'),
     'has_archive'   => true,
   );
   register_post_type( 'portfolio', $args );
   flush_rewrite_rules(false);
}
function my_updated_messages( $messages ) {
   global $post, $post_ID;
   $messages['portfolio'] = array(
     0 => '', 
     1 => sprintf( __('Проект оновлено. <a href="%s">переглянути</a>'), esc_url( get_permalink($post_ID) ) ),
     2 => __('Оновити.'),
     3 => __('Оновити.'),
     4 => __('Проект оновлено.'),
     5 => isset($_GET['revision']) ? sprintf( __('Проект restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
     6 => sprintf( __('Проект опубліковано. <a href="%s">перегляд</a>'), esc_url( get_permalink($post_ID) ) ),
     7 => __('Проект збережено.'),
     8 => sprintf( __('Проект відправлено. <a target="_blank" href="%s">переглянути</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
     9 => sprintf( __('Проект заплановава на: <strong>%1$s</strong>. <a target="_blank" href="%2$s">view</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
     10 => sprintf( __('Quote draft updated. <a target="_blank" href="%s">view</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
   );
   return $messages;
}
 add_filter( 'post_updated_messages', 'my_updated_messages' );
function my_taxonomies_portfolio() {
   $labels = array(
     'name'              => _x( 'Категорії проектів', 'taxonomy general name' ),
     'singular_name'     => _x( 'Категорії проектів', 'taxonomy singular name' ),
     'search_items'      => __( 'Пошук' ),
     'all_items'         => __( 'Всі категорії' ),
     'parent_item'       => __( 'Батьківська категорії' ),
     'parent_item_colon' => __( 'Батьківська категорія продукту:' ),
     'edit_item'         => __( 'Редагувати категорію' ), 
     'update_item'       => __( 'Оновити категорію' ),
     'add_new_item'      => __( 'Додати категорію' ),
     'new_item_name'     => __( 'Нова категорія' ),
     'menu_name'         => __( 'Категорії проектів' ),
   );
   $args = array(
     'labels' => $labels,
     'hierarchical' => true,
   );
   register_taxonomy( 'portfolio_category', 'portfolio', $args );
}
add_action( 'init', 'my_taxonomies_portfolio', 0 );
?>