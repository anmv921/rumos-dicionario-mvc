<?php

require("models/word.php");
require("models/definition.php");

$modelWord = new Word();
$modelDefinition = new Definition();

$word = $modelWord->searchWord($_POST["search-word"]);
$definitions = $modelDefinition->getDefinitions($word["id_word"]);


$examples = [];

foreach($definitions as $definition) {
    $examples[] = [
        "id_definition" => $definition["id_definition"],
        "text" => $modelDefinition->getExamples($definition["id_definition"])
    ];
}

require("views/word.php");