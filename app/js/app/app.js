
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
            //$('.project .controls').addClass('show-right-button')
        }
    })
    // click left
    $('.project .big-image-wrapper .slide-left').on('click', function(){
        var indexItem = $('.project .wrapper-items > div.active').index() + 1;
        $('.project .controls').removeClass('show-right-button')
        if(indexItem > 1) {
            $('.project .wrapper-items > div.active').removeClass('active').prev('div').addClass('active')
        } else {
            //$('.project .controls').addClass('show-left-button')
        }
    })
    // change image after click right / left
    $('.project .controls > span').on('click', function(){
        var myImage = $('.project .wrapper-items > div.active').find('span').attr('data-url')
        $('.project .big-image-wrapper .big-image').css('background', myImage)
    })
    
    //
 
    
    
    
})();


