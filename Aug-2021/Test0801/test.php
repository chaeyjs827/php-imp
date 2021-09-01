<?php

namespace oh\my\eyes;

class PersonOne
{
    private $age;
    private $name;

    public function __construct($age, $name) {
        $this->age = $age;
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

}

$person = new PersonOne(10, 'Tester');
echo '???';

echo $person->getName();
//echo $person->name;