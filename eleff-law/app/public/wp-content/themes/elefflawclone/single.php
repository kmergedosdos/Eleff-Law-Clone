<?php
get_header();

while (have_posts()) {
  the_post();
?>

  <?php include('components/page-banner.php') ?>

  <div class="breadcrumb">
    <p>
      <span><a href="<?php echo site_url(); ?>">Home</a></span>
      <span>
        <a href="<?php echo get_term_link(get_the_category()[0]); ?>">
          <?php echo get_the_category()[0]->name; ?>
        </a>
      </span>
      <span><?php the_title(); ?></span>
    </p>
  </div>

  <div class="page-content">
    <?php include('components/blog-sidebar.php'); ?>

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
  </div>
<?php
}
get_footer();
?>