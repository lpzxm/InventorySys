<?php
include("conexion.php");
$report = "SELECT * FROM reportes";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/table.css">
    <title>Reportes - Admin</title>
</head>
<body>
    <div id="main-container">
        <table class="CRUD">
            <thead>
                <tr>
                    <th>Nombre del producto</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
                <?php $resultado = mysqli_query($conn, $report);
                while($row=mysqli_fetch_assoc($resultado)) {
                ?>
            <tr>
                    <th><?php echo $row["Nproduct"]?></th>
                    <th><?php echo $row["Descripcion"]?></th>
                    <th>
                    <a class="Accion" href="../php/proceso_eliminar.php?ID=<?php echo $row["ID"];?>">Completado</a>
                    </th>
                </tr>
            <?php } mysqli_free_result($resultado);?>
            </table>
        </div>
    </table>
</body>
</html>