<?php

require("models/user.php");
$modelUser = new User();

$users = $modelUser->getUsers();

// echo "<pre>";
// print_r($users);
// echo "</pre>";
// die();

require ("views/admin_area.php");
