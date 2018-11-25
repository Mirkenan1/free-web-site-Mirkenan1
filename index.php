<?php require_once 'header.php'; 
 $blog=$db->prepare("SELECT * FROM blogs limit 2");
 $blog->execute(array());

 $design=$db->prepare("SELECT * FROM design");
 $design->execute(array());
 






?>



          <section class="hero hero-home no-padding">
      <!-- Hero Slider-->
      <div class="owl-carousel owl-theme hero-slider">
        <!--
        <div style="background: url(img/divider-bg.jpg);" class="item d-flex align-items-center has-pattern">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h1 style="color: white !important;">IDreamDress</h1>
                <ul class="lead"> 
                  <li style="color: white !important;"><strong>Design your </strong> Dreams</li>
                  <li style="color: white !important;"><strong>24</strong> design <strong>6</strong> color variants</li>
                  <li style="color: white !important;"><strong>Pictures and text</strong> on shirts </li>
                  <li style="color: white !important;">Frequent & <strong>free updates</strong></li>
                </ul><a href="#" class="btn btn-template wide shop-now "style="background: #9055A2;"><?php //echo $diller['indidizaynet']; ?><i class="icon-bag"> </i></a>
              </div>
            </div>
          </div>
        </div>-->
      <?php
       while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) {?>

         <div style="background: url(<?php echo $slidercek['slider_picturelocation'] ?>);" class="item d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 text-white" >
                <h1><?php echo $slidercek['slider_title'] ?></h1>
                <p class="lead"><?php echo $slidercek['slider_content'] ?></p><a href="design.php" class="btn btn-template wide shop-now" style="background: #9055A2;"><?php echo $diller['indidizaynet']; ?><i class="icon-bag">  </i></a>
              </div>
            </div>
          </div>
        </div>
       
               <?php } ?>
       





      </div>
    </section>
    <!-- Categories Section-->
    <section class="categories">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>Top for this month</small>Our Featured Picks</h2>
        </header>

        <!-- Products Slider-->
        <div class="owl-carousel owl-theme products-slider">

          <!-- item-->


     <?php while($designcek=$design->fetch(PDO::FETCH_ASSOC)){ ?>




          <div class="item">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="<?php echo $designcek['design_picture'] ?>" alt="product" class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.php?design_id=<?php echo $designcek['design_id'] ?>" class="visit-product active"><i class="icon-search"></i>View</a><a href="" data-toggle="modal" data-target="#<?php echo $designcek['design_id'] ?>" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="detail.html">
                  <h3 class="h6 text-uppercase no-margin-bottom"><?php echo $designcek['design_name'] ?></h3></a><span class="price text-muted">$<?php echo $designcek['design_pricelast'] ?></span></div>
            </div>
          </div>

              <?php } ?>

        </div>
      </div>
    </section>

    <!-- Divider Section-->
    <section style="background: url(img/print2.jpg);" class="divider">
      <div class="container"> 
        <div class="row">
          <div class="col-lg-6">
            <p>Old Collection</p>
            <h2 class="h1 text-uppercase no-margin">Huge Sales</h2>
            <p>At our outlet stores</p><a href="#" class="btn btn-template wide shop-now"style="background: #9055A2;">Design now<i class="icon-bag"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Women's Collection -->
    <section class="women-collection">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>THIS MONTH</small>LAST DESIGNED T-SHIRTS</h2>
        </header>
        <!-- Products Slider-->
        <div class="owl-carousel owl-theme products-slider">
          <!-- item-->
   
 
  
          <div class="item">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="img/hoodie-woman-2.png" alt="product" class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="detail.html">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Black</h3></a><span class="price text-muted">$40.00</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section-->
    <section class="blog gray-bg">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>Latest from the blog</small>Improve your style thoughts</h2>
        </header>
        <div class="row">
        
      <?php while ($blogcek=$blog->fetch(PDO::FETCH_ASSOC)) {?>
             <!-- post-->
          <div class="col-lg-6">
            <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
              <div class="thumbnail d-flex-align-items-center justify-content-center"><img width="350px"  src="<?php  echo $blogcek['blog_picturelocation']; ?> ?>" alt="..."></div>
              <div class="info"> 
                <h4 class="h5"> <a href="post.php"><?php echo $blogcek['blog_title']; ?></a></h4><span class="date"><i class="fa fa-clock-o"></i><?php  echo $blogcek['blog_time']; ?></span>
                <p><?php echo $blogcek['blog_content']; ?></p><a href="post.php" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /end post-->
      
     <?php } ?>

        </div>
      </div>
    </section>
    <!-- Brands Section-->
    
<?php 

$designzoom=$db->prepare("SELECT * FROM design ");
$designzoom->execute(array()); 
while($designzoomcek=$designzoom->fetch(PDO::FETCH_ASSOC)){ ?>


 
 
    <div id="<?php echo $designzoomcek['design_id'] ?>" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade overview">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="icon-close"></i></span></button>
          <div class="modal-body"> 
            <div class="ribbon-primary text-uppercase">Sale</div>
            <div class="row d-flex align-items-center">
              <div class="image col-lg-5"><img src="<?php echo $designzoomcek['design_picture']; ?>" alt="..." class="img-fluid d-block"></div>
              <div class="details col-lg-7">
                <h2><?php echo $designzoomcek['design_name']; ?></h2>
                <ul class="price list-inline">
                  <li class="list-inline-item current"><?php echo $designzoomcek['design_pricelast'] ?></li>
                  <li class="list-inline-item original"><?php echo $designzoomcek['design_pricebefore'] ?></li>
                </ul>
                <p><?php echo $designzoomcek['design_content'] ?></p>
                <div class="d-flex align-items-center">
                  <div class="quantity d-flex align-items-center">
                    <div class="dec-btn">-</div>
                    <input type="text" value="1" class="quantity-no">
                    <div class="inc-btn">+</div>
                  </div>
                  <select id="size" class="bs-select">
                    <option value="small">Small</option>
                    <option value="meduim">Medium</option>
                    <option value="large">Large</option>
                    <option value="x-large">X-Large</option>
                  </select>
                </div>
                <ul class="CTAs list-inline">
                  <li class="list-inline-item"><a href="#" class="btn btn-template wide"> <i class="fa fa-shopping-cart"></i>Add to Cart</a></li>
                  <li class="list-inline-item"><a href="#" class="visit-product active btn btn-template-outlined wide"> <i class="icon-heart"></i>Add to wishlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php } ?>


    <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>
  <?php require_once 'footer.php'; ?>