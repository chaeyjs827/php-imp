<?php

class ArrayIfTest {

    public static function getResult() {
        $result = [
            'result' => json_encode(self::arrayA()),
            'saveData' => json_encode(self::arrayB())
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

echo json_encode(ArrayIfTest::getResult());