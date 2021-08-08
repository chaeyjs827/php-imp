<?php

class ArrayEncodingTest {

    public static function test() {
        $testArray = [
            'aa' => 'bb',
            'ab' => 'bb',
            'ac' => 'bb',
            'ad' => 'bb',
            'ae' => 'bb',
            'af' => 'bb',
            'ag' => 'bb',
            'ah' => 'bb',
            'ai' => 'bb',
            'aj' => 'bb',
            'ak' => 'bb',
            'al' => 'bb',
            'am' => 'bb',
            'an' => 'bb',
            'ao' => 'bb',
            'ap' => 'bb',
            'ao' => 'bb',
            'ap' => 'bb',
            'aq' => 'bb',
            'ar' => 'bb',
            'as' => 'bb',
            'at' => 'bb',
            'au' => 'bb',
            'aw' => 'bb',
            'ax' => 'bb',
            'ay' => 'bb',
            'az' => 'bb',
            'aca' => 'bb',
            'ada' => 'bb',
            'aea' => 'bb',
            'afa' => 'bb',
            'aga' => 'bb',
            'aha' => 'bb',
            'aia' => 'bb',
            'aja' => 'bb',
            'aka' => 'bb',
            'ala' => 'bb',
            'ama' => 'bb',
            'ana' => 'bb',
            'aoa' => 'bb',
            'apa' => 'bb',
            'aoa' => 'bb',
            'apa' => 'bb',
            'aqa' => 'bb',
            'ara' => 'bb',
            'asa' => 'bb',
            'ata' => 'bb',
            'aua' => 'bb',
            'awa' => 'bb',
            'axa' => 'bb',
            'aya' => 'bb',
            'aza' => 'bb',
            'aaaa' => 'bb'
            ];

        $result = '';
        foreach($testArray as $key => $value) {
            if($key === array_key_last($testArray)) {
                $result .= $key.'='.$value;
            } else {
                $result .= $key.'='.$value.'&';
            }
        }
        return $result;
    }

}

echo OverridingTest::test();