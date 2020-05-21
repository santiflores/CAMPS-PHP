<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Medico - CAMPS</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTA?>/css/stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" type="image.png" href="images/favicon_CAMPS.png">
    <script src="<?php echo RUTA?>/js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/aa681c14be.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php require 'header.php'?>
    <section class="wrapper_agregar_editar">
      <div class="agregar_medico">
        <form class="agregar_medico_form" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
          <h5>Agregar medico:</h5>
          <input type="text" name="medico" placeholder="Nombre y Apellido">
          <input type="text" name="especialidad" placeholder="Especialidad">
          <input type="text" name="horario" placeholder="Horario de atencion">
          <input class="submit" type="submit" name="submit" value="Agregar Medico">
        </form>
        <form class="calendario">
          <table>
            <tr>
              <th>
                <input type="checkbox"> Lunes 1/6
              </th>
              <th>
                <input type="checkbox"> Martes 2/6
              </th>
              <th>
                <input type="checkbox"> Miercoles 3/6
              </th>
              <th>
                <input type="checkbox"> Jueves 4/6
              </th>
              <th>
                <input type="checkbox"> Viernes 5/6
              </th>
            </tr>
          </table>
        </form>
      </div>
    </section>
    <?php require 'footer.php'?>
  </body>
</html>
