<?php
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'trumb', 271, 271, true ); 
	add_image_size( 'news', 600, 436, true ); 
require_once(TEMPLATEPATH . '/functions/options.php');
require_once(TEMPLATEPATH . '/functions/post-type.php');
require_once(TEMPLATEPATH . '/functions/extra-fields.php');
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
add_filter('pre_site_transient_update_core',create_function('$a', "return null;"));
wp_clear_scheduled_hook('wp_version_check');
function edit_admin_menus() {
    global $menu;
    global $submenu;
 
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'All';
    $submenu['edit.php'][10][0] = 'Add';
    $submenu['edit.php'][15][0] = 'Cat'; 
    $submenu['edit.php'][16][0] = 'Tag';
}
add_action( 'admin_menu', 'edit_admin_menus' );
function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 0;/*1 - виводити текст "Page N of N", 0 - не выводить*/
  $a['mid_size'] = 10; /*скільки посилань показувати зліва і справа від поточної */
  $a['end_size'] = 1; /*скільки посилань показувати в початку і в кінці*/
  $a['prev_text'] = '&laquo;'; /* текст посилання "Попередня сторінка"*/
  $a['next_text'] = '&raquo;'; /* текст посилання "Наступна сторінка"*/

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Page ' . $current . ' of ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}
?>