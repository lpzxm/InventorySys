<?php
 include("conexion.php");
 session_start();
  if (!empty($_POST["iniciar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conn->query("Select * from empleados where `IDemple`= '$usuario' and `PIN` = '$password'");
        if ($datos=$sql->fetch_object()) {
                $_SESSION["id"]=$datos->ID;
                $_SESSION["nombre"]=$datos->Nombre;
                $_SESSION["dui"]=$datos->DUI;
                $_SESSION["pin"]=$datos->PIN;
                $_SESSION["id"]=$datos->IDemple;
                $_SESSION["fecha"]=$datos->Fechaingre;
                $_SESSION["cargo"]=$datos->Cargo;
                $_SESSION["entrada"]=$datos->turnoentrada;
                $_SESSION["salida"]=$datos->turnosalida;
                
                header("location: ../php/ProductosEmple.php");

        }
    }
    else{
        echo "Campos vacios";
    }
}
?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginstyle.css">
    <link rel="shortcut icon" href="../imagenes/hola.png" type="image/x-icon">
    <title>Inicia Sesion</title>
  </head>
  <body>

    <div class="login-box">
      <img src="../imagenes/hola.png" class="avatar" alt="Avatar Image">
      <h1 id="titleA">Ingresa aqui</h1>
      <form method="POST">

        <label for="usuario" id="U1">ID: </label>

        <input type="text" name="usuario" placeholder="Ingrese el ID correspondiente " required>

        <label for="password" id="P2">Pin:</label>

        <input type="password" name="password" placeholder="Ingresa tu Pin" required>

        <input type="submit" name="iniciar" value="Iniciar sesión" id="V1">

        
        
      </form>
    </div>
    <a href="../php/Inicio de sesion de administrador.php"> <button class="pizza12">Inicio de sesion, Administrador</button></a>
  </body>
 
</html>