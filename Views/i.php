<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>Ingrese el insumo.</b>

    <form action="?i=aumenta" method="post">
    
    <select name="insumo" id="">
        <option selected diseable>-- Seleccione --</option>
        <?php foreach($this->insumo->listar() as $ac): ?>
            <option value="<?php echo $ac->idInsumo; ?>"><?php echo $ac->nombre; ?></option>
        <?php endforeach; ?>
    </select>
    
    </form>
</body>
</html>