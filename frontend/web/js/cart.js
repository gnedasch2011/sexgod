let $gpButtonsAddInCart = $('.input-number'),
    $addInCartJs = '.addInCartJs';//класс добавления в корзину

$priceDetail = $('.priceDetail'),
    priceItem = parseInt($('.itemInfo').data('price')),
    $gpCount = $('.input-number__input'),

    $addCountItem = $('.input-number__add,.input-number__sub '),
    $removeCountItem = $('.input-number__sub'),

    $itemRow = '.cart-table__row',
    $gpButtonsAddInCartClass = '.input-number',
    $inputNumberInputClass = '.input-number__input',
    $cartDeleteItemClass = '.cartDeleteItemClass';


$($addInCartJs).on('click', function (e) {
    e.preventDefault()

    let idItem = $(this).attr('data-id')

    let dataItem = {"count": 1, "id": idItem};
    dataItem = JSON.stringify(dataItem);

    addInSessionCart(dataItem);

    setTimeout(function () {
        getHtmlItemsForDropCart();
        getCountItems('.getCountItems');
    }, 100);


    testingCart();
})


let testingCart = function () {
    return true;
    setTimeout(
        $.ajax({
            url: '/cart/test-cart/',
            method: "post",
            // data: data,

            success: function (data) {
                console.log(data);
            }
        }), 100
    )

}

testingCart();

$($addCountItem, $gpButtonsAddInCart).on('click', function (e) {
    e.preventDefault();

    let target = $(e.target);

    let id = $(target).parents($gpButtonsAddInCartClass).attr('data-id');
    $thisGpCount = $(target).parents($gpButtonsAddInCartClass).find($inputNumberInputClass);

    let currentCount = parseInt($thisGpCount.val());

    let dataItem = {"count": currentCount, "id": id};

    console.log(dataItem);
    dataItem = JSON.stringify(dataItem);

    //контекст куда вкидывать цену
    let totalPriceOneGoodClass = $(target).parents('.cart-table__row').find('.cart-table__column--total')

    if (addInSessionCart(dataItem)) {
        setTimeout(function () {
            getTotalPriceOneGood(id, totalPriceOneGoodClass);
            updateFullPriceInCart('.fullTotalCartClass');
            getCountItems('.getCountItems');
            getHtmlItemsForDropCart();
        }, 100)
    }


    testingCart();
})


let getHtmlItemsForDropCart = function () {
    $.ajax({
        url: '/cart/get-html-item-for-drop/',
        method: "post",

        success: function (data) {
            $('.dropcart__products-list').html(data)
        }
    });
}


/**
 * Обновить цену у товара
 * @param idGood
 * @param totalPriceOneGoodClass
 */
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

let updatePriceInDetail = function (target) {

    let price = $(target).parents('.cart-table__row').find('.cart-table__column--price')

    $priceDetail.text(price * returnCountItem() + " ₽")
}

let updateFullPriceInCart = function (fullTotalCartClass) {
    $.ajax({
        url: '/cart/get-full-price/',
        method: "post",

        success: function (data) {
            $(fullTotalCartClass).text(data)
        }
    });

}

let getCountItems = function (getCountItems) {
    $.ajax({
        url: '/cart/get-count-items/',
        method: "post",

        success: function (data) {
            $(getCountItems).text(data);
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

            updateFullPriceInCart('.fullTotalCartClass');
            return true;
        }
    });

    return true;
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


$(document).on('click', $cartDeleteItemClass, function (e) {
    e.preventDefault();
    let parent = $(e.target).parents('.dropBlockForRemove');
    let id = $(e.target).parents('.dropBlockForRemove').attr('data-id');

    let dataItem = {id: id};
    dataItem = JSON.stringify(dataItem);

    $.ajax({
        url: '/cart/cart-delete-item/',
        method: "post",
        dataType: 'json',
        data: {dataItem: dataItem},

        success: function (data) {
            parent.remove()
            // updateCart()
            // updateFullPriceInCart();
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

$(document).on('click', '.payment-methods__item', function (e) {
    e.preventDefault();

    $(".payment-methods__item").each(function (i, val) {
        $(val).find('input').attr('checked', false)
    })

    $(this).find('.input-radio__input').change();
    $(this).find('input').attr('checked', true);

})


$(document).on('click', '.checkout__agree', function (e) {
    e.preventDefault();
    if ($(this).find('input').is(':checked')) {
        $(this).find('input').prop('checked', false);
    } else {
        $(this).find('input').prop('checked', true);
    }

})

$(document).on('click', '.checkoutForm', function (e) {
    e.preventDefault();
    $("#checkout-form").submit();
})

$(document).on("beforeSubmit", "#checkout-form", function (event, messages) {
    var formdata = $(this).serialize();

    createOrder(formdata, function (data) {
        let orderId = data.id;
        console.log(orderId);
        setTimeout(generateOrderSuccess(orderId), 100)
    })
    return false;
});

let generateOrderSuccess = function (data) {
    let idOrder = data;

    $.ajax({
        url: '/order/ajax/generate-order-success/',
        method: "post",
        data: {idOrder: idOrder},

        success: function (data) {
            $('.page-header__container').fadeOut();
            $('.checkout').html(data);
            clearQuackBlockCart();
        }
    });
}

let clearQuackBlockCart = function () {
    $('.getCountItems').text('0');
}


let createOrder = function (data, callback = false) {

    $.ajax({
        url: '/order/ajax/checkout/',
        method: "post",
        data: data,
        dataType: "json",

        success: function (data) {
            if (callback) {
                callback(data);
            }
        }
    });

    return true;
}
