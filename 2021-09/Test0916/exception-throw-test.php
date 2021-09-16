<?php

class A {
    public static function main() {
        try {
            echo 'main 시작이요<br>';
            B::log();
        } catch(Exception $e) {
            throw new Exception("main가 문제에유");
        }
    }
}

class B {

    public static function log() {
        try {
            echo 'log 시작이요<br>';
            C::getId();
        } catch(Exception $e) {
            throw new Exception("log가 문제에유");
        }
    }
}

class C {
    public static function getId() {
        try {
            echo 'getId 시작이요<br>';
            throw new Exception("haha");
        } catch(Exception $e) {
//            echo $e->getMessage();
            throw new Exception("getid가 문제에유");
        }
    }
}

A::main();