<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div>
            <h1>Hola</h1>
        </div>
        <form method="post" action="?in=informe">
            <div>
                <input type="submit" class="btn btn-danger m-auto" name="insumo" value="Informe de Insumos">
                <input type="submit" class="btn btn-danger m-auto" name="producto" value="Informe de Prodcutos">
                <input type="submit" class="btn btn-danger m-auto" name="proveedor" value="Informe de Proveedores"> <br>
                <input type="submit" class="btn btn-danger m-auto" name="" value="Informe de Insumo producto final">
            </div>
            <?php

                $fecha = date('d-m-Y');

                echo $fecha;

            ?>
            <input type="checkbox" name="" id="" value="afadfa">
            <div>
                <select name="tiempo" id="">
                    <option value disabled selected>Escoge el tiempo del informe</option>
                    <option value="1">dia</option>
                    <option value="2">Semana</option>
                    <option value="3">Mes</option>
                </select>
            </div>
        </form>
    </div>
</div>