<br/><br/>
<?php $var=''; ?>


<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#categorie" data-toggle="tab" ">Categories</a></li>
    <li><a href="#droit" data-toggle="tab"  >Droits</a></li>
    <li><a href="#lieu" data-toggle="tab" >Lieus</a></li>
    <li><a href="#origine" data-toggle="tab" >Origines</a></li>
    <li><a href="#semaine" data-toggle="tab" >Semaines</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade in active" id="categorie">
        <div class="container" id="body">
            <div class="row">
                <?php if ($categories != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered">
                        <th>Identifiant </th><th>Description</th>
                        <?php foreach ($categories as $c): ?>
                            <tr>
                                <td><?= $c->IDcategorie ?></td>
                                <td><?= $c->description ?></td>

<!--                                <td><a href="--><?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
<!--                                <td><a href="--><?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                            </tr>
                        <?php endforeach;  $var = 'categorie'; ?>

                    </table><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalCategorie" >Ajouter </button>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="droit">
        <div class="container" id="body">
            <div class="row">
                <?php if ($droits != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered">
                        <th>Identifiant </th><th>Description</th>
                        <?php foreach ($droits as $d): ?>
                            <tr>
                                <td><?= $d->IDdroit ?></td>
                                <td><?= $d->description ?></td>

                                <!--                                <td><a href="--><?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
                                <!--                                <td><a href="--><?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                            </tr>
                        <?php endforeach;  $var = 'droit'; ?>
                    </table><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalDroit" >Ajouter </button>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="lieu">
        <div class="container" id="body">
            <div class="row">
                <?php if ($lieux != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered">
                        <th>Identifiant </th><th>Description</th>
                        <?php foreach ($lieux as $l): ?>
                            <tr>
                                <td><?= $l->IDlieu ?></td>
                                <td><?= $l->description ?></td>

                                <!--                                <td><a href="--><?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
                                <!--                                <td><a href="--><?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                            </tr>
                        <?php endforeach;
                        $var = 'lieu' ;?>
                    </table><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalLieu" >Ajouter </button>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="origine">
        <div class="container" id="body">
            <div class="row">
                <?php if ($origines != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered">
                        <th>Identifiant </th><th>Description</th>
                        <?php foreach ($origines as $o): ?>
                            <tr>
                                <td><?= $o->IDorigine ?></td>
                                <td><?= $o->description ?></td>

                                <!--                                <td><a href="--><?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
                                <!--                                <td><a href="--><?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                            </tr>
                        <?php endforeach;
                        $var = 'origine' ;?>
                    </table><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalOrigine" >Ajouter </button>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="semaine">
        <div class="container" id="body">
            <div class="row">
                <?php if ($semaines != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered" id="semaine">
                        <th>Identifiant</th><th>Date de debut</th><th>Date de fin</th><th>Valide</th>
                        <?php foreach ($semaines as $s): ?>
                            <tr>
                                <td><?= $s->IDsemaine ?></td>
                                <td><?= $s->date_debut ?></td>
                                <td><?= $s->date_fin ?></td>
                                <td><?= $s->valide ?></td>

                                <!--                                <td><a href="--><?php //echo site_url('admin/produits_c/modif_produit/' . $r->IDproduit.'/'.$r->IDtype_prix.'/'.$r->IDorigine.'/'.$r->IDcategorie ) ?><!--">Modifier</a></td>-->
                                <!--                                <td><a href="--><?php //echo site_url('admin/produits_c/suppr_produit/' . $r->IDproduit) ?><!--">Supprimer</a></td>-->
                            </tr>
                        <?php endforeach;
                        $var = 'seese'; ?>
                    </table><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalSemaine"">Ajouter </button>
<!--                    <a data-toggle="modal" href="index.html" data-target="#modal">Click me</a>-->

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

<div class="modal fade" id="myModalCategorie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajout d'une categorie</h4>
            </div>
            <div class="modal-body" >
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputCat" class="col-sm-2 control-label">Nom : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCat" placeholder="Text input">
                        </div>
                    </div>

                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="login();">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //called when user clicks login
    function login() {
        var NomCat = $('#inputCat').val();
        $("#myModalCategorie").modal("hide");
    }


</script>

<div class="modal fade" id="myModalDroit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajout</h4>
            </div>
            <div class="modal-body" id="inputDroit">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModalLieu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajout</h4>
            </div>
            <div class="modal-body" id="testmodal">
                <!--                --><?php //$class = array('class' => 'navbar-form navbar-right');?>
                <!--                --><?php //echo form_open('utilisateurs_c'); ?>
                <!--                <div class="form-group">-->
                <!--                    <input type="text" name="des" id="nom" placeholder="Identifiant" class="form-control">-->
                <!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                    <input type="password" name="passkey" id="passkey" placeholder="Mot de passe" class="form-control">-->
                <!--                </div>-->
                <!--                <input type="submit" class="btn btn-success" value="Connexion">-->
                <!--                <a type="button" class="btn btn-success" href="--><?php //echo site_url('utilisateurs_c/inscription') ?><!--">Inscription</a>-->
                <!--                --><?//= anchor('utilisateurs_c/mdp_oublie','Mot de passe oublié ?')?>
                <!--                --><?php //echo form_close(); ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModalOrigine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajout</h4>
            </div>
            <div class="modal-body" id="testmodal">
                <!--                --><?php //$class = array('class' => 'navbar-form navbar-right');?>
                <!--                --><?php //echo form_open('utilisateurs_c'); ?>
                <!--                <div class="form-group">-->
                <!--                    <input type="text" name="des" id="nom" placeholder="Identifiant" class="form-control">-->
                <!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                    <input type="password" name="passkey" id="passkey" placeholder="Mot de passe" class="form-control">-->
                <!--                </div>-->
                <!--                <input type="submit" class="btn btn-success" value="Connexion">-->
                <!--                <a type="button" class="btn btn-success" href="--><?php //echo site_url('utilisateurs_c/inscription') ?><!--">Inscription</a>-->
                <!--                --><?//= anchor('utilisateurs_c/mdp_oublie','Mot de passe oublié ?')?>
                <!--                --><?php //echo form_close(); ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModalSemaine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajout</h4>
            </div>
            <div class="modal-body" id="testmodal">
                <!--                --><?php //$class = array('class' => 'navbar-form navbar-right');?>
                <!--                --><?php //echo form_open('utilisateurs_c'); ?>
                <!--                <div class="form-group">-->
                <!--                    <input type="text" name="des" id="nom" placeholder="Identifiant" class="form-control">-->
                <!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                    <input type="password" name="passkey" id="passkey" placeholder="Mot de passe" class="form-control">-->
                <!--                </div>-->
                <!--                <input type="submit" class="btn btn-success" value="Connexion">-->
                <!--                <a type="button" class="btn btn-success" href="--><?php //echo site_url('utilisateurs_c/inscription') ?><!--">Inscription</a>-->
                <!--                --><?//= anchor('utilisateurs_c/mdp_oublie','Mot de passe oublié ?')?>
                <!--                --><?php //echo form_close(); ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
