<?php
// $dog = [
//     'name' => 'Pluto',
//     'eyeColor' => 'Marroni',
//     'age' => 12
// ];

// var_dump($dog);

// lista di cani in cui ogni elemento rappresenta un cane
$dogs = [
    [
        'name' => 'Pluto',
        'eyeColor' => 'Marroni',
        'age' => 12
    ],
    [
        'name' => 'Toby',
        'eyeColor' => 'Verdi',
        'age' => 7
    ],
    [
        'name' => 'Friedman',
        'eyeColor' => 'Neri',
        'age' => 8
    ]
];
 
// var_dump($dogs[1]['name']);
$dog = [
    'name' => 'Fufi',
    'eyeColor' => 'Verdi',
    'age' => 8
];

$dogs[] = $dog;

var_dump($dogs);
?>
