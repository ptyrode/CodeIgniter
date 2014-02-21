<div class="jumbotron">
    <h2>Commandes</h2>
</div>

<div class="container" id="body">
    <div class="row">
        <?php if ($commandes != null): ?>
            <table class="table table-striped table-hover table-bordered">
                <th>Numero de commande</th><th>Produit</th><th>date de creation</th><th>Semaine de livraison</th><th>Prix total</th><th>Lieu de livraison</th><th>Statut</th>
                <?php foreach ($commandes as $c): ?>
                    <tr>
                        <td><?= $c->IDcommande ?></td>
                        <td><?= $c->nomProd ?></td>
                        <td><?= $c->date_commande ?></td>
                        <td><?= $c->debutSemaineCmd ?></td>
                        <td><?= $c->prix_total ?> €</td>
                        <?php  $lieu = $c->IDlieuDes; ?>
                         <td><?php if($lieu=="belfort") { echo $lieu." le vendredi entre 16h30 et 18h30"; }else if($lieu=="sochaux"){ echo $lieu." le jeudi entre 7h30 et 12h30";}else{echo $lieu." lieu a definir";} ?></td>
<!--                        <td>--><?php
//                            $lieu = $c->IDlieuDes;
//                            if($lieu="belfort"){
//                              echo $lieu.", le vendredi entre 16:30 et 18:30";
//                            }else if($lieu ="sochaux"){
//                                echo $lieu.", le jeudi  entre 7:30 et 12:30";
//                            }else{
//                                echo $lieu;
//                            }
//
//
//                            ?><!--</td>-->

                        <td><?php if($c->validationStatus==1){
                                echo "Validée";
                            }else if($c->validationStatus==0){
                                echo "En attente de validation";
                            }else{
                                echo "Commande annulée";
                            }
                            ?>
                        </td>

                        <!--                        <td><a href="--><?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
                        <!--                        <td><a href="--><?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
</div>