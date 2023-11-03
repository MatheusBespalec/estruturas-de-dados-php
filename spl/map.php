<?php

class Student
{
    public function __construct(private string $name) {}

    public function getName(): string
    {
        return $this->name;
    }
}

$map = new SplObjectStorage();

$student1 = new Student("Carlos");
$student2 = new Student("Maria");

$map[$student1] = new DateTimeImmutable("2023-11-01");
$map->attach($student2, new DateTimeImmutable("2023-07-23"));

foreach ($map as $student) {
    echo $student->getName() . PHP_EOL;
    echo $map[$student]->format("d/m/Y") . PHP_EOL;
}

// Só pode ser usado com objetos
// Não permite objetos repetidos
// utiliza spl_object_hash para comparar os objetos
// Com o metodo contains podemos verificar se existe um objeto que por tras dos mano utiliza uma tabela de espalhamento