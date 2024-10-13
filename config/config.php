<?php
session_start();
if ($_SERVER['HTTP_HOST'] == 'localhost:8012') {
    define("BASE_URL", "http://localhost:8012/lms/");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . "/lms/");
    define("SERVER_NAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "lms");
} else {
    define("BASE_URL", "https://lms.com");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT']);

    define("SERVER_NAME", "");
    define("USERNAME", "");
    define("PASSWORD", "");
    define("DATABASE", "");
}