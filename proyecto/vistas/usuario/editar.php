<div class="card">
    <div class="card-header">
        Editar usuario
    </div>
    <div class="card-body">

        <form action="" method="post">

            <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input readonly type="text" class="form-control" value="<?php echo $usuario->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="Id usuario">
            </div>


            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" value="<?php echo $usuario->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del usuario">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Correo:</label>
                <input type="email" class="form-control" value="<?php echo $usuario->correo; ?>" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo electronico">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" value="<?php echo $usuario->contraseña; ?>" name="contraseña" id="contraseña" aria-describedby="emailHelpId" placeholder="Contraseña">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar">
            <a href="?controlador=usuario&accion=inicio" class="btn-btn-primary">Cancelar</a>
        </form>
    </div>
</div>