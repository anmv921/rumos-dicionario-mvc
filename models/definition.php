<?php

require_once("base.php");

class Definition extends Base {

    public function getDefinitions( $in_idWord ) {

        $query = $this->db->prepare("
            SELECT 
                definition.id_definition, definition.POS, definition.Definition 
            FROM 
                word 
            LEFT JOIN 
                definition 
            ON 
                word.id_word = definition.id_word 
            WHERE 
                word.id_word = ?;
        ");

        $query->execute( [ $in_idWord ] );

        return $query->fetchAll();
    }

    public function getExamples( $in_idDefinition ) {
        $query = $this->db->prepare("
            SELECT 
                example_phrase.text 
            FROM 
                example_phrase 
            LEFT JOIN 
                definition_has_example_phrase 
            ON 
                definition_has_example_phrase.id_example = 
                example_phrase.id_example 
            WHERE 
                definition_has_example_phrase.id_definition = ?;
        ");

        $query->execute( [ $in_idDefinition ] );

        return $query->fetchAll();
    }

}