<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Examen 5° Unidad</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="col-md-8 center-block quitar_float espacio_arriba montserrat white divcolor">
		<?php 
		$proc = $_POST['proc'];
		$clap=$_POST['clap'];
		$des=$_POST['des'];
		$clad=$_POST['clad'];
		$hcp=$_POST['hcp'];
		$hcd=$_POST['hcd'];
		$hpp=$_POST['hpp'];
		$hpd=$_POST['hpd'];
		$creditos=$_POST['creditos'];
		echo  "<h1>Datos obtenidos:</h1>";
		echo  "<p>Procedencia: $proc</p>";
		echo "<p>Clave de la procedencia: $clap</p>";
		echo "<p>Nombre de la asignación del destino: $des</p>";
		echo "<p>Clave de la asignacion del destinoo: $clad</p>";
		echo "<p>Horas Clase</p>";
		echo "<p>Procedencia: $hcp Destino:$hcd</p>";
		echo "<p>Horas Practica</p>";
		echo "<p>Procedencia: $hpp Destino:$hpd</p>";
		echo "<p>Creditos: $creditos</p>";
	 	?>
	 	<hr>
	 	<?php 
		$proc1 = $_POST['proc1'];
		$clap1=$_POST['clap1'];
		$des1=$_POST['des1'];
		$clad1=$_POST['clad1'];
		$hcp1=$_POST['hcp1'];
		$hcd1=$_POST['hcd1'];
		$hpp1=$_POST['hpp1'];
		$hpd1=$_POST['hpd1'];
		$creditos1=$_POST['creditos'];
		echo  "<p>Procedencia: $proc1</p>";
		echo "<p>Clave de la procedencia: $clap</p>";
		echo "<p>Nombre de la asignación del destino: $des1</p>";
		echo "<p>Clave de la asignacion del destinoo: $clad1</p>";
		echo "<p>Horas Clase</p>";
		echo "<p>Procedencia: $hcp1 Destino:$hcd1</p>";
		echo "<p>Horas Practica</p>";
		echo "<p>Procedencia: $hpp1 Destino:$hpd1</p>";
		echo "<p>Creditos: $creditos1</p>";
	 	?>
	 	<hr>
	 	<?php 
		$proc2 = $_POST['proc2'];
		$clap2=$_POST['clap2'];
		$des2=$_POST['des2'];
		$clad2=$_POST['clad2'];
		$hcp2=$_POST['hcp2'];
		$hcd2=$_POST['hcd2'];
		$hpp2=$_POST['hpp2'];
		$hpd2=$_POST['hpd2'];
		$creditos2=$_POST['creditos2'];
		echo "<p>Procedencia: $proc2</p>";
		echo "<p>Clave de la procedencia: $clap2</p>";
		echo "<p>Nombre de la asignación del destino: $des2</p>";
		echo "<p>Clave de la asignacion del destino: $clad2</p>";
		echo "<p>Horas Clase</p>";
		echo "<p>Procedencia: $hcp2 Destino:$hcd2</p>";
		echo "<p>Horas Practica</p>";
		echo "<p>Procedencia: $hpp2 Destino:$hpd2</p>";
		echo "<p>Creditos: $creditos2</p>";
	 	?>
	 	<hr>
	 	<?php
	 	$actividades=$_POST['actividades'];
	 	$institucion=$_POST['institucion'];
	 	$lugar=$_POST['lugar'];
	 	$firma=$_POST['firma'];
	 	echo "<p>Actividades academicas: $actividades</p>";
	 	echo "<p>Institución receptora: $institucion </p>";
	 	echo "<p>Lugar y fecha: $lugar</p>";
	 	echo "<p>Nombre y firma del estudiante: $firma</p>"; 
	 	 ?>
	 	 <nav class="espacio-arriba animated slideInUp">
		<a href="Examen.php" class="myButton espacio_derecha espacio-arriba1">Regresar</a>
		<a href="index.html" class="myButton espacio_derecha espacio-arriba1">Pagina Principal</a>
	</nav>
	</div>
</body>
</html>