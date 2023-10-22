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