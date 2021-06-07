<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container">
            <div class="">
                <p></p>
                <h1>cambiar la contraseña</h1>
                <p>Ingrese la nueva contraseña</p>
                <form action="?u=cambiarPass" method="post">
                    <div class="row">
                        <div class="col m-3">
                            <input type="hidden" name="idU" value="<?php echo $_SESSION['idUsuario']; ?>">

                            <div class="grupo" id="grupo_pass">
                                <label for="pass">Contraseña</label>
                                <div class="inputs">
                                    <input type="password" name="pass1" id="pass1" class="f__input form-control m-1" placeholder="123">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Contraseña incorrecta. la contraseña debe tener 8 a 14 caracteres.</p>
                            </div>

                            <div class="grupo" id="grupo_pass">
                                <label for="pass">Contraseña</label>
                                <div class="inputs">
                                    <input type="password" name="pass2" id="pass2" class="f__input form-control m-1" placeholder="123">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Contraseña incorrecta. la contraseña debe tener 8 a 14 caracteres.</p>
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
