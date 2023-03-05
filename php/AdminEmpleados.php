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
            <a href="../php/InicioSesion.php"><input id="cerrar" type="button" value="Cerrar sesión"/></a>
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
      <button id="botoemple"> <a id="emple" href="../html/registro de empleado.html"> Agregar empleado <img id="empleimg" src="../Imagenes/Imagenes-Empleado/empleado-contratar.png" width="50px" alt=""></a></button>
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
            <th>Fecha de registro</th>
            <th>Eliminar empleado</th>
            </tr>
            <tr>
                <td>Lorem, ipsum.</td>
                <td>Lorem, ipsum.</td>
                <td>Lorem, ipsum.</td>
                <td>Lorem, ipsum.</td>
                <td><button><img src="../Imagenes/Eliminar.webp" width="20px"id="myBtn" onclick="eliminarEmpleadoModal()"></button></td>
    
            </tr>
            <tr>
                <td>Lorem, ipsum.</td>
                <td>3Lorem, ipsum.</td>
                <td>Lorem, ipsum.</td>
                <td>Lorem, ipsum.</td>
                <td><button><img src="../Imagenes/Eliminar.webp" width="20px"id="myBtn" onclick="eliminarEmpleadoModal()"></button></td>
            </tr>
            <tr>
                <td>Lorem, ipsum.</td>
                <td>4Lorem, ipsum.</td>
                <td>Lorem, ipsum.</td>
                <td>Lorem, ipsum.</td>
                <td><button><img src="../Imagenes/Eliminar.webp" width="20px"id="myBtn" onclick="eliminarEmpleadoModal()"></button></td>
            </tr>
            <tr>
                <td>SLorem, ipsum.</td>
                <td>2Lorem, ipsum.</td>
                <td>$Lorem, ipsum.</td>
                <td>DLorem, ipsum.</td>
                <td><button><img src="../Imagenes/Eliminar.webp" width="20px"id="myBtn" onclick="eliminarEmpleadoModal()"></button></td>
            </tr>
            <tr>
                <td>Lorem, ipsum.</td>
                <td>Lorem, ipsum.</td>
                <td>Lorem, ipsum.</td>
                <td>Lorem, ipsum.</td>
                <td><button><img src="../Imagenes/Eliminar.webp" width="20px"id="myBtn" onclick="eliminarEmpleadoModal()"></button></td>
            </tr>
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
        function eliminarEmpleadoModal(){
          var modal = document.getElementById("myModal");
          var btn = document.getElementById("myBtn");
          var span = document.getElementsByClassName("close")[0];
    
          btn.onclick = function() {
            modal.style.display = "block";
            console.log("hola")
          }
    
          span.onclick = function() {
            modal.style.display = "none";
          }

          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }     
        }
    
        </script>
</body>
</html>