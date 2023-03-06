<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/report_product.css">
    <title>Supergangas-Reporte</title>
</head>
<body>
    <section>
        <div class="report">
        <h1>Reporte de producto</h1>
        <form method="post">
            <label for="nombre">Nombre del producto:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea ><br><br>
            <input type="submit" name="enviar">
        </form>
        <?php
         include("formpro.php");
         ?>
    </div>
    </section>
</body>
</html>