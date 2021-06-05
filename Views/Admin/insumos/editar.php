<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container">
            <div class="">
                <div class="">
                    <h2>Editar insumo</h2>
                </div>

                <form action="?i=crear" method="post" id="formulario">
                    <div class="row">
                        <div class="col m-3">

                            <input type="hidden" name="ad">
                            <input type="hidden" name="idU" value="<?php echo $alm->idInsumo; ?>">

                            <div class="grupo" id="grupo_nombre">
                                <label for="nombre">Nombre insumo</label>
                                <div class="inputs">
                                    <input type="text" name="nombre" id="nombre" class="f__input form-control m-1" placeholder="Nombre insumo" value="<?php echo $alm->nombre; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Nombre incorrecto. solo se permiten letras (A-Z).</p>
                            </div>

                            <div class="grupo" id="grupo_precio">
                                <label for="precio">Precio</label>
                                <div class="inputs">
                                    <input type="number" name="precio" id="precio" class="f__input form-control m-1" placeholder="Precio" value="<?php echo $alm->precio; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese un numero.</p>
                            </div>

                            <div class="grupo" id="grupo_fecha">
                                <label for="fechaV">Fecha de vencimiento</label>
                                <div class="inputs">
                                    <input type="date" name="fechaV" id="fechaV" class="f__input form-control m-1" placeholder="" value="<?php echo $alm->vencimiento; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Fecha incorrecta. ingresa una fehca posterior al dia de hoy.</p>
                            </div>

                            <div class="grupo" id="grupo_stockI">
                                <label for="stockI">Stock inicial</label>
                                <div class="inputs">
                                    <input type="number" name="stockI" id="stockI" class="f__input form-control m-1" placeholder="Stock inicial" value="<?php echo $alm->stockInicial; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese un numero.</p>
                            </div>

                            <div class="grupo" id="grupo_stockA">
                                <label for="stockA">Stock actual</label>
                                <div class="inputs">
                                    <input type="number" name="stockA" id="stockA" class="f__input form-control m-1" placeholder="Stock actual" value="<?php echo $alm->stock; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese un numero.</p>
                            </div>

                        
                        </div>
                        <div class="col m-3">

                            <div class="grupo" id="grupo_entrada">
                                <label for="entrada">Entrada de insumos</label>
                                <div class="inputs">
                                    <input type="number" name="entrada" id="entrada" class="f__input form-control m-1" placeholder="Entradas de insumos" value="<?php echo $alm->entradas; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese un numero.</p>
                            </div>

                            <div class="grupo" id="grupo_perdidas">
                                <label for="perdidas">Pérdidas de insumos</label>
                                <div class="inputs">
                                    <input type="number" name="perdidas" id="perdidas" class="f__input form-control m-1" placeholder="Perdidas de insumos" value="<?php echo $alm->perdidas; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese un numero.</p>
                            </div>

                            <div class="grupo" id="grupo_proveedor">
                                <label for="">Proveedor</label>
                                <div class="inputs">
                                    <select name="proveedor" id="proveedor"class="f__input form-control m-1">
                                        <?php foreach($this->insumo->listarProveedor() as $td): ?>
                                            <option value="<?php echo $td->idProveedor ?>" <?php echo $td->idProveedor == $alm->idProveedor ? 'selected' : '' ?>> <?php echo $td->nombreProveedor ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese proveedor</p>
                            </div>

                            <div class="grupo" id="grupo_estado">
                                <label for="estado">Estado</label>
                                <div class="inputs">
                                    <select name="estado" id="estado" class="f__input form-control m-1">
                                        <option value="inactivo">Inactivo</option>
                                        <option value="activo">Activo</option>
                                    </select>
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese estado.</p>
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
