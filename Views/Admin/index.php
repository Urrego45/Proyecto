<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Administrador</title>
</head>
<body>
<table class="table table-striped table-dark m-5">
        <thead>
            <tr>
                <th class="col" colspan="9">
                    <center><a href="?v=crear" class="btn btn-primary btn-block">Crear</a></center>
                </th>
            </tr>
            <tr>
                <th class="col">Id usuario</th>
                <th class="col">Id rol</th>
                <th class="col">Nombre</th>
                <th class="col">Apellido</th>
                <th class="col">Telefono</th>
                <th class="col">Email</th>
                <th class="col">Clave</th>
                <th class="col">Estado Cuenta</th>
                <th class="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php /* foreach($this->usuario->listar() as $ac): */ ?>
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
                        <a href="?v=editar&idUsuario=<?php echo $ac->idUsuario; ?>" class="btn btn-danger">Editar</a>
                    </td>
                </tr>
            <?php /* endforeach; */?>
        </tbody>
    </table>
</body>
</html>