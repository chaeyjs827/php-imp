<?php
$val = null;

echo empty($val).'<br>';
echo !empty($val).'<br>';

$empty_val = empty($val);
$empty_val_false = !empty($val);

echo "ev : ".$empty_val.'<br>';
echo "evf : ".$empty_val_false.'<br>';