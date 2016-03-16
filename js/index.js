$(function(){
        $('#myCarousel.slide').carousel({
            interval: 10000,
            pause: "hover"
        });
    $('div.carousel-inner').focus(function(){
       $("#myCarousel").carousel('pause');
    }).blur(function() {
       $("#myCarousel").carousel('cycle');
    });
})