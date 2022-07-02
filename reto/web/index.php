<?php

    include_once '../lib/helpers.php';
  
         
    include_once '../view/partials/head.php';

    echo "<body>";
        echo "<div class='container'>";
        include_once '../view/partials/navbar.php';
        if (isset($_GET['modulo'])){
            resolve();

        }else{
           // echo "<a href='".getUrl("Naves","Naves","prueba")."'><button class='btn btn-success'>Prueba</button></a>";
           // echo "Hola ".$_SESSION['nombre']." ".$_SESSION['apellido'];
        }
        echo "</div>";
        include_once '../view/partials/footer.php';
    echo "</body>";
    echo "</html>";

?>
<link rel="stylesheet" href="index.css">
<div id="saturn">
  <div class="planet bottom planet-bg"></div>
  <div class="rings"></div>
  <div class="planet top planet-bg"></div>
</div>

