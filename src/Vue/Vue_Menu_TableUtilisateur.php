<?php
namespace App\Vue;
use App\Utilitaire\Vue_Composant;

class Vue_Menu_TableUtilisateur extends Vue_Composant
{
    public function __construct( )
    {           }
    function donneTexte(): string
    {

        return "
             <nav id='menu'>
              <ul id='menu-closed'> 
                <li><a href='?case=A'>cas A</a></li>
                <li><a href='?case=B'>cas B</a></li>   
                <li><a href='?case=maTable'>Ma Table</a></li>   
                <li><a href='?case=tableUtilisateur'>****Table utilisateur****</a></li> 
                   </ul>
            </nav> 
";

    }
}