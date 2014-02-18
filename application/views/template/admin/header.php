<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Justified Nav Template for Bootstrap</title>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/rhinoslider-1.05.css" />
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>dist/css/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Project name</a>
              </div>
              <div class="navbar-collapse collapse">
                  <div class="navbar-form navbar-right">
                      ADMIN
<!--                      <h2>Bonjour --><?php //echo $nom; ?><!--</h2>-->
                      <a href="<?php echo site_url('utilisateurs_c/deconnexion/') ?>">Déconnexion</a>
                  </div>
      </div><!--/.navbar-collapse -->
      </div>
      </div>

      <br/><br/>
    <div class="container">

      <div class="masthead">
        <ul class="nav nav-justified">
          <li><a href="<?php echo site_url('admin/admin_c/index/') ?>">Accueil</a></li>
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Produits <b class="caret"></b> </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('admin/produits_c/index/') ?>">Liste des produits</a></li>
                    <li><a href="<?php echo site_url('admin/produits_c/creer_produit/') ?>">Créer un produit</a></li>
<!--                    <li class="divider"></li>-->
<!--                    <li><a href="#">Autres</a></li>-->
                </ul>
            </li>
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Commandes <b class="caret"></b> </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('admin/commandes_c/index/') ?>">Liste des Commandes</a></li>
                    <li><a href="<?php echo site_url('admin/commandes_c/nouvelle_commande/') ?>">Passer une nouvelle commande</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Autres</a></li>
                </ul>
            </li>
<!--            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> BDD  <b class="caret"></b> </a>-->
<!--                <ul class="dropdown-menu">-->
<!--                    <li><a href="--><?php //echo site_url('admin/produits_c/index/') ?><!--">Liste des produits</a></li>-->
<!--                    <li><a href="--><?php //echo site_url('admin/produits_c/creer_produit/') ?><!--">Créer un produit</a></li>-->
<!--                    <li class="divider"></li>-->
<!--                    <li><a href="#">Autres</a></li>-->
<!--                </ul>-->
<!--            </li>-->
            <li><a href="<?php echo site_url('admin/secondaires_c/index/') ?>">BDD</a></li>
<!--            <li><a href="--><?php //echo site_url('admin/commandes_c/nouvelle_commande/') ?><!--">Nouvelle commande</a></li>-->
<!--          <li><a href="#">Menu 4</a></li>-->
        </ul>
       </div>
      </div>

        </head>

        <body>