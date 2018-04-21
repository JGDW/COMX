<!DOCTYPE html>
<html>
<body> 
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3>  SHOPPING CART [ <small>3 Item(s) </small>]</h3>	

	<hr class="soft"/>
<!-- 	<table class="table table-bordered"> -->
<!-- 		<tr><th> I AM ALREADY REGISTERED  </th></tr> -->
<!-- 		 <tr>  -->
<!-- 		 <td> -->
<!-- 			<form class="form-horizontal"> -->
<!-- 				<div class="control-group"> -->
<!-- 				  <label class="control-label" for="inputUsername">Username</label> -->
<!-- 				  <div class="controls"> -->
<!-- 					<input type="text" id="inputUsername" placeholder="Username"> -->
<!-- 				  </div> -->
<!-- 				</div> -->
<!-- 				<div class="control-group"> -->
<!-- 				  <label class="control-label" for="inputPassword1">Password</label> -->
<!-- 				  <div class="controls"> -->
<!-- 					<input type="password" id="inputPassword1" placeholder="Password"> -->
<!-- 				  </div> -->
<!-- 				</div> -->
<!-- 				<div class="control-group"> -->
<!-- 				  <div class="controls"> -->
<!-- 					<button type="submit" class="btn">Sign in</button> OR <a href="register.html" class="btn">Register Now!</a> -->
<!-- 				  </div> -->
<!-- 				</div> -->
<!-- 				<div class="control-group"> -->
<!-- 					<div class="controls"> -->
<!--					  <a href="forgetpass.html" style="text-decoration:underline">Forgot password ?</a>-->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</form> -->
<!-- 		  </td> -->
<!-- 		  </tr> -->
<!-- 	</table>		 -->
			
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity/Update</th>
				  <th>Price</th>
                  <th>Discount</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
 
              <?php 
                $NumItems =3;
                $Count =0;
                $TotalCost =0;
                $VAt =0;
                $ITems = array(
                    array("./assets/images/frontpage/razer-naga-epic-chroma-wireless-gaming-mouse-011.jpg","Raza Naga Epic","Raza Wireless Gaming Mouse",2039, 0),
                    array("./assets/images/frontpage/ASUS-PG348Q-ROG-Swift-G-Sync-Gaming-Monitor-300px-v2","ASUS PG348Q ROG Swift","ASUS 32\" Gaming Monitor",17499, 200),
                    array("./assets/images/frontpage/corsair-h150i-pro-rgb-liquid-cpu-cooler-300px-v3.jpg","Corsair H150i Pro","Corsair H150i AIO Cooler",2349, 100)
                );
                while($Count<$NumItems){
                    $String = "<tr>";
                    $String .= "<td> <img width=\"60\" src=\"".$ITems[$Count][0]."\" alt=\"\"/></td>";
                    $String .= "<td>".$ITems[$Count][1]."<br/>".$ITems[$Count][2]."</td><td>";
                    $String .= "<div class=\"input-append\"><input class=\"span1\"  type=\"number\" min=\"1\" style=\"max-width:34px\" value=\"1\" 
                                id=\"appendedInputButtons".$Count."\" size=\"16\" type=\"text\">
                                <button class=\"btn\" type=\"button\"><i class=\"icon-minus\" onclick=\"decrease('appendedInputButtons".$Count."')\"></i></button>
                                <button class=\"btn\" type=\"button\"><i class=\"icon-plus\" onclick=\"increase('appendedInputButtons".$Count."')\"></i></button>
                                <button class=\"btn btn-danger\"type=\"button\"><i class=\"icon-remove icon-white\"></i></button></div></td>";
                    $String .= "<td>R".$ITems[$Count][3]."</td>";
                    $String .= "<td>R".$ITems[$Count][4]."</td>";
                    $Cost = $ITems[$Count][3]-$ITems[$Count][4];
                    $String .= "<td>R".$Cost."</td></tr>";
                    echo $String;
                    $TotalCost +=$ITems[$Count][3];
                    $Count++;
                 
                }
                $String = "<tr><td colspan=\"5\" style=\"text-align:right\">Total Price:	</td>";
                $String .="<td>R".$TotalCost."</td></tr><tr>";
                $String .= "<td colspan=\"5\" style=\"text-align:right\">Total Vat(15%):	</td>";
                $VAt = $TotalCost*0.15;
                $String .="<td>R".$VAt."</td>  </tr><tr>";
                $String .="<td colspan=\"5\" style=\"text-align:right\"><strong>TOTAL (inc vat) =</strong></td>";
                $String .= "<td class=\"label label-important\" style=\"display:block\"> <strong>R".($TotalCost)."</strong></td> </tr>";
                echo $String;
            
              ?>
               <script>
              	function increase(id){
                  	console.log("Increasing "+ id);
              	 var value = parseInt(document.getElementById(id).value);
              		 value = isNaN(value) ? 0 : value;
              		 value++;
              		 document.getElementById(id).value = value;
                }
              	function decrease(id){
              		console.log("Decreasing "+ id);
                 	 var value = parseInt(document.getElementById(id).value);
                 		 value = isNaN(value) ? 0 : value;
                 		 value--;
                 		 if(value>0)
                 		 document.getElementById(id).value = value;
                   }
              </script>
<!--                 <tr> -->
<!--                   <td> <img width="60" src="themes/images/products/4.jpg" alt=""/></td> -->
<!--                   <td>MASSA AST<br/>Color : black, Material : metal</td> -->
<!-- 				  <td> -->
					<!-- <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
<!-- 				  </td> -->
<!--                   <td>$120.00</td> -->
<!--                   <td>$25.00</td> -->
<!--                   <td>$110.00</td> -->
<!--                 </tr> -->
<!-- 				<tr> -->
<!--                   <td> <img width="60" src="themes/images/products/8.jpg" alt=""/></td> -->
<!--                   <td>MASSA AST asdawdawdawdawdwaadad<br/>Color : black, Material : metal</td> -->
<!-- 				  <td> -->
					<!-- <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"  size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
<!-- 				  </td> -->
<!--                   <td>$7.00</td> -->
<!--                   <td>--</td> -->
<!--                   <td>$8.00</td> -->
<!--                 </tr> -->
<!-- 				<tr> -->
<!--                   <td> <img width="60" src="themes/images/products/3.jpg" alt=""/></td> -->
<!--                   <td>MASSA AST<br/>Color : black, Material : metal</td> -->
<!-- 				  <td> -->
					<!-- <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"  size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
<!-- 				  </td> -->
<!--                   <td>$120.00</td> -->
<!--                   <td>$25.00</td> -->
<!--                   <td>$110.00</td> -->
<!--                 </tr> -->
				
<!--                 <tr>
                  <td colspan="5" style="text-align:right">Total Price:	</td>
<!--                   <td> $228.00</td> -->
<!--                 </tr> -->
<!-- 				 <tr> 
                  <td colspan="5" style="text-align:right">Total Discount:	</td>
<!--                   <td> $50.00</td> -->
<!--                 </tr> -->
<!-- 				 <tr> 
                  <td colspan="5" style="text-align:right"><strong>TOTAL ($228 - $50 + $31) =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> $155.00 </strong></td>
<!--                 </tr> -->
				</tbody>
            </table>
		
	<a href="login.html" class="btn btn-large pull-right">Proceed to Checkout <i class="icon-arrow-right"></i></a>

</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
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