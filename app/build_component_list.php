<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php') ?>
    <style>
        .image-wrapper img{
            height: 18%;
        }
        img {
            max-width: 100%;
        }
        .zebra{
            background-color: #f2f2f2;
        }
        .component-type a{
            color: rgb(25, 144, 213);
            font-weight: 600;
        }
        .btn-mds:hover {
            color: white;
            background-color: #194d72;
        }
        a:hover {
            color: #103148;
        }
        a:active, a:hover {
            outline: 0;
        }
        .btn-mds {
            display: inline-block;
            text-align: center;
            background-color: #2c85c5;
            color: white;
            border-radius: 4px;
            -webkit-transition: color 0.3s cubic-bezier(0.19, 1, 0.22, 1), background-color 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            transition: color 0.3s cubic-bezier(0.19, 1, 0.22, 1), background-color 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            padding: .375em .5em;
            font-size: 12px;
        }
    </style>
</head>
<body>
<!-- Navbar ================================================== -->
<?php include('navbar.php'); ?>
<!-- Navbar End====================================================================== -->
<div id="mainBody">
    <div class="container">
        <div class="row"><!-- Filter bar ================================================== -->
            <?php /*include('filterbar.php')*/ ?><!-- Filter bar ================================================== -->
            <!-- Chat=============================================== -->
            <?php /* include('chat.php')*/ ?><!-- Chat end=============================================== -->
            <!--list start-->
            <div class="hero tabnav-hero">
                <div class="container">
                    <div class="title">
                        <h1 style="font-weight: 700;">Current Build List</h1>
                       <br>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="full-column">
                    <div class="block">
                        <div class="block part-list">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th class="tl">Component</th>
                                    <th></th>
                                    <th class="tl">Selection</th>
                                    <th class="tr">Price</th>
                                    <th class="tc">Discount</th>
<!--                                    <th class="tc">Shipping</th>-->
<!--                                    <th class="tc">Tax</th>-->
                                    <th class="tr">Total</th>
<!--                                    <th class="tl">Where</th>-->
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                             <!--   <tr class="last zebra">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">CPU</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>-->
<!--                                added product-->
                            <tr class="last zebra">
                                    <td class="component-type tl"><a href="/products/cpu/">CPU</a></td>
                                    <td class="component-image"><a
                                                href="/product/bddxFT/amd-ryzen-7-2700x-37ghz-8-core-processor-yd270xbgafbox"
                                                class="image-wrapper "><img
                                                    src="assets/images/cpu/ryzen7.jpg"
                                                    class=""></a></td>
                                    <td class="component-name tl">
                                        <div>
                                            <a href="/product/bddxFT/amd-ryzen-7-2700x-37ghz-8-core-processor-yd270xbgafbox">AMD
                                                - Ryzen 7 2700X 3.7GHz 8-Core Processor</a></div>
                                    </td>
                                    <td class="tr nowrap"><a href="/mr/amazon/bddxFT" rel="nofollow" target="_blank">R4025.00</a>
                                    </td>
                                    <td class="tc nowrap"></td>
                                    <td class="tr price nowrap"><a href="/mr/amazon/bddxFT" rel="nofollow"
                                                                   target="_blank">R4025.00</a></td>
                                    <td class="merchant">
                                    </td>
                                    <td class="price-settings"><a class="change-price" href="#change_price"
                                                                  id="change_price_0"><span
                                                    class="no-custom-price"></span></a></td>
                                    <td class="nowrap"><a href="/mr/amazon/bddxFT" class="btn-mds" rel="nofollow"
                                                          target="_blank">Buy</a></td>
                                    <td class="delete">
                                        <div><a href="#"
                                                onclick="pp_partlist_delete('{&quot;base_id&quot;:171628}'); return false;">X</a>
                                        </div>
                                    </td>
                                </tr>
<!--                                end of added product-->
                                <tr class="last">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">CPU Cooler</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr class="last zebra">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">Motherboard</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr class="last">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">Memory</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr class="last zebra">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">Storage</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr class="last">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">Video Card</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr class="last zebra">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">Case</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr class="last">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">Power Supply</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr class="last zebra">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">Optical Drive</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr class="last">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">Operating System</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr class="last zebra">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">Software</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr class="last">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">Monitor</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr class="last zebra">
                                    <td class="component-type tl"><a href="chosen_product_cpu.php">External
                                            Storage</a></td>
                                    <td></td>
                                    <td><a href="chosen_product_cpu.php" class="btn-mds">Add</a>
                                    </td>
                                    <td colspan="9"></td>
                                </tr>
                                <!--<tr class="last">
                                    <td class="component-type tl">Expansion Cards / Networking</td>
                                    <td></td>
                                    <td colspan="10">
                                        <div id="sg_13">
                                            <div><a id="add_peripherals" href="#peripherals" class="btn-mds"
                                                    onclick="$('#sg_13').hide();$('#sgx_13').show();return false;">Add
                                                    Expansion Cards / Networking ...</a></div>
                                            <div><a href="/products/sound-card/">Sound Cards</a>, <a
                                                        href="/products/wired-network-card/">Wired Network Adapters</a>, <a
                                                        href="/products/wireless-network-card/">Wireless Network
                                                    Adapters</a></div>
                                        </div>
                                        <div id="sgx_13" style="display:none;">
                                            <div><a href="/products/sound-card/" class="btn-mds">Choose A Sound Card</a>
                                            </div>
                                            <div><a href="/products/wired-network-card/" class="btn-mds">Choose A Wired
                                                    Network Adapter</a></div>
                                            <div><a href="/products/wireless-network-card/" class="btn-mds">Choose A
                                                    Wireless Network Adapter</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="last zebra">
                                    <td class="component-type tl">Peripherals</td>
                                    <td></td>
                                    <td colspan="10">
                                        <div id="sg_14">
                                            <div><a id="add_peripherals" href="#peripherals" class="btn-mds"
                                                    onclick="$('#sg_14').hide();$('#sgx_14').show();return false;">Add
                                                    Peripherals ...</a></div>
                                            <div><a href="/products/headphones/">Headphones</a>, <a
                                                        href="/products/keyboard/">Keyboards</a>, <a
                                                        href="/products/mouse/">Mice</a>, <a href="/products/speakers/">Speakers</a>
                                            </div>
                                        </div>
                                        <div id="sgx_14" style="display:none;">
                                            <div><a href="/products/headphones/" class="btn-mds">Choose Headphones</a></div>
                                            <div><a href="/products/keyboard/" class="btn-mds">Choose A Keyboard</a></div>
                                            <div><a href="/products/mouse/" class="btn-mds">Choose A Mouse</a></div>
                                            <div><a href="/products/speakers/" class="btn-mds">Choose Computer Speakers</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="last">
                                    <td class="component-type tl">Accessories / Other</td>
                                    <td></td>
                                    <td colspan="10">
                                        <div id="sg_15">
                                            <div><a id="add_peripherals" href="#peripherals" class="btn-mds"
                                                    onclick="$('#sg_15').hide();$('#sgx_15').show();return false;">Add
                                                    Accessories / Other ...</a></div>
                                            <div><a href="/products/case-fan/">Case Fans</a>, <a
                                                        href="/products/fan-controller/">Fan Controllers</a>, <a
                                                        href="/products/thermal-paste/">Thermal Compound</a>, <a
                                                        href="/products/ups/">UPS Systems</a></div>
                                        </div>
                                        <div id="sgx_15" style="display:none;">
                                            <div><a href="/products/case-fan/" class="btn-mds">Choose A Case Fan</a></div>
                                            <div><a href="/products/fan-controller/" class="btn-mds">Choose A Fan
                                                    Controller</a></div>
                                            <div><a href="/products/thermal-paste/" class="btn-mds">Choose Thermal
                                                    Compound</a></div>
                                            <div><a href="/products/ups/" class="btn-mds">Choose A UPS</a></div>
                                        </div>
                                    </td>
                                </tr>-->
                                <tr class="last">
                                    <td class="component-type tl">Custom</td>
                                    <td></td>
                                    <td><a id="add_custom" href="#other" class="btn-mds">Add Custom Part</a></td>
                                    <td colspan="9"></td>
                                </tr>

                                <tr class="last">
                                    <td class="component-type tl"></td>
                                    <td class="component-image"></td>
                                    <td class="component-name tl">

                                    </td>
                                    <td class="tr nowrap">
                                    </td>
                                    <td class="tc nowrap"></td>
                                    <td class="tr price nowrap"><a href="/mr/amazon/bddxFT" rel="nofollow"
                                                                   target="_blank">Total: R4025.00</a></td>
                                    <td class="merchant">
                                    </td>
                                    <td class="price-settings"><a class="change-price" href="#change_price"
                                                                  id="change_price_0"><span
                                                    class="no-custom-price"></span></a></td>
                                    <td class="nowrap"><a href="/mr/amazon/bddxFT" class="btn-mds" rel="nofollow"
                                                          target="_blank">Buy All Components</a></td>
                                    <td class="delete">

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--list end-->
        </div>
    </div>
</div><!-- MainBody End ============================= -->
<!-- Footer ================================================================== --><?php include('footer.php'); ?>
</body>
</html>