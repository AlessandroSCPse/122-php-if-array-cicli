<?php
// Tramite un form inviare una stringa al server 
// nella stessa pagina.
// Se la variabile password passata in GET è uguale a 
// “Boolean” stampare una stringa verde, 
// altrimenti stampare una stringa rossa.

$word = isset($_GET['word']) ? $_GET['word'] : '';
$wordClass = $word === 'Boolean' ? 'green' : 'red';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label>La tua parola</label>
        <input name="word" type="text" value="<?php echo $word; ?>">

        <button type="submit">Invia</button>
    </form>

    <?php if(empty($word)) { ?>
        <!-- HTML da stampare -->
        <p>Inserisci una parola</p>
    <?php } else { ?>
        <p class="classe-statica <?php echo $wordClass; ?>"><?php echo $word; ?></p>
    <?php } ?>
</body>
</html>
