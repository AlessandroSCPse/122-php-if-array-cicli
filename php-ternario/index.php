<?php
// $text;
// if(isset($_GET['text'])) {
//     $text = $_GET['text'];
// } else {
//     $text = '';
// }

$text = isset($_GET['text']) ? $_GET['text'] : '';

// $text = $_GET['text'] ?? '';

echo 'Il tuo testo è: ' . $text;
?>
