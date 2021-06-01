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

        //loguea usuario existente
        public function login($cedula){
            $sql = "SELECT cedula, password FROM users WHERE cedula = :cedula AND deleted != 0";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['cedula'=>$cedula]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row;

        }
    } 



?>