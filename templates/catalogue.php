<h1>
catalogue !
</h1>



<div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($resultat as $unproduit) {  ?>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $unproduit['titre'] . " " . $unproduit['prix'] ?></h5>
                        <p class="card-text"><?= $unproduit['description'] ?></p>
                        <p>
                            <a href="detail.php?id=<?=$unproduit['id']?>">VOIR LE DETAIL</a>
                            <a href="supprimer.php?id=<?=$unproduit['id']?>">SUPPRIMER</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php  }  ?>
    </div>