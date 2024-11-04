<?php

require("models/word_lists.php");
$modelList = new WordList();

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

$id_list = $url_parts[2];

$list = $modelList->getListInfo($id_list);

if (
    $list[0]["id_user"] != 
    $_SESSION["id_user"]) {
    echo "Not Acceptable";
    http_response_code(406);
    die();
}

require("views/word_list.php");