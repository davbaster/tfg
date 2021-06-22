<?php

    require_once 'config.php';

    class Auth extends Database{

        // Registra un nuevo usuario
        public function addUser($cedula,$nombre,$apellido1, $apellido2,$telefono,$direccion,$cuentaBancaria,$email,$contrasena,$token){

            // $token_expire = '';
            // $created_at = '';
            // $verified = 0;
            // $deleted = 1;
            // $idUsuario = 0;

            // $sql = 'INSERT INTO users (idUsuario,
            //                            cedula, 
            //                            nombre,
            //                            apellido1,
            //                            apellido2,
            //                            telefono,
            //                            direccion,
            //                            cuentaBancaria,
            //                            email,
            //                            contrasena,
            //                            token,
            //                            token_expire,
            //                            created_at,
            //                            verified,
            //                            deleted) 
            //         VALUES (:idUsuario,
            //                 :cedula,
            //                 :nombre,
            //                 :apellido1,
            //                 :apellido2,
            //                 :telefono,
            //                 :direccion,
            //                 :cuenta,
            //                 :email,
            //                 :contrasena,
            //                 :token,
            //                 :token_expire,
            //                 :created_at,
            //                 :verified,
            //                 :deleted)';


            // $stmt = $this->conn->prepare($sql);
            // $result = $stmt->execute(['idUsuario'=>$idUsuario,
            //                         'cedula'=>$cedula,
            //                         'nombre'=>$nombre,
            //                         'apellido1'=>$apellido1,
            //                         'apellido2'=>$apellido2,
            //                         'telefono'=>$telefono,
            //                         'direccion'=>$direccion,
            //                         'cuentaBancaria'=>$cuenta,
            //                         'email'=>$email,
            //                         'contrasena'=>$contrasena,
            //                         'token'=>$token,
            //                         'token_expire'=>$token_expire,
            //                         'created_at'=>$created_at,
            //                         'verified'=>$verified,
            //                         'deleted'=>$deleted]);
            // // obteniendo ID de fila
			// $id = $this->conn->lastInsertId();
            // echo "Datos insertardos... ID:".$id;

            // return $result;

            // $sql = "INSERT INTO users (cedula, nombre, apellido1, apellido2, telefono,direccion,cuentaBancaria,email,contrasena) VALUES ('12345','d','c','c','7145','heredia','2000','test@test','12345')";

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

            // $stmt = $this->conn->prepare($sql);
            // $stmt->execute($sql);
            // $stmt->execute(['cedula'=>'123456','nombre'=>'d','apellido1'=>'c','apellido2'=>'c','telefono'=>'7145','direccion'=>'heredia','cuentaBancaria'=>'2000','email'=>'test@test','contrasena'=>'12345']);
         


            // $sql = $this->conn->prepare("INSERT INTO USERS (idUsuario,
            //                                                 cedula, 
            //                                                 nombre, 
            //                                                 apellido1, 
            //                                                 apellido2, 
            //                                                 telefono,
            //                                                 direccion,
            //                                                 cuentaBancaria,
            //                                                 email,
            //                                                 contrasena,
            //                                                 token,
            //                                                 token_expire,
            //                                                 created_at,
            //                                                 verified,
            //                                                 deleted) 
            //                             VALUES ('',
            //                                     :cedula,
            //                                     :nombre,
            //                                     :apellido1,
            //                                     :apellido2,
            //                                     :telefono,
            //                                     :direccion,
            //                                     :cuenta,
            //                                     :email,
            //                                     :contrasena,
            //                                     :token,
            //                                     '',
            //                                     '',
            //                                     0,
            //                                     1)");
            
            // $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // //binding
            // $sql->bindParam(':cedula', $cedula);
            // $sql->bindParam(':nombre', $nombre);
            // $sql->bindParam(':apellido1', $apellido1);
            // $sql->bindParam(':apellido2', $apellido2);
            // $sql->bindParam(':telefono', $telefono);
            // $sql->bindParam(':direccion', $direccion);
            // $sql->bindParam(':cuentaBancaria', $cuenta);
            // $sql->bindParam(':email', $email);
            // $sql->bindParam(':password', $pass);
            // $sql->bindParam(':token', $token);

            // //ejecutando    
            // // $stmt->execute($sql);

            // $resultado = $sql->execute();

            // //obteniendo ID de fila
			// $id = $dbh->lastInsertId();
            // echo "mostrando... ".$id;

            // return resultado;

            $sql = "INSERT INTO users (cedula, nombre, apellido1,apellido2,telefono,direccion,cuentaBancaria,email,contrasena,token) VALUES (:cedula,:nombre,:apellido1,:apellido2,:telefono,:direccion,:cuentaBancaria,:email,:contrasena,:token)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['cedula'=>$cedula, 'nombre'=>$nombre,'apellido1'=>$apellido1 ,'apellido2'=>$apellido2,'telefono'=>$telefono,'direccion'=>$direccion,'cuentaBancaria'=>$cuentaBancaria,'email'=>$email,'contrasena'=>$contrasena,'token'=>$token]);
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
            $sql = "SELECT cedula, contrasena FROM users WHERE cedula = :cedula AND deleted != 0";
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