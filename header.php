<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    wp_head();
    ?>
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(). '/dist/css/app.css' ?>">
  </head>
  <body <?php body_class(); ?>>
    <!-- #region Header -->
    <header>
      <!-- logo -->
      <div class="logo">
      <?php
      if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
      }
      ?>
      </div>
      <!-- menu trigger -->
      <div class="burger menu-trigger">
        <span class="bar"></span>
        <span class="bar double">
          <span></span>
          <span></span>
        </span>
        <span class="bar"></span>
      </div>
      <!-- header bar desktop -->
      <div class="header-bar-desktop">
        <div class="header-bar-links">
          <a href="#">Contact</a>
          <a href="https://hotels.cloudbeds.com/reservation/lsYVLn" target="_blank">Reserve now</a>
          <a href="https://www.instagram.com/timberwolfcabin_kv/">
            <box-icon color="currentColor" size="1.4rem" type="logo" name="instagram"></box-icon>
          </a>
        </div>
      </div>
      <!-- nav -->
      <div class="nav-overlay">
        <div class="nav-container">
          <!-- header bar -->
          <div class="header-bar">
            <div class="header-bar-links">
              <a href="#">Contact</a>
              <a href="https://hotels.cloudbeds.com/reservation/lsYVLn" target="_blank">Reserve now</a>
              <a href="https://www.instagram.com/timberwolfcabin_kv/">
                <box-icon color="currentColor" type="logo" name="instagram"></box-icon>
              </a>
            </div>
          </div>
          <nav class="main-nav">
            <?php
            wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
            ?>
          </nav>
        </div>
      </div>
    </header>
    <!-- endregion Header -->

    