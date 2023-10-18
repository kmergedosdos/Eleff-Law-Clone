<?php
get_header();

$parentPageId = wp_get_post_parent_id(get_the_ID());

while (have_posts()) {
  the_post();
?>

  <?php include('components/page-banner.php') ?>

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