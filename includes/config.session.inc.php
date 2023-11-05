<?php
    // for session and security
    ini_set('session.use_only_cookies', 1);
    ini_set('session.use_strict_mode', 1);

    // cookies parameters
    session_set_cookie_params([
        'lifetime' => 1800, // seconds 
        'domain' => 'localhost', // localhsot if the web are not deploy, change it to example.com if being deploy
        'path' => '/', // any sub folder or location
        'secure' => true,
        'httponly' => true,


    ]);

session_start();
// to generate ID
if(!isset($_SESSION["last_regeneration"])){
    regenerate_id();
} else{
    $interval = 60 * 30;

    if(time() - $_SESSION['last_regeneration'] >= $interval){
       regenerate_id();
    }
}

function regenerate_id(){
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
}
