<?php
require_once "DB.php";

function add($nom,$latitude,$longitude){
    $pdo = getConnection();
    $req = "INSERT INTO localite VALUES(NULL,'$nom',$latitude,$longitude)";
    $pdo->exec($req);
}

