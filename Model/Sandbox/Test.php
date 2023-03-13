<?php

$dbConnector = null;
$dsn = "mysql:host=Localhost;dbname=snows";
$usr = "snows-connector";
$pwd = "PaSSw0rdMagik";
try {
    $dbConnector = new PDO($dsn, $usr, $pwd);

    //try to fletch snow board data
    $query = "SELECT * FROM snows";
    $queryResults = null;

    $statement = $dbConnector->prepare($query);
    $statement->execute();
    $queryResults = $statement->fetchAll();

    $dbConnexion = null;
    return $queryResults;
}

catch (PDOException $ex){
    print ($ex);
}

