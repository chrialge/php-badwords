<?php

var_dump($_GET);

$word = $_GET['word'];
$paragraph = $_GET['paragraph'];

$paragraph = str_replace($word, "***", $paragraph);

$word_length = strlen($word);
$paragraph_length = strlen($paragraph);



?>

<h4>La parola da censurare e: <?php echo $word ?></h4>
<span>la parola e lunga: <?php echo $word_length ?></span>

<p>Il paragrafo: <?php echo $paragraph?></p>
<span>il paragrafo e lungo: <?php echo $paragraph_length?></span>

