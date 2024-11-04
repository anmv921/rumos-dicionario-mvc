<?php

require_once("models/user.php");
$modelUser = new User();


if( isset($_SESSION["id_user"]) == false ) {
    echo "Unauthorized";
    http_response_code(401); // unauthorized 
    exit;
}

$logged_user = $modelUser->getUser($_SESSION["id_user"]);

require("views/profile.php");
