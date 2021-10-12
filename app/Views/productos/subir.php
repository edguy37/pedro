<?php echo $header; ?>
    formulario para subir productos

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del producto</h5>
            <!-- <p class="card-text">jajaja</p> -->
            <form action="<?=site_url('/guardar') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input id="descripcion" type="text" class="form-control" name="descripcion">
                </div>
                <div class="form-group">
                    <label for="traduccion">Traducción</label>
                    <input id="traduccion" type="text" class="form-control" name="traduccion">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input id="imagen" type="file" class="form-control-file" name="imagen">
                </div>
                <button class="btn btn-success" type="submit">Subir</button>
            </form>
        </div>
    </div>

<?php echo $footer; ?>