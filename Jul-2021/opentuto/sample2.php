<?php
require_once 'sample.php';

function autoloader() {
    var_dump('here');
    require_once 'sample.php';
}

spl_autoload_register('autoloader');
new Hi();