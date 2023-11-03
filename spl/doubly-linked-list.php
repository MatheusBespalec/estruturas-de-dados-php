<?php

/*

- cada elemento possuio a referencia do elemento anterior e posterior, tornando operações como remover/adicionar itens em no inicio/fim da 
lista mais performaticas do que se tivesse que reposicionar cada elemento 
- Apenas indicies inteiros
- Não podemos criar posições com a sintaxe de array com chave definida, ele interpreta como se estivesse tentando acessar modificar 
o valor de um indicie, p'rém caso esse indicie ainda não tenha sido criado ele gera um erro
     $array[$i] =  $i; // Erro: Argument #1 ($index) is out of range

*/

// $test = new SplDoublyLinkedList();

// $test[] = 1;
// $test[] = 2;
// $test[] = 3;
// var_dump($test);

// $test->shift();
// var_dump($test);

// $test->unshift(0);
// var_dump($test);

$array = new SplDoublyLinkedList();

for ($i = 0; $i < 32769; $i++) {
    $array->push($i);
    //$array[] =  $i; // Valido
}

var_dump(memory_get_usage() / 1024 / 1024); //1.3781967163086 
var_dump(memory_get_peak_usage() / 1024 / 1024);