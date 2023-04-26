<?php
// LIRE LES user
function getUser(){
   include_once __DIR__.'/../Entity/User.php';
   $resultat=getUser_Entity();
   // Renvoie vue 
   include __DIR__.'/../../templates/user.php';
}

// aficher formulaire nouveau produit
function nouveauuser(){

    include __DIR__.'/../../templates/ajouter_user.php';
}

// enregistrer un produit
function enregistrer_user(){
    // on recupere les données en POST via le formulaire
    $email = $_POST['email'];
    $pwd = $_POST['pwd']; 
    $pwd_crypte=  password_hash($pwd, PASSWORD_BCRYPT);
    $name_image= $_FILES['image']['name'];
    include_once __DIR__.'/../Entity/User.php';

    // On peut valider le fichier et le stocker définitivement
    move_uploaded_file($_FILES['image']['tmp_name'],  
    'asset/img/' . basename($_FILES['image']['name'])
    );
    // on lancer la fonction insert
    enregistrer_user_entite($email,$pwd_crypte,$name_image); // charge la page catalogue
    header('Location: /liste_user');
}


// detail user
function detail_user() {
    include __DIR__.'/../Entity/User.php';
    $email=$_GET['email'];
    $unuser=getDetailUser($email);
    // var_dump($unuser);
    include __DIR__.'/../../templates/un_user.php';
}
// MODIFIER LES PRODUITS


// SUPPRIMER UN PRODUIT
function deleteuser(){
    
}

?>