<?php

declare(strict_types= 1);
require_once 'signup.model.inc.php';
function is_input_type(string $username, string $pwd,string $email){
    if(empty($username) || empty($pwd) || empty($email)){
        return true;
    }
    else {
        return false;
    }
}
// cheak if the email is valid
function is_email_invalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else {
        return false;
    }
}

function is_username_taken(object $pdo, string $username){
    if(get_username($pdo, $username)){
        return true;
    }
    else{
        return false;
    }
}

function is_email_registered(object $pdo, string $email){
    if(get_email($pdo, $email)){
        return true;
    }
    else{
        return false;
    }
}

function create_user(object $pdo, string $pwd, string $username, string $email)
{
    set_user($pdo, $pwd,  $username, $email);
}


