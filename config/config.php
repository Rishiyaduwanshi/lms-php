<?php
session_start();

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define("BASE_URL", "http://localhost/");
    define("DIR_URL", __DIR__ . "/");  // Use __DIR__ for the correct directory path
    // Other constants
    define("SERVER_NAME", getenv("DB_HOST"));
    define("USERNAME", getenv("DB_USERNAME"));
    define("PASSWORD", getenv("DB_PASSWORD"));
    define("DATABASE", getenv("DB_DATABASE"));
    define("PORT", getenv("DB_PORT"));
} else {
    // Production setup, adjust the path if needed
    define("BASE_URL", "https://yourapp.digitalocean.app/");
    define("DIR_URL", '/workspace/'); // Adjust this if necessary
}
