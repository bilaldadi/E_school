<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="assets/css/styles1.css">
</head>
<body>
  <div class="container">
     <form class="form" id="login" action="login.inc.php" method="POST">
            <h1 class="form__title">Login</h1>
            
            <div class="form__input-group">
                <input type="text" class="form__input"  placeholder="Email" name="email">
                
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input"  placeholder="Password" name="pwd">
                
            </div>
            <button class="form__button" type="submit" name="submit1">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./signup.php">Don't have an account? Create account</a>
            </p>
        </form>

        <?php

    if (isset($_GET["error"])) {
        if ($_GET["error"]== "emptyinput") {
       echo "<span class='errorh'><p>Fill in all Fields</p> </span>";
   }
   else if ($_GET["error"]== "Password_is_wrong"){
       echo "<span class='errorh'><p>Password is wrong</p> </span>";
   } 

   else if ($_GET["error"]== "user_is_not_exist"){
       echo "<span class='errorh'><p>User is not Exist</p> </span>";
   } 

}

?>

    </div>

        <script src="assets/js/main.js"></script>
</body>