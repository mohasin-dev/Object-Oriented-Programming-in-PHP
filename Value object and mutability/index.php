<?php

// A value object is an object whose equality is determined by its data (or value) rather than any particular identity.
// To illustrate this, imagine three five dollar bills resting on a table.
// Does one bill have a unique identity compared to the other two? From our perspective, no.
// Five dollars is five dollars regardless of which bill you choose. However, compare this with two human beings who have the same first and last name.
// Are they identical, or does each person have a unique identity? Of course in this case, the latter is the correct answer.

// A few benifit of creating value object
// 1. Avoids primitive obsession - and readability
// 2. Helps with consistency (as performing the validation with constructor it helps with consistency)
// 3. Immutable (by avoiding any setters and changing the property is to private we gain the benifits of Immutablity)


class Age
{
    private $age;

    public function __construct($age)
    {
        if ($age > 120 || $age < 18) {
            throw new InvalidArgumentException('Your age is not valid.');
        }

        $this->age = $age;
    }

    // This is mutable version
    // mutable means changeable
    // public function increment()
    // {
    //     $this->age += 1;
    // }
 
    // This is immutable version
    // immutable means not changeable insted we return a brand new instance of the class like Age;
    public function increment()
    {
        return new self($this->age + 1);
    }

    public function get()
    {
        return $this->age;
    }
}

$age = new Age(35);

$age = $age->increment();

var_dump($age->get());

// This is value object example
// function register(string $name, Age $age)
// {
//     echo 'Something';
// }

//register('Samia', new Age(30));