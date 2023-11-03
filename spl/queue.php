<?php

$stack = new SplQueue();

$stack->push("Teste 1");
$stack->push("Teste 2");
$stack->push("Teste 3");
$stack->push("Teste 4");

foreach ($stack as $value) {
    echo $value . PHP_EOL; // Teste 1 -> Teste 2 -> Teste 3
}