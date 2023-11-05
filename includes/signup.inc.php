<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php"; // connection
        require_once "signup.model.inc.php";
        require_once "signup.contr.inc.php";
        require_once 'signup.view.inc.php';

        // ERROR HANDLERS
        $errors = [];
        if(is_input_type($username, $pwd, $email)){
            $errors["empty_input"] = "Fill in all fields";
        }
        if(is_email_invalid($email)){
            $errors["invalid_email"] = "invalid email used";
        }
        if(is_username_taken($pdo, $username)){
            $errors["username_taken"] = "Username is already taken";
        }
        if(is_email_registered($pdo, $email)){
            $errors["email_used"] = "Email already registered!!";
        }

        require_once 'config.session.inc.php';
        

        if($errors){
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;
            header("Location: ../index.php");
            die();
        }

        create_user($pdo,  $pwd, $username, $email);

        // back to the  home page
        header("Location: ../index.php?signup=success");
        $pdo = null;
        $stmt = null;
        die();
    } 
    // if error occur
    catch (PDOException $e) {
        die("Query faield: " . $e->getMessage());
    }
}
else{
    header("Location: ../index.php");
    die();
}