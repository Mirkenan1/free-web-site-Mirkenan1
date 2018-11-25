<?php 
if ($_GET['lng']) {
include 'language/'.$_GET['lng'].'.php';
}
else{
	include 'language/az.php';
}
 


 ?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $diller['giris']."&".$diller['qeydiyyat'] ?></title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Qeydiyyatdan keçin dizayn etdiyiniz köynəkləri sifariş verin"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				   </script>
</head>
<body style="background-image: url(img/tshirts.jpeg);">
	<h1><?php echo $diller['giris']."&".$diller['qeydiyyat'] ?></h1>
			
<div class="main-content">
	<div class="sap_tabs">	
		 
		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
		 
			  <ul>
			  	  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><?php echo $diller['giris']  ?></span></li>
			  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><?php echo $diller['qeydiyyat']?></span></li>
				 
				  
			  </ul>		
			  <!---->
			  			<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
				<div class="facts">
					<div class="register">
						<form method="POST" action="admin/baglantilar/istifadeci/istifadeci.php">										
							<input name="istifadeci_mail" placeholder="<?php echo $diller['email'] ?>" class="mail" type="text" required="">									
							<input name="istifadeci_password" placeholder="<?php echo $diller['sifre'] ?>" class="lock" type="password" required="">										
							<div class="sign-up">
								<input name="istifadecigiris" type="submit" value="<?php echo $diller['giris'] ?>"/>
							</div>
						</form>
						<h3><a href="#"><?php echo $diller['sifreniunutdum']; ?></a></h3>
					</div>
				</div> 
			</div> 			        					            	      
			 	

			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
				<div class="facts">
					<!--login1-->
					<div class="register">
						<form method="POST" action="admin/baglantilar/istifadeci/istifadeci.php">
							<input name="istifadeci_ad" placeholder="<?php echo $diller['ad'] ?>" type="text" required="">
							<input name="istifadeci_mail" placeholder="<?php echo $diller['email'] ?>" type="text" required="">									
							<input name="istifadeci_passwordone" placeholder="<?php echo $diller['sifre'] ?>" type="password" required="">	
							<input name="istifadeci_passwordtwo" placeholder="<?php echo $diller['sifreniesdiqle'] ?>" type="password" required="">
								<div class="sign-up">
									<input name="istifadecielaveet" type="submit" value="<?php echo $diller['hesabyarat'] ?>"/>
								</div>
						</form>
					</div>
				</div>
			</div>	


		</div>	
		
	</div>
</div>
	 <!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>&copy; 2018 <a href="index.php">İdreamdress.com</a> Bütün hüquqları qorunur </p>
			</div>
		</div>
	<!--//end-copyright-->
 
</body>
</html>