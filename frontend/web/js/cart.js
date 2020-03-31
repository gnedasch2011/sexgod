let $gpButtonsAddInCart = $('.input-number'),
    $priceDetail = $('.priceDetail'),
    priceItem = parseInt($('.itemInfo').data('price')),
    $gpCount = $('.input-number__input'),

    $addCountItem = $('.input-number__add,.input-number__sub '),
    $removeCountItem = $('.input-number__sub'),

    $itemRow = '.cart-table__row',
    $gpButtonsAddInCartClass = '.input-number',
    $inputNumberInputClass = '.input-number__input'
;


$('.addInCart').on('click', function (e) {
    e.preventDefault()
    // var idItem = $(this).parent(".item").data('id')
    let idItem = $(this).attr('data-id')

    let dataItem = {"count": 1, "id": idItem};
    dataItem = JSON.stringify(dataItem);

    addInSessionCart(dataItem)
    updatePriceInDetail();
    getCountItems();
})

let returnIdItem = function () {
    return parseInt($('.itemInfo').data('id'));
}

let returnCountItem = function () {
    return parseInt($gpCount.text())
}

let returnPriceItem = function () {
    return parseInt($('.itemInfo').data('price'))
}


let updatePriceInDetail = function (target) {

    let price = $(target).parents('.cart-table__row').find('.cart-table__column--price')

    $priceDetail.text(price * returnCountItem() + " ₽")
}

let updateFullPriceInCart = function () {
    $.ajax({
        url: '/cart/get-full-price/',
        method: "post",

        success: function (data) {
            $('.fullPriceInCart').text(data);
        }
    });

}

let getCountItems = function () {
    $.ajax({
        url: '/cart/get-count-items/',
        method: "post",

        success: function (data) {
            console.log(data);
            $('.getCountItems').text(data);
        }
    });
}

let addInSessionCart = function (dataItem) {

    $.ajax({
        url: '/cart/add-in-session-cart/',
        method: "post",
        dataType: 'json',
        data: {dataItem: dataItem},

        success: function (data) {
            console.log(data);
            // updateCart()
            // updateFullPriceInCart();
            return true;
        }
    });

    return true;
}


$($addCountItem, $gpButtonsAddInCart).on('click', function (e) {
    e.preventDefault();
    
    let target = $(e.target);
    let id = $(target).parents($itemRow).attr('data-id');
    
    $thisGpCount = $(target).parents($gpButtonsAddInCartClass).find($inputNumberInputClass);

    let currentCount = parseInt($thisGpCount.val());
    
    let dataItem = {"count": currentCount, "id": id};
        
    console.log(dataItem);
    dataItem = JSON.stringify(dataItem);

    //контекст куда вкидывать цену
    let totalPriceOneGoodClass = $(target).parents('.cart-table__row').find('.cart-table__column--total')

    if(addInSessionCart(dataItem)){
        getTotalPriceOneGood(id, totalPriceOneGoodClass);
    }

})

let getTotalPriceOneGood = function (idGood, totalPriceOneGoodClass) {

    $.ajax({
        url: '/cart/get-total-price-one-good/',
        method: "post",
        data: {idGood: idGood},

        success: function (data) {
            totalPriceOneGoodClass.html(data)
        }
    });
}

let getCartInfo = function () {
    $.ajax({
        url: '/cart/get-cart-info',
        method: "post",
        data: data,

        success: function (data) {
            console.log(data);
        }
    });
}


$('.gp-minus', $gpButtonsAddInCart).on('click', function (e) {

    let target = $(e.target);
    let id = $(target).parents('.itemCart').attr('data-id');

    $thisGpCount = $(target).parents('.gp-buttons').find('.gp-count');
    let currentCount = parseInt($thisGpCount.text());

    if (currentCount <= 1) {
        return false;
    }

    currentCount--
    $thisGpCount.text(currentCount)

    let dataItem = {"count": currentCount, "id": id};
    dataItem = JSON.stringify(dataItem);


    addInSessionCart(dataItem)
    updatePriceInDetail();
})

$('.gp-count').on('blur', function () {
    updatePriceInDetail();
})

$('.cartDeleteItem').on('click', function (e) {
    e.preventDefault();
    let parent = $(e.target).parents('tr');
    let id = $(e.target).parents('tr').attr('data-id');
    let dataItem = {id: id};
    parent.remove()
    dataItem = JSON.stringify(dataItem);

    $.ajax({
        url: '/cart/cart-delete-item/',
        method: "post",
        dataType: 'json',
        data: {dataItem: dataItem},

        success: function (data) {
            parent.remove()
            updateCart()
            updateFullPriceInCart();
        }
    });
})


$('.addItemInCart').on('click', function (e) {
    e.preventDefault();

    let count = returnCountItem();
    let id = returnIdItem();

    let dataItem = {count: count, id: id};
    dataItem = JSON.stringify(dataItem);
    console.log(dataItem);
    $.ajax({
        url: '/cart/add-in-session-cart',
        method: "post",
        dataType: 'json',
        data: {dataItem: dataItem},

        success: function () {
            updateCart()
        }
    });
})


// $(document).on('click','.addInCart',function (e) {
//        e.preventDefault();
//        let productId = $(this).attr('data-id')
//     console.log(productId);
// })


let updateCart = function () {

    return false;
    $.ajax({
        url: '/cart/ajax-update-cart/',
        method: "post",
        dataType: 'html',

        success: function (data) {
            $('.jsHeaderCart').html(data);
        }
    });
}

// $(document).on('click', '.header_cart', function () {
//     $('.cart-detail').toggle()
// })
//
// $(document).on('mouseleave', '.header_cart', function () {
//     $('.cart-detail').hide()
// })

$(document).on('click', '.jsClearCart', function () {
    $.ajax({
        url: '/cart/ajax-clear',
        method: "post",
        dataType: 'json',

        success: function () {
            updateCart()
        }
    });
})


$(function () {
    $(".form__call_modal").click(function (e) {
        e.preventDefault();
        $("#myModal").modal('show');
    });
});

var name = 'info@';
var nameHost = 'm-s-cam.ru';
var fullName = name + nameHost;


$('.email_adress_fuck_bot').text(fullName);

$('.btn_form_call').on('click', function (e) {

    e.preventDefault()
    var data = $(this).parents('form').serialize()

    $.ajax({
        url: '/ajax/create-lead',
        method: "post",

        data: data,
        success: function (data) {
            if (data) {
                $('.form_h2_success').text('Спасибо, скоро мы вам перезвоним')

            }
        }
    });
})

$(document).on('click', '.openCheckoutJs', function (e) {
    e.preventDefault();
    $(".openCheckoutJs").show();
    $(".cartBlockJs").hide();
})


$(document).on('click', '.oneClickAndDisabled', function (e) {
    e.preventDefault();

    if ($(this).hasClass('goodsInCart')) {
        console.log($(this));
        window.location.href = "/cart/";
    }

    $(this).addClass('goodsInCart').text('Добавлено');

})

$(function () {
    //2. Получить элемент, к которому необходимо добавить маску
    // $("#callleadform-phone").mask("8(999) 999-9999");
});


(function () {
    // $("#order-phone").mask("8(999) 999-9999");
})()
