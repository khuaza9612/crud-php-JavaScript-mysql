<?php
        while($ciu=mysqli_fetch_assoc($naves)){
            echo "<tr>";
                echo "<td >".$ciu['id']."</td>";
                echo "<td>".$ciu['nombre']."</td>";
                echo "<td>".$ciu['combustible']."</td>";
                echo "<td>".$ciu['tipo']."</td>";
                echo "<td><img src='".$ciu['imagen']."' width='100'></td>";
                
                 echo "<td><a href='".getUrl("Naves","Naves","getDelete",array("id"=>$ciu['id']))."'><button class='btn btn-danger'>Eliminar</button></a></td>";
            echo "</tr>";
        }
    ?>