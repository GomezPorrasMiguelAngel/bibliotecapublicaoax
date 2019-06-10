jQuery(document).ready(function () {
    $.get('listar_usuarios', function (data) {
        var html_select = '<option value="" >Elija un usuario</option>';
        for (var i = 0; i < data.length; i++)
            html_select += '<option value="' + data[i].id + '">' + data[i].nombre + '</option>'
        $('#usuarioLibro').html(html_select);
    });
});
