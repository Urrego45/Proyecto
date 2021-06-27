
<div class="card w-75 p-0 my-5 mx-auto">

<div class="card-header bg-light p-5">

    <div class="px-5">

    <div id="login">
    <h3 class="text-center text-primary pt-5">Comidas Rápidas Emi</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form class="form" id="formulario" action="?l=validar" method="post">
                        <h3 class="text-center text-info">Iniciar sesión</h3>

                        <div class="grupo form-group" id="grupo_email">
                            <label for="email" class="f_label text-info">Correo</label><br>
                            <div class="inputs">
                                <input type="email" name="email" id="email" class="f__input form-control" placeholder="Correo@gmail.com">
                                <i class="estado fas fa-times-circle"></i>
                            </div>
                            <p class="error">Correo incorrecto. solo se permiten letras (a-z), números y signos de puntuación (.).</p>
                        </div>

                        <div class="grupo form-group" id="grupo_pass">
                            <label for="pass" class="f_label text-info">Constraseña:</label><br>
                            <div class="inputs">
                                <input type="password" name="pass" id="pass" class="f__input form-control">
                                <i class="estado fas fa-times-circle"></i>
                            </div>
                            <p class="error">Contraseña incorrecta. la contraseña debe tener 8 a 14 caracteres.</p>
                        </div>
                        <br>

                        <div class="form-group">
                            <center><input type="submit" name="validar" class="enviar btn btn-info btn-md" value="Ingresar"></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script  src="http://localhost/Emi/assets/js/validacionLogin.js"></script>
</div>

</div>
