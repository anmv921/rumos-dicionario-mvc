<?php

require("models/word.php");
$modelWord = new Word();

require("models/definition.php");
$modelDefinition = new Definition();

require("models/word_lists.php");
$modelWordList = new WordList();

if ( isset($_GET["search-word"] ) && strlen(trim($_GET["search-word"])) !== 0 )  {

    // Sanitização
    $_GET["search-word"] = htmlspecialchars(strip_tags(trim($_GET["search-word"])));

    $word = $modelWord->searchWord($_GET["search-word"]);

    $definitions = $modelDefinition->getDefinitions($word["id_word"]);

    $i = 0;
    foreach($definitions as $definition) {

        $def_examples = $modelDefinition->getExamples( $definition["id_definition"] );
        if ( $def_examples ) {
            $definitions[$i]["examples"] = $def_examples;
        }

        $def_synonyms = $modelDefinition->getSynonyms( $definition["id_definition"] );
        if ( $def_synonyms ) {
            $definitions[$i]["synonyms"] = $def_synonyms;
        }

        $i++;
    } // End foreach $definitions

    if(isset($_SESSION["id_user"])) {
        $myLists = $modelWordList->getUserLists($_SESSION["id_user"]);
    }

    require("views/word.php");
} else {
    header("Location: " . ROOT . "/");
}

