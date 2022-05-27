<?php
$lesServices = $unControleur->selectAllServices();

require_once("vue/vue_insert_service.php");
if (isset($_POST['Valider'])) {
    #if (!empty($_POST['description']) && !empty($_POST['dateinter']) && !empty($_POST['prix']) && !empty($_POST['idtechnicien']) && !empty($_POST['idvehicule'])) 
    $unControleur->insertService($_POST);
    //var_dump($insertService);
}

$lesServices = $unControleur->selectAllServices();
require_once("vue/vue_les_services.php");
