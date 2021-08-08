<?php

class ArrayEncodingTest {

    public static function test() {
        $testArray = [
            'aa' => 'bb'
        ];

        $testArraySec = [
            'cc' => 'rr'
        ];
        return json_encode([$testArray, $testArraySec]);
    }

}

echo OverridingTest::test();