<?php
$dogs = [
    [
        'name' => 'Pluto',
        'eyeColor' => 'marroni',
        'age' => 7
    ],
    [
        'name' => 'Tobi',
        'eyeColor' => 'verdi',
        'age' => 9
    ],
    [
        'name' => 'Fufi',
        'eyeColor' => 'marroni',
        'age' => 12
    ]
];

// foreach($dogs as $dog) {
//     var_dump($dog['name']);
//     var_dump($dog['age']);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cagnolini</h2>

    <ul>
        <?php foreach($dogs as $dog) { ?>
            <li>
                <div>Nome: <?php echo $dog['name']; ?></div>
                <div>Colore degli occhi: <?php echo $dog['eyeColor']; ?></div>
                <div>Età: <?php echo $dog['age']; ?></div>
            </li>
        <?php } ?>
    </ul>
</body>
</html>