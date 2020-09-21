<?php

// If a class is the blueprint, then an object is an instance (or implementation) of that blueprint.

class Team
{
    protected $name;

    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function members()
    {
        return $this->members;
    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}

// $feedier = new Team('Feedier', [
//     'Francois',
//     'Carlos',
// ]);

// $feedier = Team::start('Feedier', [
//     'Francois',
//     'Carlos',
// ]);

$feedier = Team::start('Feedier', [
    new Member('Francois'),
    new Member('Carlos'),
]);

// $feedier->add('Francois');
// $feedier->add('Carlos');
$feedier->add('Praveer');

var_dump($feedier->members());