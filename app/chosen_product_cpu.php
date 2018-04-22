<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php') ?>
    <style>

        .zebra{
            background-color: #f2f2f2;
        }
        .component-type a{
            color: rgb(25, 144, 213);
            font-weight: 600;
        }

        .btn-lds:hover {
            color: white;
            background-color: #194d72;
        }
        a:hover {
            color: #103148;
        }
        a:active, a:hover {
            outline: 0;
        }
        .btn-lds {
            display: inline-block;
            text-align: center;
            background-color: #2c85c5;
            color: white;
            border-radius: 4px;
            -webkit-transition: color 0.3s cubic-bezier(0.19, 1, 0.22, 1), background-color 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            transition: color 0.3s cubic-bezier(0.19, 1, 0.22, 1), background-color 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            padding: 0.5em 1.5em;
            font-size: 20px;
        }
    </style>
    <style>

        ul, ol {
            margin: 0;
            padding: 0;
        }

        .rating {

            unicode-bidi: bidi-override;
            /*direction: rtl;*/
        }
        .rating > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
        }
    </style>
</head>
<body>
<!-- Navbar ================================================== -->
<?php include('navbar.php'); ?>
<!-- Header End====================================================================== -->
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Filter bar ================================================== -->
          <!--  --><?php /*include('filterbar.php') */?>
            <div id="filter-bar" class="span3" style='float: left'>
                <div>
                    <div class = "filter-heading" style=""><b>Showing results for:</b></div>
                    CPU
                    <br>
                </div>

                <!--Rating-->
                <div id = "brand-filter" >
                    <label class = "filter-heading" for = "brand_type">Rating</label>

                    <input checked="checked" type="checkbox" name="brand_type" value="msi">All<br>
                    <div class="rating">
                        <input type="checkbox" name="brand_type" value="asus"> <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <div class="rating">
                        <input type="checkbox" name="brand_type" value="asus"> <span>★</span><span>★</span><span>★</span><span>★</span><span>☆</span>
                    </div>
                    <div class="rating">
                        <input type="checkbox" name="brand_type" value="asus"> <span>★</span><span>★</span><span>★</span><span>☆</span><span>☆</span>
                    </div>
                    <div class="rating">
                        <input type="checkbox" name="brand_type" value="asus"> <span>★</span><span>★</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                    <div class="rating">
                        <input type="checkbox" name="brand_type" value="asus"> <span>★</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <hr class="soft"/>

                <!--MANUFACTURER-->
                <div id = "brand-filter" >
                    <label class = "filter-heading" for = "brand_type">MANUFACTURER</label>
                    <ul style="list-style: none">
                        <li> <input checked="checked" type="checkbox" name="brand_type" value="msi">All<br></li>
                        <li>  <input type="checkbox" name="brand_type" value="asus">AMD<br></li>
                        <li> <input type="checkbox" name="brand_type" value="lenovo">Intel<br></li>
                    </ul>
                </div>
                <hr class="soft"/>

                <!--SERIES-->
                <div id = "brand-filter" >
                    <label class = "filter-heading" for = "brand_type">SERIES</label>
                    <input checked="checked" type="checkbox" name="brand_type" value="msi">All<br>
                    <ul style="list-style: none">
                        <li>  <input type="checkbox" name="brand_type" value="asus">AMD Ryzen 3<br></li>
                        <li> <input type="checkbox" name="brand_type" value="lenovo">AMD Ryzen 5<br></li>
                        <li> <input type="checkbox" name="brand_type" value="other"> AMD Ryzen 7<br></li>
                        <li><input type="checkbox" name="brand_type" value="other"> Intel Core i5<br></li>
                        <li><input type="checkbox" name="brand_type" value="other"> Intel Core i7<br></li>
                        <li>See all...</li>
                    </ul>
                </div>
                <hr class="soft"/>

                <!--FAMILY-->
                <div id = "brand-filter" >
                    <label class = "filter-heading" for = "brand_type">FAMILY</label>
                    <ul style="list-style: none">
                        <li> <input checked="checked" type="checkbox" name="brand_type" value="msi">All<br></li>
                        <li>   <input type="checkbox" name="brand_type" value="asus">Coffee Lake-S<br></li>
                        <li>  <input type="checkbox" name="brand_type" value="lenovo">Kaby Lake-S<br></li>
                        <li><input type="checkbox" name="brand_type" value="other"> Kaby Lake-X<br></li>
                        <li><input type="checkbox" name="brand_type" value="other"> Pinnacle Ridge<br></li>
                        <li><input type="checkbox" name="brand_type" value="other"> Skylake-X<br></li>
                        <li>See all...</li>
                    </ul>
                </div>
                <hr class="soft"/>

                <!--SOCKET-->
                <div id = "brand-filter" >
                    <label class = "filter-heading" for = "brand_type">SOCKET</label>
                    <ul style="list-style: none">
                        <li> <input checked="checked" type="checkbox" name="brand_type" value="msi">All<br></li>
                        <li>  <input type="checkbox" name="brand_type" value="asus">AM3+<br></li>
                        <li> <input type="checkbox" name="brand_type" value="lenovo">AM4<br></li>
                        <li><input type="checkbox" name="brand_type" value="other"> LGA1151<br></li>
                        <li><input type="checkbox" name="brand_type" value="other"> LGA2011-3<br></li>
                        <li><input type="checkbox" name="brand_type" value="other"> TR4<br></li>
                        <li>See all...</li>
                    </ul>
                </div>
                <hr class="soft"/>

                <!--INTEGRATED GRAPHICS-->
                <div id = "brand-filter" >
                    <label class = "filter-heading" for = "brand_type">INTEGRATED GRAPHICS</label>
                    <ul style="list-style: none">
                        <li> <input checked="checked" type="checkbox" name="brand_type" value="msi">All<br></li>
                        <li>  <input type="checkbox" name="brand_type" value="asus">None<br></li>
                        <li> <input type="checkbox" name="brand_type" value="lenovo">Intel HD Graphics 530<br></li>
                        <li><input type="checkbox" name="brand_type" value="other"> Intel HD Graphics 630<br></li>
                        <li><input type="checkbox" name="brand_type" value="other"> Intel UHD Graphics 630<br></li>
                        <li><input type="checkbox" name="brand_type" value="other"> Radeon Vega 8<br></li>
                        <li>See all...</li>
                    </ul>
                </div>
                <hr class="soft"/>

                <!--CORES-->
                <div id = "brand-filter" >
                    <label class = "filter-heading" for = "price">CORES</label>
                    <!-- <button class = "btn" onclick="setMinOnSlider()">Min</button>
                    <button class = "btn" onclick="setMaxOnSlider()">Max</button> -->
                    <!-- https://codepen.io/Manitoba/pen/ZWRjye -->
                    <div slider id="slider-distance">
                        <div>
                            <div inverse-left style="width:70%;"></div>
                            <div inverse-right style="width:70%;"></div>
                            <div range style="left:30%;right:40%;"></div>
                            <span thumb style="left:30%;"></span>
                            <span thumb style="left:60%;"></span>
                            <div sign style="left:30%;">
                                <span id="value">30</span>
                            </div>
                            <div sign style="left:60%;">
                                <span id="value">60</span>
                            </div>
                        </div>
                        <input id="slider-lower-bound" type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
			  this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
			  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
			  var children = this.parentNode.childNodes[1].childNodes;
			  children[1].style.width=value+'%';
			  children[5].style.left=value+'%';
			  children[7].style.left=value+'%';children[11].style.left=value+'%';
			  children[11].childNodes[1].innerHTML=this.value;" />

                        <input id="slider-upper-bound" type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
			  this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
			  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
			  var children = this.parentNode.childNodes[1].childNodes;
			  children[3].style.width=(100-value)+'%';
			  children[5].style.right=(100-value)+'%';
			  children[9].style.left=value+'%';children[13].style.left=value+'%';
			  children[13].childNodes[1].innerHTML=this.value;" />
                    </div>
                </div>
                <hr class="soft"/>

                <!--SPEED-->
                <div id = "brand-filter" >
                    <label class = "filter-heading" for = "price">SPEED</label>
                    <!-- <button class = "btn" onclick="setMinOnSlider()">Min</button>
                    <button class = "btn" onclick="setMaxOnSlider()">Max</button> -->
                    <!-- https://codepen.io/Manitoba/pen/ZWRjye -->
                    <div slider id="slider-distance">
                        <div>
                            <div inverse-left style="width:70%;"></div>
                            <div inverse-right style="width:70%;"></div>
                            <div range style="left:30%;right:40%;"></div>
                            <span thumb style="left:30%;"></span>
                            <span thumb style="left:60%;"></span>
                            <div sign style="left:30%;">
                                <span id="value">30</span>
                            </div>
                            <div sign style="left:60%;">
                                <span id="value">60</span>
                            </div>
                        </div>
                        <input id="slider-lower-bound" type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
			  this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
			  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
			  var children = this.parentNode.childNodes[1].childNodes;
			  children[1].style.width=value+'%';
			  children[5].style.left=value+'%';
			  children[7].style.left=value+'%';children[11].style.left=value+'%';
			  children[11].childNodes[1].innerHTML=this.value;" />

                        <input id="slider-upper-bound" type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
			  this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
			  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
			  var children = this.parentNode.childNodes[1].childNodes;
			  children[3].style.width=(100-value)+'%';
			  children[5].style.right=(100-value)+'%';
			  children[9].style.left=value+'%';children[13].style.left=value+'%';
			  children[13].childNodes[1].innerHTML=this.value;" />
                    </div>
                </div>
                <hr class="soft"/>

                <!--TDP-->
                <div id = "brand-filter" >
                    <label class = "filter-heading" for = "price">TDP</label>
                    <!-- <button class = "btn" onclick="setMinOnSlider()">Min</button>
                    <button class = "btn" onclick="setMaxOnSlider()">Max</button> -->
                    <!-- https://codepen.io/Manitoba/pen/ZWRjye -->
                    <div slider id="slider-distance">
                        <div>
                            <div inverse-left style="width:70%;"></div>
                            <div inverse-right style="width:70%;"></div>
                            <div range style="left:30%;right:40%;"></div>
                            <span thumb style="left:30%;"></span>
                            <span thumb style="left:60%;"></span>
                            <div sign style="left:30%;">
                                <span id="value">30</span>
                            </div>
                            <div sign style="left:60%;">
                                <span id="value">60</span>
                            </div>
                        </div>
                        <input id="slider-lower-bound" type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
			  this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
			  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
			  var children = this.parentNode.childNodes[1].childNodes;
			  children[1].style.width=value+'%';
			  children[5].style.left=value+'%';
			  children[7].style.left=value+'%';children[11].style.left=value+'%';
			  children[11].childNodes[1].innerHTML=this.value;" />

                        <input id="slider-upper-bound" type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
			  this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
			  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
			  var children = this.parentNode.childNodes[1].childNodes;
			  children[3].style.width=(100-value)+'%';
			  children[5].style.right=(100-value)+'%';
			  children[9].style.left=value+'%';children[13].style.left=value+'%';
			  children[13].childNodes[1].innerHTML=this.value;" />
                    </div>
                </div>
                <hr class="soft"/>

                <!--SIMULTANEOUS MULTITHREADING-->
                <div id = "brand-filter" >
                    <label class = "filter-heading" for = "brand_type">SIMULTANEOUS MULTITHREADING</label>
                    <ul style="list-style: none">
                        <li> <input checked="checked" type="checkbox" name="brand_type" value="msi">All<br></li>
                        <li>  <input type="checkbox" name="brand_type" value="asus">Yes<br></li>
                        <li> <input type="checkbox" name="brand_type" value="lenovo">No<br></li>
                    </ul>
                </div>
                <hr class="soft"/>

                <!--SUPPORTS ECC-->
                <div id = "brand-filter" >
                    <label class = "filter-heading" for = "brand_type">SUPPORTS ECC</label>
                    <ul style="list-style: none">
                        <li> <input checked="checked" type="checkbox" name="brand_type" value="msi">All<br></li>
                        <li>  <input type="checkbox" name="brand_type" value="asus">Yes<br></li>
                        <li> <input type="checkbox" name="brand_type" value="lenovo">No<br></li>
                    </ul>
                </div>
                <hr class="soft"/>



                <div id = "condition-filter">
                    <label class = "filter-heading" for = "condition">Condition</label>
                    <input checked="checked" type="radio" name="condition" value="new">New<br>
                    <input type="radio" name="condition" value="used">Used<br>
                </div>
                <hr class="soft"/>

                <div id="price-filter"><label class = "filter-heading" for = "price">Price</label>
                    <!-- <button class = "btn" onclick="setMinOnSlider()">Min</button>
                    <button class = "btn" onclick="setMaxOnSlider()">Max</button> -->
                    <!-- https://codepen.io/Manitoba/pen/ZWRjye -->
                    <div slider id="slider-distance">
                        <div>
                            <div inverse-left style="width:70%;"></div>
                            <div inverse-right style="width:70%;"></div>
                            <div range style="left:30%;right:40%;"></div>
                            <span thumb style="left:30%;"></span>
                            <span thumb style="left:60%;"></span>
                            <div sign style="left:30%;">
                                <span id="value">30</span>
                            </div>
                            <div sign style="left:60%;">
                                <span id="value">60</span>
                            </div>
                        </div>
                        <input id="slider-lower-bound" type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
			  this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
			  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
			  var children = this.parentNode.childNodes[1].childNodes;
			  children[1].style.width=value+'%';
			  children[5].style.left=value+'%';
			  children[7].style.left=value+'%';children[11].style.left=value+'%';
			  children[11].childNodes[1].innerHTML=this.value;" />

                        <input id="slider-upper-bound" type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
			  this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
			  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
			  var children = this.parentNode.childNodes[1].childNodes;
			  children[3].style.width=(100-value)+'%';
			  children[5].style.right=(100-value)+'%';
			  children[9].style.left=value+'%';children[13].style.left=value+'%';
			  children[13].childNodes[1].innerHTML=this.value;" />
                    </div>
                </div>

            </div>

            <script type="text/javascript">
                // var lowerBound = document.querySelector('#slider-lower-bound');
                // var upperBound = document.querySelector('#slider-upper-bound');

                // function setMaxOnSlider() {
                // 	upperBound.value = upperBound.max;
                // 	lowerBound.value = upperBound.max;
                // }

                // function setMinOnSlider() {
                // 	upperBound.value = lowerBound.min;
                // 	lowerBound.value = lowerBound.min;
                // }

            </script>

            <style>
                html, body {
                    height: 100%;
                    padding: 0;
                    margin: 0;
                }

                .filter-heading{
                    text-decoration: underline;
                    font-size: 1.3em;
                }

                #filter-bar {
                    background-color: #3A3F44;
                    border-radius: 10px;
                    padding: 10px;
                    color: #fff;
                    height: 100%;
                }

                [slider] {
                    position: relative;
                    height: 14px;
                    border-radius: 10px;
                    text-align: left;
                    margin: 10px 0 10px 0;
                }

                [slider] > div {
                    position: absolute;
                    left: 13px;
                    right: 15px;
                    height: 14px;
                }

                [slider] > div > [inverse-left] {
                    position: absolute;
                    left: 0;
                    height: 14px;
                    border-radius: 10px;
                    background-color: #CCC;
                    margin: 0 7px;
                }

                [slider] > div > [inverse-right] {
                    position: absolute;
                    right: 0;
                    height: 14px;
                    border-radius: 10px;
                    background-color: #CCC;
                    margin: 0 7px;
                }

                [slider] > div > [range] {
                    position: absolute;
                    left: 0;
                    height: 14px;
                    border-radius: 14px;
                    background-color: #1ABC9C;
                }

                [slider] > div > [thumb] {
                    position: absolute;
                    top: -7px;
                    z-index: 2;
                    height: 28px;
                    width: 28px;
                    text-align: left;
                    margin-left: -11px;
                    cursor: pointer;
                    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.4);
                    background-color: #FFF;
                    border-radius: 50%;
                    outline: none;
                }

                [slider] > input[type=range] {
                    position: absolute;
                    pointer-events: none;
                    -webkit-appearance: none;
                    z-index: 3;
                    height: 14px;
                    top: -2px;
                    width: 100%;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                    filter: alpha(opacity=0);
                    -moz-opacity: 0;
                    -khtml-opacity: 0;
                    opacity: 0;
                }

                div[slider] > input[type=range]::-ms-track {
                    -webkit-appearance: none;
                    background: transparent;
                    color: transparent;
                }

                div[slider] > input[type=range]::-moz-range-track {
                    -moz-appearance: none;
                    background: transparent;
                    color: transparent;
                }

                div[slider] > input[type=range]:focus::-webkit-slider-runnable-track {
                    background: transparent;
                    border: transparent;
                }

                div[slider] > input[type=range]:focus {
                    outline: none;
                }

                div[slider] > input[type=range]::-ms-thumb {
                    pointer-events: all;
                    width: 28px;
                    height: 28px;
                    border-radius: 0px;
                    border: 0 none;
                    background: red;
                }

                div[slider] > input[type=range]::-moz-range-thumb {
                    pointer-events: all;
                    width: 28px;
                    height: 28px;
                    border-radius: 0px;
                    border: 0 none;
                    background: red;
                }

                div[slider] > input[type=range]::-webkit-slider-thumb {
                    pointer-events: all;
                    width: 28px;
                    height: 28px;
                    border-radius: 0px;
                    border: 0 none;
                    background: red;
                    -webkit-appearance: none;
                }

                div[slider] > input[type=range]::-ms-fill-lower {
                    background: transparent;
                    border: 0 none;
                }

                div[slider] > input[type=range]::-ms-fill-upper {
                    background: transparent;
                    border: 0 none;
                }

                div[slider] > input[type=range]::-ms-tooltip {
                    display: none;
                }

                [slider] > div > [sign] {
                    opacity: 0;
                    position: absolute;
                    margin-left: -11px;
                    top: -39px;
                    z-index:3;
                    background-color: #1ABC9C;
                    color: #fff;
                    width: 28px;
                    height: 28px;
                    border-radius: 28px;
                    -webkit-border-radius: 28px;
                    align-items: center;
                    -webkit-justify-content: center;
                    justify-content: center;
                    text-align: center;
                }

                [slider] > div > [sign]:after {
                    position: absolute;
                    content: '';
                    left: 0;
                    border-radius: 16px;
                    top: 19px;
                    border-left: 14px solid transparent;
                    border-right: 14px solid transparent;
                    border-top-width: 16px;
                    border-top-style: solid;
                    border-top-color: #1ABC9C;
                }

                [slider] > div > [sign] > span {
                    font-size: 12px;
                    font-weight: 700;
                    line-height: 28px;
                }

                [slider]:hover > div > [sign] {
                    opacity: 1;
                }
            </style>
            <!-- Filter bar ================================================== -->

            <!-- Sidebar ================================================== -->
            <!-- Sidebar end=============================================== -->

            <!-- Chat=============================================== -->
            <?php include('chat.php') ?>
            <!-- Chat end=============================================== -->
            <div class="span9">


                <hr class="soft"/>
                <form class="form-horizontal span6">
                    <div class="control-group">
                        <label class="control-label alignL">Sort By</label>
                        <select >
                            <option>Product name A - Z</option>
                            <option>Product name Z - A</option>
                            <option>Product Stock</option>
                            <option>Price Lowest first</option>
                        </select>
                    </div>
                </form>

                <div id="myTab" class="pull-right">
                    <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
                    <a href="#blockView" data-toggle="tab"><span class="btn btn-large "><i class="icon-th-large"></i></span></a>
                </div>
                <br class="clr"/>
                <div class="tab-content">


                    <!-- THE TAB VIEW WITH DETAILS...  -->
                    <div class="tab-pane active" id="listView">

                        <div class="row">
                            <div class="span2">
                                <img src="./assets/images/cpu/ryzen7.jpg" alt="inteli7unlocked"/>
                            </div>
                            <div class="span4">
                                <h3>AMD Ryzen 7 2700X</h3>

                                <p>
                                    3.7GHz 8-Core (Pinnacle Ridge)<br>
                                    105W TDP
                                </p>

                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> R4025.00</h3>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>★</span><span>★</span><span>★</span>
                                    </div>
                                    <br/>
                                    <a href="build_component_list.php" class="btn-lds"> Add</i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>

                        <div class="row">
                            <div class="span2">
                                <img src="./assets/images/cpu/inteli7unlocked.jpg" alt="inteli7unlocked"/>
                            </div>
                            <div class="span4">
                                <h3>Intel Core i7-8700K</h3>

                                <p>
                                    3.7GHz 6-Core (Coffee Lake-S)<br>
                                    95W TDP<br>
                                    Integrated Intel UHD Graphics 630<br>
                                </p>

                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> R4260.00</h3>
                                    <div class="rating">
                                        <span>☆</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                    </div>
                                    <br/>
                                    <a href="build_component_list.php" class="btn-lds"> Add</i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>

                        <div class="row">
                            <div class="span2">
                                <img src="./assets/images/cpu/ryzen.jpg" alt="inteli7unlocked"/>
                            </div>
                            <div class="span4">
                                <h3>AMD Ryzen 5 1600</h3>

                                <p>
                                    3.2GHz 6-Core (Summit Ridge)<br>
                                    65W TDP
                                </p>

                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> R2200.00</h3>
                                    <div class="rating">
                                        <span>☆</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                    </div>
                                    <br/>
                                    <a href="build_component_list.php" class="btn-lds"> Add</i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>

                        <div class="row">
                            <div class="span2">
                                <img src="./assets/images/cpu/inteli5unlocked.jpg" alt="inteli7unlocked"/>
                            </div>
                            <div class="span4">
                                <h3>Intel Core i5-8600K</h3>

                                <p>
                                    3.6GHz 6-Core (Coffee Lake-S)<br>
                                    95W TDP<br>
                                    Integrated Intel UHD Graphics 630
                                </p>

                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> R2856.00</h3>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>★</span><span>★</span><span>★</span>
                                    </div>
                                    <br/>
                                    <a href="build_component_list.php" class="btn-lds"> Add</i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>

                        <div class="row">
                            <div class="span2">
                                <img src="./assets/images/cpu/inteli5.jpg" alt="inteli7unlocked"/>
                            </div>
                            <div class="span4">
                                <h3>Intel Core i5-8400</h3>

                                <p>
                                    2.8GHz 6-Core (Coffee Lake-S)<br>
                                    65W TDP<br>
                                    Integrated Intel UHD Graphics 630
                                </p>

                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> R1985.00</h3>
                                    <div class="rating">
                                        <span>☆</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                    </div>
                                    <br/>
                                    <a href="build_component_list.php" class="btn-lds"> Add</i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>

                        <div class="row">
                            <div class="span2">
                                <img src="./assets/images/cpu/ryzen5.jpg" alt="inteli7unlocked"/>
                            </div>
                            <div class="span4">
                                <h3>AMD Ryzen 5 2600X</h3>

                                <p>
                                    3.6GHz 6-Core (Pinnacle Ridge)<br>
                                    95W TDP
                                </p>

                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> R2548.00</h3>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>★</span><span>★</span><span>★</span>
                                    </div>
                                    <br/>
                                    <a href="build_component_list.php" class="btn-lds"> Add</i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>

                        <div class="row">
                            <div class="span2">
                                <img src="./assets/images/cpu/inteli7.jpg" alt="inteli7unlocked"/>
                            </div>
                            <div class="span4">
                                <h3>Intel Core i7-7700K</h3>

                                <p>
                                    4.2GHz Quad-Core (Kaby Lake-S)<br>
                                    91W TDP<br>
                                    Integrated Intel HD Graphics 630
                                </p>

                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> R3256.00</h3>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>★</span><span>★</span><span>★</span>
                                    </div>
                                    <br/>
                                    <a href="build_component_list.php" class="btn-lds"> Add</i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>

                    </div>
                    <!-- END OF TAB PANE -->

                    <div class="tab-pane" id="blockView">
                        <ul class="thumbnails">
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.html"><img src="./assets/images/laptops/asus-fx550jk-intel-gaming-laptop-deal-0005.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            I'm a paragraph. Click here
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R25000</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.html"><img src="./assets/images/laptops/asus-gl703ge-core-i7-gtx-1050-ti-gaming-laptop-deal-1000px-v1-0002.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            I'm a paragraph. Click here
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R25000</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.html"><img src="./assets/images/laptops/asus-vivobook-15-x542un-core-i7-laptop-deal-1000px-v1-0005.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            I'm a paragraph. Click here
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R25000</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.html"><img src="assets/images/laptops/msi-pl62-7rc-core-i7-laptop-deal-1000px-v1-0003" alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            I'm a paragraph. Click here
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R25000</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.html"><img src="assets/images/laptops/msi-gl63-8rd-gtx-1050-ti-core-i5-gaming-laptop-deal-1000px-v1-00031.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            I'm a paragraph. Click here
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R25000</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.html"><img src="assets/images/laptops/lenovo-ideapad-320-core-i5-laptop-deal-1000px-v1-00071.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            I'm a paragraph. Click here
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">R25000</a></h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <hr class="soft"/>
                    </div>
                </div>


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
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="themes/js/jquery.js" type="text/javascript"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/google-code-prettify/prettify.js"></script>

<script src="themes/js/bootshop.js"></script>
<script src="themes/js/jquery.lightbox-0.5.js"></script>


</div>
</body>
</html>