<?php


// Ciclo - Ciclo For

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br/>";

    // $i = 0 : Valor de inicio
    // $ < 10 : Condicional - Valor de parada
    // $++    : Valor de incremento (De 1 en 1)
}

/*
Desarrollar un programa que muestre los números pares entre 0 –
20 de forma ascendente.
*/

//Opcion #1
for ($i = 0; $i <= 20; $i += 2) {
    echo $i . " " . "<br/>";

    // $i = 0   : Valor de inicio
    // $i <= 20 : Condicional - Valor de parada
    // $i += 2  : Valor de incremento (De 2 en 2)
}


//Opcion #2
for ($i = 0; $i <= 20; $i++) {

    if ($i % 2 == 0) {
        echo $i . " " . "<br/>";
    }

    // $i = 0         : Valor de inicio
    // $i <= 20       : Condicional - Valor de parada
    // $i++           : Valor de incremento (De 1 en 1)
    //if($i % 2 == 0) : comprueba si el residuo de $i / 2 es == a 0
}


/*
Desarrollar un programa que permita contar cuántos números
entre 1 y 1000 son múltiplos de 7, mostrar el resultado final.
*/

//Opcion #1

$multiplos = 0;

for ($i = 1; $i <= 1000; $i++) {

    if ($i % 7 == 0) {
        $multiplos++;
    }
}

echo "La cantidad de multiplos de 7 es: " . $multiplos . "<br/>";

/*
Desarrollar un problema que imprimir las tablas de multiplicar del
1 al 10 con su respectivo resultado.
*/

//Opcion #1

for ($i = 1; $i <= 10; $i++) {

    echo "Tabla de multiplicar del " . $i . "<br/>";

    for ($x = 1; $x <= 10; $x++) {
        echo $i . "*" . $x . "=" . $i * $x . "<br/>";
    }
}
