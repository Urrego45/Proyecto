<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container">
            <div class="">
                <div class="">
                    <h2>Registrar Insumo</h2>
                </div>
                <form action="?i=crear" method="post" id="formulario">
                    <div class="row">
                        <div class="col m-3">
                            <div class="grupo" id="grupo_nombre">
                                <label for="">Nombre de insumo</label>
                                <div class="inputs">
                                    <input type="text" name="nombre" id="nombre" class="f__input form-control m-1" placeholder="Nombre insumo">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Nombre incorrecto. solo se permiten letras (A-Z).</p>
                            </div>

                            <div class="grupo" id="grupo_precio">
                                <label for="precio">Precio</label>
                                <div class="inputs">
                                    <input type="text" name="precio" id="precio" class="f__input form-control m-1" placeholder="Precio">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese un numero.</p>
                            </div>

                            <div class="grupo" id="grupo_fecha">
                                <label for="">Fecha de vencimiento</label>
                                <div class="inputs">
                                    <input type="date" name="fechaV" id="fecha" class="f__input form-control m-1" placeholder="Fecha vencimiento">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Fecha incorrecta. ingresa una fehca posterior al dia de hoy.</p>
                            </div>

                            <div class="grupo" id="grupo_stockI">
                                <label for="stockI">Stocl inicial</label>
                                <div class="inputs">
                                    <input type="number" name="stockI" id="stockI" class="f__input form-control m-1" placeholder="Stock inicial">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese un numero.</p>
                            </div>

                            <div class="grupo" id="grupo_stockA">
                                <label for="stockA">Stock actual</label>
                                <div class="inputs">
                                    <input type="number" name="stockA" id="stockA" class="f__input form-control m-1" placeholder="Stock actual">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese un numero.</p>
                            </div>

                        
                        </div>
                        <div class="col m-3">

                            <div class="grupo" id="grupo_entrada">
                                <label for="entrada">Entradasd de insumos</label>
                                <div class="inputs">
                                    <input type="number" name="entrada" id="entrada" class="f__input form-control m-1" placeholder="Entradas de insumos">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese un numero.</p>
                            </div>

                            <div class="grupo" id="grupo_perdidas">
                                <label for="perdidas">Perdidas de insumos</label>
                                <div class="inputs">
                                    <input type="number" name="perdidas" id="perdidas" class="f__input form-control m-1" placeholder="Perdidas de insumos">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese un numero.</p>
                            </div>


                            <div class="grupo" id="grupo_proveedor">
                                <label for="proveedor">Proveedor</label>
                                <div class="inputs">
                                    <select name="proveedor" id="proveedor" class="f__input form-control m-1">
                                        <?php foreach($this->insumo->listarProveedor() as $td): ?>
                                            <option value="<?php echo $td->idProveedor ?>"> <?php echo $td->nombreProveedor ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">escoja un proveedor</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col m-3">
                        <input type="submit" value="Registrar" class="btn btn-danger m-2">
                    </div>
                </form>
                </form>
            </div>
        </div>
    </div>
</div>


<script  src="http://localhost/Emi/assets/js/validacionInsumos.js"></script>