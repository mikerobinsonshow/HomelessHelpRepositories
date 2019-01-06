<?php

$file_verbs = file('functions/verbs.txt');
$file_nouns = file('functions/nouns.txt');
$file_adjectives = file('functions/adjectives.txt');

$r = rand (0 , 5100 );
$uniqueusername = $file_adjectives[$r];

$r = rand (0 , 22100 );
$uniqueusername =  $uniqueusername . $file_nouns[$r];

$r = rand (0 , 3700 );
$uniqueusername =  $uniqueusername . $file_verbs[$r];

?>

