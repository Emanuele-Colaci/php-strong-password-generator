<?php

    session_start();
    
    if(!isset($_SESSION['generated_password'])){
        header("Location: index.php");
    }
    
    $generated_password = $_SESSION['generated_password'];
    unset($_SESSION['generated_password']);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Visualizza Password</title>
    </head>
    <body>
        <h1>Password Generata</h1>
        <p>La tua password generata è: <span class="password"><?php echo $generated_password; ?></span></p>
    </body>
</html>