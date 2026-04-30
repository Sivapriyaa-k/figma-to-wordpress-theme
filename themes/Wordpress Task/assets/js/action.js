jQuery(document).ready(function ($) {

    jQuery("#menuToggle").on("click", function () {
        jQuery("#mobilemenu").slideToggle();
    })
    var owl = $("#testimonial")
    owl.owlCarousel({
        autoplay: false,
        items: 4.5,
        loop: true,
        center: true,
        margin: 20,
        dots: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                dots: true,
                nav: true
            },
            550: {
                items: 2,
                loop: true,
            },
            1299: {
                items: 5.5,
                loop: true
            }
        }
    })

})
