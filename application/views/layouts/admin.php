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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/admin.css'); ?>">
    <!-- CSS auxiliares -->
    <?php echo $this->layout->css; ?>
    <!-- fin auxiliares -->
  </head>
  <body class="app header-fixed sidebar-show sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
      <!-- Header content here -->
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" data-toggle="sidebar-show" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img alt="Admin" class="navbar-brand-full" height="25" src="" width="89">
        <img alt="A" class="navbar-brand-minimized" height="30" src="" width="30">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" data-toggle="sidebar-lg-show" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">5</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a aria-expanded="false" aria-haspopup="true" class="nav-link" data-toggle="dropdown" href="#" role="button">
            <img alt="admin@bootstrapmaster.com" class="img-avatar" src="<?php echo base_url('dist/img/avatars/6.jpg'); ?>">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-shield"></i> Lock Account
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" data-toggle="aside-menu-lg-show" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" data-toggle="aside-menu-show" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <!-- Sidebar content here -->
        <div class="sidebar-header p-3">
          <img src="" class="img-fluid" alt="">
        </div>
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon-magnifier"></i> Inicio
              </a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer text-white" type="button"></button>
      </div>
      <main class="main" id="admin">
        <!-- Main content here -->
        <div class="container-fluid">
          <!-- Contenido y carga dinámica de las vistas -->
          <?php $this->load->view($content_for_layout); ?>
        </div>
      </main>
      <aside class="aside-menu">
        <!-- Aside menu content here -->
      </aside>
    </div>
    <footer class="app-footer">
      <!-- Footer content here -->
      <span class="ml-auto">© 2019 - Todos los derechos reservados.</span>
      <span class="mr-auto ">Powered by - <strong>CoreUI</strong></span>
    </footer>
    <!-- jQuery, Popper, Bootstrap, Libreries JS, Main JS (Do not remove) and Waypoints-->
    <script src="<?php echo base_url('dist/js/admin.js'); ?>"></script>
    <!-- JS auxiliares -->
    <?php echo $this->layout->js; ?>
    <!-- fin auxiliares -->
  </body>
</html>