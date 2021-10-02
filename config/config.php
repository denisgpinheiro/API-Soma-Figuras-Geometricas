<?php

define('HOST', 'localhost');
define('DB_NAME', 'emcash');
define('DB_USER', 'root');
define('DB_PASS', '');
define('METHOD', strtolower($_SERVER['REQUEST_METHOD']));

$array = [
    'error' => '',
    'result' => []
];

