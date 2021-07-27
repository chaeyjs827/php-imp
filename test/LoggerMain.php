<?php

use Test1\Logger;

class LoggerMain {
    function loggerMainTest() {
        Logger::printTest();
    }
}

$loggerMain = new LoggerMain();
$loggerMain->loggerMainTest();