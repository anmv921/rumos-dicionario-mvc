<?php

require("models/word_lists.php");
$modelList = new WordList();

if(isset($_SESSION["id_user"])) { 
    $myLists = $modelList->getUserLists($_SESSION["id_user"]);
}

$publicLists = $modelList->getPublicLists();

require("views/word_lists.php");