<?php

// TODO csrf token?

require_once("models/word_lists.php");
$modelList = new WordList();

require_once("models/user.php");
$modelUser = new User();
$logged_user = $modelUser->getUser($_SESSION["id_user"]);

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);
$id_list = $url_parts[2];

if( isset($id_list) == false | empty($id_list) | isset($_SESSION["id_user"])==false ) {
    http_response_code(400);
    header("location:". ROOT . "/");
    exit;
}

$found_list = $modelList->getList($id_list);

if ( $found_list == false ) {
    echo "List not found";
    http_response_code(404);
    die();
}

if ( $found_list["id_user"] != $logged_user["id_user"] ) {
    echo "Unauthorized";
    http_response_code(401);
    die();
}


$result = $modelList->deleteList($id_list);

header("location:". ROOT . "/word_lists");