<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container bg-primary">
            <div class="">
                <div class="">
                    <h2>Editar usuario</h2>
                </div>
                <form action="?u=crear" method="post">
                    <div class="row">
                        <div class="col m-3">
                            <input type="hidden" name="idU" value="<?php echo $alm->idUsuario; ?>">

                            <input type="text" name="nombre" id="" class="form-control m-1"  value="<?php echo $alm->nombres; ?>">
                            <input type="text" name="apellido" class="form-control m-1"  value="<?php echo $alm->apellidos; ?>">
                            <input type="number" name="telefono" id="" class="form-control m-1"  value="<?php echo $alm->telefono; ?>">
                            <input type="email" name="email" id="" class="form-control m-1"  value="<?php echo $alm->email;?>">
                        </div>
                        <div class="col m-3">
                            <input type="password" name="pass" id="" class="form-control m-1"  value="<?php echo $alm->clave; ?>">
                            <select name="rol" id="" class="form-control m-1">
                                <?php foreach($this->usuario->listarRol() as $td): ?>
                                    <option value="<?php echo $td->idRol ?>" <?php echo $td->idRol == $alm->idRol ? 'selected' : '' ?>> <?php echo $td->rol ?> </option>
                                <?php endforeach; ?>
                            </select>
                            <select name="estado" id="" class="form-control m-1">    
                                    <option value="1">Activo</option>
                                    <option value="2">Innactivo</option>
                            </select>
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
