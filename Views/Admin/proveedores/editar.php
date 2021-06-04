<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container ">
            <div class="">
                <div class="">
                    <h2>Editar proveedor</h2>
                </div>

                <form action="?p=crear" method="post" id="formulario">
                    <div class="row">
                        <div class="col m-3">
                        <input type="hidden" name="idU" value="<?php echo $alm->idProveedor; ?>">

                            <div class="grupo" id="grupo_nombreP">
                                <label for="nombreP">Nombre</label>
                                <div class="inputs">
                                    <input type="text" name="nombreP" id="nombreP" class="f__input form-control m-1" placeholder="Nombre proveedor" value="<?php echo $alm->nombreProveedor; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Nombre incorrecto. solo se permite letras (A-Z), numeros (0,9) y simbolos (_ - #)</p>
                            </div>

                            <div class="grupo" id="grupo_direccion">
                                <label for="direccion">Dirección</label>
                                <div class="inputs">
                                    <input type="text" name="direccion" id="direccion" class="f__input form-control m-1" placeholder="Direccion" value="<?php echo $alm->direccion; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Dirección incorrecta. solo se permite letras (A-Z), numeros (0,9) y simbolos (_ - #)</p>
                            </div>

                            <div class="grupo" id="grupo_tel">
                                <label for="tel">Teléfono</label>
                                <div class="inputs">
                                    <input type="number" name="tel" id="tel" class="f__input form-control m-1" placeholder="Telefono" value="<?php echo $alm->telefono; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Teléfono incorrecto. solo se permiten numeros y tener 10 caracteres.</p>
                            </div>

                            <div class="grupo" id="grupo_email"> 
                                <label for="email">Email</label>
                                <div class="inputs">
                                    <input type="email" name="email" id="email" class="f__input form-control m-1" placeholder="Email" value="<?php echo $alm->email; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Correo incorrecto. solo se permiten letras (a-z), numeros y signos de puntuacion (.). </p>
                            </div>

                            <div class="grupo" id="grupo_estado"> 
                                <label for="estado">Estado</label>
                                <div class="inputs">
                                    <select name="estado" id="estado" class="f__input form-control m-1">
                                        <option value="0">inactivo</option>
                                        <option value="1">activo</option>
                                    </select>
                                </div>
                                <p class="error">ingrese un estado</p>
                            </div>
                        </div>
                    </div>
                    <div class="col m-3">
                        <input type="submit" value="Editar" class="btn btn-danger m-2">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
