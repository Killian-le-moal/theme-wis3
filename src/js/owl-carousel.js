require('owl.carousel');



document.addEventListener('DOMContentLoaded', function (){
    $(".owl-carousel").owlCarousel({
        margin: 30,
        items: 2,
        loop: true,
        autoplay: true,
        dots: true,
        nav: true,

        responsive: {
            700: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });
});