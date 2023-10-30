</main>
<footer>
  <?php
  if (!is_page('contact')) {
    include('components/footer-contact-form.php');
  }

  include('components/footer-contact-offices.php');
  ?>
  <div class="footer-contact-bottom">
    <div class="social-medias">
      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
      <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
    </div>
    <div class="review-us-button">
      <a href="https://www.grade.us/elefflaw" class="button">Review Us</a>
    </div>
    <div class="reserved">
      <p>
        © <?php echo date('Y'); ?>&nbsp;
        <a href="https://lawyers.findlaw.com/profile/view/4846143_1" target="_blank"><?php bloginfo('name') ?></a>
        • All Rights Reserved
      </p>
    </div>
    <div class="disclaimer">
      <p>
        <a href="<?php echo site_url('disclaimer/') ?>">Disclaimer</a> |
        <a href="<?php echo site_url('site-map/') ?>">Site Map</a> |
        <a href="<?php echo site_url('privacy/') ?>">Privacy Policy</a> |
        <a href="https://www.lawyermarketing.com/" target="_blank">Business Development Solutions</a> by
        <a href="https://www.findlaw.com/" target="_blank">FindLaw</a>, part of Thomson Reuters
      </p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>