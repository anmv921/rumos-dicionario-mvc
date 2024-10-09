<?php

require_once("models/base.php");

$base = new Base();

$filepath = "C:\\Users\\an.m\\Desktop\\Code\\rumos-dicionario-proj-backend\\rumos-dicionario-mvc\\data\\opted\\OPTED-Dictionary.csv";

$row = 1;

$words = [];
$definitions = [];

$i = 0;
$lastWord = "";

if ( ( $handle = fopen($filepath, "r") ) !== FALSE ) {

    // Skip 1st line - headers
    fgetcsv($handle, 2000, ",");
    $row++;

    while ( ( $data = fgetcsv($handle, 2000, ",") ) !== FALSE ) {
        $num = count($data);
        $row++;

        if ( $lastWord !== $data[0] ) {

            $i++;
            $lastWord = $data[0];

            $words[] = [
                "id_word" => $i,
                "word" => $data[0]
            ];
        }

        $definitions[] = [
            "id_word" => $i,
            "pos" => $data[2],
            "definition" => $data[3]
        ];
    }
    fclose($handle);
}

foreach($words as $word) {
    $query = $base->db->prepare("
			INSERT INTO word
			(id_word, Word)
			VALUES(?, ?)
    ");

    $query->execute([
        $word["id_word"],
        $word["word"]
    ]);
}

foreach($definitions as $definition) {
    $query = $base->db->prepare("
			INSERT INTO definition
			(id_word, POS, Definition)
			VALUES(?, ?, ?)
    ");

    $query->execute([
        $definition["id_word"],
        $definition["pos"],
        $definition["definition"]
    ]);
}