<?php
get_header();
?>

<?php include('components/page-banner.php') ?>

<div class="breadcrumb">
  <p>
    <span><a href="<?php echo site_url(); ?>">Home</a></span>
    <span>Search Results for "<?php the_search_query(); ?>"</span>
  </p>
</div>

<div class="page-content">
  <?php include('components/blog-sidebar.php'); ?>

  <div class="generic-content">
    <h1>Results for "<?php the_search_query(); ?>"</h1>

    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
    ?>
        <div>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php echo wp_trim_words(get_the_excerpt(), 50); ?></p>
        </div>
      <?php
      }
    } else {
      ?>
      <div>
        <h2>No Results Found</h2>
        <p>The page you requested could not be found. Try refining your search, or use the navigation above to locate the post.</p>
      </div>
    <?php
    }
    ?>
  </div>
</div>

<?php
get_footer();
?>