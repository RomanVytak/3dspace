<div class="news-wrapper">
<?php if (have_posts()) : ?>	
	<?php while (have_posts()) : the_post(); ?>
				<div class="item clearfix">
                    <div class="text-wrapper">
                        <div class="date"><?php the_time('j.m.Y'); ?></div>
                        <a href="<?php the_title();?>" target="_blank" class="site"><?php the_title();?></a>
                        <h3 class="title"><a href="<?php the_title();?>" target="_blank"><?php the_content(); ?></a></h3>
                    </div>
                </div>   
<?php endwhile; ?>
<?php endif; ?>
</div>
<div class="nav-media"><?php if (function_exists('wp_corenavi')) wp_corenavi(); ?></div>