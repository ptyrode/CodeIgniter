
<div class="container">
    <!-- Example row of columns -->


<?php if(isset($debutSemaine) && ($debutSemaine == "non")){
    echo "<script>alert(\"Trop tard pour commander, attendez la prochaine semaine de livraison\")</script>";

} ?>


    <script type="text/javascript">
        $(document).ready(function(){
            $('#slider').rhinoslider();
        });
    </script>


    <style type="text/css">
        /*body { background-color:#000; }*/

        #slider {
            width:600px;
            height:250px;

            /*IE bugfix*/
            padding:0;
            margin:0;
        }

        #slider li { list-style:none; }

        #page {
            width:600px;
            margin:50px auto;
        }
    </style>

    <div id="page">
        <ul id="slider">
            <li><img src="<?php echo base_url()?>img/slider/01.png" alt="" /></li>
            <li><img src="<?php echo base_url()?>img/slider/02.png" alt="" /></li>
            <li><img src="<?php echo base_url()?>img/slider/03.png" alt="" /></li>
            <li><img src="<?php echo base_url()?>img/slider/04.png" alt="" /></li>
            <li><img src="<?php echo base_url()?>img/slider/05.png" alt="" /></li>
        </ul>
    </div>
</div> <!-- /container -->
