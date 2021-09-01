<?php

class ArrayTest {

    public static function test() {

        $testArray = array('test', 'haha', 'hoho');

        foreach($testArray as $key) {
            echo $key.'</br>';
        }

        for($i=0; $i<sizeof($testArray); $i++) {
            echo $testArray[$i].'</br>';
        }
        echo $testArray.'</br>';
    }

    public static function encTest() {
        $testArray = array('test', 'haha', 'hoho');
        echo $testArray.'<br>';
        echo json_encode($testArray);
    }

}

echo DateTest::test();
DateTest::encTest();