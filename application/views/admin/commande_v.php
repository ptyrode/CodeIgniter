<div class="jumbotron">
    <h2>Commandes</h2>
</div>

<div class="container" id="body">
    <div class="row">
        <?php if ((isset($retourSuppr)) && ($retourSuppr == 1)): ?>
           <script>alert('Supprimé avec succès')</script>
        <?php endif; ?>

        <?php if ((isset($retourValid)) && ($retourValid == 1)): ?>
            <script>alert('Validé avec succès')</script>
        <?php endif; ?>

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
                                <td><?php if($lieu=="belfort") { echo $lieu." le vendredi entre 16h30 et 18h30"; }else if($lieu=="sochaux"){ echo $lieu." le jeudi entre 7h30 et 12h30";}else{echo $lieu." jour a definir";} ?></td>
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
                                    }else if($c->validationStatus==0){ ?>
                                        <a href="<?php echo site_url('admin/commandes_c/valid_cmd/' . $c->IDcommande ) ?>">Valider Cmd</a>
                                   <?php }else{
                                        echo "Commande annulée";
                                    }
                                    ?> </td>


<!--                                    <td><a href="--><?php //echo site_url('admin/commandes_c/valid_cmd/' . $c->IDcommande ) ?><!--">Valider Cmd</a></td>-->

                                <td><a onclick="return confirm('Etes vous sur ?')" href="<?php echo site_url('admin/commandes_c/suppr_cmd/' . $c->IDcommande) ?>">Supprimer</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>

    </div>
</div>