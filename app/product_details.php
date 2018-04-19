<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('header.php') ?>
    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
        .set{
            content: "\2605";
            position: absolute;
        }
        .rating {
            float: left;
            unicode-bidi: bidi-override;
            direction: rtl;
        }
        .rating > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
        }
        .rating > span:hover:before,
        .rating > span:hover ~ span:before {
            content: "\2605";
            position: absolute;
        }
    </style>
  </head>
<body>
<!-- Navbar ================================================== -->
    <?php include('navbar.php'); ?>
<!-- Header End====================================================================== -->
<div id="mainBody">
    <div class="container">

        <script>
            function openTab(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>


    <div class="row">
<!-- Sidebar ================================================== -->
    <?php include('sidebar.php'); ?>
<!-- Sidebar end=============================================== -->
    <div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
    <li class="active">Product Details</li>
    </ul>   
    <div class="row">     
            <div id="gallery" class="span3">
                
                <a href="themes/images/products/large/f1.jpg" title="Fujifilm FinePix S2950 Digital Camera">
                    <img src="themes/images/products/large/3.jpg" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
                </a>
                <div id="differentview" class="moreOptopm carousel slide">
                    <div class="carousel-inner">
                      <div class="item active">
                       <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                       <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                       <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                      </div>
                      <div class="item">
                       <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                       <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                       <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                      </div>
                    </div>
                  </div>
                  
                 <div class="btn-toolbar">
                  <div class="btn-group">
                    <span class="btn"><i class="icon-envelope"></i></span>
                    <span class="btn" ><i class="icon-print"></i></span>
                    <span class="btn" ><i class="icon-zoom-in"></i></span>
                    <span class="btn" ><i class="icon-star"></i></span>
                    <span class="btn" ><i class=" icon-thumbs-up"></i></span>
                    <span class="btn" ><i class="icon-thumbs-down"></i></span>
                  </div>
                </div>
            </div>
            <div class="span6">
                <h3>Fujifilm FinePix S2950 Digital Camera  </h3>
                <div class="rating">
                    <span>☆</span><span>☆</span><span>★</span><span>★</span><span>★</span>
                </div>
                <i style="float: none"></i>
                <hr class="soft"/>
                <form class="form-horizontal qtyFrm">
                  <div class="control-group">
                    <label class="control-label"><span>R222.00</span></label>
                    <div class="controls">
                    <input type="number" class="span1" placeholder="Qty."/>
                      <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
                    </div>
                  </div>
                </form>
                
                <hr class="soft"/>
                <h4>100 items in stock</h4>
                <form class="form-horizontal qtyFrm pull-right">
                  <div class="control-group">
                    <label class="control-label"><span>Color</span></label>
                    <div class="controls">
                      <select class="span2">
                          <option>Black</option>
                          <option>Red</option>
                          <option>Blue</option>
                          <option>Brown</option>
                        </select>
                    </div>
                  </div>
                </form>

                </p>
                <br class="clr"/>
            <a href="#" name="detail"></a>
            <hr class="soft"/>
            </div>
            
            <div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
              <li><a href="#profile" data-toggle="tab">Related Products</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
                <div class="tab">
                    <button class="tablinks active" onclick="openTab(event, 'product-info')">Product Information</button>
                    <button class="tablinks" onclick="openTab(event, 'description')">Description</button>
                    <button class="tablinks" onclick="openTab(event, 'reviews')">Reviews</button>
                </div>

                <div id="product-info" class="tabcontent" style="display: block;">
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2">Fujifilm</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Model:</td><td class="techSpecTD2">FinePix S2950HD</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Released on:</td><td class="techSpecTD2"> 2011-01-28</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Dimensions:</td><td class="techSpecTD2"> 5.50" h x 5.50" w x 2.00" l, .75 pounds</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Display size:</td><td class="techSpecTD2">3</td></tr>
                        </tbody>
                    </table>
                    <h5>Features</h5>
                    <p class="soft clr">
                    14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br/>
                    OND363338
                    </p>
                    
                </div>

                <div id="description" class="tabcontent">
                    <h5>Manufacturer's Description </h5>
                    <p>
                    With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0" LCD screen and 720p HD (30fps) movie capture.
                    </p>
                </div>

                <div id="reviews" class="tabcontent">
                    <h5>Electric powered Fujinon 18x zoom lens</h5>

                    <p>
                    The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you're at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.
                    </p>
                    <h5>Impressive panoramas</h5>
                    <p>
                    With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It's so easy and the results are impressive.
                    </p>

                    <h5>Sharp, clear shots</h5>
                    <p>
                    Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm's Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.
                </div>
                
                </p>
              </div>
        <div class="tab-pane fade" id="profile">
        <div id="myTab" class="pull-right">
         <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
         <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
        </div>
        <br class="clr"/>
        <hr class="soft"/>
        <div class="tab-content">
            <div class="tab-pane" id="listView">
                <div class="row">     
                    <div class="span2">
                        <img src="themes/images/products/4.jpg" alt=""/>
                    </div>
                    <div class="span4">
                        <h3>New | Available</h3>                
                        <hr class="soft"/>
                        <h5>Product Name </h5>
                        <p>
                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                        that is why our goods are so popular..
                        </p>
                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                        <br class="clr"/>
                    </div>
                    <div class="span3 alignR">
                    <form class="form-horizontal qtyFrm">
                    <h3> R222.00</h3>
                    <label class="checkbox">
                        <input type="checkbox">  Adds product to compair
                    </label><br/>
                    <div class="btn-group">
                      <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                      <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                     </div>
                        </form>
                    </div>
            </div>
            <hr class="soft"/>
            <div class="row">     
                    <div class="span2">
                        <img src="themes/images/products/5.jpg" alt=""/>
                    </div>
                    <div class="span4">
                        <h3>New | Available</h3>                
                        <hr class="soft"/>
                        <h5>Product Name </h5>
                        <p>
                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                        that is why our goods are so popular..
                        </p>
                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                        <br class="clr"/>
                    </div>
                    <div class="span3 alignR">
                    <form class="form-horizontal qtyFrm">
                        <h3> R222.00</h3>
                        <label class="checkbox">
                        <input type="checkbox">  Adds product to compair
                        </label><br/>
                        <div class="btn-group">
                        <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                        <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                        </div>
                    </form>
                    </div>
            </div>
            <hr class="soft"/>
            <div class="row">     
                    <div class="span2">
                    <img src="themes/images/products/6.jpg" alt=""/>
                    </div>
                    <div class="span4">
                        <h3>New | Available</h3>                
                        <hr class="soft"/>
                        <h5>Product Name </h5>
                        <p>
                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                        that is why our goods are so popular..
                        </p>
                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                        <br class="clr"/>
                    </div>
                    <div class="span3 alignR">
                    <form class="form-horizontal qtyFrm">
                    <h3> R222.00</h3>
                    <label class="checkbox">
                        <input type="checkbox">  Adds product to compair
                    </label><br/>
                <div class="btn-group">
                  <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                  <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                 </div>
                        </form>
                    </div>
            </div>
            <hr class="soft"/>
            <div class="row">     
                    <div class="span2">
                    <img src="themes/images/products/7.jpg" alt=""/>
                    </div>
                    <div class="span4">
                        <h3>New | Available</h3>                
                        <hr class="soft"/>
                        <h5>Product Name </h5>
                        <p>
                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                        that is why our goods are so popular..
                        </p>
                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                        <br class="clr"/>
                    </div>
                    <div class="span3 alignR">
                        <form class="form-horizontal qtyFrm">
                        <h3> R222.00</h3>
                        <label class="checkbox">
                        <input type="checkbox">  Adds product to compair
                        </label><br/>
                        <div class="btn-group">
                        <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                        <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                        </div>
                        </form>
                    </div>
            </div>
            
            <hr class="soft"/>
            <div class="row">     
                    <div class="span2">
                    <img src="themes/images/products/8.jpg" alt=""/>
                    </div>
                    <div class="span4">
                        <h3>New | Available</h3>                
                        <hr class="soft"/>
                        <h5>Product Name </h5>
                        <p>
                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                        that is why our goods are so popular..
                        </p>
                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                        <br class="clr"/>
                    </div>
                    <div class="span3 alignR">
                        <form class="form-horizontal qtyFrm">
                        <h3> R222.00</h3>
                        <label class="checkbox">
                        <input type="checkbox">  Adds product to compair
                        </label><br/>
                        <div class="btn-group">
                        <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                        <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                        </div>
                        </form>
                    </div>
            </div>
            <hr class="soft"/>
                <div class="row">     
                    <div class="span2">
                    <img src="themes/images/products/9.jpg" alt=""/>
                    </div>
                    <div class="span4">
                        <h3>New | Available</h3>                
                        <hr class="soft"/>
                        <h5>Product Name </h5>
                        <p>
                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                        that is why our goods are so popular..
                        </p>
                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                        <br class="clr"/>
                    </div>
                    <div class="span3 alignR">
                        <form class="form-horizontal qtyFrm">
                        <h3> R222.00</h3>
                        <label class="checkbox">
                        <input type="checkbox">  Adds product to compair
                        </label><br/>
                        <div class="btn-group">
                        <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                        <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                        </div>
                        </form>
                    </div>
            </div>
            <hr class="soft"/>
        </div>
            <div class="tab-pane active" id="blockView">
                <ul class="thumbnails">
                    <li class="span3">
                      <div class="thumbnail">
                        <a href="product_details.html"><img src="themes/images/products/10.jpg" alt=""/></a>
                        <div class="caption">
                          <h5>Manicure &amp; Pedicure</h5>
                          <p> 
                            Lorem Ipsum is simply dummy text. 
                          </p>
                          <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <div class="thumbnail">
                        <a href="product_details.html"><img src="themes/images/products/11.jpg" alt=""/></a>
                        <div class="caption">
                          <h5>Manicure &amp; Pedicure</h5>
                          <p> 
                            Lorem Ipsum is simply dummy text. 
                          </p>
                          <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <div class="thumbnail">
                        <a href="product_details.html"><img src="themes/images/products/12.jpg" alt=""/></a>
                        <div class="caption">
                          <h5>Manicure &amp; Pedicure</h5>
                          <p> 
                            Lorem Ipsum is simply dummy text. 
                          </p>
                           <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <div class="thumbnail">
                        <a href="product_details.html"><img src="themes/images/products/13.jpg" alt=""/></a>
                        <div class="caption">
                          <h5>Manicure &amp; Pedicure</h5>
                          <p> 
                            Lorem Ipsum is simply dummy text. 
                          </p>
                           <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <div class="thumbnail">
                        <a href="product_details.html"><img src="themes/images/products/1.jpg" alt=""/></a>
                        <div class="caption">
                          <h5>Manicure &amp; Pedicure</h5>
                          <p> 
                            Lorem Ipsum is simply dummy text. 
                          </p>
                           <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <div class="thumbnail">
                        <a href="product_details.html"><img src="themes/images/products/2.jpg" alt=""/></a>
                        <div class="caption">
                          <h5>Manicure &amp; Pedicure</h5>
                          <p> 
                            Lorem Ipsum is simply dummy text. 
                          </p>
                           <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>
                        </div>
                      </div>
                    </li>
                  </ul>
            <hr class="soft"/>
            </div>
        </div>
                <br class="clr">
                     </div>
        </div>
          </div>

    </div>
</div>
</div> </div>
</div>
<!-- MainBody End ============================= -->
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