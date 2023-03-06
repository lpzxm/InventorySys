<?php
session_start();

session_unset();

header("location: InicioSesion.php");

exit;

?>