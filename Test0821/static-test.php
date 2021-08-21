<?php
class StaticTest {
    public static $val = 100;

    public static function staticFunc() {
        static $number = 0;
    }
}

StaticTest::staticFunc();
echo StaticTest::$val.'<br>';