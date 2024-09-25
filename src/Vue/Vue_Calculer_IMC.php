<?php

namespace App\Vue;
use App\Utilitaire\Vue_Composant;

class Vue_Calculer_IMC extends Vue_Composant
{
    public function __construct()
    {

    }
    function donneTexte(): string
    {
        return '
        <h2>Calcul de l\'IMC</h2>
        <form method="POST" action="?case=IMC&action=calculerIMC">
            <label for="poids">Poids (kg) :</label>
            <input type="number" id="poids" name="poids" required>
            <br>
            <label for="taille">Taille (m) :</label>
            <input type="number" step="0.01" id="taille" name="taille" required>
            <br>
            <input type="submit" value="Calculer l\'IMC">
        </form>
';
    }
}