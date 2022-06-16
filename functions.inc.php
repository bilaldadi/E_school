<?php

    function emptyInputSignup($Uname,$Email,$pwd,$conpwd){
        $result;
        if (empty($Uname) || empty($Email) || empty($pwd) || empty($conpwd)) {
            $result=true;    
        }

        else{
            $result=false;
        }
        return $result;
    }

    function invalidUid($Uname){
        $result;
        if (!preg_match("/^[a-zA-z0-9]*$/",$Uname)) {
            $result=true;    
        }

        else{
            $result=false;
        }
        return $result;
    }


    function invalidEmail($Email){
        $result;
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $result=true;    
        }

        else{
            $result=false;
        }
        return $result;
    }

    function pwdMatch($pwd, $conpwd){
        $result;
        if ($pwd !== $conpwd) {
            $result=true;    
        }

        else{
            $result=false;
        }
        return $result;
    }


    function uidExists($conn, $Email){
       $sql= "SELECT * FROM users WHERE email = ?;";
       $stmt= mysqli_stmt_init($conn);
       if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=stmtFalid");
        exit();
       }  

       mysqli_stmt_bind_param($stmt , "s", $Email);
       mysqli_stmt_execute($stmt);

       $resultData= mysqli_stmt_get_result($stmt);

       if ($row= mysqli_fetch_assoc($resultData)) {
           return $row;
       }
       else{
           $result = false;
           return $result;
       }

       mysqli_stmt_close($stmt);
    }


    function createUser($conn, $Uname, $Email, $pwd){
        $sql= "INSERT INTO users (Username, email,pwd ) VALUES (?,?,?)";
        $stmt= mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("location: signup.php?error=stmtFalid");
         exit();
        }  

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $Uname, $Email, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: signup.php?error=none");
         exit();

     }

     function emptyInputlogin($Uname,$pwd){
        $result;
        if (empty($Uname) || empty($pwd)) {
            $result=true;    
        }

        else{
            $result=false;
        }
        return $result;
    }

     function loginuser($conn, $email, $pwd){

         $uidExists =  uidExists($conn, $email);

         if ($uidExists === false) {
            header("location: login.php?error=user_is_not_exist");
            exit();
         }

         $pwdHashed = $uidExists["pwd"];
         $checkpwd = password_verify($pwd, $pwdHashed);

         if ($checkpwd === false) {
            header("location: login.php?error=Password_is_wrong");
            exit();
         }

         else if($checkpwd === true){
             session_start();
             $_SESSION["userid"] = $uidExists["usersId"];
             $_SESSION["useruid"] = $uidExists["Username"];
             header("location: index.php");
             exit();

         }

    }