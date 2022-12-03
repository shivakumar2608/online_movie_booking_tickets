<?php
session_start();
 
define('LOCALHOST', 'localhost:3307');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'theater_db');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD ) or die(mysqli_error());

$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());


?>