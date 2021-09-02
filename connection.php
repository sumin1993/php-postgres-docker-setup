<?php
$dsn = 'pgsql:dbname=testdb host=db';
$user = 'user';
$password = 'user123';

try{
    $dbh = new PDO($dsn, $user, $password);
    print("connection success");
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}