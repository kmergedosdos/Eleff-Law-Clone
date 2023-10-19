<?php
get_header();

$parentPageId = wp_get_post_parent_id(get_the_ID());
$parentPageTitle = get_the_title($parentPageId);
$parentPageUrl = get_permalink($parentPageId);

while (have_posts()) {
  the_post();
?>

  <?php include('components/page-banner.php') ?>

  <div class="breadcrumb">
    <p>
      <span><a href="<?php echo site_url(); ?>">Home</a></span>
      <?php if ($parentPageId) { ?>
        <span><a href="<?php echo $parentPageUrl; ?>"><?php echo $parentPageTitle ?></a></span>
      <?php } ?>
      <span><?php the_title(); ?></span>
    </p>
  </div>

  <div class="page-content">
    <?php include('components/sidebar.php') ?>

    <div class="generic-content">
      <?php the_content(); ?>
    </div>
  </div>

<?php
}
get_footer();
?>