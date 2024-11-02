<?php

require_once("base.php");

class Word extends Base {

    public function searchWord( $in_word ) {
        // TODO full text search
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



} // End class