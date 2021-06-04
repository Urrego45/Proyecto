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
