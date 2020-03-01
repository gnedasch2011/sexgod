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
            console.log(res);
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