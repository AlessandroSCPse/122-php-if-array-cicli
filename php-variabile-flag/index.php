<?php
// Verifichiamo che una parola sia presente in un array
$words = ['macchina', 'moto', 'autobus'];

$myWord = 'moto';

// Scorriamo tutti gli elementi dell'array
// e verifichiamo se l'elemento è uguale a $myWord
// Se è uguale la variabile flag diventa true
$wordFound = false;
foreach($words as $word) {

    if($word === $myWord) {
        $wordFound = true;
    }
}

$userMessage;
if($wordFound) {
    $userMessage = 'Trovata';
} else {
    $userMessage = 'Non trovata';
}

echo $userMessage;
?>
