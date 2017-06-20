var dem;
var days = 3650;

function daysLimit(days) {
    var day = new Date();
    day.setTime(day.getTime() + (days * 24 * 60 * 60 * 1000));
    var expires = day.toUTCString();
    return expires;
}

function TaoDanhSach(count) {
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
        TaoDanhSach(0);
        dem = 0;
    } else {
        dem = IndexOfItem();
    }
}

function KiemTraTaiKhoan(id, pass) {
    var check = 3;
    if (document.cookie.length > 0) {
        var temp = document.cookie;
        var accountList = temp.split(";");
        var taikhoan, matkhau;
        /* 1: Accepted, 2: Wrong Password, 3: Don't have ID */
        for (var i = 0; i < accountList.length; i++) {
            var cookies = accountList[i];
            var arrayCookie = cookies.split("=")[1];
            arrayCookie = arrayCookie.split(",");
            var item;
            for (var j = 0; j < arrayCookie.length; j++) {
                item = arrayCookie[j].split(": ");
                if (j === 2) {
                    taikhoan = item[1];
                }
                if (j === 3) {
                    matkhau = item[1];
                }
            }
            if (taikhoan === id) {
                if (matkhau === pass) check = 1;
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
    var check = KiemTraTaiKhoan(id, pass);
    if (check === 1) {
        alert("Accepted");
        return true;
    } else if (check === 2) {
        alert("Wrong password!");
        return false;
    } else {
        alert("Account doesn't exist!");
        return false;
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
        alert("Bạn chưa nhập họ");
    } else if (lastName === "") {
        alert("Bạn chưa nhập tên");
    } else if (email === "") {
        alert("Bạn chưa nhập email");
    } else if (pass === "") {
        alert("Bạn chưa nhập mật khẩu");
    } else if (confirm === "") {
        alert("Bạn chưa xác nhận mật khẩu");
    } else if (pass !== confirm) {
        alert("Xác nhận mật khẩu không đúng");
    } else {
        if (KiemTraTaiKhoan(email, pass) !== 3) {
            alert("That username is taken. Try another.");
        } else {
            reLoad();
            dem++;
            TaoDanhSach(dem);
            var phu = dem.toString();
            document.cookie = "Account" + phu + "=" + "firstName: " + firstName + ",lastName: " + lastName + ",email: " + email + ",pass: " + pass + ",phone: " + phone + ";expires=" + daysLimit(days) + ";domain=.lunvjp.tk;path=/";
            alert("Sign in succesfully");
        }
    }
}

function displayLogin() {
    $(".login-scene").css("display", "block");
}

function closeLogin() {
    $(".login-scene").css("display", "none");
}
