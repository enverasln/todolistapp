<?php
view('static/header');
?>
<div class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>TODO</b>APP</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><?= lang('Sign In Message') ?></p>
                <?php
                    $error = get_session('error');
                    echo $error ? '<div class="alert alert-'.$error['type'].'">'.$error['message'].'</div>' : null;
                ?>
                <form action="<?= URL . 'login' ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="<?=get_session('post')['email'] ?? ''?>" class="form-control" placeholder="<?= lang('Email') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" value="<?=get_session('post')['password'] ?? ''?>" class="form-control" placeholder="<?= lang('Password') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="submit" class="btn btn-primary btn-block w-100"><?= lang('Sign In') ?></button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</div>



<!-- jQuery -->
<script src="<?= assets('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= assets('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= assets('js/adminlte.min.js') ?>"></script>
</body>

</html>