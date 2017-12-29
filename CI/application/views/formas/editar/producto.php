<div class="container-fluid">
    <div class="col-lg-12 offset-lg-0 col-xl-10 col-xl-10 offset-xl-1">
        <form action="<?= site_url('api_admin/editar/') . $producto['id'] ?>" method="post"
              enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <?php
                        if (isset($_GET['ok'])) {
                            ?>
                            <div class="col-12">
                                <div class="alert alert-success alert-dismissible">
                                    <strong>Actualizado</strong> El producto fue actualizado
                                    <a class="pull-right btn btn-sm btn-success text-white"
                                       href="<?= site_url('admin') ?>">Regresar</a>
                                </div>
                            </div>

                            <?php
                        }
                        ?>
                        <div class="col-6">
                            <div class=""><label for="marca">Marca</label></div>
                            <div class=""><input type="text" name="marca" id="marca" class="form-control"
                                                 value="<?= @$producto['marca'] ?>"></div>
                        </div>
                        <div class="col-6">
                            <div class=""><label for="modelo">Modelo</label></div>
                            <div class=""><input type="text" name="modelo" id="modelo" class="form-control"
                                                 value="<?= @$producto['modelo'] ?>"></div>
                        </div>
                        <div class="col-6">
                            <div class=""><label for="ano">Año</label></div>
                            <div class=""><input type="text" name="ano" id="ano" class="form-control"
                                                 value="<?= @$producto['ano'] ?>"></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class=""><label for="tonnaje">tonnaje</label></div>
                            <div class=""><input type="text" name="tonnaje" id="tonnaje" class="form-control"
                                                 value="<?= @$producto['tonnaje'] ?>"></div>
                        </div>
<!--                        <div class="col-6">
                            <div class=""><label for="pie">Pie</label></div>
                            <div class=""><input type="text" name="pie" id="pie" class="form-control"
                                                 value="<?/*= @$producto['pie'] */?>"></div>
                        </div>
-->                    </div>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class=""><label for="tipo">Tipo</label></div>
                            <div class=""><input type="text" name="tipo" id="tipo" class="form-control"
                                                 value="<?= @$producto['tipo'] ?>"></div>
                        </div>
                        <div class="col-6">
                            <div class=""><label for="orden">Orden</label></div>
                            <div class=""><input type="text" name="orden" id="orden" class="form-control"
                                                 value="<?= @$producto['orden'] ?>"></div>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="row">
                        <div class="col-6">
                            <div class=""><label for="imagen">Imagen</label></div>
                            <input type="file" name="imagen" class="form-control form-control-file form-control-sm"
                                   id="imagen">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-6 pt-3">
                            <input type="submit" class="btn btn-<?= isset($submitClass) ? $submitClass : 'success' ?>"
                                   value="<?= isset($submit) ? $submit : 'Enviar' ?>">
                            <div class="btn btn-danger" onclick="window.location = '<?= site_url('admin') ?>'">
                                Regresar
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img src="<?=base_url()?>/assets/img/<?= isset($producto['imagen']) ? $producto['imagen'] : 'placeholder' ?>.jpg"
                             alt=""
                             class="embed-responsive-item w-100">
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
