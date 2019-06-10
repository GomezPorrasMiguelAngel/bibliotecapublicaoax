jQuery(document).ready(function () {
    $.get('listar_libros', function (data) {
        var html_select = '<option value="" >Elija un libro</option>';
        for (var i = 0; i < data.length; i++)
            html_select += '<option value="' + data[i].idLibro + '">' + data[i].titulo + '</option>'
        $('#libro').html(html_select);
    });
});