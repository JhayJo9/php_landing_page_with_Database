<?php

declare(strict_types= 1);

function get_username(object $pdo, string $username){

    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result["username"];
}

function get_email(object $pdo, string $email){

    $query = "SELECT username FROM  users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result["email"];
}

function set_user(object $pdo, string $pwd, string $username, string $email)
{
     // query
     $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
     $stmt = $pdo->prepare($query);

     // for hashing password
     $options = ['cost' => 12];
     $hashPwd = password_hash($pwd , PASSWORD_BCRYPT, $options);

     // send data to the databse
     $stmt->bindParam(":username", $username);
     $stmt->bindParam(":pwd", $hashPwd);
     $stmt->bindParam(":email", $email);
     $stmt->execute();
}