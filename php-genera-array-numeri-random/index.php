<?php
// Creare un array con 15 numeri casuali, tenendo 
// conto che l’array non dovrà contenere lo stesso 
// numero più di una volta

// Creiamo un array vuoto
// creo un ciclo while che avanti fino quando l'array non ha 
// 15 numeri
    // genero un numero random fra 1 e 100
    // lo aggiungo nell'array solo se non 
    // è già presente nell'array

$numbers = [];
while(count($numbers) < 15) {
    $randomNumber = rand(1, 100);

    if(!in_array($randomNumber, $numbers)) {
        $numbers[] = $randomNumber;
    }
}

var_dump($numbers);

?>
