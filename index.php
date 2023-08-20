<?php
require_once "config.php";

require_once CONTROLLERS_DIR . "/plantilla.controlador.php";
require_once CONTROLLERS_DIR . "/postulantes.controlador.php";
require_once MODELS_DIR . "/postulantes.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();