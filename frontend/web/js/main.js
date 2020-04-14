$(document).on('click', '.buyOneClickJs', function (event) {
    event.preventDefault();
    let idItem = $(this).attr('data-id')
    console.log(idItem);
    $(this).ekkoLightbox({
        'remote': '/ajax/get-modal-buy1-click/?id=' + idItem
    });
});

$('#modalBuyOneClick').on('beforeSubmit', function () {

    var data = $(this);

    $.ajax({
        url: data.attr('action'),
        type: data.attr('method'),
        data: data.serializeArray(),

        success: function (res) {
            $('.modal-header__title').text('Успешно отправлено').css({"color": "#5baa00"});
            $('.modal-header__text p').text('Скоро мы вам перезвоним');
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
});

$(document).on('click', '.sexGodBuyOneClick_send', function (e) {
    e.preventDefault();
    let form = $(this).parents('#sexGodBuyOneClick')

    $.ajax({
        url: form.attr('action'),
        method: "post",
        data: form.serializeArray(),

        success: function (data) {
            $('.modal-header__title').text('Успешно отправлено').css({"color": "#5baa00"});
            $('.modal-header__text p').text('Скоро мы вам перезвоним');
            $('.modal-form').fadeOut();
        }
    });
})
svg4everybody();

$(document).on('click', '.getFuturesProductsInCategoryJS', function (e) {
    e.preventDefault();
    let dataIdCategory = $(this).attr('data-id-category');
    let limit = $(this).attr('data-limit');

    let placeForHtml = $(this).parents('.container').find('.productsResult');

    if (dataIdCategory) {
        $.ajax({
            url: '/good/ajax/get-futures-products-in-category/',
            method: "post",
            data: {
                dataIdCategory: dataIdCategory,
                limit: limit,
            },
            success: function (data) {
                checkActiveGroup($(e.target));
                $(placeForHtml).html(data)
            }
        });
    }

});

$(document).on('click', '.getRandomFuteresProduct', function (e) {
    e.preventDefault();
    let dataIdCategory = $(e.target).parents('.container').find('.block-header__group--active').attr('data-id-category');


    let limit = $(e.target).parents('.container').find('.block-header__group--active').attr('data-limit');
    let featured = true;
    let random = true;
    let placeForHtml = $(this).parents('.container').find('.productsResult')

    $.ajax({
        url: '/good/ajax/get-futures-products-in-category/',
        method: "post",
        data: {
            dataIdCategory: dataIdCategory,
            featured: featured,
            random: random,
            limit: limit,
        },

        success: function (data) {
            $(placeForHtml).html(data)
        }
    });
});


$(document).on('click', '.getProducts', function (e) {
    e.preventDefault();
    let getProductsParams = JSON.parse($(this).attr('data-getProductsParams'));
    let placeForHtml = getProductsParams.classForResult;

    if (placeForHtml) {
        $.ajax({
            url: '/good/ajax/get-products/',
            method: "post",
            data: {
                getProductsParams: getProductsParams
            },

            success: function (data) {
                checkActiveGroup($(e.target));
                $(placeForHtml).html(data)
            }
        });
    }

});

$(document).on('click', '.getRandomProducts', function (e) {
    e.preventDefault();
    let getProductsParams = JSON.parse($(this).attr('data-getProductsParams'));
    let categoryId = $(e.target).parents('.container').find('.block-header__group--active').attr('data-id-category');

    getProductsParams.categoryId = categoryId;
    let placeForHtml = getProductsParams.classForResult;
        console.log(getProductsParams);
    if (placeForHtml) {
        $.ajax({
            url: '/good/ajax/get-products/',
            method: "post",
            data: {
                getProductsParams: getProductsParams
            },

            success: function (data) {
                $(placeForHtml).html(data)
            }
        });
    }

});


let checkActiveGroup = function (context) {

    $groupList = $(context).parents('.block-header__groups-list');

    $('li', $groupList).each(function (i, val) {
        $(val).find('.getProducts').removeClass('block-header__group--active')
    })
        console.log('fd');
    $(context).addClass('block-header__group--active');
    return true;
};

$(document).on('click', '.openHiddenItemsJs', function (e) {
    e.preventDefault();

    if (($('.hiddenItemsCssCategory').css('display')) == 'none') {
        $('.hiddenItemsCssCategory').css({'display': "flex"})
    } else {
        $('.hiddenItemsCssCategory').css({'display': "none"})
    }
});


