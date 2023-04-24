<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/asset/style.css">
    <title>Document</title>
</head>

<body>



<nav class="navbar  bg-dark navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BOUTIQUES</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/catalogue">Liste des produits</a>
                </li>
                <?php if ($connexion == true){?>
                <li class="nav-item">
                    <a class="nav-link" href="/user">Liste des utilisateurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ajouter_produit">ajouter produit</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="/nouveau_user">ajouter user</a>
                </li> 
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="/connexion">Connexion</a>
                </li> 
                <?php if ($connexion == true){?>
                <li class="nav-item">
                    <a class="nav-link" href="/deconnexion">Deconnexion</a>
                </li> 
                <?php }?>
            </ul> 
                
               
        </div>
        <i class="fa-solid fa-user" style="color:red"></i>
        <i class="fa-solid fa-cart-shopping" style="color:red"></i>
    </div>
</nav>

<div class="container">
    <br>
    <br>
