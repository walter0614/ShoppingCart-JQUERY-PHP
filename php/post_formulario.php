<?php
	include '../conexion/conexion.php';

	$conexion = new conexion();
    $conexion -> definirConexion();

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$comentario = $_POST['comentario'];
	if(strlen($nombre)>0 && strlen($telefono)>0 && strlen($email)>0 && strlen($comentario)>0){
		$final = "$nombre - $apellido - $telefono - $email - $comentario";  
		$sql = "insert into contact(dates,time_user) values ('$final',now())";
	    $rs = mysql_query($sql);
	    $conexion -> close();
		echo "<div class='card-panel teal lighten-5'>
				<h4 class='header' align='center'>Tus datos se han registrado Satisfactoriamente</h4>
				<div class='container'>
				<h5 class='header'>Nombres: $nombre</h5>
				<h5 class='header'>Apellidos: $apellido</h5>
				<h5 class='header'>Telefono: $telefono</h5>
				<h5 class='header'>Email: $email</h5>
				<h5 class='header'>Comentario: $comentario</h5>
				</div>
			  </div><script>setTimeout('redireccionarPagina()', 5000);</script>";
	}else{
		echo "<div class='card-panel teal lighten-5' style='background-color:#ff8a80 !important'>
				<h4 class='header' align='center'>Por favor complete todos los campos</h4>
			  </div><script>setTimeout('redireccionarPagina()', 3000);</script>";
	}
            /*echo "<div class='card-panel teal lighten-10' style='background-color:red !important'>
            	<h4 class='header' align='center'>Tus datos se han registrado Satisfactoriamente</h4>
            </div>";*/
	//echo "Nombres $nombre 	Apellido: $apellido   Telefono: $telefono  Email: $email   Comentario: $comentario";
?>

