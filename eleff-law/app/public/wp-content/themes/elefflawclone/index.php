<?php
get_header();
?>

<?php include('components/page-banner.php') ?>

<div class="breadcrumb">
  <p>
    <span><a href="<?php echo site_url(); ?>">Home</a></span>
    <span>Blog</span>
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