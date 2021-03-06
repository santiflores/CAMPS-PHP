<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscar medico</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo RUTA?>/css/stylesheet.css">
  <link rel="shortcut icon" type="image.png" href="<?php echo(RUTA);?>/images/favicon_CAMPS.png">
  <script src="https://kit.fontawesome.com/aa681c14be.js" crossorigin="anonymous"></script>
</head>
<body>
  
</body>
</html>
<?php require 'header.php' ?>
<h2><?php echo $titulo; ?></h2>
<?php foreach($resultados as $medico): ?>
<div class="medico">
  <img src="images/user.jpg" class="foto_medico" alt="">
  <div class="info_medico">
    <h4><?php echo $medico['nombre'];?></h4>
    <p><?php echo $medico['especialidad'];?></p>
    <p><?php echo $medico['horario'];?></p>
  </div>
  <button class="boton_medicos" onclick="displayTurnos()">Saca tu turno</button>
</div>
<?php endforeach; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<?php require 'footer.php'; ?>