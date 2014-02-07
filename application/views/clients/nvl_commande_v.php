<div class="jumbotron" xmlns="http://www.w3.org/1999/html">
    <h2>Passer une nouvelle commande</h2>
</div>

<div class="container" id="body">
    <div class="row">


        <form method="POST" action="<?php echo site_url('admin/commandes_c/ajouter_commande/') ?>">
            <label>Date de la commande : </label><input class="form-control" type="date" name="datecommande"/><br/>
            <label>Prix total : </label><input class="form-control" type="text" name="prixtotal"/><br/>

            <label>Utilisateur passant la commande : </label>
            <?=form_dropdown('iduser',$users,1);?>


            <label>Lieu de commande : </label>
            <?=form_dropdown('idlieu',$lieu,1);?><br/>

            <label>Semaine : </label>
            <?=form_dropdown('idsemaine',$semaine,1);?><br/>

            <label>Produit : </label>
            <?=form_dropdown('idprod',$produits,1);?><br/>

            <label>Quantité: </label><input class="form-control" type="text" name="qte"/><br/>



            <input class="btn btn-success" type="submit" id="creer" value="Créer"/>
        </form>

    </div>
</div>