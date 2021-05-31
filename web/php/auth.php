<?php

    require_once 'config.php';

    class Auth extends Database{

        // Registra un nuevo usuario
        public function register($name, $email, $pass){
            $sql = "INSERT INTO users (name, email, pass) VALUES (:name, :email, :pass)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['name'=>$name, 'email'=>$email, 'pass'=>$pass]);
            return true;
        }

        // revisa si ya existe el usuario
        public function user_exist($email){
            $sql = "SELECT email FROM users WHERE email = :email";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email'=>$email]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        }
    } 



?>