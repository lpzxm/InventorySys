<?php
include "conexion.php";
$productos = mysqli_query($conn, "Select * from categorias");
$productos = mysqli_fetch_all($productos);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $nombre = $_POST["nombre"];
  $Descripcion = $_POST["Descripcion"];
  $proveedor = $_POST["proveedor"];
  $Cantidad = $_POST["Cantidad"];
  $Precio = $_POST["Precio"];
  $categoria = intval($_POST["categoria"]);
  $sql = "Insert into productos (Nombre, Descripcion, proveedor, Cantidad, Precio, IDcategoria) VALUES ('$nombre', '$Descripcion', '$proveedor',  $Cantidad, $Precio, $categoria)";

  mysqli_query($conn, $sql);
  echo "<script>alert('Producto agregado!');  window.location.href = '../php/adminProductos.php' </script>";
 
}
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/agregarProdstyle.css">
    <link rel="shortcut icon" href="../imagenes/hola.png" type="image/x-icon">
    <title>Agregar Producto - Admin</title>
  </head>
  <body>

    <div class="login-box">
      <img src="../imagenes/hola.png" class="avatar" alt="Avatar Image">
      <h1 id="titleA">Ingresa un producto nuevo al inventario!</h1>
      <form method="post">

        <label for="password" id="P2">Nombre de producto:</label>

        <input type="text" name="nombre" placeholder="Ingresa el nombre del producto" required>

        <label for="password" id="P2">Descripción:</label>
        <input type="text" name="Descripcion" placeholder="Descripción" required>

        <label for="">Proveedor: </label>
        <input type="text" name="proveedor" placeholder="Nombre de empresa/proveedor" required>

        <label for="password" id="P2">Cantidad:</label>
        <input type="number" name="Cantidad" min="1" max="100" placeholder="1 a 100" required>

        <label for="password" id="P2">Precio:</label>
        <input type="number" name="Precio" min="0.01" max="100" step="0.01" required>

        <label for="">Selecciona la categoria a la cual pertenece: </label>

        <select name="categoria" id="" required>
            <?php
                foreach ($productos as $categoria) {
                    ?>
                    <option value="<?=$categoria[0]?>"><?=$categoria[1]?></option><?php
                }
            ?>
        </select>
        <br><br>
        <input type="submit" name="iniciar" value="Registrar producto" id="V1">

        
      </form>
    </div>
    
  </body>
 
</html>