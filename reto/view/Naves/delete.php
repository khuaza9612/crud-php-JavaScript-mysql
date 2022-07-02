<div class="jumbotron mt-4">
    <h3 class="display-4">Eliminar Naves</h3>
</div>
<?php
    while ($ciu=mysqli_fetch_assoc($naves)){
?>
<form action="<?php echo getUrl("Naves","Naves","postDelete"); ?>" method="post">
    <div class="row">
        <div class="col-md-4">
            <label>Naves</label>
            <input type="hidden" name="id" value="<?php echo $ciu['id'];?>">
            <input type="text" name="nombre" readonly class="form-control" value="<?php echo $ciu['nombre'];?>">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
             <input type="submit" value="Eliminar" class="btn btn-danger">
        </div>
    </div>
</form>
<?php
    }
 ?>