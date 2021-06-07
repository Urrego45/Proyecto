<?php 

echo $_SESSION['idUsuario'];
?>
<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container">
            <div class="">
                <h1>¿Desea cambiar la contraseña?</h1>
                <p>Ingrese su correo electronico</p>
                <form action="?u=enviarCorreo" method="post">
                    <div class="row">
                        <div class="col m-3">
                            <input type="hidden" name="idU" value="<?php echo $_SESSION['idUsuario']; ?>">

                            <div class="grupo" id="grupo_email">
                                <label for="email">Email</label>
                                <div class="inputs">
                                    <input type="text" name="email" id="email" class="f__input form-control m-1" placeholder="ejemplo@gamil.com">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Correo incorrecto. solo se permiten letras (a-z), numeros y signos de puntuacion (.).</p>
                            </div>
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
