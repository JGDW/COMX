<!DOCTYPE html>
<html lang="en">
  <head>
	  <!-- WHAT -->
	  
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<?php include ('navbar.php');?>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="./assets/images/Specials/1.jpg" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="./assets/images/Specials/2.jpg" alt="special offers"/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img src="./assets/images/Specials/3.jpg" width=100% height=100% alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		  </div>

		</div>
		
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
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
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>