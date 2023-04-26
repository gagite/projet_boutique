<?php
function add(){
// la variable $_SESSION['panier'] elle n'existe pas
// on met dans la variable panier un tableau vide

// on met dans $id l'information du produit issue de l'URL
$id= $_GET['id'];
// si le panier n'existe pas alors a ce moment je cree un nouveau
// session de panier si non je recupere l'ancien panier
if (isset($_SESSION['panier'])) {
    // je recupere dans la variable panier le panier existant
    $panier=$_SESSION['panier'];
}
else {
    $_SESSION['panier']=array();
    $panier=$_SESSION['panier'];
}
 
// si la variable $panier[du produit 5] n'existe pas
// alors on definit une quanité à 0 .  si j'envoie 8 => 0 
if (!isset($panier[$id]))  {
    $panier[$id]=0;
}
// on met dans la variable panier pour un produit par ex : 5 ce sera la clé
// on met la quantité 1

$panier[$id]=$panier[$id]+1;

// je dois mettre à jours session panier
$_SESSION['panier']=$panier;
//var_dump($panier);

/*
Quand on met un autre produit on devrait l'avoir dans notre panier
CAS ou remet le même produit => quantité devrait augmenter



1 question est que mon panier est existant 
 => si oui je recuperer l'ancien
 => si non je créé un nouveau tableau [idproduit]=>quanité
2 est que le panier contient le produit que je veux inserer
 => si il contient pas je l'insere avec une quantité à 1
 => si il contien je l'inserer avec une quantité = quantité existant + 1
*/
header('Location: index.php/panier');
}

function vider_panier(){
unset($_SESSION['panier']);
header('Location: index.php');
}

function getTotalPanier(){
    // variable total qui demarre à 0
    $total=0;
    // on recuperer notre variable session contenant les produits et quantité
    $panier=$_SESSION['panier'];
    // on boucle sur le tableau
    foreach( $panier as $cle_produit=>$quantite){
        // on recupere les infos du produits dont le prix
        $produitencours=getOneProduit_Entity($cle_produit);
        // j'accumule le total avec l'ancienne valeur avant la boucle
        // + prix du produit en cours * qu
        $total=$total+($produitencours['prix']*$quantite);
    }
    return $total;
}

function voir_panier(){
    // recuperer la variable sessions
    $panier=$_SESSION['panier'];

    // on inclut le code correspondant à l'entité produit permettant de 
    // recuperer des données sur la B.D.
    include_once __DIR__."/../Entity/Produit.php";

    //panier_complet variable contenant les données de la session
    //avec les données du produit correspondant 
    $panier_complet=array();

    // on boucle sur le tableau de la session 
    foreach( $panier as $cle_produit => $quantite){
        // produit contient un tableau avec tout les element d'un produit
        // pour un identifiant du produit
        $produit=getOneProduit_Entity($cle_produit);
        $panier_complet[]=[
            'produit'=>$produit,
            'quantite'=>$quantite,
            'total'=>$produit['prix']*$quantite
        ];
    } 
    $total=getTotalPanier();
    //   var_dump($panier_complet);
 
    // $monpanier existe avec tous les elements
 
    // derniere etape on ramene une vue affichant le panier
    include __DIR__.'/../../templates/voir_panier.php'; 
}

