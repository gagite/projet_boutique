<?php 

    include_once "function.php";


    function insert_facture($user){
        // connexion à la B.D.
        $dbh=connect_bd();
        // 2 la requete d'insertion
        $id_user=$user['id'];
       

        $info=$dbh->query(
            "INSERT INTO factures (id, user_id, date)
             VALUES (NULL, $id_user, now())"
        );
        //echo "\nPDO::errorCode(): ", $info->errorCode();

    }