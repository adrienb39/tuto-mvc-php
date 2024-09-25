<?php

$Vue->setMenu(new \App\Vue\Vue_Menu_Orage());
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['action']) && $_REQUEST['action'] === 'calculerDistance') {
    $temps = floatval($_POST['temps']);
    if ($temps >= 0) {
        $distance = $temps / 3;  // Distance en km
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("La distance de l'orage est d'environ : " . round($distance, 2) . " km."));
    } else {
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Le temps doit être un nombre positif."));
    }
} else {
    $Vue->addToCorps(new \App\Vue\Vue_Calculer_Orage());
}