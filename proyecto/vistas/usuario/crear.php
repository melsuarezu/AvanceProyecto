<!-- <div class="card">
    <div class="card-header">
        Agregar usuario
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del usuario">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Correo:</label>
                <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo electronico">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Agregar">
        </form>
    </div>
</div> -->

<div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">
            <h1>Sign up</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input required type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group">
                    <label for="email">Correo Electronico:</label>
                    <input required type="email" class="form-control" id="email" name="correo" placeholder="Ingrese su email">
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                    <a href="?controlador=usuario&accion=inicio" class="btn-btn-primary">Cancelar</a>
                </div>

            </form>
        </div>
    </div>