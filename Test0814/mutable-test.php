<?php

$var = "disney";
$disney = "var";
echo ${"var"}.'<br>';
echo ${"disney"}.'<br>';


$char = 'mickey';
$$char = 'mouse';   // $$char == $micky

echo $char.'<br>';
echo $$char.'<br>';