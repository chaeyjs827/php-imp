<?php
require_once 'greeting_lang.php';

use test\lang\en as Halo;

echo Halo\welcome();

echo test\lang\ko\welcome();