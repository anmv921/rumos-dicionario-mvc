<?php

require_once("models/base.php");

$base = new Base();

$filepath = "C:\\Users\\an.m\\Desktop\\Code\\rumos-dicionario-proj-backend\\rumos-dicionario-mvc\\data\\opted\\OPTED-Dictionary.csv";

$words = [];
$definitions = [];

$row = 0;

echo "olá<br>";

if ( ( $handle = fopen($filepath, "r") ) !== FALSE ) {

    // Skip 1st line - headers
    fgetcsv($handle, 2000, ",");

    // Loop over rows
    while ( ( $data = fgetcsv($handle, 2000, ",") ) !== FALSE ) {
        $num = count($data);
        $row++;

        $current_word = strtolower(trim($data[0]));

        $found_key = array_search(
            $current_word,
            array_column($words, 'word')
        );
        
        $id_word = "";
        if ( $found_key === false ) {
            $id_word = $row;
            $words[] = [
                "id_word" => $id_word,
                "word" => $current_word
            ];
        } else {
            $id_word = $words[$found_key]["id_word"];
        }
        
        $definitions[] = [
            "id_word" => $id_word,
            "pos" => strtolower(trim($data[2])),
            "definition" => strtolower(trim($data[3]))
        ];
    }
    fclose($handle);
}

echo "Finished reading the csv file<br>";

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

echo "Done inserting the words into the datatable<br>";

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

echo "Done importing the definitions into the datatable<br>";