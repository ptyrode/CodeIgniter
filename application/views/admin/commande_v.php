<div class="jumbotron">
    <h2>Commandes</h2>
</div>

<div class="container" id="body">
    <div class="row">
        <?php if ((isset($retourSuppr)) && ($retourSuppr == 1)): ?>
           <script>alert('Supprimé avec succès')</script>
        <?php endif; ?>

        <?php if ((isset($retourValid)) && ($retourValid == 1)): ?>
            <script>alert('Supprimé avec succès')</script>
        <?php endif; ?>
        <?php if ($commandes != null): ?>
            <table class="table table-striped table-hover table-bordered">
                <th>Identifiant de la commande</th><th>date de creation</th><th>Prix total</th><th>Utilisateur</th><th>Lieu de commande</th><th>Commande validée</th>


                <?php foreach ($commandes as $c): ?>
                    <tr>
                        <td><?= $c->IDcommande ?></td>
                        <td><?= $c->date_commande ?></td>
                        <td><?= $c->prix_total ?></td>
                        <td><?= $c->IDutilisateurDes ?></td>
                        <td><?= $c->IDlieuDes ?></td>
                        <?php if($c->IDsemaineDes == 1){
                            $text = "oui";
                        }else{
                            $text = "non";
                        } ?>
                        <td><?= $text ?></td>
                        <?php if($text == "oui"){ ?>
                            <td>Commande validée</td>
                        <?php }else{ ?>
                            <td><a href="<?php echo site_url('admin/commandes_c/valid_cmd/' . $c->IDcommande ) ?>">Valider Cmd</a></td>
                        <?php } ?>

                        <td><a onclick="return confirm('Etes vous sur ?')" href="<?php echo site_url('admin/commandes_c/suppr_cmd/' . $c->IDcommande) ?>">Supprimer</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
</div>