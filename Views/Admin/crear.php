<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container bg-primary">
            <div class="">
                <div class="">
                    <h2>Registrar usuario</h2>
                </div>
                <form action="?u=crear" method="post">
                    <div class="row">
                        <div class="col m-3">
                            <input type="text" name="nombre" id="" class="form-control m-1" placeholder="Nombre">
                            <input type="text" name="apellido" class="form-control m-1" placeholder="Apellido">
                            <input type="number" name="telefono" id="" class="form-control m-1" placeholder="Telefono">
                            <input type="email" name="email" id="" class="form-control m-1" placeholder="Email">
                        </div>
                        <div class="col m-3">
                            <input type="password" name="pass" id="" class="form-control m-1" placeholder="PAss">
                            <select name="rol" id="" class="form-control m-1">
                                <?php foreach($this->usuario->listarRol() as $td): ?>
                                <option value="<?php echo $td->idRol ?>"> <?php echo $td->rol ?> </option>
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

