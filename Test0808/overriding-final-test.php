<?php

class OverridingTest {

    public static function test() {
        echo OverridingTest::test();
    }


}

class Car {
    public final function engineOn() {
        echo '엔진 on';
    }
}

class Porche extends Car {
}

$car = new Porche();
$car->engineOn();
