<?php 

    session_start();

    require __DIR__. '/functions.php';

    if(!empty($_POST)){
        if(isset($_POST['password_length'])){

            $password_length = $_POST['password_length'];
    
            $generated_password = generatePassword($password_length);
    
            $_SESSION['generated_password'] = $generated_password;
    
            header("Location: view_password.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-strong-password-generator</title>
    </head>
    <body>
        <h1>Strong Password Generator</h1>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!-- UTILIZZO DI $_SERVER['PHP_SELF'] COME ATTRIBUTO ACTION DEL FORM -->
            <label for="password_length">Lunghezza Password:</label>
            <input type="number" name="password_length" id="password_length" min="6" max="20" required>
            <br>
            <input type="submit" value="Genera Password">
        </form>
    </body>
</html>