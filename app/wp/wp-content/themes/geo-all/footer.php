    
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/build/index.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/app/app.js"></script>
<?php wp_footer(); ?>
<?php if(get_option('ok_ga_code') != ""){ echo "".get_option('ok_ga_code').""; }?>
</body>
</html>