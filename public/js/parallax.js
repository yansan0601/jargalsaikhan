/*
 Theme Name: Event4
 Theme URI: http://demo.newtemplate.net/event4/index.html
 Author: NewTemplate
 Author URI: https://themeforest.net/user/newtemplete
 Version: 0.1.1
 Description:  Event4 One Page HTML5 Theme comes out with tons of powerful features. Its modern, attractive and clean design.
 */


(function ($) {

    "use strict";

    var parallax = document.querySelectorAll(".parallax_img"),
        speed = 0.20;

    window.onscroll = function () {
        [].slice.call(parallax).forEach(function (el, i) {
            var rect = el.getBoundingClientRect();
            var windowYOffset = window.pageYOffset,
                elBackgrounPos = "0 " + (windowYOffset * speed) + "px";

            el.style.backgroundPosition = elBackgrounPos;

        });
    };

})(jQuery);