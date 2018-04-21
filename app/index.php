<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include ('header.php');?>
  </head>
<body>
<?php include ('navbar.php');?>
 
<!-- Header End====================================================================== -->
<?php include('carousel.php'); ?>

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php include('sidebar.php'); ?>
<!-- Sidebar end=============================================== -->

		<div class="span9">		
			<div class="well well-small"style="max-height: 322px">
			<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <?php 
			  $directory = "./assets/images/featured/";
			  $images = preg_grep('~\.(jpeg|jpg|JPG)$~', scandir($directory));
			  $count = 1;
			  $prices = array("Alienware 17 GTX 1070 Gaming Laptop.JPG"=>"R48,999","AMD Threadripper 1920X .jpg"=>"R12,599","ASUS GTX1080 .jpg"=>"R12 499,00",
			  "ASUS x399 .JPG"=>"R9 767,00","Corsair AX1200i 1200W .jpg"=>"R5 199,00","Corsair AX1600i 1600W PSU.JPG"=>"R 7,099.00",
                "Intel Core i9 7960X .jpg"=>"R24 599,00","MSI x299 Gaming M7               .JPG"=>"R6 899,00");
			  foreach($images as $image)
			  {
			      $print ="";
			      
			      if(($count%4) ==1){
			          if($count ==1 ){
			              $print .= "<div class=\"item active\">";
			          }
			          else{
			              $print  .=  "<div class=\"item\">";
			          }
			          $print .= "<ul class=\"thumbnails\">";
			      }
			      
			      $print .= "<li class=\"span3\">";
			      $print .= "<div class=\"thumbnail\"style=\"min-height:95%;\"><i class=\"tag\"></i><a href=\"product_details.html\"><img src=\"".$directory.$image."\" alt=\"\" style=\"max-height:150px\"></a>";
			      $print .= "<div class=\"caption\">";
			      $print .= "<h5>".substr( $image ,0 , strlen($image)-4 )."</h5>";
			      $print .= "<h4><a class=\"btn\" href=\"product_details.html\">VIEW</a> <span class=\"pull-right\"><a class=\"btn btn-primary\" href=\"#\">".$prices[$image]."</a></span></h4>";
			      $print .= "</div>";
			      $print .= "</div></li>";
			      if(($count %4 ) ==0){
			          $print .= "</div></ul>";
			      }
			          
			          echo $print;
			          $count++;
			  }
			  
			  ?>
			
			  </div>
			  <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left"  style="vertical-align:middle;font-size: 70%" aria-hidden="true"> < </span>
    			</a>
			  <a class="right carousel-control" href="#featured"role="button" data-slide="next">
			 	 <span class="glyphicon glyphicon-chevron-right"  style="vertical-align:middle;font-size: 70%" aria-hidden="true"> > </span>
			  </a>
			  </div>
			  </div>
		</div>
		<h4>Latest Products </h4>
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail"style="max-height:289px; max-width:260px">
					<a  href="product_details.html"><img src="./assets/images/frontpage/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v1.jpg" alt="" style="max-width: 160px"/></a>
					<div class="caption">
					  <h5>NZXT H700i Black/Red</h5>
					  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R 2,499</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail"style="max-height:289px; max-width:260px">
					<a  href="product_details.html"><img src="./assets/images/frontpage/razer-naga-epic-chroma-wireless-gaming-mouse-011.jpg" alt="" style="max-width: 160px"/></a>
					<div class="caption">
					  <h5>Raza Naga Epic Wireless</h5>
					 <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R 2,039</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail"style="max-height:289px; max-width:260px">
					<a  href="product_details.html"><img src="./assets/images/frontpage/corsair-h150i-pro-rgb-liquid-cpu-cooler-300px-v3.jpg" alt=""style="max-width: 160px; max-height:160px"/></a>
					<div class="caption">
					  <h5>Corsair H150i Pro</h5>
					   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R 2,349</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail" style="max-height:289px; max-width:260px">
					<a  href="product_details.html"><img src="./assets/images/frontpage/dell-p3418hw-34-inch-fhd-curved-monitor-300px-v1.jpg" alt=""style="max-width: 160px"/></a>
					<div class="caption">
					  <h5>Dell P3418HW 34inch</h5>
					  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R 8,999</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail"style="max-height:289px; max-width:260px">
					<a  href="product_details.html"><img src="./assets/images/frontpage/vertagear-sl5000-black-white-300px-v1.jpg" alt=""style="max-width: 160px"/></a>
					<div class="caption">
					  <h5>Vertagear SL5000 Black/White</h5>
					  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R2199</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail"style="max-height:289px; max-width:260px">
					<a  href="product_details.html"><img src="./assets/images/frontpage/ASUS-PG348Q-ROG-Swift-G-Sync-Gaming-Monitor-300px-v2" alt=""style="max-width: 160px"/></a>
					<div class="caption">
					  <h5>ASUS PG348Q ROG Swift</h5>
					   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R 17,499</a></h4>
					</div>
				  </div>
				</li>
			  </ul>	

		</div>
		</div>
	</div>
</div>
	<!-- Footer ================================================================== -->
	<?php include('footer.php'); ?>
	<!-- Placed at the end of the document so the pages load faster ============================================= -->
		
	<!-- Themes switcher section ============================================================================================= -->

<span id="themesBtn"></span>
</body>
</html>