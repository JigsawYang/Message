$(function() {
    $("#regform").validate({
        rules: {
            username: {
                required: true,
                minlength: 6,
                maxlength: 15
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 10
            },
            repassword: {
                required: true,
                minlength: 6,
                maxlength: 10,
                equalTo: '#password'
            }
        }
    });
    $("#loginform").validate({
        rules: {
            adname: {
                required: true,
                minlength: 6,
                maxlength: 15
            },
            psd: {
                required: true,
                minlength: 6,
                maxlength: 10
            }
        }
    });
    $("#addtextform").validate({
        rules: {
            title: {
                required: true,
                maxlength: 90
            },
            msg: {
                required: true,
                maxlength: 10000
            }
        }
    });
})