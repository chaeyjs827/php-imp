<?php

class PersonTwo
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name.'<br>';
    }

    public function getTitle()
    {
        return $this->getName() . ' hello~~<br>';
    }

    public function getTitleTwo()
    {
        return self::getName() . ' two two~~<br>';
    }
}

$person = new PersonTwo('memories');
echo $person->getName();
echo $person->getTitle();
echo $person->getTitleTwo();