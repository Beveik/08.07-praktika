<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleforgot.css">
<title>manopaskyra</title>


</head>

<body>
    <div class="container">
<div class="left-column">
    <div class="left-column-container">
        <h1>Account info</h1>

    </div>
</div>

<div class="right-column"> 
    <div class="right-column-container">
        <span class="close">x</span>
<div class="online">
    <p>Jūs esate prisijungęs!</p>
    <p>Jei norite atsijungti, spauskite mygtuką:</p>
            <div class="right-column-bottom-action">
            <form action="login.php" method="post">
<button class="btn" type="submit" name="atsijungti">Log out</button>
</form>
            </div>
    </div>
</div>
</div>
<?php 

if(isset($_POST["atsijungti"])) {

    setcookie("prisijungti", "", time() - 3600 * 24, "/");
    setcookie("teises", "", time() - 3600 * 24, "/");
    header('Location: login.php');

}

?>



</body>
</html>






