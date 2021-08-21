<?php
class A {
    function __destruct() {
        echo 'destruct 되쓔~<br>';
    }
}

$a = new A;
echo gettype($a).'<br>';

echo gettype($a).'<br>';
