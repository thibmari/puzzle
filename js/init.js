(function($){
    $(function(){

        $('.button-collapse').sideNav();

        $('.parallax').parallax();

       // console.log('haaa');
        var scroll = $(window).scrollTop();


       /* console.log($('.slideshow'), 'dsfsddd');
            $('body').scroll( function() {
                console.log($('.slideshow'), 'dsfsd');
                if($(this).scrollTop() + $(this).innerHeight() >= this.scrollHeight) {
                    console.log('haaa');
                }
            })


*/
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            var slide = $('.parallax').height() - 100;
            var $menuWrapper =  $('.menu-wrapper');
            var $menu =  $('.menu');
            var $menuText =  $('.menu__text');
            if(scroll > slide && !($menu).is(':animated') && !($menuWrapper.hasClass('menu-slide'))) {
                $menuWrapper.addClass('menu-slide');
                $menuWrapper.css('border-bottom', 'solid 1px #ccc');
                $menuText.css('color', '#000');
                $menuWrapper.animate({
                   'height': '90px'
                }, 300);
                $menu.animate({
                   'padding-top': '10px'
                }, 300);
            } else if (slide + 10 > scroll && !($menu).is(':animated') && $menuWrapper.hasClass('menu-slide')) {
                $menuWrapper.removeClass('menu-slide');
                $menuWrapper.css('border-bottom', 'none');
                $menuText.css('color', '#FFF');
                $menuWrapper.animate({
                    'height': '110px'
                }, 300);
                $menu.animate({
                    'padding-top': '30px'
                }, 300);
            }
        });

    }); // end of document ready
})(jQuery); // end of jQuery name space