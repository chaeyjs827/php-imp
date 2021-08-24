<?php

trait ATrait {
    function teatAtrait() {
        echo 'method of ATrait';
    }
}

trait BTrait {
    function testBtrait() {
        echo 'method of BTrait';
    }
}

class A {
    use ATrait;
    use BTrait;
}

$a = new A;
$a->teatAtrait();
$a->testBtrait();