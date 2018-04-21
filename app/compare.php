<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include ('header.php');?>
    <style>
    	.compare-img {
    		max-height: 300px; 
    		max-width: 300px;
    	}
    	.green-text {
    		/* color: #59E817; */
    	}
    	.difference {
    		color: #A617E8;
    	}
    	.feature {
    		font-weight: bolder;
    	}
	</style>
  </head>
<body>
	<?php include ('navbar.php');?>
	
	<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <?php include('sidebar.php'); ?>
            <!-- Sidebar end=============================================== -->

            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                    <li class="active">Product Comparison</li>
                </ul>
                <a href="products.html" class="btn btn-large"><i class = "icon-chevron-left"></i> Back Products Page</a>
                <h3> Product Comparison <small class="pull-right"> 2 products are being compared </small></h3>
                <hr class="soft" />
                <table id="compairTbl" class="table table-bordered">
                    <thead>
                        <tr>
                            <th> Features </th>
                            <th> Lenovo V310 </th>
                            <th> Lenovo IdeaPad 320 </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&nbsp;</td>

                            <td class = "td-limit-size" style="text-align:center">

                                <img class = "compare-img" src="assets/images/laptops/lenovo-v310-core-i5-pro-laptop-deal-1000px-v1-0003.jpg" alt="" />
                                <p class="justify">
                                    The Lenovo V310 is designed to meet all of your business needs, including budget. It's very configurable and has a range of options, from state-of-the-art processing to a flexible dual storage system. Plus, with its optional battery feature, this portable laptop can keep going for up to 12 hours
                                </p>

                                <form class="form-horizontal qtyFrm">
                                    <h3> R10,499.00</h3>
                                    <br/>
                                    <a class="btn btn-large btn-primary" href="#">Add to <i class="icon-shopping-cart"></i></a>
                                </form>
                            </td>
                            <td class = "td-limit-size" style="text-align:center">
                            	<img class = "compare-img" src="assets/images/laptops/lenovo-ideapad-320-core-i5-laptop-deal-1000px-v1-00071.jpg" alt="" />
                                <p class="justify">
                                    Everything about the IdeaPad 320 is designed to simplify your life. It will handle any task with ease, thanks to powerful processing. Preloaded with Windows 10 Home, you'll have the personal assistance of Cortana, designed to help open apps and answer your questions — whether typed or spoken. From the new streamlined design to a cleaner desktop interface, you'll enjoy the simplicity that IdeaPad 320 offers.
                                </p>
                                
                                <form class="form-horizontal qtyFrm">
                                    <h3 class = "green-text"> R9,199.00</h3>
                                    <br/>
                                    <a class="btn btn-large btn-primary" href="#">Add to <i class="icon-shopping-cart"></i></a>
                                </form>
                            </td>
                        </tr>
                        <?php 
                        	$fileContents = file_get_contents('./json/lenovo-laptops.json');
                        	$json = json_decode($fileContents, true);
                        	reset($json);
                        	$firstKey = key($json);
                        	$keys = array_keys($json[$firstKey]);

                    		foreach($keys as $key) {
                    			$str = '<tr>';
                        		$str .= '<td class = "feature">' . $key . '</td>';
								$arr = [];
                        		foreach($json as $product) {
                        			$val = $product[$key]['value'];
                        			array_push($arr, $val);
                        		}
                        		$size = count($arr);
                        		$isDifferent = false;
                        		for($i = 0; $i < $size - 1; $i++) {
                        			if ($arr[$i] != $arr[$i+1]) {
                        				$isDifferent = true;
                        				break;
                        			}
                        		}
                        		if($isDifferent) {
                        			for($i = 0; $i < $size; $i++) {
	                        			$str .= '<td class = "difference">' . $arr[$i] . '</td>';
	                        		}
                        		}
                        		else {
                        			for($i = 0; $i < $size; $i++) {
	                        			$str .= '<td>' . $arr[$i] . '</td>';
	                        		}
                        		}
                        		$str .= '</tr>';
                            	echo $str;
                    		}
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 

<?php include('footer.php'); ?>
</body>
</html>