<?php

$stack = new SplStack();

$stack->push("Teste 1");
$stack->push("Teste 2");
$stack->push("Teste 3");
$stack->push("Teste 4");

foreach ($stack as $value) {
    echo $value . PHP_EOL; // Teste 4 ->  Teste 3 -> Teste 2 -> Teste 1
}