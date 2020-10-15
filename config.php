<?php

$db_host = "db-mysql-sgp1-83114-do-user-636911-0.b.db.ondigitalocean.com:25060";
$db_user = "doadmin";
$db_pass = "cwu1b8s1ldu6uz1n";
$db_name = "defaultdb";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
