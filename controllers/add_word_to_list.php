<?php

require("models/word_lists.php");

$modelWordList = new WordList();

if (isset ($_POST["add-word-to-list"])) {
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

    $list = $modelWordList->getListWord( trim($_POST["id_list"]), trim($_POST["id_word"]) );

    if ($list == false) {
    
        $modelWordList->insertWordIntoList( trim($_POST["id_word"]), trim($_POST["id_list"]) );
        $message = "Insert ok";
        header("location:". ROOT . "/word_list/" . trim($_POST["id_list"]) );
    } else {
        $message = "Word already in list";
    }

}

require("views/add_word_to_list.php");

