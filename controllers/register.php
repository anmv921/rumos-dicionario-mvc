<?php

require("models/user.php");

$bool_sendEmail = true;

$modelUser = new User();
$bool_success = false;
$arr_errors = [];
$bool_validationError = false;

if (isset ($_POST["register-user"])) {
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
        $arr_errors[] = "Invalid name";
        $bool_validationError = true;
    }

    if ( 
        empty($_POST["email"]) |
        filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false
     ) {
        $arr_errors[] = "Invalid email";
        $bool_validationError = true;
    }

    if ( 
        empty($_POST["password"]) | 
        mb_strlen($_POST["password"]) < 8 |
        mb_strlen($_POST["password"]) > 1000
    ) {
        $arr_errors[] = "Invalid password";
        $bool_validationError = true;
    }

    if ( $_POST["password"] !== $_POST["confirm-password"] ) {
        $arr_errors[] = "Passwords don't match";
        $bool_validationError = true;
    }

    // If no errors, create user
    if ( $bool_validationError === false ) {
        // Check if user already exists, before creating him
        $user = $modelUser->getByEmail($_POST["email"]);
        if ( empty($user) ) {
            $createdUser = $modelUser->createUser($_POST);

            $id_user = $createdUser["id_user"];
            //$_SESSION["id_user"] = $id_user;
            $activation_key =  $createdUser["activation_key"];
            

            if ( $bool_sendEmail ) {

                // This would be replaced with the name of the new user
                // But we're just playing pretend here
                $receiverAddress = "andriy.myakush@gmail.com";
                $receiverName = "Yours truly";
                
                require("services/gmail.php");
            }

            $bool_success = true;
        }
        else {
            $arr_errors[] = "User already exists";
        }
    }
}

require("views/register.php");
