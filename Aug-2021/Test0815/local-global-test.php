<?php
$g_var = 'this is global variable';

function test() {
    $l_var = 'this is local variable';

    global $g_var;

    echo $l_var.'<br>';
    echo $g_var.'<br>';
//    echo $GLOBALS['g_var'];
}

test();
echo $g_var.'<br>';
