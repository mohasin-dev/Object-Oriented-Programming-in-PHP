<?php

// An abstract class provides a template - or base - for any subclasses.
// An abstrct class is never be instantiate
// Abstract method has no code but signature & there is no implementation, that's be main diffirence between abstact & concreate
// Abstract method is a requirement or must inplement for sub class
// Abstraction is a model of a real-world object or phenomenon, limited to a specific context, which represents all details relevant to this context with high accuracy and omits all the rest.

abstract class AchievmentType
{
    public function name()
    {
       $class = (new ReflectionClass($this))->getShortName();

       return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    abstract public function qualifier($user);
}

class FirstThousandPoints extends AchievmentType
{
    public function qualifier($user)
    {
        
    }
}

// "Is a"
class FirstBestAnswer extends AchievmentType
{
    public function qualifier($user)
    {
        
    }
}

class ReachTop50 extends AchievmentType
{
    public function qualifier($user)
    {
        return $user;
    }
}

$achievment = new ReachTop50;
echo $achievment->qualifier('dfd');