<?php
    // Development Connection
    // $host =  'applied-web.mysql.database.azure.com' ;
    // $db = 'attendance_d' ;
    // $user = 'root' ;
    // $pass = '';
    // $charset = 'utf8mb4';

    // Remote Database Connection
    $host =  'applied-web.mysql.database.azure.com' ;
    $db = 'attendance_kennando' ;
    $user = 'appliedweb_user@applied-web' ;
    $pass = 'P@ssword1';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
          $pdo = new PDO($dsn, $user, $pass);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }   catch(PDOException $e) {        
            throw new PDOException($E->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
?>