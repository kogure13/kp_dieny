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
            email: {
                required: 'Email cannot empty'
            }
        },
        submitHandler: function (form) {
            ajaxAction('registrasi');
        }
    });

    $.validator.addMethod("pwcheck", function (value, element, regexpr) {
        return regexpr.test(value);
    });
});

function ajaxAction(action) {
    data = $('#'+action+'_form').serializeArray();  
    console.log(data)
    
    $.ajax({
        type: 'POST',
        url: 'application/login/data_login.php',
        data: data,
        dataType: 'json',
        success: function(response){
            document.location.href = index.php;
            swal("Success", "Regristation success", "success");            
            return;
        }
    });
}