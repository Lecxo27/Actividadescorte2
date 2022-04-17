<!DOCTYPE html>


<!-- Diseñe una aplicación web en PHP para la toma de mediciones de manómetros de pozos petroleros,
en dicha aplicación se podrá crear un históricos de las distintas mediciones manuales realizadas
a los manómetros de los pozos petroleros en diferentes periodos de tiempos.

Mostrar el histórico en forma de grafica para el pozo seleccionado.

Se puede diseñar el programa con bootstrap o materializecss

Base de datos en Mysql  -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Actividad1 Corte2</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/boots.css">

</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link " href="notas.html">Notas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Manometro petroleros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="hospital.php">Hospital</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-6">
        <div class="row">

            <div class="col-dm-6">
                <!--Jumbo tron (Rectangulo oscuro donde se muestra todo el contenido)-->
                <div class="mt-4 p-5 bg-dark text-white rounded .shadow-3">
                    <p>Toma de mediciones de manómetros de pozos petroleros con fecha en la cual se tomo la medicion
                    </p>
                    <br>
                    <p>Ingrese la presion en la medida "psi"</p>
                    <form method="post">
                        <label for="TBpozo">Pozo a medir</label>
                        <input type="text" name="TBpozo" id="TBpozo" placeholder="Nombre del pozo "></input>
                        <br><br>
                        <label for="TBmedida">Presion obtenida</label>
                        <input type="text" name="TBmedida" id="TBmedida" placeholder="medida en (psi) "></input>
                        <br><br>
                        <label for="TBfecha">fecha del dia </label>
                        <input type="date" name="TBfecha" id="TBfecha"></input>
                        <br><br>
                        <button type="submit" name="guardar" class="btn btn-success" id="guardar">Guardar</button>
                        <br>
                    </form>
                    <?php
                        include("manometro.php");
                    ?>
                    <hr style="color: rgb(62, 160, 33);">
                    <br>
                    <label for="TBbusqueda">Busqueda del historial por Pozo (Deje en blanco para ver historial completo)</label>
                    <br>
                        <input type="text" name="TBbusqueda" id="TBbusqueda" placeholder=""></input>
                        <br><br>
                    <a href="Hystomanometro.php">
                    <button type="submit" class="btn btn-info" id="revisar">Revisar historial</button>
                    </a>
                </div>



            </div>







        </div>

    </div>
    <div id="Foots" class="mt-5 p-4 bg-dark text-white text-center">
        <p>@2021Copyright Todos los derechos de la pagina pertenecen a Luis Bohorquez</p>
        <div class="col-sm-4 text-lg-start">
            <h2>Acerca de</h2>
            <p>Esta pagina fue creada utilizando el Framework Bootstrap 5 y fue creado por Luis Bohorquez con motivo de
                presentar la actividad: Diseñe una aplicación web en PHP para la toma de mediciones de manómetros de
                pozos petroleros
            </p>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-12 text-lg-end">
            <h2>Creador</h2>
            <p>Luis Bohorquez de la seccion (N1013)</p>
            <p><a href="#Inicio" style="color: chartreuse;">Regresar al inicio</a></p>
            <!--REALLY IMPORTAN SPINNERS DO NOT REMOVE BY ANY CIRCUNSTANCE-->
            <div class="spinner-border spinner-border-sm text-success"></div>
            <div class="spinner-border spinner-border-sm text-success"></div>
            <div class="spinner-border spinner-border-sm text-success"></div>
            <!--REALLY IMPORTAN SPINNERS DO NOT REMOVE BY ANY CIRCUNSTANCE-->
        </div>
    </div>
</body>

</html>