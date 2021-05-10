<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container bg-primary">
            <div class="">
                <div class="">
                    <h2>Editar Insumo</h2>
                </div>

                <form action="?i=crear" method="post" id="formulario">
                    <div class="row">
                        <div class="col m-3">

                            <input type="hidden" name="ad">
                            <input type="hidden" name="idU" value="<?php echo $alm->idInsumo; ?>">
                            <div class="grupo" id="grupo_nombre">
                                <label for=""></label>
                                <div class="inputs">
                                    <input type="text" name="nombre" id="" class="form-control m-1" placeholder="Nombre insumo" value="<?php echo $alm->nombre; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_precio">
                                <label for=""></label>
                                <div class="inputs">
                                    <input type="number" name="precio" class="form-control m-1" placeholder="Precio" value="<?php echo $alm->precio; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_fecha">
                                <label for=""></label>
                                <div class="inputs">
                                    <input type="date" name="fechaV" id="" class="form-control m-1" placeholder="Fecha vencimiento" value="<?php echo $alm->vencimiento; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_stockI">
                                <label for=""></label>
                                <div class="inputs">
                                    <input type="number" name="stockI" id="" class="form-control m-1" placeholder="Stock inicial" value="<?php echo $alm->stockInicial; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_stockA">
                                <label for=""></label>
                                <div class="inputs">
                                    <input type="number" name="stockA" id="" class="form-control m-1" placeholder="Stock actual" value="<?php echo $alm->stock; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                        
                        </div>
                        <div class="col m-3">

                            <div class="grupo" id="grupo_entradaI">
                                <label for=""></label>
                                <div class="inputs">
                                    <input type="number" name="insumE" id="" class="form-control m-1" placeholder="Entradas de insumos" value="<?php echo $alm->entradas; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_perdidasI">
                                <label for=""></label>
                                <div class="inputs">
                                    <input type="number" name="perdidas" id="" class="form-control m-1" placeholder="Perdidas de insumos" value="<?php echo $alm->perdidas; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_proveedor">
                                <label for=""></label>
                                <div class="inputs">
                                    <select name="provee" id=""class="form-control m-1">
                                        <?php foreach($this->insumo->listarProveedor() as $td): ?>
                                            <option value="<?php echo $td->idProveedor ?>" <?php echo $td->idProveedor == $alm->idProveedor ? 'selected' : '' ?>> <?php echo $td->nombreProveedor ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_estado">
                                <label for=""></label>
                                <div class="inputs">
                                    <select name="estado" id="" class="form-control m-1">
                                        <option value="0">inactivo</option>
                                        <option value="1">activo</option>
                                    </select>
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
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
