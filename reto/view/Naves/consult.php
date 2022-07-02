<div class="row mt-5 col-md-3">
    <input type="text" name="filtro" id="filtro" data-url="<?php echo getUrl("Naves","Naves","filtro",false,"ajax");?>" class="form-control" placeholder="Buscar...">
</div>
<style>
    td{
        color:white
    }
    tr:hover td,
tr:hover td .far{
 background-color: #666666;
 font-weight: bold;
}
</style>
<table class="mt-3 table table-striped table-hover">
   <thead>
        <tr>
            <th style="color:white">ID</th>
            <th style="color:white">Nombre</th>
            <th style="color:white">Combustible</th>
            <th style="color:white">Tipo</th>
            <th style="color:white">Imagen</th>
            <th style="color:white">Eliminar</th>
        </tr>
    </thead>
    <tbody>
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
    </tbody>
</table>