<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="assets/css/styles1.css">
</head>
<body>
    <div class="container">
       
        <form class="form" id="createAccount" action="signup.inc.php" method="POST">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input"  placeholder="Username" name="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input"  placeholder="Email Address" name="Email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input"  placeholder="Password" name="pwd">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input"  placeholder="Confirm password" name="conpwd">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="login.php" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>

        <?php

         if (isset($_GET["error"])) {
            if ($_GET["error"]== "emptyinput") {
                echo "<span class='errorh'><p>Fill in all Fields</p> </span>";
            }

            else if ($_GET["error"]== "invalidUid"){
                echo "<span class='errorh'><p>Invalid username</p> </span>";
            } 

            else if ($_GET["error"]== "invalidEmail"){
                echo "<span class='errorh'><p>Choose a proper Email</p> </span>";
            } 

            else if ($_GET["error"]== "passwordsdontmatch"){
                echo "<span class='errorh'><p>The passwords are not the same</p> </span>";
            } 

            else if ($_GET["error"]== "email_is_used"){
                echo "<span class='errorh'><p>This email is used</p> </span>";
            } 
            
            else if ($_GET["error"]== "none"){
                echo "<span class='regdone'><p>You have signed</p> </span>";
            } 

        }
    
    ?>


    </div>

    



    
    <script src="assets/js/main.js"></script>
</body>
