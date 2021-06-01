<?php
    session_start();

    require_once 'auth.php';
    $user = new Auth();

    if(isset($_POST['action']) && $_POST['action'] == 'register' ){
        // print_r($_POST);
        $name = $user->test_input($_POST['name']);
        $email = $user->test_input($_POST['email']); 
        $pass = $user->test_input($_POST['password']); 

        $hpass = password_hash($pass, PASSWORD_DEFAULT);

        
        if($user->user_exist($email)){
            echo $user->showMessage('warning', 'Este correo ya ha sido registrado!');
        }
        else{
            if($user->register($name,$email,$hpass)){
                echo 'register';
                $_SESSION['user'] = $email;
            }
            else{
                echo $user->showMessage('danger', 'Algo salio mal, intente de nuevo luego');
            }
        }
        
    }


    // request para login de usuario
    if(isset($_POST['action']) && $_POST['action'] == 'login'   ){
        print_r($_POST);
    }


?>