<?php

class IssetTest {
    public static function test($isCheck) {
        $result = null;
        if($isCheck) {
            $result = 'test';
        }

        if(isset($result)) {
            echo '$result null 아님<br>';
        } else {
            echo '$result null<br>';
        }
    }
}

IssetTest::test(true);
IssetTest::test(false);
