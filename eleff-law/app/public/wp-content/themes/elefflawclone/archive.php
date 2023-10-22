<?php
get_header();

$parentPageId = wp_get_post_parent_id(get_the_ID());
$parentPageTitle = get_the_title($parentPageId);
$parentPageUrl = get_permalink($parentPageId);
?>

<?php include('components/page-banner.php') ?>

<div class="breadcrumb">
  <p>
    <span><a href="<?php echo site_url(); ?>">Home</a></span>
    <?php if (is_category()) { ?>
      <span>Category: "<?php single_cat_title(); ?>"</span>
    <?php }

    if (is_year()) {
      $year = explode(" ", get_the_archive_title())[1];
    ?>
      <span><?php echo $year; ?></span>
    <?php }

    if (is_month()) {
      $month = explode(" ", get_the_archive_title())[1];
      $year = explode(" ", get_the_archive_title())[2];
      $yearArchiveLink = trim(get_year_link($year), '</span>');
    ?>
      <span><a href="<?php echo $yearArchiveLink ?>"><?php echo $year; ?></a></span>
      <span><?php echo $month; ?></span>
    <?php } ?>
  </p>
</div>

<div class="page-content">
  <?php include('components/blog-sidebar.php'); ?>

  <div class="generic-content">
    <h1>Welcome To Our Legal Blog</h1>

    <?php include('components/blog-posts.php'); ?>
  </div>
</div>

<?php
get_footer();
?>