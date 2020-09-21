<?php

// Inheritance allows one class to inherit the traits and behavior of another class. This should instantly make sense, in the same way that a child inherits characteristics from their parents.
// Inheritance is the ability to build new classes on top of existing ones.
// The main benefit of inheritance is code reuse.

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
}

// SpecialtyCoffeeMaker is a CoffeeMaker;
class SpecialtyCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}

//(new SpecialtyCoffeeMaker())->brewLatte();

class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        //return array_sum(array_map(fn ($item) => $item->$key, $this->items));

        // return array_sum(array_map(function ($item) use ($key) {
        //     return $item->$key;
        // }, $this->items));

        return array_sum(array_column($this->items, $key));
    }
}

// "Is a"
class VideosCollection extends Collection
{
    public function length($key)
    {
        return $this->sum($key);
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}


 $videos = (new VideosCollection([
     new Video('one', 100),
     new Video('two', 200),
     new Video('three', 300),
]));

// var_dump($videos->sum('length'));

class AchievmentType
{
    public function name()
    {
        return "Hossain";
    }

    public function difficulty()
    {
        
    }

    public function icon()
    {
        
    }
}

// "Is a"
class FirstThousandPoints extends AchievmentType
{
    public function qualifier($user)
    {
        
    }

    public function name()
    {
        return "Mohasin";
    }
}

echo (new FirstThousandPoints())->name();