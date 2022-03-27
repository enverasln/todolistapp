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
                    <div class="col-lg-4">
                        <h3>Yapılacaklar</h3>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>

                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                </p>

                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3>Devam Edenler</h3>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>

                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                </p>

                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3>Bitenler</h3>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>

                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                </p>

                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <?php view('static/footer.php');?>
</div>


<script src="<?= assets('plugins/jquery/jquery.min.js') ?>"></script>

<script src="<?= assets('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?= assets('js/adminlte.min.js') ?>"></script>
</body>

</html>