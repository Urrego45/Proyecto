<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container bg-primary">
            <div class="">
                <div class="">
                    <h2>Registrar Insumo</h2>
                </div>
                <form action="?i=crear" method="post">
                    <div class="row">
                        <div class="col m-3">
                            <input type="hidden" name="ad">
                            
                            <input type="text" name="nombre" id="" class="form-control m-1" placeholder="Nombre insumo">
                            <input type="number" name="precio" class="form-control m-1" placeholder="Precio">
                            <input type="date" name="fechaV" id="" class="form-control m-1" placeholder="Fecha vencimiento">
                            <input type="number" name="stockI" id="" class="form-control m-1" placeholder="Stock inicial">
                            <input type="number" name="stockA" id="" class="form-control m-1" placeholder="Stock actual">
                        </div>
                        <div class="col m-3">
                            <input type="number" name="insumE" id="" class="form-control m-1" placeholder="Entradas de insumos">
                            <input type="number" name="perdidas" id="" class="form-control m-1" placeholder="Perdidas de insumos">
                            <select name="provee" id=""class="form-control m-1">
                                <?php foreach($this->insumo->listarProveedor() as $td): ?>
                                    <option value="<?php echo $td->idProveedor ?>"> <?php echo $td->nombreProveedor ?> </option>
                                <?php endforeach; ?>
                            </select>
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


