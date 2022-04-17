
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

if (isset($_POST['guardar'])) {
    if (strlen($_POST['TBmedida']) >= 1 && strlen($_POST['TBfecha']) >= 1) {
	    $medida = trim($_POST['TBmedida']);
        $pozo = trim($_POST['TBpozo']);
	    $fechareg = date($_POST['TBfecha']);
	    $consulta = "INSERT INTO manometro(medicion,fecha,nombre) VALUES ('$medida','$fechareg','$pozo')";
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
