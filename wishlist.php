<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/
  require("includes/application_top.php");
  //echo "<pre>"; print_r($wishlist->finalArray); die;
    if(!tep_session_is_registered("customer_id")){
        $wishlist->isNotLogin = true;
        tep_redirect(tep_href_link("login.php"));
    }
  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_SHOPPING_CART);
  
$page_title='Sneeze Guard | Portable Sneezeguard Wishlist- ADM Sneezeguards';
$page_description='ADM Sneezeguards is able to custom feature make sneeze guard and Glass barriers, this is a amazing choice for shops, markets, Grocery, Banks, catering, supermarkers, convenience stores and medical centres.';
$page_keyword='Custom line Business Sneeze Guards, Chosse sneeze guard from store, Sneeze Guard Online shopping, Wishlist, ADM Sneezeguard account, online protective sneeze guard';
  include('includes/header_new_design.php'); 

?> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        var formAction = '<?php echo tep_href_link("wishlist.php", tep_get_all_get_params(array('action')) . 'action=add_wishlist_to_cart') ?>';
        $(document).ready(function(){
            $(".add-model").click(function(){
                var newForm = $('<form>', {
                    'action': formAction,
                    'method': 'post'                   
                });
                var inputclass = $(this).attr('data-name');
                var product_id = $("."+inputclass);
//alert(product_id);
                $.each(product_id, function(key, product){                    
                    var qty = parseInt($(product).attr("data-qty"));
                    var datacustom = $(product).attr("data-custom");
                    var model_name = $(product).attr("data-model-name");
                    var model_type = $(product).attr("data-model-type");
                    while(qty > 0) {
                        $(newForm).append($('<input>', {
                            'name': 'products_id[]',
                            'value': product.value,
                            'type': 'hidden'
                        }));
                        $(newForm).append($('<input>', {
                            'name'  : 'data_custom[]',
                            'value' : JSON.stringify({custom : datacustom,  id : product.value, model_name : model_name, model_type : model_type}),
                            'type'  : 'hidden'
                        }));
                        qty--;
                    }
                });
                $("form[name='custom-form']").html($(newForm).html());
                $("form[name='custom-form']").removeAttr("onsubmit");
                $("form[name='custom-form']").submit();                
            });

			$(".addtocart").click(function(){
				javascript:document.forms[$(this).data('id')].submit();
			})
        })

    </script>
	
	
	<style>

	.image  img{
		width: 100% !important;;
		height: auto !important;
	}
        
        @media screen and (max-width: 768px) {
          
        }
        @media screen and (max-width: 576px) {
            
			.titleh a img{
				width: 40px !important ;
			}
			.titleh  input{
				width: 56px !important ;
			}
        }
    </style>

	<div class="mt-5">
        <h1>&nbsp;</h1>
    </div>
    <h2 class="font-weight-bold text-center">My Wishlist </h3>
								<hr>
                        
                            <?php 
                                echo tep_draw_form('custom-form', tep_href_link("wishlist.php", tep_get_all_get_params(array('action')) . 'action=add_wishlist_to_cart'))
                            ?>
                            </form>
                    
                            <?php 
                            if($wishlist->count_contents() == 0) {
								$wishlist->removeSession();
							}
							?>
							<?php
                            if(empty($wishlist->products)) { ?>
                                <div class="container">
								<div class="row shoppingcart-row">
								<div class="col-sm-4"></div>
								<div class="col-sm-4 text-center">
								<img src="img/wishlist-black.png" alt="Wishlist Empty" title="Empty Wishlist" width="50%">
								<div class="text-center mt-3 mb-2">
								<p>Your wishlist is empty .</p>
								<p><small>Add item to it now.</small></p>
								<a class="btn btn-dark" href="<?=tep_href_link('instock-sneeze-guard.php',"cPath=86")?>">SHOP NOW</a>
								</div>
								</div>
								<div class="col-sm-4"></div>
								</div>
								</div>
                            <?php } else { ?>
    <style>
        .add-model {
            float:right;
            margin-right:10px;
        }
		
		
		td {
    color: #333131;
    font-family: tahoma,verdana,arial;
}
A:link {
    text-decoration: none;
    color: #3d3c3c;
}
    </style>
<div class="container">
<?php
    $wishlist->reset_wishlist();
    $productGroups = $wishlist->getProductGroup();
    foreach($productGroups as $groupName => $productGroup) {
    $addToCart = "";
    $newGroup = str_replace(" ", "", $groupName);
    $modeld = explode("-", $groupName);
    $model_name = $modeld[0];
    $model_type = $modeld[1];
    if($groupName != "Parts-List") {
        $group = explode("-", $groupName);
        $model_name = $group[0];
        $model_type = $group[1];
        if(count($group) > 2) {
            $group[0] = $group[0] . "-" . $group[1];
            $model_name = $group[0];
            $model_type = $group[2];
        }
		

        $addToCart = tep_image_submit23('add_to_cartss.png', IMAGE_BUTTON_IN_CART, "button", null, $newGroup).'<a href="' . tep_href_link("wishlist.php", 'model_name=' . $model_name.'&model_type='.$model_type.'&action=remove_model_wishlist') . '" style="float:right;margin-right:27px;"><img src="includes/languages/english/images/buttons/remove_wishlist.png" style="width:5rem;" alt="Remove adm" title=" Remove "></a>';

		
	} ?>

	<?php
    echo "<h3 class='titleh mt-2 alert-dark p-2'>".$groupName.$addToCart."</h3>";
	
	
    $finalArray = array();
	$finalArray = $wishlist->getFinalGroup($productGroup);
   //echo "<pre>"; print_r($wishlist->finalArray); die;
    $products = $wishlist->get_products($productGroup);
	
	//echo'<b style="color:red;"><pre>';  print_r($finalArray);echo'</b>';
	
	
	$l=0;
	$temp=0;
	foreach($finalArray as $key=>$val) {
        $pos = strpos($finalArray[$key]['id'], '{');
        $ids = array();
        if($pos) {
            $ids[] = substr($finalArray[$key]['id'], 0, $pos);
            $remaining = substr($finalArray[$key]['id'], $pos+1);
            while($pos = strpos($remaining, '}')) {
                $index = substr($remaining, 0, $pos);
                $remaining = substr($remaining, $pos+1);
                $pos1 = strpos($remaining, '{');
                if(!$pos1) {
                    $val = $remaining;
                    $remaining = "";
                } else {
                    $val = substr($remaining, 0, $pos1);
                    $remaining = substr($remaining, $pos1+1);
                }
                $ids[$index] = $val;
            }
            if(!empty($ids)){
                //$finalArray[$key]['qty'] = isset($productGroup[$finalArray[$key]['id']]) ? $productGroup[$finalArray[$key]['id']]['product_qty'] : $productGroup[$ids[0]]['product_qty'];
                $finalArray[$key]['id'] = $ids[0];
                unset($ids[0]);
            }
        }        
		for ($i=0, $n=sizeof($products); $i<$n; $i++) {
            $pos = strpos($products[$i]['id'] , $finalArray[$key]['id']);
            if($pos === 0) {
                $pos = true;
            }
            if($pos) {
                $products[$i]['id'] = $finalArray[$key]['id'];
            }
            if(!empty($ids)) {
                $products[$i]['attributes'] = $ids;
            }
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
            
            if(!strcmp($finalArray[$i]['custom'],"Yes")) {
                $customcheck=true;
            }
			if($finalArray[$l]['id']==$products[$i]['id']) {
				if($products[$i]['id']==$roasted_id) {
                    $products[$i]['final_price']=$roasted;
                    $product_querytees = tep_db_query("update " . TABLE_PRODUCTS . " set products_price=".$products[$i]['final_price']." where products_id = ".$roasted_id."");
                }
                if (strpos($finalArray[$l]['val'],'SLV') !== false){
					if($finalArray[$l]['val']=='SLV'){
						$newname=$products[$i]['name'];
						$newdesc=$products[$i]['description'];
					} else {
						$newname=stripslashes($finalArray[$l]['val']);
						$newdesc=$products[$i]['description'];
						$glassArray=array(24,30,36,42,48,54,60,66);
						$array = explode('"', stripslashes(str_replace("SLV GL ","",$newname)));
						if(!in_array($array[0],$glassArray)){
							$newname.=" Custom Products***";
                            $trip_star=true;
						}
					}
				} else if ( strpos($products[$i]['name'],'B950P') !== false || 
                        strpos($products[$i]['name'],'EP950') !== false || 
                        strpos($products[$i]['name'],'B950') !== false ){
					$ck=0;
					if($finalArray[$l]['val']=='B950'){
						$newname=$products[$i]['name'];
						$newdesc=$products[$i]['description'];
					}else{						
						$newname=stripslashes($finalArray[$l]['val']);
						if(strpos($products[$i]['name'],"Stainless")!==false){
							if(strpos($products[$i]['name'],"LEP")){
								$newname=$newname." LEP Plexi-Glass";
							} else {
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
						if((strpos($finalArray[$l]['val'],'GL') !== false)&&(strpos($products[$i]['name'],"SL")!==false)){
							$newname=$newname." Stainless Steel";
						}else if ( (strpos($finalArray[$l]['val'],'GL') !== false) && 
                                    (strpos($products[$i]['name'],'B950') === false)){
							$newname=$newname." Coated Black";
						}
						if(strpos($finalArray[$l]['val'],'GL') !== false){
						    $newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("B950-","",$finalArray[$l]['val'])));
						    $qtyNew34=B950Desc($array[0]);
							$array = explode('<p>', $newdesc);							 
							  $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
						}else{
							$newdesc=$products[$i]['description'];
						}
						if(strpos($finalArray[$l]['val'],'LEP') !== false){
							 $newdesc=stripslashes(str_replace("\"LEP","",str_replace("B950-g","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"X')));
							 $newdesc=$products[$i]['description'];
						}
						if(strpos($finalArray[$l]['val'],'REP') !== false){
							 $newdesc=stripslashes(str_replace("\"REP","",str_replace("B950-g","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"X')));
							 $newdesc=$products[$i]['description'];
						}
					}
					if (strpos($newdesc,'Battery pack') !== false){
						$newname=$newname."-BP";
					}
                    if (strpos($newname,'LYT') !== false){
					      $newdesc=stripslashes($finalArray[$l]['val'])." LED LIGHT BAR WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
					}
					if ((strpos($products[$i]['name'],'LEP') !== false)||(strpos($products[$i]['name'],'REP') !== false)){
						$postArray=array(12,18,24);
						$array = explode('"', stripslashes(str_replace("B950-g","",$finalArray[$l]['val'])));
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
					if($finalArray[$l]['val']=='HL'){
						$newname=$products[$i]['name'];
						$newdesc=$products[$i]['description'];
					}else{
						$newname=stripslashes($finalArray[$l]['val']);
						if(strpos($finalArray[$l]['val'],'GL') !== false){
						}else{
							$newdesc=$products[$i]['description'];
						}
					}
					if(strpos($products[$i]['name'],'SL') !== false){
						$newname=$newname."-"."Stainless Steel ";
						$newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("HL-","",$finalArray[$l]['val'])));
						    $qtyNew34=B950Desc($array[0]);
							$array = explode('<p>', $newdesc);
							  $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Stainless Steel"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
					} 
                    if(strpos($products[$i]['name'],'AL') !== false) {
						$newname=$newname."-"."Aluminum ";
						$newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("HL-","",$finalArray[$l]['val'])));
						    $qtyNew34=B950Desc($array[0]);
							$array = explode('<p>', $newdesc);
                            $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Aluminum"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
					}
                    if(strpos($products[$i]['name'],'PC') !== false){
                        $newname=$newname."-"."Powder Coated Black ";
						$newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
                        $array = explode('"', stripslashes(str_replace("HL-","",$finalArray[$l]['val'])));
                        $qtyNew34=B950Desc($array[0]);
                        $array = explode('<p>', $newdesc);
                        $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Powder Coated Black"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
					} 
					if (strpos($newname,'Battery pack') !== false){
						$newname=$newname."-BP";
					}
                    if (strpos($newname,'IC') !== false){
                        $newname=$newname."-"." Infinite Heat Lamp Control ##";
                        $newdesc=stripslashes($finalArray[$l]['val'])."  Infinite Heat Lamp Control";
					}
					if ((strpos($products[$i]['name'],'LEP') !== false)||(strpos($products[$i]['name'],'REP') !== false)){
						$postArray=array(12,18,24);
						$array = explode('"', stripslashes(str_replace("B950-g","",$finalArray[$l]['val'])));
						if(in_array($array[0],$postArray)){
							//echo " Not custom";
						}else{
							$newname.=" Custom Products ***";
                            $trip_star=true;
						}
					}
				} else if (strpos($products[$i]['name'],'HL') !== false){
					if($finalArray[$l]['val']=='HL'){
						$newname=$products[$i]['name'];
						$newdesc=$products[$i]['description'];
					} else {
						$newname=stripslashes($finalArray[$l]['val']);
						if(strpos($finalArray[$l]['val'],'GL') !== false){

						}else{
							$newdesc=$products[$i]['description'];							
						}
					}
					if(strpos($products[$i]['name'],'SL') !== false){
						$newname=$newname."-"."Stainless Steel #";
                        $sin_hash=true;
						$newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
                        $array = explode('"', stripslashes(str_replace("HL-","",$finalArray[$l]['val'])));
                        $qtyNew34=B950Desc($array[0]);
                        $array = explode('<p>', $newdesc);
                        $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Stainless Steel<br>(note: heat lamp housing is anodized aluminum)"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
					}	
                    if(strpos($products[$i]['name'],'AL') !== false){
						$newname=$newname."-"."ALUMINUM #";
                        $sin_hash=true;
						$newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
                        $array = explode('"', stripslashes(str_replace("HL-","",$finalArray[$l]['val'])));
                        $qtyNew34=B950Desc($array[0]);
                        $array = explode('<p>', $newdesc);
                        $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Aluminum<br>(note: heat lamp housing is anodized aluminum)"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
					}
                    if(strpos($products[$i]['name'],'PC') !== false){
                        $newname=$newname."-"."Powder Coated Black #";
                        $sin_hash=true;
                        $newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
                        $array = explode('"', stripslashes(str_replace("HL-","",$finalArray[$l]['val'])));
                        $qtyNew34=B950Desc($array[0]);
                        $array = explode('<p>', $newdesc);
                        $newdesc="<p>".$array[0]." assembly centerline to centerline in Brushed Powder Coated Black<br>(note: heat lamp housing is anodized aluminum)"."</p><p>".$array[1]."</p><p>".$qtyNew66."</p><p>".$array[3]."</p>";
					} 
					if (strpos($newname,'Battery pack') !== false){
						$newname=$newname."-BP";
					}
					if (strpos($newname,'IC') !== false){
                        $newname=$newname."-"." Infinite Heat Lamp Control ##";
                        $doub_hash=true;
                        $newdesc=stripslashes($finalArray[$l]['val'])."  Infinite Heat Lamp Control";
					}
					if ((strpos($products[$i]['name'],'LEP') !== false)||(strpos($products[$i]['name'],'REP') !== false)){
						$postArray=array(12,18,24);
						$array = explode('"', stripslashes(str_replace("B950-g","",$finalArray[$l]['val'])));
						if(in_array($array[0],$postArray)){
							//echo " Not custom";
						}else{
							$newname.=" Custom Products ***";
                            $trip_star=true;
						}
					}
				} else if (strpos($products[$i]['name'],'B950') !== false){
					if($finalArray[$l]['val']=='B950'){
						$newname=$products[$i]['name'];
						$newdesc=$products[$i]['description'];			
					}else{
						$newname=stripslashes($finalArray[$l]['val']);
						if(strpos($finalArray[$l]['val'],'GL') !== false){
						    $newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("B950-","",$finalArray[$l]['val'])));
						    $qtyNew34=B950Desc($array[0]);
							$array = explode('<p>', $newdesc);
                            $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
						}else{
							$newdesc=$products[$i]['description'];
						}
						if(strpos($finalArray[$l]['val'],'LEP') !== false){
                            $newdesc=stripslashes(str_replace("\"LEP","",str_replace("B950-g","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"X')));
						}
						if(strpos($finalArray[$l]['val'],'REP') !== false){
                            $newdesc=stripslashes(str_replace("\"REP","",str_replace("B950-g","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"X')));
						}
					}
					if ((strpos($products[$i]['name'],'LEP') !== false)||(strpos($products[$i]['name'],'REP') !== false)){
						$postArray=array(12,18,24);	
						$array = explode('"', stripslashes(str_replace("B950-g","",$finalArray[$l]['val'])));
						if(in_array($array[0],$postArray)){
							//echo " Not custom";
						}else{
							$newname.=" Custom Products ***";
                            $trip_star=true;
						}
					}
				} else if (strpos($products[$i]['name'],'ED20') !== false){
					if($finalArray[$l]['val']=='ED20'){
						$newname=$products[$i]['name'];
						$newdesc=$products[$i]['description'];
					}else{
						$newname=stripslashes($finalArray[$l]['val']." Custom Products");
                        $newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
                        $newdesc=$products[$i]['description'];
                        $arr=explode("-", $newname);
                        if(sizeof($arr)>=3){
                            $counter=$arr[2];
                            $post=$arr[0]."-".$arr[1];
                        } else {
                            $counter=$arr[1];
                            $post=$arr[0];
                        } 
                        if (strpos($products[$i]['name'],'ED20EPBSS') !== false){
							$newname="ED20 END PANEL GLASS CLIP";
                        } else {
                            $newname="ED20-CW".$counter." Custom Products ";
                        }
                        /*for light bar*/					  
                        if(strpos($products[$i]['name'],'LYT') !== false) {
							$newname="ED20-" .$post."-".$counter." Custom Products**";	
                        }	
                        /* for glass*/
                        if ( strpos($products[$i]['name'],'GL') !== false&&strpos($products[$i]['name'],'SLP') === false) {
                            $newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ED20-","",$finalArray[$l]['val'])));
			                //$array2 = explode('<p>', $array);
				            $qtyNew345=edT2Desc($array[1]);
						    $qtyNew34=ed20TDesc($array[0]);
							$array = explode('<p>', $newdesc); 
                            $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".$qtyNew34." x ".$qtyNew345."</p><p>".$array[3]."</p>";
                            $newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
							$arr=explode("-", $newname);
							if(sizeof($arr)>=3){
								$counter=$arr[2];
								$post=$arr[0]."-".$arr[1];
							} else {
								$counter=$arr[1];
								$post=$arr[0];
							} 
                            $newname="ED20-PH".$post."-".$counter." Custom Products**";
                            $doub_star=true;
                        }
                        if (strpos($products[$i]['name'],'SLP') !== false ){
                            $newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ED20-","",$finalArray[$l]['val'])));
						    $qtyNew34=B950Desc($array[0]);
							$array = explode('<p>', $newdesc);
                            $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
                            $newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
                            $newde=$products[$i]['name'];
                            $arr2=explode("ED20", $newde);
                            $counter=$arr2[1];
                            $arr3 = str_split($counter, 3);
							$arr=explode("-", $newname);
							if(sizeof($arr)>=3) {
								$counter=$arr[2];
								$post=$arr[0]."-".$arr[1];
							} else {
								$counter=$arr[1];
								$post=$arr[0];
							} 
                            $newname="ED20-PH".$post."-"."CW".$counter." Left Shelf Arm"." Custom Products ".$arr3[1];
                        }
                        if (strpos($products[$i]['name'],'SRP') !== false ){
                            $newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ED20-","",$finalArray[$l]['val'])));
						    $qtyNew34=B950Desc($array[0]);
							$array = explode('<p>', $newdesc);
                            $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
                            $newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
                            $newde=$products[$i]['name'];
                            $arr2=explode("ED20", $newde);
                            $counter=$arr2[1];
                            $arr3 = str_split($counter, 3);
							$arr=explode("-", $newname);
							if (sizeof($arr)>=3) {
								$counter=$arr[2];
								$post=$arr[0]."-".$arr[1];
							} else {
								$counter=$arr[1];
								$post=$arr[0];
							} 
                            $newname="ED20-PH".$post."-"."CW".$counter." Right Shelf Arm"." Custom Products ".$arr3[1];
                        }
                        if (strpos($products[$i]['name'],'SCP') !== false ){
                            $newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ED20-","",$finalArray[$l]['val'])));
						    $qtyNew34=B950Desc($array[0]);
							$array = explode('<p>', $newdesc);
                            $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
                            $newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
                            $newde=$products[$i]['name'];
                            $arr2=explode("ED20", $newde);
                            $counter=$arr2[1];
                            $arr3 = str_split($counter, 3);
							$arr=explode("-", $newname);
							if (sizeof($arr)>=3) {
								$counter=$arr[2];
								$post=$arr[0]."-".$arr[1];
							} else {
								$counter=$arr[1];
								$post=$arr[0];
							} 
                            $newname="ED20-"."CW".$counter." Center Shelf Arm"." Custom Products ".$arr3[1];
                        }
                        if (strpos($products[$i]['name'],'FLANGE') !== false ) {
                            $newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ED20-","",$finalArray[$l]['val'])));
						    $qtyNew34=B950Desc($array[0]);
							$array = explode('<p>', $newdesc);
                            $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
                            $newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
							$arr=explode("-", $newname);
							if (sizeof($arr)>=3) {
								$counter=$arr[2];
								$post=$arr[0]."-".$arr[1];
							} else {
								$counter=$arr[1];
								$post=$arr[0];
							} 
                            $newname="ED20"." FLANGE COVER"." Custom Products";
                        }
                        /* for top glass*/
                        if (strpos($products[$i]['name'],'TG') !== false&&strpos($products[$i]['name'],'SLP') === false){
                            $newdesc=stripslashes(str_replace("TG","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ED20-","",$finalArray[$l]['val'])));
							$result = preg_replace("/[^a-zA-Z0-9]+/", "", html_entity_decode($array[1]));
							$array9 = explode('<p>', $result);
							$array9 = $array9[0];
							$arr9 = str_split($array9, 2);
						    //$qtyNew34=B950Desc($array[0]);
							$array = explode('<p>', $newdesc);
                            $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".$qtyNew345." x ".($arr9[0]-1).' 1/8'."</p><p>".$array[3]."</p>";
				            $newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
							$arr=explode("-", $newname);
							if(sizeof($arr)>=2) {
								$counter=$arr[0];
								$post=$arr[1];
								$arr2 = str_split($post, 1);
                                $newname="ED20-".$counter."-".$arr2[0].$arr2[1].$arr2[2].$arr2[3].$arr2[4]."CW".$arr2[5].$arr2[6].$arr2[7].$arr2[8]."Custom Products**";                                    
							} else {
								$counter=$arr[0];
                                $arr2 = str_split($counter, 1);
                                if(sizeof($arr2)>=8){
                                    $newname="ED20-".$arr2[0].$arr2[1].$arr2[2].$arr2[3]."CW".$arr2[4].$arr2[5].$arr2[6].$arr2[7]."**"; 
                                    //echo $newname;
                                } else {
                                    $newname="ED20-".$arr2[0].$arr2[1].$arr2[2]."CW".$arr2[3].$arr2[4].$arr2[5].$arr2[6].$arr2[7]; 
									//echo $newname; 
                                }
							}
                        }
                        //$newdesc=$products[$i]['description'];
						if (strpos($products[$i]['name'],'LP') !== false&&strpos($products[$i]['name'],'SLP') === false) {
							$newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
                            $newdesc=$products[$i]['description'];
                            $newde=$products[$i]['name'];
                            $arr2=explode("ED20", $newde);
                            $counter=$arr2[1];
                            $arr3 = str_split($counter, 2);
							$arr=explode("-", $newname);
							if (sizeof($arr)>=3) {
								$counter=$arr[2];
								$post=$arr[0]."-".$arr[1];
							} else {
								$counter=$arr[1];
								$post=$arr[0];
							}
                            $newname="ED20LP-CW".$counter."\"/PH".$post.$arr3[2];
						}

						if (strpos($products[$i]['name'],'RP') !== false&&strpos($products[$i]['name'],'SRP') === false){
                             $newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							
							$newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
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
							$newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
							//$newdesc=$products[$i]['description'];
							$array = explode('"', stripslashes(str_replace("ED20-","",$finalArray[$l]['val'])));
							$result = preg_replace("/[^a-zA-Z0-9]+/", "", html_entity_decode($array[1]));
							$array9 = explode('<p>', $result);
							$array9 = $array9[0];
							$arr9 = str_split($array9, 2);
							 $qtyNew346=edLEPDesc($arr[0],$arr[1]);
						    //$qtyNew34=B950Desc($array[0]);
							$array = explode('<p>', $newdesc);
							 
							  
							  $newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
                                
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
							$newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
							//$newdesc=$products[$i]['description'];
							$array = explode('"', stripslashes(str_replace("ED20-","",$finalArray[$l]['val'])));
							$result = preg_replace("/[^a-zA-Z0-9]+/", "", html_entity_decode($array[1]));
							$array9 = explode('<p>', $result);
							$array9 = $array9[0];
							$arr9 = str_split($array9, 2);
							 $qtyNew346=edLEPDesc($arr[0],$arr[1]);
						    //$qtyNew34=B950Desc($array[0]);
							$array = explode('<p>', $newdesc);
							  $newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
                                
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

							$newname= stripslashes(str_replace("ED20-","",$finalArray[$l]['val']));
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
					
					if($finalArray[$l]['val']=='ES82'){
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
							 $newname="ES82-".$arr2[5].$arr2[6]."GL";

							}
						
					
					}else{
						$newname=stripslashes($finalArray[$l]['val']);
						$newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ES82-","",$finalArray[$l]['val'])));
							
						    $qtyNew34=es29Desc($array[0]);
							$array = explode('<p>', $newdesc);
							 
							  $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
						     if ((strpos($products[$i]['name'],'TG') !== false || strpos($products[$i]['name'],'GL') !== false )&&strpos($products[$i]['name'],'SLP') === false){
							 $newdesc=stripslashes(str_replace("TG","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ES82-","",$finalArray[$l]['val'])));
			                //$array2 = explode('<p>', $array);
				            $qtyNew345=edT2Desc($array[0]);
						   $newname=$products[$i]['name'];
							  $arr=explode(" ", $newname);
                                $counter=$arr[0];
                                 
								 $arr2 = str_split($counter, 2);

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
				            $newname= stripslashes(str_replace("ES82-","",$finalArray[$l]['val']));

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
						$array = explode('"', stripslashes(str_replace("ES82-","",$finalArray[$l]['val'])));
						if(!in_array($array[0],$glassArray)){
							$newname.="".$custom;
						}else{
							//if(strlen(str_replace(" ","",$array[0]))>2){
								$newname.="".$custom;
							//}
						}
					}
					if (strpos($newdesc,'Top Glass') !== false){
						$array = explode('"', stripslashes(str_replace("ES82-","",$finalArray[$l]['val'])));
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
					
					if($finalArray[$l]['val']=='ES92'){
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
							 $newname="ES92LP-CW".$arr2[3];

							}
							if (strpos($products[$i]['name'],'RP') !== false&&strpos($products[$i]['name'],'SLP') === false){

							$newname=$products[$i]['name'];

							
							

							$arr=explode(" ", $newname);
                                $counter=$arr[0];
                                 
								 $arr2 = str_split($counter, 2);


							 $newname="ES92RP-CW".$arr2[3];

							}
							if (strpos($products[$i]['name'],'CP') !== false&&strpos($products[$i]['name'],'SLP') === false){

							$newname=$products[$i]['name'];

							
							

							$arr=explode(" ", $newname);
                                $counter=$arr[0];
                                 
								 $arr2 = str_split($counter, 2);


							 $newname="ES92CP-CW".$arr2[3];

							}
							
							if (strpos($products[$i]['name'],'GL') !== false&&strpos($products[$i]['name'],'SLP') === false){

							$newname=$products[$i]['name'];

							
							

							$arr=explode(" ", $newname);
                                $counter=$arr[0];
                                 
								 $arr2 = str_split($counter, 1);
							 $newname="ES92-".$arr2[5].$arr2[6]."GL";

							}
						
					
					}else{
						$newname=stripslashes($finalArray[$l]['val']);
						$newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ES92-","",$finalArray[$l]['val'])));
							
						    $qtyNew34=es29Desc($array[0]);
							$array = explode('<p>', $newdesc);
							 
							  $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
						     if ((strpos($products[$i]['name'],'TG') !== false || strpos($products[$i]['name'],'GL') !== false )&&strpos($products[$i]['name'],'SLP') === false){
							 $newdesc=stripslashes(str_replace("TG","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ES92-","",$finalArray[$l]['val'])));
			                //$array2 = explode('<p>', $array);
				            $qtyNew345=edT2Desc($array[0]);
						   $newname=$products[$i]['name'];
							  $arr=explode(" ", $newname);
                                $counter=$arr[0];
                                 
								 $arr2 = str_split($counter, 2);

							$array = explode('<p>', $newdesc);
							//echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
							if(strpos($newname,"TG")){
								
								$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-19).'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";
							 //echo'<b style="color:red">'; print_r($newdesc); echo'</b><br />';
							}else{
								if($arr[4]){
									$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
								}else{	
									$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".(11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
								}
							}
				            $newname= stripslashes(str_replace("ES92-","",$finalArray[$l]['val']));

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
						$array = explode('"', stripslashes(str_replace("ES92-","",$finalArray[$l]['val'])));
						if(!in_array($array[0],$glassArray)){
							$newname.="".$custom;
						}else{
							//if(strlen(str_replace(" ","",$array[0]))>2){
								$newname.="".$custom;
							//}
						}
					}
					if (strpos($newdesc,'Top Glass') !== false){
						$array = explode('"', stripslashes(str_replace("ES92-","",$finalArray[$l]['val'])));
						if(!in_array($array[0],$glassArray)){
							$newname.="".$custom;
						}else{
							//if(strlen(str_replace(" ","",$array[0]))>2){
								$newname.="".$custom;
							//}
						}
					}
					
					if(strpos($products[$i]['name'],'LYT') !== false){
								
							$newname= stripslashes(str_replace("ES92-","",$finalArray[$l]['val']));
                               // echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
							

					
							$newname="ES92-" .$newname."";
							$newdesc="" .$newname." LED LIGHT BAR";
							//$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." LYT Custom Products";
							}
							
							
							if(strpos($products[$i]['name'],'TUBE') !== false){
								
							$newname= stripslashes(str_replace("ES92-","",$finalArray[$l]['val']));
                               // echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
							

					
							$newname="ES92-" .$newname."";
							$newdesc="" .$newname." WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
							//$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." TUBE Custom Products";
							}
					
				}
				
				else if (strpos($products[$i]['name'],'ES90') !== false){
					
					if($finalArray[$l]['val']=='ES90'){
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
							
							if (strpos($products[$i]['name'],'GL') !== false&&strpos($products[$i]['name'],'SLP') === false){

							$newname=$products[$i]['name'];

							
							

							$arr=explode(" ", $newname);
                                $counter=$arr[0];
                                 
								 $arr2 = str_split($counter, 1);
							 $newname="ES90-".$arr2[5].$arr2[6]."GL";

							}
						
					
					}else{
						$newname=stripslashes($finalArray[$l]['val']);
						$newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ES90-","",$finalArray[$l]['val'])));
							
						    $qtyNew34=es29Desc($array[0]);
							$array = explode('<p>', $newdesc);
							 
							  $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
						     if ((strpos($products[$i]['name'],'TG') !== false || strpos($products[$i]['name'],'GL') !== false )&&strpos($products[$i]['name'],'SLP') === false){
							 $newdesc=stripslashes(str_replace("TG","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ES90-","",$finalArray[$l]['val'])));
			                //$array2 = explode('<p>', $array);
				            $qtyNew345=edT2Desc($array[0]);
						   $newname=$products[$i]['name'];
							  $arr=explode(" ", $newname);
                                $counter=$arr[0];
                                 
								 $arr2 = str_split($counter, 2);
									
							$array = explode('<p>', $newdesc);
							//echo'<b style="color:red">'; print_r($array); echo'</b><br />';
							if(strpos($newname,"TG")){
								$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-19).'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";
							
								
								
							}
							else{
								if($arr[4]){
									$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
								}else{	
									$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".(11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
								}
								}
				            $newname= stripslashes(str_replace("ES90-","",$finalArray[$l]['val']));

							$arr=explode("-", $newname);
							
                           
								
                                $newname="ES90-".$arr[0]."-".$arr[1]."Custom Products";
								$newname=str_replace('/TG','TG',$newname);
														
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
						$array = explode('"', stripslashes(str_replace("ES90-","",$finalArray[$l]['val'])));
						if(!in_array($array[0],$glassArray)){
							$newname.="".$custom;
						}else{
							//if(strlen(str_replace(" ","",$array[0]))>2){
								$newname.="".$custom;
							//}
						}
					}
					if (strpos($newdesc,'Top Glass') !== false){
						$array = explode('"', stripslashes(str_replace("ES90-","",$finalArray[$l]['val'])));
						if(!in_array($array[0],$glassArray)){
							$newname.="".$custom;
						}else{
							//if(strlen(str_replace(" ","",$array[0]))>2){
								$newname.="".$custom;
							//}
						}
					}
					
					if(strpos($products[$i]['name'],'LYT') !== false){
								
							$newname= stripslashes(str_replace("ES90-","",$finalArray[$l]['val']));
                               // echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
							

					
							$newname="ES90-" .$newname."";
							$newdesc="" .$newname." LED LIGHT BAR";
							//$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." LYT Custom Products";
							}
							
							
							if(strpos($products[$i]['name'],'TUBE') !== false){
								
							$newname= stripslashes(str_replace("ES90-","",$finalArray[$l]['val']));
                               // echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
							

					
							$newname="ES90-" .$newname."";
							$newdesc="" .$newname." WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
							//$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." TUBE Custom Products";
							}
					
				}
				
				else if (strpos($products[$i]['name'],'ES47') !== false){
					
					if($finalArray[$l]['val']=='ES47'){
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
							
							if (strpos($products[$i]['name'],'GL') !== false&&strpos($products[$i]['name'],'SLP') === false){

							$newname=$products[$i]['name'];

							
							

							$arr=explode(" ", $newname);
                                $counter=$arr[0];
                                 
								 $arr2 = str_split($counter, 1);
							 $newname="ES47-".$arr2[5].$arr2[6]."GL";

							}
						
					
					}else{
						$newname=stripslashes($finalArray[$l]['val']);
						$newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ES47-","",$finalArray[$l]['val'])));
							
						    $qtyNew34=es29Desc($array[0]);
							$array = explode('<p>', $newdesc);
							 
							  $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
						     if ((strpos($products[$i]['name'],'TG') !== false || strpos($products[$i]['name'],'GL') !== false )&&strpos($products[$i]['name'],'SLP') === false){
							 $newdesc=stripslashes(str_replace("TG","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ES47-","",$finalArray[$l]['val'])));
			                //$array2 = explode('<p>', $array);
				            $qtyNew345=edT2Desc($array[0]);
						   $newname=$products[$i]['name'];
							  $arr=explode(" ", $newname);
                                $counter=$arr[0];
                                 
								 $arr2 = str_split($counter, 2);
									
							$array = explode('<p>', $newdesc);
							//echo'<b style="color:red">'; print_r($array); echo'</b><br />';
							if(strpos($newname,"TG")){
							$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-19).'-'.'9/16"'.' x '.$qtyNew345.' Top Glass'."</p><p>".$array[3]."</p>";
								
							}
							else{
								if($arr[4]){
									$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".($arr2[4]-11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
								}else{	
									$newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>"."Qty-1, ".(11).'-'.'1/2"'.' x '.$qtyNew345.' Face Glass'."</p><p>".$array[3]."</p>";
								}
							
							}
				            $newname= stripslashes(str_replace("ES47-","",$finalArray[$l]['val']));

							$arr=explode("-", $newname);
							
                           
								
                                $newname="ES47-".$arr[0]."-".$arr[1]."Custom Products";
								$newname=str_replace('/TG','TG',$newname);
														
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
						$array = explode('"', stripslashes(str_replace("ES47-","",$finalArray[$l]['val'])));
						if(!in_array($array[0],$glassArray)){
							$newname.="".$custom;
						}else{
							//if(strlen(str_replace(" ","",$array[0]))>2){
								$newname.="".$custom;
							//}
						}
					}
					if (strpos($newdesc,'Top Glass') !== false){
						$array = explode('"', stripslashes(str_replace("ES47-","",$finalArray[$l]['val'])));
						if(!in_array($array[0],$glassArray)){
							$newname.="".$custom;
						}else{
							//if(strlen(str_replace(" ","",$array[0]))>2){
								$newname.="".$custom;
							//}
						}
					}
					
					if(strpos($products[$i]['name'],'LYT') !== false){
								
							$newname= stripslashes(str_replace("ES47-","",$finalArray[$l]['val']));
                               // echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
							

					
							$newname="ES47-" .$newname."";
							$newdesc="" .$newname." LED LIGHT BAR";
							//$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." LYT Custom Products";
							}
							
							
							if(strpos($products[$i]['name'],'TUBE') !== false){
								
							$newname= stripslashes(str_replace("ES47-","",$finalArray[$l]['val']));
                               // echo'<b style="color:red">'; print_r($newname); echo'</b><br />';
							

					
							$newname="ES47-" .$newname."";
							$newdesc="" .$newname." WITH BRACKETS, END CAPS AND MATCHING ACCENTS";
							//$newname="ED20-".$arr2[0].$arr2[1].$arr2[2]." TUBE Custom Products";
							}
					
				}
				
				else if (strpos($products[$i]['name'],'MS') !== false){
					if($finalArray[$l]['val']=='MS'){
						$newname=$products[$i]['name'];
						$newdesc=$products[$i]['description'];
							
							
							
							
						
					
					}else{
						$newname=stripslashes($finalArray[$l]['val']);
						$newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							 $newname=stripslashes($finalArray[$l]['val']);
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
					     $newname=stripslashes($finalArray[$l]['val']);
						 $tishu="Glass Kit Contains:";
                          $newdesc=$products[$i]['description'];
						$arr=explode(" ", $newdesc);
						$arr2=explode(" ", $newname);
                            $qtyNew34=MS2($tis,$arr2[3]);    
						$newname="Mid Shelve Glass Depth".$tis." Face Length ".$arr2[3];
						$newdesc="<p>".$newname."</p><p>".$tishu."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
						
					}
					if(strpos($products[$i]['name'],'CP') !== false){
					$newname=stripslashes($finalArray[$l]['val']);

							
                          $newdesc=$products[$i]['description'];
						$arr=explode(" ", $newdesc);
                                $counter=$arr[0];
                                 
								 $arr2 = str_split($counter, 2);
							if($arr[1]=='CP'){
							$newname="Center Post";
							}
						$newname="Mid Shelve ".$newname." ".$arr[3];
					}if(strpos($products[$i]['name'],'RP') !== false){
					     $newname=stripslashes($finalArray[$l]['val']);
						 
                          $newdesc=$products[$i]['description'];
						$arr=explode(" ", $newdesc);
						$arr2=explode(" ", $newname);
						$tis=MS($arr2[2]);
						
                                $counter=$arr[0];
                                 
								 $arr2 = str_split($counter, 2);
							
						$newname="Mid Shelve ".$newname." ".$arr[3];
						$newdesc="Mid Shelve ".$newname." ";
					}if(strpos($products[$i]['name'],'LP') !== false){
					     $newname=stripslashes($finalArray[$l]['val']);

							
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
						$array = explode('"', stripslashes(str_replace("ES82-","",$finalArray[$l]['val'])));
						if(!in_array($array[0],$glassArray)){
							$newname.=" Custom Products".$custom;
						}
					}
					if (strpos($newdesc,'Top Glass') !== false){
						$array = explode('"', stripslashes(str_replace("ES82-","",$finalArray[$l]['val'])));
						if(!in_array($array[0],$glassArray)){
							$newname.=" Custom Products".$custom;
						}
					}
					
				}
				
				
				else if (strpos($products[$i]['name'],'ES53') !== false){
				
					if($finalArray[$l]['val']=='ES53'){
					
						$newname=$products[$i]['name'];
						$newdesc=$products[$i]['description'];
						if(strpos($newname,"LEP")!==false || strpos($newname,"REP")!==false){
							$newname.="Custom Product**";
						}
					
					}else{
						$newname=stripslashes($finalArray[$l]['val']);
						$newdesc=$products[$i]['description'];
						
							$array = explode('"', stripslashes(str_replace("ES53-","",$finalArray[$l]['val'])));
							
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
						$array = explode('"', stripslashes(str_replace("ES53-","",$finalArray[$l]['val'])));
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
					
					if($finalArray[$l]['val']=='ES29'){
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
						$newname=stripslashes($finalArray[$l]['val']);
						$lnt=explode("-",$newname);
								
						$newdesc=stripslashes(str_replace("GL","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ES29-","",$finalArray[$l]['val'])));
							
						    $qtyNew34=es29Desc($array[0]);
							$array = explode('<p>', $newdesc);
							
							  $newdesc="<p>".$array[0]."</p><p>".$array[1]."</p><p>".$qtyNew34."</p><p>".$array[3]."</p>";
						 if ((strpos($products[$i]['name'],'TG') !== false || strpos($products[$i]['name'],'GL') !== false)  && strpos($products[$i]['name'],'SLP') === false){
						 $newdesc=stripslashes(str_replace("TG","",$finalArray[$l]['val']).strstr($products[$i]['description'],'"'));
							$array = explode('"', stripslashes(str_replace("ES29-","",$finalArray[$l]['val'])));
							
						    
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
							  
                              
				            $newname= stripslashes(str_replace("ES29-","",$finalArray[$l]['val']));
                               
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
						$array = explode('"', stripslashes(str_replace("ES29-","",$finalArray[$l]['val'])));
						if(!in_array($array[0],$glassArray)){
							$newname.=" Custom Products".$custom;
						}else{
							//if(strlen(str_replace(" ","",$array[0]))>2){
								$newname.=" Custom Products".$custom;
							//}
						}
					}
					if (strpos($newdesc,'Top Glass') !== false){
						$array = explode('"', stripslashes(str_replace("ES29-","",$finalArray[$l]['val'])));
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
					$newname=stripslashes(($finalArray[$l]['val'].$newname));
					if (strpos($products[$i]['name'],'ROSTEDGL') !== false){
						$newname=$newname."-BP";
						
					}
					
					//making description custom
					if(strpos($products[$i]['name'],'EP5') !== false){
						$array = explode('"', stripslashes(str_replace("EP5-","",$finalArray[$l]['val'])));
						$qtyNew=ep5Desc($array[0],$array[1]);
						
						
					}if(strpos($products[$i]['name'],'EP22') !== false){
						$array = explode('"', stripslashes(str_replace("EP22-","",$finalArray[$l]['val'])));
						$qtyNew=ep11Desc($array[0],$array[1]);
						
					}if(strpos($products[$i]['name'],'EP21') !== false){
						$array = explode('"', stripslashes(str_replace("EP21-","",$finalArray[$l]['val'])));
						$qtyNew=ep11Desc($array[0],$array[1]);
						
					}if(strpos($products[$i]['name'],'EP36') !== false){
						$array = explode('"', stripslashes(str_replace("EP36-","",$finalArray[$l]['val'])));
						$qtyNew=es31Desc($array[0],$array[1]);
						
					}
					if(strpos($products[$i]['name'],'ES31') !== false){
						$array = explode('"', stripslashes(str_replace("ES31-","",$finalArray[$l]['val'])));
						$qtyNew=es31Desc($array[0],$array[1]."+31");
					}if(strpos($products[$i]['name'],'ES40') !== false){
						$array = explode('"', stripslashes(str_replace("ES40-","",$finalArray[$l]['val'])));
						$qtyNew=es31Desc($array[0],$array[1]);
					}if(strpos($products[$i]['name'],'ES67') !== false){
						$array = explode('"', stripslashes(str_replace("ES67-","",$finalArray[$l]['val'])));
						$qtyNew=es67Desc($array[0],$array[1]);
					}if(strpos($products[$i]['name'],'ES73') !== false){
						$array = explode('"', stripslashes(str_replace("ES73-","",$finalArray[$l]['val'])));
						$qtyNew=es67Desc($array[0],$array[1]."+73");
					}
					if(strpos($products[$i]['name'],'EP15') !== false){
						$array = explode('"', stripslashes(str_replace("EP15-","",$finalArray[$l]['val'])));
						$qtyNew=ep5Desc($array[0],$array[1]);
					}
					if(strpos($products[$i]['name'],'EP11') !== false){
						$array = explode('"', stripslashes(str_replace("EP11","",$finalArray[$l]['val'])));
						//print_r($array);
						$qtyNew1=ep11Desc($array[0],$array[1]);
					
						
					}
					if(strpos($products[$i]['name'],'EP12') !== false){
						$array = explode('"', stripslashes(str_replace("EP12","",$finalArray[$l]['val'])));
						//print_r($array);
						$qtyNew1=ep11Desc($array[0],$array[1]);
						
					}
					
					$newdesc=strstr($products[$i]['description'],'Glass')." ";
					$newdesc=stripslashes(($finalArray[$l]['val'].$newdesc));
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
					$newname=stripslashes($finalArray[$l]['val']." ".$newname);
					$newdesc=strstr($products[$i]['description'],' ');
					$newdesc=stripslashes($finalArray[$l]['val']." ".$newdesc);
				}
				}
				/*end*/
				if ((strpos($products[$i]['name'],'ROSTEDGL') !== false)){
				
				if(strpos($products[$i]['name'],'EP5') !== false){
						$newname="EP5-Frosted Glass";
						$newdesc="EP5-Frosted Glass";
				
					}
					
					if(strpos($products[$i]['name'],'EP15') !== false){
						$newname="EP15-Frosted Glass";
						$newdesc="EP5-Frosted Glass";
				
					}
					if(strpos($products[$i]['name'],'EP36') !== false){
						$newname="EP36-Frosted Glass";
						$newdesc="EP36-Frosted Glass";
				
					}
				}if ((strpos($products[$i]['name'],'Center Post Brushed Stainless Steel') !== false)){
				
				if(strpos($products[$i]['name'],'EP11') !== false){
						$newname="Center Post Brushed Stainless Steel";
						$newname=stripslashes($finalArray[$l]['val']." ".$newname);
						$newdesc="Center Post Brushed Stainless Steel";
						$newdesc=stripslashes($finalArray[$l]['val']." ".$newdesc);
				
					}
					if(strpos($products[$i]['name'],'EP21') !== false){
						$newname="EP21 Center Post Brushed Stainless Steel";
						$newdesc="EP21 Center Post Brushed Stainless Steel";
				
					}
				}if ((strpos($products[$i]['name'],'Center Post Powder Coated Black') !== false)){
				
				if(strpos($products[$i]['name'],'EP11') !== false){
						$$newname="Center Post Powder Coated Black";
						$newname=stripslashes($finalArray[$l]['val']." ".$newname);
						$newdesc="Center Post Powder Coated Black";
						$newdesc=stripslashes($finalArray[$l]['val']." ".$newdesc);
				
					}if(strpos($products[$i]['name'],'EP21') !== false){
						$newname="EP21 Center Post Powder Coated Black";
						$newdesc="EP21 Center Post Powder Coated Black";
				
					}
				}if ((strpos($products[$i]['name'],'Center Post Brushed Aluminum') !== false)){
				
				if(strpos($products[$i]['name'],'EP11') !== false){
						$newname="Center Post Brushed Aluminum";
						$newname=stripslashes($finalArray[$l]['val']." ".$newname);
						$newdesc="Center Post Brushed Aluminum";
						$newdesc=stripslashes($finalArray[$l]['val']." ".$newdesc);
				
					}if(strpos($products[$i]['name'],'EP21') !== false){
						$newname="EP21  Center Post Brushed Aluminum";
						$newdesc="EP21  Center Post Brushed Aluminum";
				
					}
				}	
				if ((strpos($products[$i]['name'],'Left End Panel') !== false)||(strpos($products[$i]['name'],' Right End Panel') !== false)||(strpos($products[$i]['name'],' Right End') !== false)||(strpos($products[$i]['name'],' Left End') !== false)){
				
				if(strpos($products[$i]['name'],'EP36') !== false){
						if(strpos($products[$i]['name'],'Right End') !== false){
							$newdesc=$products[$i]['description'];
							$newdesc= str_replace("EP36-Select EP36 Right End Right End","EP36 Right End",$newdesc);
							$newname=$products[$i]['name'];
						$newname= str_replace("EP36-Select EP36 Right End Right End","EP36 Right End",$newname);
						}
						
						if(strpos($products[$i]['name'],'Left End') !== false){
							
							$newdesc=$products[$i]['description'];
							$newdesc= str_replace("EP36-Select EP36 Left End Left End","EP36 Left End",$newdesc);
							$newname=$products[$i]['name'];
						$newname= str_replace("EP36-Select EP36 Left End Left End","EP36 Left End",$newname);
						}
						
						if(strpos($products[$i]['name'],'Left End') !== false){
							
						$newname="EP36 Left End ";
						}
					}
				
				
				
				
					if(strpos($products[$i]['name'],'EP11') !== false){
						$postArray=array('17-1/4');
						$glassArray=array(12,18,24,30,36,42);
						$array = explode('"', stripslashes(str_replace("EP11","",$finalArray[$l]['val'])));
						
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
						$array = explode('"', stripslashes(str_replace("EP12","",$finalArray[$l]['val'])));
						
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
					
					if(strpos($products[$i]['name'],'EP5') !== false){
						$postArray=array(12,18,22);
						$glassArray=array(12,18,24,30,36,42);
						$array = explode('"', stripslashes(str_replace("EP5-","",$finalArray[$l]['val'])));
						
						if(!empty($finalArray[$l]['wt'])){
							if($finalArray[$l]['wt']!=1){
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
								
								if($finalArray[$l]['wt']!=1 && (!empty($finalArray[$l]['wt']))){
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
						
					}
					if(strpos($products[$i]['name'],'EP15') !== false){
						$postArray=array(18,22,26);
						$glassArray=array(12,18,24,30,36,42);
						$array = explode('"', stripslashes(str_replace("EP15-","",$finalArray[$l]['val'])));
						if(!empty($finalArray[$l]['wt'])){
							if($finalArray[$l]['wt']!=1){
								$newname.=' 3/8" Thick';
							}
						}
						$nar=explode("-",$array[1]);
						if($nar[0]>42 || ($nar[0]==42 && $nar[1]!="")){
							$newname.=' 3/8" Thick';
						}
						$d=str_replace(" ","",$array[0]);
						$d1=str_replace(" ","",$array[1]);
						$cust=$cust1=0;
						
                        if(in_array($array[1],$glassArray)){
							$cust=1;
							if(strlen($d1)>2){
								$cust=0;
							}else{
								if($finalArray[$l]['wt']!=1 && (!empty($finalArray[$l]['wt']))){
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
						//echo $cust." ".$cust1; 
						if($cust==0||$cust1==0){
                            $newname.=" Custom Products".$custom;
							//$doub_star=true;
                        }
						
					}
					
					if(strpos($products[$i]['name'],'EP11') !== false){
						$postArray=array('17-1/4');
						$glassArray=array(12,18,24,30,36,42);
						$array = explode('"', stripslashes(str_replace("EP11-","",$finalArray[$l]['val'])));
						$cust=1;
						$d= str_replace("EP11 ","",$array[0]);
						if(!empty($finalArray[$l]['wt'])){
							if($finalArray[$l]['wt']!=1){
								$newname.=' 3/8" Thick';
								$newdesc=str_replace("1/4","3/8",$newdesc);
							}
						}
						
						if($finalArray[$l]['custom']=="Yes"){

							$rt=explode("-",$array[1]);
							//echo $rt[0];
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
									if($finalArray[$l]['wt']!=1 && (!empty($finalArray[$l]['wt']))){
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
					}
					if(strpos($products[$i]['name'],'EP12') !== false){
						$postArray=array('17-1/4');
						$glassArray=array(12,18,24,30,36,42);
						$array = explode('"', stripslashes(str_replace("EP12","",$finalArray[$l]['val'])));
						//echo $array[1]." ".$array[0];
						if(!empty($finalArray[$l]['wt'])){
							if($finalArray[$l]['wt']!=1){
								$newname.=' 3/8" Thick';
								$newdesc=str_replace("1/4","3/8",$newdesc);
							}
						}
						if($finalArray[$l]['custom']=="Yes"){

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
									if($finalArray[$l]['wt']!=1 && (!empty($finalArray[$l]['wt']))){
										$newname.=$custom;
									}
								}
							}else{
								$cust=0;
							}
						}
                        if($cust==0){
                            $newname.=" Custom Products".$custom;
                        }
				
					}
					if(strpos($products[$i]['name'],'EP21') !== false){
						
						$glassArray=array(12,18,24,30,36,42);
						$array = explode('"', stripslashes(str_replace("EP21-","",$finalArray[$l]['val'])));
						if(!empty($finalArray[$l]['wt'])){
							if($finalArray[$l]['wt']!=1){
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
								if($finalArray[$l]['wt']!=1 && (!empty($finalArray[$l]['wt']))){
									$newname.=$custom;
								}
                            }
                        }
                        if($cust==0){
                            $newname.=" Custom Products".$custom;
                        }
				
					}
					if(strpos($products[$i]['name'],'EP22') !== false){
						
						$glassArray=array(12,18,24,30,36,42);
						$array = explode('"', stripslashes(str_replace("EP22-","",$finalArray[$l]['val'])));
						if(!empty($finalArray[$l]['wt'])){
							if($finalArray[$l]['wt']!=1){
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
								if($finalArray[$l]['wt']!=1 && (!empty($finalArray[$l]['wt']))){
									$newname.=$custom;
								}
                            }
                        }
                        if($cust==0){
                            $newname.=" Custom Products".$custom;
                        }				
					}
					if(strpos($products[$i]['name'],'ED20') !== false){
						
						$glassArray=array(8,9,10,11,12,13);
						$array = explode('"', stripslashes(str_replace("ED20-","",$finalArray[$l]['val'])));
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
						$array = explode('"', stripslashes(str_replace("EP36-","",$finalArray[$l]['val'])));
						if(!empty($finalArray[$l]['wt'])){
							if($finalArray[$l]['wt']!=1){
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
								if($finalArray[$l]['wt']!=1 && (!empty($finalArray[$l]['wt']))){
									$newname.=$custom;
								}
                            }
                        }
                        if($cust==0){
                            $newname.=" Custom Products".$custom;
                        }
						
						
						
						
					}
					if(strpos($products[$i]['name'],'ES31') !== false){
						
						$glassArray=array(12,18,24,30,36,42);
						$array = explode('"', stripslashes(str_replace("ES31-","",$finalArray[$l]['val'])));
						if(!empty($finalArray[$l]['wt'])){
							if($finalArray[$l]['wt']!=1){
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
								if($finalArray[$l]['wt']!=1 && (!empty($finalArray[$l]['wt']))){
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
						$array = explode('"', stripslashes(str_replace("ES40-","",$finalArray[$l]['val'])));
						if(!empty($finalArray[$l]['wt'])){
							if($finalArray[$l]['wt']!=1){
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
								if($finalArray[$l]['wt']!=1 && (!empty($finalArray[$l]['wt']))){
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
						$array = explode('"', stripslashes(str_replace("ES67-","",$finalArray[$l]['val'])));
						if(!empty($finalArray[$l]['wt'])){
							if($finalArray[$l]['wt']!=1){
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
								if($finalArray[$l]['wt']!=1 && (!empty($finalArray[$l]['wt']))){
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
						$array = explode('"', stripslashes(str_replace("ES73-","",$finalArray[$l]['val'])));
						if(!empty($finalArray[$l]['wt'])){
							if($finalArray[$l]['wt']!=1){
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
								if($finalArray[$l]['wt']!=1 && (!empty($finalArray[$l]['wt']))){
									$newname.=$custom;
								}
                            }
                        }
                        if($cust==0){
                            $newname.=" Custom Products".$custom;                         
                        }
					}
				}
				
				
				if($finalArray[$l]['custom']=='beyond'){
					$newname=$products[$i]['name'];
					$newdesc=$products[$i]['description'];
				}
				if(!empty($finalArray[$l]['wt'])){
      				$products[$i]['final_price']=round($products[$i]['final_price']*$finalArray[$l]['wt']);
      				$new+=$products[$i]['final_price'];
      				
				  }
				  $url = '<a href="' . tep_href_link(/*FILENAME_PRODUCT_INFO ,*/ 'product_info1.php?products_id=' . $products[$i]['id']) . '"><img src="' . DIR_WS_IMAGES . ''.$products[$i]['image'].'" alt="'.$newname.' Sneeze Guard" title="'.$newname.'" class="wishlist-img"></a>';
				
                 if($finalArray[$l]['custom']== 'Yes') {
					$url = '<img src="' . DIR_WS_IMAGES . ''.$products[$i]['image'].'" alt="Sneeze Guard" title="Sneeze Guard"  class="wishlist-img">';
                 }
      			$products_name ="<div class='row'><div class='col-4 col-md-4 col-sm-4 image'>".$url."</div><div class='col-6 col-md-6 col-sm-6'><p><strong>" . $newname . '</strong><br>'.$newdesc."</p>";


					   
					   
      if (STOCK_CHECK == 'true') {
        $stock_check = tep_check_stock($products[$i]['id'], 1);
        if (tep_not_null($stock_check)) {
          $any_out_of_stock = 1;

          $products_name .= $stock_check;
        }
      }
        $hasForm = false;
        $att = "";
        if (isset($products[$i]['attributes']) && is_array($products[$i]['attributes'])) {
            $att = implode("," , $products[$i]['attributes']);
        }

        $products_name .= tep_draw_form('cart_quantity'.$groupName.$products[$i]['id'].$l, tep_href_link(FILENAME_PRODUCT_INFO1, 'action=add_wishlist_to_cart&products_qty='.$finalArray[$l]['qty']));
        $products_name .= '<input type="hidden" name="products_id" value="'.$products[$i]['id'].'"/>';
        $products_name .= '<input type="hidden" name="products_qty" value="'.$finalArray[$l]['qty'].'"/>';
        $products_name .= '<input type="hidden" name="data_custom" value="'.tep_output_string(json_encode(array(
                'custom' => $finalArray[$l]['val'], "id" => $finalArray[$l]['id'], "model_name" => $model_name, "model_type" => $model_type
            ))).'"/>';
        if (isset($products[$i]['attributes']) && is_array($products[$i]['attributes'])) {
            reset($products[$i]['attributes']);
            $hasForm = true;
            $optionIds = implode(",", array_keys($products[$i]['attributes']));
            $products_name .= '<input type="hidden" name="optionsid" value="'.$optionIds.'"/>';
            while (list($option, $value) = each($products[$i]['attributes'])) {
                if(!empty($products[$i][$option]['products_options_name'])) {                    
                    $products_name .= '<input type="hidden" name="id['.$option.']" value="'.$value.'"/><br /><small><i> - ' . $products[$i][$option]['products_options_name'] . ' ' . $products[$i][$option]['products_options_values_name'] . '</i></small>';
                } else {
                    $hasForm = false;
                }
            }
        } 
        $products_name .= "</form>";

      $products_name .=	'   '  .
						'  ' .
                        '</div>';
						
	echo '<div class="row border-bottom pb-4 pt-4">
	<div class="col-md-9 col-sm-9">'.$products_name ."<div class='col-2 col-md-2 col-sm-2' >
	<p class='font-weight-bold text-left'>".$finalArray[$l]['qty'] ."</p>". tep_draw_hidden_field('products_id[]', $products[$i]['id'],'class="'.$newGroup.'" data-model-name="'.$model_name.'" data-model-type="'.$model_type.'" data-custom="'.tep_output_string($finalArray[$l]['val']).'" data-qty="'.$finalArray[$l]['qty'].'"') .tep_draw_hidden_field('custom_val[]', $finalArray[$l]['val']) .tep_draw_hidden_field('custom_type[]', $finalArray[$l]['custom']).(!empty($finalArray[$l]['wt'])?tep_draw_hidden_field('wt[]', $finalArray[$l]['wt']):"").'</div></div></div>';
	?><div class="col-md-3 col-sm-3 text-right"><p><b><?=$currencies->display_price($products[$i]['final_price'], tep_get_tax_rate($products[$i]['tax_class_id']), $finalArray[$l]['qty'])?></b></p><br>
	<div class="row cbtn">
	
	
	<?php
            if($att == "") {
                $att = tep_output_string($finalArray[$l]['val']);
            }
           ?>
		   
		   <div class="col-6 col-sm-6 col-md-6">
		   
		   <a class="btn btn-sm btn-outline-dark" href="<?= tep_href_link("wishlist.php", 'products_id=' . $products[$i]['id']."&qty=".$finalArray[$l]['qty'] ."&val=".$finalArray[$l]['val']."&custom=".$finalArray[$l]['custom']. '&model_name=' . $model_name.'&model_type='.$model_type.'&action=remove_product_wishlist&attr='.$att);?>">Remove</a>
	</div>
		   <div class="col-6 col-sm-6 col-md-6">
		   
	<input type="submit" class="btn btn-sm btn-outline-dark addtocart" value="Add to Cart" title="Add to Cart" data-id="<?='cart_quantity'.$groupName.$products[$i]['id'].$l?>">
		   
		   </div>
		   
		   
		   
		   </div></div></div>
		   <?php
				break;
			}
		}
		$l++;
	
	}

	
	} ?>	

      



	  
    </form>
	<?php
            
        } 
    ?>
                        </div>				
	<?php include('includes/footer_new_design.php');?>
<?php
   
   
    function tep_image_submit23($image, $alt = '', $parameters = '', $formName = "", $class = "") {
    global $language;
    
	
	
    $image_submit = '<input type="image" style="width: 7rem;" src="' . tep_output_string(DIR_WS_LANGUAGES . $language . '/images/buttons/' . $image) . '" alt="' . tep_output_string($alt) . '"';
	
	

    if (tep_not_null($alt)) $image_submit .= ' title=" ' . tep_output_string($alt) . ' "';

    if (tep_not_null($parameters)) $image_submit .= ' ' . $parameters;
    if (tep_not_null($class)) $image_submit .= ' class="add-model" data-name="'.$class.'"';
    
    if (tep_not_null($formName)) $image_submit .= ' onclick="javascript:document.forms['."'$formName'".'].submit();"';
    
    $image_submit .= '/>';

    return $image_submit;
  }
  
  
  
  
  
  
  
    function tep_image_submit23333($image, $alt = '', $parameters = '', $formName = "", $class = "") {
    global $language;
    
	
	
    $image_submit = '<input type="image" style="width: 119px;" src="' . tep_output_string(DIR_WS_LANGUAGES . $language . '/images/buttons/' . $image) . '" alt="' . tep_output_string($alt) . '"';
	
	

    if (tep_not_null($alt)) $image_submit .= ' title=" ' . tep_output_string($alt) . ' "';

    if (tep_not_null($parameters)) $image_submit .= ' ' . $parameters;
    if (tep_not_null($class)) $image_submit .= ' class="add-model" data-name="'.$class.'"';
    
    if (tep_not_null($formName)) $image_submit .= ' onclick="javascript:document.forms['."'$formName'".'].submit();"';
    
    $image_submit .= '/>';

    return $image_submit;
  }
  
?>