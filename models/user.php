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
    } // End function 

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
    } // End function

    public function createUser($data) {

        $query = $this->db->prepare("
            INSERT INTO user
            (name, email, password) 
            VALUES 
            (?, ?, ?)
        ");

        $query->execute([ 
            $data["name"], 
            $data["email"], 
            password_hash( $data["password"], PASSWORD_DEFAULT ) 
        ]);

        $data['id_user'] = $this->db->lastInsertId();

        return $data;
    } // End function 

    public function getByEmail( $in_email ) {
        $query = $this->db->prepare("
                SELECT 
                    id_user, password
                FROM 
                    user
                WHERE 
                    email = ?
            ");

            $query->execute([ $in_email ]);

            return $query->fetch();
    } // End function

} // End class

