(function($) {
    "use strict";

    $(document).ready(function () {
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 370,
        itemMargin: 30,
        asNavFor: '#slider',
        minItems: 2,
        maxItems: 3
      });
     
      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
      });

    });
}(jQuery));
