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

<?php if ((isset($erreurSemaine)) && ($erreurSemaine != null)): ?>
    <script>alert('{$erreurSemaine}')</script>
<?php endif; ?>
<?php if(isset($nomUtil)){
    $droit = $nomUtil['IDdroit'];
} ?>

<div class="container" id="body">
    <div class="row">

        <?php if((isset($nomUtil)) && ($nomUtil == 1)){ ?>
            <form method="POST" action="<?php echo site_url('admin/commandes_c/verif_semaine/') ?>">
        <?php }else{ ?>
            <form method="POST" action="<?php echo site_url('client/commandes_c/verif_semaine/') ?>">
        <?php } ?>

<!--            <label>Date de la commande : </label><input class="form-control" type="date" name="datecommande"/><br/>-->


<!--            lieu de commande-->


            <label >Lieu de livraison : </label>
            <?php
                $js = 'id="listeLieu" class="form-control "';
                //print_r($recapProd);
            ?>

            <?=form_dropdown('idlieu',$lieu,1,$js) ;?>
            <div class="form-control">
                <input type="checkbox" name="selec" onclick="verif(this)" >  <label >Autre    </label>
                <input type="text" id="nvLieu" name="lieuName" disabled="true"/>
            </div>
            <br/><br/>


            <label >A livrer pour la semaine: </label>
            <?php
            $js = 'class="form-control "';
            ?>
            <?=form_dropdown('idsemaine',$semaine,"",$js);?><br/>
            <br/><br/>


            <label>Produit : </label>
            <?php
            $js = 'class="form-control "';
            ?>
            <?php if(isset($idprod)){ ?>
                <?=form_dropdown('idprod',$produits,$idprod,$js);?><br/>
            <?php }else{ ?>
                <?=form_dropdown('idprod',$produits,1,$js);?><br/>
             <?php } ?>


            <br/><br/>
            <label >Quantité: </label><input class="form-control" type="number" name="qte"/><br/>

            <input class="btn btn-success" type="submit" id="creer" value="Créer"/><br/><br/><br/>


                <label >Tableau recapitulatif: </label>
                <?php
                echo "<table border='1'><tr><th>Code Balance</th><th>Produit</th><th>Vendu par</th></tr>";
                foreach($recapProd as $v){
                    echo "<tr>";
                    foreach($v as $vv){
                        echo "<td>{$vv}</td>";
                    }
                    echo "<tr>";
                }
                echo "</table>";
                ?>
        </form>
    </div>
</div>