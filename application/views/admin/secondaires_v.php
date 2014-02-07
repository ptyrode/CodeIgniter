<br/><br/>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#categorie" data-toggle="tab">Categories</a></li>
    <li><a href="#droit" data-toggle="tab">Droits</a></li>
    <li><a href="#lieu" data-toggle="tab">Lieus</a></li>
    <li><a href="#origine" data-toggle="tab">Origines</a></li>
    <li><a href="#semaine" data-toggle="tab">Semaines</a></li>
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
                        <?php endforeach; ?>
                    </table>
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
                        <?php endforeach; ?>
                    </table>
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
                        <?php endforeach; ?>
                    </table>
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
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="semaine">
        <div class="container" id="body">
            <div class="row">
                <?php if ($semaines != null): ?><br/><br/>
                    <table class="table table-striped table-hover table-bordered">
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
                        <?php endforeach; ?>
                    </table>
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