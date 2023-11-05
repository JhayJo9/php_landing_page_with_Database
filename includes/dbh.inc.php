<?php
   
    // php admin user and password
    $dsn = "mysql:host=localhost;dbname=myfirstdatabase";
    $dnsusername = "root";
    $dbpassword = "12345";
    // connection database to php file ( vise versa )
    try {
        $pdo = new PDO($dsn,  $dnsusername, $dbpassword );
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    // if error occur
    catch (PDOException $e) {
        echo "Connection failed" . $e->getMessage();

    }

