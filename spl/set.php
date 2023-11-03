<?php

class Student
{
    public function __construct(private string $name) {}

    public function getName(): string
    {
        return $this->name;
    }
}

$set = new SplObjectStorage();

$student1 = new Student("Carlos");
$student2 = new Student("Maria");
$student3 = new Student("Victor");
$student4 = new Student("Victoria");

$set->attach($student1);
$set->attach($student2);
$set->attach($student3);
$set->attach($student2);

foreach ($set as $student) {
    echo $student->getName() . PHP_EOL;
}

var_dump($set->contains($student1));
var_dump($set->contains($student4));

// Só pode ser usado com objetos
// Não permite objetos repetidos
// utiliza spl_object_hash para comparar os objetos
// Com o metodo contains podemos verificar se existe um objeto que por tras dos mano utiliza uma tabela de espalhamento