$(document).ready(function ($) {
    $('.shop__quick').on('click', function () {
            var productID = $(this).attr('data-product-id');
            var data = {
                    id: productID,
                    action: 'quick_action',
                    nonce: quick.nonce,
            };
            $.ajax({
                    url: quick.url,
                    data: data,
                    type: 'POST',
                    dataType: 'json',
                    beforeSend: function (xhr) {
                            $('.shop__pop-content').text('Загрузка')
                    },
                    success: function (data) {
                            $('.shop__pop-content').html(data.product);
                            $('.single_add_to_cart_button').prepend('<i class="icon-shopping-cart"></i>');
                            $('.shop__img-sm-slide a').click(function (e) {
                                if ($('.shop__img-big-slide img').attr('src') !== $(this).attr('href')) {
                                        $('.shop__img-big-slide img').hide().attr('src', $(this).attr('href')).fadeIn(1000)
                                }
                                e.preventDefault()
                        });
                            $(".cart .quantity .qty").before('<button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown();this.nextElementSibling.onchange();">-</button>');
                            $(".cart .quantity .qty").after('<button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp();this.previousElementSibling.onchange();">+</button>');
                            $('.shop__pop-content').find('form.variations_form').wc_variation_form(); 
                            const smalltrumb = new Swiper(".shop__img-sm", {
                                spaceBetween: 14,
                                slidesPerView: 'auto',
                                slideToClickedSlide: true,
                                centeredSlides: false,
                                autoHeight: true,
                                initialSlide: 0,
                                effect: 'slide',
                                autoplay: true,
                                loop: true,
                                watchSlidesProgress: true,
                              });
                              const bigtrumb = new Swiper(".shop__img-big", {
                               autoplay: true,
                               effect: 'fade',
                               fadeEffect: {
                                 crossFade: true
                                },
                               slideToClickedSlide: true,
                             
                               thumbs: {
                                 swiper: smalltrumb,
                               },
                              });
                    }
            })
    })
});