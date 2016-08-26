<?php 

define('__ROOT__', dirname(__FILE__));

$database = "dancedb";
$password = '';
$host = 'localhost';
$username = 'root';
$connection_string = "mysql:host=".$host.";dbname=".$database.";charset=utf8";

// Set error levels


// Load setup
require_once(__ROOT__.'/setup.php');