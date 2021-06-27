<div class="card w-75 p-0 my-5 mx-auto">
        <table border="1" cellspacing="5" cellpadding="5">
            <thead>
                <tr >
                    <th colspan="9"> <center> <a href="?v=crearPr" class="btn btn-primary" value="">Nuevo Producto </a></center> </th>
                </tr>
                <tr>
                    <th>Producto</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Ventas</th>
                    <th>Estado</th>
                    <th colspan="2"> <center> Acciones </center></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($this->productof->listar() as $ac): ?>
                <tr>
                    <td><?php echo $ac->idProductoFinal; ?></td>
                    <td><?php echo $ac->nombre; ?></td>
                    <td>$ <?php echo $ac->precio; ?></td>
                    <td><?php echo $ac->ventas; ?></td>
                    <td><?php echo $ac->estado; ?></td>
                    <td>
                        <a href="?v=editarPr&id=<?php echo $ac->idProductoFinal; ?>" class="btn btn-block btn-danger">Editar</a>

                        

                    </td>
                    <td>
                    <a href="?v=detalles&id=<?php echo $ac->idProductoFinal; ?>" class="btn btn-block btn-danger">Detalles</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>



