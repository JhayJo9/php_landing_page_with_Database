<?php
    require_once 'includes/config.session.inc.php';
    require_once 'includes/signup.view.inc.php';  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello!!!</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
    <div class="title-signup">
                    Sign up
    </div>
   <div class="container-signup">
       
        <div class="signup-contain">
            <form action="includes/signup.inc.php" method="post">
                <input class="usernameC" type="text" name="username" placeholder="Username">
                <input class="passC" type="password" name="pwd" placeholder="Password">
                <input class="emailC" type="text" name="email" placeholder="E-mail">
                <button class="signC">Signup</button>
            </form>
        </div>
   </div>
    
   
    
    <!--<h3>Change account</h3>
    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>Update</button>
    </form>

    <h3>Delete account</h3>
    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>Delete</button>
    </form>
    -->
    <?php
        cheack_signup_error();
    ?>
</body>
</html>