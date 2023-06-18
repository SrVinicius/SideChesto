$("form").submit(function (e) {
    e.preventDefault();//js
    var form = $(this);
    var nome = $(this).attr("name")
    var id = $(this).attr("id")
    var validation = $(this).attr("validation")
    if (validation == 1) {
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            enctype: 'multipart/form-data',
            //data: $(this).serialize(),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                Carregamento();
            },
            success: function (data) {
                // add logica
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