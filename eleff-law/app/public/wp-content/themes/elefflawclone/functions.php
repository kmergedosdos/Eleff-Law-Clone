<?php

function lawgroup_files()
{
  wp_enqueue_script('lawgroup-main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,900&display=swap');
  wp_enqueue_style('fontawesome', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css');
  wp_enqueue_style('lawgroup_main_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'lawgroup_files');

function lawgroup_features()
{
  add_theme_support('title-tag');
  register_nav_menu('header-menu-location', 'Header Menu Location');
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
