<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSession('admin');

$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: ' . RUTA . '/error.php');
}

function mostrarMedicos($conexion){
    $especialidades = obtenerEspecialidades($conexion);
    foreach($especialidades as $especialidad){
        $medicos = obtenerMedicos($conexion, $especialidad[1]);
        echo('
        <div class="especialidad">
          <div class="separador">
            <h2>'. $especialidad['especialidad'].'</h2>
            <a class="borrar-btn" id="especialidad" data-route="borrar_especialidad.php?id='. $especialidad['ID'].'">
              <i class="far fa-trash-alt fa-lg"></i>
            </a>
          </div>
          <div class="wrapper_medicos">');
            foreach($medicos as $medico){
                echo('
                    <div class="medico">
                        <img src="'. RUTA .'/images/'. ($medico['foto']).'" class="foto_medico" alt="">
                    <div class="info_medico">
                        <h4>'. $medico['nombre'].'</h4>
                        <p>'. $medico['especialidad'].'</p>
                        <p>'. $medico['horario'].'</p>
                    </div>
                    <div class="editar_borrar">
                        <a href="editar.php?id='. $medico['id'].'">
                            <i class="far fa-edit fa-lg"></i>
                        </a>
                        <a data-route="borrar.php?id='. $medico['id'].'" class="borrar-btn" id="medico" >
                            <i class="far fa-trash-alt fa-lg"></i>
                        </a>
                    </div>
                </div>');
            }
          echo('</div>
        </div>');
    }
}
 
require '../views/administracion.view.php';

?>