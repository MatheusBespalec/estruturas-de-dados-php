<?php

/*

A classe SplFixedArray tem as principais funcionalidades de um array do php


- Possui um tamanho pre definido 
- Não permite usar o operador [] como em:
    $array[] = $i;
    Isso gera o erro: Uncaught Error: [] operator not supported for SplFixedArray
- Só pode possuir indicies inteiros

*/
$array = new SplFixedArray(32769);

for ($i = 0; $i < 32769; $i++) {
    $array[$i] =  $i;
}

var_dump(memory_get_usage() / 1024 / 1024); // 0.88221740722656

var_dump(memory_get_peak_usage() / 1024 / 1024); //1.3781967163086 

// Usa quase 3 vezes menos memória que um array comum do php


// $array = new SplFixedArray(5);
// var_dump($array);
// var_dump($array->count()); // 5

// Quando é criado já é inicializado com todas as chaves definidas como null