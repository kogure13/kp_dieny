$(document).ready(function(){
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
            ajaxAction('login');            
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
    if(action == "registrasi") {
        data = $('#registrasi_form').serializeArray();
    }else if(action == "login") {
        data = $('#login_form').serializeArray();
    }
    
    console.log(data)
    
    $.ajax({
        url: 'application/login/data_login.php',
        type: 'POST',
        dataType: 'json',
        data: data,        
        success: function(response){
            document.location.href = '?page=daftar';
        }
    });
}