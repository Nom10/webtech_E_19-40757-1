<?php 
function db_conn()
{
    $servername = "localhost";
    $username = "Nomaan";
    $password = "";
    $dbname = "product";

    try {
        $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $conn;
}