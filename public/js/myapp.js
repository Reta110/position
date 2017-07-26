$.validate({
    lang: 'es'
});

$('#message').hide();

$("#form").submit(function (event) {
    event.preventDefault(); //prevent default action

    var token = $("input[name='_token']").val();
    var url = $(this).closest('#form').find('.url').val();
    console.log('url' + url);

    $.ajax({
        url: "/",
        method: 'POST',
        data: {
            _token: token,
            "url": url,
        },
        success: function (data) {

            $('#message').val('- El número de imágenes encontradas es: ' + data.images + '. \n' + '- La web está utilizando: ' + data.links + ' archivos de css.' + '. \n' + '- ' + data.styles + ' se está utilizando CSS dentro de la página');
            $("#message").show().delay(15000).fadeOut();
        }
    });

    console.log('DONE');

});