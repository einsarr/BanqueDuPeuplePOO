<?php
function getConnection(){
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $dbname = "geolocalisation";
    $dsn="mysql:host=$host;dbname=$dbname";

    try{
        $pdo = new PDO($dsn,$user,$password);
    }catch(Exception $ex){
        die('error'.$ex->getMessage());
    }
    return $pdo;
}
