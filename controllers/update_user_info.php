<?php

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);


$id_user_to_update = $url_parts[2];
$bool_success = false;

require_once("models/user.php");
$modelUser = new User();

$logged_user = $modelUser->getUser($_SESSION["id_user"]);

$user_to_update = $modelUser->getUser($id_user_to_update);

$arr_errors = [];
$bool_validationError = false;

if ( isset( $_POST["update_user_info"] )  ) {
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
        empty($_POST["new_name"]) |
        mb_strlen($_POST["new_name"]) < 3 |
        mb_strlen($_POST["new_name"]) > 60 
    ) {
        $arr_errors[] = "Invalid name";
        $bool_validationError = true;
    }

    if ( 
        empty($_POST["new_email"]) |
        filter_var($_POST["new_email"], FILTER_VALIDATE_EMAIL) === false
     ) {
        $arr_errors[] = "Invalid email";
        $bool_validationError = true;
    }

    if ( $bool_validationError == false ) {

        if ($logged_user["is_admin"]) {

            $admin = 0;
            if ( isset($_POST["is_admin"]) && $_POST["is_admin"] =='on' ) {
                $admin = 1;
            }

            $active = 0;
            if ( isset($_POST["is_active"]) && $_POST["is_active"] =='on' ) {
                    $active = 1;
            }
        } else {
            $admin = $logged_user["is_admin"];
            $active = $logged_user["is_active"];
        }

       $result = $modelUser->updateUserInfo(
        $_POST["id_user_to_update"],
        $_POST["new_name"],
        $_POST["new_email"],
        $active,
        $admin
       );

       $bool_success = true;

       $_SESSION["user_update_ok"] = true;



       if ($logged_user["id_user"] == $_POST["id_user_to_update"]) {
                header("location:" . ROOT . "/profile/" );
        } else {
            header("location:" . ROOT . "/admin_area/" );
        }
    
    }
}


require("views/update_user_info.php");