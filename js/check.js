//--------------- REGISTER ---------------
function checkFullName() {
    str = $("#fullname").val();
    $.ajax({
        url: "check.php",
        type: "POST",
        data: {
            fullname : str
        },
        success: function (data) {
            $("#checkFullName").html(data);
        }
    });
}

function checkEmail() {
    str = $("#email").val();
    $.ajax({
        url : "check.php",
        type: "POST",
        data: {
            email : str
        },
        success: function (data) {
            $("#checkEmail").html(data);
        }
    });
}

function checkPass() {
    str = $("#password").val();
    $.ajax({
        url : "check.php",
        type: "POST",
        data: {
            password : str
        },
        success: function (data) {
            $("#checkPass").html(data);
        }
    });
}

function checkAccount() {
    checkFullName();
    checkEmail();
    checkPass();
    if ($("#fullname").val()!==""&&$("#email").val()!==""&&$("#password").val()!=="") {
        if ($("#checkFullName").text() === "" && $("#checkEmail").text() === "" && $("#checkPass").text() === "") {
            $("#register-form").submit();
        }
    }
}

//--------------- LOGIN ---------------
function checkID() {
    str = $("#id").val();
    $.ajax({
        url: "check.php",
        type: "POST",
        data :{
            id : str
        },
        success: function (data) {
            $("#checkID").html(data);
        }
    });
}

function checkPASS() {
    str = $("#pass").val();
    $.ajax({
        url: "check.php",
        type: "POST",
        data :{
            pass : str
        },
        success: function (data) {
            if (data !== "accepted") $("#checkPASS").html(data);
        }
    });
}

function checkAll() {
    checkID();
    checkPASS();
    var user = $("#id").val();
    var password = $("#pass").val();
    if (user !== "" && password !== "") {
        if ($("#checkID").text() === "") {
            $.ajax(
                {
                    url: "check.php",
                    type: "POST",
                    data: {
                        id: user,
                        pass: password
                    },
                    cache: false,
                    success: function (data) {
                        if (data === "accepted") $("#login-form").submit();
                        else {
                            $('#success').html("<div class='alert alert-danger'>");
                            $('#success > .alert-danger').append("Wrong password. Try again");
                            $('#success > .alert-danger').append('</div>');
                        }
                    },
                    error: function () {
//                                console.log("WRONG");
                    }
                });
        }
    }
}

$(function () {
    $("#login-button").click(function () {
//            $(".login-container").css({"background-color":"rgb(242, 242, 242)","background-attachment":"fixed"});
        checkAll();
        $(this).button("loading").delay(200).queue(function(){
            $(this).button("reset");
            $(this).dequeue();
//                $(".login-container").css("background-color","rgb(255, 255, 255)");
        });
    });

    $("#id").blur(function () {
        checkID();
    });

    $("#pass").blur(function () {
        checkPASS();
    });

    $("#login-form").keypress(function (e){
        if (e.keyCode === 13) {
            $("#login-button").click();
        }
    });
});