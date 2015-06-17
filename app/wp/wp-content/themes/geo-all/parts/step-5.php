<div class="step step-5 wow line-animation">
    <div class="animate-block">
        <div class="animate-lines">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="lines">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="lines-bg active-animations">
        <div class="row">
            <div class="columns large-10 large-centered" id="step-5">
                <h1><?php 
if(get_locale() == 'uk') {
	echo "".get_option('ok_history_block_title_ua')."";
} elseif(get_locale() == 'en_US') {
	echo "".get_option('ok_history_block_title_en')."";
}elseif(get_locale() == 'ru_RU') {
echo "".get_option('ok_history_block_title_ru')."";
} ?></h1> 

                <div class="years left-years hidden">
                    <span></span>
                    <div class="bullet">
                        <span><span></span></span>
                    </div>
                </div>
                <div class="years right-years">
                    <span></span>
                    <div class="bullet">
                        <span><span></span></span>
                    </div>
                </div>

                <div class="left-arrow hidden"></div>
                <div class="right-arrow"></div>

                <div class="active-year"><span></span></div>
                <div class="active-text"><p></p></div>

                <div class="history-texts">
<?php
global $post;
$tmp_post = $post;
$args = array( 'numberposts' => 999, 'post_type' => 'history' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post);?>
					<div class="year-to-year year-<?php the_title(); ?>">
                        <span><?php the_title(); ?></span>
                        <?php the_content(); ?>
                    </div>
<?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>