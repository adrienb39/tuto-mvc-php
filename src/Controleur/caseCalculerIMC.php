<?php

$Vue->setMenu(new \App\Vue\Vue_Menu_IMC());
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['action']) && $_REQUEST['action'] === 'calculerIMC') {
    $poids = floatval($_POST['poids']);
    $taille = floatval($_POST['taille']);
    if ($taille > 0) {
        $imc = $poids / ($taille * $taille);
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Votre IMC est : " . round($imc, 2)));
    } else {
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("La taille doit être supérieure à zéro."));
    }
} else {
    $Vue->addToCorps(new \App\Vue\Vue_Calculer_IMC());
}