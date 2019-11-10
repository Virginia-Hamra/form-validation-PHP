<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Data from Form PHP</h1>
    
        <div class="contenido">
       <?php $resultado = $_POST; ?>
       <?php $nombre = $resultado['nombre']; ?>
       <?php $email =  $resultado['email'];  ?>
       <?php $password =  $resultado['password'];  ?>
      
       <h3>Personal Data</h3>
       <hr>
<!-- validar información estrictamente: validar que un campo de texto no llegue vacío -->
<?php 
          if(! (filter_has_var(INPUT_POST, 'nombre') && 
                (strlen(filter_input(INPUT_POST,'nombre')) > 0))) {
            echo "Name required";
          } else {    ?>
              <p>Name: <?php echo $nombre; ?></p>
          <?php } ?>
          <hr>
    
<!-- otra forma menos estricta pero igual de buena:-->
       
<?php if(!isset($email) || trim($email) != '') { ?>
            <p>Email: <?php echo $email; ?></p>
          <?php } else {
            echo "Email required"; ?>
            <?php  }  ?>
      <hr>
      <?php if(!isset($password) || trim($password) != '') { ?>
            <p>Password: <?php echo $password; ?></p>
          <?php } else {
            echo "Password required"; ?>
            <?php  }  ?>

      <hr>
      <?php //reading from a select, validate select
            if (isset($_POST['origen'])) {
              $origen = $_POST['origen'];
              echo "Chat room selected: ";
              
            switch ($origen) {
                case 'a':
                  echo "Room A";
                  break;
                case 'b':
                  echo "Room B";
                  break;
                case 'c':
                  echo "Room C";
                break;
                default:
                  echo "Please choose a room";
                break;
              }

            }
        
            ?>
            
      <hr>
      <?php 
            if (isset($_POST['terminos'])) {
              $terminos = $_POST['terminos'];
              if ($terminos == 'on') {
                echo "Stay signed in";
              }
            }
        
            ?>
      
      
      <hr>
        
        

   <pre> 
         <?php print_r($_POST); ?>
    </pre> 
</div>


        
  </body>
</html>