<?php
function commander_panier(){
echo 'test';

include_once __DIR__.'/../Entity/User.php';

$user= getDetailUser($_SESSION['user']);

include_once __DIR__.'/../Entity/facture.php';

insert_facture($user);

include_once __DIR__ .'/../Entity/commande.php';
$panier= $_SESSION['panier'];
$lastefacture = getLastFacture();
foreach ( $panier as $cle =>$value){
    insert_commande($lastefacture['id'],$cle,$value);
}

unset($_SESSION['panier']);

}

function mes_commande(){
    // afficher l'ensemble de mes commandes
    include_once __DIR__."/../Entity/User.php";
    $user=getDetailUser($_SESSION['user']);
    include_once __DIR__."/../Entity/commande.php";
    $mescommandes=getCommande($user['id']);
    //var_dump($mescommandes);

    include_once __DIR__ .'/../../templates/voir_commandes.php';
}