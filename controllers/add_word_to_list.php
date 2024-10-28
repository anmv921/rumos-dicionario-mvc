<?php

require("models/word_lists.php");

$modelWordList = new WordList();

$list = $modelWordList->getListWord( trim($_POST["id_list"]), trim($_POST["id_word"]) );

if ($list == false) {
  
    $modelWordList->insertWordIntoList( trim($_POST["id_word"]), trim($_POST["id_list"]) );
    $message = "Insert ok";
} else {
    $message = "Word already in list";
}

require("views/add_word_to_list.php");

