<?php require_once 'header.php';

$aboutsor=$db->prepare("SELECT * FROM about where  about_language=:language");
$aboutsor->execute(array('language'=>$dil ));
$aboutcek=$aboutsor->fetch(PDO::FETCH_ASSOC);
  ?>
<!DOCTYPE html>
<html lang="en">
    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Haqqımızda</h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">About us</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- about us-->
    <section class="padding-small">
      <div class="container">

        <div class="row about-item">
          <div class="col-lg-8 col-sm-9">

          <h2>Bütün bunlar necə başladı</h2>
          <?php echo $aboutcek['about_content1'] ;?>

          </div>
          <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
            <div class="about-icon ml-lg-0"><i class="fa fa-line-chart"></i></div>
          </div>
        </div>

        <div class="row about-item">
          <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
            <div class="about-icon mr-lg-0"><i class="fa fa-user-o">                      </i></div>
          </div>
          <div class="col-lg-8 col-sm-9">

            <h2>Biz kimik</h2>
             <?php echo $aboutcek['about_content2'] ;?>

          </div>
        </div>

        <div class="row about-item">
          <div class="col-lg-8 col-sm-9">

            <h2>Biz qayğınızı çəkirik</h2>
            <?php echo $aboutcek['about_content3'] ;?>

          </div>
          <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
            <div class="about-icon ml-lg-0"><i class="icon icon-heart"></i></div>
          </div>
        </div>

        <div class="row about-item">
          <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
            <div class="about-icon mr-lg-0"><i class="icon icon-truck">                      </i></div>
          </div>
          <div class="col-lg-8 col-sm-9">

            <h2>Sürətli çatdırılma</h2>
            <?php echo $aboutcek['about_content4'] ;?>

          </div>
        </div>

        <div class="row about-item">
          <div class="col-lg-8 col-sm-9">

          <h2>Təhlükəsizlik və gizlilik məsələləri</h2>
           <?php echo $aboutcek['about_content5'] ;?>

          </div>
          <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
            <div class="about-icon ml-lg-0"><i class="icon icon-secure-shield"></i></div>
          </div>
        </div>


   
       
           <div align="center">
            <h2>Video Tanıtım</h2>
             <iframe align="center" align="center" width="760" height="315" src="https://www.youtube.com/embed/<?php echo $aboutcek['about_video']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

        

      </div>
    </section>
    <!-- Divider Section-->
    <section style="background: url(img/print2.jpg);" class="divider">
      <div class="container"> 
        <div class="row">
          <div class="col-lg-6">
            <p>Hey, hurry up!</p>
            <h2 class="h1 text-uppercase no-margin">Huge Sales</h2>
            <p>20% sale for first t-shirt</p><a href="design.php" class="btn btn-template wide shop-now"style="background: #9055A2;">Design now<i class="icon-bag"></i></a>
          </div>
        </div>
      </div>
    </section>
    <section class="padding-small">
      <div class="container">   
        <header>
          <h2 class="h1">Bizim Komanda</h2>
          <p class="lead text-muted">This is the lead paragraph of the article. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
        </header>
        <div class="row team">

          <div class="col-md-3 col-6">
            <div class="team-member">
              <div class="image"><img src="img/banner-2.jpg" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h5"><a href="#">Nazrin Abbasova</a></h3>
              <p class="role">Founder/Ceo - Frontend developer</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
            </div>
            <!-- /.team-member            -->
          </div>

          

          <div class="col-md-3 col-6">
            <div class="team-member">
              <div class="image"><img src="img/person-2.jpg" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h5"><a href="#">Mirkanan Jafarli</a></h3>
              <p class="role">Backend/DB developer</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
            </div>
            <!-- /.team-member            -->
          </div>

          <div class="col-md-3 col-6">
            <div class="team-member">
              <div class="image"><img src="img/person-4.jpg" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h5"><a href="#">Ali Alekberli</a></h3>
              <p class="role">Backend/DB developer</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
            </div>
            <!-- /.team-member            -->
          </div>

          <div class="col-md-3 col-6">
            <div class="team-member">
              <div class="image"><img src="img/banner-2.jpg" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h5"><a href="#">Leman Yusub</a></h3>
              <p class="role">Business analyst - Frontend developer</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
              <div class="text">
            </div>
            <!-- /.team-member            -->
          </div>
        </div>

      </div>
    </section>
  </body>
</html>
 <?php require_once 'footer.php'; ?>