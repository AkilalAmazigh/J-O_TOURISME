<?php
$lesEvenements = $unControleur->selectAllEvenements();

require_once("vue/vue_insert_evenement.php");
if (isset($_POST['Valider'])) {
    #if (!empty($_POST['description']) && !empty($_POST['dateinter']) && !empty($_POST['prix']) && !empty($_POST['idtechnicien']) && !empty($_POST['idvehicule'])) 
    $unControleur->insertEvenement($_POST);
    var_dump($insertEvenement);
}

$lesEvenements = $unControleur->selectAllEvenements();
require_once("vue/vue_les_evenements.php");
