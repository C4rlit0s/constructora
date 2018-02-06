(function($) {
    "use strict";

    $(document).ready(function () {

        $('.cms-carousel-portfolio3, .cms-carousel-portfolio4').each(function() {
            
            var owl = $(this).owlCarousel({
                loop    :($(this).attr('data-loop')) == '1' ? true : false,
                autoplay    :($(this).attr('data-autoplay')) == '1' ? true : false,
                navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                nav: true,
                margin  :parseInt($(this).attr('data-margin')),
                responsive:{
                    0:{
                        items:parseInt($(this).attr('data-item-xs'))
                    },
                    768:{
                        items:parseInt($(this).attr('data-item-sm'))
                    },
                    992:{
                        items:parseInt($(this).attr('data-item-md'))
                    },
                    1200:{
                        items:parseInt($(this).attr('data-item-lg'))
                    }
                }
            })
            var owlAnimateFilter = function(even) {
            $(this)
                .addClass('item-loading')
                .delay(70 * $(this).parent().index())
                .queue(function() {
                    $(this).dequeue().removeClass('item-loading')
                })
            }

            $('.btn-filter-wrap').on('click', '.btn-filter', function(e) {
                var filter_data = $(this).data('filter');
                if($(this).hasClass('btn-active')) return;
                $(this).addClass('btn-active').siblings().removeClass('btn-active');
                owl.owlFilter(filter_data, function(_owl) { 
                    $(_owl).find('.cms-carousel-item').each(owlAnimateFilter); 
                });
            })

        });
       // $('.cms-carousel-portfolio4').each(function() {
            
       //      var owl = $(this).owlCarousel({
       //          loop    :($(this).attr('data-loop')) == '1' ? true : false,
       //          autoplay    :($(this).attr('data-autoplay')) == '1' ? true : false,
       //          navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
       //          nav: true,
       //          margin  :parseInt($(this).attr('data-margin')),
       //          responsive:{
       //              0:{
       //                  items:parseInt($(this).attr('data-item-xs'))
       //              },
       //              768:{
       //                  items:parseInt($(this).attr('data-item-sm'))
       //              },
       //              992:{
       //                  items:parseInt($(this).attr('data-item-md'))
       //              },
       //              1200:{
       //                  items:parseInt($(this).attr('data-item-lg'))
       //              }
       //          }
       //      })
       //      var owlAnimateFilter = function(even) {
       //      $(this)
       //          .addClass('item-loading')
       //          .delay(70 * $(this).parent().index())
       //          .queue(function() {
       //              $(this).dequeue().removeClass('item-loading')
       //          })
       //      }

       //      $('.btn-filter-wrap').on('click', '.btn-filter', function(e) {
       //          var filter_data = $(this).data('filter');
       //          if($(this).hasClass('btn-active')) return;
       //          $(this).addClass('btn-active').siblings().removeClass('btn-active');
       //          owl.owlFilter(filter_data, function(_owl) { 
       //              $(_owl).find('.cms-carousel-item').each(owlAnimateFilter); 
       //          });
       //      })

       //  });

    });
}(jQuery));



