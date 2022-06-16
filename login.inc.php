<?php

if (isset($_POST["submit1"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];


    require_once 'regestir.php';
    require_once 'functions.inc.php';

    if (emptyInputlogin($email,$pwd) !== false) {

        header("location: login.php?error=emptyinput");
        exit();
    }

    loginuser($conn, $email, $pwd);
}
    else{
        header("location: login.php");
        exit();
    }
