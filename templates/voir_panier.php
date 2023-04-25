<h1>Mon panier</h1>

<table width=100%>
    <tr>
        <th>ID</th>
        <th>TITRE</th>
        <th>DESCRIPTION</th>
        <th>PRIX</th>
        <th>IMAGE</th>
        <th>QUANTITE</th>
        <th>TOTAL</th>
    </tr>
    <?php foreach($panier_complet as $unelementpanier) { ?>
        <tr>
            <td><?=$unelementpanier['produit']['id']?></td>
            <td><?=$unelementpanier['produit']['titre']?></td>
            <td><?=$unelementpanier['produit']['description']?></td>
            <td><?=$unelementpanier['produit']['prix']?></td>
            <td><?=$unelementpanier['produit']['nom_image']?></td>
            <td><?=$unelementpanier['quantite']?></td>
            <td><?=$unelementpanier['total']?></td>
        </tr>
    <?php } ?>


</table>
<br></br>
<h2>TOTAL : <?=$total ?> €</h2> 
<a href="/commandez">
<h3> Passez la commande </h3></a>