<?php

require_once("base.php");

class WordList extends Base {

    public function createList($in_name, $in_id_user) {

        $query = $this->db->prepare("
            INSERT INTO 
            word_list
            ( list_name, is_public, id_user ) 
            VALUES 
            ( ?, 0 , ? )
        ");

        return $query->execute([ $in_name, $in_id_user ]);
    } // End function createList

    public function getLists() {
        $query = $this->db->prepare("
                SELECT 
                    id_list, list_name, is_public, id_user
                FROM 
                    word_list;
            ");
    
            $query->execute();
    
            return $query->fetchAll();
    } // End function getLists

    public function getUserLists( $in_idUser ) {
        $query = $this->db->prepare("
                SELECT 
                    id_list, list_name, is_public, id_user
                FROM 
                    word_list
                WHERE
                    id_user = ?
            ");
    
            $query->execute([$in_idUser]);
    
            return $query->fetchAll();
    } // End function getUserLists

    public function getPublicLists(  ) {
        $query = $this->db->prepare("
                SELECT
                    id_list, list_name, is_public, id_user
                FROM 
                    word_list
                WHERE
                    is_public = 1
            ");
    
            $query->execute();
    
            return $query->fetchAll();
    } // End function getPublicLists

    public function getListInfo( $in_id ) {
        $query = $this->db->prepare("
                SELECT 
                    word_list.id_list, 
                    word_list_has_word.id_word, 
                    word_list.list_name, 
                    word_list.is_public, 
                    word_list.id_user, 
                    word.Word
                FROM 
                    word_list 
                LEFT JOIN 
                    word_list_has_word 
                ON 
                    word_list_has_word.id_list = word_list.id_list 
                LEFT JOIN 
                    word 
                ON 
                    word.id_word = word_list_has_word.id_word 
                WHERE 
                    word_list.id_list = ?;
            ");
    
            $query->execute([$in_id]);
    
            return $query->fetchAll();
    } // End function getList

    public function getList($in_id) {
        $query = $this->db->prepare("
            SELECT
                id_list, list_name
            FROM
                word_list
            WHERE id_list = ?
        ");

        $query->execute([$in_id]);

        return $query->fetch();

    } // End function getListInfo

    public function getListByName($in_name, $in_id_user) {
        $query = $this->db->prepare("
            SELECT
                id_list, list_name, id_user
            FROM
                word_list
            WHERE
                list_name = ? AND id_user = ?
        ");

        $query->execute([$in_name, $in_id_user]);

        return $query->fetch();

    }

    public function getListWord( $in_id_list, $in_id_word ) {
        $query = $this->db->prepare("
            SELECT 
                id_list, id_word
            FROM 
                word_list_has_word
            WHERE 
                id_list = ? AND id_word = ?
        ");

        $query->execute([ $in_id_list, $in_id_word ]);

        return $query->fetchAll();
    } // End function getListWord

    public function insertWordIntoList($in_id_word, $in_id_list) {
        $query = $this->db->prepare("
            INSERT INTO word_list_has_word
            (id_list, id_word)
            VALUES
            (?, ?)
        ");

        return $query->execute( [ $in_id_list, $in_id_word ] );

    } // insertWordIntoList

    public function editListName($in_id, $in_new_name) {
        $query = $this->db->prepare("
            UPDATE
                word_list 
            SET 
                list_name = ? 
            WHERE 
                word_list.id_list = ?
        ");

        return $query->execute([$in_new_name, $in_id]);

    } // End function editListName

    public function deleteList($in_id) {
        $query = $this->db->prepare("
            DELETE 
            FROM 
                word_list 
            WHERE 
                word_list.id_list = ?
        ");

        return $query->execute([ $in_id ]);
    } // End function deleteList

    public function deleteWordFromList( $in_id_list, $in_id_word ) {
        $query = $this->db->prepare("
            DELETE FROM 
                word_list_has_word 
            WHERE 
                word_list_has_word.id_list = ?
            AND 
                word_list_has_word.id_word = ?
        ");

        return $query->execute([ $in_id_list, $in_id_word ]);


    } // End function deleteWordFromList

    

} // End class