<?php
include("conexion.php");
  if(isset($_POST["iniciar"])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM empleados WHERE ID del empleado = '$usuario' and password ='$password'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count) {
        header("Location: ../HTML/ADMIN.php");
    }
    else {
        echo '<script>
        window.location.href = inicio de sesion.php;
        alert("Login failed. Invalid username or password!!!")</script>';
    }
  }
?>