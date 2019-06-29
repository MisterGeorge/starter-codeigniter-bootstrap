<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title><?php echo $this->layout->getTitle(); ?></title>
        <?php
          $meta = array(
            array('name' => 'author', 'content' => $this->layout->getAuthor()),
            array('name' => 'description', 'content' => $this->layout->getDescripcion()),
            array('name' => 'application-name', 'content' => $this->layout->getApplicationName()),
            array('name' => 'generator', 'content' => $this->layout->getGenerator()),
            array('name' => 'keywords', 'content' => $this->layout->getKeywords()),
            array('name' => 'robots', 'content' => $this->layout->getRobots()),
            array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'),
            array('name' => 'apple-mobile-web-app-capable', 'content' => 'yes'),
            array('name' => 'google', 'content' => 'notranslate'),
            array('name' => 'copyright', 'content' => 'Copyrigth'),
            array('name' => 'distribution', 'content' => 'global'),
            array('name' => 'x-ua-compatible', 'content' => 'ie=edge, chrome=1', 'type' => 'equiv')
          );
          echo meta($meta);
        ?>
        <!-- Custom Core CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/app.css'); ?>">
        <!-- CSS auxiliares -->
        <?php echo $this->layout->css; ?>
        <!-- fin auxiliares -->
    </head>
    <body>
        <!-- Header -->
        <header class="header bg-dark">
            <div class="container">
                <!-- Fixed navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="#">Start Bootstrap</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <?= anchor('inicio', 'Inicio', 'class="nav-link"') ?>
                                </li>
                                <li class="nav-item">
                                    <?= anchor('blog', 'Blog', 'class="nav-link"') ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>
        <main id="app" class="container mt-5">
            <div class="row">
                <div class="col-12 col-lg-8 col-xl-8">
                    <h1 class="my-4">Page Heading
                        <small>Secondary Text</small>
                    </h1>
                    <!-- Contenido y carga dinámica de las vistas -->
                    <?php $this->load->view($content_for_layout); ?>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card my-4 mt-5">
                        <h5 class="card-header">Search</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- jQuery, Popper, Bootstrap, Libreries JS, Main JS (Do not remove) and Waypoints-->
        <script src="<?php echo base_url('dist/js/app.js'); ?>"></script>
        <!-- JS auxiliares -->
        <?php echo $this->layout->js; ?>
        <!-- fin auxiliares -->
    </body>
</html>