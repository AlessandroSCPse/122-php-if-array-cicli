<?php
// Inserire tante parole all’interno di un 
// array e controllare che la parola passata 
// dall’utente ci sia nell’array.

$words = ['macchina', 'moto', 'bicicletta', 'triciclo'];

$userWord = isset($_GET['word']) ? $_GET['word'] : '';

// Controllare che la parola dell'utente si trovi nell'array
$wordFound = in_array($userWord, $words);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label>La parola da cercare</label>
        <input name="word" type="text">

        <button type="submit">Invia</button>
    </form>

    <?php if(empty($userWord)) { ?>
        <p>Inserisci una parola</p>
    <?php } else { ?>
        <p><?php echo $wordFound ? 'Trovata' : 'Non trovata' ?></p>
    <?php } ?>
    
</body>
</html>