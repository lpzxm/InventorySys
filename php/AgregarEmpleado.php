<?php

include "conexion.php";
$empleados = mysqli_query($conn, "Select * from empleados");
$empleados = mysqli_fetch_all($empleados);
if ("SERVER_METHOD"=="POST") {
  $nombre = $_POST["nombre"];
$fecha = $_POST["fecha"];
$cargo = $_POST["cargo"];
$id = generarID();
$pin = generarPin();

function generarID(){
  return strval(rand(100000, 999999));
}

function generarPin(){
  $pin = strval(rand(0, 9999));
  $pin = str_pad($pin, 4, '0', STR_PAD_LEFT);
  return $pin;
}

$sql = "INSERT INTO empleados (Nombre del empleado, Credencial (PIN), ID del empleado, Fecha de ingreso, Cargo) VALUES ('$nombre', '$pin','$id',  '$fecha', '$cargo')";

mysqli_query($conn, $sql);
echo "<script>alert('Empleado registrado!');  window.location.href = '../php/AdminEmpleados.php' </script>";
}


?>


<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/registro de empleado.css">
    <link rel="shortcut icon" href="../imagenes/hola.png" type="image/x-icon">
    <title>Agregar empleado - Admin</title>
  </head>
  <body>

    <div class="login-box">
      <img src="../imagenes/hola.png" class="avatar" alt="Avatar Image">

      <h1 id="TitleA">¡Registra al empleado aqui!</h1>
      <form method="post">

        <label for="username" id="TitleB">Nombre del empleado:</label>
        <input type="text" name="nombre" placeholder="Ingrese el nombre del empleado">

        <!-- <label for="username" id="TitleF">Credencial (Pin):</label>
        <input type="text"  name="pin" placeholder="Ingrese el pin del empleado"> -->

        <label for="username" id="TitleJ">Fecha de ingreso:</label>
        <input type="text"  name="fecha" placeholder="Ingrese la fecha de ingreso del empleado">

        <!-- <label for="descripcion" id="pastel1"> ID del empleado:</label>

        <input type="text"  id="pastel2" name="Id" placeholder="Ingrese el ID del empleado"> -->
        
        <label for="descripcion" id="pastel1"> Cargo:</label>

        <input type="text"  id="pastel2" name="cargo" placeholder="Ingrese el cargo del empleado">
      
        <input type="submit" value="Registrar" id="TitleL">
      </form>
    </div>

  </body>
  
</html>