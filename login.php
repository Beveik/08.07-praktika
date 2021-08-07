<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
<title>Login</title>


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
    
    
    <div class="right-column-container" id="keisim" >
        <span class="close">x</span>
<?php if(!isset($_COOKIE["prisijungti"]) && !isset($_COOKIE['teises'])) { ?>
        <form action="login.php" method="post">
        <div class="input">
            <label for= "Username">Username</label>
            <input placeholder="Enter yout username" type="text" id="Username" name="vardas"/>
        </div>
                <label for="password">Password</label>
                <input placeholder="Enter your password" type="password" id="password" name="slaptazodis" />
            <div class='naujas' id='naujas'> </div>
            <div class="right-column-bottom-action">
                <button class="btn" type="submit" id="mygtukas" name="prisijungti">Login</button>
                <p id="or">or</p>
                <a href ="forgot.php" id="nebera">Forgot password</a>
            </div>
    
</form>
</div>
<?php } else  {

    echo "<p>Prisijungimas sėkmingas!</p>";
    echo "<p>Sveikinu prisijungus, ". $_COOKIE['prisijungti']."</p>";
    echo "<p>Jūsų teisės: ". $_COOKIE['teises']."</p>";
    echo '<form action="login.php" method="post">';
    echo '<button class="btn" type="submit" name="atsijungti">Log out</button></form>';

} 
?>
</div>

</div>

<?php
function prisijungti(){

$registruotiVartotojai = array(
    array("vardas" => "admin", "slaptazodis" => "admin", "teises" => 1),
    array("vardas" => "admin1", "slaptazodis" => "admin1", "teises" => 2),
    array("vardas" => "admin2", "slaptazodis" => "admin2", "teises" => 3),
    array("vardas" => "admin3", "slaptazodis" => "admin3", "teises" => 1),
    array("vardas" => "admin4", "slaptazodis" => "admin4", "teises" => 2),
    array("vardas" => "admin5", "slaptazodis" => "admin5", "teises" => 3),
    array("vardas" => "admin6", "slaptazodis" => "admin6", "teises" => 1),
    array("vardas" => "admin7", "slaptazodis" => "admin7", "teises" => 1),
    array("vardas" => "admin8", "slaptazodis" => "admin8", "teises" => 2),
    array("vardas" => "admin9", "slaptazodis" => "admin9", "teises" => 3),
);

if (isset($_POST["vardas"]) && !empty($_POST["vardas"]) && isset($_POST["slaptazodis"]) && !empty($_POST["slaptazodis"]) )
{
    $vardas = $_POST["vardas"];
    $slaptazodis = $_POST["slaptazodis"];

    foreach($registruotiVartotojai as $elementas) {
        
        $teisingasDuomuo = false;
        $laikinasis_vardas = "";
        $laikinasis_teises = "";
        if($vardas == $elementas["vardas"] && $slaptazodis == $elementas["slaptazodis"]) {
            $teisingasDuomuo = true;
            $laikinasis_vardas = $elementas["vardas"];
            $laikinasis_teises = $elementas["teises"];
            break;
        }
    }


    if($teisingasDuomuo) {  
        setcookie("prisijungti",  $laikinasis_vardas, time() + 3600 * 24, "/");
        setcookie("teises",  $laikinasis_teises, time() + 3600 * 24, "/");
        header("Location: login.php");
    } else {
?>
        <script>
        document.getElementById("naujas").innerHTML += "<br>Prisijungimas nesėkmingas!";
        </script>
 <?php       
// header("Location: login.php");
    }

} else {
    ?>
        <script>
        document.getElementById("naujas").innerHTML += "<br>Prisijungimas nesėkmingas!";
        </script>
<?php 
}
// var_dump($registruotiVartotojai);

}
if (isset($_POST["prisijungti"])){
 
    prisijungti();

}?>

<?php

if(isset($_POST["atsijungti"])) {

    setcookie("prisijungti", "", time() - 3600 * 24, "/");
    setcookie("teises", "", time() - 3600 * 24, "/");
    header('Location: login.php');

}





?>
</body>
</html>
