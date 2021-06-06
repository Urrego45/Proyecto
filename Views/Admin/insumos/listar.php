<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        
        <table>
            <thead>
                <tr >
                    <th colspan="6"> <center> <a href="?v=crearI" class="btn btn-primary" value="">Nuevo insumo </a></center> </th>
                    <th colspan="3">
                        <input type="button" value="Ingresar mas insumos" class="btn btn-block btn-primary" id="aumentarInsumo">
                    </th>
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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($this->insumo->listar() as $ac): ?>
                <tr>
                    <td><?php echo $ac->idInsumo; ?></td>
                    <td><?php echo $ac->idProveedor; ?></td>
                    <td><?php echo $ac->nombre; ?></td>
                    <td>$ <?php echo $ac->precio; ?></td>
                    <td><?php echo $ac->vencimiento; ?></td>
                    <td><?php echo $ac->stockInicial; ?></td>
                    <td><?php echo $ac->stock; ?></td>
                    <td><?php echo $ac->entradas; ?></td>
                    <td><?php echo $ac->perdidas; ?></td>
                    <td><?php echo $ac->estado; ?></td>
                    <td>
                        <a href="?v=editarI&id=<?php echo $ac->idInsumo; ?>" class="btn btn-block btn-danger">Editar</a>
                    </td><!-- 
                    <td>
                        <a href="?i=aumentarInsumo&id=<?php echo $ac->idInsumo; ?>" class="btn btn-block btn-danger">+</a>
                    </td> -->
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!-- <script  src="http://localhost/Emi/assets/js/aumentarInsumo.js"></script>
 --><script>
const nuevoInsumo = document.getElementById("aumentarInsumo")

nuevoInsumo.addEventListener('click', e =>{
    Swal.fire({
        icon: 'info',
        title: 'Ingresar nuevos insumos a ""',
        html: '<form action="?i=aumenta" method="post" name="insumo"><input type="hidden" name="ad"><select name="insumo" id=""><option selected diseable>-- Seleccione --</option><?php foreach($this->insumo->listar() as $ac): ?><option value="<?php echo $ac->idInsumo; ?>"><?php echo $ac->nombre; ?></option><?php endforeach; ?> </select><input type="text" name="nuevos" id=""></form>',
        backdrop: true,
    }).then((result) => {
        if (result.value) {
            document.insumo.submit();
        }
        return false;
  })
})
</script>

