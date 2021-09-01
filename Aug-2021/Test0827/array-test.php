<?php

class ArrayIfTest {

    public static function mainMethod() {
        $result = self::getResult();

        if(isset($result['result']['result'])) {
            echo $result['result']['result']['result-code'].'<br>';
            echo $result['result']['result']['result-msg'].'<br>';
        }

        if(isset($result['result-second']['return-object']['result'])) {
            echo $result['result-second']['return-object']['result']['result-code'].'<br>';
            echo $result['result-second']['return-object']['result']['result-msg'].'<br>';
        }

        if(isset($result['saveData']['return-code'])) {
            echo $result['saveData']['return-code'].'<br>';
            echo $result['saveData']['return-msg'].'<br>';
        }

    }

    public static function getResult() {
        $result = [
            'result' => (self::arrayA()),
            'result-second' => self::arrayC(),
            'saveData' => (self::arrayB())
        ];
        return $result;
    }

    private static function arrayA() {
        $array = [
            'header' => 'header-test',
            'params' => [
                'id' => 'test-td',
                'username' => 'test-username',
                'thumnail' => [
                    'thumnail-url' => 'test-url',
                    'thumnail-name' => 'test-thumnail-name'
                ]
            ],
            'result' => [
                'result-code' => 500,
                'result-msg' => 'success'
            ]
        ];
        return $array;
    }
    private static function arrayC() {
        $array = [
            'header' => 'header-test',
            'params' => [
                'id' => 'test-td',
                'username' => 'test-username',
                'thumnail' => [
                    'thumnail-url' => 'test-url',
                    'thumnail-name' => 'test-thumnail-name'
                ]
            ],
            'return-object' => [
                'result' => [
                    'result-code' => 500,
                    'result-msg' => 'success'
                ]
            ]
        ];
        return $array;
    }

    private static function arrayB() {
        $array = [
            'header' => 'header-test',
            'params' => [
                'id' => 'test-td',
                'username' => 'test-username',
                'thumnail' => [
                    'thumnail-url' => 'test-url',
                    'thumnail-name' => 'test-thumnail-name'
                ]
            ],
            'return-code' => 500,
            'return-msg' => 'success call !!'
        ];
        return $array;
    }
}

RequestTest::mainMethod();