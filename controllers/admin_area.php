<?php

require_once("models/user.php");
$modelUser = new User();

if( isset($_SESSION["id_user"]) == false ) {
    echo "Unauthorized";
    http_response_code(401); // unauthorized
    die();
}

$logged_user = $modelUser->getUser($_SESSION["id_user"]);

if ( $logged_user["is_admin"] == false) {
    echo "Unauthorized";
    http_response_code(401); // unauthorized
    die();
}


$users = $modelUser->getUsers();

require ("views/admin_area.php");
