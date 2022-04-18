<!--cambiar datos de conexion-->
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
<div class="container mt-6">
        <div class="row">

            <div class="col-dm-6">
                <!--Jumbo tron (Rectangulo oscuro donde se muestra todo el contenido)-->
                <div class="mt-4 p-5 bg-dark text-white rounded .shadow-3">
                    <table class="table table-dark table-striped">
                        <tr>
                            <th>Nombre del paciente</th>
                            <th>Examen realizado</th>
                            <th>Resultado</th>
                            <th>correo</th>
                        </tr>
                            <?php
                            $conexion = mysqli_connect("localhost","root","","manometro");
                            $sql = "SELECT * FROM resultados";
                            $resultado = $conexion->query($sql);

                            if($resultado->num_rows > 0){
                                while($row = $resultado-> fetch_assoc()){
                                    echo "<tr><td>". $row["nombre"]. "</td><td>" . $row["examen"]. "</td><td>". $row["resultado"]. "</td><td>" . $row["correo"]. "</td></tr>";
                                }

                            }else{
                                echo "No hay resultados registrados";
                            }
                                mysqli_close($conexion);
                            ?>
                        
</table>
                    <a href="hospital.php">
                    <button type="submit" class="btn btn-info" id="regresar">Regresar</button>
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