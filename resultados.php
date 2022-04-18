<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>ResultadoG</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/boots.css">
</head>
<body>
    <?php 

include("conexiondb.php");

if (isset($_POST['RGuardar'])) {
    if (strlen($_POST['paciente']) >= 1 && strlen($_POST['TBcorreo']) >= 1) {
	    $nombre = trim($_POST['paciente']);
        $examen = trim($_POST['TBexamen']);
	    $resultados = trim($_POST['TBresultado']);
        $correo = trim($_POST['TBcorreo']);
	    $consulta = "INSERT INTO resultados(nombre,examen,resultado,correo) VALUES ('$nombre','$examen','$resultados','$correo')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
            <br>
	    	<h3 class="ok">¡se guardo correctamente!</h3>
           <?php
	    } else {
	    	?> 
            <br>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
            <br>
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
</body>
</html>