<?php

include "conexion.php";
$IDproducto = intval($_GET['ID']);
$miProducto = mysqli_query($conn, "Select * from productos where IDproducto = $IDproducto");
$miProducto = mysqli_fetch_assoc($miProducto);
$mostrar = 0;
if (intval($miProducto['visible'])) {
    $mostrar = 0;
}
else{
    $mostrar = 1;
}
$sql = "Update productos set visible = $mostrar where IDproducto = $IDproducto";
  mysqli_query($conn, $sql);
  echo "<script>alert('producto ocultado');  window.location.href = '../php/AdminProductos.php' </script>";
?>