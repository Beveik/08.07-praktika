
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 paskaita</title>

</head>
<body>

    <!-- Is serverio puses net neatvaizduoti -->

    <?php if(!isset($_COOKIE["prisijungti"])) { ?>

        <div class="prisijungimas">
            <form action="index.php" method="get">
                <input type="text" name="vardas" placeholder="Suveskite varda"/>
                <input type="password" name="slaptazodis" placeholder="Suveskite slaptazodi"/>
                <button type="submit" name="prisijungti" >Prisijungti</button>
            </form>
        </div>

    <?php } ?>

    <?php

    if(isset($_GET["prisijungti"])) {
 
        $registruotiVartotojai = array(
            array(
                "vardas" => "admin", 
                "slaptazodis" => "admin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admin123", 
                "slaptazodis" => "admin123", 
                "teises" => 2 
            ),
            array(
                "vardas" => "aaadmin", 
                "slaptazodis" => "aaadmin", 
                "teises" => 3 
            ),
            array(
                "vardas" => "adminnnn", 
                "slaptazodis" => "adminnnn", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admmmmin", 
                "slaptazodis" => "admmmmin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admiiiin", 
                "slaptazodis" => "admiiiin", 
                "teises" => 3
            ),
            array(
                "vardas" => "addddmin", 
                "slaptazodis" => "addddmin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admmmmmmmmin", 
                "slaptazodis" => "admmmmmmmmin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "aaaaaaaadmin", 
                "slaptazodis" => "aaaaaaaadmin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admiiiinnnnn", 
                "slaptazodis" => "admin", 
                "teises" => 3
            ),
            
        );

        if (isset($_GET["vardas"]) && !empty($_GET["vardas"]) && isset($_GET["slaptazodis"]) && !empty($_GET["slaptazodis"]) )
        {

            //kazkurk turim nustatyti sausainiuka
            //kuris turi saugoti ka? vardas,
            $vardas = $_GET["vardas"];
            $slaptazodis = $_GET["slaptazodis"];

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

                // echo $laikinasis_vardas;
                // echo $laikinasis_teises;
                //Isvesti elementas["vardas"] ir elementas["teises"]
                echo "Sveikas atvykes ". $laikinasis_vardas ." ". $laikinasis_teises;

                setcookie("prisijungti",  $laikinasis_vardas, time() + 3600 * 24, "/");
                setcookie("teises",  $laikinasis_teises, time() + 3600 * 24, "/");
                header("Location: manopaskyra.php");
            } else {
                echo "Bandykite jungtis is naujo";
            }
            // foreach()
            // for() cikle


        } else {
            echo "Laukeliai yra tusti";
        }
        // var_dump($registruotiVartotojai);
    }

    
    ?>
</body>
</html>