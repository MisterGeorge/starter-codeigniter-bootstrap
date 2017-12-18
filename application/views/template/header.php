<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Título del Proyecto</title>
    <?php
      $meta = array(
        array('name' => 'author', 'content' => 'nombre del autor'),
        array('name' => 'description', 'content' => 'Descripción de tu app.'),
        array('name' => 'application-name', 'content' => 'nombre de tu app'),
        array('name' => 'generator', 'content' => 'nombre de tu SMD o frameword en caso que lo uses'),
        array('name' => 'keywords', 'content' => 'Palabras claves separadas por coma'),
        array('name' => 'robots', 'content' => 'index, follow'),
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
  </head>
  <body>