jQuery(document).ready(function () {
    $.get('listar_estantes', function (data) {
        var html_select = '<option value="" disabled>Elija un estante</option>';
        for (var i = 0; i < data.length; i++)
            html_select += '<option value="' + data[i].idEstante + '">' + data[i].nombre + '</option>'
        $('#book-lugar').html(html_select);
    });
});