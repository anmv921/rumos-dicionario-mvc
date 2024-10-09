<?php

require("models/word.php");

$modelWord = new Word();

$word = $modelWord->searchWord($_POST["search-word"]);

require("views/word_detail.php");