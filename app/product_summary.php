<style>
    #cart-heading {
        font-size: 25px;
        text-transform: bold;
    }
    .total-info {
        font-size: 25px;
        text-transform: bold;
    }
</style>
<div id="cartModal" class="modal fade" role="dialog"   style="padding:2%;top: 40%;width: 60%;left: 30%; visibility: hidden;"> 
                        
                <!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="hide('cartModal')">&times;</button>
    <div id = "cart-heading"> Your Shopping Cart [ <small>3 Item(s) </small>]</div> 
</div>
<div class="">

    <hr class="soft"/>
    <table class="table table-bordered">
        <thead>
        <tr>
          <th>Item</th>
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
            $numItems =3;
            $count =0;
            $totalCost =0;
            $vat =0;
            $items = array(
                array("./assets/images/frontpage/razer-naga-epic-chroma-wireless-gaming-mouse-011.jpg","Raza Naga Epic","Raza Wireless Gaming Mouse",2039, 0),
                array("./assets/images/frontpage/ASUS-PG348Q-ROG-Swift-G-Sync-Gaming-Monitor-300px-v2","ASUS PG348Q ROG Swift","ASUS 32\" Gaming Monitor",17499, 200),
                array("./assets/images/frontpage/corsair-h150i-pro-rgb-liquid-cpu-cooler-300px-v3.jpg","Corsair H150i Pro","Corsair H150i AIO Cooler",2349, 100)
            );
            while($count<$numItems){
                $string = "<tr>";
                $string .= "<td>" . ($count+1) . "</td>";
                $string .= "<td> <img width=\"60\" src=\"".$items[$count][0]."\" alt=\"\"/></td>";
                $string .= "<td>".$items[$count][1]."<br/>".$items[$count][2]."</td><td>";
                $string .= "<div class=\"input-append\"><input class=\"span1\"  type=\"number\" min=\"1\" style=\"max-width:34px\" value=\"1\" 
                            id=\"appendedInputButtons".$count."\" size=\"16\" type=\"text\">
                            <button class=\"btn\" type=\"button\"><i class=\"icon-minus\" onclick=\"decrease('appendedInputButtons".$count."')\"></i></button>
                            <button class=\"btn\" type=\"button\"><i class=\"icon-plus\" onclick=\"increase('appendedInputButtons".$count."')\"></i></button>
                            <button class=\"btn btn-danger\"type=\"button\"><i class=\"icon-remove icon-white\"></i></button></div></td>";
                $string .= "<td>R".$items[$count][3]."</td>";
                $string .= "<td>R".$items[$count][4]."</td>";
                $Cost = $items[$count][3]-$items[$count][4];
                $string .= "<td>R".$Cost."</td></tr>";
                echo $string;
                $totalCost +=$items[$count][3];
                $count++;
             
            }
            $string = "<tr><td colspan=\"6\" style=\"text-align:right\">Price</td>";
            $string .="<td class = 'total'>R".$totalCost."</td></tr><tr>";
            $string .= "<td colspan=\"6\" style=\"text-align:right\">Total VAT(15%)    </td>";
            $vat = $totalCost*0.15;
            $string .="<td>R".$vat."</td>  </tr><tr>";
            $string .="<td colspan=\"6\" style=\"text-align:right\"><strong>Total Price</strong></td>";
            $string .= "<td class=\"label label-important\" style=\"display:block\"> <strong>R".($totalCost)."</strong></td> </tr>";
            echo $string;

          ?>
        </tbody>
    </table>
    
    <a href="login.html" class="btn btn-large btn-success pull-right">Proceed to Checkout <i class="icon-arrow-right"></i></a>
</div>
   </div>
            </div>

<script>
    function increase(id){
        console.log("Increasing "+ id);
        var value = parseInt(document.getElementById(id).value);
        value = isNaN(value) ? 1 : value;
        value++;
        // account for overflow
        if(value > 0) {
            document.getElementById(id).value = value;
        }
    }
    function decrease(id){
        console.log("Decreasing "+ id);
        var value = parseInt(document.getElementById(id).value);
        // don't set to zero. that's what delete should do
        value = isNaN(value) ? 1 : value;
        console.log("value before subtract " + value);
        value--;
        if(value > 0) {
            document.getElementById(id).value = value;
        }
    }
    function hide(id){
        console.log("Hide " +id);
        var modal = document.getElementById(id);
        modal.style.visibility= 'hidden';
    }
    function show(id){
    	console.log("show " +id);
        var modal = document.getElementById(id);
        modal.style.visibility= 'visible';
        
    }
</script>