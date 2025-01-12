<?php

if($_SERVER['SERVER_NAME'] == "localhost") {
    define('DBHOST', 'localhost');
    define('DBNAME', 'ebay');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('ROOT', 'http://localhost/seven_web/public/');
    define('TITLE', 'Ebay Listing');
    define('VENDOR', 'http://localhost/seven_web/vendor/');
    define('FS_ROOT', realpath(__DIR__ . '/../public/'));
} else {
    define('DBHOST', 'production_db_host'); // Replace with your live server's DB host
    define('DBNAME', 'production_db_name'); // Replace with your live server's DB name
    define('DBUSER', 'production_db_user'); // Replace with your live server's DB user
    define('DBPASS', 'production_db_password'); // Replace with your live server's DB password
    define('ROOT', 'https://your-live-domain.com/public/'); // Replace with your live domain
    define('TITLE', 'Ebay Listing');
    define('VENDOR', 'https://your-live-domain.com/vendor/');
    define('FS_ROOT', realpath(__DIR__ . '/../public/'));
}
