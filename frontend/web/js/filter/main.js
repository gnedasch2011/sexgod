$(document).on('click', '.filter-list__item', function (e) {
    e.preventDefault();

    let on = $(this).find('input').attr('checked');
    if (!on) {
        $(this).find('input').attr('checked', true);
        $(this).find('.input-check__box').css({"background": "#cc3333"});
        $(this).parents('.input-check__box').css({"background": "#cc3333"});
    } else {
        $(this).find('input').attr('checked', false);
        $(this).find('.input-check__box').css({"background": "none"});
    }

})


//multiple-choice

$(document).on('click', '.filter-list__item', function (e) {
    e.preventDefault();

    executeGetProduct("#main_filter", ".products-list__body");

});


//range
$(document).on('mouseup', '.noUi-touch-area', function (e) {
    e.preventDefault();

    executeGetProduct("#main_filter", ".products-list__body");
});


let executeGetProduct = function (selectorMainFilter, selectorForResult) {

    let params = getParamsWithFilters(selectorMainFilter);
    let action = getAction(selectorMainFilter);

    let products = getProducts(params, action, selectorForResult);

    $(selectorForResult).html(products);
};

let getAction = function (selectorMainFilter) {
    return $(selectorMainFilter).attr('action');
};

let getProducts = function (params, action, selectorForResult) {

    $.ajax({
        url: action,
        method: "post",
        data: {getProductsParams: params},

        success: function (data) {
            $(selectorForResult).html(data);
        }
    });

};

let getParamsWithFilters = function (selectorFilter) {
    let getParamsWithFilters = $(selectorFilter).serialize();

    return getParamsWithFilters;
};

$(document).on('mouseenter', '.filter-categories__item--parent', function (e) {
    $(this).next('.submenu-cat').show();
});

$(document).on('mouseleave', '.submenu-cat', function (e) {
    $(this).hide();
});