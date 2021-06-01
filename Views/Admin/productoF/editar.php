<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container">
            <div class="">
                <div class="">
                    <h2>Editar Producto</h2>
                </div>

                <form action="?pf=crear" method="post" id="formulario">
                    <div class="row">
                        <div class="col m-3">
                            <input type="hidden" name="ad">
                            <input type="hidden" name="idU" value="<?php echo $alm->idProductoFinal; ?>">

                            <div class="grupo" id="grupo_nombre">
                            <label for="nombre">Nombre</label>
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

                            <div class="grupo" id="grupo_ventas">
                                <label for="ventas">Ventas</label>
                                <div class="inputs">
                                    <input type="number" name="ventas" id="ventas" class="f__input form-control m-1" placeholder="ventas" value="<?php echo $alm->ventas; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Ingrese un numero.</p>
                            </div>

                            <div class="grupo" id="grupo_estado">
                                <label for="">estado</label>
                                <div class="inputs"> 
                                    <select name="estado" id="" class="form-control m-1">
                                        <option value="0">inactivo</option>
                                        <option value="1">activo</option>
                                    </select>
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">ingrese un estado.</p>
                            </div>

                            <h1 for="insumo">Con que insumos esta echo este producto?</h1>
                            <br>
                            <input type="button" value="+" class="btn btn-primary" id="agregar"> 

                            <?php  
                            
                            for($i = 0; $i < $this->productof->contar($alm->idProductoFinal); $i++): ?>
                                <div id="contenedor">

                                    <div id="clonacion" class="row p-2">
                                        <div class="grupo col" id="grupo_insumo">
                                            
                                            <div class="inputs"> 
                                                <select name="insumo[]" id="insumo" class="form-control m-1">
                                                    <option  diseable>-- Seleccione --</option>
                                                    <?php  foreach($this->productof->listarInsumos() as $td): ?>
                                                        <option selected value="<?php echo $alm->idInsumo;?>"><?php echo $td->nombre; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <i class="estado fas fa-times-circle"></i>
                                            </div>
                                            <p class="error">ingrese un insumo.</p>
                                        </div>

                                        <div class="grupo col" id="grupo_entrada">
                                            <div class="inputs">
                                                <input type="number" class="f__input form-control m-1" name="cantidadI[]" id="cantidadI" value="<?php echo $alm->cantidad; ?>">
                                                <i class="estado fas fa-times-circle"></i>
                                            </div>
                                            <p class="error">Solo numeros mayores a 0</p>
                                        </div>

                                        <div class="grupo col" id="grupo_entrada">
                                            <input type="button" value="Eliminar" class="btn btn-danger" onclick="quitar(this)">
                                        </div>
                                    </div>
                                </div>

                            <?php endfor; ?>
                            
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
