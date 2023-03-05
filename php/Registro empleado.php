<?php
include "conexion.php";
$empleados = mysqli_query($conn, "Select * from empleados");
$empleados = mysqli_fetch_all($empleados);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $nombre = $_POST["nombre"];
  $PIN = $_POST["PIN"];
  $ids = $_POST["ids"];
  $fecha = $_POST["fecha"];
  $Cargo = $_POST["cargo"];
  $sql = "INSERT INTO `empleados`(`Nombre del empleado`, `Credencial (PIN)`, `ID del empleado`, `Fecha de ingreso`, `Cargo`) VALUES ('$nombre','$PIN','$ids','$fecha','$Cargo')";

  mysqli_query($conn, $sql);
  echo "<script>alert('Empleado registrado!');  window.location.href = '../php/AdminEmpleados.php' </script>";
 
}
?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/loginstyle.css">
    <link rel="shortcut icon" href="../imagenes/hola.png" type="image/x-icon">
    <title>Registrar empleado - Admin</title>
  </head>
  <body>

    <div class="login-box" style="
    height: 585px;">
      <img src="../imagenes/hola.png" class="avatar" alt="Avatar Image">
      <h1 id="titleA">Registo de nuevo empleado</h1>
      <form method="post">

        <label for="password" id="P2">Nombre de Empleado</label>

        <input type="text" name="nombre" placeholder="Ingresa el nombre del empleado">
        
        <label for="password" id="P2">PIN</label>

        <input type="text" name="PIN" placeholder="Ingresa el Pin">
        
        <label for="password" id="P2">ID del empleado</label>

        <input type="text" name="ids" placeholder="Ingresa el ID de empleado">
        
        <label for="password" id="P2">Fecha</label>

        <input type="date" name="fecha" placeholder="Ingresa la fecha">

        <label for="password" id="P2">Cargo</label>

        <input type="text" name="cargo" placeholder="Ingresa el cargo">
        
        <input type="submit" name="iniciar" value="Registrar empleado" id="V1">
        
        
      </form>
    </div>
    
  </body>
 
</html>