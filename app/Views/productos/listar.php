<?php echo $header; ?>
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
                    <td>Editar/Borrar</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
<?php echo $footer; ?>