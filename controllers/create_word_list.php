<?php

require("models/word_lists.php");
$modelList = new WordList();

$arr_errors = [];
$bool_validationError = false;

if( isset($_SESSION["id_user"]) ) {

    if (isset ($_POST["create_list"])) {
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

        // Validations
        if (
            empty($_POST["name"]) |
            mb_strlen($_POST["name"]) < 3 |
            mb_strlen($_POST["name"]) > 60 
        ) {
            $arr_errors[] = "Invalid list name";
            $bool_validationError = true;
        }

        if ($bool_validationError == false) {
            $modelList->createList($_POST["name"], $_SESSION["id_user"]);
            header("location:". ROOT . "/word_lists");
        }
    
    
    } // End if
 } // End if

require("views/create_word_list.php");