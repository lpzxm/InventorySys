<?php
include("conexion.php");

$id = $_GET['ID'];
$eliminar = "DELETE FROM reportes WHERE ID = '$id'";

$resultadoEliminar = mysqli_query($conn, $eliminar);

if ($resultadoEliminar) {
    header("location: ../php/table.php");
} else {
    echo"<script>alert('No se pudo completar la accion'); window.history.go(-1);</script>";
}
?>