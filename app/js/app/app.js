
// fadeIn page (load or DOMContentLoaded); -------------------------------------------------- //

window.addEventListener && window.addEventListener('load',function(){
    document.body.className+=' loaded';
});


(function(){
    var lengthSlider = $('.project .wrapper-items > div').length
    // active for first element
    $('.project .wrapper-items > div:first-child').addClass('active')
    // click item page change image
    $('.project .wrapper-items > div').on('click', function(){
        $('.project .wrapper-items > div').removeClass('active')
        $(this).addClass('active')
        var myImage = $(this).find('span').attr('data-url')
        $('.project .big-image-wrapper .big-image').css('background', myImage)
    });
    // click right
    $('.project .big-image-wrapper .slide-right').on('click', function(){
        var indexItem = $('.project .wrapper-items > div.active').index() + 1;
        $('.project .controls').removeClass('show-left-button')
        if(indexItem < lengthSlider) {
            $('.project .wrapper-items > div.active').removeClass('active').next('div').addClass('active')
        } else {
            $('.project .controls').addClass('show-right-button')
        }
    })
    // click left
    $('.project .big-image-wrapper .slide-left').on('click', function(){
        var indexItem = $('.project .wrapper-items > div.active').index() + 1;
        $('.project .controls').removeClass('show-right-button')
        if(indexItem > 1) {
            $('.project .wrapper-items > div.active').removeClass('active').prev('div').addClass('active')
        } else {
            $('.project .controls').addClass('show-left-button')
        }
    })
    // change image after click right / left
    $('.project .controls > span').on('click', function(){
        var myImage = $('.project .wrapper-items > div.active').find('span').attr('data-url')
        $('.project .big-image-wrapper .big-image').css('background', myImage)
    })
    
    //
    
    
    
    
})();










var map;
function initialize() {
    var myImg = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAA8CAYAAADykDOkAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGN0E5Mzc4NEYyOTIxMUU0OEI5NENBRkI0MjQ3ODA1QyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGN0E5Mzc4NUYyOTIxMUU0OEI5NENBRkI0MjQ3ODA1QyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkY3QTkzNzgyRjI5MjExRTQ4Qjk0Q0FGQjQyNDc4MDVDIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkY3QTkzNzgzRjI5MjExRTQ4Qjk0Q0FGQjQyNDc4MDVDIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+gCruxwAABI9JREFUeNrMmglIVUEUhq8v0xbbKIr2HbLECsoIComkEKMNs0VL2qCFpMWinSSzfY9CWiiKLIM2s7IMsjRayIp2KihfixJtttBu/8Hz4Gnvzsx97977PPDxxHtm5nfemZlz5hoQs3+i5qN1AZGgDegM2oH6IBCUgVLgBPfBM3AdXHE1PpWwy/CAgV4KbQrGgGGgJwgS+DYGHUA/t989ANlgN3hsdPAAgzPdGkwD1Kih5rvRN5EBtmDGr1khejpYAppo5tsfsBUsgvhvMmeHQoch4CjYZpFgsmpgJsX6oAOTevgqmjq4xbFrh3UF+RA+wlvRESCXF5GdFgwyIXyS0ZgOBTdBTYMD0pb2EDwBn0EN3grDQFsv+huNGD+kIrouh0Q7xY4f8A6QA+6Anzp+nUBfMA70Uez7F33jEH5bFh67FAUXgSmgO0gFNwSCyR6BnSx8MPvLrDptAgiVEJHoODBCobODoBtIlwjVsyxeM8sVfCmsVuuJrkebvEIna0E8+GDColsKxiv4TcNsR3gSnaSwD28C88zcKhCve/ExVvEPrCCaVvVUSaOzYJYVexyEH8BHisQtBrMd7i46lpMgPXvPCZJlBuHLFBbnDHfRMkGpJsWwzJIkz6Mx24EOXoC9BY5vOJmx3DDbV/FxRuDSHAwk0VEsXM9oofy28RhPlzyPcHC1Icp3c2zOPSjfKRE8DyPRzQQOr91LI5tC5CunBnoW6uATR8+K+fy3264LntUm0Y0EDk7NPyYKj2AHVw169sVPov+KSkSHZGeopVU9KyPRHwUOLf0kTBSyP0j0c8mdhcMPonsKnn0nQS8FDi1ALzvV4pgO4vJMzx6T6KeS0j7K5lmO5ONaz+6S6HOSXSLRZtGTJc8LSfRbyWbeHkywKTTCJOUeaT3jWmRHFFLT6jboXi95fp6uzVyiD3Oir2dUIOyzeJapchogcdvhXgRQgr9HdnEC5lskuD8+tkvcLmOW8ysXtvTVlEoargRzTRYcjY+TCq4pnqrxYsWZXMPXCGYcOlQon1ZIFzIxyxf0LmsoZvIUBkvWyu/6hvhw4pHYDQq+byvfFHiarQRJPuIyumE6Di5ym1YS/wZa+XUY3ftRLRit+AcmYpYrbBKe3rm85BukbAMnWCQv5nta+Qsh+vkn918HdAThkpPOk6VB8H+Fruj1RRpY4McU9BIER3p6IFpMC0GBnwR/4pDTjIomGwm++UF0LGbZ6a3oV3yo2GkrIDhX5KCy19LGv9EmwXkQvFjmpHpAzOZtykqj03iUiqORU204eGeh6JGY5WKzRb9RSNC9Tkkh+Kyqs9H84ZgF8Z0PwclGGniT9MyRVDpGjE7OWKONvBFdxgOVmiCa8ooSO0STOU0oeCnDy/KmoS858XEf4ruA01vNbtGu+L5msM1XziLL/CWaBo7TjL21pSuCF74MakbJVGQgvtdp4hdBtokmo39vkL0Bu2JWUWzmjSi9AywUxHGcWQOZfY07lBP4yhbPaW6VFO3U/n/HvhmcMHMQKy7MM9zim951zzR7gEDNGqP8my7kV1nR+T8BBgBuxg5++vrDaQAAAABJRU5ErkJggg==';
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
    var image = myImg.replace("image/png", "image/octet-stream");
    var mapOptions = {
        disableDefaultUI: true,
        zoom: 16,
        center: myLatlng,
        scrollwheel: true,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL,
            position: google.maps.ControlPosition.RIGHT_TOP
        }
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



