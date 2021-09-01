<?php
namespace Test1;
class TestClassFirst {
    function testClassOne() {
        echo '나는 첫 번째 ! ';
    }
}


namespace Test2;
use Test1\TestClassFirst;

class TestClassSecond {
    function testClassTwo() {
        echo '나는 두 번째 ! ';
    }
}

TestClassFirst::testClassOne();
TestClassSecond::testClassTwo();

$testOne = new TestClassFirst();
$testOne->testClassOne();

$testTwo = new TestClassSecond();
$testTwo->testClassTwo();

