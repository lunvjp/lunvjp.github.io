<?php
session_start();

if (isset($_SESSION['user'])) {
    header("location: ./profile/");
    exit();
}

// Register
if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $_POST['password'] = md5($pass);

    $info = implode('|', $_POST);
    $data = $email . '="' . $info . "|\"\n";
    if (file_put_contents("./file/user.ini", $data, FILE_APPEND)) {
        $_SESSION['ok'] = 'Sign up successfully';
        header('location: .');
        exit();
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Create your Account</title>
    <meta charset="utf-8">
    <meta name="author" content="LunVjp">
    <meta name="description" content="This is Register's Form">
    <meta name="keywords" content="account,id,pass,name">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--    <link href="https://lunvjp.github.io/css/register-style.css" rel="stylesheet" type="text/css">-->
    <link href="./css/register-style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="https://lunvjp.github.io/images/icon.ico">
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-101484659-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body>
<header>
    <img src="https://lunvjp.github.io/images/logo.png">
</header>
<div class="container">
    <div class="col-sm-12">
        <div class="main">
            <div class="login">
                <h5>Already have an account? <span id="log" onclick="displayLogin()">Log in.</span></h5>
            </div>
            <?php
            if (isset($_SESSION['ok'])) {
                echo "<div class='alert alert-success'>" . $_SESSION['ok'] . "</div>";
                unset($_SESSION['ok']);
            }
            ?>
            <div class="register">
                <h2>Sign up</h2>
                <form action="" method="post" name="register-form" id="register-form">
                    <div class="row form-group">
                        <input class="form-control" type="text" name="fullname" id="fullname" placeholder="Full Name"
                               value="<?php
                               ?>" onblur="checkFullName()">
                        <div id="checkFullName"></div>
                    </div>
                    <div class="row form-group">
                        <input class="form-control" type="text" name="email" id="email" placeholder="Email or username"
                               value="<?php
                               ?>" onblur="checkEmail()">
                        <div id="checkEmail"></div>
                    </div>
                    <div class="row form-group">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password"
                               value="<?php
                               ?>" onblur="checkPass()">
                        <div id="checkPass"></div>
                    </div>
                    <div class="row form-group">
                        <button type="button" class="btn btn-primary" onclick="checkAccount()">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>©2017 LunVjp</p>
</footer>

<div class="login-scene">
    <div class="login-container">
        <span class="close" onclick="closeLogin()"><i class="fa fa-times" aria-hidden="true"></i></span>
        <form action="" class="" id="login-form" method="post">
            <div class="avatar">
                <img src="https://lunvjp.github.io/images/vodanh.jpg">
            </div>
            <div class="row">
                <div class="fail-alert">
                    <div id="success"></div>
                </div>
            </div>
            <div class="row login-row">
                <input type="text" name="id" id="id" placeholder="Email or username">
                <div class="error1">
                    <div id="checkID"></div>
                </div>
            </div>
            <div class="row login-row">
                <input type="password" name="pass" id="pass" placeholder="Password">
                <div class="error1">
                    <div id="checkPASS"></div>
                </div>
            </div>
            <div class="row">
                <button class="btn btn-info" type="button" id="login-button">LOG IN
                </button>
            </div>
            <div class="row">
                <div class="fb-button">
                    <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="myModal" role="dialog">
    <div id="myDialog" class="animate">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" onclick="turnOffAlert()">&times;
                </button>
                <h5 class="modal-title">Notifications</h5>
            </div>
            <div class="modal-body">
                <p id="noti-text"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" onclick="turnOffAlert()">OK</button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://lunvjp.github.io/js/action.js"></script>
<script src="https://lunvjp.github.io/js/facebook.js"></script>
<script src="js/check.js"></script>
<script>

</script>
</body>

</html>
<?php
?>
