<?php
    session_start();
    
    if(isset($_SESSION['generated_password'])){
        $generated_password = $_SESSION['generated_password'];
        unset($_SESSION['generated_password']);
    }else{
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Visualizza Password</title>
    </head>
    <body>
        <h1>Password Generata</h1>
        <p>La tua password generata è: <?php echo $generated_password; ?></p>
    </body>
</html>