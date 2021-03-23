<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container bg-primary">
            <div class="">
                <div class="">
                    <h2>Editar proveedor</h2>
                </div>
                <form action="?p=crear" method="post">
                    <div class="row">
                        <div class="col m-3">
                            <input type="hidden" name="idU" value="<?php echo $alm->idProveedor; ?>">

                            <input type="text" name="nombre" id="" class="form-control m-1" placeholder="Nombre proveedor" value="<?php echo $alm->nombreProveedor; ?>">
                            <input type="text" name="direccion" class="form-control m-1" placeholder="Direccion" value="<?php echo $alm->direccion; ?>">
                            <input type="number" name="telefono" id="" class="form-control m-1" placeholder="Telefono" value="<?php echo $alm->telefono; ?>">
                            <input type="email" name="email" id="" class="form-control m-1" placeholder="Email" value="<?php echo $alm->email; ?>">
                            <select name="estado" id="">
                                <option value="0">inactivo</option>
                                <option value="1">activo</option>
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
