<?php

class dog {
    private string $name;
    private string $sex;
    private ?string $mother;
    private ?string $father;

    public function __construct(string $name, string $sex, ?string $father = null, ?string $mother = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->father = $father;
        $this->mother = $mother;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function getFatherName(): string
    {
        if ($this->father === null) {
            return "Unknown";
        } else {
            return $this->father;
        }
    }

    public function getMother(): string
    {
        if ($this->mother === null) {
            return "Unknown";
        } else {
            return $this->mother;
        }
    }

    public function hasSameMother(dog $reference): bool
    {
        if ($this->mother === $reference->getMother())
        {
            return true;
        }
        return false;
    }
}

class dogTest
{
    public function main():array {
        return [
        new dog("Max", "male", "Rocky", "Lady"),
        new dog("Rocky", "male", "Sam", "Molly"),
        new dog("Sparky", "male"),
        new dog("Buster", "male", "Sparky", "Lady"),
        new dog("Sam", "male"),
        new dog("Lady", "female"),
        new dog("Molly", "female"),
        new dog("Coco", "female", "Buster", "Molly")
        ];
    }
}

$x = new dogTest();
$dogs = $x->main();

echo $dogs[7]->getFatherName() . PHP_EOL;
echo $dogs[2]->getFatherName() . PHP_EOL;
var_dump($dogs[7]->hasSameMother($dogs[1]));