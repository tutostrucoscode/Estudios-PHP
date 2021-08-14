<?php

//Arrays

$arrayUno = array("Diego", "Henry", "Sandra", "izzeth", "Alex");

$arrayDos[0] = "Diego";
$arrayDos[1] = "Henry";
$arrayDos[2] = "Sandra";
$arrayDos[3] = "izzeth";
$arrayDos[4] = "Alex";


/*
La función count () cuenta todos los elementos de un array.
*/
echo "Tamaño del array: " . count($arrayUno);

echo "<br/>";

for ($i = 0; $i < count($arrayUno); $i++) {
    echo $arrayUno[$i] . "<br/>";
}

echo "<br/>";

foreach ($arrayUno as $foreachUno) {
    echo $foreachUno . "<br/>";
}
