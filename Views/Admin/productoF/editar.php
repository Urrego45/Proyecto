<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container bg-primary">
            <div class="">
                <div class="">
                    <h2>Editar Producto</h2>
                </div>
                <form action="?pf=crear" method="post">
                    <div class="row">
                        <div class="col m-3">
                            <input type="hidden" name="ad">
                            <input type="hidden" name="idU" value="<?php echo $alm->idProductoFinal; ?>">

                            <input type="text" name="nombre" id="" class="form-control m-1" placeholder="Nombre insumo" value="<?php echo $alm->nombre; ?>">
                            <input type="number" name="precio" class="form-control m-1" placeholder="Precio" value="<?php echo $alm->precio; ?>">
                            <input type="number" name="ventas" id="" class="form-control m-1" placeholder="ventas" value="<?php echo $alm->ventas; ?>">
                            <select name="estado" id="" class="form-control m-1">
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
