<?php

/*

Os arrays em PHP são mapas ordenados. São muito flexiveis e podemos usalos de varias formas como arrays, listas, mapas, filas, pilhas.

*/

$array = [];

/*
for ($i = 0; $i < 32768; $i++) {
    $array[] =  $i;
}

var_dump(memory_get_usage() / 1024 / 1024); // 1.3817825317383
*/


for ($i = 0; $i < 32769; $i++) {
    $array[] =  $i;
}

var_dump(memory_get_usage() / 1024 / 1024); // 2.3819580078125

/*

PHP aloca o array para conter 1 elemento (2 elevado a 0). Com 1 elemento inserido, 
o PHP realoca para caberem 2 elementos (2 elevado a 1). Depois 4 (2 elevado a 2), 
depois 8 (2 elevado a 3) e assim em diante. Quando temos um grande número de elementos, 
podemos facilmente acabar desperdiçando memória.

No caso acima aumentando o numero de 32768 para 32769 o uso de memoria vai de  1.38 para 2.38
gerando grande desperdicio de memoria

*/