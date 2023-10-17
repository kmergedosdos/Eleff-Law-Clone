<?php
get_header();

$parentPageId = wp_get_post_parent_id(get_the_ID());

while (have_posts()) {
  the_post();
?>

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/banner-background1.jpg'); ?>)"></div>
    <div class="page-banner__content">
      <img class="page-banner__content__img" src="<?php echo get_template_directory_uri() . '/images/attorney-1.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
      <div class="page-banner__content__text">
        <p>
          Skilled Legal Counsel <br>
          <span>WITH PROVEN RESULTS</span>
        </p>
      </div>
    </div>
  </div>

  <div class="breadcrumb">
    <p>
      <span><a href="<?php echo site_url(); ?>">Home</a></span>
      <span><?php echo get_the_category_list('| '); ?></span>
      <span><?php the_title(); ?></span>
    </p>
  </div>

  <div class="generic-content">
    <h1><?php the_title(); ?></h1>
    <div>
      <p>
        On Behalf of
        <a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a> |
        <?php the_time('M j, Y'); ?> |
        <?php echo get_the_category_list(', '); ?>
      </p>
    </div>
    <?php the_content(); ?>
  </div>

<?php
}
get_footer();
?>