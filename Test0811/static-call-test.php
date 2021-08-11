<?php
class Test {
    public function test() {
        Logger::log();
    }
}

class Logger {
    public static function log() {
        echo __CLASS__.'.'.__FUNCTION__.' 실행'.'<br>';

        $repoTrait = new RepoTrait();
        $repoTrait->saveData();
    }

}

class RepoTrait {
    public function saveData() {
        echo __CLASS__.'.'.__FUNCTION__.' 실행'.'<br>';
    }
}

$exeTest = new Test();
$exeTest->test();