<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container bg-primary">
            <div class="">
                <div class="">
                    <h2>Editar usuario</h2>
                </div>
                <form action="?u=cambiarPass" method="post">
                    <div class="row">
                        <div class="col m-3">
                            <input type="hidden" name="idU" value="<?php echo $_SESSION['idUsuario']; ?>">

                            <input type="text" name="nombre" id="" class="form-control m-1"  value="<?php echo $_SESSION['clave']; ?>" disabled>


                            <input type="password" name="pass1" id="c1" class="form-control m-1"  placeholder="Ingrese nueva contraseña">
                            <input type="password" name="pass2" id="c2" class="form-control m-1"  placeholder="Confirme contraseña">
                        </div>
                    </div>
                    <div class="col m-3">
                        <input type="submit" value="Cambiar" class="btn btn-danger m-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
