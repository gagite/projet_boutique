<?php

// var_dump($_SERVER);
// si je veux afficher le catalogue produit alors affiche moi le catalogue
// produit

// ancienne solution : $page=$_GET['uc'];
// echo $_SERVER['PATH_INFO'];
// gestion de la variable path_info
// include "header.php";
session_start();

//var_dump($_SESSION);
$connexion = false;
$admin=false;
if(isset($_SESSION['user'])) {
    // si on est connecte alors connexion <= true
    $connexion=true;
    // par défaut on n'est pas admin
    // recuperer les fonction de l'entité USER
    include_once __DIR__.'/../src/Entity/User.php';
    // getDetailUser permet de recuperer toutes les informations concernant
    // le user de la session
    $user_complet=getDetailUser($_SESSION['user']);
    if ($user_complet['admin']==1) {
        // si le champs admin contient 1 alors admin <= true
        $admin=true;
    }
}  

//echo $connexion;
//var_dump($user);
include __DIR__.'/../templates/header.php';
// si on a rien apres le / de l'url alors
// le chemin sera = catalogue
if (empty($_SERVER['PATH_INFO'])){
    $page="/catalogue";
}
// si non la page sera = au chemin de l'url
else {
$page=$_SERVER['PATH_INFO'];
}

// gestion des pages
if ($page=="/catalogue"){
      include __DIR__.'/../src/Controller/ProduitController.php';
      getProduit();

   // recuperation des produits
 /*  include __DIR__.'/../src/Entity/Produit.php';
   $resultat=getProduit();
   // Renvoie vue 
   include __DIR__.'/../templates/catalogue.php';
   */
}

elseif ($page=="/user"){
    include __DIR__.'/../src/Controller/UserController.php';
    getUser();

}



elseif ($page=="/test"){
    include __DIR__.'/../src/Entity/Produit.php';
    var_dump($resultat);
}

elseif ($page=="/supprimer_produit"){
    include __DIR__.'/../src/Entity/Produit.php';
    supprimer_produit();  
    // rediriger vers le catalogue 
    header('Location: index.php');
}
elseif ($page=="/ajouter_produit"){
    include __DIR__.'/../src/Controller/ProduitController.php';
    nouveauproduit();
    // include __DIR__.'/../templates/ajouter_produit.php';
} 

elseif ($page=="/enregistrer_produit"){
    include __DIR__.'/../src/Controller/ProduitController.php';
    enregistrer_produit();
}

// afficher tout les user
elseif ($page=="/liste_user"){ 
    include __DIR__.'/../src/Controller/UserController.php';
    getUser();
}

// creer un nouveau user
elseif ($page=="/nouveau_user"){ 
    include __DIR__.'/../src/Controller/UserController.php';
    nouveauuser();

}

// enregistrement / insertion user
elseif ($page=="/enregistrer_user"){ 
    include __DIR__.'/../src/Controller/UserController.php';
    enregistrer_user();
}

// supprimer un user en particulier
elseif ($page=="/supprimer_user"){ 
}
// afficher un user en particulier
elseif ($page=="/detail_user"){
    include __DIR__.'/../src/Controller/UserController.php';
    detail_user();

}


// gestion authentification
// afficher un user en particulier
elseif ($page=="/connexion"){ 
    include __DIR__.'/../src/Controller/AuthentificationController.php';
    // fonction qui ramene du vue  
    form_connexion();
}
// afficher un user en particulier
elseif ($page=="/verifie_authentication"){ 
    include __DIR__.'/../src/Controller/AuthentificationController.php';
    // fonction qui va verifie les identifiants de connexion
    verifie_authentication();
}
elseif ($page=="/deconnexion"){ 
    include __DIR__.'/../src/Controller/AuthentificationController.php';
    deconnexion();
}
elseif ($page=="/ajouter_panier"){ 
    include __DIR__.'/../src/Controller/PanierController.php';
   add();
}
elseif ($page=="/vider_panier"){ 
    include __DIR__.'/../src/Controller/PanierController.php';
   vider_panier();
}
elseif ($page=="/panier"){ 
    include __DIR__.'/../src/Controller/PanierController.php';
   voir_panier();
}
elseif ($page=="/commandez"){ 
    include __DIR__.'/../src/Controller/CommandeController.php';
   commander_panier();
}
elseif ($page=="/mes_commandes"){ 
    include __DIR__.'/../src/Controller/CommandeController.php';
   mes_commande();
}

else {
    echo "ERROR 404";
}