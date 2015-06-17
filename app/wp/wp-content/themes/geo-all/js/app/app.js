// preloader -------------------------------------------------- //

window.addEventListener && window.addEventListener('DOMContentLoaded', function() {
    document.body.className += ' preload';
});
function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
}
var trident = !!navigator.userAgent.match(/Trident\/7.0/);
var net = !!navigator.userAgent.match(/.NET4.0E/);
var IE11 = trident && net
var IEold = (navigator.userAgent.match(/MSIE/i) ? true : false);



// my var ----------------------------------------------------------------- //

var windowHeight = $(window).outerHeight();
var windowWidth = $(window).outerWidth();
var windowScreenHeight = window.screen.height;
var windowScreenWidth = window.screen.width;





// wow ------------------------------------------------------------------- //

if (IE11 || IEold) {
    var wow = new WOW(
            {
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 0, // distance to the element when triggering the animation (default is 0)
                mobile: false, // trigger animations on mobile devices (default is true)
                live: true // act on asynchronously loaded content (default is true)
            }
    );
    wow.init();
} else {
    var wow = new WOW(
            {
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: (windowHeight + 100), // distance to the element when triggering the animation (default is 0)
                mobile: false, // trigger animations on mobile devices (default is true)
                live: true // act on asynchronously loaded content (default is true)
            }
    );
    wow.init();
}





// srart functions ------------------------------------------------------ //

$(document).ready(function() {
    if (isIE() == 9) {
        $('body').addClass('ie9');
        $('body').addClass('loaded');
        $('.my-preloader').css('display', 'none')
    } else {
        setTimeout(function() {
            $('body').addClass('loaded');
        }, 0)
        setTimeout(function() {
            //$('.my-preloader').css('display','none')
        }, 0)
    }

    historyTrigerr();

    //front page on scroll------------------------------------------------------------
//    function once(fn, context) {
//        var result;
//        return function() {
//            if (fn) {
//                result = fn.apply(context || this, arguments);
//                fn = null;
//            }
//            return result;
//        };
//    }
//    var canOnlyFireOnce = once(function() {
//        $('html, body').animate({
//            scrollTop: $(".step-2").offset().top
//        }, 1500);
//    });
//    var startposition = 0;
//    var menuTrigger = 0;
//    $('nav ul li a').on('click', function() {
//        menuTrigger = 1;
//    });
//    $(window).on('scroll', function() {
//        var scrolposition = $('body').offset().top;
//        if (startposition !== scrolposition && menuTrigger !== 1) {
//            canOnlyFireOnce();
//        }
//    });
});





//    function once(fn, context) {
//        var result;
//        return function() {
//            if (fn) {
//                result = fn.apply(context || this, arguments);
//                fn = null;
//            }
//            return result;
//        };
//    }
//    
//    var canOnlyFireOnce = once(function() {
//        console.log('Fired once?');
//        $('html, body').animate({
//            scrollTop: $(".step-2").offset().top
//        }, 1500);
//    });
// 
//
//    var startposition = 0;
//    $(window).on('scroll', function() {
//        var scrolposition = $('body').offset().top;
//        if (startposition !== scrolposition) {
//            canOnlyFireOnce();
//        }
//    });





// Second block trigger animation ---------------------------------------- //

function checkForChanges() { 
    if ($('.step-4').hasClass('animated')) {
        var i = 0;
        var ii = 0;
        var rows = $(".step-4 .left-block .small");
        var rowsRight = $(".step-4 .right-block .small");

        setTimeout(show, 4000);
        setTimeout(showRight, 2000);

        function show() {
            $('.step-4 .left-block .small').removeClass('active');
            if (i < rows.length) {
                var self = $(rows[i]);
                self.addClass('active');

                i++;
                setTimeout(show, 4000);
            } else {
                i = 0;
                show();
            }
        }
        function showRight() {
            $('.step-4 .right-block .small').removeClass('active');
            if (ii < rowsRight.length) {
                var self = $(rowsRight[ii]);
                self.addClass('active');

                ii++;
                setTimeout(showRight, 4000);
            } else {
                ii = 0;
                showRight();
            }
        }
    } else {
        setTimeout(checkForChanges, 1000);
    }
}
checkForChanges();





// travel page ------------------------------------------------------------ //

$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({scrollTop: target.offset().top - 90},
                {
                    duration: 2000,
                    easing: "easeInOutExpo"
                });
                return false;
            }
        }
    });
});





// ico add border radius effect --------------------- //

var borderEffect = '<span></span><span></span><span></span>';
$('.ico').append(borderEffect);





// menu ------------------------------------------------------------------- //

// deactive menu after load
$('.menu').addClass('no-active')
setTimeout(function(){
    $('.menu').removeClass('no-active')
}, 2000)

function menuActivate() {
    var myLimat = windowScreenHeight/4;
    $(document).on('mousemove', function(event) {
        if (event.screenY < myLimat
                && windowWidth >= 1025
                && $('.menu').hasClass('static') == false
                && $('.menu').hasClass('no-active') == false) {
            console.log('add')
            $('.menu').addClass('active-menu')
        }
        else {
            console.log('none')
            $('.menu').removeClass('active-menu')
        }
    })
}
menuActivate()

// add click open menu
if (windowWidth <= 1024) {
    $('.menu .open-menu').on('click', function(){
        $('.menu').addClass('static')
    })
} else {
    $('.menu nav ul li a').on('click', function(){
        $('.menu').addClass('static-2')
    })
}
// close menu mobile
$('.close-menu, .menu nav li a').on('click', function(){
    $('.menu').removeClass('static')
})

// add static menu 
$(window).scroll(function() {
    var myTop = $(window).scrollTop();
    if (myTop >= windowHeight*2 && windowWidth >= 1025) {
        setTimeout(function(){
            $('.menu').addClass('static')
            $('.menu').removeClass('static-2')
        }, 1600)
    } else {
        setTimeout(function(){
            $('.menu').removeClass('static')
        }, 1600)
    }
})





// step-1 ------------------------------------------------------------------- //

// hidden step-1
$(window).scroll(function() {
    var myTop = $(window).scrollTop();
    if (myTop >= windowHeight * 2) {
        $('.step-1').addClass('hidden')
    } else {
        $('.step-1').removeClass('hidden')
    }
})
// hidden step-1 scroll page
if (windowWidth > 1024) {
    $(window).scroll(function() {
        var myTop = $(window).scrollTop();
        if (myTop >= windowHeight / 20) {           // add blur for step-1 and line-top for step-2
            $('.step-1').addClass('add-blur')
            $('.step-2').addClass('line-top')
        } else if (myTop < windowHeight / 2) {     // remove blur for step-1 and line-top for step-2
            $('.step-1').removeClass('add-blur')
            $('.step-2').removeClass('line-top')
        } else if (myTop >= windowHeight * 2) {     // hidden home image scroll
            $('.step-1').addClass('hidden')
        } else {                                    // add home image scroll
            $('.step-1').removeClass('hidden')
        }
    })
} else {}




// step-2 ------------------------------------------------------------------- //

$(document).ready(function() {
    setTimeout(function() {
        $('.step-1').addClass('animated');
    }, 1000);
    setTimeout(function() {
        $('.step-2').addClass('animated');
    }, 1600);
});

// add animation lines
$(window).scroll(function() {
    var myTop = $(window).scrollTop();
    if (myTop >= windowHeight/8) {
        $('.step-2 .lines').addClass('animated')
    } else {
        //$('.step-2 .liunes').removeClass('hidden')
    }
})




// step-3 ------------------------------------------------------------------- //

$('.step-3 .item-wrapper .block').hover(function() {
    $(this).toggleClass('hover')
});
// add animation top block
$(window).scroll(function() {
    var myTop = $(window).scrollTop();
    if (myTop >= windowHeight) {
        $('.step-3').addClass('top-animated')
    } else {
        //$('.step-3').removeClass('top-animated')
    }
})





// step-5 ------------------------------------------------------------------- //

function historyTrigerr() {
    $('.active-text, .year-to-year:first-child').addClass('active');

    var firstYearP = $('.year-to-year:first-child p').html();
    var firstYearSpan = $('.year-to-year:first-child span').html();

    $('.active-text p').append(firstYearP);
    $('.active-year span').append(firstYearSpan);

    var next = $('.history-texts .active').next().find('span').html();
    $('.right-years > span').append(next);

    $('.right-arrow').on('click', function() {
        var activeEl = $('.history-texts .active');

        var activeEltxt = activeEl.next().find('p').html();
        var nextYear = activeEl.next().next().find('span').html();
        var prevYear = activeEl.find('span').html();
        var activeYear = activeEl.next().find('span').html();

        $('.lines-bg').removeClass('active-animations');
        $('.step-5').removeClass('line-animation');
        setTimeout(function() {
            $('.lines-bg').addClass('active-animations');
            $('.step-5').addClass('line-animation');
            $('.active-text p').html(activeEltxt);
            $('.right-years > span').html(nextYear);
            $('.left-years > span').html(prevYear);
            $('.active-year span').html(activeYear);
        }, 500);

        var gav = activeEl.next();
        var gavgav = gav.next();
        if (gav[0]) {
            $('.left-arrow, .left-years').removeClass('hidden');
            activeEl.removeClass('active');
            activeEl.next().addClass('active');
            if (!gavgav[0]) {
                $('.right-arrow, .right-years').addClass('hidden');
            }
        }
    });

    $('.left-arrow').on('click', function() {
        var activeEl = $('.history-texts .active');

        var activeEltxt = activeEl.prev().find('p').html();
        var a = activeEl.prev().find('span').html();
        var b = activeEl.find('span').html();
        var c = activeEl.prev().prev().find('span').html();

        $('.lines-bg').removeClass('active-animations');
        $('.step-5').removeClass('line-animation');
        setTimeout(function() {
            $('.lines-bg').addClass('active-animations');
            $('.step-5').addClass('line-animation');
            $('.active-text').addClass('active');
            $('.active-text p').html(activeEltxt);
            $('.active-year span').html(a);
            $('.right-years > span').html(b);
            $('.left-years > span').html(c);
        }, 500);

        var gav = activeEl.prev();
        var gavgav = gav.prev();
        if (gav[0]) {
            $('.right-arrow, .right-years').removeClass('hidden');
            activeEl.removeClass('active');
            activeEl.prev().addClass('active');
            if (!gavgav[0]) {
                $('.left-arrow, .left-years').addClass('hidden');
            }
        }
    });
}





// step-6 ------------------------------------------------------------------- //

$('.step-6 .item .wrapper').find('.img-wrapper').hover(function() {
    $(this).parents('.item').toggleClass('hover')
    $('.step-6 .item').toggleClass('shaded')
    $(this).parents('.item').removeClass('shaded')
});





// step-11 ------------------------------------------------------------------- //

// for news
$(document).ready(function() {

    if (location.hostname.search('tests.bambus.com.ua')!= -1) {
        var link = 'http://tests.bambus.com.ua/geo-alliance/category/news/';
    } else {
        var link = 'http://bamb.loc/geo-all/app/WP/category/news/';
    }
    $.ajax({
        url: link,
        cache: false,
        type: "POST",
        success: function(response){
            $('.ajax').html(response);

            // add height block wrapper
            var heightNewsBlock = $('.step-11 .block-news .wrapper-block').height()
            $('.step-11 .block-news').css('height', heightNewsBlock);

            // add preview text
            var maxPrevText = 150;
            $('.step-11 .item').each(function() {
                var myText = $(this).find('.all-text').text().slice(0, maxPrevText);
                $(this).find('.preview-text').append('<p>' + myText + '...' + '</p>');
            });

            // open news
            $('.step-11 .item .title').on('click', function() {
                // add classes
                $(this).parents('.wrapper-item').addClass('open-news')
                // remove pre texts
                $(this).parents('.wrapper-item').find('.opened').find('.date').empty()
                $(this).parents('.wrapper-item').find('.opened').find('.title').empty()
                $(this).parents('.wrapper-item').find('.opened').find('.all-text').empty()
                // copi texts
                var date = $(this).parents('.item').find('.date').text()
                var title = $(this).parents('.item').find('.title').text()
                var text = $(this).parents('.item').find('.all-text').text()
                // paste texts
                $(this).parents('.wrapper-item').find('.opened').find('.date').append(date)
                $(this).parents('.wrapper-item').find('.opened').find('.title').append(title)
                $(this).parents('.wrapper-item').find('.opened').find('.all-text').append('<p>' + text + '</p>')
                // height wrapper block
                var heightWrapper = $(this).parents('.wrapper-item').find('.opened').height()
                $(this).parents('.block-news').css('height', heightWrapper + 130 + 200)
            })
            // close news
            $('.step-11 .opened .button').on('click', function() {
                $(this).parents('.wrapper-item').removeClass('open-news')
                $(this).parents('.block-news').removeAttr('style')
                $('.step-11 .block-news').css('height', heightNewsBlock)
            })

        }
    });
    return false;
});
$(document).ready(function() {
    $(document).on('click', '.nav-news a', function() {
        var link = $(this).attr('href');
        $.ajax({
                url: link,
                cache: false,
                type: "POST",
                success: function(response){					
                    //$('.ajax').fadeToggle().fadeToggle();
                    $('.ajax').html(response);

                    // add height block wrapper
                    var heightNewsBlock = $('.step-11 .block-news .wrapper-block').height()
                    $('.step-11 .block-news').css('height', heightNewsBlock);

                    // add preview text
                    var maxPrevText = 150;
                    $('.step-11 .item').each(function() {
                        var myText = $(this).find('.all-text').text().slice(0, maxPrevText);
                        $(this).find('.preview-text').append('<p>' + myText + '...' + '</p>');
                    });
                    
                    // open news
                    $('.step-11 .item .title').on('click', function() {
                        // add classes
                        $(this).parents('.wrapper-item').addClass('open-news')
                        // remove pre texts
                        $(this).parents('.wrapper-item').find('.opened').find('.date').empty()
                        $(this).parents('.wrapper-item').find('.opened').find('.title').empty()
                        $(this).parents('.wrapper-item').find('.opened').find('.all-text').empty()
                        // copi texts
                        var date = $(this).parents('.item').find('.date').text()
                        var title = $(this).parents('.item').find('.title').text()
                        var text = $(this).parents('.item').find('.all-text').text()
                        // paste texts
                        $(this).parents('.wrapper-item').find('.opened').find('.date').append(date)
                        $(this).parents('.wrapper-item').find('.opened').find('.title').append(title)
                        $(this).parents('.wrapper-item').find('.opened').find('.all-text').append('<p>' + text + '</p>')
                        // height wrapper block
                        var heightWrapper = $(this).parents('.wrapper-item').find('.opened').height()
                        $(this).parents('.block-news').css('height', heightWrapper + 130 + 200)
                    })
                    // close news
                    $('.step-11 .opened .button').on('click', function() {
                        $(this).parents('.wrapper-item').removeClass('open-news')
                        $(this).parents('.block-news').removeAttr('style')
                        $('.step-11 .block-news').css('height', heightNewsBlock)
                    })

                }
            });
        return false;
    });
});

// for media
$(document).ready(function() {
    if (location.hostname.search('tests.bambus.com.ua')!= -1) {
        var link = 'http://tests.bambus.com.ua/geo-alliance/media/';
    } else {
        var link = 'http://bamb.loc/geo-all/app/WP/media/';
    }
    $.ajax({
        url: link,
        cache: false,
        type: "POST",
        success: function(response){
            $('.ajax-two').html(response);
        }
    });
    return false;
});
$(document).ready(function() {
    $(document).on('click', '.nav-media a', function() {
			$('.ajax-two').addClass('ajax-animated');            
			var link = $(this).attr('href');
			$.ajax({
                url: link,
                cache: false,
                type: "POST",
                success: function(response) {     								
                    setTimeout(function() { 
						$('.ajax-two').html(response); 
						$('.ajax-two').removeClass('ajax-animated'); 
						
					}, 1000);	
                }
            });
			 return false;		
           
    });
});





// step-12 ------------------------------------------------------------------- //

$('.step-12 .item .text, .step-12 .item .icons').hover(function() {
    $(this).parents('.item').toggleClass('hover')
});
// add link to icons
$('.step-12 .item').each(function(){
    var myLink = $(this).find('a').attr('href');
    $(this).on('click', function() {
        window.open(myLink,'_blank');
    })
})














