<?php
get_header();
?>

<div class="front-page-banner">
  <div class="front-page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/banner-background1.jpg'); ?>)"></div>
  <div class="front-page-banner__content">
    <img class="front-page-banner__content__img" src="<?php echo get_template_directory_uri() . '/images/attorney-1.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
    <div class="front-page-banner__content__text">
      <h1 class="heading">
        5-Star Rated With Over <br>
        <span>40 YEARS OF EXPERIENCE</span>
      </h1>
      <p class="paragraph">Attorney Susan Eleff gets the job done!</p>
      <button class="button">SCHEDULE A CONSULTATION WITH SUSAN</button>
    </div>
  </div>
</div>

<?php
get_footer();
?>