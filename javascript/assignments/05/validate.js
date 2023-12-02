$(function(){
    $('#form').validate({
        errorPlacement: function(error, element) {
            error.appendTo(element.parent());
            if (element.attr("name") == "gender"
                || element.attr("name") == "spam[]") {
                    $('<br>').prependTo(element.parent());
                error.prependTo(element.parent());
            }
        },
        success: function(label) {
            label.parent().removeClass("error-parent");
        },
        highlight: function(element, errorClass) {
            $(element).parent().addClass("error-parent");
            $(element).parent().find(".error").fadeOut(function() {
                $(this).fadeIn();
            });
        },
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            password: {
                required: true,
                minlength: 7
            },
            gender: {
                required: true
            },
            'spam[]': {
                required: true,
                minlength: 4
            },
            vehicle: {
                required: true
            },
            textarea: {
                required: true
            }
        },
        messages: {
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 5 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 7 characters long"
            },
            gender: {
                required: "Please select your gender."
            },
            'spam[]': {
                required: "Please choose at least 4 travel methods.",
                minlength: "You must choose at least 4 travel methods."
            }
        }
    });
});