<?php



require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";


//instanciar objetos
$plantilla = new ControladorPlantilla();

//ejecutamos el metodos 
$plantilla -> ctrGetPlantilla();

