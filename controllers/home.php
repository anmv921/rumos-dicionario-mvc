<?php

require_once("models/word.php");
$modelWord = new Word();

$word_of_the_day = $modelWord->getWordOfTheDay();

require ("views/home.php");



