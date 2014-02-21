<div class="jumbotron">
    <h2>Créer un produit</h2>
</div>

<div class="container" id="body">
    <div class="row">


        <form method="POST" action="<?php echo site_url('admin/produits_c/ajouter_produit/') ?>">
            <label>Description : </label><input class="form-control" type="text" name="designation"/><br/>
            <label>Commentaire : </label><input class="form-control" type="text" name="commentaire"/><br/>
            <label>Prix : </label><input class="form-control" type="text" name="prix"/><br/>
            <label>Code produit(balance) : </label><input class="form-control" type="text" name="codeproduit"/><br/>
            <label>Disponible : </label><input class="form-control" type="text" name="disponible"/><br/>

            <label>Type prix : </label><select class="form-control"  name="idtypeprix" >

                <?php foreach ($type_prix as $tp): ?>
                    <option value="<?=$tp->IDtype_prix?>" ><?=$tp->designation?></option>
                <?php endforeach; ?>
            </select><br/><br/>

            <label>Origine : </label><select class="form-control"  name="idorigine">

                <?php foreach ($origine as $o): ?>
                    <option value="<?=$o->IDorigine?>" ><?=$o->description?></option>
                <?php endforeach; ?>
            </select><br/><br/>

            <label>Categorie : </label><select  class="form-control" name="idcategorie">

                <?php foreach ($categorie as $c): ?>
                    <option  value="<?=$c->IDcategorie?>"><?=$c->description?></option>
                <?php endforeach; ?>
            </select><br/><br/>

            <input class="btn btn-success" type="submit" id="creer" value="Créer"/>
        </form>

    </div>
</div>