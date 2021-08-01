<?php

require_once('./test.php');
require_once('./testTwo.php');

use oh\my\eyes\PersonOne;
use oh\my\eyes\PersonTwo;

$personOne = new PersonOne(10, 'haha');

$personOne = new PersonOne(99,'remote');

$personTwo = new PersonTwo('musinsa');

echo $personOne->getName().'<br>';

echo $personTwo->getTitleTwo().'<br>';