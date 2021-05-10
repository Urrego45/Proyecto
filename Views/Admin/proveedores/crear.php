<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container ">
            <div class="">
                <div class="">
                    <h2>Registrar proveedor</h2>
                </div>

                <form action="?p=crear" method="post" id="formulario">
                    <div class="row">
                        <div class="col m-3">
                        
                            <div class="grupo" id="grupo_nombre">
                                <label for="">Nombre</label>
                                <div class="inputs">
                                    <input type="text" name="nombre" id="" class="form-control m-1" placeholder="Nombre proveedor">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_direccion">
                                <label for="">Direccion</label>
                                <div class="inputs">
                                    <input type="text" name="direccion" class="form-control m-1" placeholder="Direccion">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_tel">
                                <label for="">Telefono</label>
                                <div class="inputs">
                                    <input type="number" name="telefono" id="" class="form-control m-1" placeholder="Telefono">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error"></p>
                            </div>

                            <div class="grupo" id="grupo_email"> 
                                <label for="">Email</label>
                                <div class="inputs">
                                    <input type="email" name="email" id="" class="form-control m-1" placeholder="Email">
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

