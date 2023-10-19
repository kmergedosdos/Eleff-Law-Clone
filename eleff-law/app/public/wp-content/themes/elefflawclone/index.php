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
    <span>Blog</span>
  </p>
</div>


<div class="page-content">
  <div class="blog-posts">
    <h1>Welcome To Our Legal Blog</h1>

    <?php
    while (have_posts()) {
      the_post();
    ?>
      <div class="blog-posts__item">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div>
          <p>
            On Behalf of
            <a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a> |
            <?php the_time('M j, Y'); ?> |
            <?php echo get_the_category_list(', '); ?>
          </p>
        </div>
        <div>
          <p><?php the_excerpt(); ?></p>
        </div>
      </div>
    <?php
    }
    ?>

    <div class="blog-posts__pagination">
      <?php echo paginate_links(); ?>
    </div>
  </div>
</div>

<?php
get_footer();
?>