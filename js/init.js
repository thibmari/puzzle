(function ($) {
    $(function () {
        $('.slider').slider({
            full_width: true
        });

        $('.menu__item a').on('click', function (event) {
            if (!$(this).hasClass('no-prevent')) {
                event.preventDefault();
                var dest = $(this)[0].getAttribute('scrollTo'),
                    x = $('.' + dest).offset().top - 82;
                if (!$('.menu__text').is(':visible')) {
                    x = x + 30;
                }
                $('html, body').animate({
                    scrollTop: x
                }, 1500);
            }
        });

        $('.no-do').on('click', function (event) {
            event.preventDefault();
            var dest = $(this)[0].getAttribute('scrollTo'),
                x = $('.' + dest).offset().top - 82;
            if (!$('.menu__text').is(':visible')) {
                x = x + 30;
            }
            $('html, body').animate({
                scrollTop: x
            }, 1500);
        });



        $('.room').hover(function () {
            $(this).children().eq(0).css("display", "none");
            $(this).children().eq(1).css("display", "flex");
        });
        $('.room').mouseleave(function () {
            $(this).children().eq(0).css("display", "flex");
            $(this).children().eq(1).css("display", "none");
        });

        $(window).scroll(function () {
            var slideMin,
                heightExpand,
                paddingDepand,
                heightDepand;

            if ($('.menu__text').is(':visible')) {
                slideMin = 110;
                heightExpand = 90;
                paddingDepand = 30;
                heightDepand = 110;
            } else {
                slideMin = 135;
                heightExpand = 55;
                paddingDepand = 15;
                heightDepand = 55;
            }

            var scroll = $(window).scrollTop();
            var slide = $('.slider').height() - slideMin;
            var $menuWrapper = $('.menu-wrapper');
            var $menu = $('.menu');
            var $menuText = $('.menu__text');

            if (scroll > slide && !($menu).is(':animated') && !($menuWrapper.hasClass('menu-slide'))) {
                $menuWrapper.addClass('menu-slide');
                $menuWrapper.css('border-bottom', 'solid 1px #ccc');
                $menuText.css('color', '#000');
                $menu.animate({
                    'padding-top': '10px'
                }, 300);
                $menuWrapper.animate({
                    'height': heightExpand + 'px'
                }, 300);
            } else if (slide + 5 > scroll && !($menu).is(':animated') && $menuWrapper.hasClass('menu-slide')) {
                $menuWrapper.removeClass('menu-slide');
                $menuWrapper.css('border-bottom', 'none');
                $menuText.css('color', '#FFF');
                $menu.animate({
                    'padding-top': paddingDepand + 'px'
                }, 300);
                $menuWrapper.animate({
                    'height': heightDepand + 'px'
                }, 300);
            }
        });
    }); // end of document ready
})(jQuery); // end of jQuery name space

function initialize() {
    var mapCanvas = document.getElementById('google-map'),
        myLatLng = new google.maps.LatLng(51.059685, 3.732354),
        mapOptions = {
            center: myLatLng,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        },
        map = new google.maps.Map(mapCanvas, mapOptions),
        puzzlePiece = {
            url: 'img/logo_map.png'
        },
        marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: puzzlePiece,
            title: 'Puzzle Escape Rooms'
        });

    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);