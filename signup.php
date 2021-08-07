<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesignup.css">
<title>Sign up</title>


</head>

<body>
    <div class="container">
<div class="left-column">
    <div class="left-column-container">
        <h1>Sign up</h1>
        <div class="links">
            <a href="#"> Privacy policy</a>
            <p>&</p>
            <a href="#"> terms of service</a>
        </div>
    </div>
</div>

<div class="right-column"> 
    <div class="right-column-container">
        <span class="close">x</span>
        <div class="input">
            <label for= "Username">Username</label>
            <input placeholder="Enter yout username" type="text" id="Username" name="Username"/>
        </div>
            <div class="input">
                <label for="email">E-mail</label>
                <input placeholder="Enter your E-mail" type="text" id="email" name="email" />
            </div>
            <div class="input">
                <label for="password">Password</label>
                <input placeholder="Enter your password" type="password" id="password" name="password" />
            </div>
            <div class="input">
                <label for="repeat-password">Repeat password</label>
                <input placeholder="Enter your password" type="password" id="repeat-password" name="repeat-password" />
            </div>

            <div class="right-column-bottom-action">
                <button class="btn">Get started</button>
                <p>or</p>
                <a href="login.php";>Sign in</a>
            </div>
    </div>
</div>
</div>
<?php
if (isset($_COOKIE["prisijungti"]) && isset($_COOKIE["teises"])){
    header('Location: manopaskyra.php');
}

?>
</body>
</html>
