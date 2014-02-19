<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>dist/css/jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Biau Potager Version beta</a>
        </div>
        <div class="navbar-collapse collapse">
            <?php $class = array('class' => 'navbar-form navbar-right');?>
                <?php echo form_open('utilisateurs_c/connexion', $class); ?>
                <div class="form-group">
                    <input type="text" name="nom" id="nom" placeholder="Identifiant" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="passkey" id="passkey" placeholder="Mot de passe" class="form-control">
                </div>
                <input type="submit" class="btn btn-success" value="Connexion">
                <a type="button" class="btn btn-success" href="<?php echo site_url('utilisateurs_c/inscription') ?>">Inscription</a>
<!--            //--><?//= anchor('utilisateurs_c/mdp_oublie','Mot de passe oublié ?')?>
            <a type="button" type="button" class="btn btn-danger" href="<?php echo site_url('utilisateurs_c/mdp_oublie') ?>" data-toggle="tooltip" data-placement="bottom" title="Mot de passe oublié ?">?</a>
            <?php echo form_close(); ?>

        </div><!--/.navbar-collapse -->
    </div>
</div>
<?php echo validation_errors(); ?>

<div class="jumbotron">
    <div class="container">
        <h1>Le Biau Potager Beta</h1>
        <div id="menuAccueil">
            <div class="btn btn-large btn-block btn-primary">
                <div class="openbig"><div class="openbig_title">Acces rapide</div>
                    <br/><br/>

                        <a style="font-size: 130%; color: #ffffff" href="#presentation">Presentation</a><br/>
                        <a style="font-size: 130%; color: #ffffff" href="#contact"> Contact</a><br/>
                        <a style="font-size: 130%; color: #ffffff" href="#contact"> Marchés</a><br/>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div id="presentation" >
        <div class="row">
            <div class="col-md-4" id="myshadow1">
                <h2>Le Biau Potager</h2>
                <p>En bio depuis sa création en 1989. Denis BRUN et Christophe RAPP produisent des légumes sur environ 6 hectares. </p>
                <p><img src="<?php echo base_url(); ?>img/accueil1.bmp"></p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4" id="myshadow1">
                <h2>La culture</h2>
                <p>Reppe est situé dans le Sundgau entre Belfort et Altkirch. Les sols sont argileux ce qui rend la culture de primeurs plus difficile lors des printemps pluvieux ; par contre en été sans irrigation les légumes de plein champ ont une pousse plus lente et développent alors tout leur parfum.
                    Le compost est le seul apport, il permet d'améliorer le sol et de nourrir indirectement les plantes.
                    Des haies variées ont été plantées afin de créer un équilibre écologique favorable. Les traitements limités en cas de problèmes graves (mildiou, doryphores, acariens, limaces) sont à base de produits végétaux (pyrèthre) ou de produits minéraux (soufre, cuivre et phosphate de fer). </p>
                <p><img src="<?php echo base_url(); ?>img/accueil2.bmp"></p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4" >
                <h2>L'équipe</h2>
                <p>Nathalie, Estelle et Nadine sont les salariées permanentes ; l'équipe est complétée en été par des saisonniers. Vous nous retrouverez sur les marchés de Belfort, Sochaux ainsi qu'à Reppe au jardin</p>
                <p><img src="<?php echo base_url(); ?>img/accueil3.bmp"></p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>
    </div>

    <div id="contact">
        <div class="jumbotron">
            <p>Le Biau Potager
                50 grande rue
                90150 REPPE
                Téléphone : 03.84.23.83.44
                Courriel : biaupotager@wanadoo.fr </p>

            <p><iframe  width="100%" height="250" frameborder="5" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;geocode=&amp;q=biaupotager&amp;sll=47.685037,7.003613&amp;sspn=0.051541,0.109863&amp;ie=UTF8&amp;cid=47666976,7028503,17597086085125828038&amp;s=AARTsJrih_8jsakCUnMn4SkeXqwgFp2MAw&amp;ll=47.682148,7.035027&amp;spn=0.040449,0.080681&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
            </p>
        </div>
    </div>

    <hr>

    <footer>
<!--        <p>&copy; Company 2013</p>-->
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>dist/js/bootstrap.min.js"></script>
</body>
</html>