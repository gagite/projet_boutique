<?php 
include_once __DIR__.'/function.php';
    
    function getProduit_Entity(){
        /* 1. Connexion à une base MySQL avec l'invocation de pilote */
        $dbh=connect_bd();
        //2. RECUPERER LES DONNEES 
        $resultat = $dbh->query("select * from produit")->fetchAll();
    // print_r($resultat);
        return $resultat;
    }

    function getOneProduit_Entity($id){
        /* 1. Connexion à une base MySQL avec l'invocation de pilote */
        $dbh=connect_bd();
        //2. RECUPERER LES DONNEES 
        $resultat = $dbh->query("select * from produit where id=$id")->fetch();
    // print_r($resultat);
        return $resultat;
    }


    function supprimer_produit(){
        $dbh=connect_bd();
        $id=$_GET['id']; 
        // 2 la requete de suppression
        $dbh->query(
            "delete from produit where id=$id"
        );
    }

    function enregistrer_produit_entite($titre,$description,$prix,$nom_image){
        $dbh=connect_bd();
        // 2 la requete d'insertion
        $info=$dbh->query(
            "INSERT INTO produit (id, titre, description, prix,nom_image)
             VALUES (NULL, '$titre', '$description', '$prix','$nom_image')"
        );
        echo "\nPDO::errorCode(): ", $info->errorCode();

    }
    ?>
