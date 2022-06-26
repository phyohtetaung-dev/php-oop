<?php

class Person
{
    public $name, $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        echo $this->age . ' years old.';
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception("Person is not old enough.");
        }
        $this->age = $age;
    }
}

$john = new Person('John');

$john->setAge(18);

$john->getAge();
