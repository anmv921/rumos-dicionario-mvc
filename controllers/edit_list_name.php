<?php

// TODO see how to change post to put

require_once("models/word_lists.php");
$modelWordList = new WordList();

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

// if ( empty($url_parts[2]) ) {
//     echo "Bad request";
//     http_response_code(400);
//     die();
// }

$id_list = $url_parts[2];


$list = $modelWordList->getList($id_list); 

// if ($list == false ) {
//     echo "Not found";
//     http_response_code(404);
//     die();
// }

// if (  isset($_SESSION["id_user"]) != $list["id_user"] ) {
//     echo "Unauthorized";
//     http_response_code(401);
//     die();
// }

$bool_update_ok = false;

if(isset ($_POST["edit-list"])) {




     // Sanitization to prevent cross-site scripting
     foreach( $_POST as $key => $value ) {
        $_POST[ $key ] = htmlspecialchars( strip_tags( trim( $value ) ) );
    }

    $token = $_POST["token"];

    if (!$token || $token !== $_SESSION['token']) {
        echo '<p class="error">Error: invalid form submission</p>';
        header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
        exit;
    }

    $result = $modelWordList->editListName( $_POST["id_list"], $_POST["new_name"] );

    // TODO check if the update was ok by getting the list name

    $bool_update_ok = true;
    $_SESSION["list_update_ok"] = true;

    header("location:". ROOT . "/edit_list_name/" . trim($_POST["id_list"]));

    
}

require("views/edit_list_name.php");