<?php
session_start(); 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	
	$servername = "localhost";
	$username_db = "ID_db";
	$password_db = "Pin_db";
	$dbname = "minisúper";
	$conn = mysqli_connect($servername, $username_db, $password_db, $dbname);

	if (!$conn) {
		die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
	$resultado = mysqli_query($conn, $sql);

	
	if (mysqli_num_rows($resultado) > 0) {

		$_SESSION['username'] = $username;
		header("Location: bienvenida.php");
		exit();
	} else {
		
		echo "Nombre de usuario o contraseña incorrectos.";
	}

	mysqli_close($conn);
}
?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/loginstyle.css">
    <link rel="shortcut icon" href="../imagenes/hola.png" type="image/x-icon">
    <title>Inicia Sesion</title>
  </head>
  <body>

    <div class="login-box">
      <img src="../imagenes/hola.png" class="avatar" alt="Avatar Image">
      <h1 id="titleA">Ingresa aqui</h1>
      <form action="inicio de sesion.php" method="post">

        <label for="username" id="U1">ID: </label>

        <input type="text" name="usuario" placeholder="Ingrese el ID correspondiente ">

        <label for="password" id="P2">Pin:</label>

        <input type="password" name="contraseña" placeholder="Ingresa tu Pin">

        <input type="submit" name="iniciar" value="Iniciar sesión" id="V1">
        
      </form>
    </div>
    
  </body>
 
</html>