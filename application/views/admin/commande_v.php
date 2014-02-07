<div class="jumbotron">
    <h2>Commandes</h2>
</div>

<div class="container" id="body">
    <div class="row">
        <?php if ($commandes != null): ?>
            <table class="table table-striped table-hover table-bordered">
                <th>Identifiant de la commande</th><th>date de creation</th><th>Prix total</th><th>Utilisateur</th><th>Lieu de commande</th><th>Semaine valide</th>
                <?php foreach ($commandes as $c): ?>
                    <tr>
                        <td><?= $c->IDcommande ?></td>
                        <td><?= $c->date_commande ?></td>
                        <td><?= $c->prix_total ?></td>
                        <td><?= $c->IDutilisateurDes ?></td>
                        <td><?= $c->IDlieuDes ?></td>
                        <td><?= $c->IDsemaineDes ?></td>

<!--                        <td><a href="--><?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
<!--                        <td><a href="--><?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
</div>