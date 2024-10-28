<?php

require("models/word_lists.php");
$modelWordList = new WordList();

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

$id_list = $url_parts[2];

$list = $modelWordList->getListInfo($id_list); 

$bool_update_ok = false;


if(isset ($_POST["edit-list"])) {

    $result = $modelWordList->editListName( $_POST["id_list"], $_POST["new_name"] );

    // TODO check if the update was ok by getting the list name

    $bool_update_ok = true;
    
    header("location:". ROOT . "/edit_list_name/" . $_POST["id_list"]);

    
}

require("views/edit_list_name.php");