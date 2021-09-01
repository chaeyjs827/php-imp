<?php
require_once 'vender/autoload.php';

$sayHello = new \chobo\hello\Hello();
$sayHello->say();

echo '<br>';

$task01 = new \chobo\tasks\Task01();
$task01->todoTask();

echo '<br>';

$task02 = new \chobo\tasks\Task02();
$task02->todoTask();