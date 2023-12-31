<?php 

    session_start();

    require __DIR__. '/functions.php';

    if(!empty($_POST)){

        // RECUPERA I VALORI DEL FROM
        $password_length = $_POST['password_length'];
        $include_numbers = isset($_POST['include_numbers']);
        $include_letters = isset($_POST['include_letters']);
        $include_symbols = isset($_POST['include_symbols']);
        $allow_repeating = ($_POST['allow_repeating'] == 'yes'); // Ottiene il valore selezionato

        // VERIFICA LA LUNGHEZZA DELLA PASSWORD
        if($password_length >= 6 && $password_length <= 20){

            // GENERA LA PASSWORD IN BASE AI PARAMETRI SELEZIONATI
            $generated_password = generatePassword($password_length, $include_numbers, $include_letters, $include_symbols, $allow_repeating);

            // SALVA LA PASSWORD GENERATA NELLA SESSIONE
            $_SESSION['generated_password'] = $generated_password;

            // REDIRECT ALLA PAGINA PER VISUALIZZARE LA PASWWORD
            header("Location: view_password.php");
        }else{
            echo '<p style="color: #fff;">La password deve essere lunga da 6 a 20 caratteri</p>';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <title>php-strong-password-generator</title>
    </head>
    <body>
        <h1>Strong Password Generator</h1>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!-- UTILIZZO DI $_SERVER['PHP_SELF'] COME ATTRIBUTO ACTION DEL FORM -->
            <label for="password_length">Lunghezza Password:</label>
            <input type="number" name="password_length" id="password_length" min="6" max="20" required>
            <br>
            <label for="include_numbers">Includi numeri:</label>
            <input type="checkbox" name="include_numbers" id="include_numbers">
            <br>
            <label for="include_letters">Includi lettere:</label>
            <input type="checkbox" name="include_letters" id="include_letters">
            <br>
            <label for="include_symbols">Includi simboli:</label>
            <input type="checkbox" name="include_symbols" id="include_symbols">
            <br>
            <label for="allow_repeating">Consenti caratteri ripetuti:</label>
            <input type="radio" name="allow_repeating" value="yes" id="allow_repeating_yes">
            <label for="allow_repeating_yes">Sì</label>
            <input type="radio" name="allow_repeating" value="no" id="allow_repeating_no" checked>
            <label for="allow_repeating_no">No</label>
            <br>
            <input type="submit" value="Genera Password">
        </form>
    </body>
</html>