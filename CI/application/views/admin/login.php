<div class="container">
    <form action="<?= site_url('api_admin/login') ?>" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h5>Login</h5>
            </div>
            <div class="card-block">
                <div class="col-12">Usuario</div>
                <input type="text" name="usuario" class="form-control">
            </div>
            <div class="card-block">
                <div class="col-12">Password</div>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="card-block">
                <input type="submit" value="Iniciar Sesion">
            </div>
        </div>
    </form>
</div>