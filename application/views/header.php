<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portafolio Angel Gavilanez - Index</title>
  <meta name="robots" content="noindex, nofollow">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>/plantilla/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>/plantilla/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>/plantilla/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/plantilla/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/plantilla/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/plantilla/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>/plantilla/assets/css/style.css" rel="stylesheet">

  

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color: black;">
    <div class="container d-flex align-items-center justify-content-between" style="">

      <h1 class="logo"><a href="<?php echo site_url(); ?>">Portafolio</a></h1>
 
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php if($activePage == 'Inicio') echo 'active'; ?>" href="<?php echo site_url(); ?>">Inicio</a></li>
          <li><a class="nav-link scrollto <?php if($activePage == 'Sobre Mí') echo 'active'; ?>" href="<?php echo site_url(); ?>/acercaDeMi/acercaDeMi">Sobre Mí</a></li>

          <li><a class="nav-link scrollto <?php if($activePage == 'Servicios') echo 'active'; ?>" href="<?php echo site_url(); ?>/servicios/servicios">Servicios</a></li>
          
          <li><a class="nav-link scrollto <?php if($activePage == 'Proyectos') echo 'active'; ?>" href="<?php echo site_url(); ?>/proyectos/proyectos">Proyectos</a></li>
          <li><a class="nav-link scrollto <?php if($activePage == 'Contáctame') echo 'active'; ?>" href="<?php echo site_url(); ?>/contactaMe/contactaMe">Contáctame</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  

  <main id="main">
    