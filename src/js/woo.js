$(document).ready(function () {
       

    $('.product-grid > .product, .shop__sidebar-carousel > .product').addClass('cart-prod-grid');
    
    $('.shop__filter-list').click(function() {
         $('.products').removeClass('product-grid');
         $('.product').removeClass('cart-prod-grid');
         $('.products').addClass('product-list'); 
         $('.product').addClass('cart-prod-list');
    });
    $('.shop__filter-grid').click(function() {
            $('.products').removeClass('product-list'); 
            $('.product').removeClass('cart-prod-list');
            $('.products').addClass('product-grid');
            $('.product').addClass('cart-prod-grid'); 
       });
       $('.add_to_cart_button,.product_type_grouped,.single_add_to_cart_button').prepend('<i class="icon-shopping-cart"></i>');
       $(".cart .quantity .qty").before('<button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown();this.nextElementSibling.onchange();">-</button>');
       $(".cart .quantity .qty").after('<button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp();this.previousElementSibling.onchange();">+</button>');

  $('.shop__img-sm-slide a').click(function (e) {
          if ($('.shop__img-big-slide img').attr('src') !== $(this).attr('href')) {
                  $('.shop__img-big-slide img').hide().attr('src', $(this).attr('href')).fadeIn(1000)
          }
          e.preventDefault()
  });

  $('.shop__quick').on('click', function () {
        $('.themeModal').addClass('themeModal-open');
         });
        
         $('.modal-close').on('click', function () {
                $('.themeModal').removeClass('themeModal-open');
                location.href = '';
         });

$('.sidebar__sub-category > i').click(function() {
        $('.sidebar__sub-menu').toggleClass('open-sidebar-category');
    
    });

    /* ---------------------------------------------------
		Back to Top
	-------------------------------------------------- */
        $(".footer__back").addClass("hidden-top");
        $(window).scroll(function () {
        if ($(this).scrollTop() === 0) {
            $(".footer__back").addClass("hidden-top")
        } else {
            $(".footer__back").removeClass("hidden-top")
        }
    });
    $('.footer__back').on("click", function () {
        $('body,html').animate({scrollTop:0}, 1200);
        return false;
    });
    $('.shop__youtube').magnificPopup({
        type: 'iframe',
        iframe: {
          patterns: {
             youtube: {
                index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
                id: 'v=', // String that splits URL in a two parts, second part should be %id%
                src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
                  },
              }
          }
      });
    
     });

