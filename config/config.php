<?php
session_start();
require_once 'vendor/autoload.php';

// Load environment variables from the .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER['HTTP_HOST'] == 'walrus-app-65ogh.ondigitalocean.app') {
    define("BASE_URL", "https://walrus-app-65ogh.ondigitalocean.app/");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . "/");
    // Access environment variables and define constants
    define("SERVER_NAME", getenv("DB_HOST"));
    define("USERNAME", getenv("DB_USERNAME"));
    define("PASSWORD", getenv("DB_PASSWORD"));
    define("DATABASE", getenv("DB_DATABASE"));
    define("PORT", getenv("DB_PORT"));
}
