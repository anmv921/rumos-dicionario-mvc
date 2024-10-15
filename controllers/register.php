<?php

require("models/user.php");

$modelUser = new User();

if (isset ($_POST["register-user"])) {
    
    $modelUser->createUser($_POST);

}

require("views/register.php");
