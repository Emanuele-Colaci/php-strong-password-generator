<?php 

    require __DIR__. '/functions.php';

    if(isset($_GET['password_length'])){
        $password_length = $_GET['password_length'];
        
        // GENERA UNA PASSWORD CASUALE
        $generatedPassword = generatePassword($password_length);
        
        // MOSTRA LA PASSWORD DELL'UTENTE
        echo "La tua password generata è: " .$generatedPassword;
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

        <form action="index.php" method="GET">
            <label for="password_length">Lunghezza Password:</label>
            <input type="number" name="password_length" id="password_length" min="6" max="20" required>
            <br>
            <input type="submit" value="Genera Password">
        </form>
    </body>
</html>