<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container bg-primary">
            <div class="">
                <div class="">
                    <h2>Editar Insumo</h2>
                </div>
                <form action="?i=crear" method="post">
                    <div class="row">
                        <div class="col m-3">
                            <input type="hidden" name="ad">
                            <input type="hidden" name="idU" value="<?php echo $alm->idInsumo; ?>">

                            <input type="text" name="nombre" id="" class="form-control m-1" placeholder="Nombre insumo" value="<?php echo $alm->nombre; ?>">
                            <input type="number" name="precio" class="form-control m-1" placeholder="Precio" value="<?php echo $alm->precio; ?>">
                            <input type="date" name="fechaV" id="" class="form-control m-1" placeholder="Fecha vencimiento" value="<?php echo $alm->vencimiento; ?>">
                            <input type="number" name="stockI" id="" class="form-control m-1" placeholder="Stock inicial" value="<?php echo $alm->stockInicial; ?>">
                            <input type="number" name="stockA" id="" class="form-control m-1" placeholder="Stock actual" value="<?php echo $alm->stock; ?>">
                        </div>
                        <div class="col m-3">
                            <input type="number" name="insumE" id="" class="form-control m-1" placeholder="Entradas de insumos" value="<?php echo $alm->entradas; ?>">
                            <input type="number" name="perdidas" id="" class="form-control m-1" placeholder="Perdidas de insumos" value="<?php echo $alm->perdidas; ?>">
                            <select name="provee" id=""class="form-control m-1">
                                <?php foreach($this->insumo->listarProveedor() as $td): ?>
                                    <option value="<?php echo $td->idProveedor ?>" <?php echo $td->idProveedor == $alm->idProveedor ? 'selected' : '' ?>> <?php echo $td->nombreProveedor ?> </option>
                                <?php endforeach; ?>
                            </select>
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
