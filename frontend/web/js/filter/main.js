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


$(document).on('click', '.filter-list__item', function (e) {
    e.preventDefault();
    console.log('change');
    let selectorMainFilter = "#main_filter";

    let params = getParamsWithFilters(selectorMainFilter);
    let action = getAction(selectorMainFilter);

    getProducts(params, action);
});


let getAction = function (selectorMainFilter) {
    return $(selectorMainFilter).attr('action');
}

let getProducts = function (params, action) {


    $.ajax({
        url: action,
        method: "post",
        data: {params: params},

        success: function (data) {
            console.log(data);
        }
    });
}

let getParamsWithFilters = function (selectorFilter) {
    let getParamsWithFilters = $(selectorFilter).serialize();

    return getParamsWithFilters;
}