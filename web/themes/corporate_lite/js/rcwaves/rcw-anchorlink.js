/**
 * Created by yunior on 11/23/2018.
 */


(function ($, Drupal) {
    Drupal.behaviors.smoothRCW = {
        attach: function (context, settings) {
            $(document).on('click', 'a.sf-depth-1', function (event) {
                event.preventDefault();

                var sele = $.attr(this, 'href').split('/')[1];

                $('html, body').animate({
                    scrollTop: $(sele).offset().top - 100}, 500);
            });
        }
    }
})(jQuery, Drupal);
