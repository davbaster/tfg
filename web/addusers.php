<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Planillas usando PHP OOPs PDO MySQL y FETCH API de ES6 </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


</head>
<body>
    <!--Add NEW USER MODEL START -->

    <div class="modal fade" tabindex="-1" id="addNewUserModal">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Nuevo Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add-user-form" class="p-2" novalidate>
                        <div class="mb-3">
                            <div class="row mb-3 gx-3">
                                <div class="col">
                                    <input type="text" name="fname" id="fname" class="form-control form-control-lg" placeholder="Ingrese Nombre" required>
                                    <div class="invalid-feedback">Nombre es requerido!</div>
                                </div>

                                <div class="col">
                                    <input type="text" name="apellido1" id="apellido1" class="form-control form-control-lg" placeholder="Ingrese Primer Apellido" required>
                                    <div class="invalid-feedback">Primer apellido es requerido!</div>
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="E-mail" required>
                            <div class="invalid-feedback">Email es obligatorio</div>
                        </div>

                        <div class="mb-3">
                            <input type="tel" name="phone" id="phone" class="form-control form-control-lg" placeholder="Telefono required">
                            <div class="invalid-feedback">Email es obligatorio</div>
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Agregar Usuario" class="btn btn-primary btn-block btn-lg" id="add-user-btn">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Add NEW USER MODEL end -->


    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-primary">Todos los usuarios en la base de datos</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewUserModal">Agregar usuario</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sahil</td>
                                <td>Kumar</td>
                                <td>sahil@gmail.com</td>
                                <td>1234567</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm rounded-pill">Editar</a>
                                    <a href="#" class="btn btn-danger btn-sm rounded-pill">Borrar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<!-- Tiene que ir aqui, sino modal no sirve -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</html>



