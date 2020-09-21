<?php 

// Encapsulation => Enclose within a capsule
// Encapsulation allows a class to provide signals to the outside world that certain internals are private and shouldn't be accessed.
// So at it's core, encapsulation is about communication.
// Encapsulation is the ability of an object to hide parts of its state and behaviors form other objects,
// exposing only a limited interface to the rest of the program.

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function job()
    {
        return 'Web developer';
    }

    protected function other2()
    {
        return 'can\'t expose';
    }

    private function other()
    {
        return 'can\'t expose';
    }
}

$bob = new Person('MH');

// How we can access private method outside the class
// $method = new \ReflectionMethod(Person::class, 'other');

// $method->setAccessible(true);

// $person = new Person('DM');

// $method->invoke($person);

// var_dump($person);

var_dump($bob->name);