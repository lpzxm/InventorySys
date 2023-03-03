<?php
include "conexion.php";
$productos = mysqli_query($conn, "Select * from categorias");
$productos = mysqli_fetch_all($productos);
print_r($productos);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $nombre = $_POST["nombre"];
  $Descripcion = $_POST["Descripcion"];
  $Cantidad = $_POST["Cantidad"];
  $Precio = $_POST["Precio"];
  $categoria = intval($_POST["categoria"]);
  $sql = "Insert into productos (Nombre, Descripcion, Cantidad, Precio, IDcategoria) VALUES ('$nombre', '$Descripcion', $Cantidad, $Precio, $categoria)";

  mysqli_query($conn, $sql);
  echo "<script>alert('categoria creada');  window.location.href = '../html/AdminProductos.html' </script>";
 
}2

?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/loginstyle.css">
    <link rel="shortcut icon" href="../imagenes/hola.png" type="image/x-icon">
    <title>Inicia Sesion</title>
  </head>
  <body>

    <div class="login-box">
      <img src="../imagenes/hola.png" class="avatar" alt="Avatar Image">
      <h1 id="titleA">Ingresa aqui</h1>
      <form method="post">

        <label for="password" id="P2">Nombre de producto:</label>

        <input type="text" name="nombre" placeholder="Ingresa el nombre del producto">

        <label for="password" id="P2">Descripción: </label>

        <input type="text" name="Descripcion" placeholder="Ingresa el nombre del producto">

        <label for="password" id="P2">Cantidad: </label>
        <input type="number" name="Cantidad" min="1" max="100">

        <label for="password" id="P2">Precio: </label>
        <input type="number" name="Precio" min="1" max="100">
        
        <select name="categoria" id="">
            <?php
                foreach ($productos as $categoria) {
                    ?>
                    <option value="<?=$categoria[0]?>"><?=$categoria[1]?></option><?php
                }
            ?>
        </select>

        <input type="submit" name="iniciar" value="Crear categoria" id="V1">

        
      </form>
    </div>
    
  </body>
 
</html>