<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*Definición de array*/
$a = array();
$a[0]=23;
$a[1]=2;
$a[2]=42;
$a[3]=37;
$a["Pepe"]=45;

foreach ($a as $key => $value) {
    echo "El valor de la posición $key es: $value<br>";
}
echo "<br><br>";
/* Muestra el contenido del array */
print_r($a);
echo "<br><br>";
/* Muestra el contenido del array */
var_dump($a);

