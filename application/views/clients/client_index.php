<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $titre?></title>

	<link rel="stylesheet" href="<?= base_url(); ?>monCSS/mesStyles1.css" >
</head>
<body>

<div id="container">
    <div>

        <h1>Bonjour <?= $this->session->userdata('login')?></h1>

        <p><?= anchor('users_c/deconnexion','se connecter')?></p>
	</div>
	<p class="footer">DUT info Belfort <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>