<?php
$data = array(
    'nomUtil'=> $this->session->all_userdata()
);
$this->load->view("template/client/header.php",$data);
$this->load->view($contenu);
$this->load->view("template/client/footer.php");
?>

