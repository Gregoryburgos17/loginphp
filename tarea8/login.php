<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login | Sistema Hotel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section id="container">
		
		<form action="comprueba.php" method="post">
			
			<h3>Iniciar Sesión</h3>
			<img src="img/login.png" alt="Login">
			<input type="text" name="usuario" placeholder="Usuario">
			<input type="password" name="clave" placeholder="Contraseña">
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
			
			<input type="submit" value="INGRESAR">
			
		</form>
		
		
	</section>
</body>
</html>