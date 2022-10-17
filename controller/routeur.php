<?php
require_once 'ControllerVoiture.php';
// On recupère l'action passée dans l'URL
$action = $_GET["action"];

if($action == "read"){
    $immat = $_GET['immat'];
    ControllerVoiture::read($immat);
}else{
    if($action == "readall"){
        ControllerVoiture::readAll();
    }
}


// Appel de la méthode statique $action de ControllerVoiture
?>