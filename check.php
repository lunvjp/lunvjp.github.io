<?php
session_start();

if (isset($_POST['fullname'])) {
    $value = $_POST['fullname'];
    if ($value=='') echo "<div class='error'>You can't leave this empty.</div>";
}
if (isset($_POST['email'])) {
    $error='';
    $email = $_POST['email'];
    if ($email=='') $error = "<div class='error'>You can't leave this empty.</div>";
    $file = parse_ini_file("./file/user.ini");
    if (key_exists($email,$file)) $error = "<div class='error'>That username is taken. Try another.</div>";
    echo $error;
}
if (isset($_POST['password'])) {
    $pass = $_POST['password'];
    if ($pass=='') echo "<div class='error'>You can't leave this empty.</div>";
}

if (isset($_POST['id'])) {
    $error = '';
    if ($_POST['id']=='') $error = "Enter an email or username";
    else {
        if (!key_exists($_POST['id'], parse_ini_file("./file/user.ini"))) $error = "Couldn't find your Account";
        else $_SESSION['login'] = $_POST['id'];
    }
    echo $error;
}
if (isset($_POST['pass'])) {
    $error = ''; //echo "session login = ".$_SESSION['login'];
    if ($_POST['pass']=='') $error = "Enter a password";
    if (isset($_SESSION['login'])) { // Tồn tại tài khoản trong data
        $pass = $_POST['pass'];
        $file = parse_ini_file("./file/user.ini");
        $content = explode('|',$file[$_SESSION['login']]);
        if ($content[2] == md5($pass)) {
            $_SESSION['user'] = $_SESSION['login'];

            unset($_SESSION['login']);
            $error = "accepted";
        }
    }
    echo $error;
}
