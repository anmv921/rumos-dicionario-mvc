<?php

require_once("base.php");

class Word extends Base {

    public function searchWord( $in_word ) {
        $query = $this->db->prepare("
            SELECT 
                word.id_word, Word
            FROM 
                word
            WHERE 
                word.Word = ?
            OR
                word.Word LIKE ?
        ");
        $query->execute([ 
            $in_word,
            "'%" . $in_word  . "%'"
        ]);
        return $query->fetch();
    } // End function searchWord

    public function getWordById($in_id) {
        $query = $this->db->prepare("
            SELECT 
                word.id_word, Word
            FROM 
                word
            WHERE 
                word.id_word = ?
        ");

        $query->execute( [ $in_id ] );

        return $query->fetch();
    } // End function getWordById

    public function getWordOfTheDay() {
        $query = $this->db->prepare("
            SELECT 
                word_of_the_day.id_word_of_the_day,
                word_of_the_day.date,
                word_of_the_day.id_word,
                word_of_the_day.id_definition,
                word.Word,
                definition.POS,
                definition.Definition
            FROM 
                word_of_the_day
            LEFT JOIN 
                word
            ON 
                word_of_the_day.id_word = word.id_word
            LEFT JOIN 
                definition
            ON 
                word_of_the_day.id_definition = definition.id_definition
            WHERE
                word_of_the_day.date = CURRENT_DATE;
        ");

        $query->execute();
    
        return $query->fetch();
        
    } // End function getWordOfTheDay


    // "
    //         WITH cte AS (
    //             SELECT 
    //                 ROW_NUMBER() OVER (ORDER BY id_word ASC) AS row_num,
    //                 id_word, 
    //                 Word 
    //             FROM 
    //                 word) 
    //             SELECT 
    //                 row_num, 
    //                 id_word, 
    //                 Word 
    //             FROM 
    //                 cte 
    //             WHERE 
    //                 row_num = 
    //                 FLOOR 
    //                 ( ( SELECT MIN(row_num) FROM cte ) + 
    //                 RAND() * ( ( SELECT MAX(row_num) FROM cte ) - 
    //                 ( SELECT MIN(row_num) FROM cte ) + 1 ) );
    //     "



    public function getRandomWord() {
        // Create a common table expression to get the rows of the word table
        // Then select a random row with the formula
        // FLOOR(min_value + RAND() * (max_value - min_value +1))
        $query = $this->db->prepare("
            WITH cte AS (
                SELECT 
                    ROW_NUMBER() OVER (ORDER BY id_word ASC) AS row_num,
                    id_word, 
                    Word 
                FROM 
                    word) 
                SELECT 
                    row_num, 
                    id_word, 
                    Word 
                FROM 
                    cte 
                WHERE 
                    row_num = 
                    1841
        ");

        $query->execute();
        return $query->fetch();

    } // End function getRandomWord

    public function create_word_of_the_day($in_id_word, $in_id_definition) {
        $query = $this->db->prepare("
            INSERT 
            INTO
                word_of_the_day 
                (date, id_word, id_definition) 
            VALUES 
                (CURDATE(), ?, ?);");
        return $query->execute([$in_id_word, $in_id_definition]);
            
    } // End function create_word_of_the_day

    public function getNewestWord() {
        $query = $this->db->prepare("
            SELECT 
            id_word, 
            Word, 
            id_user, 
            DATE_FORMAT(DATE(created_at), '%d-%m-%Y') AS date
            FROM word
            ORDER BY created_at DESC
            LIMIT 1;
        ");

        $query->execute();
        return $query->fetch();
    } // End function getNewestWord

    public function getWordByLetter($in_letter, $in_page, $in_offset, $in_limit) {


        

        if ($in_letter == "0-9") {
            $query = $this->db->prepare("
            SELECT 
                id_word, Word
            FROM 
                word
            WHERE 
                Word LIKE '0%' OR
                Word LIKE '1%' OR
                Word LIKE '2%' OR
                Word LIKE '3%' OR
                Word LIKE '4%' OR
                Word LIKE '5%' OR
                Word LIKE '6%' OR
                Word LIKE '7%' OR
                Word LIKE '8%' OR
                Word LIKE '9%'
            LIMIT ?
            OFFSET ?
        ");
        $query->execute();
        } else {
            $query = $this->db->prepare("
            SELECT 
                id_word, Word
            FROM 
                word
            WHERE 
                Word LIKE ? LIMIT " . $in_limit . " OFFSET " . $in_offset .
            ";");
            $query->execute([ 
               $in_letter . "%",
                
         ]);
        } // End if else
     
        return $query->fetchAll();

    } // End function getWordByLetter

} // End class