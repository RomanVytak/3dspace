<?php
	add_theme_support( 'post-thumbnails' );
	if(function_exists('register_nav_menus')) {
		register_nav_menus( array(
			'menu_head' => __('Header navigation'),
		));
	}
require_once(TEMPLATEPATH . '/functions/options.php');
require_once(TEMPLATEPATH . '/functions/post-type.php');
require_once(TEMPLATEPATH . '/functions/extra-fields.php');
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
add_filter('pre_site_transient_update_core',create_function('$a', "return null;"));
wp_clear_scheduled_hook('wp_version_check');
function wp_pagination() {
     global $wp_query;
     $big = 12345678;
     $page_format = paginate_links( array(
         'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
         'format' => '?paged=%#%',
         'current' => max( 1, get_query_var('paged') ),
         'total' => $wp_query->max_num_pages,
         'type' => 'array',
		 'prev_text' => '&laquo;',
		 'next_text' => '&raquo;'
     ) );
     if( is_array($page_format) ) {
         $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
         echo '<ul class="pagination">';
         foreach ( $page_format as $page ) {
             echo "<li>$page</li>";
         }
         echo '</ul>';
     }
}
function dimox_breadcrumbs() {
 if(get_locale() == 'uk') {
 $text['home'] = 'Головна'; 
 $text['category'] = 'Архів категорії "%s"'; 
 $text['search'] = 'Результати пошуку за запитом "%s"';
 $text['tag'] = 'Публікації з тегом "%s"';
 $text['author'] = 'Публікації автора %s';
 $text['404'] = 'Помилка 404';
 $text['page'] = 'Сторінка %s';
 $text['cpage'] = 'Сторінка коментарів %s'; 
		}elseif(get_locale() == 'ru_RU') {
 $text['home'] = 'Главная';
 $text['category'] = 'Архив рубрики "%s"';
 $text['search'] = 'Результаты поиска по запросу "%s"';
 $text['tag'] = 'Записи с тегом "%s"';
 $text['author'] = 'Статьи автора %s'; 
 $text['404'] = 'Ошибка 404';
 $text['page'] = 'Страница %s';
 $text['cpage'] = 'Страница комментариев %s';
		}
 $delimiter = '›';
 $delim_before = '<span class="divider">';
 $delim_after = '</span>';
 $show_home_link = 1;
 $show_on_home = 0;
 $show_title = 1;
 $show_current = 1; 
 $before = '<span class="current">'; 
 $after = '</span>';
 global $post;
 $home_link = home_url('/');
 $link_before = '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
 $link_after = '</span>';
 $link_attr = ' itemprop="url"';
 $link_in_before = '<span itemprop="title">';
 $link_in_after = '</span>';
 $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
 $frontpage_id = get_option('page_on_front');
 $parent_id = $post->post_parent;
 $delimiter = ' ' . $delim_before . $delimiter . $delim_after . ' ';

 if (is_home() || is_front_page()) {

 if ($show_on_home == 1) echo '<div class="breadcrumbs"><a href="' . $home_link . '">' . $text['home'] . '</a></div>';

 } else {

 echo '<div class="breadcrumbs">';
 if ($show_home_link == 1) echo sprintf($link, $home_link, $text['home']);

 if ( is_category() ) {
 $cat = get_category(get_query_var('cat'), false);
 if ($cat->parent != 0) {
 $cats = get_category_parents($cat->parent, TRUE, $delimiter);
 $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
 $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
 if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
 if ($show_home_link == 1) echo $delimiter;
 echo $cats;
 }
 if ( get_query_var('paged') ) {
 $cat = $cat->cat_ID;
 echo $delimiter . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $delimiter . $before . sprintf($text['page'], get_query_var('paged')) . $after;
 } else {
 if ($show_current == 1) echo $delimiter . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
 }

 } elseif ( is_search() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo $before . sprintf($text['search'], get_search_query()) . $after;

 } elseif ( is_day() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
 echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F')) . $delimiter;
 echo $before . get_the_time('d') . $after;

 } elseif ( is_month() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
 echo $before . get_the_time('F') . $after;

 } elseif ( is_year() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo $before . get_the_time('Y') . $after;

 } elseif ( is_single() && !is_attachment() ) {
 if ($show_home_link == 1) echo $delimiter;
 if ( get_post_type() != 'post' ) {
 $post_type = get_post_type_object(get_post_type());
 $slug = $post_type->rewrite;
 printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
 if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
 } else {
 $cat = get_the_category(); $cat = $cat[0];
 $cats = get_category_parents($cat, TRUE, $delimiter);
 if ($show_current == 0 || get_query_var('cpage')) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
 $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
 if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
 echo $cats;
 if ( get_query_var('cpage') ) {
 echo $delimiter . sprintf($link, get_permalink(), get_the_title()) . $delimiter . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
 } else {
 if ($show_current == 1) echo $before . get_the_title() . $after;
 }
 }
 } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
 $post_type = get_post_type_object(get_post_type());
 if ( get_query_var('paged') ) {
 echo $delimiter . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $delimiter . $before . sprintf($text['page'], get_query_var('paged')) . $after;
 } else {
 if ($show_current == 1) echo $delimiter . $before . $post_type->label . $after;
 }
 } elseif ( is_attachment() ) {
 if ($show_home_link == 1) echo $delimiter;
 $parent = get_post($parent_id);
 $cat = get_the_category($parent->ID); $cat = $cat[0];
 if ($cat) {
 $cats = get_category_parents($cat, TRUE, $delimiter);
 $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
 if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
 echo $cats;
 }
 printf($link, get_permalink($parent), $parent->post_title);
 if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

 } elseif ( is_page() && !$parent_id ) {
 if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

 } elseif ( is_page() && $parent_id ) {
 if ($show_home_link == 1) echo $delimiter;
 if ($parent_id != $frontpage_id) {
 $breadcrumbs = array();
 while ($parent_id) {
 $page = get_page($parent_id);
 if ($parent_id != $frontpage_id) {
 $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
 }
 $parent_id = $page->post_parent;
 }
 $breadcrumbs = array_reverse($breadcrumbs);
 for ($i = 0; $i < count($breadcrumbs); $i++) {
 echo $breadcrumbs[$i];
 if ($i != count($breadcrumbs)-1) echo $delimiter;
 }
 }
 if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

 } elseif ( is_tag() ) {
 if ($show_current == 1) echo $delimiter . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;

 } elseif ( is_author() ) {
 if ($show_home_link == 1) echo $delimiter;
 global $author;
 $author = get_userdata($author);
 echo $before . sprintf($text['author'], $author->display_name) . $after;

 } elseif ( is_404() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo $before . $text['404'] . $after;

 } elseif ( has_post_format() && !is_singular() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo get_post_format_string( get_post_format() );
 }

 echo '</div>';

 }
}
function improved_trim_excerpt($text) {
	global $post;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]&gt;', $text);
		$text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
		$text = strip_tags($text, '<p>');
		$excerpt_length = 140;
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words)> $excerpt_length) {
			array_pop($words);
			array_push($words, '');
			$text = implode(' ', $words);
		}
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');
function request_url(){
	$result = '';
	$default_port = 80;
	if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=='on')) {
		$result .= 'https://';
		$default_port = 443;
	} else {
		$result .= 'http://';
	}
	$result .= $_SERVER['SERVER_NAME'];
	if ($_SERVER['SERVER_PORT'] != $default_port) {
		$result .= ':'.$_SERVER['SERVER_PORT'];
	}
	$result .= $_SERVER['REQUEST_URI'];
	return $result;
}
?>