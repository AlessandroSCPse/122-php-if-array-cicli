<?php
$number = 3;

// $evenOrOdd;
// if($number % 2 === 0) {
//     $evenOrOdd = 'pari';
// } else {
//     $evenOrOdd = 'dispari';
// }

$evenOrOdd = ($number % 2 === 0) ? 'pari' : 'dispari';

var_dump($evenOrOdd);
?>
