$(document).ready(function() {

    //cargar_datos();

    function cargar_datos(query) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "observador",
            method: "POST",
            data: { query: query },
            success: function(data) {
                $('#content-table').html(data);
            }
        });
    }
    $('#input-buscador').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            cargar_datos(search);
        } else {
            // cargar_datos();
            console.log('There is nothing... to search');

            $.ajax({
                method: 'GET',
                url: '/buscarlibro',
                data: { search, search },
                dataType: 'html',
                success: function(response) {
                    var result = $('<div />').append(response).find('#content-table').html();
                    $('#content-table').html(result);
                },
                error: function(e) {
                    console.log(e);
                }
            });
        }
    });
});