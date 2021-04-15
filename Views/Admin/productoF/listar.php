<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <table>
            <thead>
                <tr >
                    <th colspan="9"> <center> <a href="?v=crearPr" class="btn btn-primary" value="">Nuevo Producto </a></center> </th>
                </tr>
                <tr>
                    <th>Id Producto</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Ventas</th>
                    <th>Estado</th>
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
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

