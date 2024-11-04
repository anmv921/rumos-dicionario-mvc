<?php

require_once("models/word.php");
$modelWord = new Word();
$url_parts = explode("/", $_SERVER["REQUEST_URI"]);
$letter = $url_parts[2];
$words = $modelWord->getWordByLetter($letter);


require ("views/browse.php");


