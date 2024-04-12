<?php

// una specie di console.log
var_dump($_GET);

// variabile che prende il valore della query con la parola chiave 'word'
$word = $_GET['word'];

// variabile che prende il valore della query con la parola chiave 'paragraph'
$paragraph = $_GET['paragraph'];

// tutte le parole del paragrafo identiche al valore di word vengono sostituite con tre asterischi 
$paragraph = str_replace($word, "***", $paragraph);

// variabile che contiene la lunghezza di word
$word_length = strlen($word);

// variabile che contiene la lunghezza del paragrafo
$paragraph_length = strlen($paragraph);



?>

<!-- stampa il contenuto e il valore della variabile word -->
<h4>La parola da censurare e: <?php echo $word ?></h4>

<!-- stampa il contenuto e il valore della variabile word_length -->
<span>la parola e lunga: <?php echo $word_length ?></span>

<!-- stampa il contenuto e il valore della variabile paragraph -->
<p>Il paragrafo: <?php echo $paragraph ?></p>

<!-- stampa il contenuto e il valore della variabile paragraph_length-->
<span>il paragrafo e lungo: <?php echo $paragraph_length ?></span>