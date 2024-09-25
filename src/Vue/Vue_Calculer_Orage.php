<?php

namespace App\Vue;
use App\Utilitaire\Vue_Composant;

class Vue_Calculer_Orage extends Vue_Composant {
    public function __construct() { }

    function donneTexte(): string {
        return "
        <h2>Calcul de la Distance d'un Orage</h2>
        <form method='POST' action='?case=Orage&action=calculerDistance'>
            <label for='temps'>Temps (en secondes) entre l'éclair et le tonnerre :</label>
            <input type='number' id='temps' name='temps' required>
            <br>
            <input type='submit' value='Calculer la distance'>
        </form>
        ";
    }
}