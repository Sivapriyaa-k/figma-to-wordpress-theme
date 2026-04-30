(function ($) {
    $(document).ready(function () {
        console.log('test');
        $('#openNav').on('click', function () {
            $("mySidenav").style.width = "220px";

        });

        $('#closeNav').on('click', function () {
            $("mySidenav").style.width = "0";
        });

        $('.fixed-settings-bar .btn-settings').click(function () {
            $('.fixed-settings-bar .dropdown-menu-custom').slideToggle(300);
        });

        var toggleButtons = document.getElementsByClassName('toggleMenuButton');

        for (var i = 0; i < toggleButtons.length; i++) {
            toggleButtons[i].addEventListener('click', function () {
                var dropdown = document.querySelector('.dropdown-menu-custom');
                dropdown.style.display = (dropdown.style.display === 'none' || dropdown.style.display === '') ? 'block' : 'none';
            });
        }


        $("#feature").owlCarousel({
            loop: true,
            margin: 20,
            dots: false,
            autoplay: false,
            smartSpeed: 300,
            autoplayTimeout: 5000,
            autoplaySpeed: 3000,
            rtl: true,
            nav: false,

            responsive: {
                0: {
                    items: 1,
                },

                767: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
            },
        });


        $("#room").owlCarousel({
            loop: true,
            margin: 15,
            dots: true,
            autoplay: false,
            smartSpeed: 300,
            autoplayTimeout: 5000,
            autoplaySpeed: 3000,
            rtl: true,
            nav: true,

            responsive: {
                0: {
                    items: 1,
                }
            },
        });
    })
})(jQuery);