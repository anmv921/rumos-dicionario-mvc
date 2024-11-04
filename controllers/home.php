<?php

require_once("models/word.php");
$modelWord = new Word();

require_once("models/definition.php");
$modelDefinition = new Definition();

// TODO add a loop of 3-5 retries, this code seems to fail sometimes
// maybe because the database connection is slow?
$word_of_the_day = $modelWord->getWordOfTheDay();

if ($word_of_the_day == false) {
    try {
        $word_of_the_day = $modelWord->getRandomWord();

        if ( isset($word_of_the_day["id_word"]) && 
        empty($word_of_the_day["id_word"])==false ) {

            $definitions = $modelDefinition->getDefinitions($word_of_the_day["id_word"] );
        }

        if ( isset($definitions) && empty($definitions)==false ) {
            $rand_key = array_rand($definitions, 1);
            $word_of_the_day["Definition"] = $definitions[$rand_key]["Definition"];
            $word_of_the_day["id_definition"] = $definitions[$rand_key]["id_definition"];
            $modelWord->create_word_of_the_day(
                $word_of_the_day["id_word"], $word_of_the_day["id_definition"]);
                $word_of_the_day = $modelWord->getWordOfTheDay();
            }
        }

        
    catch (Exception $e) {

    }
} // End if $word_of_the_day == false

$newest_word = $modelWord->getNewestWord();

require ("views/home.php");



