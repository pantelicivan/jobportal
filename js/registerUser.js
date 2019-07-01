$("#cancelModal").click(function () {

});

$("#regNowBtn").click(function () {

    $('#signInCloseBtn').trigger('click');



});


$("#loginsubmit").click(function () {

    var email = $('#email').val();
    var password = $('#password').val();
    var flag = true;
    var cPage = $('#currentPage').val();

    if (email == "") {
        $('#email').css('border-color', 'red');
        flag = false;
        output = '<div class="error">Unesite email adresu!</div>';
        $("#loginresult").hide().html(output).slideDown();
        return false;
    }


    if (password == "") {
        $('#password').css('border-color', 'red');

        flag = false;
        output = '<div class="error">Unesite password!</div>';
        $("#loginresult").hide().html(output).slideDown();
        return false;
    }


    if (flag) {

        $.ajax({
            type: 'post',
            url: 'signin.php',
            dataType: 'json',
            data: {

                email: email,
                password: password,
                loginsubmit: 1
            },
            beforeSend: function () {

                $('#loginsubmit').attr('disabled', true);

            },
            complete: function () {

                $('#loginsubmit').attr('disabled', false);

            },
            success: function (data) {
                if (data.type == 'error') {

                    output = '<div class="error">' + data.text + '</div>';
                    $("#loginresult").hide().html(output).slideDown();
                    return false;
                }
                else {
                    document.location.href = "employerAccount.php";

                }



            }
        });
    }

});

$("#regsubmit").click(function () {



    if (grecaptcha === undefined) {
        return false;
    }

    var response = grecaptcha.getResponse();

    if (!response) {
        return false;
    }

    var name = $('#signup-username').val();
    var email = $('#signup-email').val();
    var mob = $('#signup-mobile').val();
    var pass = $('#signup-password').val();
    var output = "";

    var flag = true;

    if (name == "") {
        $('#name').css('border-color', 'red');
        flag = false;
        output = '<div class="error">Unesite ime!</div>';
        $("#result").hide().html(output).slideDown();
        return false;
    }

    if (email == "") {
        $('#email').css('border-color', 'red');
        flag = false;
        output = '<div class="error">Unesite email!/div>';
        $("#result").hide().html(output).slideDown();
        return false;
    }


    if (pass == "") {
        $('#signup-password').css('border-color', 'red');

        flag = false;
        output = '<div class="error">Unesite password!</div>';
        $("#result").hide().html(output).slideDown();
        return false;
    }
    if (mob == "") {
        $('#mob').css('border-color', 'red');

        flag = false;
        output = '<div class="error">Unesite broj telefona</div>';
        $("#result").hide().html(output).slideDown();
        return false;
    }


    if (flag) {
        console.log("reached ajax");
        $.ajax({
            type: 'post',
            url: 'registerUser.php',
            dataType: 'json',
            data: {
                username: name,
                useremail: email,
                mob: mob,
                pass: pass,
                regsubmit: 1,
                captcha: response
            },
            beforeSend: function () {

                $('#regsubmit').attr('disabled', true);

            },
            complete: function () {
                grecaptcha.reset();
                $('#regsubmit').attr('disabled', false);

            },
            success: function (data) {
                console.log(data);
                if (data.type == 'error') {

                    output = '<div class="error">' + data.text + '</div>';
                    $("#result").hide().html(output).slideDown();
                    return false;
                } else {

                    console.log("reached success");
                    $('input').val('');
                    $('#signUpCloseBtn').trigger('click');
                    $('#regSuccessSubmit').trigger('click');
                    return true;

                }



            }
        });
    }
});




