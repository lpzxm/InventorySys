<?php
include("conexion.php");

if(isset($_POST['enviar'])) {
  if(strlen($_POST['nombre']) >= 1 && strlen($_POST['descripcion']) >= 1){
    $nombre = trim($_POST['nombre']);
    $descripcion = trim($_POST['descripcion']);
    $consulta = "INSERT INTO reportes(Nproduct, Descripcion) VALUES ('$nombre','$descripcion')";
    $resultado = mysqli_query($conn, $consulta);

    if ($resultado = true) {
      header("location: adminProductos.php");
    }
  }
}
?>