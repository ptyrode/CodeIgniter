<br/><br/>
<?php $var = ''; ?>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#categorie" data-toggle="tab" ">Categories</a></li>
    <li><a href="#droit" data-toggle="tab">Droits</a></li>
    <li><a href="#lieu" data-toggle="tab">Lieux</a></li>
    <li><a href="#origine" data-toggle="tab">Origines</a></li>
    <li><a href="#semaine" data-toggle="tab">Semaines</a></li>
    <li><a href="#utilisateur" data-toggle="tab">Utilisateurs</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade in active" id="categorie">
        <div class="container" id="body">
            <div class="row">
                <?php if ($categories != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered" id="tableCategorie">
                        <th>Identifiant</th>
                        <th>Description</th>
                        <th>Action</th>
                        <?php foreach ($categories as $c): ?>
                            <tr>
                                <td><?= $c->IDcategorie ?></td>
                                <td><?= $c->description ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/secondaires_c/sup_categorie/' . $c->IDcategorie) ?>">Supprimer</a>
                                </td>

                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                            </tr>
                        <?php endforeach;
                        $var = 'categorie'; ?>

                    </table>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalCategorie">Nouveau
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="droit">
        <div class="container" id="body">
            <div class="row">
                <?php if ($droits != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered" id="tableDroit">
                        <th>Identifiant</th>
                        <th>Description</th>
                        <th>Action</th>
                        <?php foreach ($droits as $d): ?>
                            <tr>
                                <td><?= $d->IDdroit ?></td>
                                <td><?= $d->description ?></td>
                                <td><a href="<?php echo site_url('admin/secondaires_c/sup_droit/' . $d->IDdroit) ?>">Supprimer</a>
                                </td>

                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                            </tr>
                        <?php endforeach;
                        $var = 'droit'; ?>
                    </table>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalDroit">Nouveau
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="lieu">
        <div class="container" id="body">
            <div class="row">
                <?php if ($lieux != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered" id="tableLieu">
                        <th>Identifiant</th>
                        <th>Description</th>
                        <th>Action</th>
                        <?php foreach ($lieux as $l): ?>
                            <tr>
                                <td><?= $l->IDlieu ?></td>
                                <td><?= $l->description ?></td>
                                <td><a href="<?php echo site_url('admin/secondaires_c/sup_lieu/' . $l->IDlieu) ?>">Supprimer</a>
                                </td>

                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                            </tr>
                        <?php endforeach;
                        $var = 'lieu';?>
                    </table>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalLieu">Nouveau
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="origine">
        <div class="container" id="body">
            <div class="row">
                <?php if ($origines != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered" id="tableOrigine">
                        <th>Identifiant</th>
                        <th>Description</th>
                        <th>Action</th>
                        <?php foreach ($origines as $o): ?>
                            <tr>
                                <td><?= $o->IDorigine ?></td>
                                <td><?= $o->description ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/secondaires_c/sup_origine/' . $o->IDorigine) ?>">Supprimer</a>
                                </td>

                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                            </tr>
                        <?php endforeach;
                        $var = 'origine';?>
                    </table>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalOrigine">Nouveau
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="semaine">
        <div class="container" id="body">
            <div class="row">
                <?php if ($semaines != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered" id="tableSemaine">
                        <th>Identifiant</th>
                        <th>Date de debut</th>
                        <th>Date de fin</th>
                        <th>Valide</th>
                        <th>Action</th>
                        <?php foreach ($semaines as $s): ?>
                            <tr>
                                <td><?= $s->IDsemaine ?></td>
                                <td><?= date('d-m-Y', strtotime($s->date_debut)) ?></td>
                                <td><?= date('d-m-Y', strtotime($s->date_fin)) ?></td>
                                <td><?= $s->valide ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/secondaires_c/sup_semaine/' . $s->IDsemaine) ?>">Supprimer</a>
                                </td>


                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                            </tr>
                        <?php endforeach;
                        $var = 'seese'; ?>
                    </table>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalSemaine">Nouveau
                    </button>
                    <!--                    <a data-toggle="modal" href="index.html" data-target="#modal">Click me</a>-->
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="utilisateur">
        <div class="container" id="body">
            <div class="row">
                <?php if ($utilisateurs != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered" id="tableUtilisateur">
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <th>Mot de passe</th>
                        <th>Email</th>
                        <th>Droit</th>

                        <!--                    -->
                        <?php foreach ($utilisateurs as $u): ?>
                            <tr>
                                <td><?= $u->IDutilisateur ?></td>
                                <td><?= $u->nom ?></td>
                                <td><?= $u->passkey ?></td>
                                <td><?= $u->email ?></td>
                                <td><?= $u->IDdroit ?></td>
                                <?php if ($u->IDdroit == 3) { ?>
                                    <td>
                                        <a href="<?php echo site_url('admin/secondaires_c/activer_utilisateur/' . $u->IDutilisateur) ?>">Activer</a>
                                    </td>
                                <?php } else if ($u->IDdroit == 2) { ?>
                                    <td>
                                        <a href="<?php echo site_url('admin/secondaires_c/desactiver_utilisateur/' . $u->IDutilisateur) ?>">Désactiver</a>
                                    </td>
                                <?php } ?>
                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
                                <!--                                <td><a href="-->
                                <?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                            </tr>
                        <?php endforeach;
                        $var = 'utilisateur';?>
                    </table>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalUtilisateur">Nouveau
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>

<script>
    $(function () {
        $('#myTab a:last').tab('show')

    })

</script>


<!-- Modal -->

<div class="modal fade" id="myModalCategorie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajout d'une catégorie</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputCat" class="col-sm-2 control-label">Description:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCat" placeholder="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="ajoutCategorie();">Valider</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModalDroit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajout d'un droit</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputDroit" class="col-sm-2 control-label">Description:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputDroit" placeholder="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="ajoutDroit();">Valider</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModalLieu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajout d'un lieu</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputLieu" class="col-sm-2 control-label">Description:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputLieu" placeholder="">
                        </div>
                    </div>
                </form>
                <!--                --><?php //$class = array('class' => 'navbar-form navbar-right');?>
                <!--                --><?php //echo form_open('utilisateurs_c'); ?>
                <!--                <div class="form-group">-->
                <!--                    <input type="text" name="des" id="nom" placeholder="Identifiant" class="form-control">-->
                <!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                    <input type="password" name="passkey" id="passkey" placeholder="Mot de passe" class="form-control">-->
                <!--                </div>-->
                <!--                <input type="submit" class="btn btn-success" value="Connexion">-->
                <!--                <a type="button" class="btn btn-success" href="-->
                <?php //echo site_url('utilisateurs_c/inscription') ?><!--">Inscription</a>-->
                <!--                --><? //= anchor('utilisateurs_c/mdp_oublie','Mot de passe oublié ?')?>
                <!--                --><?php //echo form_close(); ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="ajoutLieu();">Valider</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModalOrigine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajout d'une origine</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputOrigine" class="col-sm-2 control-label">Description:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputOrigine" placeholder="">
                        </div>
                    </div>
                </form>
                <!--                --><?php //$class = array('class' => 'navbar-form navbar-right');?>
                <!--                --><?php //echo form_open('utilisateurs_c'); ?>
                <!--                <div class="form-group">-->
                <!--                    <input type="text" name="des" id="nom" placeholder="Identifiant" class="form-control">-->
                <!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                    <input type="password" name="passkey" id="passkey" placeholder="Mot de passe" class="form-control">-->
                <!--                </div>-->
                <!--                <input type="submit" class="btn btn-success" value="Connexion">-->
                <!--                <a type="button" class="btn btn-success" href="-->
                <?php //echo site_url('utilisateurs_c/inscription') ?><!--">Inscription</a>-->
                <!--                --><? //= anchor('utilisateurs_c/mdp_oublie','Mot de passe oublié ?')?>
                <!--                --><?php //echo form_close(); ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="ajoutOrigine();">Valider</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModalSemaine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajout d'une semaine</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputDebut" class="col-sm-2 control-label">Début:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputDebut" placeholder="">
                        </div>
                        <label for="inputFin" class="col-sm-2 control-label">Fin:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputFin" placeholder="">
                        </div>
                    </div>
                </form>
                <!--                --><?php //$class = array('class' => 'navbar-form navbar-right');?>
                <!--                --><?php //echo form_open('utilisateurs_c'); ?>
                <!--                <div class="form-group">-->
                <!--                    <input type="text" name="des" id="nom" placeholder="Identifiant" class="form-control">-->
                <!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                    <input type="password" name="passkey" id="passkey" placeholder="Mot de passe" class="form-control">-->
                <!--                </div>-->
                <!--                <input type="submit" class="btn btn-success" value="Connexion">-->
                <!--                <a type="button" class="btn btn-success" href="-->
                <?php //echo site_url('utilisateurs_c/inscription') ?><!--">Inscription</a>-->
                <!--                --><? //= anchor('utilisateurs_c/mdp_oublie','Mot de passe oublié ?')?>
                <!--                --><?php //echo form_close(); ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="ajoutSemaine();">Valider</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModalUtilisateur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajout d'un utilisateur</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputNom" class="col-sm-2 control-label">Nom:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNom" placeholder="">
                        </div>
                        <label for="inputPasskey" class="col-sm-2 control-label">Mdp:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPasskey" placeholder="">
                        </div>

                        <label for="inputEmail" class="col-sm-2 control-label">Email:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="">
                        </div>

                        <label for="inputDroit" class="col-sm-2 control-label">Droit:</label>

                        <div class="col-sm-10">
                            <select class="form-control" id="inputDroit">
                                <option value="1">Admin</option>
                                <option value="2">Client activé</option>
                                <option value="3">Client désactivé</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="ajoutUtilisateur();">Valider</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //called when user clicks login

    function ajoutCategorie() {
        var form_data = {
            description: $('#inputCat').val()
            //password : $('.password').val(),
            //ajax : '1'
        };
        $.ajax({
            url: "<?php echo site_url('admin/secondaires_c/ajout_categorie'); ?>",
            type: 'POST',
            async: false,
            data: form_data,
            success: function (msg) {
                var id = document.getElementById('tableCategorie').rows.length;
                $("#tableCategorie").append('<tr>'
                    + '<td>' + id + '</td>'
                    + '<td>' + $('#inputCat').val() + '</td>'
                    + '</tr>');
            }
        });
        $("#myModalCategorie").modal("hide");
        return false;
    }

    function ajoutDroit() {
        var form_data = {
            description: $('#inputDroit').val()
            //password : $('.password').val(),
            //ajax : '1'
        };
        $.ajax({
            url: "<?php echo site_url('admin/secondaires_c/ajout_droit'); ?>",
            type: 'POST',
            async: false,
            data: form_data,
            success: function (msg) {
                var id = document.getElementById('tableDroit').rows.length;
                $("#tableDroit").append('<tr>'
                    + '<td>' + id + '</td>'
                    + '<td>' + $('#inputDroit').val() + '</td>'
                    + '</tr>');
            }
        });
        $("#myModalDroit").modal("hide");
        return false;
    }

    function ajoutLieu() {
        var form_data = {
            description: $('#inputLieu').val()
            //password : $('.password').val(),
            //ajax : '1'
        };
        $.ajax({
            url: "<?php echo site_url('admin/secondaires_c/ajout_lieu'); ?>",
            type: 'POST',
            async: false,
            data: form_data,
            success: function (msg) {
                var id = document.getElementById('tableLieu').rows.length;
                $("#tableLieu").append('<tr>'
                    + '<td>' + id + '</td>'
                    + '<td>' + $('#inputLieu').val() + '</td>'
                    + '</tr>');
            }
        });
        $("#myModalLieu").modal("hide");
        return false;
    }

    function ajoutOrigine() {
        var form_data = {
            description: $('#inputOrigine').val()
            //password : $('.password').val(),
            //ajax : '1'
        };
        $.ajax({
            url: "<?php echo site_url('admin/secondaires_c/ajout_origine'); ?>",
            type: 'POST',
            async: false,
            data: form_data,
            success: function (msg) {
                var id = document.getElementById('tableOrigine').rows.length;
                $("#tableOrigine").append('<tr>'
                    + '<td>' + id + '</td>'
                    + '<td>' + $('#inputOrigine').val() + '</td>'
                    + '</tr>');
            }
        });
        $("#myModalOrigine").modal("hide");
        return false;
    }

    function ajoutSemaine() {
        var form_data = {
            debut: $('#inputDebut').val(),
            fin: $('#inputFin').val()
            //password : $('.password').val(),
            //ajax : '1'
        };
        $.ajax({
            url: "<?php echo site_url('admin/secondaires_c/ajout_semaine'); ?>",
            type: 'POST',
            async: false,
            data: form_data,
            success: function (msg) {
                var id = document.getElementById('tableSemaine').rows.length;
                $("#tableSemaine").append('<tr>'
                    + '<td>' + id + '</td>'
                    + '<td>' + $('#inputDebut').val() + '</td>'
                    + '<td>' + $('#inputFin').val() + '</td>'
                    + '<td>1</td>'
                    + '</tr>');
            }
        });
        $("#myModalSemaine").modal("hide");
        return false;
    }

    function ajoutUtilisateur() {
        var form_data = {
            nom: $('#inputNom').val(),
            passkey: $('#inputPasskey').val(),
            email: $('#inputEmail').val(),
            droit: $('#inputDroit option:checked').val()
            //password : $('.password').val(),
            //ajax : '1'
        };
        $.ajax({
            url: "<?php echo site_url('admin/secondaires_c/ajout_utilisateur'); ?>",
            type: 'POST',
            async: false,
            data: form_data,
            success: function (msg) {
                var id = document.getElementById('tableUtilisateur').rows.length;

                if ($('#inputDroit option:checked').val() == 2) {
                    $("#tableUtilisateur").append('<tr>'
                        + '<td>' + id + '</td>'
                        + '<td>' + $('#inputNom').val() + '</td>'
                        + '<td>' + $('#inputPasskey').val() + '</td>'
                        + '<td>' + $('#inputEmail').val() + '</td>'
                        + '<td>' + $('#inputDroit option:checked').val() + '</td>'
                        + '<td><a href="<?php echo site_url('admin/secondaires_c/desactiver_utilisateur/') ?>">Désactiver</a></td>'
                        + '</tr>');
                }
                else if ($('#inputDroit option:checked').val() == 3) {
                    $("#tableUtilisateur").append('<tr>'
                        + '<td>' + id + '</td>'
                        + '<td>' + $('#inputNom').val() + '</td>'
                        + '<td>' + $('#inputPasskey').val() + '</td>'
                        + '<td>' + $('#inputEmail').val() + '</td>'
                        + '<td>' + $('#inputDroit option:checked').val() + '</td>'
                        + '<td><a href="<?php echo site_url('admin/secondaires_c/activer_utilisateur/') ?>">Activer</a></td>'
                        + '</tr>');
                }
                else {
                    $("#tableUtilisateur").append('<tr>'
                        + '<td>' + id + '</td>'
                        + '<td>' + $('#inputNom').val() + '</td>'
                        + '<td>' + $('#inputPasskey').val() + '</td>'
                        + '<td>' + $('#inputEmail').val() + '</td>'
                        + '<td>' + $('#inputDroit option:checked').val() + '</td>'
                        + '<td></td>'
                        + '</tr>');
                }

            }
        });
        $("#myModalUtilisateur").modal("hide");
        return false;
    }

    $(function () {
        $("#inputDebut").datepicker({dateFormat: 'dd-mm-yy', firstDay: 1 });
    });

    $(function () {
        $("#inputFin").datepicker({dateFormat: 'dd-mm-yy', firstDay: 1 });
    });

    /*
     function login() {
     var NomCat = $('#inputCat').val();
     $("#myModalCategorie").modal("hide");
     }
     */

</script>