<?php

namespace App\Modele;

use App\Utilitaire\Singleton_ConnexionPDO;
use PDO;

class Modele_TableUtilisateur
{
    /**
     * @return mixed : le tableau des enregistrements dans la table "table"(something went wrong...)
     */
    static function  TableUtilisateur_Select()
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $requetePreparee = $connexionPDO->prepare('
select *
    from `utilisateur`
    order by id');
        $reponse = $requetePreparee->execute(); //$reponse boolean sur l'état de la requête
        $tableauReponse = $requetePreparee->fetchAll(PDO::FETCH_ASSOC);
        return $tableauReponse;
    }

    public static function TableUtilisateur_Insert(mixed $nom, mixed $prenom, mixed $motDePasse)
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $requetePreparee = $connexionPDO->prepare('
        insert into `utilisateur` (nom, prenom, motDePasse) values (:nom, :prenom, :motDePasse)');
        $reponse = $requetePreparee->execute(array(
            "nom" => $nom,
            "prenom" => $prenom,
            "motDePasse" => $motDePasse
        ));
        return $reponse;
    }

    public static function TableUtilisateur_Delete(mixed $id)
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $requetePreparee = $connexionPDO->prepare('
        delete from `utilisateur` where id=:id');
        $reponse = $requetePreparee->execute(array(
            "id" => $id
        ));
        return $reponse;
    }

    public static function TableUtilisateur_SelectById(mixed $id)
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $requetePreparee = $connexionPDO->prepare('
        select * from `utilisateur` where id=:id');
        $reponse = $requetePreparee->execute(array(
            "id" => $id
        ));
        $tableauReponse = $requetePreparee->fetch(PDO::FETCH_ASSOC);
        return $tableauReponse;
    }

    public static function TableUtilisateur_Update(mixed $id, mixed $nom, mixed $prenom, mixed $motDePasse)
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $requetePreparee = $connexionPDO->prepare('
        update `utilisateur` set nom=:nom, prenom=:prenom, motDePasse=:motDePasse where id=:id');
        $reponse = $requetePreparee->execute(array(
            "id" => $id,
            "nom" => $nom,
            "prenom" => $prenom,
            "motDePasse" => $motDePasse
        ));
        return $reponse;
    }

}