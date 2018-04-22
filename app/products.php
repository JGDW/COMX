<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include('header.php') ?>
   </head>
   <body>
      <!-- Navbar ================================================== -->
      <?php include('navbar.php'); ?>
      <!-- Header End====================================================================== -->
      <div id="mainBody">
         <div class="container">
            <div class="row">
               <!-- Filter bar ================================================== -->
               <?php include('filterbar.php') ?>
               <!-- Filter bar ================================================== -->
               <!-- Sidebar ================================================== -->
               <!-- Sidebar end=============================================== -->
               <!-- Chat=============================================== -->
               <?php include('chat.php') ?>
               <!-- Chat end=============================================== -->
               <div class="span9">
                  <ul class="breadcrumb">
                     <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                     <li class="active">Laptops</li>
                  </ul>
                  <!-- <h3> Laptops <small class="pull-right"> 40 products are available </small></h3>	
                     <hr class="soft"/>
                     <p>
                     	If you're looking for the best-priced laptop specials & deals that are packed with performance yet still light on your pocket then you have stumbled upon the right page. We know that finding your ideal laptop can be tricky. With so many different brands, features, models and uses for a laptop, finding the right laptop deals can be a time-consuming task.
                     
                     	We strive to offer the best laptop specials in South Africa, covering a vast variety of laptop deals from Intel Core i7 laptops to high-end gaming laptops. Scroll down and take a look at our current laptops for sale for the best laptop deals available from our whole range of laptop and notebook offerings.
                     </p> -->
                  <hr class="soft"/>
                  <form class="form-horizontal span6">
                     <div class="control-group">
                        <label class="control-label alignL">Sort By </label>
                        <select>
                           <option>Product name A - Z</option>
                           <option>Product name Z - A</option>
                           <option>Product Stock</option>
                           <option>Price Lowest first</option>
                        </select>
                     </div>
                  </form>
                  <div id="myTab" class="pull-right">
                     <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
                     <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
                  </div>
                  <br class="clr"/>
                  <div class="tab-content">
                     <!-- THE TAB VIEW WITH DETAILS...  -->
                     <div class="tab-pane" id="listView">
                        <div class="row">
                           <div class="span2">
                              <a  href="product_details.html"><img src="./assets/images/laptops/asus-fx550jk-intel-gaming-laptop-deal-0005.jpg" alt="" /></a>
                           </div>
                           <div class="span4">
                              <h3>Available</h3>
                              <hr class="soft"/>
                              <h4>ASUS FX550JK</h4>
                              <p>
                                 It is powered by an Intel Core processor and an NVIDIA graphics card that deliver smooth, responsive performance. It integrates faster processors, more powerful graphics and an advanced memory controller, adequate for daily multi-task computing or multimedia entertainment. This setup can handle many applications at once without slowing down your PC.
                              </p>
                              <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                              <br class="clr"/>
                           </div>
                           <div class="span3 alignR">
                              <form class="form-horizontal qtyFrm">
                                 <h3> R 4,499</h3>
                                 <label class="checkbox">
                                 <input type="checkbox">  Adds product to compare
                                 </label><br/>
                                 <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                 <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                              </form>
                           </div>
                        </div>
                        <hr class="soft"/>
                        <div class="row">
                           <div class="span2">
                              <img src="./assets/images/laptops/lenovo-ideapad-320-core-i5-laptop-deal-1000px-v1-00071.jpg" alt=""/>
                           </div>
                           <div class="span4">
                              <h3>New | Available</h3>
                              <hr class="soft"/>
                              <h4>Lenovo Ideapad 320 </h4>
                              <p>
                                 Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                 that is why our goods are so popular..
                              </p>
                              <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                              <br class="clr"/>
                           </div>
                           <div class="span3 alignR">
                              <form class="form-horizontal qtyFrm">
                                 <h3> R 6,039</h3>
                                 <label class="checkbox">
                                 <input type="checkbox">  Adds product to compare
                                 </label><br/>
                                 <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                 <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                              </form>
                           </div>
                        </div>
                        <hr class="soft"/>
                        <div class="row">
                           <div class="span2">
                              <img src="./assets/images/laptops/lenovo-v310-core-i5-pro-laptop-deal-1000px-v1-0003.jpg" alt=""/>
                           </div>
                           <div class="span4">
                              <h3>New | Available</h3>
                              <hr class="soft"/>
                              <h4>Lenovo V310 </h4>
                              <p>
                                 The Lenovo V310 is designed to meet all of your business needs, including budget. It's very configurable and has a range of options, from state-of-the-art processing to a flexible dual storage system. Plus, with its optional battery feature, this portable laptop can keep going for up to 12 hours.
                              </p>
                              <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                              <br class="clr"/>
                           </div>
                           <div class="span3 alignR">
                              <form class="form-horizontal qtyFrm">
                                 <h3> R 6,349</h3>
                                 <label class="checkbox">
                                 <input type="checkbox">  Adds product to compare
                                 </label><br/>
                                 <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                 <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                              </form>
                           </div>
                        </div>
                        <hr class="soft"/>
                        <div class="row">
                           <div class="span2">
                              <img src="./assets/images/laptops/msi-gl63-8rd-gtx-1050-ti-core-i5-gaming-laptop-deal-1000px-v1-00031.jpg" alt=""/>
                           </div>
                           <div class="span4">
                              <h3>Available</h3>
                              <hr class="soft"/>
                              <h4>MSI GL63 </h4>
                              <p>
                                 Built to be a powerful budget gaming laptop, this laptop will easily handle heavy workloads as well as entry level gaming.
                              </p>
                              <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                              <br class="clr"/>
                           </div>
                           <div class="span3 alignR">
                              <form class="form-horizontal qtyFrm">
                                 <h3> R 8,999</h3>
                                 <label class="checkbox">
                                 <input type="checkbox">  Adds product to compare
                                 </label><br/>
                                 <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                 <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                              </form>
                           </div>
                        </div>
                        <hr class="soft"/>
                        <div class="row">
                           <div class="span2">
                              <img src="./assets/images/laptops/asus-gl703ge-core-i7-gtx-1050-ti-gaming-laptop-deal-1000px-v1-0002.jpg" alt=""/>
                           </div>
                           <div class="span4">
                              <h3 style="color: red">Not Available</h3>
                              <hr class="soft"/>
                              <h4>ASUS gl703ge </h4>
                              <p>
                                 The new ROG Strix Scar Edition is built for the next generation of gamers looking to take their game to the next level thanks to up to an 8th-Gen Intel Core i7 processor, GTX graphics, and a high refresh rate gaming display. The 8th-Generation Scar Edition brings several refinements to the series, including an AURA SYNC RGB keyboard and 12V fans with Anti-Dust Cooling for improved thermal performance.
                              </p>
                              <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                              <br class="clr"/>
                           </div>
                           <div class="span3 alignR">
                              <form class="form-horizontal qtyFrm">
                                 <h3> R 10,199</h3>
                                 <label class="checkbox">
                                 <input type="checkbox">  Adds product to compare
                                 </label><br/>
                                 <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                 <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                              </form>
                           </div>
                        </div>
                        <hr class="soft"/>
                        <div class="row">
                           <div class="span2">
                              <img src="./assets/images/laptops/msi-ge63-8rf-raider-core-i7-gtx-1070-gaming-laptop-deal-1000px-v1-0001.jpg" alt=""/>
                           </div>
                           <div class="span4">
                              <h3>New | Available</h3>
                              <hr class="soft"/>
                              <h4>MSI GE63 </h4>
                              <p>
                                 A powerful high-end gaming laptop that is sure to handle any taks with ease. Sporting a 120hz screen and top end internal hardware it offers its users a prestine gaming experience.
                              </p>
                              <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                              <br class="clr"/>
                           </div>
                           <div class="span3 alignR">
                              <form class="form-horizontal qtyFrm">
                                 <h3> R 12,499</h3>
                                 <label class="checkbox">
                                 <input type="checkbox">  Adds product to compare
                                 </label><br/>
                                 <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                 <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                              </form>
                           </div>
                        </div>
                        <hr class="soft"/>
                     </div>
                     <!-- END OF TAB PANE -->
                     <div class="tab-pane  active" id="blockView">
                        <ul class="thumbnails">
                           <li class="span3">
                              <div class="thumbnail"style="max-height:289px; max-width:260px">
                                 <a  href="product_details.html"><img src="./assets/images/laptops/asus-fx550jk-intel-gaming-laptop-deal-0005.jpg" alt="" style="max-height: 90px"/></a>
                                 <div class="caption">
                                    <h5>ASUS FX550JK</h5>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R 4,499</a></h4>
                                 </div>
                              </div>
                           </li>
                           <li class="span3">
                              <div class="thumbnail"style="max-height:289px; max-width:260px">
                                 <a  href="product_details.html"><img src="./assets/images/laptops/lenovo-ideapad-320-core-i5-laptop-deal-1000px-v1-00071.jpg" alt="" style="max-width: 160px"/></a>
                                 <div class="caption">
                                    <h5>Raza Naga Epic Wireless</h5>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R 6,039</a></h4>
                                 </div>
                              </div>
                           </li>
                           <li class="span3">
                              <div class="thumbnail"style="max-height:289px; max-width:260px">
                                 <a  href="product_details.html"><img src="./assets/images/laptops/lenovo-v310-core-i5-pro-laptop-deal-1000px-v1-0003.jpg" alt=""style="max-width: 160px; max-height:160px"/></a>
                                 <div class="caption">
                                    <h5>Corsair H150i Pro</h5>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R 6,349</a></h4>
                                 </div>
                              </div>
                           </li>
                           <li class="span3">
                              <div class="thumbnail" style="max-height:289px; max-width:260px">
                                 <a  href="product_details.html"><img src="./assets/images/laptops/msi-gl63-8rd-gtx-1050-ti-core-i5-gaming-laptop-deal-1000px-v1-00031.jpg" alt=""style="max-width: 160px"/></a>
                                 <div class="caption">
                                    <h5>Dell P3418HW 34inch</h5>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R 8,999</a></h4>
                                 </div>
                              </div>
                           </li>
                           <li class="span3">
                              <div class="thumbnail"style="max-height:289px; max-width:260px">
                                 <a  href="product_details.html"><img src="./assets/images/laptops/asus-gl703ge-core-i7-gtx-1050-ti-gaming-laptop-deal-1000px-v1-0002.jpg" alt=""style="max-width: 160px"/></a>
                                 <div class="caption">
                                    <h5>Vertagear SL5000 Black/White</h5>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R 10,199</a></h4>
                                 </div>
                              </div>
                           </li>
                           <li class="span3">
                              <div class="thumbnail"style="max-height:289px; max-width:260px">
                                 <a  href="product_details.html"><img src="./assets/images/laptops/msi-ge63-8rf-raider-core-i7-gtx-1070-gaming-laptop-deal-1000px-v1-0001.jpg" alt=""style="max-width: 160px"/></a>
                                 <div class="caption">
                                    <h5>ASUS PG348Q ROG Swift</h5>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R 12,499</a></h4>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <a href="compare.html" class="btn btn-large pull-right">Compare Products</a>
                  <div class="pagination">
                     <ul>
                        <li><a href="#">&lsaquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">&rsaquo;</a></li>
                     </ul>
                  </div>
                  <br class="clr"/>
               </div>
            </div>
         </div>
      </div>
      <!-- MainBody End ============================= -->
      <!-- Footer ================================================================== -->
      <?php include('footer.php'); ?>
      <!-- ============================================= -->
   </body>
</html>