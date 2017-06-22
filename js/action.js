var cookieIndex;
var days = 3650;

function myAlert(t) {
    $("#noti-text").text(t);
    //alert("clienwidth=" + document.body.clientWidth);
    //alert("width=" + screen.width);
    //$("#alert-btn").click();
    //alert("clientheight=" + document.body.clientHeight);
    //alert("height=" + screen.height);
}

function daysLimit(days) {
    var day = new Date();
    day.setTime(day.getTime() + (days * 24 * 60 * 60 * 1000));
    var expires = day.toUTCString();
    return expires;
}

function makeCookie(count) {
    var temp = count.toString();
    document.cookie = "AccountNumbers=" + temp + ";expires=" + daysLimit(days) + ";domain=.lunvjp.tk;path=/";
}

function IndexOfItem() {
    var cookies = document.cookie;
    var accountList = cookies.split("; ");

    var index;
    for (var i = 0; i <= accountList.length; i++) {
        index = accountList[i].split("=");
        if (index[0] === "AccountNumbers") {
            return index[1];
        }
    }
}

function reLoad() {
    if (document.cookie.length === 0) {
        makeCookie(0);
        cookieIndex = 0;
    } else {
        cookieIndex = IndexOfItem();
    }
}

function checkCookie(id, pass) {
    var check = 3;
    if (document.cookie.length > 0) {
        var temp = document.cookie;
        var accountList = temp.split("; ");
        var idItem, passItem;
        /* 1: Accepted, 2: Wrong Password, 3: Don't have ID */
        for (var i = 0; i < accountList.length; i++) {
            var cookies = accountList[i];
            var arrayCookie = cookies.split("=")[1];
            arrayCookie = arrayCookie.split(",");
            var item;
            for (var j = 0; j < arrayCookie.length; j++) {
                item = arrayCookie[j].split(": ");
                if (j === 2) {
                    idItem = item[1];
                }
                if (j === 3) {
                    passItem = item[1];
                }
            }
            if (idItem === id) {
                if (passItem === pass) check = 1;
                else check = 2;
                break;
            }
        }
    }
    return check;
}

function checkAcount() {
    reLoad();
    var id = $("#id").val();
    var pass = $("#login-password").val();

    /* Check Here */
    var check = checkCookie(id, pass);
    if (check === 1) {
        alert("Accepted");
        myAlert("Accepted");
        $("#login-form").submit();
        //return true;
    } else if (check === 2) {
        alert("Wrong password!");
        //return false;
    } else {
        alert("Account doesn't exist!");
        myAlert("Account doesn't exist!");
        //return false;
    }
}

//0: no errow 1: wrong pass 2: confirm wrong
var checkAll = 0;
var clickNote = 0; // note 1 time when click on password input

function checkNote() {
    if (clickNote === 0) {
        note();
    }
}

function note() {
    alert("Available password is that:\n" +
        "- Password must be at least 8 characters, 1 number, 1 special character.\n" +
        "- Password can't start with a number.\n" +
        "- Password can't have * character, html tags, spaces, tabs");
    clickNote++;
}

function checkPassword() {
    var pass = $("#password").val();
    if (pass.length < 8) { //minilength
        alert("Password must be at least 8 characters");
        checkAll = 1;
    } else if (isNaN(Number(pass[0])) == false) {
        alert("Password can't start with a number");
        checkAll = 1;
    } else {
        var list = "@~`!#$%^&+=-[]\\\';,/{}|\":<>? ";

        var specialCharacterCount = 0,
            numberCount = 0,
            check = true; // don't have *
        for (var i = 0; i < pass.length; i++) {
            if (list.indexOf(pass.charAt(i)) > -1) {
                specialCharacterCount++;
            }
            if (pass[i] == "*") {
                alert("Password can't have * character");
                check = false; //have *
                checkAll = 1;
                break;
            }
            if (isNaN(Number(pass[i])) == false) numberCount++;
        }
        if (check == true) {
            if (specialCharacterCount == 0) {
                alert("Password must be at last 1 special character");
                checkAll = 1;
            } else if (numberCount == 0) {
                alert("Password must be at least 1 number");
                checkAll = 1;
            }
        }
    }
}

function checkConfirm() {
    var pass = $("#password").val();
    var confirm = $("#confirm").val();
    if (confirm.length > 0) {
        if (pass !== confirm) {
            alert("Confirm password wrong");
            checkAll = 2;
        }
    }
}

function createAccount() {
    var firstName = $("#firstname").val();
    var lastName = $("#lastname").val();
    var email = $("#email").val();
    var pass = $("#password").val();
    var confirm = $("#confirm").val();
    var phone = $("#phone").val();

    if (firstName === "") {
        alert("You have not entered the first name");
    } else if (lastName === "") {
        alert("You have not entered your last name");
    } else if (email === "") {
        alert("You have not entered the email");
    } else if (pass === "") {
        alert("You have not entered the password");
    } else if (confirm === "") {
        alert("You have not confimed the password");
    } else if (pass !== confirm) {
        alert("Confirm password wrong");
    } else if (phone === "") {
        alert("You have not entered the phone");
    } else {
        if (checkCookie(email, pass) !== 3) {
            alert("That username is taken. Try another.");
        } else {
            checkAll = 0;
            checkConfirm();
            checkPassword();
            if (checkAll === 1) {
                //note();
            } else if (checkAll === 2) {
                alert("Confirm password wrong");
            } else {
                reLoad();
                cookieIndex++;
                makeCookie(cookieIndex);
                var phu = cookieIndex.toString();
                document.cookie = "Account" + phu + "=" + "firstName: " + firstName + ",lastName: " + lastName + ",email: " + email + ",pass: " + pass + ",phone: " + phone + ";expires=" + daysLimit(days) + ";domain=.lunvjp.tk;path=/";
                alert("Sign in succesfully");
            }
        }
    }
}

function displayLogin() {
    $(".login-scene").css("display", "block");
}

function closeLogin() {
    $(".login-scene").css("display", "none");
}
