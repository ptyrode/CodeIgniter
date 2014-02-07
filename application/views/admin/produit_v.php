<div class="jumbotron">
    <h2>Produit</h2>
</div>

<div class="container" id="body">
    <div class="row">
        <?php if ($produits != null): ?>
<!--            --><?php //$req1 = Produits_c::getALLOrigine(); print_r($req1);?>
<!--            --><?php //$req2 = Produits_c::getALLcategorie();?>
<!--            --><?php //$req3 = Produits_c::getALLtypeprix();?>

            <form method="POST" action="<?php echo site_url('admin/produits_c/update_produit/') ?>">
                <?php foreach ($produits as $r): ?>
                    <label>ID : </label><input class="form-control" type="text" name="idprod" value="<?= $r->IDproduit?>"/><br/>
                    <label>Designation : </label><input class="form-control" type="text" name="designation" value="<?= $r->designation ?>"/><br/>
                    <label>Commentaire : </label><input class="form-control" type="text" name="commentaire" value="<?= $r->commentaire ?>"/><br/>
                    <label>Prix : </label><input class="form-control" type="text" name="prix" value="<?= $r->prix ?>"/><br/>
                    <label>Code produit (balance) : </label><input class="form-control" type="text" name="codePro" value="<?= $r->code_produit ?>"/><br/>
                    <label>Disponible : </label><input class="form-control" type="text" name="dispo" value="<?= $r->disponible ?>"/><br/>

                    <label>Type prix : </label><select name="typePrix" >
                        <option value="<?=$r->IDtype_prix?>" selected="selected" ><?=$r->IDtype_prixDes?></option>
                        <?php foreach ($type_prix as $tp): ?>
                            <option value="<?=$tp->IDtype_prix?>" ><?=$tp->designation?></option>
                        <?php endforeach; ?>
                    </select><br/>

                    <label>Origine : </label><select name="origine">
                        <option value="<?=$r->IDorigine?>" selected="selected" ><?=$r->IDorigineDes?></option>
                        <?php foreach ($origine as $o): ?>
                            <option value="<?=$o->IDorigine?>" ><?=$o->description?></option>
                        <?php endforeach; ?>
                    </select><br/>

                    <label>Categorie : </label><select name="categorie">
                        <option value="<?=$r->IDcategorie?>" selected="selected" ><?=$r->IDcategorieDes?></option>
                        <?php foreach ($categorie as $c): ?>
                            <option value="<?=$c->IDcategorie?>"><?=$c->description?></option>
                        <?php endforeach; ?>
                    </select><br/>

                    <input class="btn btn-success" type="submit" id="modifier" value="Modifier"/>
                <?php endforeach; ?>
            </form>
        <?php endif; ?>
    </div>
</div>