<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSession();
  
echo('<pre>');
print_r($_SESSION);
echo('</pre>');
$conexion = conexion($bd_config);
$especialidades = obtenerEspecialidades($conexion);

if (!$conexion) {
    header('Location: ' . RUTA . '/error.php');
}
 
require '../views/administracion.view.php';

?>