<?php

declare(strict_types= 1);

function cheack_signup_error(){
    if(isset($_SESSION["errors_signup"])){
        $errors = $_SESSION["errors_signup"];
       
        echo "<br>"; 
        foreach($errors as $error){
            echo '<div class="errorsC">'.'<p class="form-error">'  .$error . '</p>' .'</div>';
        } 
        
        unset($_SESSION["errors_signup"]);
    }
    else if(isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo '<br>';
        echo '<p class="form-succes">Signup Succes!!</p>';
    }
}
