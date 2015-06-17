<div class="news-wrapper">
<?php if (have_posts()) : ?>	
	<?php while (have_posts()) : the_post(); ?>
				<div class="item clearfix">
                        <div class="image-wrapper" style="background:url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'news' ); $url = $thumb['0'];  echo $url;?>');"></div>
                        <div class="text-wrapper">
                            <div class="date"><?php the_time('j.m.Y'); ?></div>
                            <h3 class="title"><?php the_title();?></h3>
                            <div class="preview-text"></div>
                            <div class="all-text"><?php the_content(); ?></div>
                        </div>
                </div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<div class="nav-news"><?php if (function_exists('wp_corenavi')) wp_corenavi(); ?></div>