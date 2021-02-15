<?php 
ini_set('display_errors', 0);
ob_start();
require("includes/application_top.php");

include('includes/header_new_design.php'); 
require('includes/classes/http_client.php');
define('FREE_SHIPPING_TITLE', ' Free Shipping');

// if the customer is not logged on, redirect them to the login page
if (!tep_session_is_registered('customer_id')) {
 $navigation->set_snapshot();
 tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
}

// if there is nothing in the customers cart, redirect them to the shopping cart page
if ($cart->count_contents() < 1) {
 tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
}

// if no shipping destination address was selected, use the customers own address as default
if (!tep_session_is_registered('sendto')) {
 tep_session_register('sendto');
 $sendto = $customer_default_address_id;
} else {
// verify the selected shipping address
 if ( (is_array($sendto) && empty($sendto)) || is_numeric($sendto) ) {
   $check_address_query = tep_db_query("select count(*) as total from " . TABLE_ADDRESS_BOOK . " where customers_id = '" . (int)$customer_id . "' and address_book_id = '" . (int)$sendto . "'");
   $check_address = tep_db_fetch_array($check_address_query);

   if ($check_address['total'] != '1') {
     $sendto = $customer_default_address_id;
     if (tep_session_is_registered('shipping')) tep_session_unregister('shipping');
   }
 }
}

require(DIR_WS_CLASSES . 'order.php');
$order = new order;

// register a random ID in the session to check throughout the checkout procedure
// against alterations in the shopping cart contents
if (!tep_session_is_registered('cartID')) tep_session_register('cartID');
$cartID = $cart->cartID;

// if the order contains only virtual products, forward the customer to the billing page as
// a shipping address is not needed
if ($order->content_type == 'virtual') {
 if (!tep_session_is_registered('shipping')) tep_session_register('shipping');
 $shipping = false;
 $sendto = false;
 tep_redirect(tep_href_link(FILENAME_CHECKOUT_PAYMENT, '', 'SSL'));
}

$total_weight = $cart->show_weight();
$total_count = $cart->count_contents();

// load all enabled shipping modules
require(DIR_WS_CLASSES . 'shipping.php');
$shipping_modules = new shipping;

if ( defined('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING') && (MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING == 'true') ) {
 $pass = false;

 switch (MODULE_ORDER_TOTAL_SHIPPING_DESTINATION) {
   case 'national':
     if ($order->delivery['country_id'] == STORE_COUNTRY) {
       $pass = true;
     }
     break;
   case 'international':
     if ($order->delivery['country_id'] != STORE_COUNTRY) {
       $pass = true;
     }
     break;
   case 'both':
     $pass = true;
     break;
 }

 $free_shipping = false;
 if ( ($pass == true) && ($order->info['total'] >= MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER) ) {
   $free_shipping = true;

   include(DIR_WS_LANGUAGES . $language . '/modules/order_total/ot_shipping.php');
 }
} else {
 $free_shipping = false;
}

// process the selected shipping method
if ( isset($HTTP_POST_VARS['action']) && ($HTTP_POST_VARS['action'] == 'process') && isset($HTTP_POST_VARS['formid']) && ($HTTP_POST_VARS['formid'] == $sessiontoken) ) {
 if (!tep_session_is_registered('comments')) tep_session_register('comments');
 if (tep_not_null($HTTP_POST_VARS['comments'])) {
   $comments = tep_db_prepare_input($HTTP_POST_VARS['comments']);
 }

 if (!tep_session_is_registered('shipping')) tep_session_register('shipping');

 if ( (tep_count_shipping_modules() > 0) || ($free_shipping == true) ) {
   if (!tep_session_is_registered('shipping')) tep_session_register('shipping');
   if ( (isset($HTTP_POST_VARS['shipping'])) && (strpos($HTTP_POST_VARS['shipping'], '_')) ) {
     $shipping = $HTTP_POST_VARS['shipping'];

     list($module, $method) = explode('_', $shipping);
     if ( is_object($$module) || ($shipping == 'free_free') ) {
       if ($shipping == 'free_free') {
         $quote[0]['methods'][0]['title'] = FREE_SHIPPING_TITLE;
         $quote[0]['methods'][0]['cost'] = '0';
       } else {
         $quote = $shipping_modules->quote($method, $module);
       }
       if (isset($quote['error'])) {
         tep_session_unregister('shipping');
       } else {
         if ( (isset($quote[0]['methods'][0]['title'])) && (isset($quote[0]['methods'][0]['cost'])) ) {
$shipping = array('id' => $shipping,
                             'title' => (($free_shipping == true) ?  $quote[0]['methods'][0]['title'] : $quote[0]['module'] . ' (' . $quote[0]['methods'][0]['title'] . ')'),
                             'cost' => $quote[0]['methods'][0]['cost']);


//$shipping = array('id' =>$shipping , 'title' =>$quote[0]['methods'][0]['title'], 'cost' =>$quote[0]['methods'][0]['cost'] );
//echo'<b style="color:red"><pre>'; print_r($shipping);

//echo'<b style="color:red;"><pre>';print_r($shipping);

$_SESSION['shippingiddd']=$shipping['id'];
$_SESSION['shippingtitle']=$shipping['title'];
$_SESSION['shippingcost']=$shipping['cost'];


//echo'<b style="color:red"><pre>shippingiddd- '.$_SESSION['shippingiddd'].'<br />shippingtitle- '.$_SESSION['shippingtitle'].' <br />shippingcost- '.$_SESSION['shippingcost'].' </b>';

         tep_redirect(tep_href_link(FILENAME_CHECKOUT_PAYMENT, '', 'SSL'));
     
   //echo'<b style="color:red;"><pre>';print_r($shipping);
         }
       }
     } else {


       
       tep_session_unregister('shipping');



     }
   }
 } else {
   $shipping = false;
             
   tep_redirect(tep_href_link(FILENAME_CHECKOUT_PAYMENT, '', 'SSL'));
 }    




}

// get all available shipping quotes
$quotes = $shipping_modules->quote();
$addresses_query = tep_db_query("select  entry_zone_id as zone_id from " . TABLE_ADDRESS_BOOK . " where customers_id = '" . $customer_id . "'");
$address = tep_db_fetch_array($addresses_query);
$tee=$address['zone_id'];
$states_query=tep_db_query("select  zone_code from " . TABLE_ZONES . " where zone_id = '" . $tee . "'");
$state = tep_db_fetch_array($states_query);
// if no shipping method has been selected, automatically select the cheapest method.
// if the modules status was changed when none were available, to save on implementing
// a javascript force-selection method, also automatically select the cheapest shipping
// method if more than one module is now enabled
if ( !tep_session_is_registered('shipping') || ( tep_session_is_registered('shipping') && ($shipping == false) && (tep_count_shipping_modules() > 1) ) ) $shipping = $shipping_modules->cheapest();

require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_CHECKOUT_SHIPPING);

$breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'));
$breadcrumb->add(NAVBAR_TITLE_2, tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'));

?>
<script>
 //code by luv START...
//window.onload = function() {//to call shopping_cart page.
//$.get("shopping_cart.php");
//console.log("Shopping_cart page successfully called...");
// };
//code by luv END...
$(document).ready(function(){
 if ($.browser.msie  && parseInt($.browser.version, 10) === 7) {
     $("#ex1").css('width',"100%");
     $(".price_table").css("text-align","left");
 }
 });

</script>




<?php


//echo'<b style="color:red;">';print_r($post_type);echo'</b>';
//echo'<b style="color:red;">';print_r($post_degree);echo'</b>';
//print_r($_SESSION['roastedglass']);exit;
 $any_out_of_stock = 0;
 $products = $cart->get_products();

//echo array_search("705", array_keys($products));
 for ($i=0, $n=sizeof($products); $i<$n; $i++) {
// Push all attributes information in an array
   if (isset($products[$i]['attributes']) && is_array($products[$i]['attributes'])) {
     while (list($option, $value) = each($products[$i]['attributes'])) {
       echo tep_draw_hidden_field('id[' . $products[$i]['id'] . '][' . $option . ']', $value);
       $attributes = tep_db_query("select popt.products_options_name, poval.products_options_values_name, pa.options_values_price, pa.price_prefix
                                   from " . TABLE_PRODUCTS_OPTIONS . " popt, " . TABLE_PRODUCTS_OPTIONS_VALUES . " poval, " . TABLE_PRODUCTS_ATTRIBUTES . " pa
                                   where pa.products_id = '" . (int)$products[$i]['id'] . "'
                                    and pa.options_id = '" . (int)$option . "'
                                    and pa.options_id = popt.products_options_id
                                    and pa.options_values_id = '" . (int)$value . "'
                                    and pa.options_values_id = poval.products_options_values_id
                                    and popt.language_id = '" . (int)$languages_id . "'
                                    and poval.language_id = '" . (int)$languages_id . "'");
       $attributes_values = tep_db_fetch_array($attributes);
           
       $products[$i][$option]['products_options_name'] = $attributes_values['products_options_name'];
       $products[$i][$option]['options_values_id'] = $value;
       $products[$i][$option]['products_options_values_name'] = $attributes_values['products_options_values_name'];
       $products[$i][$option]['options_values_price'] = $attributes_values['options_values_price'];
       $products[$i][$option]['price_prefix'] = $attributes_values['price_prefix'];
       print_r($products[$i][$option]['options_values_price']);
     }
   }

         // echo'<pre><b style="color:red;">'; echo $attributes_values['options_values_price']; echo'</b>';
           // echo'<b style="color:red;">'; print_r($products[$i]);  echo'</b><br />';
 } 
?>  <?php if(false) { //if($cart->count_contents()>0){?>
 <script type="text/javascript">
      $(function(){
             $(".price_table").css("opacity","1.3");
             $(".test-hide").css("opacity","1.3");
             var cssObj={
                 "background-color":"#111",
                 "border-style":"solid",
                 "border-width":"2px",
                 "border-color":"#C7F900"};
             $(".price_table").css(cssObj);
             $("#message_w").html('Verify your shopping cart contents and press "Check Out Now" to continue, or enter your zip code for a "Shipping Quotation" first*');
             setInterval(action_event, 4000);
         });
         action_event = function(){
                 $(".price_table").css("opacity","1.0");
                  var cssObj={
                     "background":"none",
                     "border":"none",
                     "box-shadow":"none"};
                 $(".price_table").css(cssObj);
                 $(".test-hide").css("opacity","1.0");
                 $(".message_p").remove();
             };
</script>
<script type="text/javascript"><!--
var selected;

function selectRowEffect(object, buttonSelect) {
  if (!selected) {
    if (document.getElementById) {
      selected = document.getElementById('defaultSelected');
    } else {
      selected = document.all['defaultSelected'];
    }
  }

  if (selected) selected.className = 'moduleRow';
  object.className = 'moduleRowSelected';
  selected = object;

// one button is not an array
  if (document.checkout_address.shipping[0]) {
    document.checkout_address.shipping[buttonSelect].checked=true;
  } else {
    document.checkout_address.shipping.checked=true;
  }
}

function rowOverEffect(object) {
  if (object.className == 'moduleRow') object.className = 'moduleRowOver';
}

function rowOutEffect(object) {
  if (object.className == 'moduleRowOver') object.className = 'moduleRow';
}

function check_pickup()
{
  for(i=0;i<10;i++)
  {
    if(document.checkout_address.shipping[i].checked)
    {
      if(document.checkout_address.shipping[i].value=="free_free")
      {
        var aa=confirm("Are you sure you want to will call from our Concord, California location?");
        if(aa)
        {
        }
        else
        {
        return false;
        }
      }
    }
  } 
}
//--></script>
<style type="text/css">
    
 
 
 .message_p{
         position:relative;
         z-index: 1000000;
     }
     .message_w{
         position:absolute;
         color:#C7F900;
         text-shadow:2px 2px 3px #111;
         font-size: 18px;
         left:200px;
         top:50px;
         background: #000;
         border-radius:10px;
         padding:10px;
         border:1px solid #C7F900;
         font-weight: bold;
         text-align: center;
         width:400px;
     }
</style>
<? } ?>

<?php

$_SESSION['product_final']=array();


$l=0;
$temp=0;
$new_ids = array();
 
 if(empty($_SESSION['product_final1'])) {
   calCulateQuantity($_SESSION['product_custom'],$customer_id);
 }

/*
if (!empty($customer_id)) {//if Customer not LoggedIn
             //FETCH CUSTOMER IF ADDED PRODUCT FROM TABLE...

unset($_SESSION['product_final1']); 

//echo$eeeee="SELECT * FROM `customers_basket` WHERE `customers_id` ='$customer_id'";
             $querycartdata22 = tep_db_query("SELECT * FROM `customers_basket` WHERE `customers_id` ='$customer_id'");
             $iii=0;
               while ($getcartdata22 = tep_db_fetch_array($querycartdata22)) {
       
   //if($customer_product_data['customers_basket_quantity']==0||$customer_product_data['customers_basket_quantity']==0)	
   //{
   $idbasket=$getcartdata22['customers_basket_id'];
   //$deleteeee = tep_db_query("DELETE * FROM `customers_basket` WHERE `customers_basket_id` ='$idbasket'");	
   //}		
 //else{			
       $customer_product_data = $getcartdata22;
       $_SESSION['product_final1'][$iii]['id']=$customer_product_data['products_id'];
       $_SESSION['product_final1'][$iii]['val']=$customer_product_data['product_val'];
       $_SESSION['product_final1'][$iii]['qty']=$customer_product_data['customers_basket_quantity'];
       $_SESSION['product_final1'][$iii]['custom']=$customer_product_data['product_custom'];
       $_SESSION['product_final1'][$iii]['frosted']=$customer_product_data['product_frosted'];
       $_SESSION['product_final1'][$iii]['wt']=$customer_product_data['product_wt'];
   
   
       $iii++;
 //}
             }
// echo'<b style="color:red;"><pre>';print_r($_SESSION['product_final1']);echo'</b><br />';			
//$_SESSION['product_final1']=$customer_product_data;
}


else{//if Customer not LoggedIn
             //FETCH CUSTOMER IF ADDED PRODUCT FROM TABLE...
$customer_id=tep_session_id();	
unset($_SESSION['product_final1']); 

//echo$eeeee="SELECT * FROM `customers_basket` WHERE `customers_id` ='$customer_id'";
             $querycartdata22 = tep_db_query("SELECT * FROM `customers_basket_temp` WHERE `customers_id` ='$customer_id'");
             $iii=0;
               while ($getcartdata22 = tep_db_fetch_array($querycartdata22)) {
       
   //if($customer_product_data['customers_basket_quantity']==0||$customer_product_data['customers_basket_quantity']==0)	
   //{
   $idbasket=$getcartdata22['customers_basket_id'];
   //$deleteeee = tep_db_query("DELETE * FROM `customers_basket` WHERE `customers_basket_id` ='$idbasket'");	
   //}		
 //else{			
       $customer_product_data = $getcartdata22;
       $_SESSION['product_final1'][$iii]['id']=$customer_product_data['products_id'];
       $_SESSION['product_final1'][$iii]['val']=$customer_product_data['product_val'];
       $_SESSION['product_final1'][$iii]['qty']=$customer_product_data['customers_basket_quantity'];
       $_SESSION['product_final1'][$iii]['custom']=$customer_product_data['product_custom'];
       $_SESSION['product_final1'][$iii]['frosted']=$customer_product_data['product_frosted'];
       $_SESSION['product_final1'][$iii]['wt']=$customer_product_data['product_wt'];
   
   
       $iii++;
 //}
             }
// echo'<b style="color:red;"><pre>';print_r($_SESSION['product_final1']);echo'</b><br />';			
//$_SESSION['product_final1']=$customer_product_data;
}

$selesss=tep_session_id();	
$deletetemdata = tep_db_query("DELETE FROM `customers_basket_temp` WHERE `customers_id`='$selesss'");


*/


foreach($_SESSION['product_final1'] as $key=>$val) {
 for ($i=0, $n=sizeof($products); $i<$n; $i++) {
//echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';			
//echo'<b style="color:red;">';print_r($_SESSION['product_final1'][$l]['val']);echo'</b><br />';			
   if(!strcmp($_SESSION['product_final1'][$i]['custom'],"Yes")) {
             $customcheck=true;
       }
   if($_SESSION['product_final1'][$l]['id']==$products[$i]['id']) {
     if($products[$i]['id']==$roasted_id) {
       $products[$i]['final_price']=$roasted;
        $product_querytees = tep_db_query("update " . TABLE_PRODUCTS . " set products_price=".$products[$i]['final_price']." where products_id = ".$roasted_id."");
     }
     if (strpos($_SESSION['product_final1'][$l]['val'],'SLV') !== false) {	
       if ($_SESSION['product_final1'][$l]['val']=='SLV') {
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
       } else {					
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         $newdesc=$products[$i]['description'];						
         $glassArray=array(24,30,36,42,48,54,60,66);
         $array = explode('"', stripslashes(str_replace("SLV GL ","",$newname)));
         if(!in_array($array[0],$glassArray)){
           $newname.=" Custom Products***";
                         $trip_star=true;
         }
       }
     } 
     
     // else if(strpos($products[$i]['name'],'B950P') !== false)
     // {

     // }
     
     
     else if (strpos($products[$i]['name'],'B950P') !== false || strpos($products[$i]['name'],'EP950') !== false || strpos($products[$i]['name'],'B950') !== false ) {
       //echo'<b style="color:red">'; print_r($products[$i]['name']); echo'</b></br /> ';
       //echo'<b style="color:red">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b></br /> ';
       // echo'<b style="color:red">'; print_r($newname); echo'</b><br/>';
       
       
       
       
       $ck=0;
       if($_SESSION['product_final1'][$l]['val']=='B950'){
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         
         
         if(strpos($products[$i]['name'],'CORNERP') !== false){
           
       $newname=str_replace("CORNERP"," ".$post_type." Corner ".$post_degree." Post ",$newname);
       $newdesc=str_replace("CORNER Post"," ".$post_type." Corner ".$post_degree." Post",$newdesc);
         }
         
       }
       else if (strpos($products[$i]['name'],'GLInner Corner') !== false||strpos($products[$i]['name'],'GLOuter Corner') !== false||strpos($products[$i]['name'],'LYT Inner Corner') !== false||strpos($products[$i]['name'],'LYT Outer Corner') !== false)
       {
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
       }
       else{
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         if(strpos($products[$i]['name'],"Stainless")!==false){
           if(strpos($products[$i]['name'],"LEP")){
             $newname=$newname." LEP Plexi-Glass";
           }else{
             $newname=$newname." REP Plexi-Glass";
           }
           $newname=$newname." Stainless Steel";
           $ck=1;
         }
         if(strpos($products[$i]['name'],"Coated")!==false){
           if(strpos($products[$i]['name'],"LEP")){
             $newname=$newname." LEP Plexi-Glass";
           }else{
             $newname=$newname." REP Plexi-Glass";
           }
           $newname=$newname." Coated Black";
           $ck=1;
         }
         if ((strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false) && (strpos($products[$i]['name'],"SL")!==false)){
           $newname=$newname." Stainless Steel";
         } else if((strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false) && (strpos($products[$i]['name'],'B950') === false)){
           $newname=$newname." Coated Black";
         }
         //echo'<b style="color:red">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b></br /> ';
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
           $glassArray=array(12,18,24,30,36,42,48,54,60,66,72,78,84);
         $array = explode('"', stripslashes(str_replace("B950-","",$_SESSION['product_final1'][$l]['val'])));
         $array2 = explode('"', stripslashes(str_replace("B950P-","",$_SESSION['product_final1'][$l]['val'])));
         $array3 = explode('"', stripslashes(str_replace("EP950-","",$_SESSION['product_final1'][$l]['val'])));
         //echo'<b style="color:red">'; print_r($array); echo'</b></br /> ';
                     $cust=0;
                     foreach ($glassArray as $v){
                         if((!strcmp($v,$array[0]))||(!strcmp($v,$array2[0]))||(!strcmp($v,$array3[0]))){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
           
                     }
                     }
         
         //echo'<b style="color:red">'; print_r($products[$i]['name']); echo'</b><br/>';
         if(strpos($products[$i]['name'],'Inner Corner 90 Degree') !== false){
           $newname.=' Inner Corner 90 Degree';
         }
         else if(strpos($products[$i]['name'],'Inner Corner 135 Degree') !== false){
           $newname.=' Inner Corner 135 Degree';
         }
         else if(strpos($products[$i]['name'],'Outer Corner 90 Degree') !== false){
           $newname.=' Outer Corner 90 Degree';
         }
         else if(strpos($products[$i]['name'],'Outer Corner 135 Degree') !== false){
           $newname.=' Outer Corner 135 Degree';
         }
         /*if(strpos($products[$i]['name'],'GLCORNER') !== false||){
           $newname.='CORNER';
           
            
            // $newname="test";
       $newname=str_replace("GLCORNER","GL ".$post_type." Corner ".$post_degree." Post",$newname);
         
         //$newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);
         $newdesc="test";
         }
         
         */
         //echo'<b style="color:red">'; print_r($newname); echo'</b><br/>';
         if(strpos($_SESSION['product_final1'][$l]['val'],'B950-g') !== false){
           $endglassArray=array(12,18,24);
           $array = explode('"', stripslashes(str_replace("B950-g","",$_SESSION['product_final1'][$l]['val'])));
           //echo'<b style="color:red">'; print_r($array); echo'</b><br/>';
           $cust=0;
                     foreach ($endglassArray as $v){
                         if((!strcmp($v,$array[0]))||(!strcmp($v,$array2[0]))||(!strcmp($v,$array3[0]))){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$_SESSION['product_final1'][$l]['val'];
             }
                         }
           
                     }
           
         }
         
         
         if($cust==0){
           
                         if(strpos($_SESSION['product_final1'][$l]['val'],'EP950') !== false){
             $newname.=" Custom Products".$custom;
             $trip_star=false;
           }
           else{
             if((strpos($products[$i]['name'],'GLCORNER') !== false)||(strpos($products[$i]['name'],'Inner Corner 90 Degree') !== false)||(strpos($products[$i]['name'],'Inner Corner 135 Degree') !== false)||(strpos($products[$i]['name'],'Outer Corner 90 Degree') !== false)||(strpos($products[$i]['name'],'Outer Corner 135 Degree') !== false)){
             }
             else{
                         $newname.=" Custom Products***".$custom;
           $trip_star=true;
             }
           
           }
           
                         
                       

           
             $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("B950-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
             if(strpos($products[$i]['description'],'Glass Corner Post') !== false){
           
         $newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);
         
         }
             
         }else{
           $newdesc=$products[$i]['description'];
           
           if(strpos($products[$i]['description'],'Glass Corner Post') !== false){
           
         $newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);
         
         }
           //echo'<b style="color:red">'; print_r($newdesc); echo'</b><br/>';
         }
         if((strpos($products[$i]['name'],'GLCORNER') !== false)||(strpos($products[$i]['name'],'Inner Corner 90 Degree') !== false)||(strpos($products[$i]['name'],'Inner Corner 135 Degree') !== false)||(strpos($products[$i]['name'],'Outer Corner 90 Degree') !== false)||(strpos($products[$i]['name'],'Outer Corner 135 Degree') !== false)){
             //echo'<b style="color:red">'; print_r($products[$i]['name']); echo'</b><br/>';
             $newname.=" Custom Products***".$custom;
             $trip_star=true;
           }
         
         
         
         
         if(strpos($_SESSION['product_final1'][$l]['val'],'LEP') !== false){
            $newdesc=stripslashes(str_replace("\"LEP","",str_replace("B950-g","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"X')));
            $newdesc=$products[$i]['description'];
         }
         if(strpos($_SESSION['product_final1'][$l]['val'],'REP') !== false){
            $newdesc=stripslashes(str_replace("\"REP","",str_replace("B950-g","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"X')));
            $newdesc=$products[$i]['description'];
         }
       }
       if (strpos($newdesc,'Battery pack') !== false) {
         $newname=$newname."-BP";
       }
       
       if (strpos($newname,'LYT') !== false){
             $newdesc=stripslashes($_SESSION['product_final1'][$l]['val'])." LED LIGHT BAR WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
           
          
       
         
       }
       
        
       /*echo'<b style="color:red">'; print_r($newname); echo'</b></br /> ';
       if(strpos($products[$i]['name'],'LYT CORNER') !== false){
         
           //echo'<b style="color:red">'; print_r($products[$i]['name']); echo'</b></br /> ';
           //$newname="test";
           $newname= str_replace("LYT CORNER"," LIGHT BAR CORNER",$newname);
       }
       */				
       /*if ((strpos($products[$i]['name'],'LEP') !== false)||(strpos($products[$i]['name'],'REP') !== false)){
         
         
         $postArray=array(12,18,24);
         
         $array = explode('"', stripslashes(str_replace("B950-g","",$_SESSION['product_final1'][$l]['val'])));
       
         if(in_array($array[0],$postArray)){
         
           //echo " Not custom";
         }else{
           if($ck==0){
             $newname.=" Custom Products ***";
             $trip_star=true;
           }
         }
         
       
         
       }*/
       
       
     }
     
     
     
     else if (strpos($products[$i]['name'],'ORBIT360') !== false) {
       $newname=$products[$i]['name'];	
       $newdesc=$products[$i]['description'];  
       //echo'<b style="color:red">'; print_r($products[$i]['name']); echo'</b></br /> ';
        
       if(strpos($products[$i]['name'],'FLANGE') !== false || strpos($products[$i]['name'],'RPSS') !== false || strpos($products[$i]['name'],'LPSS') !== false || strpos($products[$i]['name'],'CPSS') !== false)
       {
       
       }
       else
       {
       //echo'<b style="color:red">'; print_r($products[$i]['name']); echo'</b></br /> ';
       //echo'<b style="color:red">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b></br /> ';
       
       //echo'<b style="color:red"><pre>'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b><br/>';
       
       
       
       $ck=0;
     
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         
       //echo'<b style="color:red"><pre>'; print_r(print_r($_SESSION['product_final1']); echo'</b><br/>';
       
         if(strpos($products[$i]['name'],"ORBIT360-g")!==false){
           if(strpos($products[$i]['name'],"LEP")){
             $newname=$newname." Left End Panel";
           }else{
             $newname=$newname." Right End Panel";
           }
           //$newname=$newname." Stainless Steel";
           $ck=1;
         }
         if(strpos($products[$i]['name'],"Coated")!==false){
           if(strpos($products[$i]['name'],"LEP")){
             $newname=$newname." Left End Panel";
           }else{
             $newname=$newname." Right End Panel";
           }
           //$newname=$newname." Coated Black";
           $ck=1;
         }
         
         if ((strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false) && (strpos($products[$i]['name'],"SL")!==false)){
           $newname=$newname." Stainless Steel";
         } else if((strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false) && (strpos($products[$i]['name'],'Brushed Aluminium') !== false)){
           $newname=$newname." Brushed Aluminium";
         }
          else if((strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false) && (strpos($products[$i]['name'],'ORBIT360') === false)){
           $newname=$newname." Coated Black";
         }
         
         //echo'<b style="color:red">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b></br /> ';
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
         
           $glassArray=array(12,18,24,30,36,42,48,54,60,66);
         $array = explode('"', stripslashes(str_replace("B950-","",$_SESSION['product_final1'][$l]['val'])));
         $array2 = explode('"', stripslashes(str_replace("ORBIT360-","",$_SESSION['product_final1'][$l]['val'])));
         $array3 = explode('"', stripslashes(str_replace("EP950-","",$_SESSION['product_final1'][$l]['val'])));
         //echo'<b style="color:red">'; print_r($array); echo'</b></br /> ';
                     $cust=0;
         //echo'<b style="color:red">'; print_r($newname); echo'</b><br/>';
       
         foreach ($glassArray as $v){
                         if((!strcmp($v,$array[0]))||(!strcmp($v,$array2[0]))||(!strcmp($v,$array3[0]))){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
           
                     }	
         
                     
           
         
         
         
                     }
       
         
     //echo'<b style="color:red">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b><br/>';
         
         if($cust==0){
           
                       if(strpos($newname,'Left End Panel') !== false ||strpos($newname,'Right End Panel') !== false){
           $newdesc=$products[$i]['description'];  
           }
           else{
                         $newname.=" Custom Products***".$custom;
           $trip_star=true;
           
                         //echo'<b style="color:red">'; print_r($newname); echo'</b><br/>';
                       

           
             $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("B950-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
           }
             
         }else{
           $newdesc=$products[$i]['description'];
           
           if(strpos($products[$i]['description'],'Glass Corner Post') !== false){
           
         $newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);
         
         }
           //echo'<b style="color:red">'; print_r($newdesc); echo'</b><br/>';
         }
       
         
         
         
         if(strpos($_SESSION['product_final1'][$l]['val'],'LEP') !== false){
            $newdesc=stripslashes(str_replace("\"LEP","",str_replace("B950-g","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"X')));
            $newdesc=$products[$i]['description'];
         }
         if(strpos($_SESSION['product_final1'][$l]['val'],'REP') !== false){
            $newdesc=stripslashes(str_replace("\"REP","",str_replace("B950-g","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"X')));
            $newdesc=$products[$i]['description'];
         }
     
       if (strpos($newdesc,'Battery pack') !== false) {
         $newname=$newname."-BP";
       }
       
       if (strpos($newname,'LYT') !== false){
             $newdesc=stripslashes($_SESSION['product_final1'][$l]['val'])." LED LIGHT BAR WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
           
          
       
         
       }
       
     }
       
       
       
     }	
     
     else if (strpos($products[$i]['name'],'ORBIT720') !== false) {
       //echo'<b style="color:red">'; print_r($products[$i]['name']); echo'</b></br /> ';
       //echo'<b style="color:red">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b></br /> ';
       // echo'<b style="color:red">'; print_r($newname); echo'</b><br/>';
       
       
       
       
       $ck=0;
     
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         
         if(strpos($products[$i]['name'],"Stainless")!==false){
           if(strpos($products[$i]['name'],"LEP")){
             $newname=$newname." LEP Plexi-Glass";
           }else{
             $newname=$newname." REP Plexi-Glass";
           }
           $newname=$newname." Stainless Steel";
           $ck=1;
         }
         if(strpos($products[$i]['name'],"Coated")!==false){
           if(strpos($products[$i]['name'],"LEP")){
             $newname=$newname." LEP Plexi-Glass";
           }else{
             $newname=$newname." REP Plexi-Glass";
           }
           $newname=$newname." Coated Black";
           $ck=1;
         }
         
         if ((strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false) && (strpos($products[$i]['name'],"SL")!==false)){
           $newname=$newname." Stainless Steel";
         } else if((strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false) && (strpos($products[$i]['name'],'B950') === false)){
           $newname=$newname." Coated Black";
         }
         
         //echo'<b style="color:red">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b></br /> ';
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
         
           $glassArray=array(12,18,24,30,36,42,48,54,60,66);
         $array = explode('"', stripslashes(str_replace("B950-","",$_SESSION['product_final1'][$l]['val'])));
         $array2 = explode('"', stripslashes(str_replace("ORBIT720-","",$_SESSION['product_final1'][$l]['val'])));
         $array3 = explode('"', stripslashes(str_replace("EP950-","",$_SESSION['product_final1'][$l]['val'])));
         //echo'<b style="color:red">'; print_r($array); echo'</b></br /> ';
                     $cust=0;
         //echo'<b style="color:red">'; print_r($newname); echo'</b><br/>';
       
         foreach ($glassArray as $v){
                         if((!strcmp($v,$array[0]))||(!strcmp($v,$array2[0]))||(!strcmp($v,$array3[0]))){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
           
                     }	
         
                     
           
         
         
         
                     }
       
         
     //echo'<b style="color:red">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b><br/>';
         
         if($cust==0){
           
                       if(strpos($newname,'Plexi-Glass') !== false){
           $newdesc=$products[$i]['description'];  
           }
           else{
                         $newname.=" Custom Products***".$custom;
           $trip_star=true;
           
                         //echo'<b style="color:red">'; print_r($newname); echo'</b><br/>';
                       

           
             $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("B950-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
           }
             
         }else{
           $newdesc=$products[$i]['description'];
           
           if(strpos($products[$i]['description'],'Glass Corner Post') !== false){
           
         $newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);
         
         }
           //echo'<b style="color:red">'; print_r($newdesc); echo'</b><br/>';
         }
       
         
         
         
         if(strpos($_SESSION['product_final1'][$l]['val'],'LEP') !== false){
            $newdesc=stripslashes(str_replace("\"LEP","",str_replace("B950-g","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"X')));
            $newdesc=$products[$i]['description'];
         }
         if(strpos($_SESSION['product_final1'][$l]['val'],'REP') !== false){
            $newdesc=stripslashes(str_replace("\"REP","",str_replace("B950-g","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"X')));
            $newdesc=$products[$i]['description'];
         }
     
       if (strpos($newdesc,'Battery pack') !== false) {
         $newname=$newname."-BP";
       }
       
       if (strpos($newname,'LYT') !== false){
             $newdesc=stripslashes($_SESSION['product_final1'][$l]['val'])." LED LIGHT BAR WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
           
          
       
         
       }
       
     
       
       
     }
     
     
     
     
     
     else if (strpos($products[$i]['name'],'EP6') !== false){
       
       
     //	echo'<b style="color:red">'; print_r($_SESSION['product_final1']); echo'</b></br /> ';	
       
       
       
       $ck=0;
     
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         
         $newdesc=$products[$i]['description'];
       
         //echo'<b style="color:red">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b></br /> ';
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
           $glassArray=array(12,18,24,30,36,42,48,54);
           
         if (strpos($products[$i]['name'],'Ring-EP6') !== false){	
         $array3 = explode('"', stripslashes(str_replace("Ring-EP6-","",$_SESSION['product_final1'][$l]['val'])));
         }
         else{	
         $array3 = explode('"', stripslashes(str_replace("EP6-","",$_SESSION['product_final1'][$l]['val'])));
         }
         
         
         
         
                     $cust=0;
                     foreach ($glassArray as $v){
                         if((!strcmp($v,$array3[0]))){
             
           
             
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
           
                     }
                     }
         //echo'<b style="color:red"><pre>'; print_r($newname); echo'</b></br /> ';
         if (strpos($products[$i]['name'],'6" Plus') !== false){
         $newname.=' Plus 6" g';
         $cust=0;
         $glassheight=6;	
         $customcheck=true;						
         }
         elseif (strpos($products[$i]['name'],'12" Plus') !== false){
         $newname.=' Plus 12" g';
         $cust=0;	
         $glassheight=12;
         $customcheck=true;			
         }
         else{
         $newname.='';
         $glassheight=0;		
         }
         
         
         $nesarray=explode('"GL',$newname);
         if($nesarray[0]=='EP6-GL')
         {
           
         $cust=1;	
         $newname='EP6-No Glass';
         //echo'<b style="color:red">'; print_r($nesarray[0]); echo'</b></br /> ';	
         }
         else{
         
         
           $newarray2=explode('EP6-',$nesarray[0]);
           //
           if(($newarray2[1]>=42))
           {
             
           
           if($newarray2[1]==42)
           {
             
           }
           else{
                       //$newname.=' 3/8" Thick';
           $cust=0;
           }
           }
           
           
           
         }
         
         if($cust==0){
           
           
           
            
             
                         $newname.=" Custom Products**".$custom;
           $doub_star=true;
           
           
           
                         
                     

           
           //  $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
             //echo'<b style="color:red">'; print_r($newdesc); echo'</b></br /> ';
           
           $array = explode('"', stripslashes(str_replace("EP6-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=EP6Desc($array[0],$glassheight);
           $array = explode('<p>', $newdesc);
           
           // echo'<b style="color:red">'; print_r($glassheight); echo'</b></br /> ';
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p>";
         
             
         }
         
         else{
         
         
         $newdesc=$products[$i]['description'];
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
           $glassArray=array(12,18,24,30,36,42,48,54);
         $array = explode('"', stripslashes(str_replace("EP6-","",$_SESSION['product_final1'][$l]['val'])));
       
         //echo'<b style="color:red">'; print_r($array); echo'</b></br /> ';
                     $cust=0;
                     foreach ($glassArray as $v){
                         if((!strcmp($v,$array[0]))||(!strcmp($v,$array2[0]))||(!strcmp($v,$array3[0]))){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
           
                     }
                     }
         }
       
       
       if (strpos($products[$i]['name'],'Post') !== false){
         //echo'<b style="color:red">'; print_r($products[$i]['name']); echo'</b></br /> ';
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         
       }
       
       
     
       
       
       
       
       
       /*
       
       
       $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
     
       
       
     if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
           $glassArray=array(12,18,24,30,36,42,48,54);
         $array = explode('"', stripslashes(str_replace("EP6-","",$_SESSION['product_final1'][$l]['val'])));
       
         //echo'<b style="color:red">'; print_r($array); echo'</b></br /> ';
                     $cust=0;
                     foreach ($glassArray as $v){
                         if((!strcmp($v,$array[0]))||(!strcmp($v,$array2[0]))||(!strcmp($v,$array3[0]))){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
           
                     }
                     }
         
         
         
         
          $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("EP6-","",$_SESSION['product_final1'][$l]['val'])));
     
     
     
   */
     
     }					
                 
       
       
     else if (strpos($products[$i]['name'],'EP7') !== false){
       
       
       
       
       
       
       
       
       
       
       $ck=0;
     
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         
         
       
         //echo'<b style="color:red">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b></br /> ';
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
           $glassArray=array(12,18,24,30,36,42,48,54);
         $array3 = explode('"', stripslashes(str_replace("EP7-","",$_SESSION['product_final1'][$l]['val'])));
         
         
         
         
         
         
                     $cust=0;
                     foreach ($glassArray as $v){
                         if((!strcmp($v,$array3[0]))){
             
           
             
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
           
                     }
                     }
         
         
         $nesarray=explode('"GL',$newname);
         if($nesarray[0]=='EP7-GL')
         {
           
         $cust=1;	
         $newname='EP7-No Glass';
         //echo'<b style="color:red">'; print_r($nesarray[0]); echo'</b></br /> ';	
         }
         else{
         
         
           $newarray2=explode('EP7-',$nesarray[0]);
           //
           if(($newarray2[1]>=42))
           {
             
           
           if($newarray2[1]==42)
           {
             
           }
           else{
                       //$newname.=' 3/8" Thick';
           $cust=0;
           }
           }
           
           
           
         }
         
         //if($cust==0){
           
           
           
            
             
                         $newname.=" Custom Products**";
           $doub_star=true;
           
           
           
                         
                       

           
             // $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           // $array = explode('"', stripslashes(str_replace("B950-","",$_SESSION['product_final1'][$l]['val'])));
           
             // $qtyNew34=B950Desc($array[0]);
           // $array = explode('<p>', $newdesc);
            
             // $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
         
             
         //}
         
         
         
         
         $newdesc=$products[$i]['description'];
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
           $glassArray=array(12,18,24,30,36,42,48,54);
         $array = explode('"', stripslashes(str_replace("EP7-","",$_SESSION['product_final1'][$l]['val'])));
       
         //echo'<b style="color:red">'; print_r($array); echo'</b></br /> ';
                     $cust=0;
                     foreach ($glassArray as $v){
                         if((!strcmp($v,$array[0]))||(!strcmp($v,$array2[0]))||(!strcmp($v,$array3[0]))){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
           
                     }
                     }
     
       
       
       
       
       
     
       
       //$ep7glassss=true;
       $customcheck=true;
       
       
       
       
       
       
       if (strpos($products[$i]['name'],'Post') !== false){
         //echo'<b style="color:red">'; print_r($products[$i]['name']); echo'</b></br /> ';
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         
       }
     
     
     
     }					
         
     else if (strpos($products[$i]['name'],'EP8') !== false){
       
       
     //	echo'<b style="color:red">'; print_r($_SESSION['product_final1']); echo'</b></br /> ';	
       
       
       
       $ck=0;
     
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         
         $newdesc=$products[$i]['description'];
       
         //echo'<b style="color:red">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b></br /> ';
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
           $glassArray=array(12,18,24,30,36,42,48,54);
           
         
         $array3 = explode('"', stripslashes(str_replace("EP8-","",$_SESSION['product_final1'][$l]['val'])));
         
         
         
         
         
                     $cust=0;
                     foreach ($glassArray as $v){
                         if((!strcmp($v,$array3[0]))){
             
           
             
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
           
                     }
                     }
       
         
         
         $nesarray=explode('"GL',$newname);
         if($nesarray[0]=='EP8-GL')
         {
           
         $cust=1;	
         $newname='EP8-No Glass';
         //echo'<b style="color:red">'; print_r($nesarray[0]); echo'</b></br /> ';	
         }
         else{
         
         
           $newarray2=explode('EP8-',$nesarray[0]);
           //
           if(($newarray2[1]>=42))
           {
             
           
           if($newarray2[1]==42)
           {
             
           }
           else{
                       //$newname.=' 3/8" Thick';
           $cust=0;
           }
           }
           
           
           
         }
           
         if($_SESSION['product_final1'][$l]['banner_color']!='' && $_SESSION['product_final1'][$l]['banner_height']!='')
         {
           $banner_heightss=$_SESSION['product_final1'][$l]['banner_height'];
           $banner_colorss=$_SESSION['product_final1'][$l]['banner_color'];
           $newname.=" (Banner Height-".$banner_heightss." and Banner Color-".$banner_colorss.")";
         }
         
         
         if($cust==0){
           
           
           
            
             
                         $newname.=" Custom Products**".$custom;
           $doub_star=true;
           
           
           
                         
                     

           
           //  $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
             //echo'<b style="color:red">'; print_r($newdesc); echo'</b></br /> ';
           
           $array = explode('"', stripslashes(str_replace("EP8-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=EP6Desc($array[0],$glassheight);
           $array = explode('<p>', $newdesc);
           
           // echo'<b style="color:red">'; print_r($glassheight); echo'</b></br /> ';
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p>";
         
             
         }
         
         else{
         
         
         $newdesc=$products[$i]['description'];
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
           $glassArray=array(12,18,24,30,36,42,48,54);
         $array = explode('"', stripslashes(str_replace("EP8-","",$_SESSION['product_final1'][$l]['val'])));
       
         //echo'<b style="color:red">'; print_r($array); echo'</b></br /> ';
                     $cust=0;
                     foreach ($glassArray as $v){
                         if((!strcmp($v,$array[0]))||(!strcmp($v,$array2[0]))||(!strcmp($v,$array3[0]))){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
           
                     }
                     }
         }
       
       
       if (strpos($products[$i]['name'],'Post') !== false){
         //echo'<b style="color:red">'; print_r($products[$i]['name']); echo'</b></br /> ';
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         
       }
       
       
       
       
       if (strpos($products[$i]['name'],'Both Side Different Banner') !== false){
         
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         
       }
       
       
       if (strpos($products[$i]['name'],'Single Side Banner') !== false){
         $newname=str_replace("GL"," Single Side Banner",$newname);
       }
       elseif (strpos($products[$i]['name'],'Double Side Banner') !== false){
         $newname=str_replace("GL"," Double Side Banner",$newname);
       }
       else{
       
       if (strpos($products[$i]['name'],'Vinyl Clear Screen') !== false){
       
       $newname=str_replace("GL"," Vinyl Clear Screen",$newname);
       
     
       }
       }
       
       if (strpos($products[$i]['name'],'Plexiglass') !== false){
       $newname='EP8 Plexiglass Clip';	
       $newdesc=$products[$i]['description'];	
       }
     
		if (strpos($products[$i]['name'],'EP8 Ring Clips') !== false){
		$newname='EP8 Ring Clips';	
		$newdesc=$products[$i]['description'];	
		}
				  
       
       
     
     }	
       
       
     else if (strpos($products[$i]['name'],'LB') !== false){
       
       if($_SESSION['product_final1'][$l]['val']=='HL'){
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         
         
         
         
       }else{
       
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
         
            
         }else{
           $newdesc=$products[$i]['description'];
           
         }
         
       }
       if(strpos($products[$i]['name'],'SL') !== false){
       
         $newname=$newname."-"."Stainless Steel ";
         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("HL-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Stainless Steel"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
           
       }	if(strpos($products[$i]['name'],'AL') !== false){
       
         $newname=$newname."-"."Aluminum ";
         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("HL-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Aluminum
"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
           
       }
        if(strpos($products[$i]['name'],'PC') !== false){
       $newname=$newname."-"."Powder Coated Black ";
         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("HL-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Powder Coated Black
"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
           
         
       } 
       
       
       if (strpos($newname,'Battery pack') !== false){
       
         $newname=$newname."-BP";
         
       }if (strpos($newname,'IC') !== false){
       $newname=$newname."-"." Infinite Heat Lamp Control ##";
             $newdesc=stripslashes($_SESSION['product_final1'][$l]['val'])."  Infinite Heat Lamp Control";
       
         
       }
               
       if ((strpos($products[$i]['name'],'LEP') !== false)||(strpos($products[$i]['name'],'REP') !== false)){
         
         
         $postArray=array(12,18,24);
         
         $array = explode('"', stripslashes(str_replace("B950-g","",$_SESSION['product_final1'][$l]['val'])));
       
         if(in_array($array[0],$postArray)){
         
           //echo " Not custom";
         }else{
           $newname.=" Custom Products ***";
                                                     $trip_star=true;
         }
         
       
         
       }
       
       
     }else if (strpos($products[$i]['name'],'HL') !== false){
       if($_SESSION['product_final1'][$l]['val']=='HL'){
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         
         
         
         
       }else{
       
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
         
            
         }else{
           $newdesc=$products[$i]['description'];
           
         }
         
       }
       if(strpos($products[$i]['name'],'SL') !== false){
       
         $newname=$newname."-"."Stainless Steel #";
                                             $sin_hash=true;
         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("HL-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Stainless Steel
<br>(note: heat lamp housing is anodized aluminum)"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
           
       }	if(strpos($products[$i]['name'],'AL') !== false){
       
         $newname=$newname."-"."ALUMINUM #";
                                             $sin_hash=true;
         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("HL-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Aluminum
<br>(note: heat lamp housing is anodized aluminum)"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
           
       }
        if(strpos($products[$i]['name'],'PC') !== false){
                                         $newname=$newname."-"."Powder Coated Black #";
                                         $sin_hash=true;
                                         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("HL-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Powder Coated Black
<br>(note: heat lamp housing is anodized aluminum)"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
           
         
       } 
       
       
       if (strpos($newname,'Battery pack') !== false){
       
         $newname=$newname."-BP";
         
       }
       if (strpos($newname,'IC') !== false){
       $newname=$newname."-"." Infinite Heat Lamp Control ##";
                                     $doub_hash=true;
             $newdesc=stripslashes($_SESSION['product_final1'][$l]['val'])."  Infinite Heat Lamp Control";
       
         
       }
               
       if ((strpos($products[$i]['name'],'LEP') !== false)||(strpos($products[$i]['name'],'REP') !== false)){
         
         
         $postArray=array(12,18,24);
         
         $array = explode('"', stripslashes(str_replace("B950-g","",$_SESSION['product_final1'][$l]['val'])));
       
         if(in_array($array[0],$postArray)){
         
           //echo " Not custom";
         }else{
           $newname.=" Custom Products ***";
                                                     $trip_star=true;
         }
         
       
         
       }
       
       
     }else if (strpos($products[$i]['name'],'B950') !== false){
       if($_SESSION['product_final1'][$l]['val']=='B950'){
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         
         //echo'<b style="color:red">'; print_r($newname); echo'</b><br/>';
         
         
       }else{
       
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         
         if(strpos($_SESSION['product_final1'][$l]['val'],'GL') !== false){
         
             $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("B950-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
            
       
           
         }else{
           $newdesc=$products[$i]['description'];
           
         }
         if(strpos($_SESSION['product_final1'][$l]['val'],'LEP') !== false){
            $newdesc=stripslashes(str_replace("\"LEP","",str_replace("B950-g","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"X')));
            
         }
         if(strpos($_SESSION['product_final1'][$l]['val'],'REP') !== false){
            $newdesc=stripslashes(str_replace("\"REP","",str_replace("B950-g","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"X')));
            
         }
       }
       
       
       
       
               
       /*if ((strpos($products[$i]['name'],'LEP') !== false)||(strpos($products[$i]['name'],'REP') !== false)){
         
         
         $postArray=array(12,18,24);
         
         $array = explode('"', stripslashes(str_replace("B950-g","",$_SESSION['product_final1'][$l]['val'])));
       
         if(in_array($array[0],$postArray)){
         
           //echo " Not custom";
         }else{
           $newname.=" Custom Products ***";
                                                     $trip_star=true;
         }
         
       
         
       }*/
       
       
       
       
       
     } else if (strpos($products[$i]['name'],'ED20') !== false){

       if($_SESSION['product_final1'][$l]['val']=='ED20'){

         $newname=$products[$i]['name'];

         $newdesc=$products[$i]['description'];
         
       }else{

         $newname=stripslashes($_SESSION['product_final1'][$l]['val']." Custom Products");
           $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
                          $newdesc=$products[$i]['description'];
           $arr=explode("-", $newname);

           if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           
           if (strpos($products[$i]['name'],'ED20EPBSS') !== false){
           $newname="ED20 END PANEL GLASS CLIP";
           } else {
             $newname="ED20-CW".$counter." Custom Products ";
           }
                   
         
        // /*for light bar*/
//					  
         if(strpos($products[$i]['name'],'LYT') !== false){
//								
//							$newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
//                                
//							$arr=explode("-", $newname);
//
//							if(sizeof($arr)>=3){
//
//								$counter=$arr[2];
//
//								$post=$arr[0]."-".$arr[1];
//
//							}else{
//
//								$counter=$arr[1];
//
//								$post=$arr[0];
//
//							} 
//							
           //$array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
//							$array = explode('<p>', $newdesc);
//							$newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
//
//							$arr=explode("-", $newname);
//							
//							if(sizeof($arr)>=2){
//
//								$counter=$arr[0];
//                              
//								$post=$arr[1];
//								$arr2 = str_split($post, 1);
//                                $newname="ED20-".$counter."-".$arr2[0].$arr2[1].$arr2[2].$arr2[3].$arr2[4]." LYT Custom Products";
//							}else{
//
//								$counter=$arr[0];
//                                 
//								 $arr2 = str_split($counter, 1);
//								 if(sizeof($arr2)>=8){
//                               $newname="ED20-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]." LYT Custom Products"; 
//								 }
//								 else{
//									 $newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." LYT Custom Products"; 
//									 
//									 }
//							} 
             
           $newname="ED20-" .$post."-".$counter." Custom Products**";	
           //$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." LYT Custom Products";
           }
           
           
           
         /* for glass*/

            if (strpos($products[$i]['name'],'GL') !== false&&strpos($products[$i]['name'],'SLP') === false){
            $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
//			                $array2 = explode('<p>', $array);
                 $qtyNew345=edT2Desc($array[1]);
             $qtyNew34=ed20TDesc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".$qtyNew34." x ".$qtyNew345."</p><p>".$array[3]."</p>";
                $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
                             
           $arr=explode("-", $newname);

           if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            $newname="ED20-PH".$post."-".$counter." Custom Products**";
                                                      $doub_star=true;
            }
            
             if (strpos($products[$i]['name'],'SLP') !== false ){
            $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
                $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
                             $newde=$products[$i]['name'];
                 $arr2=explode("ED20", $newde);
                             $counter=$arr2[1];
                             $arr3 = str_split($counter, 3);
              
           $arr=explode("-", $newname);

           if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            $newname="ED20-PH".$post."-"."CW".$counter." Left Shelf Arm"." Custom Products ".$arr3[1];
            }
            if (strpos($products[$i]['name'],'SRP') !== false ){
            $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
                $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
                             $newde=$products[$i]['name'];
                 $arr2=explode("ED20", $newde);
                             $counter=$arr2[1];
                             $arr3 = str_split($counter, 3);
              
           $arr=explode("-", $newname);

           if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            $newname="ED20-PH".$post."-"."CW".$counter." Right Shelf Arm"." Custom Products ".$arr3[1];
            }
             if (strpos($products[$i]['name'],'SCP') !== false ){
            $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
                $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
                               $newde=$products[$i]['name'];
                 $arr2=explode("ED20", $newde);
                             $counter=$arr2[1];
                             $arr3 = str_split($counter, 3);
              
           $arr=explode("-", $newname);

           if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            $newname="ED20-"."CW".$counter." Center Shelf Arm"." Custom Products ".$arr3[1];
            }
            
            if (strpos($products[$i]['name'],'FLANGE') !== false ){
            $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
                $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
                             
           $arr=explode("-", $newname);

           if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));
           //echo'<b style="color:red;">'; print_r($products[$i]['name']);   echo'</b><br />';
           if (strpos($products[$i]['name'],'UNDER COUNTER') !== false ){
           $newname="ED20"." UNDER COUNTER FLANGE COVER"." Custom Products";	
           }
           else{
           $newname="ED20"." FLANGE COVER"." Custom Products";	
           }
           
            
            
            
            }
            /* for top glass*/
            
            
         if (strpos($products[$i]['name'],'TG') !== false&&strpos($products[$i]['name'],'SLP') === false){
                $newdesc=stripslashes(str_replace("TG","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           $result = preg_replace("/[^a-zA-Z0-9]+/", "", html_entity_decode($array[1]));
           $array9 = explode('<p>', $result);
           $array9 = $array9[0];
           $arr9 = str_split($array9, 2);
             //$qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".$qtyNew345." x ".($arr9[0]-1).' 1/8'."</p><p>".$array[3]."</p>";
                 $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));

           $arr=explode("-", $newname);
           
           if(sizeof($arr)>=2){

             $counter=$arr[0];
                           
             $post=$arr[1];
             $arr2 = str_split($post, 1);
                             $newname="ED20-".$counter."-".$arr2[0].$arr2[1].$arr2[2].$arr2[3].$arr2[4]."CW".$arr2[5].$arr2[6].$arr2[7].$arr2[8]."Custom Products**";
             
           }else{

             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);
              if(sizeof($arr2)>=8){
                            $newname="ED20-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]."CW".$arr2[4].$arr2[5].$arr2[6].$arr2[7]."**"; 
              //echo $newname;
              }
              else{
                $newname="ED20-".$arr2[0].$arr2[1].$arr2[2]."CW".$arr2[3].$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
               //echo $newname; 
                }
           }
         
        
       
           
   }
         
              //$newdesc=$products[$i]['description'];
         if (strpos($products[$i]['name'],'LP') !== false&&strpos($products[$i]['name'],'SLP') === false){

           $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
                           $newdesc=$products[$i]['description'];
           
                          $newde=$products[$i]['name'];
                 $arr2=explode("ED20", $newde);
                             $counter=$arr2[1];
                              
              $arr3 = str_split($counter, 2);
           
           

           $arr=explode("-", $newname);

           if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           }

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));
                           

            $newname="ED20LP-CW".$counter."\"/PH".$post.$arr3[2];

         }

         if (strpos($products[$i]['name'],'RP') !== false&&strpos($products[$i]['name'],'SRP') === false){
                          $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           
           $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
                         $newdesc=$products[$i]['description'];
           $newde=$products[$i]['name'];
                 $arr2=explode("ED20", $newde);
                             $counter=$arr2[1];
                              
              $arr3 = str_split($counter, 2);
           $arr=explode("-", $newname);

           if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           }
                              
                          
            $newname="ED20RP-CW".$counter."\"/PH".$post.$arr3[2];
            
         }
         if (strpos($products[$i]['name'],'LEP') !== false){
           $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
           //$newdesc=$products[$i]['description'];
           $array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           $result = preg_replace("/[^a-zA-Z0-9]+/", "", html_entity_decode($array[1]));
           $array9 = explode('<p>', $result);
           $array9 = $array9[0];
           $arr9 = str_split($array9, 2);
            $qtyNew346=edLEPDesc($arr[0],$arr[1]);
             //$qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             
             $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
                             
           $arr=explode("-", $newname);

           if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];
             
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".$qtyNew346." x ".($arr9[0]-2).' 3/8'."</p><p>".$array[3]."</p>";

           }else{

             $counter=$arr[1];

             $post=$arr[0];
                            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr[0]-2).$qtyNew346." x ".($arr9[0]-2).' 3/8'."</p><p>".$array[3]."</p>";
           } 
             $newname="ED20-"."PH ".$post." CW ".$arr9[0]." LEP";
             $newname= $newname." Custom Products**";
                                                       $doub_star=true;
         }
         if (strpos($products[$i]['name'],'REP') !== false){
           $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
           //$newdesc=$products[$i]['description'];
           $array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           $result = preg_replace("/[^a-zA-Z0-9]+/", "", html_entity_decode($array[1]));
           $array9 = explode('<p>', $result);
           $array9 = $array9[0];
           $arr9 = str_split($array9, 2);
            $qtyNew346=edLEPDesc($arr[0],$arr[1]);
             //$qtyNew34=B950Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             //$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1,".$qtyNew346." x ".($arr9[0]-1).' 1/8'."</p><p>".$array[3]."</p>";
             $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
                             
           $arr=explode("-", $newname);

           if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".$qtyNew346." x ".($arr9[0]-2).' 3/8'."</p><p>".$array[3]."</p>";

           }else{

             $counter=$arr[1];

             $post=$arr[0];
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr[0]-2).$qtyNew346." x ".($arr9[0]-2).' 3/8'."</p><p>".$array[3]."</p>";

           } 
            $newname="ED20-"."PH ".$post." CW ".$arr9[0]." REP";
             $newname= $newname." Custom Products**";
                                                       $doub_star=true;
         }

         if (strpos($products[$i]['name'],'CP') !== false&&strpos($products[$i]['name'],'SCP') === false){

           $newname= stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']));
                          $newdesc=$products[$i]['description'];
           $arr=explode("-", $newname);
                           $newde=$products[$i]['name'];
                 $arr2=explode("ED20", $newde);
                             $counter=$arr2[1];
                              
              $arr3 = str_split($counter, 2);
           
           if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           }

            $newname="ED20CP-CW".$counter."\"/PH".$post.$arr3[2];

         }

       }

     }else if (strpos($products[$i]['name'],'ES82') !== false){
       
       if($_SESSION['product_final1'][$l]['val']=='ES82'){
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         if(strpos($products[$i]['name'],"gLEP")){
           $newname=$products[$i]['name']." Custom Product***";
           $trip_star=true;
         }
         if(strpos($products[$i]['name'],"gREP")){
           $newname=$products[$i]['name']." Custom Product***";
           $trip_star=true;
         }
         //echo $newname;
           if (strpos($products[$i]['name'],'LP') !== false&&strpos($products[$i]['name'],'SLP') === false){

           $newname=$products[$i]['name'];

           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);

         

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            $newname="ES82LP-CW".$arr2[3];

           }
           if (strpos($products[$i]['name'],'RP') !== false&&strpos($products[$i]['name'],'SLP') === false){

           $newname=$products[$i]['name'];

           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);


            $newname="ES82RP-CW".$arr2[3];

           }
           if (strpos($products[$i]['name'],'GL') !== false&&strpos($products[$i]['name'],'SLP') === false){

           $newname=$products[$i]['name'];

           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);

         

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            $newname="ES82-".$arr2[5].$arr2[6]."GL";

           }
         
       
       }else{
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ES82-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=es29Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
         //$newdesc=$products[$i]['description'];
              if ((strpos($products[$i]['name'],'TG') !== false || strpos($products[$i]['name'],'GL') !== false )&&strpos($products[$i]['name'],'SLP') === false){
            $newdesc=stripslashes(str_replace("TG","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ES82-","",$_SESSION['product_final1'][$l]['val'])));
               //    $array2 = explode('<p>', $array);
                 $qtyNew345=edT2Desc($array[0]);
            $newname=$products[$i]['name'];
             $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);

         

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

           
           $array = explode('<p>', $newdesc);
           if(strpos($newdesc,"depth")){
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-19).'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";
           }else{
             if($arr[4]){
               $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
             }else{	
               $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".(11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
             }
           } 
             //$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-19).'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";
                 $newname= stripslashes(str_replace("ES82-","",$_SESSION['product_final1'][$l]['val']));

           $arr=explode("-", $newname);
                        if(sizeof($arr)>=2){

             $counter=$arr[0];
                           
             $post=$arr[1];
             $arr2 = str_split($post, 1);
                             $newname="ES82-".$counter."-".$arr2[0].$arr2[1].$arr2[2].$arr2[3].$arr2[4]."CW".$arr2[5].$arr2[6].$arr2[7].$arr2[8]."Custom Products";
           }else{

             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);
              if(sizeof($arr2)>=8){
                            $newname="ES82-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]."CW".$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
              }
              else{
                $newname="ES82-".$arr2[0].$arr2[1].$arr2[2]."CW".$arr2[3].$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
                
                }
           }							
   }
         
       }
       if(strpos($products[$i]['name'],'RND') !== false){
       
         $newname=$newname."-"."RND";
       }if(strpos($products[$i]['name'],'adjustable-bracket') !== false){
       
         $newdesc=$newname;
       }
       
       //for check custom  or not
       $custom="";
       //echo $newdesc;
       if (strpos($newdesc,'radiused corners') == false||(strpos($newdesc,'rounded corners') == false)){
         $custom='**';
                     //$doub_star=true;
         
       }
       //echo $newname;
       if((strpos($newdesc,'rounded corners') !== false)||(strpos($newdesc,'radiused corners') !== false)){
         $custom='***';
                     $trip_star=true;
       }else{
         //echo "Please";
         //echo strpos($newname,'CW');
         if(strpos($newname,'"')&&strpos($newname,'CW')){
           $doub_star=true;
         }
         
         
       }
       $glassArray=array(12,18,24,30,36,42,48,54);
       if (strpos($newdesc,'Face Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES82-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.="".$custom;
         }else{
           //if(strlen(str_replace(" ","",$array[0]))>2){
             $newname.="".$custom;
           //}
         }
       }
       if (strpos($newdesc,'Top Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES82-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.="".$custom;
         }else{
           //if(strlen(str_replace(" ","",$array[0]))>2){
             $newname.="".$custom;
           //}
         }
       }
       
     }
   
     else if (strpos($products[$i]['name'],'ES92') !== false){
       
       if($_SESSION['product_final1'][$l]['val']=='ES92'){
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         
         if(strpos($products[$i]['name'],"gLEP")){
           $newname=$products[$i]['name']." Custom Product***";
           $trip_star=true;
         }
         if(strpos($products[$i]['name'],"gREP")){
           $newname=$products[$i]['name']." Custom Product***";
           $trip_star=true;
         }
         //echo $newname;
           if (strpos($products[$i]['name'],'LP') !== false&&strpos($products[$i]['name'],'SLP') === false){

           $newname=$products[$i]['name'];

           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);

         

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           if(strpos($products[$i]['name'],'EXT') !== false)
           {
           //$newname="ES92LP-CW".$arr2[3];	
           }
           else{
           $newname="ES92LP-CW".$arr2[3];	
           }
            

           }
           if (strpos($products[$i]['name'],'RP') !== false&&strpos($products[$i]['name'],'SLP') === false){

           $newname=$products[$i]['name'];

           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);


           
            
           if(strpos($products[$i]['name'],'EXT') !== false)
           {
           // $newname="ES92RP-CW".$arr2[3];	
           }
           else{
            $newname="ES92RP-CW".$arr2[3];
           }
            

           }
           if (strpos($products[$i]['name'],'GL') !== false&&strpos($products[$i]['name'],'SLP') === false){

           $newname=$products[$i]['name'];

           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);

         

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            $newname="ES92-".$arr2[5].$arr2[6]."GL";

           }
         
       
       }else{
         
         
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ES92-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=es29Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
         //$newdesc=$products[$i]['description'];
              if ((strpos($products[$i]['name'],'TG') !== false || strpos($products[$i]['name'],'GL') !== false )&&strpos($products[$i]['name'],'SLP') === false){
            $newdesc=stripslashes(str_replace("TG","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ES92-","",$_SESSION['product_final1'][$l]['val'])));
               //    $array2 = explode('<p>', $array);
                 $qtyNew345=edT2Desc($array[0]);
            $newname=$products[$i]['name'];
             $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);

         

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

           
           $array = explode('<p>', $newdesc);
           if(strpos($newdesc,"depth")){
             
             if(strpos($_SESSION['product_final1'][$l]['val'],'EXT') !== false){
             $width_vall=round(($arr2[4]-19)/2);	
               
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-2, ".$width_vall.'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";	
             }
             else{
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-19).'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";	
             }
             
             
             
             
           }else{
             if($arr[4]){
               $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
             }else{	
               $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".(11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
             }
           } 
             //$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-19).'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";
                 $newname= stripslashes(str_replace("ES92-","",$_SESSION['product_final1'][$l]['val']));

           $arr=explode("-", $newname);
                        if(sizeof($arr)>=2){

             $counter=$arr[0];
                           
             $post=$arr[1];
             $arr2 = str_split($post, 1);
                             $newname="ES92-".$counter."-".$arr2[0].$arr2[1].$arr2[2].$arr2[3].$arr2[4]."CW".$arr2[5].$arr2[6].$arr2[7].$arr2[8]."Custom Products";
           }else{

             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);
              if(sizeof($arr2)>=8){
                            $newname="ES92-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]."CW".$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
              }
              else{
                $newname="ES92-".$arr2[0].$arr2[1].$arr2[2]."CW".$arr2[3].$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
                
                }
           }							
   }
         
         
         //echo'<b style="color:red;">'; print_r($_SESSION['product_final1'][$l]['val']);  echo'</b><br />';
         
         if(strpos($_SESSION['product_final1'][$l]['val'],'EXT') !== false){
           
           //echo'<b style="color:red;">'; print_r($newdesc);  echo'</b><br />';
           
           //$newname=str_replace("world","Peter","Hello world!");
           $newname=str_replace("TG","TG EXT",$newname);
         }
         
         
       }
       if(strpos($products[$i]['name'],'RND') !== false){
       
         $newname=$newname."-"."RND";
       }if(strpos($products[$i]['name'],'adjustable-bracket') !== false){
       
         $newdesc=$newname;
       }
       
       //for check custom  or not
       $custom="";
       //echo $newdesc;
       if (strpos($newdesc,'radiused corners') == false||(strpos($newdesc,'rounded corners') == false)){
         $custom='**';
                     //$doub_star=true;
         
       }
       //echo $newname;
       if((strpos($newdesc,'rounded corners') !== false)||(strpos($newdesc,'radiused corners') !== false)){
         $custom='***';
                     $trip_star=true;
       }else{
         //echo "Please";
         //echo strpos($newname,'CW');
         if(strpos($newname,'"')&&strpos($newname,'CW')){
           $doub_star=true;
         }
         
         
       }
       $glassArray=array(12,18,24,30,36,42,48,54);
       if (strpos($newdesc,'Face Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES92-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.="".$custom;
         }else{
           //if(strlen(str_replace(" ","",$array[0]))>2){
             $newname.="".$custom;
           //}
         }
       }
       if (strpos($newdesc,'Top Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES92-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.="".$custom;
         }else{
           //if(strlen(str_replace(" ","",$array[0]))>2){
             $newname.="".$custom;
           //}
         }
       }
       
       if(strpos($products[$i]['name'],'LYT') !== false){
             
           $newname= stripslashes(str_replace("ES92-","",$_SESSION['product_final1'][$l]['val']));
                             
           $arr=explode("-", $newname);

         if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 
           
           //$array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           $array = explode('<p>', $newdesc);
           $newname= stripslashes(str_replace("ES92-","",$_SESSION['product_final1'][$l]['val']));

           $arr=explode("-", $newname);
            
             
           //echo'<b style="color:red;">'; print_r($_SESSION['product_final1'][$l]['val']);  echo'</b><br />';	
   
           $newname="ES92-" .$newname."";
           $newdesc="" .$newname." LED LIGHT BAR";
           //$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." LYT Custom Products";
           }
           
           //Lightbar TUBE
           
           if(strpos($products[$i]['name'],'TUBE') !== false){
             
           $newname= stripslashes(str_replace("ES92-","",$_SESSION['product_final1'][$l]['val']));
                             
           $arr=explode("-", $newname);

         if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 
           
           //$array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           $array = explode('<p>', $newdesc);
           $newname= stripslashes(str_replace("ES92-","",$_SESSION['product_final1'][$l]['val']));

           $arr=explode("-", $newname);
           
             
           $newname="ES92-" .$newname."";
           $newdesc="" .$newname." WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
           //$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." TUBE Custom Products";
           }
       
     }
     
     else if (strpos($products[$i]['name'],'ES90') !== false){
       //echo'<b style="color:red;">';print_r($_SESSION['product_final1'][$l]['val']); echo'</b><br />';
       //echo'<b style="color:red;">';print_r($_SESSION['product_final1'][$l]['val']);echo'</b><br />';
       
       
       if($_SESSION['product_final1'][$l]['val']=='ES90'){
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         if(strpos($products[$i]['name'],"gLEP")){
           $newname=$products[$i]['name']." Custom Product***";
           $trip_star=true;
         }
         if(strpos($products[$i]['name'],"gREP")){
           $newname=$products[$i]['name']." Custom Product***";
           $trip_star=true;
         }
         //echo $newname;
           if (strpos($products[$i]['name'],'LP') !== false){

           $newname=$products[$i]['name'];
           //$newdesc=$products[$i]['desc'];
           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);

         

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            $newname=$products[$i]['name'];

           }
           if (strpos($products[$i]['name'],'RP') !== false){

           $newname=$products[$i]['name'];

           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);


            $newname=$products[$i]['name'];

           }
           //echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
           if (strpos($products[$i]['name'],'GL') !== false){

           $newname=$products[$i]['name'];

           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);

           
           
           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            //$newname="ES90-".$arr2[5].$arr2[6]."GL ";
            //echo'<b style="color:red;">';print_r($newname);echo'</b><br />';

           }
         
       
       }
       
       else{
         
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         //echo'<b style="color:red;">';print_r($newname);echo'</b><br />';
         
         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
         
           $array = explode('"', stripslashes(str_replace("ES90-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=es29Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
         //$newdesc=$products[$i]['description'];
              if ((strpos($products[$i]['name'],'TG') !== false || strpos($products[$i]['name'],'GL') !== false )){
            $newdesc=stripslashes(str_replace("TG","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ES90-","",$_SESSION['product_final1'][$l]['val'])));
               //    $array2 = explode('<p>', $array);
                 $qtyNew345=edT2Desc($array[0]);
            $newname=$products[$i]['name'];
             $arr=explode(" ", $newname);
                             //echo'<b style="color:red;">'.$counter=$arr[0].'</b><br />';
                              
              $arr2 = str_split($counter, 2);

         
           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

           
           $array = explode('<p>', $newdesc);
           if(strpos($newdesc,"depth")){
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-19).'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";
           }else{
             if($arr[4]){
               $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
             }else{	
               $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".(11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
             }
           } 
           $newdesc=str_replace('/select"','TG',$newdesc);
             //$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-19).'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";
                 $newname= stripslashes(str_replace("ES90-","",$_SESSION['product_final1'][$l]['val']));
           $newname=str_replace("/selectTG","TG",$newname);
           //ES90-8-1/2"/selectTGCustom Products-RND***
           //echo'<b style="color:red;">';print_r($newname);echo'</b><br />';
           $arr=explode("-", $newname);
           //echo'<b style="color:red;">';print_r($arr);echo'</b><br />';
                        if(sizeof($arr)>=2){

             $counter=$arr[0];
                           
             $post=$arr[1];
             $arr2 = str_split($post, 1);
             //echo'<b style="color:red;">';print_r($arr2);echo'</b><br />';
                             $newname="ES90-".$arr[0]."-".$arr[1]."Custom Products";
           }else{

             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);
              if(sizeof($arr2)>=8){
                            $newname="ES90-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]."".$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
              }
              else{
                $newname="ES90-".$arr2[0].$arr2[1].$arr2[2]."".$arr2[3].$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
                
                }
                
           }							
   }
         
       }
       
       if(strpos($products[$i]['name'],'RND') !== false){
       
         $newname=$newname."-"."RND";
       }if(strpos($products[$i]['name'],'adjustable-bracket') !== false){
       
         $newdesc=$newname;
       }
       
       //for check custom  or not
       $custom="";
       //echo $newdesc;
       if (strpos($newdesc,'radiused corners') == false||(strpos($newdesc,'rounded corners') == false)){
         $custom='**';
                     //$doub_star=true;
         
       }
       //echo $newname;
       if((strpos($newdesc,'rounded corners') !== false)||(strpos($newdesc,'radiused corners') !== false)){
         $custom='***';
                     $trip_star=true;
       }else{
         //echo "Please";
         //echo strpos($newname,'CW');
         if(strpos($newname,'"')&&strpos($newname,'CW')){
           $doub_star=true;
         }
         
         
       }
       $glassArray=array(12,18,24,30,36,42,48,54);
       if (strpos($newdesc,'Face Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES90-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.="".$custom;
         }else{
           //if(strlen(str_replace(" ","",$array[0]))>2){
             $newname.="".$custom;
           //}
         }
       }
       if (strpos($newdesc,'Top Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES90-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.="".$custom;
         }else{
           //if(strlen(str_replace(" ","",$array[0]))>2){
             $newname.="".$custom;
           //}
         }
       }
        if(strpos($products[$i]['name'],'LYT') !== false){
             
           $newname= stripslashes(str_replace("ES90-","",$_SESSION['product_final1'][$l]['val']));
                             
           $arr=explode("-", $newname);

         if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 
           
           //$array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           $array = explode('<p>', $newdesc);
           $newname= stripslashes(str_replace("ES90-","",$_SESSION['product_final1'][$l]['val']));

           $arr=explode("-", $newname);
           //echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
           /*if(sizeof($arr)>=1){

             $counter=$arr[0];
                           
             $post=$arr[1];
             $arr2 = str_split($post, 1);
                             $newname="ES90-".$counter."-".$arr2[0].$arr2[1].$arr2[2].$arr2[3].$arr2[4]." LYT";
           }else{

             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);
              if(sizeof($arr2)>=8){
                            $newname="ES90-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]." LYT"; 
              }
              else{
                $newname="ES90-".$arr2[0].$arr2[1].$arr2[2]." LYT"; 
                
                }
           }*/ 
             
           $newname="ES90-" .$newname."";
           $newdesc="" .$newname." LED LIGHT BAR";
           //$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." LYT Custom Products";
           }
           
           //Lightbar TUBE
           
           if(strpos($products[$i]['name'],'TUBE') !== false){
             
           $newname= stripslashes(str_replace("ES90-","",$_SESSION['product_final1'][$l]['val']));
                             
           $arr=explode("-", $newname);

         if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 
           
           //$array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           $array = explode('<p>', $newdesc);
           $newname= stripslashes(str_replace("ES90-","",$_SESSION['product_final1'][$l]['val']));

           $arr=explode("-", $newname);
           //echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
           /*if(sizeof($arr)>=1){

             $counter=$arr[0];
                           
             $post=$arr[1];
             $arr2 = str_split($post, 1);
                             $newname="ES90-".$counter."-".$arr2[0].$arr2[1].$arr2[2].$arr2[3].$arr2[4]." LYT";
           }else{

             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);
              if(sizeof($arr2)>=8){
                            $newname="ES90-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]." LYT"; 
              }
              else{
                $newname="ES90-".$arr2[0].$arr2[1].$arr2[2]." LYT"; 
                
                }
           }*/ 
             
           $newname="ES90-" .$newname." ";
           $newdesc="" .$newname." WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
           //$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." TUBE Custom Products";
           }
       
     }
     else if (strpos($products[$i]['name'],'ES47') !== false){
       //echo'<b style="color:red;">';print_r($_SESSION['product_final1'][$l]['val']); echo'</b><br />';
       //echo'<b style="color:red;">';print_r($_SESSION['product_final1'][$l]['val']);echo'</b><br />';
       
       
       if($_SESSION['product_final1'][$l]['val']=='ES47'){
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         if(strpos($products[$i]['name'],"gLEP")){
           $newname=$products[$i]['name']." Custom Product***";
           $newdesc="<p>".$newdesc."</p><p>Qty-1 and Qty-1</p>";
           $trip_star=true;
         }
         if(strpos($products[$i]['name'],"gREP")){
           $newname=$products[$i]['name']." Custom Product***";
           $newdesc="<p>".$newdesc."</p><p>Qty-1 and Qty-1</p>";
           $trip_star=true;
         }
         //echo $newname;
           if (strpos($products[$i]['name'],'LP') !== false){

           $newname=$products[$i]['name'];
           //$newdesc=$products[$i]['desc'];
           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);

         

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            $newname=$products[$i]['name'];

           }
           if (strpos($products[$i]['name'],'RP') !== false){

           $newname=$products[$i]['name'];

           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);


            $newname=$products[$i]['name'];

           }
           //echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
           if (strpos($products[$i]['name'],'GL') !== false){

           $newname=$products[$i]['name'];

           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);

           
           
           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            //$newname="ES47-".$arr2[5].$arr2[6]."GL ";
            //echo'<b style="color:red;">';print_r($newname);echo'</b><br />';

           }
         
       
       }
       
       else{
         
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         //echo'<b style="color:red;">';print_r($newname);echo'</b><br />';
         
         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
         
           $array = explode('"', stripslashes(str_replace("ES47-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=es29Desc($array[0]);
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
             $newdesc=str_replace('"GL"','"GL',$newdesc);
         //$newdesc=$products[$i]['description'];
              if ((strpos($products[$i]['name'],'TG') !== false || strpos($products[$i]['name'],'GL') !== false )){
            $newdesc=stripslashes(str_replace("TG","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ES47-","",$_SESSION['product_final1'][$l]['val'])));
               //    
         
            $array2 = explode('<p>', $array);
                 $qtyNew345=edT2Desc($array[0]);
            $newname=$products[$i]['name'];
             $arr=explode(" ", $newname);
                             //echo'<b style="color:red;">'.$counter=$arr[0].'</b><br />';
                              
              $arr2 = str_split($counter, 2);

         
           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

           
           $array = explode('<p>', $newdesc);
           if(strpos($newdesc,"depth")){
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-19).'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";
           }else{
             if($arr[4]){
               $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
             }else{	
               $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".(11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
             }
           } 
           $newdesc=str_replace('/select"','TG',$newdesc);
             //$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-19).'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";
                 $newname= stripslashes(str_replace("ES47-","",$_SESSION['product_final1'][$l]['val']));
           $newname=str_replace("/selectTG","TG",$newname);
           
           $newdesc=str_replace('"/"','"TG',$newdesc);
           $newname=str_replace("/TG","TG",$newname);
           
           //ES47-8-1/2"/selectTGCustom Products-RND***
           //echo'<b style="color:red;">';print_r($newname);echo'</b><br />';
           $arr=explode("-", $newname);
           //echo'<b style="color:red;">';print_r($arr);echo'</b><br />';
                        if(sizeof($arr)>=2){

             $counter=$arr[0];
                           
             $post=$arr[1];
             $arr2 = str_split($post, 1);
             //echo'<b style="color:red;">';print_r($arr2);echo'</b><br />';
                             $newname="ES47-".$arr[0]."-".$arr[1]."Custom Products";
           }else{

             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);
              if(sizeof($arr2)>=8){
                            $newname="ES47-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]."".$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
              }
              else{
                $newname="ES47-".$arr2[0].$arr2[1].$arr2[2]."".$arr2[3].$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
                
                }
                
           }							
   }
         
       }
   
       if(strpos($products[$i]['name'],'RND') !== false){
       
         $newname=$newname."-"."RND";
       }if(strpos($products[$i]['name'],'adjustable-bracket') !== false){
       
         $newdesc=$newname;
       }
       
       //for check custom  or not
       $custom="";
       //echo $newdesc;
       if (strpos($newdesc,'radiused corners') == false||(strpos($newdesc,'rounded corners') == false)){
         $custom='**';
                     //$doub_star=true;
         
       }
       //echo $newname;
       if((strpos($newdesc,'rounded corners') !== false)||(strpos($newdesc,'radiused corners') !== false)){
         $custom='***';
                     $trip_star=true;
       }else{
         //echo "Please";
         //echo strpos($newname,'CW');
         if(strpos($newname,'"')&&strpos($newname,'CW')){
           $doub_star=true;
         }
         
         
       }
       $glassArray=array(12,18,24,30,36,42,48,54);
       if (strpos($newdesc,'Face Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES47-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.="".$custom;
         }else{
           //if(strlen(str_replace(" ","",$array[0]))>2){
             $newname.="".$custom;
           //}
         }
       }
       if (strpos($newdesc,'Top Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES47-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.="".$custom;
         }else{
           //if(strlen(str_replace(" ","",$array[0]))>2){
             $newname.="".$custom;
           //}
         }
       }
        if(strpos($products[$i]['name'],'LYT') !== false){
             
           $newname= stripslashes(str_replace("ES47-","",$_SESSION['product_final1'][$l]['val']));
                             
           $arr=explode("-", $newname);

         if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 
           
           //$array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           $array = explode('<p>', $newdesc);
           $newname= stripslashes(str_replace("ES47-","",$_SESSION['product_final1'][$l]['val']));

           $arr=explode("-", $newname);
           //echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
           /*if(sizeof($arr)>=1){

             $counter=$arr[0];
                           
             $post=$arr[1];
             $arr2 = str_split($post, 1);
                             $newname="ES47-".$counter."-".$arr2[0].$arr2[1].$arr2[2].$arr2[3].$arr2[4]." LYT";
           }else{

             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);
              if(sizeof($arr2)>=8){
                            $newname="ES47-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]." LYT"; 
              }
              else{
                $newname="ES47-".$arr2[0].$arr2[1].$arr2[2]." LYT"; 
                
                }
           }*/ 
             
           $newname="ES47-" .$newname."";
           $newdesc="" .$newname." LED LIGHT BAR";
           //$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." LYT Custom Products";
           }
           
           //Lightbar TUBE
           
           if(strpos($products[$i]['name'],'TUBE') !== false){
             
           $newname= stripslashes(str_replace("ES47-","",$_SESSION['product_final1'][$l]['val']));
                             
           $arr=explode("-", $newname);

         if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 
           
           //$array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           $array = explode('<p>', $newdesc);
           $newname= stripslashes(str_replace("ES47-","",$_SESSION['product_final1'][$l]['val']));

           $arr=explode("-", $newname);
           //echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
           /*if(sizeof($arr)>=1){

             $counter=$arr[0];
                           
             $post=$arr[1];
             $arr2 = str_split($post, 1);
                             $newname="ES47-".$counter."-".$arr2[0].$arr2[1].$arr2[2].$arr2[3].$arr2[4]." LYT";
           }else{

             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);
              if(sizeof($arr2)>=8){
                            $newname="ES47-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]." LYT"; 
              }
              else{
                $newname="ES47-".$arr2[0].$arr2[1].$arr2[2]." LYT"; 
                
                }
           }*/ 
             
           $newname="ES47-" .$newname."";
           $newdesc="" .$newname." WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
           //$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." TUBE Custom Products";
           }
       
     }
     else if (strpos($products[$i]['name'],'MS') !== false){
       if($_SESSION['product_final1'][$l]['val']=='MS'){
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
           
           
           
           
         
       
       }else{
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
            $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
          $tishu="Glass Kit Contains:";
                       $newdesc=$products[$i]['description'];
         $arr=explode(" ", $newdesc);
         $arr2=explode(" ", $newname);
                         $qtyNew34=MS2($tis,$arr2[3]);    
         $newname="Mid Shelve Glass Depth".$tis." Face Length ".$arr2[3];
         $newdesc="<p>".$newname."</p><p>".$tishu."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
         
       }
       if(strpos($products[$i]['name'],'RND') !== false){
       
         $newname=$newname."-"."RND";
         //$newdesc="<p>".$newdesc."</p><p>".$tishu."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
       }if(strpos($products[$i]['name'],'GLASS') !== false){
            $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
          $tishu="Glass Kit Contains:";
                       $newdesc=$products[$i]['description'];
         $arr=explode(" ", $newdesc);
         $arr2=explode(" ", $newname);
                         $qtyNew34=MS2($tis,$arr2[3]);    
         $newname="Mid Shelve Glass Depth".$tis." Face Length ".$arr2[3];
         $newdesc="<p>".$newname."</p><p>".$tishu."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
         
       }
       if(strpos($products[$i]['name'],'CP') !== false){
       $newname=stripslashes($_SESSION['product_final1'][$l]['val']);

           
                       $newdesc=$products[$i]['description'];
         $arr=explode(" ", $newdesc);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);
           if($arr[1]=='CP'){
           $newname="Center Post";
           }
         $newname="Mid Shelve ".$newname." ".$arr[3];
       }if(strpos($products[$i]['name'],'RP') !== false){
            $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
          
                       $newdesc=$products[$i]['description'];
         $arr=explode(" ", $newdesc);
         $arr2=explode(" ", $newname);
         $tis=MS($arr2[2]);
         
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);
           
         $newname="Mid Shelve ".$newname." ".$arr[3];
         $newdesc="Mid Shelve ".$newname." ";
       }if(strpos($products[$i]['name'],'LP') !== false){
            $newname=stripslashes($_SESSION['product_final1'][$l]['val']);

           
                       $newdesc=$products[$i]['description'];
         $arr=explode(" ", $newdesc);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);
           
         $newname="Mid Shelve ".$newname." ".$arr[3];
         $newdesc="Mid Shelve ".$newname." ";
       }
       //for check custom  or not
       $custom="";
       if (strpos($newdesc,'Square Corners') !== false){
         $custom='**';
                                             $doub_star=true;
       }
       if((strpos($newdesc,'Radiused Corners') !== false)||(strpos($newdesc,'Rounded Corners') !== false)){
         $custom='***';
                                             $trip_star=true;
       }
       $glassArray=array(12,18,24,30,36,42,48,54);
       if (strpos($newdesc,'Face Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES82-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.=" Custom Products".$custom;
         }
       }
       if (strpos($newdesc,'Top Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES82-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.=" Custom Products".$custom;
         }
       }
       if (strpos($newdesc,'Face Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES90-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.=" Custom Products".$custom;
         }
       }
       if (strpos($newdesc,'Top Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES90-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.=" Custom Products".$custom;
         }
       }
       
     }
     
     
     else if (strpos($products[$i]['name'],'ES53') !== false){
     
     
       //echo'<b style="color:red;">'; print_r($_SESSION['product_final1'][$l]['val']); echo'</b> <br />';
       if($_SESSION['product_final1'][$l]['val']=='ES53'){
       
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         if(strpos($newname,"LEP")!==false || strpos($newname,"REP")!==false){
           $newname.="Custom Product**";
         }
       
       }else{
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         $newdesc=$products[$i]['description'];
         
           $array = explode('"', stripslashes(str_replace("ES53-","",$_SESSION['product_final1'][$l]['val'])));
       //	echo'<b style="color:red;">'; print_r($array); echo'</b> <br />';
             $qtyNew34=es53Desc($array[0]);
           
           $array = explode('<p>', $newdesc);
            
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
       }
       //for check custom or not
       $custom="";
       if (strpos($newdesc,'Rounded Glass') !== false){
         $custom='***';
                     $trip_star=true;
       }else{
         $custom='**';
                     //$doub_star=true;
       }
       $glassArray=array(12,18,24,30,36,42,48,54);
       if (strpos($newname,'GL') !== false){
         $array = explode('"', stripslashes(str_replace("ES53-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.=" Custom Products".$custom;
           if($custom=="**"){
             $doub_star=true;
           }
         }else{
           //if(strlen(str_replace(" ","",$array[0]))>2){
             $newname.=" Custom Products".$custom;
             if($custom=="**"){
               $doub_star=true;
             }
           //}
         }
       }
       
       
       
     }else
     if (strpos($products[$i]['name'],'ES29') !== false){
       
     
       
       if($_SESSION['product_final1'][$l]['val']=='ES29'){
         $newname=$products[$i]['name'];
         $newdesc=$products[$i]['description'];
         
         if(strpos($newname,"gLEP")!==false || strpos($newname,"gREP")!==false){
           $newname.=" Custom Product***";
           $trip_star=true;
         }
         
         if (strpos($products[$i]['name'],'LP') !== false&&strpos($products[$i]['name'],'SLP') === false){

           $newname=$products[$i]['name'];
           
           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);
             if($arr2[3]!=""){
               $temp=$arr2[3];
             }
               
         

           //echo $counter;

           //strstr(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']),'-');

           //$post =stripslashes(current(explode("-", str_replace("ED20-","",$_SESSION['product_final1'][$l]['val']))));

           

            $newname="ES29LP-CW".$arr2[3];
           
           }
           if (strpos($products[$i]['name'],'RP') !== false&&strpos($products[$i]['name'],'SLP') === false){

           $newname=$products[$i]['name'];

           
           

           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);
             if($arr2[3]!=""){
               $temp=$arr2[3];
             }
            $newname="ES29RP-CW".$arr2[3];

           }
       }else{
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']);
         $lnt=explode("-",$newname);
             
         $newdesc=stripslashes(str_replace("GL","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ES29-","",$_SESSION['product_final1'][$l]['val'])));
           
             $qtyNew34=es29Desc($array[0]);
           $array = explode('<p>', $newdesc);
           
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
          if ((strpos($products[$i]['name'],'TG') !== false || strpos($products[$i]['name'],'GL') !== false)  && strpos($products[$i]['name'],'SLP') === false){
          $newdesc=stripslashes(str_replace("TG","",$_SESSION['product_final1'][$l]['val']).strstr($products[$i]['description'],'"'));
           $array = explode('"', stripslashes(str_replace("ES29-","",$_SESSION['product_final1'][$l]['val'])));
           
             
           $newname=$products[$i]['name'];
           $arr=explode(" ", $newname);
                             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 2);

         
           $array = explode('<p>', $newdesc);
             
           if(strpos($newname,"TG")){
             $qtyNew34=es29TDesc($array[0],$lnt,"TG",$arr2[4]);
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34.' Top Glass'."</p><p>".$array[3]."</p>";
           }else{
             $qtyNew34=es29TDesc($array[0],$lnt,"FG",0);
             $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34.' Face Glass'."</p><p>".$array[3]."</p>";
             
           }
             
                           
                 $newname= stripslashes(str_replace("ES29-","",$_SESSION['product_final1'][$l]['val']));
                            
           $arr=explode("-", $newname);
           
         if(sizeof($arr)>=2){

             $counter=$arr[0];
                           
             $post=$arr[1];
             $arr2 = str_split($post, 1);
                             $newname="ES29-".$counter."-".$arr2[0].$arr2[1].$arr2[2].$arr2[3].$arr2[4]."CW".$arr2[5].$arr2[6].$arr2[7].$arr2[8];
             
           }else{

             $counter=$arr[0];
                              
              $arr2 = str_split($counter, 1);
              if(sizeof($arr2)>=8){
                            $newname="ES29-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]."CW".$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
              }
              else{
                $newname="ES29-".$arr2[0].$arr2[1].$arr2[2]."CW".$arr2[3].$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
                
                }
           }}
       if(strpos($products[$i]['name'],'TOPLYT') !== false){
       
       $newname=$newname." Top Location";
       }	
        if(strpos($products[$i]['name'],'BKLYT') !== false){
       
       $newname=$newname." Back Location";
       }if(strpos($products[$i]['name'],'adjustable-bracket') !== false){
       
         $newdesc=$newname;
       }
       }
       //for check custom  or not
       $custom="";
       
       if((strpos($newdesc,'radiused corners') !== false)||(strpos($newdesc,'rounded corners') !== false)){
         $custom='***';
                                             $trip_star=true;
       }else{
         if (strpos($newdesc,'polished') !== false){
           $custom='**';
                         $doub_star=true;
         }
       }
       $glassArray=array(12,18,24,30,36,42,48,54);
       if (strpos($newdesc,'Face Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES29-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.=" Custom Products".$custom;
         }else{
           //if(strlen(str_replace(" ","",$array[0]))>2){
             $newname.=" Custom Products".$custom;
           //}
         }
       }
       if (strpos($newdesc,'Top Glass') !== false){
         $array = explode('"', stripslashes(str_replace("ES29-","",$_SESSION['product_final1'][$l]['val'])));
         if(!in_array($array[0],$glassArray)){
           $newname.=" Custom Products".$custom;
         }else{
           $newname.=" Custom Products".$custom;
           
         }
       }
       
       
       
     }else{
     /*creating custom product name */
     $newname="";
     $newdesc="";
     $qtyNew="";
     $qtyNew1="";
     if (strpos($products[$i]['name'],'Glass') !== false){
       $newname=strstr($products[$i]['name'],'Glass');
       $newname=stripslashes(($_SESSION['product_final1'][$l]['val'].$newname));
       if (strpos($products[$i]['name'],'ROSTEDGL') !== false){
         $newname=$newname."-BP";
         
       }
       
       //making description custom
       if(strpos($products[$i]['name'],'EP5') !== false){
         $array = explode('"', stripslashes(str_replace("EP5-","",$_SESSION['product_final1'][$l]['val'])));
         $qtyNew=ep5Desc($array[0],$array[1]);
         
         
       }if(strpos($products[$i]['name'],'Ring-EP5') !== false){
         $array = explode('"', stripslashes(str_replace("Ring-EP5-","",$_SESSION['product_final1'][$l]['val'])));
         $qtyNew=ringep5Desc($array[0],$array[1]);
         
         
       }if(strpos($products[$i]['name'],'EP22') !== false){
         $array = explode('"', stripslashes(str_replace("EP22-","",$_SESSION['product_final1'][$l]['val'])));
         $qtyNew=ep11Desc($array[0],$array[1]);
         
       }if(strpos($products[$i]['name'],'EP21') !== false){
         $array = explode('"', stripslashes(str_replace("EP21-","",$_SESSION['product_final1'][$l]['val'])));
         $qtyNew=ep11Desc($array[0],$array[1]);
         
       }if(strpos($products[$i]['name'],'EP36') !== false){
         $array = explode('"', stripslashes(str_replace("EP36-","",$_SESSION['product_final1'][$l]['val'])));
         $qtyNew=es31Desc($array[0],$array[1]);
         
       }
       if(strpos($products[$i]['name'],'ES31') !== false){
         $array = explode('"', stripslashes(str_replace("ES31-","",$_SESSION['product_final1'][$l]['val'])));
         $qtyNew=es31Desc($array[0],$array[1]."+31");
       }if(strpos($products[$i]['name'],'ES40') !== false){
         $array = explode('"', stripslashes(str_replace("ES40-","",$_SESSION['product_final1'][$l]['val'])));
         $qtyNew=es31Desc($array[0],$array[1]);
       }if(strpos($products[$i]['name'],'ES67') !== false){
         $array = explode('"', stripslashes(str_replace("ES67-","",$_SESSION['product_final1'][$l]['val'])));
         $qtyNew=es67Desc($array[0],$array[1]);
       }if(strpos($products[$i]['name'],'ES73') !== false){
         $array = explode('"', stripslashes(str_replace("ES73-","",$_SESSION['product_final1'][$l]['val'])));
         $qtyNew=es67Desc($array[0],$array[1]."+73");
       }
       
       if(strpos($products[$i]['name'],'EP15') !== false){
         $array = explode('"', stripslashes(str_replace("EP15-","",$_SESSION['product_final1'][$l]['val'])));
         $qtyNew=ep15Desc($array[0],$array[1]);
       }
       
       if(strpos($products[$i]['name'],'EP11') !== false){
         $array = explode('"', stripslashes(str_replace("EP11","",$_SESSION['product_final1'][$l]['val'])));
         //print_r($array);
         $qtyNew1=ep11Desc($array[0],$array[1]);
       
         
       }
       
       if(strpos($products[$i]['name'],'EP12') !== false){
         $array = explode('"', stripslashes(str_replace("EP12","",$_SESSION['product_final1'][$l]['val'])));
         //print_r($array);
         $qtyNew1=ep11Desc($array[0],$array[1]);
         
       }
       
       $newdesc=strstr($products[$i]['description'],'Glass')." ";
       $newdesc=stripslashes(($_SESSION['product_final1'][$l]['val'].$newdesc));
       if($qtyNew!=""){
         $array = explode('<p>', $newdesc);
         //print_r($array);
         $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew."</p><p>".$array[8]."</p>";
       }
       if($qtyNew1!=""){
         $array = explode('<p>', $newdesc);
         //print_r($array);
         $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew1."</p><p>".$array[4]."</p>";
       }
       
     }else if(strpos($products[$i]['name'],'FLANGE')== true){
       $newname=$products[$i]['name'];
       $newdesc=$products[$i]['description'];
     }
     else{
       //here product name
         
       $result = array_unique($_SESSION['product_final1']);
       
     
     
       if((strpos($products[$i]['name'],'EXT Right End') !== false)){
				
				if((strpos($products[$i]['name'],'EXT Right End Panel') !== false)){
				$newname=strstr($products[$i]['name'],' ');	
				
				if((strpos($products[$i]['name'],'EP21') !== false)&& (isset($rightendpanelval_ep21))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$rightendpanelval_ep21.' EXT Right End Panel';	
				}
				elseif((strpos($products[$i]['name'],'EP11') !== false)&& (isset($rightendpanelval_ep11))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$rightendpanelval_ep11.' EXT Right End Panel';	
				}
				else{
					$newname=$products[$i]['name'];
				}
					
					
				
				
				
				$newname=stripslashes($newname);
				
				
				if((strpos($products[$i]['name'],'EP21') !== false)&& (isset($rightendpanelval_ep21))){
				
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$rightendpanelval_ep21.' EXT Right End Panel';
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';
					
				}
				elseif((strpos($products[$i]['name'],'EP11') !== false)&& (isset($rightendpanelval_ep11)))
				{
				
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$rightendpanelval_ep11.' EXT Right End Panel';
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';
					
				}
				else{
					$newdesc=$products[$i]['description'];
					
				}
				
				
				
					
				}
				else{
				$newname=strstr($products[$i]['name'],' ');	
				
				
				if((strpos($products[$i]['name'],'EP22') !== false)&& (isset($rightendpanelval_ep22))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$rightendpanelval_ep22.' EXT Right End';	
				}
				elseif((strpos($products[$i]['name'],'EP12') !== false)&& (isset($rightendpanelval_ep12))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$rightendpanelval_ep12.' EXT Right End';	
				}
				elseif((strpos($products[$i]['name'],'EP36') !== false)&& (isset($rightendpanelval_ep36))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$rightendpanelval_ep36.' EXT Right End';	
				}
				elseif((strpos($products[$i]['name'],'ES31') !== false)&& (isset($rightendpanelval_es31))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$rightendpanelval_es31.' EXT Right End';	
				}
				else{
					$newname=$products[$i]['name'];
				}
				
				
				
				
				$newname=stripslashes($newname);
				
				
				if((strpos($products[$i]['name'],'EP12') !== false)&& (isset($rightendpanelval_ep12))){
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$rightendpanelval_ep12.' EXT Right End';	
				
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';
				
				}
				elseif((strpos($products[$i]['name'],'EP22') !== false)&& (isset($rightendpanelval_ep22))){
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$rightendpanelval_ep22.' EXT Right End';	
				
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';
				
				}
				elseif((strpos($products[$i]['name'],'EP36') !== false)&& (isset($rightendpanelval_ep36))){
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$rightendpanelval_ep36.' EXT Right End';	
				
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';
				
				}
				elseif((strpos($products[$i]['name'],'ES31') !== false)&& (isset($rightendpanelval_es31))){
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$rightendpanelval_es31.' EXT Right End';	
				
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';
					
				}
				else
				{
				$newdesc=$products[$i]['description'];
				}
				
				
				
					
				}
				
				
				//echo'<b style="color:red">';print_r($jwehfew);echo'<br />';
				}
				else if((strpos($products[$i]['name'],'EXT Left End') !== false)){
				
				if((strpos($products[$i]['name'],'EXT Left End Panel') !== false)){
				$newname=strstr($products[$i]['name'],' ');

				if((strpos($products[$i]['name'],'EP21') !== false)&& (isset($leftendpanelval_ep21))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$leftendpanelval_ep21.' EXT Left End Panel';
				}
				elseif((strpos($products[$i]['name'],'EP11') !== false)&& (isset($leftendpanelval_ep11))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$leftendpanelval_ep11.' EXT Left End Panel';	
				}				
				else{
					$newname=$products[$i]['name'];
				}
				
				
				$newname=stripslashes($newname);
				
				if((strpos($products[$i]['name'],'EP21') !== false)&& (isset($leftendpanelval_ep21))){
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$leftendpanelval_ep21.' EXT Left End Panel';	
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';				
				}
				elseif((strpos($products[$i]['name'],'EP11') !== false)&& (isset($leftendpanelval_ep11))){
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$leftendpanelval_ep11.' EXT Left End Panel';
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';	
				}
				
				
				else{
					$newdesc=$products[$i]['description'];
					
				}



				
				}
				else{
				$newname=strstr($products[$i]['name'],' ');

				
				if((strpos($products[$i]['name'],'EP12') !== false)&& (isset($leftendpanelval_ep12))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$leftendpanelval_ep12.' EXT Left End';	
				}
				elseif((strpos($products[$i]['name'],'EP22') !== false)&& (isset($leftendpanelval_ep22))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$leftendpanelval_ep22.' EXT Left End';	
				}
				elseif((strpos($products[$i]['name'],'EP36') !== false)&& (isset($leftendpanelval_ep36))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$leftendpanelval_ep36.' EXT Left End';	
				}
				elseif((strpos($products[$i]['name'],'ES31') !== false)&& (isset($rightendpanelval_es31))){
				$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$leftendpanelval_es31.' EXT Left End';		
				}
				else{
				$newname=$products[$i]['name'];
				}
				
				
				
				
				
				$newname=stripslashes($newname);
				
				if((strpos($products[$i]['name'],'EP12') !== false)&& (isset($leftendpanelval_ep12))){
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$leftendpanelval_ep12.' EXT Left End';
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';
				}
				elseif((strpos($products[$i]['name'],'EP22') !== false)&& (isset($leftendpanelval_ep22))){
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$leftendpanelval_ep22.' EXT Left End';	
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';
				}
				elseif((strpos($products[$i]['name'],'EP36') !== false)&& (isset($leftendpanelval_ep36))){
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$leftendpanelval_ep36.' EXT Left End';
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';
				}
				elseif((strpos($products[$i]['name'],'ES31') !== false)&& (isset($rightendpanelval_es31))){
				$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$leftendpanelval_es31.' EXT Left End';
				$newdesc=stripslashes($newdesc);
				$newdesc.='<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';
				}
				else{
				$newdesc=$products[$i]['description'];	
				}
				
				
					
				}
				
				
				
				//echo'<b style="color:red">';print_r($jwehfew);echo'<br />';
				}
				
				else{
					$newname=strstr($products[$i]['name'],' ');
					$sdss=stripslashes($_SESSION['product_final1'][$l]['val']);
					
					$newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
					//$newname=''.$sdss.''.$newname.'';
					//echo'<b style="color:red">';print_r($newname);echo'<br />';
					$newdesc=strstr($products[$i]['description'],' ');
					$newdesc=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newdesc);
					//echo'<b style="color:red">';print_r($newname);echo'<br />';
				}
         
       
     
       
       
     }
     }
       
     
     //echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
     if ((strpos($products[$i]['name'],'EP15 Glass Bracket Clip') !== false)){
       $newname='EP15 Glass Bracket Clip';
       $newdesc='EP15 Glass Bracket Clip';
     }
     
     
     if ((strpos($products[$i]['name'],'EP15 Glass Bracket For Left Post Brushed Stainless Steel') !== false)){
       $newname='EP15 Glass Bracket';
       $newdesc=$products[$i]['description'];
       $newdesc=''.$newdesc.'<br />
       <span>For Left Post</span>';
     }
     
     if ((strpos($products[$i]['name'],'EP15 Glass Bracket For Right Post Brushed Stainless Steel') !== false)){
       $newname='EP15 Glass Bracket';
       $newdesc=$products[$i]['description'];
       $newdesc=''.$newdesc.'<br />
       <span>For Right Post</span>';
       
     }
     
     if ((strpos($products[$i]['name'],'EP15 Glass Bracket For Left Post Powder Coated Black') !== false)){
       $newname='EP15 Glass Bracket';
       $newdesc=$products[$i]['description'];
       $newdesc=''.$newdesc.'<br />
       <span>For Left Post</span>';
     }
     
     if ((strpos($products[$i]['name'],'EP15 Glass Bracket For Right Post Powder Coated Black') !== false)){
       $newname='EP15 Glass Bracket';
       $newdesc=$products[$i]['description'];
       $newdesc=''.$newdesc.'<br />
       <span>For Right Post</span>';
     }
     
     
     if ((strpos($products[$i]['name'],'EP5') !== false)){
     /*end*/
     
     
     if ((strpos($products[$i]['name'],'EP5-12 End Post') !== false)||(strpos($products[$i]['name'],'EP5-18 End Post') !== false)||(strpos($products[$i]['name'],'EP5-22 End Post') !== false)||(strpos($products[$i]['name'],'EP5-26 End Post') !== false)){
         
         //echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
              $array = explode('"', stripslashes(str_replace("EP15-","",$_SESSION['product_final1'][$l]['val'])));
         //echo'<b style="color:red;">';print_r($array);echo'</b><br />';
         $finis=explode("End Post",$products[$i]['name']);
         //echo'<b style="color:red;">';print_r($finis);echo'</b><br />';
         $newname='EP5-'.$array[0].'" End Post '.$finis[1].'';
         $decfinis=explode("End Post",$products[$i]['description']);
         //echo'<b style="color:red;">';print_r($decfinis);echo'</b><br />';
         //$newdesc=$products[$i]['description'];
         $newdesc='EP5-'.$array[0].'" End Post '.$decfinis[1].'';
         
         $newname=str_replace("EP5-Ring-EP5","Ring-EP5",$newname);
           $newdesc=str_replace("EP5-Ring-EP5","Ring-EP5",$newdesc);
         
         $newname=str_replace("EP5-EP5","EP5",$newname);
           $newdesc=str_replace("EP5-EP5","EP5",$newdesc);
     }
     }
   
     //echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
     if ((strpos($products[$i]['name'],'ROSTEDGL') !== false)){
     
     if(strpos($products[$i]['name'],'EP5') !== false){
         $newname="EP5-Frosted Glass**";
         $newdesc="EP5-Frosted Glass";
         $frostedrad=true;
         $frostedsqu=true;
     
       }
       if(strpos($products[$i]['name'],'EP36') !== false){
         $newname="EP36-Frosted Glass**";
         $newdesc="EP36-Frosted Glass";
         $frostedrad=true;
         $frostedsqu=true;
     
       }
       if(strpos($products[$i]['name'],'EP15') !== false){
         $newname="EP15-Frosted Glass**";
         $newdesc="EP15-Frosted Glass";
         $frostedrad=true;
         $frostedsqu=true;
     
       }
     }
     if(strpos($products[$i]['name'],'MAILBOX') !== false){
         $newname=$newname;	
         $newdesc=$newname;
           //echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
     }
       
     
     
     
     if ((strpos($products[$i]['name'],'Center Post Brushed Stainless Steel') !== false)){
     
     if(strpos($products[$i]['name'],'EP11') !== false){
         $newname="Center Post Brushed Stainless Steel";
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
         $newdesc="Center Post Brushed Stainless Steel";
         $newdesc=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newdesc);
     
       }
       if(strpos($products[$i]['name'],'EP21') !== false){
         $newname="EP21 Center Post Brushed Stainless Steel";
         $newdesc="EP21 Center Post Brushed Stainless Steel";
     
       }
     }if ((strpos($products[$i]['name'],'Center Post Powder Coated Black') !== false)){
     
     if(strpos($products[$i]['name'],'EP11') !== false){
         $newname="Center Post Powder Coated Black";
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
         $newdesc="Center Post Powder Coated Black";
         $newdesc=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newdesc);
     
       }if(strpos($products[$i]['name'],'EP21') !== false){
         $newname="EP21 Center Post Powder Coated Black";
         $newdesc="EP21 Center Post Powder Coated Black";
     
       }
     }if ((strpos($products[$i]['name'],'Center Post Brushed Aluminum') !== false)){
     
     if(strpos($products[$i]['name'],'EP11') !== false){
         $newname="Center Post Brushed Aluminum";
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
         $newdesc="Center Post Brushed Aluminum";
         $newdesc=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newdesc);
     
       }if(strpos($products[$i]['name'],'EP21') !== false){
         $newname="EP21  Center Post Brushed Aluminum";
         $newdesc="EP21  Center Post Brushed Aluminum";
     
       }
     }
       
     //corner post
       //echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
     if ((strpos($products[$i]['name'],'Corner Post Brushed Stainless Steel') !== false)){
     if(strpos($products[$i]['name'],'EP15') !== false){
       
         $newname="".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
         $newdesc="".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
         $newdesc=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newdesc);
         
         
     
       }
       
       if(strpos($products[$i]['name'],'EP11') !== false){
         $newname="".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
         $newdesc="".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
         $newdesc=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newdesc);
     
       }

     if(strpos($products[$i]['name'],'EP12') !== false){
         $newname="".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
         $newdesc="".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
         $newdesc=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newdesc);
     
       }	
     if(strpos($products[$i]['name'],'EP21') !== false){
         $newname="EP21-".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
         
         $newdesc=$products[$i]['description'];
         $newdesc="EP21-".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
         
         //$newdesc=str_replace("Corner Post","".$post_type." Corner ".$post_degree." Post",$newdesc);
       }
     if(strpos($products[$i]['name'],'EP22') !== false){
         $newname="EP22-".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
         $newdesc="EP22-".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
     
       }
     if(strpos($products[$i]['name'],'EP36') !== false){
         $newname="EP36-".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
         $newdesc="EP36-".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel
         <p>Includes: Post, Flange, and Bracketry     </p>
         ";
     
       }
     if(strpos($products[$i]['name'],'ES31') !== false){
         $newname="ES31-".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel";
         $newdesc="ES31-".$post_type." Corner ".$post_degree." Post Brushed Stainless Steel
         <p>Includes: Post, Flange, and Bracketry     </p>
         ";
     
       }						
       
     }
     
     
     if ((strpos($products[$i]['name'],'Corner Post Powder Coated Black') !== false)){
     if(strpos($products[$i]['name'],'EP15') !== false){
         $newname="".$post_type." Corner ".$post_degree." Post Powder Coated Black";
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
         $newdesc="".$post_type." Corner ".$post_degree." Post Powder Coated Black";
         $newdesc=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newdesc);
     
       }
       
       if(strpos($products[$i]['name'],'EP11') !== false){
         $newname="".$post_type." Corner ".$post_degree." Post Powder Coated Black";
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
         $newdesc="".$post_type." Corner ".$post_degree." Post Powder Coated Black";
         $newdesc=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newdesc);
     
       }

     if(strpos($products[$i]['name'],'EP12') !== false){
         $newname="".$post_type." Corner ".$post_degree." Post Powder Coated Black";
         $newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
         $newdesc="".$post_type." Corner ".$post_degree." Post Powder Coated Black";
         $newdesc=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newdesc);
     
       }	
     if(strpos($products[$i]['name'],'EP21') !== false){
         $newname="EP21-".$post_type." Corner ".$post_degree." Post Powder Coated Black";
         $newdesc="EP21-".$post_type." Corner ".$post_degree." Post Powder Coated Black";
     
       }
     if(strpos($products[$i]['name'],'EP22') !== false){
         $newname="EP22-".$post_type." Corner ".$post_degree." Post Powder Coated Black";
         $newdesc="EP22-".$post_type." Corner ".$post_degree." Post Powder Coated Black";
     
       }
     if(strpos($products[$i]['name'],'EP36') !== false){
         $newname="EP36-".$post_type." Corner ".$post_degree." Post Powder Coated Black";
         $newdesc="EP36-".$post_type." Corner ".$post_degree." Post Powder Coated Black";
     
       }
     if(strpos($products[$i]['name'],'ES31') !== false){
         $newname="ES31-".$post_type." Corner ".$post_degree." Post Powder Coated Black";
         $newdesc="ES31-".$post_type." Corner ".$post_degree." Post Powder Coated Black
         <p>Includes: Post, Flange, and Bracketry     </p>
         ";
     
       }						
       
     }
     
     if ((strpos($products[$i]['name'],'Right Post Brushed Stainless Steel') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
       //$newname=str_replace("world","Peter","Hello world!");
       //$newname=str_replace("EP36-Select EP36 Right Post Brushed Stainless Steel Right Post Brushed Stainless Steel","EP36 Right Post Brushed Stainless Steel",$newname);
       $newname="EP36 Right Post Brushed Stainless Steel";
       $newdesc="EP36 Right Post Brushed Stainless Steel
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     if ((strpos($products[$i]['name'],'Left Post Brushed Stainless Steel') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
       
       $newname="EP36 Left Post Brushed Stainless Steel";
       $newdesc="EP36 Left Post Brushed Stainless Steel
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     if ((strpos($products[$i]['name'],'Center Post Brushed Stainless Steel') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
       
       $newname="EP36 Center Post Brushed Stainless Steel";
       $newdesc="EP36 Center Post Brushed Stainless Steel
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     
     if ((strpos($products[$i]['name'],'Right Post Powder Coated Black') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
       
       $newname="EP36 Right Post Powder Coated Black";
       $newdesc="EP36 Right Post Powder Coated Black
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     if ((strpos($products[$i]['name'],'Left Post Powder Coated Black') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
       
       $newname="EP36 Left Post Powder Coated Black";
       $newdesc="EP36 Left Post Powder Coated Black
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     if ((strpos($products[$i]['name'],'Center Post Powder Coated Black') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
       
       $newname="EP36 Center Powder Coated Black";
       $newdesc="EP36 Center Powder Coated Black
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     
     if ((strpos($products[$i]['name'],'Inner Corner 90 Degree Post Brushed Stainless Steel') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
         
         $newname="EP36 Inner Corner 90 Degree Post Brushed Stainless Steel";
       $newdesc="EP36 Inner Corner 90 Degree Post Brushed Stainless Steel
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     
     if ((strpos($products[$i]['name'],'Inner Corner 135 Degree Post Brushed Stainless Steel') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
         
         $newname="EP36 Inner Corner 135 Degree Post Brushed Stainless Steel";
       $newdesc="EP36 Inner Corner 135 Degree Post Brushed Stainless Steel
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     if ((strpos($products[$i]['name'],'Outer Corner 90 Degree Post Brushed Stainless Steel') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
         
         $newname="EP36 Outer Corner 90 Degree Post Brushed Stainless Steel";
       $newdesc="EP36 Outer Corner 90 Degree Post Brushed Stainless Steel
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     if ((strpos($products[$i]['name'],'Outer Corner 135 Degree Post Brushed Stainless Steel') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
         
         $newname="EP36 Outer Corner 135 Degree Post Brushed Stainless Steel";
       $newdesc="EP36 Outer Corner 135 Degree Post Brushed Stainless Steel
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     
     if ((strpos($products[$i]['name'],'Inner Corner 90 Degree Post Powder Coated Black') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
         
         $newname="EP36 Inner Corner 90 Degree Post Powder Coated Black";
       $newdesc="EP36 Inner Corner 90 Degree Post Powder Coated Black
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     
     if ((strpos($products[$i]['name'],'Inner Corner 135 Degree Post Powder Coated Black') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
         
         $newname="EP36 Inner Corner 135 Degree Post Powder Coated Black";
       $newdesc="EP36 Inner Corner 135 Degree Post Powder Coated Black
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     if ((strpos($products[$i]['name'],'Outer Corner 90 Degree Post Powder Coated Black') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
         
         $newname="EP36 Outer Corner 90 Degree Post Powder Coated Black";
       $newdesc="EP36 Outer Corner 90 Degree Post Powder Coated Black
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     if ((strpos($products[$i]['name'],'Outer Corner 135 Degree Post Powder Coated Black') !== false)){
       if(strpos($products[$i]['name'],'EP36') !== false){
         
         $newname="EP36 Outer Corner 135 Degree Post Powder Coated Black";
       $newdesc="EP36 Outer Corner 135 Degree Post Powder Coated Black
       <p>Includes: Post, Flange, and Bracketry     </p>
       ";
       }
       
     }
     
     
     /*
     //LYT CORNER
     if(strpos($products[$i]['name'],'LYT CORNER') !== false){
       echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
     }
     */
         if(strpos($products[$i]['name'],'LYT CORNER') !== false){
             
           if(strpos($products[$i]['name'],'EP11') !== false||strpos($products[$i]['name'],'EP12') !== false||strpos($products[$i]['name'],'EP21') !== false||strpos($products[$i]['name'],'EP22') !== false){
           $newname= str_replace("LYT","LIGHT BAR",$newname);
           $newdesc="" .$newname." WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
           }
           
           else if(strpos($products[$i]['name'],'B950') !== false){
             $newname= str_replace("LYT","LIGHT BAR CORNER",$newname);
           $newdesc="" .$newname." LED LIGHT BAR WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
           }
           
           }
     

       
    if ((strpos($products[$i]['name'],'Left End Panel') !== false)||(strpos($products[$i]['name'],' Right End Panel') !== false)||(strpos($products[$i]['name'],' Right End') !== false)||(strpos($products[$i]['name'],' Left End') !== false)){
					if(strpos($products[$i]['name'],'EP36') !== false){
						if(strpos($products[$i]['name'],'Right End') !== false){
							
							
							//echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
							
							
							if(strpos($products[$i]['name'],'EXT') !== false)
							{
							if(isset($leftendpanelval_ep36))	
							{
							$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$rightendpanelval_ep36.' EXT Right End';		
								
								
							$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$rightendpanelval_ep36.' EXT Right End';
							
							$newname=stripslashes($newname);
							$newdesc=stripslashes($newdesc);
							$newdesc=''.$newdesc.'<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';	
							}
							else{
								
							}	
								
							
							
							}
							else{
							
							
							
							$newdesc=$products[$i]['description'];
							$newdesc= str_replace("EP36-Select EP36 Right End Right End","EP36 Right End",$newdesc);
							$newname=$products[$i]['name'];
						$newname= str_replace("EP36-Select EP36 Right End Right End","EP36 Right End",$newname);
						
						
							}
						
						
						}
						
						if(strpos($products[$i]['name'],'Left End') !== false){
							
							
							if(strpos($products[$i]['name'],'EXT') !== false)
							{
							if(isset($leftendpanelval_ep36))	
							{
								
							$newname=''.stripslashes($_SESSION['product_final1'][$l]['val']).' '.$leftendpanelval_ep36.' EXT Left End';		
							//$newname=''.$_SESSION['product_final1'][$l]['val'].' '.$leftendpanelval_ep36.' EXT Left End';		
								
							$newdesc=''.$_SESSION['product_final1'][$l]['val'].' '.$leftendpanelval_ep36.' EXT Left End';
							
							$newname=stripslashes($newname);
							$newdesc=stripslashes($newdesc);
							$newdesc=''.$newdesc.'<p>Includes: 1/4" Clear Tempered Glass and Bracketry     </p>';
								
							}
							else{
								
							}
							
							
							
							}
							else{
							$newdesc=$products[$i]['description'];
							$newdesc= str_replace("EP36-Select EP36 Left End Left End","EP36 Left End",$newdesc);
							$newname=$products[$i]['name'];
						$newname= str_replace("EP36-Select EP36 Left End Left End","EP36 Left End",$newname);	
							}
							//echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
							
							
							
						}
						
						if(strpos($products[$i]['name'],'Left End') !== false){
							
						//$newname="EP36 Left End ";
						}
						
						
						
						
					}
       
       
       
       
       
       
       if(strpos($products[$i]['name'],'EP11') !== false){
         //esss
         //echo'<b style="color:red;">';print_r($_SESSION['product_final1'][$l]['val']);echo'</b><br />';			
         $endarry=explode("/",$_SESSION['product_final1'][$l]['val']);
         
         //echo'<b style="color:red">';print_r($newname);echo'<br />';
         
         
         //echo'<b style="color:red">';print_r($products[$i]['name']);echo'<br />';
         $postArray=array('17-1/4');
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("EP11","",$_SESSION['product_final1'][$l]['val'])));
         
         if(trim($array[0])!=''){
         if((trim($array[0])=='17-1/4')){
         
           //echo " Not custom";
         }else{
           $newname.=" Custom Products ***";
                         $trip_star=true;
         }
         }
         
       }
       if(strpos($products[$i]['name'],'EP12') !== false){
         $postArray=array('17-1/4');
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("EP12","",$_SESSION['product_final1'][$l]['val'])));
         
         if(trim($array[0])!=''){
         
         if((trim($array[0])=='17-1/4')){
         
           //echo " Not custom";
         }else{
           $newname.=" Custom Products ***";
                         $trip_star=true;
         }
         }
         
       }
     
     
     }
     
     if ((strpos($products[$i]['name'],'Squared Corners') !== false)||(strpos($products[$i]['name'],'Radiused Corners') !== false)){
       $custom="";
       if(strpos($products[$i]['name'],'Squared Corners') !== false){
         $custom='**';
                     $doub_star=true;
       }else if(strpos($products[$i]['name'],'Radiused Corners') !== false){
         $custom='***';
                                             $trip_star=true;
       }


       if(strpos($products[$i]['name'],'Ring-EP5') !== false){
         
         $postArray=array(12,18,22);
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("Ring-EP5-","",$_SESSION['product_final1'][$l]['val'])));
         
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
               $dd=explode("-",$array[1]);
                 $newname.=' 3/8" Thick';
             
           }
         }
         $nar=explode("-",$array[1]);
         if($nar[0]>42 || ($nar[0]==42 && $nar[1]!="")){
           $newname.=' 3/8" Thick';
         }
         $cust=$cust1=0;
         $d=str_replace(" ","",$array[0]);
         $d1=str_replace(" ","",$array[1]);
         if(in_array($array[1],$glassArray)){
           $cust=1;
           if(strlen($d1)>2){
             $cust=0;
           }else{
             
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
           }
         }else{
           $cust=0;
         }
         if(in_array($array[0],$postArray)){
           $cust1=1;
           if(strlen($d)>2){
             $cust1=0;
           }
         }else{
           $cust1=0;
         }
         if($cust==0||$cust1==0){
                         $newname.=" Custom Products".$custom;
           //$doub_star=true;
                     }
         //echo'<b style="color:red;">'; print_r($array[1]); echo'</b><br />';
       }
       
       
       if(strpos($products[$i]['name'],'EP5') !== false){
         
         
          //echo'<b style="color:red;">'; print_r($_SESSION['product_final1'][$l]['frosted']); echo'</b><br />';
         
         
         $postArrayring=array(12,18,22);
         $postArray=array(12,18,22,25);
         $glassArray=array(12,18,24,30,36,42);
         
         
         
         $array = explode('"', stripslashes(str_replace("EP5-","",$_SESSION['product_final1'][$l]['val'])));
         
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
               $dd=explode("-",$array[1]);
                 $newname.=' 3/8" Thick';
             
           }
         }
         $nar=explode("-",$array[1]);
         if($nar[0]>42 || ($nar[0]==42 && $nar[1]!="")){
           $newname.=' 3/8" Thick';
         }
         $cust=$cust1=0;
         $d=str_replace(" ","",$array[0]);
         $d1=str_replace(" ","",$array[1]);
         if(in_array($array[1],$glassArray)){
           $cust=1;
           if(strlen($d1)>2){
             $cust=0;
           }else{
             
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
           }
         }else{
           $cust=0;
         }
         
         if(in_array($array[0],$postArray)){
           $cust1=1;
           if(strlen($d)>2){
             
             $cust1=0;
           
           }
           
           
         }else{
           $ddss=explode("-",$array[0]);
           
           
           if(strpos($d,'Ring') !== false){
             if(in_array($ddss[1],$postArray)){
           $cust1=1;
           
         
           }
           else{
           $cust1=0;	
           }
             }
             else{
           $cust1=0;
           
             }
           
         }
         
         
         
         
         if($cust==0||$cust1==0){
           
           if(strpos($newname,'Ring') !== false){
             /*if(in_array($array[1],$glassArray)){
               
             }
             else{*/
               $newname.=" Custom Products".$custom;
             //}
                         
           }
           else{
             $newname.=" Custom Products".$custom;
           }
           //$doub_star=true;
                     }
         
         
         //$_SESSION['product_final1'][$l]['frosted']
       //	echo'<b style="color:red;">';print_r($newname);echo'</b>';
         
         if($_SESSION['product_final1'][$l]['frosted']=='Yes')
         {
         if(strpos($newname,'Custom Products') !== false){
           $newname=str_replace("Custom Products","Custom Products Frosted",$newname);
         }
         else{
           $newname.=" Frosted".$custom;
         }
           
         }
         
         
         
         
         
         
         
         
       }
       if(strpos($products[$i]['name'],'EP15') !== false){
         
       //echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';

     /*	if(strpos($products[$i]['name'],'Right Post')){
         
         $newname="test";
         
       }
         */
         
         
         if(strpos($products[$i]['name'],'Left End Glass')){
           
           
         $postArray=array(18,22);
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("EP15-","",$_SESSION['product_final1'][$l]['val'])));
         //echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
               $dd=explode("-",$array[1]);
                 //$newname.=' 3/8" Thick';
             
           }
         }
         $nar=explode("-",$array[1]);
         if($nar[0]>42 || ($nar[0]==42 && $nar[1]!="")){
           //$newname.=' 3/8" Thick';
         }
         $cust=$cust1=0;
         $d=str_replace(" ","",$array[0]);
         $d1=str_replace(" ","",$array[1]);
         if(in_array($array[1],$glassArray)){
           $cust=1;
           if(strlen($d1)>2){
             $cust=0;
           }else{
             
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
           }
         }else{
           $cust=0;
         }
         if(in_array($array[0],$postArray)){
           $cust1=1;
           if(strlen($d)>2){
             $cust1=0;
           }
         }else{
           $cust1=0;
         }
         if($cust==0||$cust1==0){
           //echo'<b style="color:red;">'; print_r($array[0]); echo'</b><br />';
           //echo'<b style="color:red;">'; print_r($array[0]); echo'</b><br />';
           //if(strpos($newname,'Ring') !== false){
             //if(in_array($array[1],$glassArray)){
               
             //}
             //else{
             //	$newname.=" Custom Products".$custom;
             //}
                         
           //}
           //else{
             //$newname.=" Custom Products".$custom;
           //}
           //$doub_star=true;
                     }
         
         
         $newname=str_replace('"Glass (','"Left End Glass (',$newname);
         $newdesc=str_replace('"Glass (','"Left End Glass (',$newdesc);
         
         $newname=str_replace(')**',')',$newname);
         $newname=str_replace(')***',')',$newname);
         
         
         
         }
         
         
         if(strpos($products[$i]['name'],'Right End Glass')){
           
           
         $postArray=array(18,22);
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("EP15-","",$_SESSION['product_final1'][$l]['val'])));
         //echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
               $dd=explode("-",$array[1]);
                 //$newname.=' 3/8" Thick';
             
           }
         }
         $nar=explode("-",$array[1]);
         if($nar[0]>42 || ($nar[0]==42 && $nar[1]!="")){
           //$newname.=' 3/8" Thick';
         }
         $cust=$cust1=0;
         $d=str_replace(" ","",$array[0]);
         $d1=str_replace(" ","",$array[1]);
         if(in_array($array[1],$glassArray)){
           $cust=1;
           if(strlen($d1)>2){
             $cust=0;
           }else{
             
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
           }
         }else{
           $cust=0;
         }
         if(in_array($array[0],$postArray)){
           $cust1=1;
           if(strlen($d)>2){
             $cust1=0;
           }
         }else{
           $cust1=0;
         }
         if($cust==0||$cust1==0){
           //echo'<b style="color:red;">'; print_r($array[0]); echo'</b><br />';
           //echo'<b style="color:red;">'; print_r($array[0]); echo'</b><br />';
           //if(strpos($newname,'Ring') !== false){
             //if(in_array($array[1],$glassArray)){
               
             //}
             //else{
             //	$newname.=" Custom Products".$custom;
             //}
                         
           //}
           //else{
             //$newname.=" Custom Products".$custom;
           //}
           //$doub_star=true;
                     }
         
         
         $newname=str_replace('"Glass (','"Right End Glass (',$newname);
         $newdesc=str_replace('"Glass (','"Right End Glass (',$newdesc);
         
         $newname=str_replace(')**',')',$newname);
         $newname=str_replace(')***',')',$newname);
         
         
         
         }
         
         
         
         $postArray=array(18,22);
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("EP15-","",$_SESSION['product_final1'][$l]['val'])));
         //echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
               $dd=explode("-",$array[1]);
                 $newname.=' 3/8" Thick';
             
           }
         }
         $nar=explode("-",$array[1]);
         if($nar[0]>42 || ($nar[0]==42 && $nar[1]!="")){
           $newname.=' 3/8" Thick';
         }
         $cust=$cust1=0;
         $d=str_replace(" ","",$array[0]);
         $d1=str_replace(" ","",$array[1]);
         if(in_array($array[1],$glassArray)){
           $cust=1;
           if(strlen($d1)>2){
             $cust=0;
           }else{
             
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
           }
         }else{
           $cust=0;
           
         }
         
         
         //else{
         
         if(in_array($array[0],$postArray)){
           $cust1=1;
           if(strlen($d)>2){
             $cust1=0;
           }
         }else{
           $cust1=0;
         }
         //}
         
         
         if($cust==0||$cust1==0){
           //echo'<b style="color:red;">'; print_r($array[0]); echo'</b><br />';
           if(strpos($newname,'Ring') !== false){
             if(in_array($array[1],$glassArray)){
               
         
             }
             else{
               if((strpos($products[$i]['name'],'Glass Inner') !== false)||(strpos($products[$i]['name'],'Glass Outer') !== false)){
               }
               else{
               $newname.=" Custom Products".$custom;
               }
             }
                         
           }
           else{
             if((strpos($products[$i]['name'],'Glass Inner') !== false)||(strpos($products[$i]['name'],'Glass Outer') !== false)){
               }
               else{
             $newname.=" Custom Products".$custom;
               }
           }
           //$doub_star=true;
                     }
         
         if((strpos($products[$i]['name'],'Glass Inner') !== false)||(strpos($products[$i]['name'],'Glass Outer') !== false)){
         $newname.=" Custom Products".$custom;
         }
         
         
           if($_SESSION['product_final1'][$l]['frosted']=='Yes')
         {
         if(strpos($newname,'Custom Products') !== false){
           $newname=str_replace("Custom Products","Custom Products Frosted",$newname);
         }
         else{
           $newname.=" Frosted".$custom;
         }
           
         }
       //$newname=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newname);
         
       //$newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);	
         
       }
       
       
       if(strpos($products[$i]['name'],'EP11') !== false){
         
         
         $postArray=array('17-1/4');
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("EP11-","",$_SESSION['product_final1'][$l]['val'])));
         $cust=1;
         $d= str_replace("EP11 ","",$array[0]);
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
             $newname.=' 3/8" Thick';
             $newdesc=str_replace("1/4","3/8",$newdesc);
           }
         }
         
         if($_SESSION['product_final1'][$l]['custom']=="Yes"){

           $rt=explode("-",$array[1]);
           if($rt[0]>42 || ($rt[0]==42 && $rt[1]!="")){
             $newname.=' 3/8" Thick';
           }
         }
         $dt=explode("-",$d);						
         // Ivtidai Warsi Changes 18 Aug, 2016
         //if( $dt[0] > 42 || (strpos($dt[0],"42-") !== false) || ($dt[1]!="")){
         if( $dt[0] >= 42 && $dt[1]!="" ){
           $newname.=' 3/8" Thick';
         }	
         $d=str_replace(" ","",$d);
         if($array[1]!=""){
           $cust=0;
         }else{
           if(in_array($d,$glassArray)){
             $cust=1;
             if(strlen($d)>2){
               $cust=0;
             }else{
               if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
                 $newname.=$custom;
               }
             }
           }else{
             $cust=0;
           }
         }
                     if($cust==0){
           if((strpos($products[$i]['name'],'Glass Inner') !== false)||(strpos($products[$i]['name'],'Glass Outer') !== false)){
           }
           else{
                         $newname.=" Custom Products".$custom;
           }
             //$doub_star=true;
                     }
         /*$array = explode('"', stripslashes(str_replace("EP11","",$_SESSION['product_final1'][$l]['val'])));
         
         if(in_array($array[0],$glassArray)&&($array[1]=='')){
           //echo "Not Custom";
         }else
         if((trim($array[0])=='17-1/4')&&in_array($array[1],$glassArray)&&($array[1]!='')){
         
           //echo " Not custom";
         }else{
           //echo $newname;
           $newname.=" Custom Products".$custom;
           //$doub_star=true;
         }*/
         
         //echo'<b style="color:red">'; print_r($newdesc); echo'</b></br /> ';
         //echo'<b style="color:red">'; print_r($newname); echo'</b></br /> ';
         
         //$newdesc=str_replace("world","Peter","Hello world!");
         
         if((strpos($products[$i]['name'],'Glass Inner') !== false)||(strpos($products[$i]['name'],'Glass Outer') !== false)){
         $newname.=" Custom Products".$custom;
         }
         
         
         
         $newname=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newname);
         
         $newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);
         
       /*	
         if ((strpos($products[$i]['name'],'LYT CORNER') !== false)){
       //$newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
       //echo str_replace("world","Peter","Hello world!");
       
        echo$newname=str_replace("LYT CORNER","LIGHT-BAR CORNER",$newname);
       
     }*/
         
       }
       if(strpos($products[$i]['name'],'EP12') !== false){
         $postArray=array('17-1/4');
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("EP12","",$_SESSION['product_final1'][$l]['val'])));
         //echo $array[1]." ".$array[0];
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
             $newname.=' 3/8" Thick';
             $newdesc=str_replace("1/4","3/8",$newdesc);
           }
         }
         if($_SESSION['product_final1'][$l]['custom']=="Yes"){

           $rt=explode("-",$array[1]);
           if($rt[0]>42 || ($rt[0]==42 && $rt[1]!="")){
             $newname.=' 3/8" Thick';
           }
         }
           
           if($array[0]>42|| (strpos($array[0],"42-")!==false)){
             $newname.=' 3/8" Thick';
           }
         $cust=1;
         $d=str_replace(" ","",$array[0]);
                     if($array[1]!=""){
           $cust=0;
         }else{
           if(in_array($array[0],$glassArray)){
             $cust=1;
             //echo $d.strlen($d);
             if(strlen($d)>2){
               $cust=0;
             }else{
               if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
                 $newname.=$custom;
               }
             }
           }else{
             $cust=0;
           }
         }
                     if($cust==0){
         //echo'<b style="color:red;">';print_r($post_type);echo'</b><br />';
         if((strpos($products[$i]['name'],'Glass Inner Corner') !== false)||(strpos($products[$i]['name'],'Glass Outer Corner') !== false)){
         }
         
         else{
                         $newname.=" Custom Products".$custom;
         }
           //$doub_star=true;
                     }
         if((strpos($products[$i]['name'],'Glass Inner Corner') !== false)||(strpos($products[$i]['name'],'Glass Outer Corner') !== false)){

           $newname.=" Custom Products".$custom;
         }
         
         
         
         
         /*if(in_array($array[0],$glassArray)&&($array[1]=='')){
           //echo "Not Custom";
         }else
         if((trim($array[0])=='17-1/4')&&in_array($array[1],$glassArray)&&($array[1]!='')){
         
           //echo " Not custom";
         }else{
           $newname.=" Custom Products".$custom;
         }*/
         
         $newname=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newname);
         
         $newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);
     
       }
       if(strpos($products[$i]['name'],'EP21') !== false){
         
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("EP21-","",$_SESSION['product_final1'][$l]['val'])));
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
             $newname.=' 3/8" Thick';
           }
         }
         if($array[0]>42 || (strpos($array[0],"42-")!==false)){
           $newname.=' 3/8" Thick';
         }
         $cust=0;
                     foreach ($glassArray as $v){
           if(!strcmp($v,$array[0])){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
                     }
                      if($cust==0){
         //echo'<b style="color:red;">';print_r($post_type);echo'</b><br />';
         if((strpos($products[$i]['name'],'Glass Inner Corner') !== false)||(strpos($products[$i]['name'],'Glass Outer Corner') !== false)){
         }
         
         else{
                         $newname.=" Custom Products".$custom;
         }
           //$doub_star=true;
                     }
         if((strpos($products[$i]['name'],'Glass Inner Corner') !== false)||(strpos($products[$i]['name'],'Glass Outer Corner') !== false)){

           $newname.=" Custom Products".$custom;
         }
         
         
         $newname=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newname);
         
         $newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);
     
       }
       if(strpos($products[$i]['name'],'EP22') !== false){
         
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("EP22-","",$_SESSION['product_final1'][$l]['val'])));
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
             $newname.=' 3/8" Thick';
           }
         }
         if($array[0]>42 || (strpos($array[0],"42-")!==false)){
           $newname.=' 3/8" Thick';
         }
         $cust=0;
                     foreach ($glassArray as $v){
                         if(!strcmp($v,$array[0])){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
                     }
                      if($cust==0){
         //echo'<b style="color:red;">';print_r($post_type);echo'</b><br />';
         //if((strpos($products[$i]['name'],'Glass Corner Post') !== false)){
         if((strpos($products[$i]['name'],'Glass Inner Corner') !== false)||(strpos($products[$i]['name'],'Glass Outer Corner') !== false)){	
           
         }
         
         else{
                         $newname.=" Custom Products".$custom;
         }
           //$doub_star=true;
                     }
         if((strpos($products[$i]['name'],'Glass Inner Corner') !== false)||(strpos($products[$i]['name'],'Glass Outer Corner') !== false)){

           $newname.=" Custom Products".$custom;
         }
         //if(in_array($array[0],$glassArray)&&($array[1]=='')){
           //echo "Not Custom";
         //}else
         //{
           //$newname.=" Custom Products".$custom;
         //}
         
         $newname=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newname);
         
         $newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);
     
       }
       if(strpos($products[$i]['name'],'ED20') !== false){
         
         $glassArray=array(8,9,10,11,12,13);
         $array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
         $cust=0;
                     foreach ($glassArray as $v){
           if(!strcmp($v,$array[0])){
                             $cust=0;
                         }
                     }
                     if($cust==0){
                         $newname.=" Custom Products".$custom;
           //$doub_star=true;
                     }else{
           $newname.=" Custom Products".$custom;
         }
     
       }
       if(strpos($products[$i]['name'],'EP36') !== false){
         
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("EP36-","",$_SESSION['product_final1'][$l]['val'])));
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
             $newname.=' 3/8" Thick';
           }
         }
         if($array[0]>42 || (strpos($array[0],"42-")!==false)){
           $newname.=' 3/8" Thick';
         }
                     $cust=0;
                     foreach ($glassArray as $v){
                         if(!strcmp($v,$array[0])){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
                     }
                     if($cust==0){
         //echo'<b style="color:red;">';print_r($post_type);echo'</b><br />';
         if((strpos($products[$i]['name'],'Glass Inner Corner') !== false)||(strpos($products[$i]['name'],'Glass Outer Corner') !== false)){
         }
         
         else{
                         $newname.=" Custom Products".$custom;
         }
           //$doub_star=true;
                     }
         if((strpos($products[$i]['name'],'Glass Inner Corner') !== false)||(strpos($products[$i]['name'],'Glass Outer Corner') !== false)){

           $newname.=" Custom Products".$custom;
         }
         
         $newname=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newname);
         
         $newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);
         
         
         if($_SESSION['product_final1'][$l]['frosted']=='Yes')
         {
         if(strpos($newname,'Custom Products') !== false){
           $newname=str_replace("Custom Products","Custom Products Frosted",$newname);
         }
         else{
           $newname.=" Frosted".$custom;
         }
           
         }
         
         //$glassArray=array(12,18,24,30,36,42);
         //$array = explode('"', stripslashes(str_replace("EP36-","",$_SESSION['product_final1'][$l]['val'])));
         
         //if(in_array($array[0],$glassArray)&&($array[1]=='')){
           //echo "Not Custom";
         //}else
         //{
           //$newname.=" Custom Products".$custom;
         //}
         //if (strpos($products[$i]['name'],'LYT') !== false){
           
           
           

           //$newname=$products[$i]['name'];
           //echo'<b style="color:red;">'; print_r($newname);  echo'</b><br />';
           //$newdesc=$products[$i]['desc'];
           //$newname=str_replace("EP36-Select EP36 Right End Right End","EP36 Right End",$newname);
           //

           //}
           
            if(strpos($products[$i]['name'],'LYT') !== false){
             
           $newname= stripslashes(str_replace("EP36-","",$_SESSION['product_final1'][$l]['val']));
                             
           $arr=explode("-", $newname);

         if(sizeof($arr)>=3){

             $counter=$arr[2];

             $post=$arr[0]."-".$arr[1];

           }else{

             $counter=$arr[1];

             $post=$arr[0];

           } 
           
           //$array = explode('"', stripslashes(str_replace("ED20-","",$_SESSION['product_final1'][$l]['val'])));
           $array = explode('<p>', $newdesc);
           $newname= stripslashes(str_replace("EP36-","",$_SESSION['product_final1'][$l]['val']));

           $arr=explode("-", $newname);
           //echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
           
             
           $newname="EP36-" .$newname."";
           $newdesc="" .$newname." LIGHT BAR WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
           //$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." LYT Custom Products";
           }
         
           
       }
       if(strpos($products[$i]['name'],'ES31') !== false){
         
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("ES31-","",$_SESSION['product_final1'][$l]['val'])));
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
             $newname.=' 3/8" Thick';
           }
         }
         if($array[0]>42 || (strpos($array[0],"42-")!==false)){
           $newname.=' 3/8" Thick';
         }
         $cust=0;
                     foreach ($glassArray as $v){
           if(!strcmp($v,$array[0])){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
                     }
                      if($cust==0){
         //echo'<b style="color:red;">';print_r($post_type);echo'</b><br />';
         if((strpos($products[$i]['name'],'Glass Inner Corner') !== false)||(strpos($products[$i]['name'],'Glass Outer Corner') !== false)){
         }
         
         else{
                         $newname.=" Custom Products".$custom;
         }
           //$doub_star=true;
                     }
         if((strpos($products[$i]['name'],'Glass Inner Corner') !== false)||(strpos($products[$i]['name'],'Glass Outer Corner') !== false)){

           $newname.=" Custom Products".$custom;
         }
         
       
         $newname=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newname);
         
         $newdesc=str_replace("Glass Corner Post","Glass ".$post_type." Corner ".$post_degree." Post",$newdesc);
           
     
       }
       if(strpos($products[$i]['name'],'ES40') !== false){
         
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("ES40-","",$_SESSION['product_final1'][$l]['val'])));
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
             $newname.=' 3/8" Thick';
           }
         }
         if($array[0]>42 || (strpos($array[0],"42-")!==false)){
           $newname.=' 3/8" Thick';
         }
         $cust=0;
                     foreach ($glassArray as $v){
           if(!strcmp($v,$array[0])){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
                     }
                     if($cust==0){
                         $newname.=" Custom Products".$custom;
           //$doub_star=true;
                     }
     
       }
       if(strpos($products[$i]['name'],'ES67') !== false){
         
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("ES67-","",$_SESSION['product_final1'][$l]['val'])));
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
             $newname.=' 3/8" Thick';
           }
         }
         if($array[0]>42 || (strpos($array[0],"42-")!==false)){
           $newname.=' 3/8" Thick';
         }
         $cust=0;
                     foreach ($glassArray as $v){
           if(!strcmp($v,$array[0])){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
                     }
                     if($cust==0){
                         $newname.=" Custom Products".$custom;
           //$doub_star=true;
                     }
     
       }
       if(strpos($products[$i]['name'],'ES73') !== false){
         
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("ES73-","",$_SESSION['product_final1'][$l]['val'])));
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
             $newname.=' 3/8" Thick';
           }
         }
         if($array[0]>42 || (strpos($array[0],"42-")!==false)){
           $newname.=' 3/8" Thick';
         }
         $cust=0;
                     foreach ($glassArray as $v){
                         if(!strcmp($v,$array[0])){
                             $cust=1;
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
                         }
                     }
                     if($cust==0){
                         $newname.=" Custom Products".$custom;
                         //$doub_star=true;
                     }
         /*if(in_array($array[0],$glassArray)&&($array[1]=='')){
           //echo "Not Custom";
         }else
         {
           $newname.=" Custom Products".$custom;
         }*/
     
       }
     }
     
     
     
     /*$newname= str_replace('B950-g12"REP Custom Products***','B950-g12"REP',$newname);
     $newname= str_replace('B950-g18"REP Custom Products***','B950-g18"REP',$newname);
     $newname= str_replace('B950-g24"REP Custom Products***','B950-g24"REP',$newname);
     $newname= str_replace('B950-g12"LEP Custom Products***','B950-g12"LEP',$newname);
     $newname= str_replace('B950-g18"LEP Custom Products***','B950-g18"LEP',$newname);
     $newname= str_replace('B950-g24"LEP Custom Products***','B950-g24"LEP',$newname);*/
//online
 //$con=mysqli_connect("localhost","esneezeg_andy149","Qwdf#958","esneezeg_new_sneezeguard") or die(mysqli_connect_error());
 
 
 //offline
/*  $con=mysqli_connect("localhost","root","","esneezeg_new_sneezeguard") or die(mysqli_connect_error());
 $sss=$products[$i]['id'];
 if($sss=="757{3}94")
   {
 $query_pro_pri="SELECT * FROM products WHERE products_id='757'";
   }
   else if($sss=="4365{10}96")
   {
 $query_pro_pri="SELECT * FROM products WHERE products_id='4365'";
   }
 else{
     
   $query_pro_pri="SELECT * FROM products WHERE products_id=".$products[$i]['id']."";  
   }
 
$exe_query_pro_pri=mysqli_query($con,$query_pro_pri);
$result_pr_pri=mysqli_fetch_array($exe_query_pro_pri);
$discount_percent=$result_pr_pri['discount_percent'];
$previous_price=$result_pr_pri['previous_price'];
$discount_text="(".$result_pr_pri['discount_percent'].")";


*/
 
 
 
 
 
 
 
 

 
 $sss=$products[$i]['id'];
 
 
 
   if(strpos($sss,'{') !== false){
   $arrpid=(explode("{",$sss));
   $pidds=	$arrpid[0];
   }
   else{
   $pidds=	$products[$i]['id'];	
   }
 
 if($sss=="757{3}94")
   {
 $query_pro_pri=tep_db_query("SELECT * FROM products WHERE products_id='757'");	
 

   }
   else if($sss=="4365{10}96")
   {
 $query_pro_pri=tep_db_query("SELECT * FROM products WHERE products_id='4365'");	
   }
 else{
   $query_pro_pri=tep_db_query("SELECT * FROM products WHERE products_id=".$pidds."");		
   
   }
 
// $exe_query_pro_pri=mysqli_query($con,$query_pro_pri);
// $result_pr_pri=mysqli_fetch_array($exe_query_pro_pri);

$result_pr_pri=tep_db_fetch_array($query_pro_pri);



$discount_percent=$result_pr_pri['discount_percent'];
$previous_price=$result_pr_pri['previous_price'];
$discount_text="(".$result_pr_pri['discount_percent'].")";






     //echo'<b style="color:red;">'; print_r($_SESSION['product_final']); echo'</b>';
     
     $url = '<a href="' . tep_href_link(/*FILENAME_PRODUCT_INFO ,*/ 'product_info1.php?products_id=' . $products[$i]['id']) . '">' . tep_image(DIR_WS_IMAGES . $products[$i]['image'], $products[$i]['name'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT) . '</a>';
     if($_SESSION['product_final1'][$l]['custom']=='beyond'){
       $newname=$products[$i]['name'];
       $newdesc=$products[$i]['description'];
     } else if($_SESSION['product_final1'][$l]['custom'] == 'Yes'){
       $url = tep_image(DIR_WS_IMAGES . $products[$i]['image'], $products[$i]['name'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT);
     }


     if(!empty($_SESSION['product_final1'][$l]['wt'])){
           $products[$i]['final_price']=round($products[$i]['price']*$_SESSION['product_final1'][$l]['wt']);
           $new+=$products[$i]['final_price'];
           
         }











if(strpos($newname,'EP6') !== false){
if(strpos($newname,'Custom Products') !== false)
{

}	
else{	
if(strpos($newname,'SLGL') !== false){	
if(strpos($newname,'SLGL 6" Plus') !== false || strpos($newname,'SLGL 12" Plus') !== false || strpos($newname,'EP6-48-SLGL') !== false  || strpos($newname,'EP6-54-SLGL') !== false ){	
$newname.=" Custom Products**";
}

}
}


}


//echo'<b style="color:red;">'; print_r($newname); echo'</b><br />';
//Thick** Custom Products**
if(strpos($newname,'EP5-26') !== false  || strpos($newname,'EP5-12') !== false || strpos($newname,'EP5-18') !== false || strpos($newname,'EP5-22') !== false){

}

else{
if(strpos($newname,'Custom Products') !== false ||strpos($newname,'Frosted') !== false || strpos($newname,'Thick') !== false || strpos($newname,'Bracket') !== false|| strpos($newname,'Ring Spacer') !== false){

}

else{
if(strpos($newname,'Glass') !== false){

if(strpos($products[$i]['name'],'EP5') !== false){
         $postArray=array(12,18,22,25);
         $glassArray=array(12,18,24,30,36,42);
         $array = explode('"', stripslashes(str_replace("EP5-","",$_SESSION['product_final1'][$l]['val'])));
         
         if(!empty($_SESSION['product_final1'][$l]['wt'])){
           if($_SESSION['product_final1'][$l]['wt']!=1){
               $dd=explode("-",$array[1]);
                 $newname.=' 3/8" Thick';
             
           }
         }
         $nar=explode("-",$array[1]);
         if($nar[0]>42 || ($nar[0]==42 && $nar[1]!="")){
           $newname.=' 3/8" Thick';
         }
         $cust=$cust1=0;
         $d=str_replace(" ","",$array[0]);
         $d1=str_replace(" ","",$array[1]);
         if(in_array($array[1],$glassArray)){
           $cust=1;
           if(strlen($d1)>2){
             $cust=0;
           }else{
             
             if($_SESSION['product_final1'][$l]['wt']!=1 && (!empty($_SESSION['product_final1'][$l]['wt']))){
               $newname.=$custom;
             }
           }
         }else{
           $cust=0;
         }
         if(in_array($array[0],$postArray)){
           $cust1=1;
           if(strlen($d)>2){
             $cust1=0;
           }
         }else{
           $cust1=0;
         }
         if($cust==0||$cust1==0){
           
           if(strpos($newname,'Ring') !== false){
             if(in_array($array[1],$glassArray)){
               
             }
             else{
               $newname.=" Custom Products".$custom;
             }
                         
           }
           else{
             $newname.=" Custom Products".$custom;
           }
           //$doub_star=true;
                     }
         
       }

//echo'<b style="color:red;">'; print_r($newname); echo'</b><br />';


}


}
}



   $_SESSION['product_final'][$l]=array('id'=>$products[$i]['id'],'name'=>$newname,'amt'=>$products[$i]['final_price'],'price'=>$currencies->display_price($products[$i]['final_price'], tep_get_tax_rate($products[$i]['tax_class_id']), $_SESSION['product_final1'][$l]['qty']),'qty'=>$_SESSION['product_final1'][$l]['qty'],'model'=>$products[$i]['model'],'wt'=>$_SESSION['product_final1'][$l]['wt']) ;
     





















   }
   

 }
     
   
 $l++;

} 
?>




<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<body>
<section>
    <div class="mt-5">
        <h1>&nbsp;</h1>
    </div>
    <div class="mt-1">
        <h4>&nbsp;</h4>
    </div>
    <h5 class="text-center font-weight-bold">The following product(s) will be shipped Please review your shipping and delivery options below.</h5>
    <hr>
    <div class="container">
    <?php echo tep_draw_form('checkout_address', tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'), 'post', '', true) . tep_draw_hidden_field('action', 'process'); ?>
        <div class="row">
            <div class="col-md-6 col-sm-6 border-right pl-5 pr-5 pb-5">
            <div>
               <table width="100%">

<?php
  if (sizeof($order->info['tax_groups']) > 1) {
?>

          <tr>
            <td colspan="2">
<?php // echo '<strong>' . HEADING_PRODUCTS . '</strong> <a href="' . tep_href_link(FILENAME_SHOPPING_CART) . '"><span class="orderEdit">(' . TEXT_EDIT . ')</span></a>'; ?></td>
            <td align="right"><strong><?php echo HEADING_TAX; ?></strong></td>
            <td align="right"><strong><?php echo HEADING_TOTAL; ?></strong></td>
          </tr>

<?php
  } else {
?>

          <tr>
            <td colspan="3"><h6 class="text-left font-weight-bold">The following product(s) will be shipped </h6> 
            <?php // echo '<strong>' . HEADING_PRODUCTS . '</strong> <a href="' . tep_href_link(FILENAME_SHOPPING_CART) . '"><span class="orderEdit">(' . TEXT_EDIT . ')</span></a>'; ?></td>
          </tr>

<?php
  }
  
  
  /* ani code if custom product */
  // echo'<b style="color:red;"><pre>'; print_r($_SESSION['product_final']); echo'</b>';
  if(sizeof($_SESSION['product_final'])>=1){
    $l=0;
    foreach($_SESSION['product_final'] as $val){
    echo '<tr style="font-size: 14px;">' . "\n" .
         '<td align="Left" valign="top" width="30">' . $val['qty'] . '&nbsp;x</td>' . "\n" .
         '<td valign="top">' .  $val['name'];

    if (STOCK_CHECK == 'true') {
      echo tep_check_stock($order->products[$i]['id'], $order->products[$i]['qty']);
    }

    if ( (isset($order->products[$i]['attributes'])) && (sizeof($order->products[$i]['attributes']) > 0) ) {
      for ($j=0, $n2=sizeof($order->products[$i]['attributes']); $j<$n2; $j++) {
        echo '<br /><nobr><small>&nbsp;<i> - ' . $order->products[$i]['attributes'][$j]['option'] . ': ' . $order->products[$i]['attributes'][$j]['value'] . '</i></small></nobr>';
      }
    }

    echo '</td>' . "\n";

    if (sizeof($order->info['tax_groups']) > 1) 
    echo '<td valign="top" align="right">' . tep_display_tax_value($order->products[$i]['tax']) . '%</td>' . "\n";

    echo '            <td align="right" valign="top">' . $val['price'] . '</td>' . "\n" .
         '          </tr>' . "\n";
  
  $l++;
  }
 // print_r($_SESSION['product_final']);
 // exit;
  }
  else{
/* ani code if custom product */
  for ($i=0, $n=sizeof($order->products); $i<$n; $i++) {
    echo '<tr>' . "\n" .
         '<td align="Left" valign="top" width="30">' . $order->products[$i]['qty'] . '&nbsp;x</td>' . "\n" .
         '<td valign="top">' . $order->products[$i]['name'];

    if (STOCK_CHECK == 'true') {
      echo tep_check_stock($order->products[$i]['id'], $order->products[$i]['qty']);
    }

    if ( (isset($order->products[$i]['attributes'])) && (sizeof($order->products[$i]['attributes']) > 0) ) {
      for ($j=0, $n2=sizeof($order->products[$i]['attributes']); $j<$n2; $j++) {
        echo '<br /><nobr><small>&nbsp;<i> - ' . $order->products[$i]['attributes'][$j]['option'] . ': ' . $order->products[$i]['attributes'][$j]['value'] . '</i></small></nobr>';
      }
    }

    echo '</td>' . "\n";

    if (sizeof($order->info['tax_groups']) > 1) 
    echo '<td valign="top" align="right">' . tep_display_tax_value($order->products[$i]['tax']) . '%</td>' . "\n";

    echo '            <td align="right" valign="top">' . $currencies->display_price($order->products[$i]['final_price'], $order->products[$i]['tax'], $order->products[$i]['qty']) . '</td>' . "\n" .
         '          </tr>' . "\n";
  }
  }
?>

        </table>
            </div>
            <div>
            <h6 class="text-left font-weight-bold mt-2"><?php echo TABLE_HEADING_SHIPPING_ADDRESS; ?></h6>
            <p>
            <?php echo tep_address_label($customer_id, $sendto, true, ' ', '<br />'); ?>
            </p>
            </div>
            <div class="text-right cbtn" width="50%">
            <a class="btn btn-outline-dark form-control p-2" href="<?php  echo tep_href_link(FILENAME_CHECKOUT_SHIPPING_ADDRESS, '', 'SSL') ?>" >Change Address</a>
            </div>
            </div>
            <div class="col-md-6 col-sm-6 pl-3 pr-3">
            <div>
            <?php
  if (tep_count_shipping_modules() > 0) {
?>

  <h6 class="text-left font-weight-bold"><?php echo TABLE_HEADING_SHIPPING_METHOD; ?></h6>
<!--<img src="img/multiShip.gif" />-->
<?php
    if (sizeof($quotes) > 1 && sizeof($quotes[0]) > 1) {
?>

   <p><?php  echo TEXT_CHOOSE_SHIPPING_METHOD; ?></p> 


<?php
    } elseif ($free_shipping == false) {
?>

  <div class="contentText" style="margin-left:15px;">
    <?php echo TEXT_ENTER_SHIPPING_INFORMATION; ?>
  </div>

<?php
    }
?>
<style>


#pickup2    {
    width: 20px;
    height: 20px;
  
    margin:-5;
   margin-top: -28px;
   margin-left: 410px;
}
#pickup3    {
    width: 25px;
    height: 20px;
  margin:-5;
    
   margin-top: -11px;
   margin-left: 327px;
}


#pickup {background-color:#ccc;margin:0;border:0px solid black ;padding:4;}
#pickup22 {background-color:red;margin:-2;border:0px solid black ;padding:4;}



</style>
  <div class="">
    <table border="0" width="100%" cellspacing="1" cellpadding="3">

<?php
define('FREE_SHIPPING_DESCRIPTION',$addre );
    if ($free_shipping == true) {
?>

      <tr>
        <td><strong><?php echo FREE_SHIPPING_TITLE; ?></strong>&nbsp;<?php echo $quotes[$i]['icon']; ?></td>
      </tr>
      <tr id="defaultSelected" class="moduleRowSelected" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" onclick="selectRowEffect(this, 0)">
        <td style="padding-left: 15px;"><?php echo sprintf(FREE_SHIPPING_DESCRIPTION, $currencies->format(MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER)) . tep_draw_hidden_field('shipping', 'free_free'); ?></td>
      </tr>

<?php
    } else {
      
      for ($i=0, $n=sizeof($quotes); $i<$n; $i++) {
    $radio_buttons = 0;
?>
     
      <tr>
        <td colspan="3"><strong style="font-size:14px;"><?php echo $quotes[$i]['module']; ?></strong>&nbsp;<?php if (isset($quotes[$i]['icon']) && tep_not_null($quotes[$i]['icon'])) { echo $quotes[$i]['icon']; } ?></td>
      </tr>

<?php
        if (isset($quotes[$i]['error'])) {
?>

      <tr>
        <td colspan="3"><p><?php echo $quotes[$i]['error']; ?></p></td>
      </tr>

<?php
        } else {
          for ($j=0, $n2=sizeof($quotes[$i]['methods']); $j<$n2; $j++) {
// set the radio button to be checked if it is the method chosen
            $checked = (($quotes[$i]['id'] . '_' . $quotes[$i]['methods'][$j]['id'] == $shipping['id']) ? true : false);

            if ( ($checked == true) || ($n == 1 && $n2 == 1) ) {
              echo '<tr id="defaultSelected" class="moduleRowSelected" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" onclick="selectRowEffect(this, ' . $radio_buttons . ')" class="font-weight-bold" ">' . "\n";
            } else {
              echo '<tr class="moduleRow" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" onclick="selectRowEffect(this, ' . $radio_buttons . ')" class="font-weight-bold">' . "\n";
            }
?>

        <td width="75%"><?php echo $quotes[$i]['methods'][$j]['title']; ?></td>

<?php
            if ( ($n > 1) || ($n2 > 1) ) {
?>

        <td><?php echo $currencies->format(tep_add_tax($quotes[$i]['methods'][$j]['cost'], (isset($quotes[$i]['tax']) ? $quotes[$i]['tax'] : 0))); ?></td>
        <td align="right"><?php echo tep_draw_radio_field('shipping', $quotes[$i]['id'] . '_' . $quotes[$i]['methods'][$j]['id'], $checked); ?></td>

<?php
            } else {
?>

        <td align="right" colspan="2"><?php echo $currencies->format(tep_add_tax($quotes[$i]['methods'][$j]['cost'], (isset($quotes[$i]['tax']) ? $quotes[$i]['tax'] : 0))) . tep_draw_hidden_field('shipping', $quotes[$i]['id'] . '_' . $quotes[$i]['methods'][$j]['id']); ?></td>

<?php
            }
?>

      </tr>
    

<?php
            $radio_buttons++;
          }  ?>
      
      
      
      <?php if($tee=='12') { ?>
   <tr >
        <td colspan="3" ><strong >&nbsp;&nbsp;&nbsp;Pick up</strong>&nbsp;</td>
      </tr>
       
      <tr class="moduleRow  alert-secondary" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" onclick="selectRowEffect(this, 6)">

        <!--Old
    <td width="75%" style="padding-left: 15px;" bgcolor="#AAAAAA"><strong>Will call hours 6-3 we will advise by phone when order is completed.</strong><br>1281-A Franquette Ave. Concord, CA 94520<br>
Phone: 1-800-690-0002<br>
Fax: 925-680-7252<br>Hours: 6:00AM - 3:00PM PST</td>-->
<?php //New change on 23-06-2018 from asmt office ?>
  <td width="100%"  ><strong>Will call hours 6-3 we will advise by phone when order is completed.</strong><br><span  >2300 Wilbur Ave. Antioch CA 94509<br>
Phone: 1-800-690-0002<br>
Fax: 925-680-7252<br>Hours: 6:00AM - 3:00PM PST</span></td>


        <td >$0.00</td><td align="right" ><?php echo sprintf(FREE_SHIPPING_DESCRIPTION, $currencies->format(MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER)) . tep_draw_radio_field('shipping', 'free_free'); ?></td></td>
      </tr><?php } ?>
     <?php

   }
   
      }
    }
?>

    </table>
  
  <?php //require('includes/modules/shipping_estimator.php');?>
  </div>

<?php
  }
?>

<h6 class="text-left font-weight-bold" ><?php echo TABLE_HEADING_COMMENTS; ?></h6>

<div class="">
  <textarea name="comments" class="form-control"></textarea>
</div>
<div class="text-right cbtn mt-3" width="30%">
            <input type="submit" class="form-control btn btn-outline-dark p-2" title=" Continue" button="" onclick="return check_pickup()" value="Continue">
            </div>
<!-- <div style="text-align:center;"> <input type="image" src="img/new_icons/continue.png" style="width:504px;height: 97px;" alt="Continue" title=" Continue" button="" onclick="return check_pickup()"></div> -->
            </div>
            </div>
        </div>
    </div>
    </form>
</section>
</body>
</html>
<?php include('includes/footer_new_design.php');?>
