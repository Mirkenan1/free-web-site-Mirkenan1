 <!-- Footer-->
    <footer class="main-footer">
      <!-- Service Block-->
      <div class="services-block">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center justify-content-lg-start">
              <div class="item d-flex align-items-center">
                <div class="icon"><i class="icon-truck"></i></div>
                <div class="text">
                  <h6 class="no-margin text-uppercase"><?php echo $diller['catdirilma']; ?> &amp;<?php echo $diller['gerigonderme']; ?> </h6><span><?php echo $diller['pulsuzcatdirilma']; ?></span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="item d-flex align-items-center">
                <div class="icon"><i class="icon-coin"></i></div>
                <div class="text">
                  <h6 class="no-margin text-uppercase"><?php echo $diller['geriodeme']; ?></h6><span><?php echo $diller['qaranti'] ?></span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="item d-flex align-items-center">
                <div class="icon"><i class="icon-headphones"></i></div>
                <div class="text">
                  <h6 class="no-margin text-uppercase"><?php echo $ayarcek['setting_telephone'] ?></h6><span>24/7 <?php echo $diller['destek'] ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Block -->
      <div class="main-block">
        <div class="container">
          <div class="row">
            <div class="info col-lg-4">
              <div class="logo"><img src="img/logo.png" alt="..."></div>
              <p><?php echo $ayarcek['setting_footer'] ?></p>
              <ul class="social-menu list-inline">
                <li class="list-inline-item"><a href="<?php echo $ayarcek['setting_twitter'] ?>" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="<?php echo $ayarcek['setting_facebook'] ?>" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="<?php echo $ayarcek['setting_instagram'] ?>" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="<?php echo $ayarcek['setting_pinterest'] ?>" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="<?php echo $ayarcek['setting_vimeo'] ?>" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
              </ul>
            </div>
            <div class="site-links col-lg-2 col-md-6">
              <h5 class="text-uppercase">Shop</h5>
              <ul class="list-unstyled">
                <li> <a href="#"><?php echo $diller['sondizayn']; ?></a></li>
                <li> <a href="#">Top t-shirts</a></li>
                <li> <a href="#">Cart</a></li>
                <li> <a href="#">Our Blog</a></li>
                <li> <a href="design.php" style="font-weight: bold; color: #9055A2"> <?php echo $diller['dizaynet']; ?></a></li>
              </ul>
            </div>
            <div class="site-links col-lg-2 col-md-6">
              <h5 class="text-uppercase">Company</h5>
              <ul class="list-unstyled">
                <li> <a href="login.php"><?php echo $diller['giris']; ?></a></li>
                <li> <a href="register.php"><?php echo $diller['qeydiyyat']; ?></a></li>
                <li> <a href="#"><?php echo $diller['isteklisti']; ?></a></li>
                <li> <a href=""><?php echo $diller['mehsullar']; ?></a></li>
                <li> <a href="#"><?php echo $diller['odemeler']; ?></a></li>
              </ul>
            </div>
            <div class="newsletter col-lg-4">
              <h5 class="text-uppercase">Daily Offers & Discounts</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
              <form action="#" id="newsletter-form">
                <div class="form-group">
                  <input type="email" name="subscribermail" placeholder="Your Email Address">
                  <button type="submit"> <i class="fa fa-paper-plane"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="text col-md-6">
              <p>&copy; 2018 <a href="https://idreamdress.com/" target="_blank">IDreamDress</a><?php echo " ".$diller['muellifhuquqlari'] ?></p>
            </div>
            <div class="payment col-md-6 clearfix">
              <ul class="payment-list list-inline-item pull-right">
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-0/img/visa.svg" alt="..."></li>
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-0/img/mastercard.svg" alt="..."></li>
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-0/img/paypal.svg" alt="..."></li>
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-0/img/western-union.svg" alt="..."></li>
              </ul>
            </div>            
          </div>
        </div>
      </div>
    </footer>
   
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/jquery-countdown/jquery.countdown.min.js"></script>
    <!-- Main Template File-->
    <script src="js/front.js"></script>
  </body>
</html>