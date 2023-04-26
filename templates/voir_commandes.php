<h1>Mon panier</h1>

<table >
    <tr>
        <th>ID</th>
        <th>DATE</th>
        <th>NUMERO DE FACTURE</th>
        <th>TITRE PRODUIT</th>
        <th>DESCRIPTION</th>
        <th>PRIX</th>
        <th>IMAGE</th>
    </tr>
    <?php foreach($mescommandes as $unecommande) { ?>
        <tr>
            <td><?=$unecommande['id']?></td>
            <td><?=$unecommande['date']?></td>
            <td><?=$unecommande['facture_id']?></td>
            <td><?=$unecommande['titre']?></td>
            <td><?=$unecommande['description']?></td>
            <td><?=$unecommande['prix']?></td>
            <td><img src="/asset/img/<?= $unecommande['nom_image']!="" ? $unecommande['nom_image'] : "no image.jpg";    ?>" class="w-25"></td>
        </tr>
    <?php } ?>

</table>