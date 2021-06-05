<?php
    session_start();

    require_once 'auth.php';
    $user = new Auth();

    //agrega un usuario nuevo
    if(isset($_POST['action']) && $_POST['action'] == 'agregar' ){
        // print_r($_POST);
        $name = $user->test_input($_POST['name']);
        $cedula = $user->test_input($_POST['cedula']); 
        $pass = $user->test_input($_POST['password']); 
        //convert password to password hash for security reasons
        $hpass = password_hash($pass, PASSWORD_DEFAULT);

        
        if($user->user_exist($cedula)){
            echo $user->showMessage('warning', 'Esta cedula ya ha sido registrada!');
        }
        else{
            if($user->register($name,$cedula,$hpass)){
                echo 'register';
                $_SESSION['user'] = $cedula;
            }
            else{
                echo $user->showMessage('danger', 'Algo salio mal, intente de nuevo luego');
            }
        }
        
    }


    // request para login de usuario
    if(isset($_POST['action']) && $_POST['action'] == 'login'   ){
        $cedula = $user->test_input($_POST['cedula']);
        $pass = $user->test_input($_POST['password']);
       
        $loggedInUser = $user->login($cedula);

        // si el usuario esta en la base de datos
        if($loggedInUser != null){
            //echo $loggedInUser['password'];
            //si el password escrito (pass) coincide con el password en la base de datos
            $passHash = password_hash($loggedInUser['password'], PASSWORD_DEFAULT); //convierte el password a hash
            //if( password_verify($pass, $loggedInUser['password']) ){
            if( password_verify($pass, $passHash) ){ //borrar cuando se inserten los usuarios usando crear usuario
                //si la casilla de recordarme esta marcada...
                if(!empty($_POST['rem'])){
                    setcookie("cedula", $cedula, time()+(30*24*60*60), '/');
                    setcookie("password", $pass, time()+(30*24*60*60), '/');

                }
                else{
                    setcookie("cedula","",1,'/');
                    setcookie("password","",1,'/');
                }
                
                $_SESSION['user'] = $cedula;

                //ECHO manda respuesta a action.js, y lo interpreta: login ajax request interpreter
                echo 'login';
                

            }
            else{
                echo $user->showMessage('danger', 'El password es incorrecto');
            }

        }
        else{
            //usuario no encontrado
            echo $user->showMessage('danger', 'El usuario no se encuentra');
        }
    }


?>