<?php

//Variables
//Un nombre de variable solo puede contener caracteres
//alfanuméricos y guiones bajos (Az, 0-9 y _) y los numeros no podran estar en la casilla 1 del nombre de la variable

$numero = 8;
$nombre = "Diego";
$altura = 1.72;

echo $x = 9;
echo $y = 8;
echo $z = 0;

echo "<br/>";

$variable = "Estudiante";
echo $variable;
$variable = 100;
echo $variable;

echo "<br/>";

$nombre = "Ana";
$name = &$nombre;
$name = "Andrea";

echo $nombre;
echo $name;

echo "<br/>";

//Variable global

function prueba()
{
    $variable_global_interna = 5;
    echo "Variable global opcion 1: " . $variable_global_interna;
    echo "<br/>";
    echo "Variable global opcion 2:  $variable_global_interna";
}

prueba();

echo "<br/>";

$variable_global = 41;

function prueba2()
{
    global $variable_global;
    $variable_global = 22;
}
prueba2();

echo $variable_global;

echo "<br/>";

$altura_global = 141;
function prueba3()
{
    $GLOBALS['altura_global'] = 172;
}

prueba3();
echo $altura_global;

echo "<br/>";

//Variable estatica

function prueba4()
{
    static $variable_statica = 0;
    echo $variable_statica;
    $variable_statica++;
}
prueba4();
prueba4();
prueba4();

echo "<br/>";

//Variable Constantes

const ESTUDIANTE = "stiven tangarife Serna";

echo ESTUDIANTE;

//Ejemplos de variables

