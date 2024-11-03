<?php

require_once("models/word.php");
$modelWord = new Word();

require_once("models/definition.php");
$modelDefinition = new Definition();

$word_of_the_day = $modelWord->getWordOfTheDay();

if ($word_of_the_day == false) {
    $word_of_the_day = $modelWord->getRandomWord();
    $definitions = $modelDefinition->getDefinitions($word_of_the_day["id_word"]);
    $rand_key = array_rand($definitions, 1);
    $word_of_the_day["Definition"] = $definitions[$rand_key]["Definition"];
    $word_of_the_day["id_definition"] = $definitions[$rand_key]["id_definition"];

    $modelWord->create_word_of_the_day(
        $word_of_the_day["id_word"], $word_of_the_day["id_definition"]);
    $word_of_the_day = $modelWord->getWordOfTheDay();
}

require ("views/home.php");



