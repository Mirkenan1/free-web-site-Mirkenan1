<?php require_once 'header.php'; 
          $elaqe=$db->prepare("SELECT * FROM contact");
          $elaqe->execute(array());
          $elaqecek=$elaqe->fetch(PDO::FETCH_ASSOC);




?>


    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1><?php echo $diller['elaqe'] ?></h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.php"><?php echo $diller['anasehife'] ?></a></li>
              <li class="breadcrumb-item active"><?php echo $diller['elaqe'] ?></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <main class="contact-page">
      <!-- Contact page-->
      <section class="contact">
        <div class="container">
          <header>
            <p class="lead">
              <!--
              Are you curious contact something? Do you have some kind of problem with our products? As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am
              he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.--> <?php echo $elaqecek['contact_content'] ?>
            </p>
          </header>
          <div class="row">
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-street-map"></div>
              </div>
              <h3><?php echo $diller['adres'] ?></h3>
              <p>13/25 New Avenue<br>New Heaven, 45Y 73J<br>Azerbaijan, <strong>Baku</strong></p>
            </div>
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-support"></div>
              </div>
              <h3><?php echo $diller['cagrimerkezi'] ?></h3>
              <p><?php echo $diller['zengetme'] ?></p>
              <p><strong><?php echo $elaqecek['contact_tel'] ?></strong></p>
            </div>
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-envelope"></div>
              </div>
              <h3><?php echo $diller['edestek'] ?></h3>
              <p><?php echo $diller['edestekalt'] ?></p>
              <ul class="list-style-none">
                <li><strong><a href="mailto:"><?php echo $elaqecek['contact_mail'] ?></a></strong></li>
                <li><strong><a href="">
                      <?php echo $diller['vebsayt'] ?>
                       - idreamdress.com</a></strong></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <header class="mb-5">
            <h2 class="heading-line">Contact form</h2>
          </header>
          <div class="row">
            <div class="col-md-7">


              <form id="contact-form" method="POST" action="admin/baglantilar/istifadeci/mail.php" class="custom-form form">
                <div class="controls">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="name" class="form-label"><?php echo $diller['ad'] ?>*</label>
                        <input type="text" name="ad" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="surname" class="form-label"><?php echo $diller['soyad'] ?> *</label>
                        <input type="text" name="soyad" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="form-label"><?php echo $diller['email'] ?> *</label>
                    <input type="text" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="message" class="form-label"><?php echo $diller['mesaj'] ?> *</label>
                    <textarea rows="4" name="mesaj" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                  </div>
                  <button name="mesajgonder" type="submit" class="btn btn-template"><?php echo $diller['gonder'] ?></button>
                </div>
              </form>


            </div>
            <div class="col-md-5"><?php echo $elaqecek['contact_undercontent'] ?>
              <!--
              <p>You can change all the designs on IDRreamDress as you want, or you can design your own t-shirts on the women's t-shirts or on the men's t-shirt.</p>

              <p>Design your own designs on the pages of our designs can be seen and ordered. We are continuously expanding your options with different b-style tshirt models</p>-->
              <div class="social">
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
<?php require_once 'footer.php'; ?>