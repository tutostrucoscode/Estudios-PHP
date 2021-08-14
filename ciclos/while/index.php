<?php

/*
Desarrollar un programa que imprima los números impares entre
1 y 25.
*/

$x = 1;

while ($x <= 25) {
    if ($x % 2 != 0) {
        echo $x . " ";
    }
    $x++;
}
echo "<br/>";

/*
Desarrollar un programa que, dada una palabra, descomponer
todos sus caracteres.

- strlen (): Devuelve el número de caracteres de la cadena.
Se debe tener en cuenta que el método reconoce el espacio como 
*/

$palabra = "Diego Valencia";
$i = 0;

while ($i < strlen($palabra)) {
    echo $palabra[$i] . " ";
    $i++;
}
echo "<br/>";
/*
Desarrollar un programa que genere números aleatorios entre 1 y
50 y se detenga cuando genere un múltiplo de 10.

- Rand() genera números aleatorios a partir de un rango
determinado, para el funcionamiento de este, se deben determinar un
límite inferior y un límite superior, en el caso del ejemplo anterior (1,5).
*/

$parada = true;
$numero = 0;

while ($parada) {
    $numero = rand(1, 50);
    echo $numero . " ";

    if ($numero % 10 == 0) {
        $parada = false;
    }
}
