<div class="jumbotron" xmlns="http://www.w3.org/1999/html">
    <h2>Passer une nouvelle commande</h2>
</div>



<script type="text/javascript">

    function verif(objet) {
        if (objet.checked) {
            document.getElementById("listeLieu").disabled = true;
            document.getElementById("nvLieu").disabled = false;

        }else{
            document.getElementById("listeLieu").disabled = false;

            document.getElementById("nvLieu").disabled = true;
        }
    }

</script>
<div class="container" id="body">
    <div class="row">


        <form method="POST" action="<?php echo site_url('admin/commandes_c/verif_semaine/') ?>">
            <label>Date de la commande : </label><input class="form-control" type="date" name="datecommande"/><br/>
            <label>Prix total : </label><input class="form-control" type="text" name="prixtotal"/><br/>

<!--            <label>Utilisateur passant la commande : </label>-->
<!--            <input type="" name="r_id" value="mut"/>-->
<!--<!--            <label name="iduser" >--><?php ////echo $nomUtil['nom'];?><!--<!--</label><br/>-->
<!--<!--            --><?////=form_dropdown('iduser',$users);?><!--<!--<br/>-->


<!--            lieu de commande-->
            <label >Lieu de commande : </label>
            <?php
                $js = 'id="listeLieu" class="form-control "';
            ?>
            <?=form_dropdown('idlieu',$lieu,1,$js) ;?>
            <div class="form-control">
                <input type="checkbox" name="selec" onclick="verif(this)" >  <label >Autre    </label>
                <input type="text" id="nvLieu" name="lieuName" disabled="true"/>
            </div>
            <br/><br/>


            <label >A livrer au plus tard : </label>
            <?php
            $js = 'class="form-control "';
            ?>
            <?=form_dropdown('idsemaine',$semaine,"",$js);?><br/>
            <br/><br/><br/>


            <label class="form-control">Produit : </label>
            <?php if(isset($idprod)){ ?>
                <?=form_dropdown('idprod',$produits,$idprod);?><br/>
            <?php }else{ ?>
                <?=form_dropdown('idprod',$produits,1);?><br/>
             <?php } ?>


            <br/><br/><br/>
            <label class="form-control">Quantité: </label><input class="form-control" type="text" name="qte"/><br/>

            <input class="btn btn-success" type="submit" id="creer" value="Créer"/>
        </form>

    </div>
</div>