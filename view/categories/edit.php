<?php
view('static/header');
?>

<div class="wrapper">


    <nav class="main-header navbar navbar-expand navbar-white navbar-light">


        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= URL . 'login/logout' ?>" role="button">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>

        </ul>
    </nav>


    <?php view('static/sidebar') ?>


    <div class="content-wrapper p-5">

        <div class="content">
            <div class="container-fluid">
                <?php
                $error = get_session('error');
                echo $error ? '<div class="alert alert-' . $error['type'] . ' alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . '<h5><i class="icon fas fa-ban"></i>'.lang('Alert!').'</h5>'
                    . $error['message']

                    . '</div>' : null;
                ?>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><?= lang("Update Category") ?></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title"><?= lang('Category Title') ?></label>
                                        <input type="text" class="form-control" name="title" value="<?=$data['title']?>" id="title" placeholder="<?= lang('Please, enter category title...') ?>">
                                        <input type="hidden" class="form-control" name="id" value="<?=$data['id']?>" id="id">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="submit" value="1" class="btn btn-primary"><?= lang('Update') ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php view('static/footer.php'); ?>
</div>


<script src="<?= assets('plugins/jquery/jquery.min.js') ?>"></script>

<script src="<?= assets('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?= assets('js/adminlte.min.js') ?>"></script>


</body>

</html>