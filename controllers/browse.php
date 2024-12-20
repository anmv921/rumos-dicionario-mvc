<?php

require_once("models/word.php");
$modelWord = new Word();
$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

$letter = $url_parts[2];

$bool_letter = false;

if ( empty($letter) == false ) {
    
    for ($i = 97; $i <= 122; $i++) { 
        if (chr($i) == $letter ) {
            $bool_letter = true;
            break;
             
        }
    }
    if ( $letter == "0-9" ) { $bool_letter = true;}
}

if ($bool_letter == false) {
    echo "Bad request";
    http_response_code(400);
    header("location:". ROOT . "/");
    exit;
}

$page =  $url_parts[4];

$page = (int) $page;
$limit = 10;
$offset = ($page - 1) * $limit;

$words = $modelWord->getWordByLetter(in_letter: $letter, in_page: $page, in_offset: $offset, in_limit: $limit);

require ("views/browse.php");


