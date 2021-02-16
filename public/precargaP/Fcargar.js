/* precargado de la pagina */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
         /*------------------
            Product filter
        --------------------*/
        if ($('#bodyman').length > 0) {
            var containerEl = document.querySelector('#bodyman');
            var mixer = mixitup(containerEl);
        }
        $(".bodyman").on('click', function () {
            $(".bodyman").removeClass('active');
            $(this).addClass('active');
        });
    });

   

})(jQuery);


