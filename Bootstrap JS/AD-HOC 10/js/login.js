    let thisPage = "login";

    $(document).ready(function() {
        checkLanguage();
        $("#register").removeClass("d-none");
    });

    $('#submit').click(function(){
        let input_pass = document.getElementById("pass");
        input_pass.value = $.md5(input_pass.value);
    });
