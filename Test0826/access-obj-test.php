<?php

namespace hello\why;

class HowToGetClassName {
    static function howToGetMethodName() {
        echo __FUNCTION__.'<br>';
        echo __METHOD__.'<br>';
        echo __LINE__.'<br>';
        echo __NAMESPACE__.'<br>';
        echo __TRAIT__.'<br>';

        echo 'className : '.self::getClassName(__CLASS__);
    }

    private static function getClassName($apiSubjectName) {
        $classNameArr = explode('\\', $apiSubjectName);
        return end($classNameArr);
    }
}

HowToGetClassName::howToGetMethodName();
