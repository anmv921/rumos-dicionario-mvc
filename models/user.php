<?php

require_once("base.php");

class User extends Base {
    public function getUsers() {
        $query = $this->db->prepare("
                SELECT 
                    id_user, name, email, is_admin 
                FROM 
                    user;
            ");
    
            $query->execute(  );
    
            return $query->fetchAll();
    }

    public function getUser($in_id) {
        $query = $this->db->prepare("
                SELECT 
                    id_user, name, email, is_admin 
                FROM 
                    user
                WHERE
                    id_user = ?
            ");
    
            $query->execute( [ $in_id ] );
    
            return $query->fetchAll();
    }

    public function createUser($data) {

        $query = $this->db->prepare("
            INSERT INTO user
            (name, email, password) 
            VALUES 
            (?, ?, ?)
        ");

        $query->execute( [ $data["name"], $data["email"], $data["password"] ] );

        $data['id_user'] = $this->db->lastInsertId();

        return $data;
    } // End function createUser
} // End class

