<style>
  #searcher {
    background: url(themes/images/search.png) no-repeat 390px center #fff;
  }
</style>

<div id="welcomeLine" class=" row" style="background-color: #3A3F44; background-image: linear-gradient(#52575C, #3A3F44 70%, #3A3F44);">
        <div class="pull-right">
           <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-mini btn-primary">Login</span></a>

           <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-mini btn-primary">Register</span></a>
           <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                   <h3>Login Block</h3>
               </div>
               <div class="modal-body">
                   <form class="form-horizontal loginFrm">
                       <div class="control-group">
                           <input type="text" id="inputEmail" placeholder="Email">
                       </div>
                       <div class="control-group">
                           <input type="password" id="inputPassword" placeholder="Password">
                       </div>
                       <div class="control-group">
                           <label class="checkbox">
                               <input type="checkbox"> Remember me
                           </label>
                       </div>
                   </form>
                   <button type="submit" class="btn btn-success">Sign in</button>
                   <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
               </div>
           </div>

            <a id="cart-btn" href="" data-toggle="modal" onclick="show('cartModal')"  data-target="#cartModal"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i>[ 3 ]</span> </a>
    
            <!-- Cart Modal -->

            
                    <?php include('product_summary.php'); ?>
   
        </div>
</div>
<div id="logoArea" class="navbar">

    <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <div class="navbar-inner" style="border-radius: 0; background-color: #3A3F44;background-image: linear-gradient(#52575C, #3A3F44 70%, #3A3F44);">

        <a class="" style="display: block;
                height: 80px;
                float: left;
                padding: 10px 20px 10px;
                margin-left: -20px;
                font-size: 20px;
                font-weight: 200;
                color: #777;
                text-shadow: 0 1px 0 #fff;" href="index.html"><img style="height: 90px" src="assets/images/logo/logo.jpg" alt="Bootsshop"/></a>
        <!--search bar-->
        <form class="form-inline navbar-search" method="post" action="products.html"  style="margin-left: 2rem;">
            <select class="srchTxt" style=" margin-right: -6px; width: auto;">
                <option>All</option>
                <option>GRAPHICS CARDS </option>
                <option>MOTHER BOARDS </option>
                <option>RAM </option>
                <option>DESKTOPS </option>
                <option>LAPTOPS </option>
                <option>MISCELLANEOUS </option>
                <option>CPUs </option>
            </select>
            <input id="searcher" class="srchTxt" type="text" style="width: 420px; height: auto;" list="items"/>
              <datalist id="items">
                <option value="Asus Laptops">
                <option value="Lenovo Laptops">
                <option value="MSI Laptops">
                <option value="Intel CPU">
                <option value="Ryzen CPU">
                <option value="DELL TV">
                <option value="Graphics Cards">
              </datalist>

            <button type="submit" id="submitButton" class="btn" style="margin-left: -5px; border-top-right-radius: 50px; border-bottom-right-radius: 50px; height: 28px;">Go</button>
        </form>

        <ul id="topMenu" class="nav pull-right" >
            <li class=""><a href="special_offer.html">Home</a></li>
            <li class=""><a href="normal.html">Departments</a></li>
            v <li class=""><a href="normal.html">Build PC</a></li>
            <li class=""><a href="contact.html">Deals</a></li>
            <li class=""><a href="contact.html">Contact us</a></li>

        </ul>

    </div>

</div>

<!-- <div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>
    <ul id="topMenu" class="nav pull-right">
     <li class=""><a href="special_offer.html">Specials Offer</a></li>
     <li class=""><a href="normal.html">Delivery</a></li>
     <li class=""><a href="contact.html">Contact</a></li>
     <li class="">
     <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
    <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3>Login Block</h3>
          </div>
          <div class="modal-body">
            <form class="form-horizontal loginFrm">
              <div class="control-group">                               
                <input type="text" id="inputEmail" placeholder="Email">
              </div>
              <div class="control-group">
                <input type="password" id="inputPassword" placeholder="Password">
              </div>
              <div class="control-group">
                <label class="checkbox">
                <input type="checkbox"> Remember me
                </label>
              </div>
            </form>     
            <button type="submit" class="btn btn-success">Sign in</button>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          </div>
    </div>
    </li>
    </ul>
  </div>
</div>
</div>
</div> -->
