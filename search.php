<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userSearch = $_POST["usersearch"];
       
    
        try {
            require_once "includes/dbh.inc.php";
            
            $query = "SELECT * FROM c;";
    
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":pwd", $pwd);
            $stmt->bindParam(":email", $email);
            $stmt->execute();

            die();
        } 
        catch (PDOException $e) {
            die("Query faield: " . $e->getMessage());
        }
    }
    else{
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
  
</body>
</html>