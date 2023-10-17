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
    <div class="website-info">
      <div class="website-info__img-container">
        <a href="<?php echo site_url(); ?>">
          <img src="<?php echo get_template_directory_uri() . '/images/brand.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </a>
      </div>
      <div class="website-info__contact-deets">
        <p>
          For Strategic And Experienced Legal Guidance, <br>
          Call The Eleff Law Group At <span><a href="tel:+1-800-765-2662">800-765-2662</a></span>
        </p>
      </div>
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