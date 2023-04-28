<?php
    require_once '../server.php';

    class User{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function login($email, $password){
            $sql = "SELECT * FROM users WHERE email = :email";
            $params = [
                ':email' => $email
            ];

            // execute the query and fetch the user data
            $user = $this->db->select($sql, $params);

            // verify the password and return the user data if successful
            if(password_verify($password, $user['password'])){
                unset($user['password']);
                return $user;
            }else{
                return false;
            }
        }
    }
?>
