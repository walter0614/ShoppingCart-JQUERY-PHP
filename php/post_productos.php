<?php
	$producto = $_POST['Producto'];
	$valor = $_POST['Valor'];
	if($valor==0){
		echo "";
	}else{
		echo "
			  <div class='row'>
			  	<td><img class='activator' src='img/slider/numero$producto.jpg' height='100px' width='180px'></td>

				<td>Producto $producto</td>

				<td>X $valor</td>

				<td><form  method='POST' onsubmit='return enviar($producto+100);'>
				  <button  id='boton$valor' class='btn' type='submit' name='action'>Eliminar
			          <i class='material-icons right'>shopping_cart</i>
			      </button>
			    </form></td>
			    <input type='hidden' value='$valor' name='Producto$producto' id='Producot$producto'> 
			  </div>";
		
	}
	
?>

