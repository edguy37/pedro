<?php echo $header; ?>

    <a href="<?=base_url('subir')?>">Subir un producto</a>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Descripcion</th>
                <th>Traduccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
            <tbody>
                <?php foreach($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto['id']; ?></td>
                    <td><?= $producto['descripcion']; ?></td> <!-- de esta forma tambien es valido y mas rapido -->
                    <td><?php echo $producto['traduccion']; ?></td>
                    <td>Editar/
                        <a href="<?=base_url('borrar/'.$producto['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
<?php echo $footer; ?>