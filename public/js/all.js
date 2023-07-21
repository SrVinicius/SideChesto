$("form").submit(function (e) {
    //teste js
    e.preventDefault();
    var form = $(this);
    var nome = $(this).attr("name")
    var id = $(this).attr("id")
    var validation = $(this).attr("validation")
    if (validation == 1) {
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            enctype: 'multipart/form-data',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                Carregamento();
            },
            success: function (data) {
            },
            error: function (jqXHR, textStatus, errorThrown) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: jqXHR['responseJSON']['message'],
                    confirmButtonColor: "#f52525",
                });
            }
        }).fail(function (jqXHR, textStatus, msg) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: jqXHR['responseJSON']['message'],
                confirmButtonColor: "#f52525",
            });
        });
    }
});