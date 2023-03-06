<?php
include("conexion.php");
session_start();
if (!empty($_POST["iniciar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conn->query("SELECT * FROM administrador WHERE id_usuario = '$usuario' and id_admin = '$password'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->ID;
            $_SESSION["usuario"]=$datos->id_usuario;
            $_SESSION["password"]=$datos->id_admin;
            header("location:../php/AdminEmpleados.php");
        } else{
          echo "<div class='alert alert-danger'>Acceso denegado</div>";
      }
  } else{
      echo"Campos vacios";
  }
}
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Inicio de sesion de administrador.css">
    <link rel="shortcut icon" href="../imagenes/hola.png" type="image/x-icon">
    <title>Inicia Sesion</title>
  </head>
  <body>

    <div class="login-box">
      <img src="../imagenes/hola.png" class="avatar" alt="Avatar Image">
      <h1 id="titleA">Ingresa aqui</h1>
      <form  method="POST">

        <label for="usuario" id="U1">ID: </label>

        <input type="text" name="usuario" placeholder="Ingrese el ID correspondiente ">

        <label for="password" id="P2">Pin:</label>

        <input type="password" name="password" placeholder="Ingresa tu Pin">

        <input type="submit" name="iniciar" value="Iniciar sesión" id="V1">
        
      </form>
    </div>
    <a href="../php/inicio de sesion.php"> <button class="hm12">Inicio de sesion, Empleado</button></a>
  </body>
 
</html>