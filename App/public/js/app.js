var owl = $('.owl-carousel');

$(document).ready(function(){
    owl.owlCarousel({
        items:1,
        loop:true,
        nav: true,
        margin:10,
        autoHeight:false,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
    })
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[4000])
});
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
});