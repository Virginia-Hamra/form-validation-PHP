<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>form validation PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Form validation in PHP</h1>
    
        <div class="contenido">
          <h1><?php echo "Enter our Website"; ?></h1>
        </div>
    </div>
    <div id="formulario" style=
    "padding-left: 570px;">
    <h2>Login now!</h2><br>
        <form method="post"action="data.php">
        <label> Name <br> <input type="text" placeholder="Juan Pedro" name="nombre"> </label><br>
<!--le puedo asignar la palabra: required a los campos que sean requeridos pero pedire desde php que traigan datos si osi -->
        <label> Email<br> <input placeholder="info@miweb.com" type="email" name="email"> </label><br>
        <label> Password<br> <input type="password" required placeholder="********" name="password" id="password"></label><br>
        
        <label> Chat room <br><select name="origen" value="-Any-"> 
          <option value="a"> Room A </option>
          <option value="b"> Room B </option>
          <option value="c"> Room C </option>
        </select>

        </label><br>
        <label> Stay signed in <input style="width: 20px; height: 20px;" checked type="checkbox" name="terminos"> </label><br><br>
        <button style="
    width: 64px;
    height: 39px; "> Enviar </button>
        </form>
</div>



  </body>
</html>
