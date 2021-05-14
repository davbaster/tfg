<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body class="bg-info">
    <div class="container">
        <!-------Login inicio ------>
        <div class="row justify-content-center wrapper" id="login-box">
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                    <div class="card rounded-left p-4" style="flex-grow:1.4;">
                        <h1 class="text-center fw-bold text-primary">Ingresar al sistema</h1>
                        <hr class="my-3">
                        <form action="#" method="post" class="px-3" id="login-form">
                            <!--email-->
                            <div class="input-group input-group-lg form-group py-2">
                                <div class="input-group-prepend small-screen">
                                    <span class="input-group-text rounded-0">
                                        <font size="5em"> <i class="fa fa-envelope fa-lg" aria-hidden="true"></i> </font>
                                    </span>
                                </div>
                                <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="E-mail" required>
                            </div>
                            <!--email End-->
                            <!--password--->
                            <div class="input-group input-group-lg form-group py-2">
                                <div class="input-group-prepend small-screen">
                                    <span class="input-group-text rounded-0" >
                                    <font size="5em"><i class="fa fa-key fa-lg" aria-hidden="true"></i> </font>
                                    </span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Clave" required>
                            </div>
                            <!--password End--->
                            <!--checkbox--->
                            <div class="form-group mt-2">
                                <div class="custom-control custom-checkbox float-start">
                                    <input type="checkbox" name="rem" class="custom-control-input" id="customCheck">
                                    <label for="customCheck" class="custom-control-label">Recordarme</label>
                                </div>
                                <div class="forgot float-end">
                                    <a href="#" id="forgot-link">Olvid&#233; mi clave</a>
                                </div>
                            </div>
                            <!--checkbox end--->
                            <div class="clearfix"></div>
                            <!--submit--->
                            <div class="form-group d-grid mt-3">      
                                <input type="submit" value="Acceder" id="login-btn" class="btn btn-primary btn-lg myBtn">
                            </div>
                            <!--submit end--->
                        </form>
                    </div>
                    <!-- Tarjeta Bienvenida -->
                    <div class="card justify-content-center rounded-right myColor p-4">
                        <h1 class="text-center fw-bold text-white">Bienvenido</h1>
                        <hr class="my-3 bg-light myHr">
                        <p class="text-center fw-bolder text-light lead">
                            aqui va algun texto
                        </p>
                        <button class="btn btn-outline-light btn-lg align-self-center fw-bolder mt-4 myLinkBtn" id="register-link">Registrarse</button>
                    </div>
                    <!-- tarjeta bienvenida final -->
                </div>
            </div>
        </div>
        <!---------Login Final --------->

        <!-------Registro inicio ------->
        <div class="row justify-content-center wrapper" id="register-box">
            <div class="col-lg-10 my-auto myShadow">
                <div class="row">
                    <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                        <h1 class="text-center fw-bold text-white">Welcome Back!</h1>
                        <hr class="my-4 bg-light myHr"/>
                        <p class="text-center fw-bolder text-light lead">To keep connected with us please login with your personal info</p>
                        <button class="btn btn-outline-light btn-lg fw-bolder mt-4 align-self-center myLinkBtn" id="login-link">Sign In</button>
                    </div>
                    <div class="col-lg-7 bg-white p-4">
                        <h1 class="text-center fw-bold text-primary">Create Account</h1>
                        <hr class="my-3"/>
                        <form action="#" method="post" class="px-3" id="register-form">
                            <!--full name-->
                            <div class="input-group input-group-lg form-group py-2">
                                <div class="input-group-prepend small-screen">
                                    <span class="input-group-text rounded-0">
                                        <!-- font size used to make icons bigger -->
                                        <font size="5em"><i class="fa fa-envelope fa-lg " aria-hidden="true"></i></font>
                                    </span>
                                </div>
                                <input type="text" name="name" id="name" class="form-control rounded-0" placeholder="Full Name" required>
                            </div>
                            <!--full name End-->
                            <!--email-->
                            <div class="input-group input-group-lg form-group py-2">
                                <div class="input-group-prepend small-screen">
                                    <span class="input-group-text rounded-0">
                                        <!-- font size used to make icons bigger -->
                                        <font size="5em"><i class="fa fa-envelope fa-lg " aria-hidden="true"></i></font>
                                    </span>
                                </div>
                                <input type="email" name="email" id="reemail" class="form-control rounded-0" placeholder="E-mail" required>
                            </div>
                            <!--email End-->
                            <!--Register password--->
                            <div class="input-group input-group-lg form-group py-2">
                                <div class="input-group-prepend small-screen">
                                    <span class="input-group-text rounded-0" >
                                    <font size="5em"><i class="fa fa-key fa-lg" aria-hidden="true"></i> </font>
                                    </span>
                                </div>
                                <input type="password" name="password" id="rpassword" class="form-control rounded-0" minlengh="5" placeholder="Clave" required>
                            </div>
                            <!--Register password End--->
                            <!--Verifica password--->
                            <div class="input-group input-group-lg form-group py-2">
                                <div class="input-group-prepend small-screen">
                                    <span class="input-group-text rounded-0" >
                                        <font size="5em"><i class="fa fa-key fa-lg" aria-hidden="true"></i> </font>
                                    </span>
                                </div>
                                <input type="password" name="cpassword" id="crpassword" class="form-control rounded-0" minlengh="5" placeholder="Reintroduce Clave" required/>
                            </div>
                            <!--Verfica password End--->
                            <!--mensaje password--->
                            <div class="form-group">
                                <div id="passError" class="text-danger font-weight-bolder"></div>
                            </div>
                            <!--mensaje password final--->
                            <!--boton registrar--->
                            <div class="form-group d-grid mt-3">      
                                <input type="submit" value="Sign Up" id="register-btn" class="btn btn-primary btn-lg myBtn">
                            </div>        
                            <!--boton registrar final--->
                        </form>
                    </div> 
                </div>
            </div>
        </div>
        <!---------Registro Final --------->
        <!---------forgot password inicio --------->
        <!---------forgot password final --------->
    </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>