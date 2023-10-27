</main>
<footer>
  <?php
  if (!is_page('contact')) {
    include('components/footer-contact-form.php');
  }
  ?>
  <div class="footer-offices" style="background-repeat: repeat;background-image: linear-gradient(rgba(254, 254, 254, .95), rgba(254, 254, 254, .99)), url('<?php bloginfo('template_url'); ?>/images/contact-offices-bg.png');">
    <div class="footer-offices-header">
      <h2>Contact Our Offices</h2>
    </div>
    <div class="footer-offices-description">
      <div class="office1">
        <img class="location-icon" src="<?php bloginfo('template_url'); ?>/images/map-pin.png" alt="">
        <h3>Bethesda Office:</h3>
        <span class="address">
          7315 Wisconsin Ave., Suite 400 West <br>
          Bethesda, MD 20814
        </span>
        <span class="location-link">
          <a href="">Bethesda Office Location</a>
        </span>
      </div>
      <div class="office2">
        <img class="location-icon" src="<?php bloginfo('template_url'); ?>/images/map-pin.png" alt="">
        <h3>Silver Spring Office:</h3>
        <span class="address">
          12305 Kemp Mill Road <br>
          Suite B <br>
          Silver Spring, MD 20902
        </span>
        <span class="location-link">
          <a href="">Silver Spring Office Location</a>
        </span>
      </div>
      <div class="office3">
        <img class="location-icon" src="<?php bloginfo('template_url'); ?>/images/map-pin.png" alt="">
        <h3>Washington Office:</h3>
        <span class="address">
          5028 Wisconsin Avenue NW, Suite 100 <br>
          Washington, DC 20016
        </span>
        <span class="location-link">
          <a href="">Washington Office Location</a>
        </span>
      </div>
    </div>
    <div class="footer-offices-bottom">
      <div class="phone-icon">
        <a href=""><i class="icon"></i></a>
      </div>
      <div class="phone-number">
        <h2>Phone:</h2>
        <a href="">123-456-7890</a>
      </div>
    </div>
  </div>
  <div class="footer-social">
    <div class="social-accounts">
      <ul>
        <li class="fb"><a href=""><i class="icon"></i></a></li>
        <li class="twitter"><a href=""><i class="icon"></i></a></li>
        <li class="linkedin"><a href=""><i class="icon"></i></a></li>
      </ul>
    </div>
    <div class="btn-review-us">
      <a href="">Review Us</a>
    </div>
    <div class="reserved" style="color: white;">
      <p style="text-align: center;">© <?php echo date('Y'); ?> <a href="https://lawyers.findlaw.com/profile/view/4846143_1" target="_blank">The Eleff Law Group</a> • All Rights Reserved</p>
    </div>
    <div class="disclaimer">
      <p style="text-align: center;">
        <a href="https://www.elefflaw.com/disclaimer/">Disclaimer</a>&nbsp;|
        <a href="https://www.elefflaw.com/site-map/">Site Map</a>&nbsp;|
        <a href="https://www.elefflaw.com/privacy/">Privacy Policy</a> |&nbsp;<a href="https://www.lawyermarketing.com/" target="_blank">Business Development Solutions</a> by
        <a href="https://www.findlaw.com/" target="_blank">FindLaw</a>, part of Thomson Reuters
      </p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>