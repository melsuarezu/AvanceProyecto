<table class="table table-bordered">
    <thead>
        <tr>
            <th>IMAGEN</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>DESARROLLO</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($productos as $producto){

    ?>

        <tr>
            <td><?php echo $producto->imgProducto; ?></td>
            <td><?php echo $producto->marca; ?></td>
            <td><?php echo $producto->modelo; ?></td>
            <th><?php echo $producto->precio; ?></th>
        </tr>
        <?php } ?>
    </tbody>
</table>