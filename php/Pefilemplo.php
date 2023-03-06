<?php
include "conexion.php";
$empleados = mysqli_query($conn, "Select * from empleados");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Imagenes/hola.png">
    <link rel="stylesheet" href="../css/perfilemplo.css">
    <title>Perfil</title>
</head>
<body onload="mueveReloj()" background="../Imagenes/Imagenes-Empleado/fondo2.webp">
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
            <li><a href="../php/Pefilemplo.php">Perfil</a></li>
            <li><a href="../php/ProductosEmple.php">Productos</a></li>
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
    <!--Cuerpo de trabajo-->
        <br>
        <br>
    <h1>¡Feliz jornada querido usuario!</h1>
    <br>
    <br>
    <img  id="Usu" src="../Imagenes/Imagenes-Empleado/Usu.png" alt="Usuario/a" height="200" width="200">
    <br>
    <br>
    <br>
    <h1 id="infop">Información personal:</h1>
    <br>
    <h4>Nombre del empleado:</h4>
    <br>
    <h4>PIN: <?= retonarPIN(); ?></h4>
    <br>
    <h4>ID: <?= retonarID(); ?></h4>
    <br>
    <h4>Fecha de ingreso: <?= retonarFecha(); ?>  </h4>
    <br>
    <h4>Cargo: <?= retonarCargo(); ?></h4>
    <br>
    <br>
    <h3>Turno asignado:</h3>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>Lunes</th>
               <th>Martes</th>
                  <th>Miercoles</th>
                    <th>Jueves</th>
                      

        </tr>
        <tr>
            <td>Vespertino <br>
            1:00pm - 5:59pm</td>
            <td>Matutino <br>
                6:00am - 12:59pm</td>
                <td>Nocturno <br>
                    6:0opm - 9:59pm</td>
                    <td>Vespertino <br>
                        1:00pm - 5:59pm</td>

        </tr>
        <th>Viernes</th>
          <th>Sábado</th>
            <th colspan="2">Domingo</th>

        <tr>                      
              <td>Nocturno <br>
            6:0opm - 9:59pm</td>
            <td>Matutino <br>
                6:00am - 12:59pm</td>
                <td colspan="2">Matutino <br>
                    6:00am - 12:59pm</td>
                
        </tr>
    </table>
    <br>
    <br>
    <div class="contfoo">
        <footer>
            <p id="footer">Derechos reservado (2023)</p>
        </footer>            
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