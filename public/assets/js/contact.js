$(function () {
    var form = $('#ajax_contact');
    var formMessages = $('#form-messages');
    formMessages.hide();
    $(form).submit(function (event) {
        event.preventDefault(); var formData = $(form).serialize(); $.ajax({ type: 'POST', url: $(form).attr('action'), data: formData }).done(function (response) { $(formMessages).removeClass('alert-danger'); $(formMessages).addClass('alert-success'); $(formMessages).text(response); formMessages.show(); setTimeout(function () { formMessages.hide(); }, 5000); $('#firstname').val(''); $('#lastname').val(''); $('#email').val(''); $('#phone').val(''); $('#message').val(''); }).fail(function (data) {
            $(formMessages).removeClass('alert-success'); $(formMessages).addClass('alert-danger'); if (data.responseText !== '') { $(formMessages).text(data.responseText); } else { $(formMessages).text('Oops! An error occured and your message could not be sent.'); }
            formMessages.show(); setTimeout(function () { formMessages.hide(); }, 5000);
        });
    });
});
