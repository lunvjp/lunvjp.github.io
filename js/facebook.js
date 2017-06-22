function statusChangeCallback(response) {
    if (response.status === 'connected') {
        // Logged into your app and Facebook.
        alert("Accepted");
        $("#login-form").submit();
    }
}

function checkLoginState() {
    FB.getLoginStatus(function (response) {
        statusChangeCallback(response);
    });
}

window.fbAsyncInit = function () {
    FB.init({
        appId: '309350989506967',
        cookie: true,
        xfbml: true,
        version: 'v2.8'
    });
    /* Auto Check Facebook and login
    FB.getLoginStatus(function (response) {
        statusChangeCallback(response);
    });
    */
};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
