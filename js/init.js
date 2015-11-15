(function($){
    $(function(){

        $('.button-collapse').sideNav();
        $('.parallax').parallax();

        $('.room').hover(function() {
            $(this).children().eq(0).css("display", "none");
            $(this).children().eq(1).css("display", "flex");
        });
        $('.room').mouseleave(function() {
            $(this).children().eq(0).css("display", "flex");
            $(this).children().eq(1).css("display", "none");
        });

        $(window).scroll(function() {
            if ($(window).width() <= 601){
                var slideMin = 55;
                var heightExpand = 55;
                var paddingDepand = 15;
                var heightDepand = 55;
            } else {
                var slideMin = 110;
                var heightExpand = 90;
                var paddingDepand = 30;
                var heightDepand = 110;
            }
            var scroll = $(window).scrollTop();
            var slide = $('.parallax').height() - slideMin;
            var $menuWrapper =  $('.menu-wrapper');
            var $menu =  $('.menu');
            var $menuText =  $('.menu__text');
            if(scroll > slide && !($menu).is(':animated') && !($menuWrapper.hasClass('menu-slide'))) {
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
            url: 'img/logo.png'
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