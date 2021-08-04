<?php

require_once('private-test.php');

use Test\August\Fouth\Lib\TestLib;

class TestLibMain {

    public static function getObj() {
        return new TestLib("private_value", "public_value");
    }

}

$a = TestLibMain::getObj();
echo $a->public_value;

