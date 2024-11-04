<?php

require_once("models/word_lists.php");
$modelList = new WordList();
require_once("models/user.php");
$modelUser = new User();

if (  isset($_SESSION["id_user"]) == false ) {
    echo "Unauthorized";
    http_response_code(401);
    die();
}

$logged_user = $modelUser->getUser($_SESSION["id_user"]);

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

if ( empty($url_parts[3]) | empty($url_parts[5]) ) {
    echo "Bad request";
    http_response_code(400);
    die();
}

$id_word = $url_parts[3];
$id_list = $url_parts[5];

$found_list = $modelList->getListWord($id_list, $id_word);

if ($found_list == false ) {
    echo "Not found";
    http_response_code(404);
    die();
}

if (  isset($_SESSION["id_user"]) != 
    $found_list[0]["id_user"] ) {
    echo "Unauthorized";
    http_response_code(401);
    die();
}



$modelList->deleteWordFromList($id_list, $id_word);

header("location:". ROOT . "/word_list/" . $id_list );