<?php 


          require_once 'admin/baglantilar/baglan.php';
          $ayarsor=$db->prepare("SELECT * FROM settings where setting_id=:id");
          $ayarsor->execute(array( 
          'id'=>0 
          ));
          $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);




          $slider=$db->prepare("SELECT * FROM slider");
          $slider->execute(array());

         
          
          # Sessionu basladaq
          session_start();
          ob_start();
          # Eger dil secilibse
          if($_GET['dil']) {
          # Dil secimini sessiona menimset.
          $_SESSION['dil'] = $_GET['dil'];
          # Ve sonda indexe gonder.
          $gedeceyiadres=$_SERVER['PHP_SELF'];
          header("Location:$gedeceyiadres");
          }

          # Seçili dili yoxlayiriq
          if ($_SESSION['dil'] == "ru") {
            $dil = "ru";

          }
          elseif ($_SESSION['dil'] == "en") {
            $dil = "en";
          }

          elseif ($_SESSION['dil'] == "az") {
            $dil = "az";
          }
          else {
            # Eger dil secilmeyibse defaultu gotur
            $dil = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
          }

          # Dil faylini include edirik
          include 'language/'.$dil.'.php';




 ?>


<!DOCTYPE html>
<html lang="en">
  

<head>
    <!--Dizayn hisesinin scripti-->
    
    <!--Dizayn hisesinin scripti-->



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $ayarcek['setting_title'];?></title>
    <meta name="description" content="<?php echo $ayarcek['setting_description'] ?>">
    <meta name="keywords" content="<?php echo $ayarcek['setting_keywords'] ?>">
    <meta name="author" content="<?php echo $ayarcek['setting_author'] ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.css">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="css/custom-fonticons.css">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/hub/1-4-0/img/favicon.ico">
    <!-- Modernizr-->
    <script src="js/modernizr.custom.79639.js"></script>
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <!-- Tob Bar-->
      <div class="top-bar">
        <div class="container-fluid">
          <div class="row d-flex align-items-center">
            <div class="col-lg-6 hidden-lg-down text-col">
              <ul class="list-inline">
                <li class="list-inline-item"><i class="icon-telephone"></i><?php echo $ayarcek['setting_telephone'] ?></li>
                <li class="list-inline-item">Free shipping on orders over $100</li>
              </ul>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
              <!-- Language Dropdown-->
             <div class="dropdown show">

              
                  <a id="langsDropdown" href="?dil=en" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><img src="img/bayraqlar/<?php echo $dil?>.png" alt="english"><?php echo " ".$diller['dil'];?></a>
              
           

                <div aria-labelledby="langsDropdown" class="dropdown-menu"><a href="?dil=az" class="dropdown-item">Azerbaijan</a><a href="?dil=en" class="dropdown-item">English</a><a href="?dil=ru" class="dropdown-item">Russian</a></div>
              </div>
              <!-- Currency Dropdown-->
              <div class="dropdown show"><a id="currencyDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">$ USD</a>
                <div aria-labelledby="currencyDropdown" class="dropdown-menu"><a href="#" class="dropdown-item">₼ AZN</a><a href="#" class="dropdown-item"> &#8381 RUB</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <form action="#">
              <div class="form-group">
                <input type="search" name="search" id="search" placeholder="What are you looking for?">
                <button type="submit" class="submit"><i class="icon-search"></i></button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid">  
          <!-- Navbar Header  --><a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="..."></a>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">

              <li class="nav-item dropdown"><a href="index.php" id="navbarHomeLink"  aria-haspopup="true" aria-expanded="false" class="nav-link active"><?php echo $diller['anasehife'] ?></a>
              </li>

              <li class="nav-item"><a style="background: #9055A2;color: white; border-radius: 50px;" href="design.php" class="nav-link"><?php echo $diller['dizaynet'] ?></a>
              </li>
              <!-- Megamenu-->
                    <li class="nav-item dropdown"><a id="navbarHomeLink" href="category.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><?php echo $diller['kateqoriya'] ?><i class="fa fa-angle-down"></i></a>
                <ul aria-labelledby="navbarDropdownHomeLink" class="dropdown-menu">
                  <li><a href="category.php?allcategory" class="dropdown-item">Bütün Kateqoriyalar</a></li>
              
                 
                </ul>
              </li>
          


              </li>
              <!-- /Megamenu end-->


              <!--- Blog -->

              <li class="nav-item"><a href="blog.php" class="nav-link"><?php echo $diller['bloq']; ?></a>
              </li>
              <!-- About-->
              <li class="nav-item"><a href="about.php" class="nav-link"><?php echo $diller['haqqimizda']; ?></a>
              </li>
              
              <li class="nav-item"><a href="contact.php" class="nav-link"><?php echo $diller['elaqe']; ?></a>
              </li>
            </ul>
            <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
              <!-- Search Button-->
              <div class="search"><i class="icon-search"></i></div>
              <!-- User Not Logged - link to login page-->
              <div class="user"> <a id="userdetails" href="loginregister.php?lng=<?php echo $dil ?>" class="user-link"><i class="icon-profile"></i></a></div>

              <!-- Cart Dropdown-->
              <div class="cart dropdown show"><a id="cartdetails" href="https://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="icon-cart"></i>
                  <div class="cart-no">1</div></a><a href="cart.php" class="text-primary view-cart">View Cart</a>
                <div aria-labelledby="cartdetails" class="dropdown-menu">
                  <!-- cart item-->
                  <div class="dropdown-item cart-product">
                    <div class="d-flex align-items-center">
                      <div class="img"><img src="img/hoodie-man-1.png" alt="..." class="img-fluid"></div>
                      <div class="details d-flex justify-content-between">
                        <div class="text"> <a href="#"><strong>Heather Gray Hoodie</strong></a><small>Quantity: 1 </small><span class="price">$75.00 </span></div><a href="#" class="delete"><i class="fa fa-trash-o"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- total price-->
                  <div class="dropdown-item total-price d-flex justify-content-between"><span>Total</span><strong class="text-primary">$75.00</strong></div>
                  <!-- call to actions-->
                  <div class="dropdown-item CTA d-flex"><a href="cart.php" class="btn btn-template wide">View Cart</a><a href="checkout1.php" class="btn btn-template wide">Checkout</a></div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
 