<div class="footer">
    <div class="row">
        <div class="columns large-6">
            <p>© The site. 2015</p>
        </div>
        <div class="columns large-6 social">
            <a href="<?php if(get_option('ok_facebook') != ""){ echo "".get_option('ok_facebook').""; }?>" class="face"></a>
            <a href="<?php if(get_option('ok_vk') != ""){ echo "".get_option('ok_vk').""; }?>" class="vk"></a>
            <a href="<?php if(get_option('ok_tweet') != ""){ echo "".get_option('ok_tweet').""; }?>" class="tw"></a>
        </div>
    </div>
</div>     
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/build/index.min.js"></script>
<?php if ( is_singular( 'portfolio' ) ) {?>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jssor.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jssor.slider.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jssor.ssetings.js"></script>
<?php } ?>
    <script>
        $(document).ready(function(){
            var options = {
                nextButton: true,
                prevButton: true,
                pagination: true,
                animateStartingFrameIn: true,
                autoPlay: true,
                autoPlayDelay: 5000,
                pauseOnHover: false
            };
            var mySequence = jQuery("#sequence").sequence(options).data("sequence");
        });
    </script>
	<?php if(get_option('ok_ga_code') != ""){ echo "".get_option('ok_ga_code').""; }?>
	
	<?php wp_footer(); ?>
</body>
</html>