<?php
 include("conexion.php");
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
      <form action="Login.php" method="POST">

        <label for="usuario" id="U1">ID: </label>

        <input type="text" name="usuario" placeholder="Ingrese el ID correspondiente ">

        <label for="password" id="P2">Pin:</label>

        <input type="password" name="password" placeholder="Ingresa tu Pin">

        <input type="submit" name="iniciar" value="Iniciar sesión" id="V1">
        
      </form>
    </div>
    
  </body>
 
</html>