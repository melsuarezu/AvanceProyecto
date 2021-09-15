<a name="" id="" class="btn btn-success" href="?controlador=usuario&accion=crear" role="button">Registrar Usuario</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($usuarios as $usuario){

    ?>

        <tr>
            <td><?php echo $usuario->id; ?></td>
            <td><?php echo $usuario->nombre; ?></td>
            <td><?php echo $usuario->correo; ?></td>
            <th><?php echo $usuario->contraseña; ?></th>
            <td>
                <a href="?controlador=usuario&accion=editar&id=<?php echo $usuario->id; ?>">Editar</a>
                <a href="?controlador=usuario&accion=borrar&id=<?php echo $usuario->id; ?>">Borrar</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
