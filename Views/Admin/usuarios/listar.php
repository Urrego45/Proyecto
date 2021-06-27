<div class="card w-75 p-0 my-5 mx-auto">
        <table id="tabla" name="tabla" border="1" cellspacing="5" cellpadding="5">
            <thead>
                <tr >
                    <th colspan="9"> <center> <a href="?v=crear" class="btn btn-primary" value="">Créar usuario </a></center> </th>
                </tr>
                <tr>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($this->usuario->listar() as $ac): ?>
                <tr>
                    <td><?php echo $ac->idUsuario; ?></td>
                    <td><?php echo $ac->idRol; ?></td>
                    <td><?php echo $ac->nombres; ?></td>
                    <td><?php echo $ac->apellidos; ?></td>
                    <td><?php echo $ac->telefono; ?></td>
                    <td><?php echo $ac->email; ?></td>
                    <td><?php echo $ac->estado; ?></td>
                    <td>
                        <a href="?v=editar&id=<?php echo $ac->idUsuario; ?>" class="btn btn-block btn-danger">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>

