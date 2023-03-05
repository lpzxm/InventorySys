<?php
include "conexion.php";
$IDproducto = intval($_GET['ID']);
$miProducto = mysqli_query($conn, "Select * from productos where IDproducto = $IDproducto");
$miProducto = mysqli_fetch_assoc($miProducto);
$productos = mysqli_query($conn, "Select * from categorias");
$productos = mysqli_fetch_all($productos);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $nombre = $_POST["nombre"];
  $Descripcion = $_POST["Descripcion"];
  $proveedor = $_POST["proveedor"];
  $Cantidad = $_POST["Cantidad"];
  $Precio = $_POST["Precio"];
  $categoria = intval($_POST["categoria"]);
  $sql = "Update productos set Nombre = '$nombre', Descripcion = '$Descripcion', proveedor = '$proveedor', Cantidad = $Cantidad, Precio = $Precio, IDcategoria = $categoria where IDproducto = $IDproducto";
  mysqli_query($conn, $sql);
  echo "<script>alert('Producto editado!');  window.location.href = '../php/AdminProductos.php' </script>";
 
}2

?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/agregarProdstyle.css">
    <link rel="shortcut icon" href="../imagenes/hola.png" type="image/x-icon">
    <title></title>
  </head>
  <body>

    <div class="login-box">
      <img src="../imagenes/hola.png" class="avatar" alt="Avatar Image">
      <h1 id="titleA">Edita el producto: <?=$miProducto["Nombre"] ?></h1>
      <form method="post">

        <label for="password" id="P2">Nombre de producto:</label>

        <input type="text" name="nombre" placeholder="Ingresa el nombre del producto" value="<?=$miProducto["Nombre"] ?>">

        <label for="password" id="P2">Descripción: </label>

        <input type="text" name="Descripcion" placeholder="Ingresa el nombre del producto" value="<?=$miProducto["Descripcion"]?>">

        <label for="">Proveedor: </label>
        <input type="text" name="proveedor" placeholder="Nombre de empresa/proveedor" value="<?=$miProducto["proveedor"]?>">

        <label for="password" id="P2">Cantidad: </label>
        <input type="number" name="Cantidad" min="1" max="100" value="<?=$miProducto["Cantidad"] ?>">

        <label for="password" id="P2">Precio: </label>
        <input type="number" name="Precio" min="0.01" max="100" step="0.01" value="<?=$miProducto["Precio"] ?>">
        <label for="">Selecciona la categoria a la cual pertenece: </label>
        <select name="categoria" id="" >
            <?php
                foreach ($productos as $categoria) {
                    ?>
                    <option selected="<?=$categoria[0] == $miProducto["IDcategoria"]?>" value="<?=$categoria[0]?>"><?=$categoria[1]?></option><?php
                }
            ?>
        </select>
        <br><br>
        <input type="submit" name="iniciar" value="Confirmar producto" id="V1">

        
      </form>
    </div>
    
  </body>
 
</html>