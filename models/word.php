<?php

require_once("base.php");

class Word extends Base {

    public function searchWord( $in_word ) {
        // TODO full text search or like

        $query = $this->db->prepare("
            SELECT word.id_word, Word
            FROM word
            WHERE word.Word = ?
        ");

        $query->execute( [ $in_word ] );

        return $query->fetch();
    }

}