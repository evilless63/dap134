$(document).ready(function() {
    $('#create_document').on('click', function (e) {

        e.preventDefault();
        var title = $('#documentCreateFileTitle').val();
        var file_path = $('#documentCreateFile').val();

        $.ajax({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            type: "POST",
            url: 'http://dap134/documents',
            data: {title: title, file_path: file_path},
            dataType: 'json',
            success: function( msg ) {
                $("#ajaxResponse").append("<div>"+msg+"</div>");
            }
        });
    });
});