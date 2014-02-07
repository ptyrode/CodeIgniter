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
            <a class="navbar-brand" href="#">Biau Potager</a>
        </div>
        <div class="navbar-collapse collapse">
            <?php $class = array('class' => 'navbar-form navbar-right');?>
            <?php echo form_open('utilisateurs_c', $class); ?>
            <div class="form-group">
                <input type="text" name="nom" id="nom" placeholder="Identifiant" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="passkey" id="passkey" placeholder="Mot de passe" class="form-control">
            </div>
            <input type="submit" class="btn btn-success" value="Connexion">
            <a type="button" class="btn btn-success" href="<?php echo site_url('utilisateurs_c/inscription') ?>">Inscription</a>
            <?= anchor('utilisateurs_c/mdp_oublie','Mot de passe oublié ?')?>
            <?php echo form_close(); ?>

        </div><!--/.navbar-collapse -->
    </div>
</div>
<?php echo validation_errors(); ?>

<div id="formInscription">
    <div id="container">
        <div>
            <h1>Inscription</h1>
            <?php echo form_open('utilisateurs_c/inscription'); ?>

            <label for="login">login:</label>
            <input type="text" name="login" value="<?php echo set_value('login');?>" class="form-control"/>
            <?php echo form_error('login','<span class="error">',"</span>");?>
            <br>

            <label for="email">email:</label>
            <input type="text" name="email" value="<?php echo set_value('email');?>" class="form-control"/>
            <?php echo form_error('email','<span class="error">',"</span>");?>
            <br>

            <label for="pass">Mot de passe:</label>
            <input type="password" name="pass" value="<?= set_value('pass');?>" class="form-control"/>
            <?php echo form_error('pass','<span class="error">',"</span>");?>
            <br>
            <label for="pass2">confirmation Mot de passe:</label>
            <input type="password" name="pass2" value="<?= set_value('pass2');?>" class="form-control"/>
            <?php echo form_error('pass2','<span class="error">',"</span>");?>
            <br>
            <?php if(isset($erreur))echo '<span class="error">'.$erreur."</span>";?>
            <input type="submit" value="Envoyer" />

            <?php echo form_close(); ?>

        </div>

        <p class="footer">DUT info Belfort <strong>{elapsed_time}</strong> seconds</p>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>dist/js/bootstrap.min.js"></script>
</body>
</html>