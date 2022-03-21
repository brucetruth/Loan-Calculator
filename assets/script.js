(function ($) {
    'use strict';
    var form = $('.cal__form'),
        message = $('.cal__msg'),
        form_data;
    // Success function
    function done_func(response) {
        message.fadeIn().removeClass('alert-danger').addClass('alert-success');
        message.text(response.message + ' ' + response.value);
        setTimeout(function () {
            message.fadeOut();
        }, 2000);

        $('.cal_msg').fadeIn();
        $('.cal_msg').html(response.message + ' <b><br>' + response.value+'</b><br>pay: '+response.amount);
        //form.find('input:not([type="submit"]), textarea').val('');
    }
    // fail function
    function fail_func(data) {
        message.fadeIn().removeClass('alert-success').addClass('alert-success');
        message.text(data.responseText);
        setTimeout(function () {
            message.fadeOut();
        }, 2000);
    }
    
    form.submit(function (e) {
        $('.cal_msg').fadeOut();
        e.preventDefault();
        form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form_data,
            dataType: 'json',
            cache: false,
            processData: false,
        })
        .done(done_func)
        .fail(fail_func);
    });
    
})(jQuery);