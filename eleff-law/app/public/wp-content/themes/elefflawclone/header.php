<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Document</title> -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div>
      <div>Logo</div>
      <div>Deets</div>
    </div>
    <nav>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header-menu-location',
      ));
      ?>
    </nav>
  </header>
  <main>