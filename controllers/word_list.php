<?php

require("models/word_lists.php");
$modelList = new WordList();

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

$id_list = $url_parts[2];

$list = $modelList->getListInfo($id_list);

require("views/word_list.php");