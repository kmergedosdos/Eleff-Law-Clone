<?php

function lawgroup_files()
{
  wp_enqueue_script('lawgroup-main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,900&display=swap');
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
  wp_enqueue_style('lawgroup_main_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'lawgroup_files');

function lawgroup_features()
{
  add_theme_support('title-tag');
  register_nav_menu('header-menu-location', 'Header Menu Location');
  register_nav_menu('sidebar-menu-location', 'Sidebar Menu Location');
}

add_action('after_setup_theme', 'lawgroup_features');

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');

// PHPMailer details
add_action('phpmailer_init', 'send_smtp_email');
function send_smtp_email($phpmailer)
{
  $phpmailer->isSMTP();
  $phpmailer->Host = SMTP_SERVER;
  $phpmailer->SMTPAuth = SMTP_AUTH;
  $phpmailer->Port = SMTP_PORT;
  $phpmailer->Username = SMTP_USERNAME;
  $phpmailer->Password = SMTP_PASSWORD;
  $phpmailer->SMTPSecure = SMTP_SECURE;
  $phpmailer->From = SMTP_FROM;
  $phpmailer->FromName = SMTP_NAME;
}
