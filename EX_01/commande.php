<?php 
$historique_commande = array ('5.49','9.99','5.49','15.99','25');

function afficher_commande ($historique_commande){
    foreach($historique_commande as $value) {
        echo "Une commande de  ".$value ." euros a été reçus.". "<br/>";
    }
}

afficher_commande($historique_commande);
function afficher_total ($historique_commande)
{
    echo "le total des commandes est de ". array_sum ($historique_commande)."euros"."</br>";
}
afficher_total($historique_commande);

$sohop = array (
    array("rose", 1.25 , 15 ),
    array ("daisy", 0.75 , 25 ),
    array("orchid", 1.15 , 7 ),
);
?>