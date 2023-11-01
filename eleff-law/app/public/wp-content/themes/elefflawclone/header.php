<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Document</title> -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  $websiteLogoImgUrl = get_template_directory_uri() . '/images/brand.png';
  $contactNumber = "800-765-2662";

  include('components/scroll-to-top-floating-button.php');
  ?>

  <header>
    <div class="desktop-header">
      <div class="website-info">
        <div class="website-info__img-container">
          <a href="<?php echo site_url(); ?>">
            <img src="<?php echo $websiteLogoImgUrl; ?>" alt="<?php echo get_bloginfo('name'); ?>">
          </a>
        </div>
        <div class="website-info__contact-deets">
          <p>
            For Strategic And Experienced Legal Guidance, <br>
            Call The Eleff Law Group At <span><a href="tel:+1-<?php echo $contactNumber; ?>"><?php echo $contactNumber; ?></a></span>
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
    </div>

    <div class="mobile-header">
      <div class="logo-menu">
        <div class="logo-menu__logo">
          <a href="<?php echo site_url(); ?>">
            <img src="<?php echo $websiteLogoImgUrl; ?>" alt="<?php echo get_bloginfo('name'); ?>">
          </a>
        </div>
        <div class="logo-menu__menu">
          <button class="open">
            <i class="fa-solid fa-bars"></i>
          </button>
          <button class="close">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
      </div>

      <nav class="hidden">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'header-menu-location',
        ));
        ?>
      </nav>

      <div class="contact button">
        <a href="tel:+1-<?php echo $contactNumber; ?>">
          <i class="fa-solid fa-phone"></i> Call
        </a>
      </div>
    </div>
  </header>

  <main>