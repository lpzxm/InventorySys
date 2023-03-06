<?php
include "conexion.php";
$empleados = mysqli_query($conn, "Select * from empleados");
$empleados = mysqli_fetch_all($empleados);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $dui = $_POST["dui"];
  $PIN = $_POST["PIN"];
  $ids = $_POST["ids"];
  $fecha = $_POST["fecha"];
  $Cargo = $_POST["cargo"];
  $entrada = $_POST["horaent"];
  $salida = $_POST["horasal"];
  $sql = "INSERT INTO `empleados`(`Nombre`, `DUI`, `PIN`, `IDemple`, `Fechaingre`, `Cargo`, `turnoentrada`, `turnosalida`) VALUES ('$nombre', '$dui','$PIN','$ids','$fecha','$Cargo', '$entrada', '$salida')";

  mysqli_query($conn, $sql);
  echo "<script>alert('Empleado registrado!');  window.location.href = '../php/AdminEmpleados.php' </script>";
}
?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/registerEmpleado.css">
  <link rel="shortcut icon" href="../imagenes/hola.png" type="image/x-icon">
  <title>Registrar empleado - Admin</title>
</head>

<body>

  <div class="login-box">
    <img src="../imagenes/hola.png" class="avatar" alt="Avatar Image">
    <h1 id="titleA">Registro de nuevo empleado</h1>
    <form method="post">

      <label for="password" id="P2">Nombre de Empleado</label>

      <input type="text" name="nombre" placeholder="Ingresa el nombre del empleado" required>

      <label for="">DUI</label>
      <input type="text" name="dui" placeholder="Ingresa el DUI del empleado" minlength="8" maxlength="8" required>

      <label for="password" id="P2">PIN</label>

      <input type="text" name="PIN" placeholder="Ingresa el Pin" minlength="4" maxlength="4" required>

      <label for="password" id="P2">ID del empleado</label>

      <input type="text" name="ids" placeholder="Ingresa el ID de empleado" minlength="5" maxlength="5" required>

      <label for="password" id="P2">Fecha de ingreso</label>

      <input type="date" name="fecha" placeholder="Ingresa la fecha" required>

      <label for="password" id="P2">Cargo</label>

      <input type="text" name="cargo" placeholder="Ingresa el cargo" required>

      <label for="password" id="P2">Turno de entrada</label>

      <input type="time" name="horaent" value="11:45:00" max="22:30:00" min="5:00:00" step="1">

      <label for="password" id="P2">Turno de salida</label>

      <input type="time" name="horasal" value="11:45:00" max="22:30:00" min="10:00:00" step="1">

      <input type="submit" name="iniciar" value="Registrar empleado" id="V1">


    </form>
  </div>

</body>

</html>