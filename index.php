<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
$now = date("d/m/Y");
echo "$now<br><br>";



## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
$now = date("d-m-y");
echo "$now<br><br>";



## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
$now = strftime('%A %d %B %Y');
echo "$now<br><br>";



## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.
$date = getdate();
echo $date["wday"]."<br>";
$timeStamp2 = mktime(15, 00, 00, 8, 02, 2016);
echo "Le timestamp du mardi 2 août 2016 à 15h00 etait de : $timeStamp2";
echo "<br><br>";



##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.
$date1 = "27-01-2021";
$date2 = "16-05-2016";

if ($date1 < $date2){
    echo "$date1 est inférieur à $date2";
}
else{
    echo "$date1 est supérieur à $date2";
}

echo "<br><br>";

##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.
$mois = mktime( 0, 0, 0, 02, 1, 2016 );
echo "Le mois de ".date("F Y",$mois)." possèdait ".date("t",$mois)." jours";
echo "<br><br>";

##Exercice 7 Afficher la date du jour + 20 jours.
$date = new DateTime('27-01-2021');
$date->modify('+20 day');
echo $date->format('d-m-Y')."<br><br>";

##Exercice 8 Afficher la date du jour - 22 jours
$date = new DateTime('27-01-2021');
$date->modify('-22 day');
echo $date->format('d-m-Y')."<br><br>";
echo "<br><br>";



## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>
    <label for="month">Mois</label>
    <select  id="month">
        <?php
            $mois = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
            for($i = 0; $i < 12; $i++){
                echo "<option>$mois[$i] </option>";
            }
        ?>
    </select>
    <label for="year">Années</label>
    <select  id="year">
        <?php
            $year = [2018, 2019, 2020, 2021, 2022];
            for($i = 0; $i < 5; $i++){
                echo "<option>$year[$i] </option>";
            }
        ?>
    </select>
</form>
</body>
</html>

