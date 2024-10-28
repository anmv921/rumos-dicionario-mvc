<?php

require("models/word_lists.php");
$modelList = new WordList();

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

$id_word = $url_parts[3];
$id_list = $url_parts[5];

$modelList->deleteWordFromList($id_list, $id_word);

header("location:". ROOT . "/word_list/" . $id_list );