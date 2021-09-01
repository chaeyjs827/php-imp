<?php

use App\Libraries\Log\Logger;

class ConstIfTest {

     const COMPANY_M = 'm';
     const COMPANY_S ='s';
     const HOLIDAY_API = 'h';

    public static function mainMethod($apiSubjectName) {
        echo self::getResult($apiSubjectName);
    }

    public static function getResult($apiSubjectName) {
        if($apiSubjectName == self::COMPANY_M) {
            echo 'com m';
        } else if($apiSubjectName == self::HOLIDAY_API) {
            echo 'com h';
        } else if($apiSubjectName == self::COMPANY_S) {
            echo 'com s';
        }
    }


}

ResponseTest::mainMethod('h');