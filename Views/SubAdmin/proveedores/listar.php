<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <table>
            <thead>
                <tr>
                    <th>Id proveedor</th>
                    <th>Nombre proveedor</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($this->proveedor->listar() as $ac): ?>
                <tr>
                    <td><?php echo $ac->idProveedor; ?></td>
                    <td><?php echo $ac->nombreProveedor; ?></td>
                    <td><?php echo $ac->direccion; ?></td>
                    <td><?php echo $ac->telefono; ?></td>
                    <td><?php echo $ac->email; ?></td>
                    <td><?php echo $ac->estado; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

