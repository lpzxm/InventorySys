<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $nombre = $_POST["nombre"];
  $sql = "Insert into categorias (nombre) VALUES ('$nombre')";

  mysqli_query($conn, $sql);
  echo "<script>alert('categoria creada');  window.location.href = '../php/adminProductos.php' </script>";
 
}

?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/loginstyle.css">
    <link rel="shortcut icon" href="../imagenes/hola.png" type="image/x-icon">
    <title>Crear categoria nueva - Admin</title>
  </head>
  <body>

    <div class="login-box">
      <img src="../imagenes/hola.png" class="avatar" alt="Avatar Image">
      <h1 id="titleA">Crea una nueva categoria!</h1>
      <form method="post">

        <label for="password" id="P2">Nombre de categoria:</label>

        <input type="text" name="nombre" placeholder="Ingresa el nombre de la categoria">

        <input type="submit" name="iniciar" value="Crear categoria" id="V1">
        
      </form>
    </div>
    
  </body>
 
</html>