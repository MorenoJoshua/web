<body class="">
<div class="container-fluid">
    <div class="col-lg-12 offset-lg-0 col-xl-10 col-xl-10 offset-xl-1">
        <div class="row ">
            <div class="eyg-header">Panel de administreishon</div>
        </div>
    </div>
    <div class="col-12">
        <table class="table table-hover d-table-cell table-responsive">
            <thead>
            <tr>
                <th>Imagen</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Peso</th>
                <th>Tipo</th>
                <th>Costo</th>
                <th>Orden</th>
                <th colspan="2">Funciones</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($productos as $producto) {

                $imagen = isset($producto['imagen']) ? $producto['imagen'] : 'placeholder';
                ?>
                <tr>
                    <td class="embed-responsive embed-responsive-4by3 col-3">
                        <img src="<?=base_url()?>assets/img/<?= $imagen ?>.jpg" alt="" class="embed-responsive-item">
                    </td>
                    <td>
                        <?= $producto['marca'] ?>
                    </td>
                    <td>
                        <?= $producto['modelo'] ?>
                    </td>
                    <td>
                        <?= $producto['ano'] ?>
                    </td>
                    <td>
                        <?= $producto['tonnaje'] ?>
                    </td>
                    <td>
                        <?= $producto['tipo'] ?>
                    </td>
                    <td>
                        <?= $producto['costo'] ?>
                    </td>
                    <td>
                        <form action="<?= site_url('api_admin/editar_orden/') . $producto['id'] ?>" method="post">
                            <div class="input-group">
                                <input type="number" min="0" max="9999" value="<?= $producto['orden'] ?>" name="orden"
                                       class="form-control form-control-sm">
                                <div class="input-group-btn">
                                    <input type="submit" class="btn btn-sm btn-info" value="&circlearrowleft;">

                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="btn-sm btn-danger"
                             onclick="window.location = '<?= site_url('/api_admin/eliminar/') ?><?= $producto['id'] ?>'">
                            Eliminar
                        </div>
                    </td>
                    <td>
                        <div class="btn-sm btn-warning"
                             onclick="window.location = '<?= site_url('/admin/editar/') ?><?= $producto['id'] ?>'">
                            Editar
                        </div>
                    </td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td colspan="8"></td>
                <td><a href="<?=site_url('/simple/crear_vehiculo')?>" class="btn btn-success btn-sm">Crear</a></td>
            </tr>
            </form>
            </tbody>
        </table>
    </div>
</div>
