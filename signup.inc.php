<?php

    if (isset($_POST["submit"])) {
        
        $Uname = $_POST["Username"];
        $Email = $_POST["Email"];
        $pwd = $_POST["pwd"];
        $conpwd = $_POST["conpwd"];

        require_once 'regestir.php';
        require_once 'functions.inc.php';

        if (emptyInputSignup($Uname,$Email,$pwd,$conpwd) !== false) {

            header("location: signup.php?error=emptyinput");
            exit();
        }

        if (invalidUid($Uname) !==false) {

            header("location: signup.php?error=invalidUid");
            exit();
        }

        if (invalidEmail($Email) !==false) {

            header("location: signup.php?error=invalidEmail");
            exit();
        }

        if (pwdMatch($pwd, $conpwd) !==false) {

            header("location: signup.php?error=passwordsdontmatch");
            exit();
        }

        if (uidExists($conn, $Email ) !==false) {

            header("location: signup.php?error=email_is_used");
            exit();
        }

        createUser($conn, $Uname, $Email, $pwd);
    }

    else{
        header("location: signup.php?error=noaction");
        exit();
    }

?>

