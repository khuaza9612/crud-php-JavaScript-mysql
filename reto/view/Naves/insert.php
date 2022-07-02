<div class="jumbotron mt-4">
    <h3 class="display-6">REGISTRAR NAVES</h3>
</div>

<!-- encytipe nos permite enviar enviar documento -->
<form action="<?php echo getUrl("Naves","Naves","postInsert"); ?>" enctype="multipart/form-data" method="post">
    <div class="row">
        <div class="col-md-4">
            <label style="color:white">TIPO</label>
            <input type="text" name="tipo" class="form-control validar" placeholder="TIPO DE NAVE" require>
        </div>
        <div class="col-md-4">
            <label style="color:white">NOMBRE</label>
            <input type="text" name="nombre" class="form-control validar" placeholder="NOMBRE DE NAVE">
        </div>
        <div class="col-md-4">
            <label style="color:white">COMBUSTIBLE</label>
            <input type="text" name="combustible" class="form-control validar" placeholder="COMBUSTIBLE DE NAVE">
        </div>
        <div class="col-md-4 form-group">
            <label style="color:white">IMAGEN</label>
            <input type="file" name="imagen" class="form-control validar" >
       
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>
    </div>
</form>

<style></style>