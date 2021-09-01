<?php

namespace this\is\logger;

use this\is\save\db\InsertFunc;

class Logger
{
    public static function log()
    {
        InsertFunc::saveData('hehehehhe</br>');
        echo '이 놈은 static이다.. InsertFunc::saveData랑 어찌 실행 시키누</br>';
    }

    public function printTestWithInsertFunc()
    {
        InsertFunc::printTest();
    }

}