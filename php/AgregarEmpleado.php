<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/registro de empleado.css">
    <link rel="shortcut icon" href="../imagenes/hola.png" type="image/x-icon">
    <title>Registrate</title>
  </head>
  <body>

    <div class="login-box">
      <img src="../imagenes/hola.png" class="avatar" alt="Avatar Image">

      <h1 id="TitleA">¡Registra al empleado aqui!</h1>
      <form action="../html/AdminEmpleados.html">

        <label for="username" id="TitleB">Nombre del empleado:</label>
        <input type="text" name="nameholder" placeholder="Ingrese el nombre del empleado">

        <label for="username" id="TitleF">Credencial (Pin):</label>
        <input type="text"  name="codigoholder" placeholder="Ingrese el pin del empleado">

        <label for="username" id="TitleJ">Fecha de ingreso:</label>
        <input type="text"  name="validaholder" placeholder="Ingrese la fecha de ingreso del empleado">

        <label for="descripcion" id="pastel1"> ID del empleado:</label>

        <input type="text"  id="pastel2" placeholder="Ingrese el ID del empleado">
        
        <label for="descripcion" id="pastel1"> Cargo:</label>

        <input type="text"  id="pastel2" placeholder="Ingrese el cargo del empleado">

        
      
        <input type="submit" value="Registrar" id="TitleL">
      </form>
    </div>

  </body>
  
</html>