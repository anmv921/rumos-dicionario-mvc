<?php

require_once("base.php");

class User extends Base {
    public function getUsers() {
        $query = $this->db->prepare("
                SELECT 
                    id_user, name, email, is_admin, is_active
                FROM 
                    user;
            ");
    
            $query->execute(  );
    
            return $query->fetchAll();
    } // End function 

    public function getUser( $in_id ) {
        $query = $this->db->prepare("
                SELECT 
                    id_user,
                    name,
                    email,is_admin,
                    is_active,
                    activation_key,
                    is_admin
                FROM 
                    user
                WHERE
                    id_user = ?
            ");
    
            $query->execute( [ $in_id ] );
    
            return $query->fetch();
    } // End function getUser


    public function getByEmail( $in_email ) {
        $query = $this->db->prepare("
                SELECT 
                    id_user, password, is_active, name
                FROM 
                    user
                WHERE 
                    email = ?
            ");

            $query->execute([ $in_email ]);

            return $query->fetch();
    } // End function getByEmail

    public function createUser($data) {

        $api_key = bin2hex(random_bytes(16));

        $activation_key = bin2hex(random_bytes(16));

        $query = $this->db->prepare("
            INSERT INTO user
            (name, email, password, activation_key, api_key) 
            VALUES 
            (?, ?, ?, ?, ?)
        ");

        $query->execute([ 
            $data["name"], 
            $data["email"], 
            password_hash( $data["password"], PASSWORD_DEFAULT ),
            $activation_key,
            $api_key
        ]);

        $data['id_user'] = $this->db->lastInsertId();
        $data['activation_key'] = $activation_key;

        return $data;
    } // End function createUser

    public function activateUser($in_id) {
         $query = $this->db->prepare("
            UPDATE user SET 
            is_active=1 
            WHERE id_user = ?
         ");
         return $query->execute([ $in_id ]);
    } // End function activateUser

} // End class

