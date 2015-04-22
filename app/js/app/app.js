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











