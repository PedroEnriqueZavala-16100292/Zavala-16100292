<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'empresa');
/*define('DB_CHAR', 'utf8');*/

try{
    $connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
}catch (PDOException $e)
{
    echo("Error: " . $e->getMessage());
}
?>