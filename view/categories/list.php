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

                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        $error = get_session('error');
                        echo $error ? '<div class="alert alert-' . $error['type'] . ' alert-dismissible">'
                            . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                            . '<h5><i class="icon fas fa-ban"></i>' . lang('Alert!') . '</h5>'
                            . $error['message']

                            . '</div>' : null;
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Kategory Listesi</h3>

                                <div class="card-tools">
                                    <a href="<?= url('category/add') ?>" class="btn btn-sm btn-info"><?= "Add New Category" ?></a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Başlık</th>
                                            <th>Oluşturma Tarihi</th>
                                            <th>Güncelleme Tarihi</th>
                                            <th style="width: 120px">İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $key => $value) : ?>
                                            <tr>
                                                <td><?= $key + 1 ?></td>
                                                <td><?= $value['title'] ?></td>
                                                <td><?= $value['created_date'] ?></td>
                                                <td><?= $value['updated_date'] ?></td>
                                                <td>
                                                    <a class="btn btn-xs btn-danger" href="<?= url('category/remove/' . $value['id']) ?>"><?= lang('Remove') ?></a>
                                                    <a class="btn btn-xs btn-warning" href="<?= url('category/edit/' . $value['id']) ?>"><?= lang('Edit') ?></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
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