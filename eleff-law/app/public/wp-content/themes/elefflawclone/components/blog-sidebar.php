<div class="blog-sidebar">
  <form action="<?php echo site_url(); ?>" class="search-form" role="search" method="get">
    <label for="search" class="search-form__text-field--label">Search for:</label>
    <input id="search" type="search" class="search-form__text-field--input" placeholder="Search..." value="<?php the_search_query(); ?>" name="s">
    <button class="search-form__submit-button button" type="submit">SEARCH</button>
  </form>

  <?php
  // custom query
  $recentPosts = new WP_Query(array(
    'posts_per_page' => 5,
  ));
  ?>
  <div class="recent-posts">
    <h6 class="blog-sidebar__heading">Recent Posts</h6>
    <ul>
      <?php
      while ($recentPosts->have_posts()) {
        $recentPosts->the_post();
      ?>
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        </li>
      <?php
      }
      // best practice to reset after usage of custom query
      wp_reset_postdata();
      ?>
    </ul>
  </div>

  <div class="categories">
    <h6 class="blog-sidebar__heading">Categories</h6>
    <ul>
      <?php
      wp_list_categories(array(
        'title_li' => '',
      ));
      ?>
    </ul>
  </div>

  <div class="archives">
    <h6 class="blog-sidebar__heading">Archives</h6>
    <label for="archives__dropdown" class="archives__dropdown--label">Archives Dropdown</label>
    <select name="archive" id="archives__dropdown" class="archives__dropdown--select">
      <option value="">Select Month</option>
      <?php
      wp_get_archives(array(
        'type' => 'monthly',
        'format' => 'option',
      ))
      ?>
    </select>
  </div>

  <div class="external">
    <a href="https://legalblogs.findlaw.com/" class="external__link" target="_blank">
      <img src="<?php echo get_template_directory_uri() . '/images/findlaw-network.png'; ?>" alt="">
    </a>
  </div>
</div>