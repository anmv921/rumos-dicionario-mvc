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



} // End class