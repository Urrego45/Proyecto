<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <table>
            <thead>
                <tr >
                    <th colspan="9"> <center> <a href="?v=crearIS" class="btn btn-primary" value="">Nuevo insumo </a></center> </th>
                </tr>
                <tr>
                    <th>Id Insumo</th>
                    <th>Id Proveedor</th>
                    <th>Nomnbre</th>
                    <th>Precio</th>
                    <th>Vencimiento</th>
                    <th>Stock inicial</th>
                    <th>Stock</th>
                    <th>Entradas</th>
                    <th>Perdidads</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($this->insumo->listar() as $ac): ?>
                <tr>
                    <td><?php echo $ac->idInsumo; ?></td>
                    <td><?php echo $ac->idProveedor; ?></td>
                    <td>$ <?php echo $ac->nombre; ?></td>
                    <td><?php echo $ac->precio; ?></td>
                    <td><?php echo $ac->vencimiento; ?></td>
                    <td><?php echo $ac->stockInicial; ?></td>
                    <td><?php echo $ac->stock; ?></td>
                    <td><?php echo $ac->entradas; ?></td>
                    <td><?php echo $ac->perdidas; ?></td>
                    <td><?php echo $ac->estado; ?></td>
                    <td>
                        <a href="?v=editarIS&id=<?php echo $ac->idInsumo; ?>" class="btn btn-block btn-danger">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

