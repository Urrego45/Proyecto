<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container">
            <div class="">
                <div class="">
                    <h2>Registrar Producto</h2>
                </div>
                <form action="?pf=crear" method="post" id="formulario">
                    <div class="row">
                        <div class="col m-3">
                            <input type="hidden" name="ad">
                            
                            <div class="grupo" id="grupo_nombre">
                                <label for="">Nombre</label>
                                <div class="inputs">
                                    <input type="text" name="nombre" id="" class="form-control m-1" placeholder="Nombre producto">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_precio">
                                <label for="">Precio</label>
                                <div class="inputs">
                                    <input type="number" name="precio" class="form-control m-1" placeholder="Precio">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_ventas">
                                <label for="">Ventas</label>
                                <div class="inputs">
                                    <input type="number" name="ventas" id="" class="form-control m-1" placeholder="ventas">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_checkbox">
                                <label for="">Con que insumos esta echo este producto?</label>
                                <div class="inputs"> 
                                    <?php  foreach($this->productof->listarInsumos() as $td): ?>
                                        <input type="checkbox" id="" name="insumo[]" value="<?php echo $td->idInsumo; ?>"> <?php echo $td->nombre ?>
                                        <input type="text" name="cantidadI[]" id="">
                                    <?php endforeach; ?>
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


