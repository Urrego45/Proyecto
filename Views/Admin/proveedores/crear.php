<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container ">
            <div class="">
                <div class="">
                    <h2>Registrar proveedor</h2>
                </div>

                <form action="?p=crear" method="post" id="formulario">
                    <div class="row">
                        <div class="col m-3">
                        
                            <div class="grupo" id="grupo_nombre">
                                <label for="nombre">Nombre</label>
                                <div class="inputs">
                                    <input type="text" name="nombre" id="nombre" class="f__input form-control m-1" placeholder="Nombre proveedor">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Nombre incorrecto. solo se permite letras (A-Z), numeros (0,9) y simbolos (_ - #).</p>
                            </div>

                            <div class="grupo" id="grupo_direccion">
                                <label for="direccion">Dirección</label>
                                <div class="inputs">
                                    <input type="text" name="direccion" id="direccion" class="f__input form-control m-1" placeholder="Dirección">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Dirección incorrecta. solo se permite letras (A-Z), numeros (0,9) y simbolos (_ - #).</p>
                            </div>

                            <div class="grupo" id="grupo_tel">
                                <label for="tel">Teléfono</label>
                                <div class="inputs">
                                    <input type="number" name="tel" id="tel" class="f__input form-control m-1" placeholder="Teléfono">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Teléfono incorrecto. solo se permiten numeros y tener 10 caracteres.</p>
                            </div>

                            <div class="grupo" id="grupo_email"> 
                                <label for="">Email</label>
                                <div class="inputs">
                                    <input type="email" name="email" id="email" class="f__input form-control m-1" placeholder="Email">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Correo incorrecto. solo se permiten letras (a-z), numeros y signos de puntuacion (.). </p>
                            </div>
                        </div>
                    </div>
                    <div class="col m-3">
                        <input type="submit" value="Registrar" class="btn btn-danger m-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script  src="http://localhost/Emi/assets/js/validacionProveedor.js"></script>