<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <table>
            <thead>
                <tr>
                    <th> <a href="?v=crear" class="btn btn-primary" value="">Crear nuevo usuario</a> </th>
                </tr>
                <tr>
                    <th>Id Usuario</th>
                    <th>Id rol</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Clave</th>
                    <th>Estado</th>
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
                    <td><?php echo $ac->clave; ?></td>
                    <td><?php echo $ac->estado; ?></td>
                    <td>
                        <a href=""></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

