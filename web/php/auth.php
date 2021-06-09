<?php

    require_once 'config.php';

    class Auth extends Database{

        // Registra un nuevo usuario
        public function register($cedula,$name,$apellido1, $apellido2,$telefono,$direccion,$cuenta,$email,$pass,$token){
            $sql = "INSERT INTO users (cedula, nombre, apellido1, apellido2, telefono,direccion,cuentaBancaria,email,password,token) VALUES (:cedula,:name,:apellido1,:apellido2,:telefono,:direccion,:cuenta,:email,:pass,:token)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['cedula'=>$cedula,'nombre'=>$name,'apellido1'=>$apellido1,'apellido2'=>$apellido2,'telefono'=>$telefono,'direccion'=>$direccion,'cuentaBancaria'=>$cuenta,'email'=>$email,'password'=>$pass,'token'=>$token]);
            return true;
        }

        // revisa si ya existe el usuario
        public function user_exist($cedula){
            $sql = "SELECT cedula FROM users WHERE cedula = :cedula";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['cedula'=>$cedula]);
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

        // current user in session
        public function currentUser($cedula){
            $sql = "SELECT * FROM users WHERE cedula = :cedula AND deleted != 0";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['cedula'=>$cedula]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row;
        }



    } 



?>