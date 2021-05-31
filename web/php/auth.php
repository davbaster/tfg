<?php

    require_once 'config.php';

    class Auth extends Database{

        // Registra un nuevo usuario
        public function register($name, $email, $password){
            $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['name'=>$name, 'email'=>$email, 'paswword'=>$password]);
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