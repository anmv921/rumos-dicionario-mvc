<?php

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

$_SESSION["edit_password_ok"] = false;

require_once("models/user.php");
$modelUser = new User();
$logged_user = $modelUser->getUser($_SESSION["id_user"]);

$arr_errors = [];
$bool_validationError = false;

if ( isset( $_POST["edit_password"] )  ) {
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
        empty($_POST["new_password"]) | 
        mb_strlen($_POST["new_password"]) < 8 |
        mb_strlen($_POST["new_password"]) > 1000
    ) {
        $arr_errors[] = "Invalid password";
        $bool_validationError = true;
    }

    if ( $_POST["new_password"] !== $_POST["confirm_password"] ) {
        $arr_errors[] = "Passwords don't match";
        $bool_validationError = true;
    }

    if ($bool_validationError == false) {
        $modelUser->updatePassword($_POST["id_user_to_update"], $_POST["new_password"]);

        $_SESSION["edit_password_ok"] = true;

        header("location:" . ROOT . "/profile/" );
    }

}

require("views/edit_password.php");