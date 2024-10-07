<?php

require_once("models/base.php");

$base = new Base();

$filepath = "C:\\Users\\an.m\\Desktop\\Code\\rumos-dicionario-proj-backend\\rumos-dicionario-mvc\\data\\opted\\OPTED-Dictionary.csv";

$row = 2;
if (($handle = fopen($filepath, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);

        if ( $row % 100 == 0 ) {
            echo "<p> Row - $row <br /></p>\n";
        }

        // echo "<p> $num fields in line $row: <br /></p>\n";

        $row++;

        $query = $base->db->prepare("
			INSERT INTO word_definition
			(Word, Count, POS, Definition)
			VALUES(?, ?, ?, ?)
		");

		$query->execute([
			$data[0],
			$data[1],
            $data[2],
            $data[3]
		]);

        // for ($c=0; $c < $num; $c++) {
        //     echo $data[$c] . "<br />\n";
        // }
    }
    fclose($handle);
}
