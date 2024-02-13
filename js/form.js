$(function() {

    function validateEmail(email) {
        var email = jQuery.trim(email);
        var regEmail = /^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/;
        email = email.toUpperCase();
        if (email.match(regEmail)) {
            return true;
        } else {
            return false;
        }
    }
    $('input:radio').each(function () {
        var rname = $(this).attr('name');
        $(this).addClass(''+rname+'')
    });

    $("form").submit(function() {
        this_form = $(this);
        // alert('g')
        if (!validate_form(this_form)){

            return false;
        }else{
            $('button',this).attr('disabled','true');
        }

    });


    function validate_form(form) {
        var valid = true;
        $('.required').removeClass('has-error');
        $('.error-input').remove()
        $('.required', form).each(function() {
            if ($(this).hasClass('gtz')) {
                if (parseInt($(this).val()) <= 0) {
                    valid = false;
                    $(this).addClass('has-error');

                // $(this).parent().append('<span class="error-input">' + $(this).attr('data-validation-message') + '</span>');
                }
            }
            if ($(this).val() == "") {
                valid = false;
                $(this).addClass('has-error');
                // $(this).parent().append('<span class="error-input">' + $(this).attr('data-validation-message') + '</span>');
            }

        });
        $('input#email', form).each(function() {
            if ($(this).val() != "") {
                if (!validateEmail($(this).val())) {
                    valid = false;
                $(this).parent().append('<span class="error-input">' + $(this).attr('data-validation-message') + '</span>');
                    // $(this).addClass('has-error');
                }
            }
        });


        $('.cs-select select', form).each(function() {
            if ($(this).val() == '') {
                valid = false;
                // $(this).parent().append('<span class="error-input">' + $(this).attr('data-validation-message') + '</span>');
            }
        });

        //Make groups
        var names = []
        $('input:radio').each(function () {
            var rname = $(this).attr('name');
            if ($.inArray(rname, names) == -1) names.push(rname);
        });

        $.each(names, function (i,name) {
                    $('input[name="' + name + '"]').removeClass('has-error');
                if ($('input[name="' + name + '"]:checked').length == 0) {
                    valid = false;
                    $('input[name="' + name + '"]').addClass('has-error');
                    // $('.'+name).parent().append('<span class="error-input">' +$('.'+name).attr('data-validation-message') + '</span>');
                   // alert(name)

                }


        });


        return valid;
    }


});
