<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <h1>Detalles del producto "<?php echo ucwords($alm->nombre); ?>".</h1>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <table border="2">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Insumos</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($this->productof->listarInsumoPF(intval($alm->idProductoFinal)) as $ac): ?>
                                    <tr>
                                        <td><?php echo $ac->idInsuProdF; ?></td>
                                        <td><?php echo $ac->nombre; ?></td>
                                        <td><?php echo $ac->cantidad; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
