<?php

$Vue->setMenu(new \App\Vue\Vue_Menu_TableUtilisateur());
switch ($action) {
    case "defaut":
        $data = \App\Modele\Modele_TableUtilisateur::TableUtilisateur_Select();
        $Vue->addToCorps(new \App\Vue\Vue_AccueilTableUtilisateur($data));
        break;
    case "ajouter":
        $Vue->addToCorps(new \App\Vue\Vue_AjouterTableUtilisateur());
        break;
    case "enregistrerAjouter":
        $data = \App\Modele\Modele_TableUtilisateur::TableUtilisateur_Insert($_REQUEST["nom"], $_REQUEST["prenom"], $_REQUEST["motDePasse"]);

        $data = \App\Modele\Modele_TableUtilisateur::TableUtilisateur_Select();
        $Vue->addToCorps(new \App\Vue\Vue_AccueilTableUtilisateur($data));
        break;
    case "supprimer":
        $data = \App\Modele\Modele_TableUtilisateur::TableUtilisateur_Delete($_REQUEST["id"]);
        $data = \App\Modele\Modele_TableUtilisateur::TableUtilisateur_Select();
        $Vue->addToCorps(new \App\Vue\Vue_AccueilTableUtilisateur($data));
        break;
    case "modifier":
        $data = \App\Modele\Modele_TableUtilisateur::TableUtilisateur_SelectById($_REQUEST["id"]);
        $Vue->addToCorps(new \App\Vue\Vue_ModifierTableUtilisateur($data));
        break;
    case "enregistrerModifier":
        \App\Modele\Modele_TableUtilisateur::TableUtilisateur_Update($_REQUEST["id"], $_REQUEST["nom"], $_REQUEST["prenom"], $_REQUEST["motDePasse"]);
        $data = \App\Modele\Modele_TableUtilisateur::TableUtilisateur_Select();
        $Vue->addToCorps(new \App\Vue\Vue_AccueilTableUtilisateur($data));

        break;

}