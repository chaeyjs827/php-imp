<?php
$test = function() {

};

$test();

$lamdaTest = function() {
    echo 'this is lamda';
};

$lamdaTest();

$paramLamdaTest = function($p1, $p2) {
    echo "{$p1}, {$p2}";
};

$paramLamdaTest(10, 20);

