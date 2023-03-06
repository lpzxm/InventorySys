<?php
include "conexion.php";
$empleados = "Select * from empleados";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Menúlateral.css">
    <link rel="stylesheet" href="../css/AdminEmpleados.css">
    <link rel="stylesheet" href="../css/modalStyle.css">
    <link rel="icon" href="../Imagenes/hola.png">
    <title>Admin Empleados</title>
</head>
<body onload="mueveReloj()" background="../Imagenes/fondoadmin.jpeg">
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
            <li> <a href="../php/AdminEmpleados.php"> Empleados</li></a>
            <li> <a href="../php/table.php">Reporte</a></li>
            <li><a href="../php/adminProductos.php">Productos</a></li>
            <br>
            <a href="../php/logout.php"><input id="cerrar" type="button" value="Cerrar sesión"/></a>
            <br>
            <hr>
            <br>
            <li><a href="#">Hora:</a><form name="form_reloj">
                <input type="text" name="reloj" size="10" onfocus="window.document.form_reloj.reloj.blur()">
                </form></li>
    </div>
    </section>

        <!--Buscador-->
        <br>
        <div class="buscador">
            <input  type="text" placeholder="Buscar" required>
        </div>
        
    <div class="btnAddEmpleado">
      <button id="botoemple"> <a id="emple" href="../php/Registro empleado.php"> Agregar empleado <img id="empleimg" src="../Imagenes/Imagenes-Empleado/empleado-contratar.png" width="50px" alt=""></a></button>
    </div>

    <!-- modal -->
    <!-- Modal -->
    <div id="myModal" class="modal">
    
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h2><img src="../Imagenes/question_icon.png" alt="" width="100px"><br> Eliminar empleado</h2>
          </div>
          <div class="modal-body">
            <br><br><p class="modal-comment">¿Desea eliminar del sistema al empleado previamente seleccionado?</p><br><br>
          </div>
          <div class="modal-footer">
            <br>
            <button class="button confirm" type="submit">Confirmar</button>
            <button class="button cancel" type="submit">Cancelar</button>
          </div>
        </div>
      
      </div>
    <!-- Tabla con empleados -->
    <!--Carnes-->
    <div class="employeecontainer">
        <table class="tablaemplo" border="1">
            <tr>
            <th>Nombre completo</th>
            <th>DUI</th>
            <th>ID</th>
            <th>PIN</th>
            <th>Fecha de registro</th>
            <th>Cargo</th>
            <th>Eliminar empleado</th>
            </tr>
            <?php
              $result = mysqli_query($conn, $empleados);

              while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row["Nombre del empleado"]?></td>
                <td><?php echo $row["DUI"]?></td>
                <td><?php echo $row["ID del empleado"]?></td>
                <td><?php echo $row["Credencial (PIN)"]?></td>
                <td><?php echo $row["Fecha de ingreso"]?></td>
                <td><?php echo $row["Cargo"]?></td>
                <td><a href="../php/eliminarEmpleado.php?ID=<?php echo $row["ID"];?>"><button><img src="../Imagenes/Eliminar.webp" width="20px"id="myBtn"></button></a></td>
            </tr>
            <?php }?>
        </table>
    </div>
    
    <!-- Reloj -->
    <script language="JavaScript">
        function mueveReloj(){
            momentoActual = new Date()
            hora = momentoActual.getHours()
            minuto = momentoActual.getMinutes()
            segundo = momentoActual.getSeconds()
        
            str_segundo = new String (segundo)
            if (str_segundo.length == 1)
               segundo = "0" + segundo
        
            str_minuto = new String (minuto)
            if (str_minuto.length == 1)
               minuto = "0" + minuto
        
            str_hora = new String (hora)
            if (str_hora.length == 1)
               hora = "0" + hora
        
            horaImprimible = hora + " : " + minuto + " : " + segundo + "  " + momentoActual;
        
            document.form_reloj.reloj.value = horaImprimible
        
            setTimeout("mueveReloj()",1000)
        }

        </script>
</body>
</html>