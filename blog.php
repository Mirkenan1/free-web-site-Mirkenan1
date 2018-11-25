<?php require_once 'header.php'; 
   $blog=$db->prepare("SELECT * FROM blogs");
   $blog->execute(array()); 

         

?>

<!DOCTYPE html>
<html lang="en">
   <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1><?php echo $diller['bloq'] ?></h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.php"><?php echo $diller['anasehife'] ?></a></li>
              <li class="breadcrumb-item active"><?php echo $diller['bloq'] ?></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="blog">
      <div class="container">
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
       
       <?php  /*
     $sayfada = 5; // sayfada gösterilecek içerik miktarını belirtiyoruz.
 
$sorgu = mysql_query('SELECT COUNT(*) AS toplam FROM mesajlar');
$sonuc = mysql_fetch_assoc($sorgu);
$toplam_icerik = $sonuc['toplam'];
 
$toplam_sayfa = ceil($toplam_icerik / $sayfada);
 
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
 
if($sayfa < 1) $sayfa = 1; 
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
 
$limit = ($sayfa - 1) * $sayfada;
$sorgu = mysql_query('SELECT * FROM mesajlar LIMIT ' . $limit . ', ' . $sayfada);
 
while($icerik = mysql_fetch_assoc($sorgu)) {
   // ...
}
 
for($s = 1; $s <= $toplam_sayfa; $s++) {
   if($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
      echo $s . ' '; 
   } else {
      echo '<a href="?sayfa=' . $s . '">' . $s . '</a> ';
   }
}*/
?>   
          
        </div>
        <!-- Pagination -->
        <nav aria-label="..." class="d-block w-100">
          <ul class="pagination pagination-custom d-flex justify-content-between d-block w-100">
            <li class="page-item"><a href="#" class="page-link">&lt; Older posts</a></li>
            <li class="page-item disabled"><a href="#" tabindex="-1" class="page-link">Newer posts  &gt;                                   </a></li>
          </ul>
        </nav>
      </div>
    </section>
  </body>
</html>
<?php require_once 'footer.php'; ?>