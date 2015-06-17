<div class="step step-12 wow" id="step-12">
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
    <div class="row collapse">
        <div class="columns large-10 large-centered wrapper">
            <div class="row collapse">
                <div class="columns large-4 item item-1">
                    <div class="icons">
                        <span class="bg-span"></span>
                        <span class="ico-span"></span>
                    </div>
                    <div class="text">
<?php 
if(get_locale() == 'uk') {
	$phone = get_option('ok_phone_ua');
} elseif(get_locale() == 'en_US') {
	$phone = get_option('ok_phone_en');
}elseif(get_locale() == 'ru_RU') {
$phone =get_option('ok_phone_ru');
} ?>
                        <p><a href="callto://<?php $cl = array(' ', '(', ')'); echo str_replace($cl,'',$phone);?>"><?php echo $phone;?></a></p>
                    </div>
                </div>
                <div class="columns large-4 item item-2">
                    <div class="icons">
                        <span class="bg-span"></span>
                        <span class="ico-span"></span>
                    </div>
                    <div class="text">
                        <p><a href="<?php 
if(get_locale() == 'uk') {
	echo "".get_option('ok_map_ua')."";
} elseif(get_locale() == 'en_US') {
	echo "".get_option('ok_map_en')."";
}elseif(get_locale() == 'ru_RU') {
echo "".get_option('ok_map_ru')."";
} ?>" target="_blank"><?php 
if(get_locale() == 'uk') {
	echo "".get_option('ok_adress_ua')."";
} elseif(get_locale() == 'en_US') {
	echo "".get_option('ok_adress_en')."";
}elseif(get_locale() == 'ru_RU') {
echo "".get_option('ok_adress_ru')."";
} ?></a></p>
                    </div>
                </div>
                <div class="columns large-4 item item-3">
                    <div class="icons">
                        <span class="bg-span"></span>
                        <span class="ico-span"></span>
                    </div>
                    <div class="text">
<?php 
if(get_locale() == 'uk') {
	$mail = get_option('ok_email_ua');
} elseif(get_locale() == 'en_US') {
	$mail = get_option('ok_email_en');
}elseif(get_locale() == 'ru_RU') {
$mail = get_option('ok_email_ru');
} ?>
                        <p><a href="mailto:<?php echo $mail;?>"><?php echo $mail;?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns large-12 dev">
            <a href="http://bambus.com.ua" target="_blank">Developed & powered by Bambuk</a>
        </div>
    </div>
</div>