$(document).ready(function ($) {
    $('a.add_to_cart_button').on('click', function () {
        setTimeout(function(){
                location.href = '';
            }, 6000);
            var productID = $(this).attr('data-product_id');
            var data = {
                    id: productID,
                    action: 'messages_action',
                    nonce: messages.nonce,
            };
            $.ajax({
                    url: messages.url,
                    data: data,
                    type: 'POST',
                    dataType: 'json',
                    success: function (data) {
                            addProductNotice(data.product)
                    },
                    
            });
            
    });
    $('.yith-add-to-wishlist-button-block').on('click', function () {
        setTimeout(function(){
                location.href = '';
            }, 6000);
            $('#yith-wcwl-popup-message').remove();
            $('#yith-wcwl-message').remove();
            var productID = $(this).attr('data-product-id');
            var data = {
                    id: productID,
                    action: 'addwishlist_action',
                    nonce: addwishlist.nonce,
            };
            $.ajax({
                    url: addwishlist.url,
                    data: data,
                    type: 'POST',
                    dataType: 'json',
                    success: function (data) {
                            addProductNoticeaddwishlist(data.product)
                    }
            })
    })
});

function addProductNotice(title, thumb, text, type) {
    $.jGrowl.defaults.closer = !1;
    var tpl = thumb + '<h3>' + text + '</h3>';
    $.jGrowl(tpl, {
            life: 5000,
            header: title,
            speed: 'slow',
            theme: type,
            
    });
   
}

function addProductNoticeaddwishlist(title, thumb, text, type) {
    $.jGrowl.defaults.closer = !1;
    var tpl = thumb + '<h3>' + text + '</h3>';
    $.jGrowl(tpl, {
            life: 5000,
            header: title,
            speed: 'slow',
            theme: type
    })
}

 