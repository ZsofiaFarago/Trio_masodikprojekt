<?php
require_once 'config.php';

function getConnection(){
    $connection = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.';',DB_USER, DB_PASS);
    $connection->exec("SET NAMES '".DB_CHARSET."'");
    return $connection;
}

function getList($queryString, $queryParams = []){
    $connection = getConnection();
    $statement = $connection->prepare($queryString);
    $success = $statement->execute($queryParams);
    $result = [];
    if($success){
        $result = $statement->fetchAll();
    }
    $statement->closeCursor();
    $connection = null;
    return $result;
}
?>