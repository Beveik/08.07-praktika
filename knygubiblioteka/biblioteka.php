<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knygų biblioteka</title>
    <style>
button {
height: 30px;
width: 200px;
}
table {
    border-top: 1px black solid;
    border-right: 1px black solid;
   /* margin: auto; */
   text-align: center;
}
table td {
    width: 199px;
    border-bottom: solid 1px black;
    border-left: solid 1px black;
    border-bottom: solid 1px black;
}


    </style>
</head>
<body>
    <form action="biblioteka.php" method="get">
        <div class="kategorija">
            <p>Pasirinkite knygos kategoriją:</p>
        </div>
<button type="submit" name="fantastika">Fantastika</button>
<button type="submit" name="detektyvai">Detektyvai</button>
<button type="submit" name="poezija">Poezija</button>
<button type="submit" name="istoriniai">Istoriniai</button>
<button type="submit" name="meiles">Meilės</button>
<button type="submit" name="visos">Rodyti visas knygas</button>
    </form>
    <?php
$biblioteka=array(
    array ("autorius" => "Kai Meyer", "pavadinimas" => "Akmens Šviesa", "kategorija" => "fantastika", "kaina" => "4,00", "metai" => "2006"),
    array ("autorius" => "Yangsze Choo", "pavadinimas" => "Dvasių nuotaka", "kategorija" => "fantastika", "kaina" => "8,49", "metai" => "2020"),
    array ("autorius" => "Aurelija Butkutė", "pavadinimas" => "Langas į begalybę", "kategorija" => "fantastika", "kaina" => "12,86", "metai" => "2015"),
    array ("autorius" => "Pittacus Lore", "pavadinimas" => "Šešių galia", "kategorija" => "fantastika", "kaina" => "9,00", "metai" => "2011"),
    array ("autorius" => "J. R. R. Tolkien", "pavadinimas" => "Hobitas", "kategorija" => "fantastika", "kaina" => "8,81", "metai" => "2020"),
    array ("autorius" => "Silvia Moreno-Garcia", "pavadinimas" => "Meksikos gotika", "kategorija" => "fantastika", "kaina" => "13,67", "metai" => "2021"),
    array ("autorius" => "Mari Jungstedt", "pavadinimas" => "Nežinomas", "kategorija" => "detektyvai", "kaina" => "9,00", "metai" => "2016"),    
    array ("autorius" => "Robertas Loris", "pavadinimas" => "Atgijęs drakula", "kategorija" => "detektyvai", "kaina" => "1,00", "metai" => "1991"),
    array ("autorius" => "Teresa Driscoll", "pavadinimas" => "Aš stebiu tave", "kategorija" => "detektyvai", "kaina" => "9,99", "metai" => "2018"),
    array ("autorius" => "Jaroslavas Melnikas", "pavadinimas" => "Adata", "kategorija" => "detektyvai", "kaina" => "7,79", "metai" => "2019"),    
    array ("autorius" => "C.L. Taylor", "pavadinimas" => "Apgaulė", "kategorija" => "detektyvai", "kaina" => "12,39", "metai" => "2021"),
    array ("autorius" => "Ceklis", "pavadinimas" => "109 aforizmai", "kategorija" => "poezija", "kaina" => "3,85", "metai" => "2018"),
    array ("autorius" => "Ernestas Noreika", "pavadinimas" => "Andalūzijos šuo", "kategorija" => "poezija", "kaina" => "2,29", "metai" => "2016"),    
    array ("autorius" => "Ernestas Noreika", "pavadinimas" => "Apollo", "kategorija" => "poezija", "kaina" => "6,99", "metai" => "2019"),
    array ("autorius" => "Vacys Reimeris", "pavadinimas" => "...ir jūs pasakysite..", "kategorija" => "poezija", "kaina" => "6,20", "metai" => "2015"),
    array ("autorius" => "Emilija Liegutė", "pavadinimas" => "Akmuo pražydo", "kategorija" => "poezija", "kaina" => "3,17", "metai" => "2011"),    
    array ("autorius" => "Biruta Pėveraitytė", "pavadinimas" => "Ant rožinių laisvės sparnų", "kategorija" => "poezija", "kaina" => "5,03", "metai" => "2015"),
    array ("autorius" => "V.S. Alexander", "pavadinimas" => "Maisto ragautoja", "kategorija" => "istoriniai", "kaina" => "12,47", "metai" => "2021"),
    array ("autorius" => "Mario Escobar", "pavadinimas" => "Aušvico lopšinė", "kategorija" => "istoriniai", "kaina" => "11,61", "metai" => "2021"),    
    array ("autorius" => "Jennie Fields", "pavadinimas" => "Atominė meilė", "kategorija" => "istoriniai", "kaina" => "12,64", "metai" => "2021"),
    array ("autorius" => "Charlotte Betts", "pavadinimas" => "Pilis prie ežero", "kategorija" => "istoriniai", "kaina" => "15,99", "metai" => "2021"),
    array ("autorius" => "Jūratė Ardour", "pavadinimas" => "Mamos dienoraštis", "kategorija" => "istoriniai", "kaina" => "11,59", "metai" => "2021"),    
    array ("autorius" => "Tadeusz Konwicki", "pavadinimas" => "Raistai", "kategorija" => "istoriniai", "kaina" => "14,39", "metai" => "2021"),
    array ("autorius" => "Indrė Simanavičienė", "pavadinimas" => "Kai likimas pavogė mano vyrą", "kategorija" => "istoriniai", "kaina" => "8,64", "metai" => "2020"),
    array ("autorius" => "Sharon Sala", "pavadinimas" => "Šešėliuose", "kategorija" => "meilės", "kaina" => "8,22", "metai" => "2021"),    
    array ("autorius" => "Tess Gerritsen", "pavadinimas" => "Jų pėdsakais", "kategorija" => "meilės", "kaina" => "5,51", "metai" => "2021"),
    array ("autorius" => "Jane Fallon", "pavadinimas" => "Velniškai saldus kerštas", "kategorija" => "meilės", "kaina" => "12,72", "metai" => "2021"),
    array ("autorius" => "Natalie Jenner", "pavadinimas" => "Džeinės Osten draugija", "kategorija" => "meilės", "kaina" => "12,79", "metai" => "2021"),
    array ("autorius" => "Joss Wood", "pavadinimas" => "Nuotaka, verta milijonų", "kategorija" => "meilės", "kaina" => "4,15", "metai" => "2021"),
    array ("autorius" => "Anna DePalo", "pavadinimas" => "Vasaros meilės laiškas", "kategorija" => "meilės", "kaina" => "5,75", "metai" => "2021"),
    array ("autorius" => "Dolly Alderton", "pavadinimas" => "Vaiduokliai", "kategorija" => "meilės", "kaina" => "11,99", "metai" => "2021")
);

function rusiuok($kategorija, $biblioteka) {

$knygos=array();

    for ($i=0; $i<count($biblioteka); $i++){        
        if ($biblioteka[$i]['kategorija']==$kategorija){
            array_push($knygos, $biblioteka[$i]);   
        }            
}
return $knygos;
// 
}

function lentele($naujaBiblioteka){

    echo "<br><table>";
foreach($naujaBiblioteka as $eilute){
    echo "<tr class='eilute'>";
    foreach($eilute as $stulpelis){
        echo "<td class='stulpelis'>";
        echo $stulpelis;
        echo "</td>";
    }
    echo "</tr>";
    }
    echo "</table>";
}

$naujaBiblioteka=array();

if (isset($_GET['fantastika'])) {
    $naujaBiblioteka= rusiuok('fantastika', $biblioteka);
    lentele($naujaBiblioteka);
} else if (isset($_GET['detektyvai'])) {
    $naujaBiblioteka= rusiuok('detektyvai', $biblioteka);
    lentele($naujaBiblioteka);
} else if (isset($_GET['poezija'])) {
    $naujaBiblioteka= rusiuok('poezija', $biblioteka);
    lentele($naujaBiblioteka);
} else if (isset($_GET['istoriniai'])) {
    $naujaBiblioteka= rusiuok('istoriniai', $biblioteka);
    lentele($naujaBiblioteka);
} else if (isset($_GET['meiles'])) {
    $naujaBiblioteka= rusiuok('meilės', $biblioteka);
    lentele($naujaBiblioteka);
} else if (isset($_GET['visos'])){
    $naujaBiblioteka= $biblioteka;
    lentele($naujaBiblioteka);
}

?>




</body>
</html>