<div>
	<form class="" method="post">

		<div>

			<label for="email">Correo electrónico:</label>
			<input type="email" class="" name="ingresoEmail">
			

			<label for="pwd">Contraseña:</label>
			<input type="password" class="" name="ingresoPassword">

			</div>

	

		<?php 

		$ingreso = new ControladorFormularios();
		$ingreso -> ctrIngreso();

		?>
		
		<button type="submit" class="">Ingresar</button>
	</div>
	</form>

</div>