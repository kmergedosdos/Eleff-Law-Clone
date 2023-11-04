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
    <?php include('components/animated-lollipop.php'); ?>

    <p>
      <span><a href="<?php echo site_url(); ?>">Home</a></span>
      <?php if ($parentPageId) { ?>
        <span><a href="<?php echo $parentPageUrl; ?>"><?php echo $parentPageTitle ?></a></span>
      <?php } ?>
      <span><?php the_title(); ?></span>
    </p>
  </div>

  <div class="page-content">
    <?php
    if (isset($_GET['sent']) && $_GET['sent'] == 'true') {
    ?>
      <div class="generic-content">
        <h1>THANK YOU</h1>
        <p>Your message has been sent! We will get in touch with you soon.</p>
      </div>
    <?php
    } else {
    ?>
      <div class="generic-content">
        <h1>
          CONTACT THE ELEFF LAW GROUP
        </h1>
        <div class="page-contact__message-form">
          <p>
            While this website provides general information, it does not constitute legal advice. The best way to get guidance on your specific legal issue is to contact a lawyer. To schedule a meeting with an attorney, please call or complete the intake form below.
          </p>
          <p>Fields marked with an <span class="page-contact__field-required">*</span> are required</p>
        </div>
        <?php include('components/page-contact-form.php') ?>
      </div>
    <?php
    }
    ?>
  </div>

<?php
}
get_footer();
?>