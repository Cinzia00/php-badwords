<?php

$text = $_GET['testo']; 
$word = $_GET['parola'];
$new_text = str_replace($word, '***', $text);

var_dump($text);
var_dump($word); 
var_dump($new_text); 

?>

<p>Il tuo testo: <?php echo $text ?></p>

<p>Il tuo testo censurato: <?php echo $new_text ?></p>




