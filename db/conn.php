<?php
    // // Development Connection
    //   $host =  '127.0.0.1' ;
    //   $db = 'attendance_db' ;
    //   $user = 'root' ;
    //   $pass = '';
    //   $charset = 'utf8mb4';

    //Remote Database Connection
    $host =  'applied-web.mysql.database.azure.com' ;
    $db = 'attendance_kennando' ;
    $username = 'appliedweb_user@applied-web' ;
    $pass = 'P@ssword1';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
          $pdo = new PDO($dsn, $username, $pass);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }   catch(PDOException $e) {        
            throw new PDOException($E->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
     $crud = new crud($pdo);
     $user = new user($pdo);

     $user->insertuser("admin","password");
?>