$(document).ready(function () {
    $('#btn-daftar').on('click', function () {
        var pass1 = $('#password').val();
        var pass2 = $('#con_pass').val();

        if (pass1 !== pass2) {
            $('#con_pass').focus();
            swal("Warning", "Password not match", "warning");            
            return;
        }
                
    });
});

$(function () {
    $('#login_form').validate({
        rules: {
            nim: {
                required: true,
                minlength: 6
            },
            password: {
                required: true,
                pwcheck: /^[A-Za-z0-9\d=!\-@._*]+$/,
                minlength: 8
            }
        },
        messages: {
            nim: {
                required: 'Username cannot empty',
                minlength: 'min 6 characters'
            },
            password: {
                required: 'Password cannot empty',
                pwcheck: 'at least capital, lower and numeric allowed',
                minlength: 'min 8 characters'
            }
        },
        submitHandler: function (form) {
            $('#login_form').trigger('reset');
        }
    });

    $('#registrasi_form').validate({
        rules: {
            nim: {
                required: true,
                minlength: 6
            },
            password: {
                required: true,
                pwcheck: /^[A-Za-z0-9\d=!\-@._*]+$/,
                minlength: 8
            },
            con_pass: {
                required: true,
                pwcheck: /^[A-Za-z0-9\d=!\-@._*]+$/,
                minlength: 8
            },
            email: {
                required: true
            }
        },
        messages: {
            nim: {
                required: 'Username cannot empty',
                minlength: 'min 6 characters'
            },
            password: {
                required: 'Password cannot empty',
                pwcheck: 'at least capital, lower and numeric allowed',
                minlength: 'min 8 characters'
            },
            con_pass: {
                required: 'Confirm Password cannot empty',
                pwcheck: 'at least capital, lower and numeric allowed',
                minlength: 'min 8 characters'
            },
            email: {
                required: 'Email cannot empty'
            }
        },
        submitHandler: function (form) {
            
        }
    });
    
    $.validator.addMethod("pwcheck", function (value, element, regexpr) {
        return regexpr.test(value);
    });
});