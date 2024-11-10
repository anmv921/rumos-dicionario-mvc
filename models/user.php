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
    } // End function getUsers

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
            (name, email, password, activation_key, api_key, is_active) 
            VALUES 
            (?, ?, ?, ?, ?, ?)
        ");

        $query->execute([ 
            $data["name"], 
            $data["email"], 
            password_hash( $data["password"], PASSWORD_DEFAULT ),
            $activation_key,
            $api_key,
            1
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

    public function updatePassword($in_id, $in_new_password) {

        $query = $this->db->prepare("
            UPDATE 
                user
            SET 
                password = ?
            WHERE 
                id_user = ?
        ");

    return $query->execute([
        password_hash( $in_new_password, PASSWORD_DEFAULT ),
        $in_id
     ]);

    } // End function updatePassword

    public function updateUserInfo(
        $in_id, $in_new_name, $in_new_email, $in_active, $in_admin) {

        $query = $this->db->prepare("
            UPDATE 
                user
            SET 
                is_active = ?,
                is_admin = ?,
                name = ?,
                email = ?
            WHERE 
                id_user = ?
         ");

        return $query->execute([ 
            $in_active,
            $in_admin,
            $in_new_name,
            $in_new_email,
            $in_id 
        ]);
    } // End function updateUserInfo

    public function deleteUser($in_id) {
        $query = $this->db->prepare("
            DELETE FROM 
                user 
            WHERE 
                user.id_user = ?
        ");
        return $query->execute([$in_id]);
    } // End function deleteUser

} // End class

