<?php
// Stampare a schermo, attraverso il foreach, tutti 
// gli elementi passati in GET.

foreach($_GET as $key => $value) {
    echo $key . ': ' . $value . '<br />';
}
?>
