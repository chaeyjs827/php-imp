<?php
spl_autoload_register(function ($className) {
   echo 'class path : ' .$className;
   exit();
   // require_once $class.'php';
});