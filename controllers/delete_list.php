<?php

require("models/word_lists.php");
$modelList = new WordList();

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

$id_list = $url_parts[2];

$result = $modelList->deleteList($id_list);

header("location:". ROOT . "/word_lists");