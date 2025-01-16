<?php

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

if ( empty($url_parts[2]) ) {
    echo "Bad request";
    http_response_code(400);
    die();
}

    $id = $url_parts[2];
    $bool_success = false;

    require_once("models/user.php");
    $modelUser = new User();

    $logged_user = $modelUser->getUser($_SESSION["id_user"]);


    if ( $logged_user == false | $logged_user["is_admin"] == false ) {
        echo "Unauthorized";
        http_response_code(401);
        die();
    }

    $user_to_delete = $modelUser->getUser($id);




if ( isset( $_POST["submit-login"] ) ) {

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


}


if($user_to_delete == false) {
    echo "Not found";
    http_response_code(404);
    die();
}

$modelUser->deleteUser($id);

$_SESSION["user_delete_ok"] = true;

header("location:" . ROOT . "/admin_area/" );












