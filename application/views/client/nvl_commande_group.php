<div class="jumbotron">
    <h2>Tous les produits</h2>
</div>

<div class="container" id="body">
    <div class="row">
        <?php if ($produits != null): ?>
        <form method="POST" action="<?php echo site_url('client/commandes_c/ajouter_commande_group/') ?>">
            <table class="table table-striped table-hover table-bordered">
                <th>Identifiant du produit</th><th>Designation</th><th>Commentaire</th><th>Prix</th><th>Code produit (balance)</th><th>Type prix</th><th>Origine</th><th>Categorie</th><th>Disponible</th><th>Quantité</th>

                    <?php foreach ($produits as $r): ?>
                        <tr>
                            <td ><?= $r->IDproduit ?></td>
                            <td><?= $r->designation ?></td>
                            <td><?= $r->commentaire ?></td>
                            <td><?= $r->prix ?>€</td>
                            <td><?= $r->code_produit ?></td>


                            <td><?= $r->IDtype_prixDes ?></td>
                            <td><?= $r->IDorigineDes ?></td>
                            <td><?= $r->IDcategorieDes ?></td>
                            <?php if($r->disponible == 1){ $dispo=1;?>
                                <td >  <?php echo "Oui"; ?> </td>
                                <td><input type="number" name="qteArt"/></td>
                            <?php } else { $dispo=0; ?>
                                <td>  <?php echo "Non"; ?> </td>
                                <td><input type="number" disabled="true" name="qteArt"/></td>
                            <?php } ?>



                        </tr>
                    <?php endforeach; ?>
            </table>
            <input class="btn btn-success" name="valider" type="submit" id="creer" value="Valider"/><br/><br/><br/>

        </form>

        <?php endif; ?>


    </div>
</div>