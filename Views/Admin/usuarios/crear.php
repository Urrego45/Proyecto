<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container">
            <div class="">
                <div class="">
                    <h2>Registrar usuario</h2>
                </div>
                <form action="?u=crear" method="post" id="formulario">

                    <div class="row">

                        <div class="col m-3">
                            <div class="grupo" id="grupo_nombre">
                                <label for="">Nombre</label>
                                <div class="inputs">
                                    <input type="text" name="nombre" id="" class="form-control m-1" placeholder="Nombre">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese el nombre correctamente. sin numeros y simbolos.</p>
                            </div>

                            <div class="grupo" id="grupo_apellido">
                                <label for="">Apellido</label>
                                <div class="inputs">
                                    <input type="text" name="apellido" class="form-control m-1" placeholder="Apellido">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese el nombre correctamente. sin numeros y simbolos.</p>
                            </div>

                            <div class="grupo" id="grupo_tel">
                                <label for="">Telefono</label>
                                <div class="inputs">
                                    <input type="number" name="telefono" id="" class="form-control m-1" placeholder="Telefono">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese el numero de telefono correctomante. sin simbolos, letras, espacios o difernete a 10 digitos.</p>
                            </div>

                            <div class="grupo" id="grupo_email">
                                <label for="">Email</label>
                                <div class="inputs">
                                    <input type="email" name="email" id="" class="form-control m-1" placeholder="Email">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">ingrese el email correctamente. </p>
                            </div>

                        </div>
                        <div class="col m-3">
                            <div class="grupo" id="grupo_pass">
                                <label for="">Contraseña</label>
                                <div class="inputs">
                                    <input type="password" name="pass" id="" class="form-control m-1" placeholder="PAss">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">ingrese la contraseña correctamente. mayor a 8 caracters y sin simbolos.</p>
                            </div>

                            <div class="grupo" id="grupo_rol">
                                <label for="">Rol</label> 
                                <div class="inputs">
                                    <select name="rol" id="" class="form-control m-1">
                                        <?php foreach($this->usuario->listarRol() as $td): ?>
                                        <option value="<?php echo $td->idRol ?>"> <?php echo $td->rol ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Escoja un rol.</p>
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

