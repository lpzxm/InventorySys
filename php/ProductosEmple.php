<?php
include "conexion.php";

$categoriaResult = mysqli_query($conn, "Select * from categorias");
$misCategorias = [];
while ($categoria = mysqli_fetch_assoc($categoriaResult)) {
    $misCategorias[] = $categoria;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Menúlateral.css">
    <link rel="stylesheet" href="../css/AdminProductos.css">
    <link rel="stylesheet" href="../css/modalStyle.css">
    <title>Productos - Empleado</title>
</head>

<body onload="mueveReloj()" background="../Imagenes/Imagenes-Empleado/fondo.avif">
    <header>
        <img src="../Imagenes/Imagenes-Empleado/holax2.png" alt="">
        <hr>
    </header>

    <!--Menú lateral-->
    <section class="container">
        <div class="fondo">
            <img src="../Imagenes/Imagenes-Empleado/hola.png" alt="logo" width="100">
            <br>
            <ul>
                <li> <a href="../php/">Perfil</li></a>
                <li> <a href="../php/ProductosEmple.php">Productos</a></li>
                <br>
                <a href="../php/logout.php"><input id="cerrar" type="button" value="Cerrar sesión" /></a>
                <br>
                <hr>
                <br>
                <li><a href="#">Hora:</a>
                    <form name="form_reloj">
                        <input type="text" name="reloj" size="10" onfocus="window.document.form_reloj.reloj.blur()">
                    </form>
                </li>
        </div>
    </section>

    <!--Buscador-->
    <br>
    <div class="buscador">
        <input type="text" placeholder="Buscar" required>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">

        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2><img src="../Imagenes/question_icon.png" alt="" width="100px"><br> Eliminar empleado</h2>
            </div>
            <div class="modal-body">
                <br><br>
                <p class="modal-comment">¿Desea ocultar el producto de la vista Empleado?</p><br><br>
            </div>
            <div class="modal-footer">
                <br>
                <button class="button confirm" type="submit">Confirmar</button>
                <button class="button cancel" type="submit">Cancelar</button>
            </div>
        </div>
    </div>

    <!--Cuerpo del trabajo-->
    <?php foreach ($misCategorias as $cate) {

    ?>
        <div id="cont">
            <h1 class="">Categoria: <?= $cate["Nombre"] ?></h1>
            <!--Carnes-->
            <table class="" border="0">
                <tr class="first">
                    <th>Nombre de producto</th>
                    <th>Cantidad </th>
                    <th>Precio</th>
                    <th>Cod.</th>
                    <th>Empresa que la distrubuye</th>
                    <th></th>
                </tr>
                <?php $misProductos = [] ?>
                <?php $categoriaID = $cate['ID'] ?>
                <?php $ProductosResult = mysqli_query($conn, "Select * from productos where IDcategoria = $categoriaID"); ?>
                <?php while ($producto = mysqli_fetch_assoc($ProductosResult)) {
                    $misProductos[] = $producto;
                } ?>

                <?php foreach ($misProductos as $producto) {
                    # code...
                ?>
                <tr>
                <td><?=$producto['Nombre'] ?></td>
                <td><?=$producto['Cantidad'] ?> unidades <button><img src="../Imagenes/Imagenes-Empleado/compra.png" width="20px"></button></td>
                <td>$<?=$producto['Precio'] ?> </td>
                <td><?=$producto['IDproducto'] ?></td>
                <td><?=$producto['proveedor']?></td>
                <td><a href="../php/Report empleado.php"><input type="button" value="Reportar la inexistencia de producto"></td>
                </tr>
                <?php } ?>
                <?php if (empty($misProductos)) {
                
                ?>
                <h2>No hay producto</h2>
                <?php }
                ?>
            </table>
        </div>
        </div>
    <?php } ?>
    <br>
    <br>
    <br>
    <br>
    <div class="contfoo">
        <footer>
            <p id="footer">Derechos reservado (2023)</p>
        </footer>
    </div>

    <script>
        function mueveReloj() {
            momentoActual = new Date()
            hora = momentoActual.getHours()
            minuto = momentoActual.getMinutes()
            segundo = momentoActual.getSeconds()

            str_segundo = new String(segundo)
            if (str_segundo.length == 1)
                segundo = "0" + segundo

            str_minuto = new String(minuto)
            if (str_minuto.length == 1)
                minuto = "0" + minuto

            str_hora = new String(hora)
            if (str_hora.length == 1)
                hora = "0" + hora

            horaImprimible = hora + " : " + minuto + " : " + segundo + "  " + momentoActual;

            document.form_reloj.reloj.value = horaImprimible

            setTimeout("mueveReloj()", 1000)
        }
    </script>
</body>

</html>