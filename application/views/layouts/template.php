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
        array('name' => 'google-site-verification', 'content' => 'Codigo de verificación proporcionado por Google'),
        array('name' => 'msvalidate.01', 'content' => 'Codigo de verificación proporcionado por Bing si lo amerita'),
        array('name' => 'copyright', 'content' => 'Copyrigth'),
        array('name' => 'distribution', 'content' => 'global'),
        array('name' => 'x-ua-compatible', 'content' => 'ie=edge, chrome=1', 'type' => 'equiv')
      );
      echo meta($meta);
    ?>
    <!-- Custom Core CSS -->
    <link href="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('vendor/fortawesome/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" type="text/css">
    <!-- CSS auxiliares -->
      <?php echo $this->layout->css; ?> 
      <?php echo $this->layout->js; ?> 
    <!-- fin auxiliares -->
  </head>
  <body>
    <!-- Contenido y carga dinámica de las vistas -->
    <?php echo $content_for_layout; ?>
    <!-- FOOTER -->
    <footer id="footer">
        
    </footer>
    <!-- jQuery, Bootstrap, Libreries JS, Main JS (Do not remove) and Waypoints-->
    <script src="<?php echo base_url('vendor/components/jquery/jquery.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('vendor/twbs/bootstrap/dist/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>" type="text/javascript"></script>
  </body>
</html>