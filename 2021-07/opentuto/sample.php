<?php

namespace greeting\en;
class Hi {
    function __construct() {
        echo '<h1>hi_i wanna know how to use namespace and use</h1>';
    }
}

namespace greeting\ko;
class Hi {
    function __construct() {
        echo '<h1>안녕~</h1>';
    }
}

use \greeting\en;
 new en\Hi();
 new \greeting\ko\Hi();