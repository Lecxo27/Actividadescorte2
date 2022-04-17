<!-- Diseñe un programa en PHP para la gestión administrativa de exámenes de 
laboratorios clínicos, en donde se pueda ingresar la información del paciente 
y se genere la solicitud de los exámenes de laboratorios a realizar, de igual 
forma se debe de ingresar los resultados de los exámenes practicados al paciente, 
los mismo resultados debe de ser enviados por correo en formato pdf.

Se puede diseñar el programa con bootstrap o materializecss

Base de datos en Mysql

Debe de estar hosteado en un servidor gratuito para su evaluación

Deben de enviar por la plataforma de EaD el enlace del proyecto dentro de un archivo Txt.-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Actividad Corte2</title>
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
                    <a class="nav-link" href="index.php">Manometro petroleros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="hospital.php">Hospital</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-6">
        <div class="row">

            <div class="col-dm-6">
                <!--Jumbo tron (Rectangulo oscuro donde se muestra todo el contenido)-->
                <div class="mt-4 p-5 bg-dark text-white rounded .shadow-3">
                    <p>Registrar el paciente
                    </p>
                    <br>
                    <p>Ingrese el paciente en el sistema con su nomre, tipo de sangre, y condicion (enfermedad)
                        descargas</p>
                        <form method="post">
                        <label for="TBpaciente">Nombre del paciente</label>
                        <input type="text" name="TBpaciente" id="TBpaciente" placeholder="Pekora " ></input>
                        <br><br>
                        <label for="TBsangre">Tipo de sangre del paciente</label>
                        <input type="text" name="TBsangre" id="TBsangre" placeholder="B+ "></input>
                        <br><br>
                        <label for="TBpaciente">Condicion del paciente </label>
                        <input type="text" name="TBcondicion" id="TBcondicion" placeholder="Gripe" ></input>
                        <br><br>
                        <button type="submit" name="guardar" class="btn btn-success" id="guardar">Guardar</button>
                        <br>
                    </form>
                    <?php
                        include("paciente.php");
                    ?>
                    <br><br>
                    <a href="HystoPacientes.php">
                    <button type="submit" name="historial" class="btn btn-success" id="historial">Pacientes registrados</button>
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
                presentar la actividad: Diseñe un programa en PHP para la gestión administrativa de exámenes de
                laboratorios clínicos
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