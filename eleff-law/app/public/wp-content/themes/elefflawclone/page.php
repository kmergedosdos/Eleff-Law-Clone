<?php
get_header();

$parentPageId = wp_get_post_parent_id(get_the_ID());
$parentPageTitle = get_the_title($parentPageId);
$parentPageUrl = get_permalink($parentPageId);

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
      <?php if ($parentPageId) { ?>
        <span><a href="<?php echo $parentPageUrl; ?>"><?php echo $parentPageTitle ?></a></span>
      <?php } ?>
      <span><?php the_title(); ?></span>
    </p>
  </div>

  <div class="sidebar-nav">
    <h3>Practice Areas</h3>
    <div>
      <?php
      $estatePlanningAndProbatePage = get_post(20);
      $businessTransactionsPage = get_post(16); //pass the post ID of the page as argument
      $commercialRealEstatePage = get_post(29);
      $prenuptialAgreementsPage = get_post(33);

      $childrenOfEstatePlanningAndProbatePage = get_pages(array(
        'child_of' => $estatePlanningAndProbatePage->ID,
        'sort_column' => 'menu_order, post_title',
      ));

      $childrenOfBusinessTransactionsPage = get_pages(array(
        'child_of' => $businessTransactionsPage->ID,
        'sort_column' => 'menu_order, post_title',
      ));

      $childrenOfCommercialRealEstatePage = get_pages(array(
        'child_of' => $commercialRealEstatePage->ID,
        'sort_column' => 'menu_order, post_title',
      ));

      $childrenOfPrenuptialAgreementsPage = get_pages(array(
        'child_of' => $prenuptialAgreementsPage->ID,
        'sort_column' => 'menu_order, post_title',
      ));

      function displayPage($page)
      {
        $pageTitle = $page->post_title;
        $pageUrl = get_permalink($page->ID);
        echo "<a href='$pageUrl'> $pageTitle </a>";
      }

      function displayPages($pages)
      {
        foreach ($pages as $page) {
          $pageTitle = $page->post_title;
          $pageUrl = get_permalink($page->ID);
          echo "<li><a href='$pageUrl'> $pageTitle </a></li>";
        }
      }
      ?>

      <div>
        <?php displayPage($estatePlanningAndProbatePage) ?>
        <ul>
          <?php displayPages($childrenOfEstatePlanningAndProbatePage) ?>
        </ul>
      </div>
      <div>
        <?php displayPage($businessTransactionsPage) ?>
        <ul>
          <?php displayPages($childrenOfBusinessTransactionsPage) ?>
        </ul>
      </div>
      <div>
        <?php displayPage($commercialRealEstatePage) ?>
        <ul>
          <?php displayPages($childrenOfCommercialRealEstatePage) ?>
        </ul>
      </div>
      <div>
        <?php displayPage($prenuptialAgreementsPage) ?>
        <ul>
          <?php displayPages($childrenOfPrenuptialAgreementsPage) ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="generic-content">
    <?php the_content(); ?>
  </div>

<?php
}
get_footer();
?>