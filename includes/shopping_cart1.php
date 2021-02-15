<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require("includes/application_top.php");
  if ($cart->count_contents() > 0) {
    include(DIR_WS_CLASSES . 'payment.php');
    $payment_modules = new payment;
  }

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_SHOPPING_CART);

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_SHOPPING_CART));

  require(DIR_WS_INCLUDES . 'template_top.php');
  $trip_star=$doub_star=$sin_hash=$doub_hash=$customcheck=$frostedrad=$frostedsqu=false;
?>
<div class="form_white " style="height:auto !important;  border: 1px #666666 solid; margin-bottom:40px; padding-bottom:70px;" >
<h1><?php // echo HEADING_TITLE; ?></h1>
<?php
  if ($cart->count_contents() > 0) {
?>
<script>
	$(document).ready(function(){
		if ($.browser.msie  && parseInt($.browser.version, 10) === 7) {
   			$("#ex1").css('width',"100%");
   			$(".price_table").css("text-align","left");
		}
   	});

</script>
<?php echo tep_draw_form('cart_quantity', tep_href_link(FILENAME_SHOPPING_CART, 'action=update_product')); ?>

<div class="contentContainer">
  <h2 align="left"  ><font color="black">&nbsp;&nbsp; Shopping Cart <?php //echo TABLE_HEADING_PRODUCTS; ?></font></h2>

  <div class="contentText">
<?php
$roasted=$_SESSION['roastedglass'];
$roasted_id=$_SESSION['roastedglass_id'];
//print_r($_SESSION['roastedglass']);exit;
    $any_out_of_stock = 0;
    $products = $cart->get_products();
	//echo'<b style="color:red;">';print_r($products);echo'</b>';
	echo array_search("705", array_keys($products));
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
        }
      }
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
    <div class="price_table">
    <table border="0" width="98%" cellspacing="0" cellpadding="8"    >
    

<?php
	
	$_SESSION['product_final']=array();
	
	
	$l=0;
	$temp=0;
	$new_ids = array();
   	
   	if(empty($_SESSION['product_final1'])) {
   		calCulateQuantity($_SESSION['product_custom']);
   	}
	foreach($_SESSION['product_final1'] as $key=>$val) {
		for ($i=0, $n=sizeof($products); $i<$n; $i++) {  
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
				} else if (strpos($products[$i]['name'],'B950P') !== false || strpos($products[$i]['name'],'EP950') !== false || strpos($products[$i]['name'],'B950') !== false) {
					$ck=0;
					if($_SESSION['product_final1'][$l]['val']=='B950'){
						$newname=$products[$i]['name'];
						$newdesc=$products[$i]['description'];
					}else{
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
									
					if ((strpos($products[$i]['name'],'LEP') !== false)||(strpos($products[$i]['name'],'REP') !== false)){
						
						
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
						
					
						
					}
					
					
				} else if (strpos($products[$i]['name'],'LB') !== false){
					
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

							

							 $newname="ED20"." FLANGE COVER"." Custom Products";
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
								
							$newname="ES90-" .$newname."";
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
							
						 if(strpos($products[$i]['name'],'BKLYT') !== false){
					
						$newname=$newname." BACK LIGHT";
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
					$newname=strstr($products[$i]['name'],' ');
					$newname=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newname);
					$newdesc=strstr($products[$i]['description'],' ');
					$newdesc=stripslashes($_SESSION['product_final1'][$l]['val']." ".$newdesc);
				}
				}
				/*end*/
				if ((strpos($products[$i]['name'],'ROSTEDGL') !== false)){
				
				if(strpos($products[$i]['name'],'EP5') !== false){
						$newname="EP5-Frosted Glass";
						$newdesc="EP5-Frosted Glass";
						$frostedrad=true;
						$frostedsqu=true;
				
					}
					
					if(strpos($products[$i]['name'],'EP15') !== false){
						$newname="EP15-Frosted Glass";
						$newdesc="EP15-Frosted Glass";
						$frostedrad=true;
						$frostedsqu=true;
				
					}
				}if ((strpos($products[$i]['name'],'Center Post Brushed Stainless Steel') !== false)){
				
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
				if ((strpos($products[$i]['name'],'Left End Panel') !== false)||(strpos($products[$i]['name'],' Right End Panel') !== false)||(strpos($products[$i]['name'],' Right End') !== false)||(strpos($products[$i]['name'],' Left End') !== false)){
				
					if(strpos($products[$i]['name'],'EP11') !== false){
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
						$postArray=array(12,18,22);
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
							//echo'<b style="color:red;">'; print_r($array[0]); echo'</b><br />';
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
					if(strpos($products[$i]['name'],'EP15') !== false){
						$postArray=array(18,22);
						$glassArray=array(12,18,24,30,36,42);
						$array = explode('"', stripslashes(str_replace("EP15-","",$_SESSION['product_final1'][$l]['val'])));
						echo'<b style="color:red;">';print_r($products[$i]['name']);echo'</b><br />';
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
							//echo'<b style="color:red;">'; print_r($array[0]); echo'</b><br />';
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
                            $newname.=" Custom Products".$custom;
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
                            $newname.=" Custom Products".$custom;
							//$doub_star=true;
                        }
						/*if(in_array($array[0],$glassArray)&&($array[1]=='')){
							//echo "Not Custom";
						}else
						if((trim($array[0])=='17-1/4')&&in_array($array[1],$glassArray)&&($array[1]!='')){
						
							//echo " Not custom";
						}else{
							$newname.=" Custom Products".$custom;
						}*/
				
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
                            $newname.=" Custom Products".$custom;
							//$doub_star=true;
                        }
				
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
                            $newname.=" Custom Products".$custom;
                            //$doub_star=true;
                        }
						//if(in_array($array[0],$glassArray)&&($array[1]=='')){
							//echo "Not Custom";
						//}else
						//{
							//$newname.=" Custom Products".$custom;
						//}
				
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
                            $newname.=" Custom Products".$custom;
                            //$doub_star=true;
                        }
						
						
						//$glassArray=array(12,18,24,30,36,42);
						//$array = explode('"', stripslashes(str_replace("EP36-","",$_SESSION['product_final1'][$l]['val'])));
						
						//if(in_array($array[0],$glassArray)&&($array[1]=='')){
							//echo "Not Custom";
						//}else
						//{
							//$newname.=" Custom Products".$custom;
						//}
				
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
                            $newname.=" Custom Products".$custom;
							//$doub_star=true;
                        }
				
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
				
				$url = '<a href="' . tep_href_link(/*FILENAME_PRODUCT_INFO ,*/ 'product_info1.php?products_id=' . $products[$i]['id']) . '">' . tep_image(DIR_WS_IMAGES . $products[$i]['image'], $products[$i]['name'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT) . '</a>';
				if($_SESSION['product_final1'][$l]['custom']=='beyond'){
					$newname=$products[$i]['name'];
					$newdesc=$products[$i]['description'];
				} else if($_SESSION['product_final1'][$l]['custom'] == 'Yes'){
					$url = tep_image(DIR_WS_IMAGES . $products[$i]['image'], $products[$i]['name'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT);
				}
				if(!empty($_SESSION['product_final1'][$l]['wt'])){
      				$products[$i]['final_price']=round($products[$i]['final_price']*$_SESSION['product_final1'][$l]['wt']);
      				$new+=$products[$i]['final_price'];
      				
      			}
			$_SESSION['product_final'][$l]=array('id'=>$products[$i]['id'],'name'=>$newname,'amt'=>$products[$i]['final_price'],'price'=>$currencies->display_price($products[$i]['final_price'], tep_get_tax_rate($products[$i]['tax_class_id']), $_SESSION['product_final1'][$l]['qty']),'qty'=>$_SESSION['product_final1'][$l]['qty'],'model'=>$products[$i]['model'],'wt'=>$_SESSION['product_final1'][$l]['wt'])	;
				
				 echo '      <tr>';	     
      $products_name = '<table border="0" cellspacing="0" cellpadding="5" >' .
                       '  <tr >' .
					   '<table border="0" cellspacing="0" cellpadding="0" style="border:1px solid #ccc; padding:10px; " ><tr><td>'.
                       '    <td align="left"  width="120px" valign="top" >'.$url.'</td>' .
                       '    <td ><a href="javascript:void(0)"><strong>' . $newname . '</strong></a><br>'.$newdesc;

      if (STOCK_CHECK == 'true') {
        $stock_check = tep_check_stock($products[$i]['id'], 1);
        if (tep_not_null($stock_check)) {
          $any_out_of_stock = 1;

          $products_name .= $stock_check;
        }
      }

      if (isset($products[$i]['attributes']) && is_array($products[$i]['attributes'])) {
        reset($products[$i]['attributes']);
        while (list($option, $value) = each($products[$i]['attributes'])) {
          $products_name .= '<br /><small><i> - ' . $products[$i][$option]['products_options_name'] . ' ' . $products[$i][$option]['products_options_values_name'] . '</i></small>';
        }
      }

      $products_id = $products[$i]['id'];
       $pos = strpos($products_id, '{');
	    if($pos) {
	        $products_id = substr($products_id, 0, $pos);
	    } 

      $products_name .=	'   '  .
						'  ' .
                        '';
      echo '        <td valign="top">' . $products_name . '</td>' .
           '        <td valign="top" align="left" width="5%">'.tep_draw_input_field('cart_quantity1[]', $_SESSION['product_final1'][$l]['qty'], 'class="cart" size="4"') . tep_draw_hidden_field('products_id1[]', $products[$i]['id'],'id="pro"') .tep_draw_hidden_field('custom_val[]', $_SESSION['product_final1'][$l]['val']) .tep_draw_hidden_field('custom_type[]', $_SESSION['product_final1'][$l]['custom']).(!empty($_SESSION['product_final1'][$l]['wt'])?tep_draw_hidden_field('wt[]', $_SESSION['product_final1'][$l]['wt']):"") .'<br><br><table><tr><td>' .tep_image_submit("button_update_new.gif",  'Update').'</td><td><a href="' . tep_href_link(FILENAME_SHOPPING_CART, 'products_id=' . $products[$i]['id']."&qty=".$_SESSION['product_final1'][$l]['qty'] ."&val=".$_SESSION['product_final1'][$l]['val']."&custom=".$_SESSION['product_final1'][$l]['custom']. '&action=remove_product') . '">'.tep_image_button("remove.gif","Remove").'</a></td><td><a href="'.tep_href_link(basename($PHP_SELF),  'action=add_wishlist&products_qty='.$_SESSION['product_final1'][$l]['qty'] .'&products_id=' . $products_id.'&prodetatil='.json_encode($_SESSION['product_final1'][$l])).'&attributes='.$_SESSION['product_final1'][$l]['val'].'"><img src=images/wishlist_icon.png height=20 border=0 title="Save for later"></a></td></tr></table></td>'.
           '        <td align="right" valign="top" width="5%"style="color:red ; font-size:12px; font-weight:bold;" ><strong>' . $currencies->display_price($products[$i]['final_price'], tep_get_tax_rate($products[$i]['tax_class_id']), $_SESSION['product_final1'][$l]['qty']) . '</strong></td>' .
                                         '      </tr>'. '</table>';

	
										
	 echo '   </td> ' .
                        '  </tr>' ;
				
				
				
				
				break;
			}
			

		}
				
			
		$l++;

	}	
	
    
			
	?>		
	<span class="custompr"></span>
		<?php	
						
	
	
	

    for ($i=0, $n=sizeof($products); $i<$n; $i++) {}                    
?>

    </table>
        <!--Coading for the custom days in cart message!!-->
        <?php
            $var1=array();
            $i=0;
            $var=tep_db_query("select * from ".TABLE_CART_MESSAGE);
            while($row=tep_db_fetch_array($var)){
                $var1[$i]=$row['value'];
                $i++;
            }   
        ?>
    </div>
    
    </form><div  class="form_white4 "  >
	<!--<h1>Tests Code</h1>-->
	
	<?php
	//$frostedrad=true;
	//$frostedsqu=true;
            if($doub_star||$trip_star||$doub_hash||$sin_hash||$frostedrad||$frostedsqu){
               if($customcheck){
                    echo '<div style="color:#000000;padding:8px 50px;border:1px solid #000000;background:YELLOW;float:left;width:718px;margin-left: 16px;" align="center" >';
                    if($trip_star){
                        echo '<p>*** for radius corner glass '.$var1[3] .' business days.</p>';
                    }
                    if($doub_star){
                        echo '<p>** for square corner glass '.$var1[2].' business days.</p>';
                    }
                    if($doub_hash){
                        echo '<p>## This products production leadtime is '.$var1[1].' business days.</p>';
                    }
                    if($sin_hash){
                        echo '<p># This products production leadtime is '.$var1[0].' business days.</p>';
                    }
                    echo '</div>';
                }
            }
        ?>
	<?php 
	$tis=0;
	
	
	if(($_SESSION['product_final1'][$tis]['custom'])=='Yes') { 
	$l=0;
	$array = explode(" ",$_SESSION['product_final1'][$l]['val']);
        
//        print_r($_SESSION['product_final1'][1]);
        
	if($array[0]=='Light'){ ?>
	
	<?}
	if($array[0]=='Heat'){						
	
	
	?> 
<!--<div style="color:#000000;padding:8px 50px;border:1px solid #000000;background:YELLOW;float:left;width:718px;margin-left: 16px;" align="center" >
	       # This products production leadtime is <?php //echo $var1[0];?> business days.
	<br />## This products production leadtime is <?php //echo $var1[1];?> business days. </div>-->

	<?php } else  { if($array[0]=='Light'){    ?>
	<?
	}else{
	?>
	
<!--	<div style="color:#000000;padding:8px 50px;border:1px solid #000000;background:YELLOW;float:left;width:718px;margin-left: 16px;" align="center" >
	       ** for square corner glass <?php //echo $var1[2];?> business days.
	<br />*** for radius corner glass <?php //echo $var1[3];?> business days. </div><? } } }else { } ?>-->
	
	<?php  
	//$frostedrad=true;
	//$frostedsqu=true;
	         if($frostedrad||$frostedsqu){
				if($customcheck){
				}
				else{
				echo'<div style="color:#000000;padding:8px 50px;border:1px solid #000000;background:YELLOW;float:left;width:718px;margin-left: 16px;" align="center" >';
				
			if($trip_star){
                       echo '<p>*** for radius corner glass '.$var1[3] .' business days.</p>';
                   }
                    if($doub_star){
                        echo '<p>** for square corner glass '.$var1[2].' business days.</p>';
                    }
				echo'</div>';
				}
			 }
	?>
          
        <?php if (CARTSHIP_ONOFF == 'Enabled') { require(DIR_WS_MODULES . 'shipping_estimator.php'); } else {}; ?>
      </div>
<?php
    if ($any_out_of_stock == 1) {
      if (STOCK_ALLOW_CHECKOUT == 'true') {
?>

    <p class="stockWarning" align="center"><?php echo OUT_OF_STOCK_CAN_CHECKOUT; ?></p>

<?php
      } else {
?>

    <p class="stockWarning" align="center"><?php echo OUT_OF_STOCK_CANT_CHECKOUT; ?></p>

<?php
      }
    }
?>

  <div>

  <div class="buttonSet" style="float: left; margin: 5px 0;width:100%;text-align:left;padding:5px;">
    <?php echo tep_image_submit("button_update.gif", IMAGE_BUTTON_CHECKOUTCHECKOUT, 'button').'<a href="'.tep_href_link(FILENAME_DEFAULT, "cPath=86").'" style="margin:5px;">'.tep_image_button("button_continue_shopping.gif", IMAGE_BUTTON_CONTINUE).'</a>'.'<a href="'.tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL').'" style="margin: -65px 20px 0 0;float:right; background:#ccc;">'.tep_image_button("button_checkout.gif", IMAGE_BUTTON_CHECKOUT, 'button').'</a>';?>
  </div>
</div>

<?php
  } else {
?>

<div class="contentContainer">
  <div class="contentText">
    <?php 	$message = "Your CART is Empty";
                                          echo "<script type='text/javascript'>alert('$message')</script>;
										  //window.location.href='index.php';</script>"; 
										  //echo TEXT_CART_EMPTY; ?>

    <p align="right" style="width: 140px;"><?php echo '<a href="'.tep_href_link(FILENAME_DEFAULT, "cPath=86").'">'.tep_image_button("continue.gif", IMAGE_BUTTON_CONTINUE).'</a>'; ?></p>
  </div>
</div>
</div>
<?php
  }
//
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
 
  echo $face;
  function ep5Desc($n1,$n2){
  		$desc="Qty 1- ";
  		$n1=explode('-',$n1);
		if($n1[1]==''){
			$desc=$desc.($n1[0]-2).' 1/2';
		} else {
			if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/4'; }
			if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-1).' '; }
			if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-1).' 1/4'; }
		}
		$desc=$desc." x ";
		$n2=explode('-',$n2);
		if($n2[1]==''){
			$desc=$desc.($n2[0]-2).' 1/8';
		} else {
			if($n2[1]=='1/4'){ $desc=$desc.($n2[0]-2).' 3/8'; }
			if($n2[1]=='1/2'){ $desc=$desc.($n2[0]-2).' 5/8'; }
			if($n2[1]=='3/4'){ $desc=$desc.($n2[0]-2).' 7/8'; }
		}
		
		return $desc;
  }
  function ep15Desc($n1,$n2){
  		$desc="Qty 1- ";
  		$n1=explode('-',$n1);
		if($n1[1]==''){
			$desc=$desc.($n1[0]-2).' 1/2';
		} else {
			if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/4'; }
			if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-1).' '; }
			if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-1).' 1/4'; }
		}
		$desc=$desc." x ";
		$n2=explode('-',$n2);
		if($n2[1]==''){
			$desc=$desc.($n2[0]-2).' 1/8';
		} else {
			if($n2[1]=='1/4'){ $desc=$desc.($n2[0]-2).' 3/8'; }
			if($n2[1]=='1/2'){ $desc=$desc.($n2[0]-2).' 5/8'; }
			if($n2[1]=='3/4'){ $desc=$desc.($n2[0]-2).' 7/8'; }
		}
		
		return $desc;
  }
  function ringep5Desc($n1,$n2){
  		$desc="Qty 1- ";
  		$n1=explode('-',$n1);
		if($n1[1]==''){
			$desc=$desc.($n1[0]-2).' 1/2';
		} else {
			if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/4'; }
			if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-1).' '; }
			if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-1).' 1/4'; }
		}
		$desc=$desc." x ";
		$n2=explode('-',$n2);
		if($n2[1]==''){
			$desc=$desc.($n2[0]-2).' 1/8';
		} else {
			if($n2[1]=='1/4'){ $desc=$desc.($n2[0]-2).' 3/8'; }
			if($n2[1]=='1/2'){ $desc=$desc.($n2[0]-2).' 5/8'; }
			if($n2[1]=='3/4'){ $desc=$desc.($n2[0]-2).' 7/8'; }
		}
		
		return $desc;
  }
  function MS($n1){
  		$desc=" ".$n1;
	
			
				
				
			
			return $desc;
  }function MS2($n2,$n1){
  		$desc="Qty 1- ";
  		$n2=explode('-',$n2);
		if($n2[1]==''){
			$desc=$desc.($n2[0]-2).' 1/2';
		} else {
			if($n2[1]=='1/4"'){ $desc=$desc.($n2[0]-2).' -3/4'; }
			if($n2[1]=='1/2"'){ $desc=$desc.($n2[0]-1).' '; }
			if($n2[1]=='3/4"'){ $desc=$desc.($n2[0]-1).' -1/4'; }
		}
		$desc=$desc." x ";
		$n1=explode('-',$n1);
		if($n1[1]==''){
			$desc=$desc.($n1[0]-2).' 1/8';
		} else {
			if($n1[1]=='1/4"'){ $desc=$desc.($n1[0]-2).' -3/8'; }
			if($n1[1]=='1/2"'){ $desc=$desc.($n1[0]-2).' -5/8'; }
			if($n1[1]=='3/4"'){ $desc=$desc.($n1[0]-2).' -7/8'; }
		}
		
		return $desc;
  }
    function es53Desc($n1,$n2){
  		$desc='Qty 1- 20" x ';
	$n1=explode('-',$n1);
			if($n1[1]==''){
				$desc=$desc.($n1[0]-2).' 1/8';
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
				if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
				if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
			}
			return $desc.'"';
		
		return $desc;
  }  
  function B950Desc($n1){
    $desc='Qty 1- 14" x ';
	$n1=explode('-',$n1);
			if($n1[1]==''){
				$desc=$desc.' '.($n1[0]-2);
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 1/4'; }
				if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 1/2'; }
				if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 3/4'; }
			}
			return $desc.'"';
  }
    function es31Desc($n1,$n2){
  		if(strcmp($n2, "+31")){
            $desc='Qty 2- 11 1/2" x ';
        }else{
            $desc='Qty 1- 14-3/8" x ';
        }	
	$n1=explode('-',$n1);
			if($n1[1]==''){
				$desc=$desc.($n1[0]-2).' 1/8';
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
				if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
				if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
			}
			return $desc.'"';
		
		return $desc;
  }  function es67Desc($n1,$n2){
  		if(!strcmp($n2,"+73")){
			$desc='Qty 2- 11 1/2" x ';
		}else{
			$desc='Qty 1- 14-3/8" x ';
		}
		
	$n1=explode('-',$n1);
			if($n1[1]==''){
				$desc=$desc.($n1[0]-2).' 1/8';
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
				if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
				if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
			}
			return $desc.'"';
		
		return $desc;
  }  
   function ep11Desc($n1,$n2){
  		$desc="Qty 1- ";
		$desc1="Qty 1- ";
		$n3=$n1;
		
		if($n2==''){
			
			$n1=explode('-',$n1);
			
			
			if($n1[1]==''){
				$desc=$desc.'11 1/2 x '.($n1[0]-2).' 1/8';
				$desc1=$desc1.'14 3/8 x '.($n1[0]-2).' 1/8';
			}else{
				$desc=$desc.'11 1/2 x ';
				$desc1=$desc1.'14 3/8 x ';
				if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8';$desc1=$desc1.($n1[0]-2).' 3/8'; }
				if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8';$desc1=$desc1.($n1[0]-2).' 5/8'; }
				if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8';$desc1=$desc1.($n1[0]-2).' 7/8'; }
			}
			
		}
		else{
			$n3=explode('-',$n3);
			$desc=$desc.'11 1/2 x';
			if($n3[1]==''){
				$desc1=$desc1.($n3[0]-3).' 1/8';
			} else {
				if($n3[1]=='1/4'){ $desc1=$desc1.($n3[0]-3).' 3/8'; }
				if($n3[1]=='1/2'){ $desc1=$desc1.($n3[0]-3).' 5/8'; }
				if($n3[1]=='3/4'){ $desc1=$desc1.($n3[0]-3).' 7/8'; }
			}
			$desc1=$desc1." x ";
			$n2=explode('-',$n2);
			if($n2[1]==''){
				$desc1=$desc1.($n2[0]-2).' 1/8';
				$desc=$desc.($n2[0]-2).' 1/8';
			} else {
				if($n2[1]=='1/4'){ $desc=$desc.($n2[0]-2).' 3/8';$desc1=$desc1.($n2[0]-2).' 3/8'; }
				if($n2[1]=='1/2'){ $desc=$desc.($n2[0]-2).' 5/8';$desc1=$desc1.($n2[0]-2).' 5/8'; }
				if($n2[1]=='3/4'){ $desc=$desc.($n2[0]-2).' 7/8';$desc1=$desc1.($n2[0]-2).' 7/8'; }
			}
		}
		return $desc."</p><p>".$desc1;
  }   function ed20TDesc($n1){
    $desc='';
	$n1=explode('-',$n1);
		if($n1[1]==''){
				$desc=$desc.($n1[0]-2).' 1/8';
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
				if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
				if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
			}
			return $desc.'"';
  }  
  function edT2Desc($n1){
    $desc='';
	$n1=explode('-',$n1);
		if($n1[1]==''){
				$desc=$desc.($n1[0]-2).' 1/8';
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
				if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
				if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
			}
			return $desc.'"';
  }   function edLEPDesc($n1,$n2){
  	//$desc="Qty 1- ";
		//$desc1="Qty 1- ";
		//$n3=$n1;
		$n3=explode('-',$n2);
		$n1=$n1;
		if($n3[2]==$n1){
			
			//$desc1="dcdfvdv";
			
		}
		else{
			//$n3=explode('-',$n3);
			$desc=$n1;
		$n2=$n2;
		$n1=$n1;
		  //$desc=$n1;
		  
				if($n2=='1/4"'){ $desc=$desc.($n1-2).' 3/8';$desc1=$desc1.($n1-2).' 1/4'; }
				if($n2=='1/2"'){ $desc=$desc.($n1-2).' 5/8';$desc1=$desc1.($n1-2).' 1/2'; }
				if($n2=='3/4"'){ $desc=$desc.($n1-2).' 7/8';$desc1=$desc1.($n1-2).' 3/4'; }
			
			//$desc1=$desc1." x ";
			
		}
		return $desc1;
  }
   function es29Desc($n1){
    $desc='Qty 1- 11 1/2" x ';
	$n1=explode('-',$n1);
		if($n1[1]==''){
				$desc=$desc.($n1[0]-2).' 1/8';
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
				if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
				if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
			}
			return $desc.'"';
  }  function es29TDesc($n1,$l,$gls,$lngt){
    $desc='Qty 1- 11 1/2" x ';
	$l1=$l2=$l3=$l4=0;
	if($gls=="FG"){
		$l1=str_replace('"GL',"",$l[1]);
		if($l[2]!==""){
			$l2=str_replace('"GL',"",$l[2]);
		}
		
	}else{
		
		$l1=str_replace('"/28TG',"",$l[1]);
		if($l[2]!==""){
			$l2=str_replace('"/28TG',"",$l[2]);
		}
		
	}
			if($l2==''){
				if($gls=="FG"){
					$l1=($l1-2).' 1/8';
				}else{
					$l1=($l1-2).' 1/8';
				}
				
			}else{
				if($gls=="FG"){
					if($l2=='1/4'){ $l1=($l1-2).' 3/8'; }
					if($l2=='1/2'){ $l1=($l1-2).' 5/8'; }
					if($l2=='3/4'){ $l1=($l1-2).' 7/8'; }
				}else{
					if($l2=='1/4'){ $l1=($l1-2).' 3/8'; }
					if($l2=='1/2'){ $l1=($l1-2).' 5/8'; }
					if($l2=='3/4'){ $l1=($l1-2).' 7/8'; }
				}
			}
			if($gls=="FG"){
				$l4='Qty 1- 11-1/2" x '.$l1.'"';
			}else{
				$l4='Qty 1- '.($lngt-13).'-1/2" x '.$l1.'"';
			}
			//echo $l1."new";
	$n1=explode('-',$n1);
	
			if($n1[1]==''){
				$desc=$desc.($n1[0]-2).' 1/8';
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc; }
				if($n1[1]=='1/2'){ $desc=$desc; }
				if($n1[1]=='3/4'){ $desc=$desc; }
			}
			//echo $desc;
			return $l4;
  } function es82TDesc($n1){
    $desc='Qty 1- 11 1/2" x ';
	$n1=explode('-',$n1);
			if($n1[1]==''){
				$desc=$desc.' ';
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc; }
				if($n1[1]=='1/2'){ $desc=$desc; }
				if($n1[1]=='3/4'){ $desc=$desc; }
			}
			return $desc;
  } function es82T1Desc($n1){
    $desc='';
	$n1=explode('-',$n1);
			if($n1[1]==''){
				$desc=$desc.' ';
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc; }
				if($n1[1]=='1/2'){ $desc=$desc; }
				if($n1[1]=='3/4'){ $desc=$desc; }
			}
			return $desc;
  } 
  function es90TDesc($n1){
    $desc='Qty 1- 11 1/2" x ';
	$n1=explode('-',$n1);
			if($n1[1]==''){
				$desc=$desc.' ';
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc; }
				if($n1[1]=='1/2'){ $desc=$desc; }
				if($n1[1]=='3/4'){ $desc=$desc; }
			}
			return $desc;
  } function es90T1Desc($n1){
    $desc='';
	$n1=explode('-',$n1);
			if($n1[1]==''){
				$desc=$desc.' ';
				
			}else{
				if($n1[1]=='1/4'){ $desc=$desc; }
				if($n1[1]=='1/2'){ $desc=$desc; }
				if($n1[1]=='3/4'){ $desc=$desc; }
			}
			return $desc;
  }
// print_r($_SESSION['product_final']);
?>
<script type="text/javascript">
$(document).ready(function(){
 
 
 $('.cart').change(function(){
 	var i=0;
	var str="";
	var idArray=new Array(); 
 	$("input[type=hidden][id^=pro][value]").each(function(){
    	
		idArray[i]=$(this).val();
		
		i++;
	})
	//return uniqe array start
	b = {};
	for (var i = 0; i < idArray.length; i++) {
		b[idArray[i]] = idArray[i];
	}
	c = [];
	for (var key in b) {
		c.push(key);
	}
	//end unique array
	var str="";
	for(j=0;j<c.length;j++){
		i=0;
		var qty=0;
		$("input[type=hidden][id^=pro][value]").each(function(){
    	
			if($(this).val()==c[j]){
				
				qty+=$('.cart').eq(i).val()-0;
			}
		
		i++;
		})
		str+='<input type="hidden" value="'+qty+'" name="cart_quantity[]" >';
		str+='<input type="hidden" value="'+c[j]+'" name="products_id[]" >';
		
		
	}
	$('.custompr').html(str);
 })


})
</script>