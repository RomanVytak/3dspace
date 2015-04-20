// identify browser -------------------------------------------------- //

if(navigator.userAgent.match(/(iPad|iPhone|iPod)/g)){
    document.documentElement.classList.add('ios')
};
if(navigator.userAgent.match(/Android/i)) { 
    document.documentElement.classList.add('android') 
};
if (document.all && document.querySelector && !document.addEventListener) {
    document.documentElement.classList.add('ie8')
};



// fadeIn page (load or DOMContentLoaded); -------------------------------------------------- //

window.addEventListener && window.addEventListener('load',function(){
    document.body.className+=' loaded';
});



// change color menu ico -------------------------------------------------- //

(function () {
    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 500) {
            $('body').addClass('menu-silver')
        } else {
            $('body').removeClass('menu-silver')
        }
    });
})();



// scroll page -------------------------------------------------- //

(function() {
    // var
    var bloch1 =  $('#step-1').offset().top;
    var bloch2 =  $('#step-2').offset().top;
    var bloch3 =  $('#step-3').offset().top;
    var bloch4 =  $('#step-4').offset().top;
    var bloch5 =  $('#step-5').offset().top;
    var bloch6 =  $('#step-6').offset().top;
    var bloch8 =  $('#step-8').offset().top;
    var bloch9 =  $('#step-9').offset().top;
    var bloch10 = $('#step-10').offset().top;
    var setTime = 200;
    var setDurat = 1100;
    // click menu
    (function() {
        $('.menu .push-block-11').on('click', function(){ setTimeout(function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch1}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            }); }, setTime);
        });
        $('.menu .push-block-22').on('click', function(){ setTimeout(function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch2}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            }); }, setTime);
        });
        $('.menu .push-block-33').on('click', function(){ setTimeout(function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch3}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            }); }, setTime);
        });
        $('.menu .push-block-44').on('click', function(){ setTimeout(function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch4}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            }); }, setTime);
        });
        $('.menu .push-block-55').on('click', function(){ setTimeout(function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch5}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            }); }, setTime);
        });
        $('.menu .push-block-66').on('click', function(){ setTimeout(function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch6}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            }); }, setTime);
        });
        $('.menu .push-block-88').on('click', function(){ setTimeout(function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch8}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            }); }, setTime);
        });
        $('.menu .push-block-99').on('click', function(){ setTimeout(function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch9}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            }); }, setTime);
        });
        $('.menu .push-block-10').on('click', function(){ setTimeout(function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch10}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            }); }, setTime);
        });
    })();
    // click button step-1
    (function() {
        $('.push-block-3').on('click', function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch3}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            });
        });
        $('.push-block-4').on('click', function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch4}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            });
        });
        $('.push-block-5').on('click', function(){
            $({myScrollTop:window.pageYOffset}).animate({myScrollTop: bloch5}, {
                duration: setDurat, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
            });
        });
    })();
})();



// scroll disable -------------------------------------------------- //

function disableScroll() {
    document.onmousewheel = document.onwheel = function() { return false; }
}
function activateScroll() {
    document.onmousewheel = document.onwheel = function() { }
}
$('.menu-block').on('click', function(){
    disableScroll()
});
$('.close-menu, .menu a, .wrapper-content').on('click', function(){
    activateScroll()
});



// my var -------------------------------------------------- //

var winWidth = $(window).width();
var winHeight = $(window).height();



// open menu -------------------------------------------------- //
var heightMenu = $('.menu').outerHeight();
$('.menu-block').on('click', function(){
    $('body').addClass('open-menu')
    // for mobile
    if(heightMenu > winHeight) {
        $('body').addClass('abs-menu')
        $('.wrapper-content').css({
            'height': heightMenu,
            'overflow': 'hidden'
        });
    }else {}
})

// close menu
$('.close-menu, .menu a, .wrapper-content').on('click', function(){
    $('body').removeClass('open-menu')
    /// for mobile
    $('.wrapper-content').removeAttr('style')
})




// step-3 (why mba?) -------------------------------------------------- //

// height item 
var heightItemStep3 = $('.step-3').outerHeight();
$('.step-3 .wrapper .item').css('height',heightItemStep3);
//
$('.step-3 .wrapper .button-wrapper').on('click', function(){
    $('.step-3').addClass('bg-black')
    $(this).parents('.content').addClass('hidden-start-text');
    $('.step-3 .wrapper > span').removeClass('active');
    
    // fon mobile
    if(winWidth < 1260) {
        // hidden buttons
        $(this).parents('.content').addClass('hidden-buttons');
        // add close in h3
        $(this).next().find('h3').append('<span class="close"></span>');
        // display text
        $(this).next().css('display','block');
        // add class active
        var _this = this;
        setTimeout(function(){
            $(_this).parent().addClass('active');
        }, 100)
        // add z-index
        setTimeout(function(){
            $('.step-3 .wrapper .item').css('z-index','1');
        }, 500)
        // close text, display buttons, remove '.close'
        $('.step-3 .close').on('click', function(){
            $(this).parents('.content').removeClass('hidden-buttons');
            $('.step-3 .wrapper .item').css('z-index','-1');
            $('.step-3 .wrapper > span').removeClass('active');
            setTimeout(function(){
                $(_this).next().css('display','none');
                $(_this).next().find('.close').remove();
            }, 500)
        })
    } else {
        // add class active instantly (for desktop)
        $(this).parent().addClass('active');
    }
})



// step-4 (video) -------------------------------------------------- //

var lengthVideo = $('.step-4 .video-conteiner .item').length;
var arrowRightVideo = $('.step-4 .control .arrowright');
var arrowLeftVideo = $('.step-4 .control .arrowleft');
// add active on 1 element
$('.step-4 .video-conteiner .item:first-child').addClass('active');
// go! right
var idx = 0;
$('.step-4 .control .arrowright').on('click', function() {
    idx++;
    arrowLeftVideo.removeClass('inert');
    $('.step-4 .video-conteiner .item').removeClass('active')
    $('.step-4 .video-conteiner .item').eq(idx).addClass('active')
    if(idx == (lengthVideo-1)) {
        arrowRightVideo.addClass('inert');
    }
});
// go! left
$('.step-4 .control .arrowleft').on('click', function() {
    idx--;
    arrowRightVideo.removeClass('inert');
    $('.step-4 .video-conteiner .item').removeClass('active')
    $('.step-4 .video-conteiner .item').eq(idx).addClass('active')
    if(idx == 0) {
        arrowLeftVideo.addClass('inert');
    }
});
// play video
$('.step-4 .play').on('click', function(){
    $(this).parents('.item').addClass('play-video');
    $(this).parents('.step-4').addClass('hidden-controls');
    // find link video
    var myVideo = $(this).parents('.item').find('.link-video').text();
    $('.step-4 .video-conteiner > iframe').attr('src', 'https://www.youtube.com/embed/' + myVideo + '?showinfo=0&controls=0&autoplay=1');
});
// stop video
$('.step-4 .close-video, .menu-block').on('click', function(){
    $('.step-4 .item').removeClass('play-video')
    $('.step-4').removeClass('hidden-controls')
    // remove iframe src
    $('.step-4 .video-conteiner > iframe').attr('src', '');
});



// step 5 (faq) -------------------------------------------------- //

var heightItem = $('.step-5 .item').outerHeight();
$('.step-5 .preview-title').on('click', function(){
    var heightF = $(this).parent().find('.all-text').height();
    var heightH3 = $(this).parent().find('.preview-title').height();
    // remove other class
    $('.step-5 .item').removeClass('open')
    $('.step-5 .all-text').removeAttr('style')
    $('.step-5 .preview-title').removeAttr('style')
    $('.step-5 .item').css({'height': heightItem})
    $('.step-5 .closeF').removeAttr('style')
    // add class
    $(this).parent().addClass('open');
    // open all text
    $(this).parent().find('.all-text').css({
        '-webkit-transform': 'translateY(' + (heightH3/2)*(-1) +'px)',
        '-ms-transform': 'translateY(' + (heightH3/2)*(-1) +'px)',
        'transform': 'translateY(' + (heightH3/2)*(-1) +'px)',
        'opacity': 1
    });
    // height item
    $(this).parent().css({
        'height': heightF+heightH3
    });
    // hidden title
    $(this).parent().find('.preview-title').css({
        '-webkit-transform': 'translateY(' + heightH3*(-1) +'px)',
        '-ms-transform': 'translateY(' + heightH3*(-1) +'px)',
        'transform': 'translateY(' + heightH3*(-1) +'px)',
        'opacity': 0
    });
    // visible close
    $(this).parents('.item').find('.closeF').css('display','block')
});
$('.step-5 .closeF').on('click', function(){
    $(this).parent().removeClass('open')
    $(this).parent().find('.all-text').removeAttr('style')
    $(this).parent().find('.preview-title').removeAttr('style')
    $(this).removeAttr('style')
    $(this).parent().css({'height': heightItem})
})



// step-8 (form) -------------------------------------------------- //

var heifhtItem1 = $('.step-8 .item-1').outerHeight();
var heifhtItem2 = $('.step-8 .item-2').outerHeight();
var heifhtItem3 = $('.step-8 .item-3').outerHeight();
var step8top = $('.step-8').offset().top;
// height item-1 block = height wrapper
$('.step-8 .wrapper').css('height', heifhtItem1);
// position item-2 and item-3
$('.step-8 .item-2').css({
    '-webkit-transform': 'translate3d(0,' + (heifhtItem1/2)*(-1) +'px, 0)',
    '-ms-transform': 'translate3d(0,' + (heifhtItem1/2)*(-1) +'px, 0)',
    'transform': 'translate3d(0,' + (heifhtItem1/2)*(-1) +'px, 0)' 
});
$('.step-8 .item-3').css({
    '-webkit-transform': 'translate3d(0,' + (heifhtItem2/2)*(-1) +'px, 0)',
    '-ms-transform': 'translate3d(0,' + (heifhtItem2/2)*(-1) +'px, 0)',
    'transform': 'translate3d(0,' + (heifhtItem2/2)*(-1) +'px, 0)' 
});
// go! button-1
$('.step-8 .item-1 .button').on('click', function() {
    // change height wrapper
    $(this).parents('.wrapper').css('height', heifhtItem2);
    // hide item-1, visible item-2
    $(this).parents('.wrapper').addClass('hide-step-1');
    $(this).parents('.item-1').css({
        '-webkit-transform': 'translate3d(0, -500px, 0)',
        '-ms-transform': 'translate3d(0, -500px, 0)',
        'transform': 'translate3d(0, -500px, 0)'
    });
    $('.step-8 .item-2').css({
        '-webkit-transform': 'translate3d(0,' + (heifhtItem1)*(-1) +'px, 0)',
        '-ms-transform': 'translate3d(0,' + (heifhtItem1)*(-1) +'px, 0)',
        'transform': 'translate3d(0,' + (heifhtItem1)*(-1) +'px, 0)' 
    });
});
// go! button-2
$('.step-8 .item-2 .button').on('click', function() {
    // change height wrapper
    $(this).parents('.wrapper').css('height', heifhtItem3);
    // hide item-2, visible item-3
    $(this).parents('.wrapper').addClass('hide-step-2');
    $('.step-8 .item-2').css({
        '-webkit-transform': 'translate3d(0,' + ((heifhtItem1+500)*(-1)) +'px, 0)',
        '-ms-transform': 'translate3d(0,' + ((heifhtItem1+500)*(-1)) +'px, 0)',
        'transform': 'translate3d(0,' + ((heifhtItem1+500)*(-1)) +'px, 0)' 
    });
    $('.step-8 .item-3').css({
        '-webkit-transform': 'translate3d(0,' + (heifhtItem1+heifhtItem2)*(-1) +'px, 0)',
        '-ms-transform': 'translate3d(0,' + (heifhtItem1+heifhtItem2)*(-1) +'px, 0)',
        'transform': 'translate3d(0,' + (heifhtItem1+heifhtItem2)*(-1) +'px, 0)'                      
    })
});
// close items
$(' .step-8 .close').on('click', function() {
    $({myScrollTop:window.pageYOffset}).animate({myScrollTop: step8top}, {
        duration: 700, easing: 'swing', step: function(val) {window.scrollTo(0, val);}
    });
    $(this).parents().removeClass('hide-step-1 hide-step-2');
    $('.step-8 .wrapper').css('height', heifhtItem1);
    $('.step-8 .item-1').css({
        '-webkit-transform': 'translate3d(0, 0, 0)',
        '-ms-transform': 'translate3d(0, 0, 0)',
        'transform': 'translate3d(0, 0, 0)' 
    });
    $('.step-8 .item-2').css({
        '-webkit-transform': 'translate3d(0,' + (heifhtItem1/2)*(-1) +'px, 0)',
        '-ms-transform': 'translate3d(0,' + (heifhtItem1/2)*(-1) +'px, 0)',
        'transform': 'translate3d(0,' + (heifhtItem1/2)*(-1) +'px, 0)' 
    });
    $('.step-8 .item-3').css({
        '-webkit-transform': 'translate3d(0,' + (heifhtItem2/2)*(-1) +'px, 0)',
        '-ms-transform': 'translate3d(0,' + (heifhtItem2/2)*(-1) +'px, 0)',
        'transform': 'translate3d(0,' + (heifhtItem2/2)*(-1) +'px, 0)' 
    });
})



// step-9 (contacts) -------------------------------------------------- //

var map;
function initialize() {
    var styles = [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "saturation": -60
            },
            {
                "lightness": 10
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "saturation": -60
            },
            {
                "lightness": 60
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 60
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 60
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "saturation": -10
            },
            {
                "lightness": 30
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#bababa"
            }
        ]
    }
];
    var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
    var myLatlng = new google.maps.LatLng(50.4156018,30.5276937);
    var image = 'img/marker.png';
    var mapOptions = {
        disableDefaultUI: true,
        zoom: 16,
        center: myLatlng,
        scrollwheel: false,
        zoomControl: true
    };
    map = new google.maps.Map(document.getElementById('map'),mapOptions);
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon: image
    });
}
google.maps.event.addDomListener(window, 'load', initialize);




















