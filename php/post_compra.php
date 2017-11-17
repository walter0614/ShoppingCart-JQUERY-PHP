<?php
	include '../conexion/conexion.php';

	$conexion = new conexion();
    $conexion -> definirConexion();
	$final = "";
	print_r($_GET);
	foreach($_GET as $attribute => $value){
		if($attribute!='action' && $value>0){
			$final.="$attribute = $value, ";
		}
	}
	$sql = "insert into product(name_product,time_product) values ('$final',now())";
    $rs = mysql_query($sql);
    $conexion -> close();
    echo"<script type='text/javascript'>
        window.location.replace('../productos.php');
        </script>";
?>

