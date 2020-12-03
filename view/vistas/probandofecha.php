<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 

	date_default_timezone_get('America/Lima');
	$fecha_virtual=date("Y-m-d H:i:s");

	?>
	<form action="" method="post" accept-charset="utf-8">
		<input type="datetime" name="fecha" value="<?= $fecha_virtual?>"><br/>
		<input type="submit" name="Ingresar" value="Ingresar">
	</form>
	
</body>
</html>