<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <h1>Detalles del producto "<?php echo ucwords($alm->nombre); ?>".</h1>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        El producto "<?php echo ucwords($alm->nombre); ?>" tiene como  "<?php echo $alm->idProductoFinal; ?>"
                    </div>
                    <br>
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
                                        <td><?php echo $ac->idInsumo; ?></td>
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
