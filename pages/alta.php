<?php
include('../database/db.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="../estilos.css">
</head>

<body>




    <div id="container">
        <nav>

            <ul>
                <li><a href='../index.php'>Inicio</a></li>
                <li><a href="#">Alta<i class="down"></i></a>

                    <ul>

                        <li><a href="baja.php">Baja</a></li>
                        <li><a href="modificacion.php">Modificación</a></li>
                    </ul>

                <li><a href="#">Consultas <i class="down"></i></a>

                    <ul>
                        <li><a href="lista.datos.php">Listado de Datos</a></li>
                        <li><a href="lista.completo.php">Listado Completo</a></li>
                        <li><a href="lista.tablas.php">Listado con tablas</a>

                    </ul>
            </ul>
        </nav>



    </div>
    <div class="container d-flex justify-content-center col-sm-5 align-item-center">
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success alert-dismissible col-sm-10  fade show" role="alert">

                <?= $_SESSION['message'] ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); endif; ?>

        <?php if (isset($_SESSION['message_input_vacio'])): ?>
            <div class="alert alert-danger alert-dismissible col-sm-10 fade show" role="alert">

                <?= $_SESSION['message_input_vacio'] ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); endif; ?>
    </div>

    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card w-75 mx-auto mt-4 mb-4">

                    <div class="card-body">
                        <h2 class="text-center text-dark">Alta</h2>
                        <form action='../services/create.php' method="POST">
                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control" required placeholder="Nombre"
                                    autofocus>
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" required placeholder="Email">
                            </div>


                            <div class="container  text-dark  ">
                                <div class="row">
                                    <div class="col-sm-3 ">
                                        <p class="text-dark text-start text-muted ">CURSO:</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            1
                                        </label>

                                        <input class="form-check-input" type="radio" name="curso" value="1"
                                            id="flexRadioDefault1">

                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            2
                                        </label>

                                        <input class="form-check-input" type="radio" name="curso" value="2"
                                            id="flexRadioDefault1">

                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            3
                                        </label>

                                        <input class="form-check-input" type="radio" name="curso" value="3"
                                            id="flexRadioDefault1">

                                    </div>
                                </div>

                            </div>

                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-primary w-100" name="submit" value="Dar de Alta">
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>