<?php

class OverridingTest {

    public static function test() {
        echo OverridingTest::test();
    }


}

class Car {
    public function engineOn() {
        echo '엔진 on';
    }
}

class Porche extends Car {
    public function engineOn() {
        echo 'porche 엔진 on';
    }
}

$car = new Porche();
$car->engineOn();
