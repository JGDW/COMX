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
        .rating-no-hover {
            float: left;
            unicode-bidi: bidi-override;
            direction: rtl;
        }
        .rating-no-hover > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
            color: #CCCC00;
            text-shadow:
                -1px -1px 0 #000,
                1px -1px 0 #000,
                -1px 1px 0 #000,
                1px 1px 0 #000;
        }
        .bigger-stars {
            font-size: 25px;
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
            color: #CCCC00;
            text-shadow:
                -1px -1px 0 #000,
                1px -1px 0 #000,
                -1px 1px 0 #000,
                1px 1px 0 #000;
        }
        .rating > span:hover:before,
        .rating > span:hover ~ span:before {
            content: "\2605";
            position: absolute;
        }

        .hasTooltip span {
            display: none;
            color: #000;
            text-decoration: none;
            padding: 3px;/* Position the tooltip */
            position: absolute;
        }

        .hasTooltip:hover span {
            display: block;
            position: absolute;
            background-color: grey;
            color: white;
            border: 1px solid #CCC;
            margin: 2px 10px;
        }

        .reviewer {    
            font-weight: bolder;
            font-size: 20px;
        }

        .date {
            font-size: 14px;
        }
        .review-comment {
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 5px;
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
            <div id="gallery" class="span3" >
                
                <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v1.JPG" title="NZXT H700i Gaming Case - Black/Red">
                    <img src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v1.JPG" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
                </a>
                <div id="differentview" class="moreOptopm carousel slide">
                    <div class="carousel-inner" >
                      <div class="item active" >
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v1.jpg"> <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v1.jpg" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v2.JPG"> <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v2.JPG" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v3.JPG" > <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v3.JPG" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v4.JPG" > <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v4.JPG" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v5.JPG" > <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v5.JPG" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v6.JPG" > <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v6.JPG" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v7.JPG" > <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v7.JPG" alt=""/></a>
                      </div>
                      <div class="item" >
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v7.JPG" > <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v7.JPG" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v6.JPG" > <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v6.JPG" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v5.JPG" > <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v5.JPG" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v4.JPG" > <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v4.JPG" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v3.JPG" > <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v3.JPG" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v2.JPG"> <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v2.JPG" alt=""/></a>
                       <a href="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v1.jpg"> <img style="width:35px; height: 26px" src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v1.jpg" alt=""/></a>
                      </div>
                    </div>
                  </div>
<!--                  Commented out. Don't know the purpose of this-->
<!--                 <div class="btn-toolbar">-->
<!--                  <div class="btn-group">-->
<!--                    <span class="btn"><i class="icon-envelope"></i></span>-->
<!--                    <span class="btn" ><i class="icon-print"></i></span>-->
<!--                    <span class="btn" ><i class="icon-zoom-in"></i></span>-->
<!--                    <span class="btn" ><i class="icon-star"></i></span>-->
<!--                    <span class="btn" ><i class=" icon-thumbs-up"></i></span>-->
<!--                    <span class="btn" ><i class="icon-thumbs-down"></i></span>-->
<!--                  </div>-->
<!--                </div>-->
            </div>
            <div class="span6">
                <h4>NZXT H700i Gaming Case - Black/Red / Water-Cooling
                    Installation Simplified / Adaptive Noise Reduction /
                    Easy Storage Installation / Max GPU Clearance Up to 413mm</h4>
                <div class="rating bigger-stars">
                    <span>☆</span><span>☆</span><span>★</span><span>★</span><span>★</span>
                </div>
                <i style="float: none"></i>
                <hr class="soft"/>
                <form class="form-horizontal qtyFrm">
                  <div class="control-group">
                      <h4>100 items in stock</h4>
                    <label class="control-label"><span>R222.00</span></label>
                    <div class="controls">
                    <input type="number" class="span1" placeholder="Qty."/>
                      <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
                    </div>
                  </div>
                </form>
                
<!--                <hr class="soft"/>-->
<!--                <form class="form-horizontal qtyFrm pull-right">-->
<!--                  <div class="control-group">-->
<!--                    <label class="control-label"><span>Color</span></label>-->
<!--                    <div class="controls">-->
<!--                      <select class="span2">-->
<!--                          <option>Black/Red</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </form>-->

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
                            <tr class="techSpecRow">
                                <td class="techSpecTD1 ">Brand: </td>
                                <td class="techSpecTD2">NZXT</td>
                            </tr>
                            <tr class="techSpecRow ">
                                <td class="techSpecTD1 hasTooltip" rowspan="2">
                                    <span>Tower cases are often categorized as mini-tower, midi-tower, mid-tower or full-tower.
                                        The terms are subjective and inconsistently defined by different manufacturers.
                                        Full tower cases are typically 560 mm (22 in) or more in height and intended to stand on the floor.</span>Dimensions:</td>
                                <td class="techSpe cTD2">W: 230mm H: 494mm D: 494mm (without feet)</td>
                            </tr>
                            <tr> <td>W: 230mm H: 516mm D: 494mm (with feet)</td></tr>
                            <tr class="techSpecRow" id="weight">
                                <td class="techSpecTD1">Weight:</td>
                                <td class="techSpecTD2">12.27kg</td>
                            </tr>
                            <tr class="techSpecRow" id = "motherboard">
                                <td class="techSpecTD1 hasTooltip"><span> The size of the motherboard is often called the Form Factor and there
                                        are several standards. The form factor identifies the size of the circuit board, the location
                                        of the slots as well as the location of the faceplate that comes out the back of the computer.
                                        The form factor also identifies the location of the holes that are used to mount the motherboard
                                        into the system case.</span>Motherboard Support:</td>
                                <td class="techSpecTD2">Mini-ITX, MicroATX, ATX and EATX(Up to 272mm or 10.7-inches)</td>
                            </tr>
                            <tr class="techSpecRow" id ="io">
                                <td class="techSpecTD1 hasTooltip" rowspan="3"><span>USB (Universal Serial Bus)  can support the connection
                                        of many kinds of devices (keyboard, mouse, printer, audio in/out, external floppy or Zip drives,
                                        scanner, flash drive, etc.) USB 2.0 ports are much slower in data transmission than the newer USB 3.1 ports</span> I/O Ports:</td>
                                <td class="techSpecTD2">2 x USB 2.0</td>
                            </tr>
                            <tr> <td>2 x USB 3.1 Gen 1</td></tr>
                            <tr> <td>1 x Audio/Mic</td></tr>
                            <tr class="techSpecRow">
                                <td class="techSpecTD1 hasTooltip"><span>accessories that utilize a mesh (usually made up of polyester,
                                        but can be metal) to help capture dust particles as they attempt to pass into open vents.
                                        These are particularly handy for fan intakes, not only protecting the powered blades,
                                        but also everything else located within the case.</span>Filters:</td>
                                <td class="techSpecTD2">Front and PSU Intake</td>
                            </tr>
                            <tr class="techSpecRow" >
                                <td class="techSpecTD1 hasTooltip" rowspan="3"><span>The unique Smart Device includes features from our HUE+
                                        and GRID+ V3 digital controllers, allowing for effortless control of RGB lighting and fans through
                                        CAM software. Customized lighting is streamlined with integrated and individually addressable RGB
                                        LED strips. </span> Smart Device: </td>
                                <td class="techSpecTD2"> 3 x Fan channels with Max 10W per channel output</td>
                            </tr>
                            <tr> <td> 1 x RGB LED port support up to 4 x HUE+ LED strips or 5 x Aer RGB fans</td></tr>
                            <tr> <td>Built-in noise detection module</td></tr>
                            <tr class="techSpecRow hasTooltip" >
                                <td class="techSpecTD1"><span>In computing, the expansion card, expansion board, adapter card or accessory
                                        card is a printed circuit board that can be inserted into an electrical connector, or expansion slot,
                                        on a computer motherboard, backplane or riser card to add functionality to a computer system
                                    </span>Expansion slots:</td>
                                <td class="techSpecTD2"> 7</td>
                            </tr>
                            <tr class="techSpecRow hasTooltip">
                                <td class="techSpecTD1" rowspan="2"><span>A drive bay is a standard-sized area for adding hardware to a computer.
                                        Most drive bays are fixed to the inside of a case, but some can be removed.</span> Drive Bays: </td>
                                <td class="techSpecTD2">2.5”: 7</td>
                            </tr>
                            <tr> <td> 3.5”: 2+1</td></tr>
                            <tr class="techSpecRow" >
                                <td class="techSpecTD1 hasTooltip" rowspan="2"> Radiator Support: </td>
                                <td class="techSpecTD2">Front: 2 x 140 or 3 x 120mm with Push/Pull</td>
                            </tr>
                            <tr> <td> Top: 2 x 140 or 3 x 120</td></tr>
                            <tr class="techSpecRow">
                                <td class="techSpecTD1" rowspan="3"> Fan Support: </td>
                                <td class="techSpecTD2">Front: 3 x 120/2 x 140mm (3 Aer F120 Case Version included)</td>
                            </tr>
                            <tr> <td>Top: 3 x 120/2 x 140mm</td></tr>
                            <tr> <td>Rear: 1 x 120/1 x 140mm (1 Aer F140 Case Version included)</td></tr>
                        </tbody>
                    </table>
                </div>

                <div id="description" class="tabcontent">
                    <h5>Manufacturer's Description </h5>
                    <p>
                        Based in California, NZXT follow a simple but important principle.
                        Design and functionality are two sides of the same coin. NZXT aims to
                        make every computer case both look good and be as functional as possible.
                        Specialised in PC chassis and cooling solutions, NZXT recognises the huge
                        demand for aesthetically pleasing hardware products and offer a vast range of beautiful
                        cases and cooling hardware aimed at the low, mid, and high-end user so there is always
                        something for you from NZXT. Its range covers fans & fan controllers,
                        quiet PC cases (E-ATX, ATX), and power supplies.
                    </p>
                </div>

                <div id="reviews" class="tabcontent">
                    <div class = "review-comment">
                        <div class = 'reviewer'>
                            <span class = 'review-person'> Joseph  </span>
                            <span class = 'date'>( Wednesday, 06 December 2017 )</span>
                        </div>
                        <br>
                        <div>
                            <div class="rating-no-hover" style="font-size: 25px">
                                <span>☆</span><span>☆</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>

                        <br>
                        <br>
                        <p>
                            Do yourself a favor: Disconnect the smart device, plug everything into the motherboard, and do it yourself. It’s a frustrating, buggy, dysfunctional mess, and should have never been included with the case. The smart device casts a gloomy shadow over an otherwise market-dominating design. NZXT’s designers did well to build a case which brilliantly manages cables, integrates detail-oriented features, and fits together flushly. The rear panel eject button is a small, mechanically rewarding feature that further reinforces this point. The case cools reasonably; it’s not the best, obviously, but it also doesn’t claim to offer “high airflow,” and its panel build quality far-and-away exceeds the recently launched H500P. While beating it, if marginally. Removing the front panel only improves thermals ~6C, which means that NZXT is operating near its maximum cooling potential for the stock fan configuration -- the panel is well-designed and breathes reasonably, considering how the case is marketed.
                        </p>
                    </div>
                    <div class = "review-comment">
                        <div class = 'reviewer'> 
                            <span class = 'review-person'> DMehaffy  </span>
                            <span class = 'date'>( Thursday, 16 November 2017 )</span>
                        </div>
                        <br>
                        <div>
                            <div class="rating-no-hover" style="font-size: 25px">
                                <span>☆</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <br>
                        <br>
                        <p>
                            This is my first PC case ever! I am quite happy with it. I do not really know better... So maybe I should not have left a comment... xD
                        </p>
                    </div>
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
                        <img src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v9.JPG" alt=""/>
                    </div>
                    <div class="span4">
                        <h3>New | Available</h3>                
                        <hr class="soft"/>
                        <h5>NZXT H700i Mid-Tower Gaming Case - Matte White </h5>
                        <a class="btn btn-small pull-right" href="product_details.php">View Details</a>
                        <br class="clr"/>
                    </div>
                    <div class="span3 alignR">
                    <form class="form-horizontal qtyFrm">
                    <h3> R222.00</h3>
                    <label class="checkbox">
                        <input type="checkbox">  Adds product to compair
                    </label><br/>
                    <div class="btn-group">
                      <a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                      <a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                     </div>
                        </form>
                    </div>
            </div>
            <hr class="soft"/>
            <div class="row">     
                    <div class="span2">
                        <img src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v12.JPG" alt=""/>
                    </div>
                    <div class="span4">
                        <h3>New | Available</h3>                
                        <hr class="soft"/>
                        <h5>NZXT H700i Mid-Tower Gaming Case - Matte Black </h5>
                        <a class="btn btn-small pull-right" href="product_details.php">View Details</a>
                        <br class="clr"/>
                    </div>
                    <div class="span3 alignR">
                    <form class="form-horizontal qtyFrm">
                        <h3> R222.00</h3>
                        <label class="checkbox">
                        <input type="checkbox">  Adds product to compair
                        </label><br/>
                        <div class="btn-group">
                        <a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                        <a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                        </div>
                    </form>
                    </div>
            </div>
            <hr class="soft"/>
            <div class="row">
                    <div class="span2">
                    <img src="assets/images/towers/nzxt-h700i-black-red-mid-tower-gaming-case-300px-v12.JPG" alt=""/>
                    </div>
                    <div class="span4">
                        <h3>New | Available</h3>
                        <hr class="soft"/>
                        <h5>NZXT H700i Gaming Case - Black/Blue </h5>
                        <a class="btn btn-small pull-right" href="product_details.php">View Details</a>
                        <br class="clr"/>
                    </div>
                    <div class="span3 alignR">
                    <form class="form-horizontal qtyFrm">
                    <h3> R222.00</h3>
                    <label class="checkbox">
                        <input type="checkbox">  Adds product to compair
                    </label><br/>
                <div class="btn-group">
                  <a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                  <a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                 </div>
                        </form>
                    </div>
            </div>
<!--            <hr class="soft"/>-->
<!--            <div class="row">-->
<!--                    <div class="span2">-->
<!--                    <img src="themes/images/products/7.jpg" alt=""/>-->
<!--                    </div>-->
<!--                    <div class="span4">-->
<!--                        <h3>New | Available</h3>-->
<!--                        <hr class="soft"/>-->
<!--                        <h5>Product Name </h5>-->
<!--                        <p>-->
<!--                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies --->
<!--                        that is why our goods are so popular..-->
<!--                        </p>-->
<!--                        <a class="btn btn-small pull-right" href="product_details.php">View Details</a>-->
<!--                        <br class="clr"/>-->
<!--                    </div>-->
<!--                    <div class="span3 alignR">-->
<!--                        <form class="form-horizontal qtyFrm">-->
<!--                        <h3> R222.00</h3>-->
<!--                        <label class="checkbox">-->
<!--                        <input type="checkbox">  Adds product to compair-->
<!--                        </label><br/>-->
<!--                        <div class="btn-group">-->
<!--                        <a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>-->
<!--                        <a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>-->
<!--                        </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--            </div>-->
<!--            -->
<!--            <hr class="soft"/>-->
<!--            <div class="row">     -->
<!--                    <div class="span2">-->
<!--                    <img src="themes/images/products/8.jpg" alt=""/>-->
<!--                    </div>-->
<!--                    <div class="span4">-->
<!--                        <h3>New | Available</h3>                -->
<!--                        <hr class="soft"/>-->
<!--                        <h5>Product Name </h5>-->
<!--                        <p>-->
<!--                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - -->
<!--                        that is why our goods are so popular..-->
<!--                        </p>-->
<!--                        <a class="btn btn-small pull-right" href="product_details.php">View Details</a>-->
<!--                        <br class="clr"/>-->
<!--                    </div>-->
<!--                    <div class="span3 alignR">-->
<!--                        <form class="form-horizontal qtyFrm">-->
<!--                        <h3> R222.00</h3>-->
<!--                        <label class="checkbox">-->
<!--                        <input type="checkbox">  Adds product to compair-->
<!--                        </label><br/>-->
<!--                        <div class="btn-group">-->
<!--                        <a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>-->
<!--                        <a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>-->
<!--                        </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--            </div>-->
<!--            <hr class="soft"/>-->
<!--                <div class="row">     -->
<!--                    <div class="span2">-->
<!--                    <img src="themes/images/products/9.jpg" alt=""/>-->
<!--                    </div>-->
<!--                    <div class="span4">-->
<!--                        <h3>New | Available</h3>                -->
<!--                        <hr class="soft"/>-->
<!--                        <h5>Product Name </h5>-->
<!--                        <p>-->
<!--                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - -->
<!--                        that is why our goods are so popular..-->
<!--                        </p>-->
<!--                        <a class="btn btn-small pull-right" href="product_details.php">View Details</a>-->
<!--                        <br class="clr"/>-->
<!--                    </div>-->
<!--                    <div class="span3 alignR">-->
<!--                        <form class="form-horizontal qtyFrm">-->
<!--                        <h3> R222.00</h3>-->
<!--                        <label class="checkbox">-->
<!--                        <input type="checkbox">  Adds product to compair-->
<!--                        </label><br/>-->
<!--                        <div class="btn-group">-->
<!--                        <a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>-->
<!--                        <a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>-->
<!--                        </div>-->
<!--                        </form>-->
<!--                    </div>-->
            </div>
            <hr class="soft"/>
        </div>
            <div class="tab-pane active" id="blockView">
                <ul class="thumbnails">
                    <li class="span3">
                      <div class="thumbnail">
                        <a href="product_details.php"><img src="assets/images/graphics_cards/msi-gtx-1080-ti-armor-pc-graphics-card-400px-v1.jpg" alt=""/></a>
                        <div class="caption">
                          <h5>MSI GTX 1080</h5>
                          <p>
                              GEFORCE GTX 1080 ARMOR OC GRAPHICS CARD
                          </p>
                          <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <div class="thumbnail">
                        <a href="product_details.php"><img src="assets/images/graphics_cards/msi-gtx-1080-ti-gaming-x-graphics-card-400px-v1.jpg" alt=""/></a>
                        <div class="caption">
                          <h5>MSI GEFORCE GTX 1080</h5>
                          <p>
                              MSI GEFORCE GTX 1080 GAMING  X
                          </p>
                          <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <div class="thumbnail">
                        <a href="product_details.php"><img src="assets/images/frontpage/corsair-h150i-pro-rgb-liquid-cpu-cooler-300px-v3.jpg" alt=""/></a>
                        <div class="caption">
                          <h5>Corsair H150i PRO RGB Liquid CPU Cooler</h5>
                          <p>
                              BE SEEN, NOT HEARD
                          </p>
                           <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <div class="thumbnail">
                        <a href="product_details.php"><img src="assets/images/frontpage/ASUS-PG348Q-ROG-Swift-G-Sync-Gaming-Monitor-300px-v2.jpg" alt=""/></a>
                        <div class="caption">
                          <h5>ASUS ROG SWIFT PG348Q 34" G-SYNC GAMING MONITOR</h5>
                          <p>
                              Expand Your Gaming Horizons
                          </p>
                           <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>
                        </div>
                      </div>
                    </li>
<!--                    <li class="span3">-->
<!--                      <div class="thumbnail">-->
<!--                        <a href="product_details.php"><img src="themes/images/products/1.jpg" alt=""/></a>-->
<!--                        <div class="caption">-->
<!--                          <h5>Manicure &amp; Pedicure</h5>-->
<!--                          <p> -->
<!--                            Lorem Ipsum is simply dummy text. -->
<!--                          </p>-->
<!--                           <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </li>-->
<!--                    <li class="span3">-->
<!--                      <div class="thumbnail">-->
<!--                        <a href="product_details.php"><img src="themes/images/products/2.jpg" alt=""/></a>-->
<!--                        <div class="caption">-->
<!--                          <h5>Manicure &amp; Pedicure</h5>-->
<!--                          <p> -->
<!--                            Lorem Ipsum is simply dummy text. -->
<!--                          </p>-->
<!--                           <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R222.00</a></h4>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </li>-->
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
    <div class="image+s patterns">
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
</html>