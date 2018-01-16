$(document).ready(function () {
    $('form').submit(function (event) {
        event.preventDefault();
        var formData = $('form').serialize();
        $.ajax({
            type: 'POST',
            dataType: "json",
            url: $('form').attr('action'),
            data: formData
        }).done(function (response) {
            swal({
                title: "Հաջողությամբ կոնվերտացվել է!",
                text:  response.data,
                icon: "success",
            });
        }).fail(function (data) {
            swal({
                title: "Ինչ որ բան են չի?",
                text: "Փորձեք ավելի ուշ!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            });
        });
    });
    });