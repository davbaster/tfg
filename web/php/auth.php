<?php

    require_once 'config.php';

    class Auth extends Database{

        // Registra un nuevo usuario
        public function register($cedula,$nombre,$apellido1, $apellido2,$telefono,$direccion,$cuenta,$email,$contrasena,$token){
            $sql = "INSERT INTO users (cedula, nombre, apellido1, apellido2, telefono,direccion,cuentaBancaria,email,contrasena,token) VALUES (:cedula,:nombre,:apellido1,:apellido2,:telefono,:direccion,:cuenta,:email,:contrasena,:token)";
            // $sql = "INSERT INTO users (cedula, nombre, apellido1, apellido2, telefono,direccion,cuentaBancaria,email,password,token) VALUES ('12345','d','c','c','7145','heredia','2000','test@test','12345','asdfasdfsa')";

            // $sql = "INSERT INTO users SET 
            // cedula = :cedula,
            // nombre = :nombre,
            // apellido1 = :apellido1,
            // apellido2 = :apellido2,
            // telefono = :telefono,
            // direccion =:direccion,
            // cuentaBancaria = :cuenta,
            // email = :email,
            // contrasena = :contrasena,
            // token = :token";



            $stmt = $this->conn->prepare($sql);
            // $stmt->execute(['cedula'=>$cedula,'nombre'=>$nombre,'apellido1'=>$apellido1,'apellido2'=>$apellido2,'telefono'=>$telefono,'direccion'=>$direccion,'cuentaBancaria'=>$cuenta,'email'=>$email,'password'=>$pass,'token'=>$token]);
            // $stmt->execute(['cedula'=>'123456','nombre'=>'d','apellido1'=>'c','apellido2'=>'d','telefono'=>'12','direccion'=>'as','cuentaBancaria'=>'d','email'=>'d','password'=>'asdfsaldflsadfdsak','token'=>'dfasdfsadfdsa']);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //binding
            // $stmt->bindParam(':cedula', $cedula);
            // $stmt->bindParam(':nombre', $nombre);
            // $stmt->bindParam(':apellido1', $apellido1);
            // $stmt->bindParam(':apellido2', $apellido2);
            // $stmt->bindParam(':telefono', $telefono);
            // $stmt->bindParam(':direccion', $direccion);
            // $stmt->bindParam(':cuentaBancaria', $cuenta);
            // $stmt->bindParam(':email', $email);
            // $stmt->bindParam(':password', $pass);
            // $stmt->bindParam(':token', $token);

            //ejecutando    
            $stmt->execute($sql);

            //obteniendo ID de fila
			$id = $dbh->lastInsertId();
            echo "mostrando... ".$id;

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