<?php

class TCTestController {
    public static function main() {
        try {
            TCService::registerShipping();
//            throw new Exception("OH YEAH");
        } catch(Exception $e) {
            echo 'TCTestController::main() 에러';
        }
    }
}

class TCService {
    public static function registerShipping() {
        try {
//            throw new Exception("OH YEAH");
            TCRepository::register();
        } catch(Exception $e) {
            echo 'TCService::registerShipping() 에러';
        }
    }
}

class TCRepository {
    public static function register() {
        try {
//            throw new Exception("OH YEAH");
            self::reguest();
        } catch(Exception $e) {
            echo 'TCRepository::register() 에러';
        }
    }

    public static function reguest() {
        try {
            TCLogger::log();
//            throw new Exception("OH YEAH");
            TCLogger::log();
        } catch(Exception $e) {
            echo 'TCRepository::request() 에러';
        }
    }
}

class TCLogger {
    public static function log() {
        try {
            throw new Exception("OH YEAH");
        } catch(Exception $e) {
            echo 'TCLogger::log() 에러';
        }
    }
}

TCTestController::main();