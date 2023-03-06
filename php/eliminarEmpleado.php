<?php

include("conexion.php");

$id = $_GET['ID'];
$delete = "DELETE FROM empleados WHERE ID = '$id'";

$resultadoEliminar = mysqli_query($conn, $delete);

if ($resultadoEliminar) {
    header("location: ../php/AdminEmpleados.php");
} else {
    echo"<script>alert('No se pudo completar la accion'); window.history.go(-1);</script>";
}
?>