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
    <main id="app">
      <!-- Contenido y carga dinámica de las vistas -->
      <?php $this->load->view($content_for_layout); ?>
    </main>
    <!-- jQuery, Popper, Bootstrap, Libreries JS, Main JS (Do not remove) and Waypoints-->
    <script src="<?php echo base_url('dist/js/app.js'); ?>"></script>
    <!-- JS auxiliares -->
    <?php echo $this->layout->js; ?>
    <!-- fin auxiliares -->
  </body>
</html>