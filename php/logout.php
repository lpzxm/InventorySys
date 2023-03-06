<?php
session_start();

session_unset();

header("location: inicio de sesion.php");

exit;

?>