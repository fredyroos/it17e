<link rel="stylesheet" href="style.css">

<?php

$nimi = "Roos";

$n = 32; // täisarv

$n1 = 2.4423; // kümnendmurd

$t = true; // tõeväärtus

$m = array (8, "tere", $n, 3.14, $nimi);

$n2 = 112;
$n3 = "112";
$nn = $n2 + $n1;
$nm = $n2.$n1;

// array ('id' => 1, 'FirstName' => "Fredy", 'LastName' => "Roos");

echo "<h1>Tervist, siin  $nimi </h1>";

echo "<p> Description </p>";

echo $nn;

echo "<p>".$m[2]."</p>";

echo $nn." ".$nm; "<br>";
echo "$n2 krüpteeritult on: ".md5($n2);

?> 