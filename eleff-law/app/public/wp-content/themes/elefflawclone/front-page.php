<?php
get_header();
?>

<div class="front-page-banner">
  <div class="front-page-banner__content">
    <img class="front-page-banner__content__img" src="<?php echo get_template_directory_uri() . '/images/attorney-1.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
    <div class="front-page-banner__content__text">
      <h1 class="heading">
        5-Star Rated With Over <br>
        <span>40 YEARS OF EXPERIENCE</span>
      </h1>
      <p class="paragraph">Attorney Susan Eleff gets the job done!</p>
      <a href="<?php echo site_url('/contact'); ?>">
        <button class="button">SCHEDULE A CONSULTATION WITH SUSAN</button>
      </a>
    </div>
  </div>
</div>

<div class="front-page">
  <?php
  include('components/front-page-section-one.php');
  include('components/front-page-section-two.php');
  include('components/front-page-section-three.php');
  include('components/front-page-section-four.php');
  ?>
</div>

<?php
get_footer();
?>