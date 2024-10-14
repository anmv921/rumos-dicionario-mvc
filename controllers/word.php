<?php

require("models/word.php");
require("models/definition.php");

$modelWord = new Word();
$modelDefinition = new Definition();

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
}

require("views/word.php");