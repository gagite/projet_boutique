<?php
// LIRE LES PRODUITS
function getProduit(){
   include_once __DIR__.'/../Entity/Produit.php';
   $resultat=getProduit_Entity();
   // Renvoie vue 
   include_once __DIR__.'/../../templates/catalogue.php';
}

// aficher formulaire nouveau produit
function nouveauproduit(){
    include __DIR__.'/../../templates/ajouter_produit.php';
}

// enregistrer un produit
function enregistrer_produit(){
    // on recupere les données en POST via le formulaire
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $name_image= $_FILES['image']['name'];
    include __DIR__.'/../Entity/Produit.php';

    // On peut valider le fichier et le stocker définitivement
    move_uploaded_file($_FILES['image']['tmp_name'],  
    'asset/img/' . basename($_FILES['image']['name'])
    );
    // on lancer la fonction insert
    enregistrer_produit_entite($titre,$description,$prix,$name_image);
    // charge la page catalogue
    header('Location: index.php');
}

// MODIFIER LES PRODUITS


// SUPPRIMER UN PRODUIT
function deleteProduit(){
    
}

?>