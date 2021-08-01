<?php

require_once('./test.php');
require_once('./testTwo.php');
require_once('./insert.php');
require_once('./loggerUser.php');

use oh\my\eyes\PersonOne;
use oh\my\eyes\PersonTwo;
use this\is\save\db\InsertFunc;
use this\is\logger\Logger;

$personOne = new PersonOne(10, 'haha');

$personOne = new PersonOne(99,'remote');

$personTwo = new PersonTwo('musinsa');

echo $personOne->getName().'<br>';

echo $personTwo->getTitleTwo().'<br>';

InsertFunc::saveData('this is params');

Logger::log();

Logger::printTestWithInsertFunc();
