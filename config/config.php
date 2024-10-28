<?php
session_start();
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define("BASE_URL", "http://localhost/");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . "/");
    define("SERVER_NAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "Ab85409876@");
    define("DATABASE", "jctrrajv_lms");
} 
