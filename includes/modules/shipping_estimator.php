

<div id="row">
<div class="col-sm-12 p-3">

</div>


<script language="JavaScript">
  function shipincart_submit(sid){
    if(sid){
      document.estimator.sid.value=sid;
    }
    document.estimator.submit();
    return false;
  }
    
</script>
             
<style>
.cartinput{width:50%;float:right;}
@media screen and (max-width: 768px) {
.cartinput{width:80%;}	
}
</style>			 

<?php

  require(DIR_WS_LANGUAGES . $language . '/modules/' . FILENAME_SHIPPING_ESTIMATOR);

if (($cart->count_contents() > 0)) {

  // shipping cost
  require('includes/classes/http_client.php'); // shipping in basket

  //if($cart->get_content_type() !== 'virtual') {
    if (tep_session_is_registered('customer_id')) {
      // user is logged in
      if (isset($HTTP_POST_VARS['address_id'])){
        // user changed address
        $sendto = $HTTP_POST_VARS['address_id'];
      }elseif (tep_session_is_registered('cart_address_id')){
        // user once changed address
        $sendto = $HTTP_POST_VARS['cart_address_id'];
      }else{
        // first timer
        $sendto = $HTTP_POST_VARS['customer_default_address_id'];
      }
      // set session now
      $cart_address_id = $sendto;
      
      tep_session_register('cart_address_id');
      // set shipping to null ! multipickup changes address to store address...
      $shipping='';
      // include the order class (uses the sendto !)
      require(DIR_WS_CLASSES . 'order.php');
      $order = new order;
    }else{
// user not logged in !
      if (isset($HTTP_POST_VARS['country_id'])){
        // country is selected
        $country_info = tep_get_countries($HTTP_POST_VARS['country_id'],true);
        $cache_state_prov_values = tep_db_fetch_array(tep_db_query("select zone_code from " . TABLE_ZONES . " where zone_country_id = '" . $HTTP_POST_VARS['country_id'] . "' and zone_id = '" . $HTTP_POST_VARS['state'] . "'"));
        $cache_state_prov_code = $cache_state_prov_values['zone_code'];
        $order->delivery = array('postcode' => $HTTP_POST_VARS['zip_code'],
                                 'state' => $cache_state_prov_code,
                                 'country' => array('id' => $HTTP_POST_VARS['country_id'], 'title' => $country_info['countries_name'], 'iso_code_2' => $country_info['countries_iso_code_2'], 'iso_code_3' =>  $country_info['countries_iso_code_3']),
                                 'country_id' => $HTTP_POST_VARS['country_id'],
//add state zone_id
                                 'zone_id' => $HTTP_POST_VARS['state'],
                                 'format_id' => tep_get_address_format_id($HTTP_POST_VARS['country_id']));
        $cart_country_id = $HTTP_POST_VARS['country_id'];
        tep_session_register('cart_country_id');
//add state zone_id
        $cart_zone = $HTTP_POST_VARS['zone_id'];
        tep_session_register('cart_zone');
        $cart_zip_code = $HTTP_POST_VARS['zip_code'];
        tep_session_register('cart_zip_code');
      }elseif (tep_session_is_registered('cart_country_id')){
        // session is available
        $country_info = tep_get_countries($cart_country_id,true);
        $order->delivery = array('postcode' => $cart_zip_code,
                                 'country' => array('id' => $cart_country_id, 'title' => $country_info['countries_name'], 'iso_code_2' => $country_info['countries_iso_code_2'], 'iso_code_3' =>  $country_info['countries_iso_code_3']),
                                 'country_id' => $cart_country_id,
                                 'format_id' => tep_get_address_format_id($cart_country_id));
      } else {
        // first timer
        $cart_country_id = STORE_COUNTRY;
        tep_session_register('cart_country_id');
        $country_info = tep_get_countries(STORE_COUNTRY,true);
        tep_session_register('cart_zip_code');
        $order->delivery = array(//'postcode' => '',
                                 'country' => array('id' => STORE_COUNTRY, 'title' => $country_info['countries_name'], 'iso_code_2' => $country_info['countries_iso_code_2'], 'iso_code_3' =>  $country_info['countries_iso_code_3']),
                                 'country_id' => STORE_COUNTRY,
                                 'format_id' => tep_get_address_format_id($HTTP_POST_VARS['country_id']));
      }
      // set the cost to be able to calculate free shipping
      $order->info = array('total' => $cart->show_total(), // TAX ????
                           'currency' => $currency,
                           'currency_value'=> $currencies->currencies[$currency]['value']);
    }
// weight and count needed for shipping
    $total_weight = $cart->show_weight();
    $total_count = $cart->count_contents();
    require(DIR_WS_CLASSES . 'shipping.php');
    $shipping_modules = new shipping;
    $quotes = $shipping_modules->quote();
    $order->info['subtotal'] = $cart->total;

// set selections for displaying
    $selected_country = $order->delivery['country']['id'];
    $selected_address = $sendto;
  //}
// eo shipping cost

  // check free shipping based on order total
  if ( defined('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING') && (MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING == 'true')) {
    switch (MODULE_ORDER_TOTAL_SHIPPING_DESTINATION) {
      case 'national':
        if ($order->delivery['country_id'] == STORE_COUNTRY) $pass = true; break;
      case 'international':
        if ($order->delivery['country_id'] != STORE_COUNTRY) $pass = true; break;
      case 'both':
        $pass = true; break;
      default:
        $pass = false; break;
    }
    $free_shipping = false;
    if ( ($pass == true) && ($order->info['total'] >= MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER)) {
      $free_shipping = true;
      include(DIR_WS_LANGUAGES . $language . '/modules/order_total/ot_shipping.php');
    }
  } else {
    $free_shipping = false;
  }
  // begin shipping cost
  if(!$free_shipping && $cart->get_content_type() !== 'virtual'){
    if (tep_not_null($HTTP_POST_VARS['sid'])){
      list($module, $method) = explode('_', $HTTP_POST_VARS['sid']);
      $cart_sid = $HTTP_POST_VARS['sid'];
      tep_session_register('cart_sid');
    }elseif (tep_session_is_registered('cart_sid')){
      list($module, $method) = explode('_', $cart_sid);
    }else{
      $module="";
      $method="";
    }
    if (tep_not_null($module)){
      $selected_quote = $shipping_modules->quote($method, $module);
      if($selected_quote[0]['error'] || !tep_not_null($selected_quote[0]['methods'][0]['cost'])){
        $selected_shipping = $shipping_modules->cheapest();
        $order->info['shipping_method'] = $selected_shipping['title'];
        $order->info['shipping_cost'] = $selected_shipping['cost'];
        $order->info['total']+= $selected_shipping['cost'];
      }else{
        $order->info['shipping_method'] = $selected_quote[0]['module'].' ('.$selected_quote[0]['methods'][0]['title'].')';
        $order->info['shipping_cost'] = $selected_quote[0]['methods'][0]['cost'];
        $order->info['total']+= $selected_quote[0]['methods'][0]['cost'];
        $selected_shipping['title'] = $order->info['shipping_method'];
        $selected_shipping['cost'] = $order->info['shipping_cost'];
        $selected_shipping['id'] = $selected_quote[0]['id'].'_'.$selected_quote[0]['methods'][0]['id'];
      }
    }else{
      $selected_shipping = $shipping_modules->cheapest();
      $order->info['shipping_method'] = $selected_shipping['title'];
      $order->info['shipping_cost'] = $selected_shipping['cost'];
      $order->info['total']+= $selected_shipping['cost'];
    }
  }
// virtual products use free shipping
  if($cart->get_content_type() == 'virtual') {
    $order->info['shipping_method'] = CART_SHIPPING_METHOD_FREE_TEXT . ' ' . CART_SHIPPING_METHOD_ALL_DOWNLOADS;
    $order->info['shipping_cost'] = 0;
  }
  if($free_shipping) {
    $order->info['shipping_method'] = MODULE_ORDER_TOTAL_SHIPPING_TITLE;
    $order->info['shipping_cost'] = 0;
  }
  $shipping=$selected_shipping;
// end of shipping cost
// end free shipping based on order total

  $info_box_contents = array();
  $info_box_contents[] = array('text' => '<b>' . CART_SHIPPING_OPTIONS . '</b>'); // azer for 2.20 cosmetic change
  new infoBoxHeading($info_box_contents, false, false);

  $ShipTxt= tep_draw_form('estimator', tep_href_link(FILENAME_SHOPPING_CART, '', 'NONSSL'), 'post'); //'onSubmit="return check_form();"'
  $ShipTxt.=tep_draw_hidden_field('sid', $selected_shipping['id']);
  //$ShipTxt.='<table border="0" bgcolor="#AAA"  cellspacing="1" cellpadding="1" class="shippingtable">';
  $ShipTxt.='<table class="shippingtable" width="100%">';
  if(sizeof($quotes)) {
    if (tep_session_is_registered('customer_id')) {
      // logged in

  if (CARTSHIP_SHOWWT == 'true') {
    $showweight = '&nbsp;(' . $total_weight . '&nbsp;' . CARTSHIP_WTUNIT . ')';
  } else {
    $showweight = '';
  }

        if(CARTSHIP_SHOWIC == 'true'){
      //ishazer remover hard code for version 2.20 : $ShipTxt.='<tr><td class="main">' . ($total_count == 1 ? ' <b>Item:</b></td><td colspan="2" class="main">' : ' <b>' . CART_ITEM . '</b></td><td colspan="2" class="main">') . $total_count . $showweight . '</td></tr>';
      $ShipTxt.='<tr><td class="main">' . ($total_count == 1 ? ' <b></b></td><td colspan="2" class="main">' : ' <b></b></td><td colspan="2"  class="main">') . '</td></tr>';
      
       }
      $addresses_query = tep_db_query("select address_book_id, entry_city as city, entry_postcode as postcode, entry_state as state, entry_zone_id as zone_id, entry_country_id as country_id from " . TABLE_ADDRESS_BOOK . " where customers_id = '" . $customer_id . "'");
      // only display addresses if more than 1
      if (tep_db_num_rows($addresses_query) > 1){
        while ($addresses = tep_db_fetch_array($addresses_query)) {
          $addresses_array[] = array('id' => $addresses['address_book_id'], 'text' => tep_address_format(tep_get_address_format_id($addresses['country_id']), $addresses, 0, ' ', ' '));
        }
        $ShipTxt.='<tr><td colspan="3" class="main" nowrap>' .
                  CART_SHIPPING_METHOD_ADDRESS .'&nbsp;'. tep_draw_pull_down_menu('address_id', $addresses_array, $selected_address, 'onchange="return shipincart_submit(\'\');" class="form-control cartinput"').'</td></tr>';
      }
      $ShipTxt.='<tr valign="top"><td class="main"><b>' . CART_SHIPPING_METHOD_TO .'</b>&nbsp;</td><td colspan="2" class="main">'. tep_address_format($order->delivery['format_id'], $order->delivery, 1, ' ', '<br>') . '</td></tr>';

    } else {
// not logged in
     // $ShipTxt.=CART_SHIPPING_OPTIONS_LOGIN;

        if(CARTSHIP_SHOWIC == 'true'){
 //azer for 2.20:      $ShipTxt.='<tr><td class="main">' . ($total_count == 1 ? ' <b>Item:</b></td><td colspan="2" class="main">' : ' <b>Items:</b></td><td colspan="2" class="main">') . $total_count . $showweight . '</td></tr>';
             // $ShipTxt.='<tr><td colspan="3" class="main" nowrap>' . ($total_count == 1 ? ' <b>' . CART_ITEM . '</b>' : ' <b>' . CART_ITEM . '</b>') . $total_count . $showweight . '</td></tr>';
             
       }

      if($cart->get_content_type() != 'virtual'){

        if(CARTSHIP_SHOWCDD == 'true'){
        $ShipTxt.='<tr >
		<td class="shiipincost">Shipping Cost:- </td>
		<td colspan="3" style="text-align:right;" class="main" nowrap>' .
                 // ENTRY_COUNTRY .'&nbsp;&nbsp;&nbsp;&nbsp;'. tep_get_country_list('country_id', $selected_country,'id="postcode2"style="width=200;"').'&nbsp;</span>';
                  ''. tep_get_country_list('country_id', $selected_country,'id="postcode2"  class="form-control cartinput"').'&nbsp;</span><br />';
        }

//add state zone_id
        $state_array[] = array('id' => '', 'text' => 'Please Select');
        $state_query = tep_db_query("select zone_name, zone_id from " . TABLE_ZONES . " where zone_country_id = '$selected_country' order by zone_country_id DESC, zone_name");
        while ($state_values = tep_db_fetch_array($state_query)) {
          $state_array[] = array('id' => $state_values['zone_id'],
                                 'text' => $state_values['zone_name']);
        }

        if(CARTSHIP_SHOWSDD == 'true'){
         $ShipTxt.=ENTRY_STATE .'&nbsp;'. tep_draw_pull_down_menu('state',$state_array).'&nbsp;';
        }

        if(CARTSHIP_SHOWZDD == 'true'){
         

		 $ShipTxt.='&nbsp;'. tep_draw_input_field('zip_code', $selected_zip, 'id="postcode"  size="14"  placeholder="Zip Code" class="form-control cartinput"').'</span>';
       

	   }
//        $ShipTxt.='&nbsp;<a href="_" onclick="return shipincart_submit(\'\');">'.CART_SHIPPING_METHOD_RECALCULATE.'</a></td></tr>';

        if(CARTSHIP_SHOWUB == 'true'){
			
	$ShipTxt.='&nbsp;<br><br><br><br><a href="'.tep_href_link(FILENAME_SHOPPING_CART).'" onclick="return shipincart_submit(\'\');"><button type="submit"  alt="Find Cost" class="btn btn-outline-dark">Find Cost</button></a></td></td></tr>';		
///$ShipTxt.='&nbsp;<br><br><a style="background:#ccc;"href="'.tep_href_link(FILENAME_SHOPPING_CART).'" onclick="return shipincart_submit(\'\');"><button type="submit" value="Find Cost" class="button223 button3">Find Cost<!--'. tep_image_button('quote.png', IMAGE_BUTTON_UPDATE_CART) . '--></button> </a></td></td></tr>';


        }
        }
    }
	
    if($cart->get_content_type() == 'virtual'){
      // virtual product-download
      //$ShipTxt.='<tr><td colspan="3" class="main">'.tep_draw_separator().'</td></tr>';
      $ShipTxt.='<tr><td class="main" colspan="3">&nbsp;</td></tr><tr><td class="main" colspan="3"><i>' . CART_SHIPPING_METHOD_FREE_TEXT . ' ' . CART_SHIPPING_METHOD_ALL_DOWNLOADS . '</i></td></tr>';
    }elseif ($free_shipping==1) {
      // order $total is free
      //$ShipTxt.='<tr><td colspan="3" class="main">'.tep_draw_separator().'</td></tr>';
      $ShipTxt.='<tr><td class="main" colspan="3">&nbsp;</td></tr><tr><td class="main" colspan="3"><i>' . sprintf(FREE_SHIPPING_DESCRIPTION, $currencies->format(MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER)) . '</i></td><td>&nbsp;</td></tr>';
    } 
	
	else{
	
      // shipping display
	  if ( empty($quotes[0]['error']) || (!empty($quotes[1])&&empty($quotes[1]['error'])) ) {
        $ShipTxt.='<tr><td colspan="3" class="main">&nbsp;</td></tr><tr><td class="main" align="left" colspan="2"><b>' . CART_SHIPPING_METHOD_TEXT . '</b></td><td class="main" align="right"><b>' . CART_SHIPPING_METHOD_RATES . '</b></td></tr><tr><td colspan="3"></td></tr>';
        //$ShipTxt.='<tr><td colspan="3" class="main">'.tep_draw_separator().'</td></tr>';
        $at_least_one_quote_printed = false;
	  } else {
	    $ShipTxt.='<tr>
		<td colspan="3" class="main">&nbsp;</td></tr>';
	  }
      for ($i=0, $n=sizeof($quotes); $i<$n; $i++) {
        if(sizeof($quotes[$i]['methods'])==1){
          // simple shipping method
          $thisquoteid = $quotes[$i]['id'].'_'.$quotes[$i]['methods'][0]['id'];
         $ShipTxt.= '<tr class="'.$extra.'"';
            if($selected_shipping['id'] == $thisquoteid){
                $ShipTxt.=' style="border:1px doted #111;background:#f4f4f4; color:#222"';
            }
            $ShipTxt.='>';
          //$ShipTxt.='<td class="main">'.$quotes[$i]['icon'].'&nbsp;&nbsp;&nbsp;</td>';
          if($quotes[$i]['error']){
            $ShipTxt.='<td colspan="2" class="main">'.$quotes[$i]['module'].'&nbsp;';
            $ShipTxt.= '('.$quotes[$i]['error'].')</td></tr><tr><td colspan="3"></td></tr>';
          }else{
            if($selected_shipping['id'] == $thisquoteid){
             // commented for v2.10 : $ShipTxt.='<td class="main"><a title="Select this method" href="_"  onclick="return shipincart_submit(\''.$thisquoteid.'\');"><b>'.$quotes[$i]['module'].'&nbsp;';
           $ShipTxt.='<td  class="main" style="color:#222;">'.($quotes[$i]['methods'][$j]['cost']==1||$quotes[$i]['methods'][$j]['cost']==0?'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;':'<input type="radio" name="ship" style="width:20px; height:20px;" title="' . CART_SELECT_THIS_METHOD .'" checked onclick="return shipincart_submit(\''.$thisquoteid.'\');" />').'&nbsp;&nbsp;&nbsp;<b>'.$quotes[$i]['module'].'&nbsp;';


              $ShipTxt.= '('.$quotes[$i]['methods'][0]['title'].')</b>&nbsp;&nbsp;&nbsp;</td><td align="right" class="main" style="color:#222;"><b>'.($quotes[$i]['methods'][$j]['cost']==1||$quotes[$i]['methods'][$j]['cost']==0?"No Service":$currencies->format(tep_add_tax($quotes[$i]['methods'][$j]['cost'], $quotes[$i]['tax']))).'</b></td></tr><tr><td colspan="3"></td></tr>';
            }else{
             // commented for v2.10 : $ShipTxt.='<td class="main"><a title="Select this method" href="_" onclick="return shipincart_submit(\''.$thisquoteid.'\');">'.$quotes[$i]['module'].'&nbsp;';
         $ShipTxt.='<td  class="main">'.($quotes[$i]['methods'][$j]['cost']==1||$quotes[$i]['methods'][$j]['cost']==0?'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;':'<input type="radio" style="width:20px; height:20px;" name="ship" title="' . CART_SELECT_THIS_METHOD .'" onclick="return shipincart_submit(\''.$thisquoteid.'\');" />').'&nbsp;&nbsp;&nbsp;'.$quotes[$i]['module'].'&nbsp;';

              $ShipTxt.= '('.$quotes[$i]['methods'][0]['title'].')&nbsp;&nbsp;&nbsp;</td><td colspan="3" align="right" class="main">'.($quotes[$i]['methods'][$j]['cost']==1||$quotes[$i]['methods'][$j]['cost']==0?"No Service":$currencies->format(tep_add_tax($quotes[$i]['methods'][$j]['cost'], $quotes[$i]['tax']))).'</td></tr><tr><td colspan="3"></td></tr>';
            }
          }
          // added to Display Message when No Shipping Options are Available
          $at_least_one_quote_printed = true;
        } elseif(sizeof($quotes[$i]['methods'])>1) {
          // shipping method with sub methods (multipickup)
          for ($j=0, $n2=sizeof($quotes[$i]['methods']); $j<$n2; $j++) {
            $thisquoteid = $quotes[$i]['id'].'_'.$quotes[$i]['methods'][$j]['id'];
            $ShipTxt.= '<tr class="'.$extra.'"';
            if($selected_shipping['id'] == $thisquoteid){
                $ShipTxt.=' style="border:1px doted #111;background:#f4f4f4;"';
            }
            $ShipTxt.='>';
            //$ShipTxt.='<td class="main">'.$quotes[$i]['icon'].'&nbsp;&nbsp;&nbsp;</td>';
            if($quotes[$i]['error']){
              $ShipTxt.='<td colspan="3" class="main" >'.$quotes[$i]['module'].'&nbsp;';
              $ShipTxt.= '('.$quotes[$i]['error'].')</td></tr><tr><td colspan="3"></td></tr>';
            }else{
              if($selected_shipping['id'] == $thisquoteid){
               // commented for v2.10 :  $ShipTxt.='<td class="main"><a title="Select this method" href="_" onclick="return shipincart_submit(\''.$thisquoteid.'\');"><b>'.$quotes[$i]['module'].'&nbsp;';
              $ShipTxt.='<td class="main" style="color:#222;">'.($quotes[$i]['methods'][$j]['cost']==1||$quotes[$i]['methods'][$j]['cost']==0?'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;':'<input type="radio" name="ship" title="' . CART_SELECT_THIS_METHOD .'" checked onclick="return shipincart_submit(\''.$thisquoteid.'\');" />').'<b>&nbsp;&nbsp;&nbsp;'.$quotes[$i]['module'].'&nbsp;
			  </td><td class="main" style="color:#222;">
			  ';


                $ShipTxt.= '('.$quotes[$i]['methods'][$j]['title'].')</b>&nbsp;&nbsp;&nbsp;</td><td align="right" class="main" style="color:#222;"><b>'.($quotes[$i]['methods'][$j]['cost']==1||$quotes[$i]['methods'][$j]['cost']==0?"No Service":$currencies->format(tep_add_tax($quotes[$i]['methods'][$j]['cost'], $quotes[$i]['tax']))).'</b></td></tr><tr><td colspan="3"></td></tr>';
				
    


              }else{

              // commented for v2.10 :   $ShipTxt.='<td class="main"><a title="Select this method" href="_" onclick="return shipincart_submit(\''.$thisquoteid.'\');">'.$quotes[$i]['module'].'&nbsp;';
               $ShipTxt.='<td class="main">'.($quotes[$i]['methods'][$j]['cost']==1||$quotes[$i]['methods'][$j]['cost']==0?'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;':'<input type="radio" name="ship" title="' . CART_SELECT_THIS_METHOD .'" onclick="return shipincart_submit(\''.$thisquoteid.'\');" />').'&nbsp;&nbsp;&nbsp;'.$quotes[$i]['module'].'&nbsp;
			   </td><td class="main">
			   ';

                $ShipTxt.= '('.$quotes[$i]['methods'][$j]['title'].')&nbsp;&nbsp;&nbsp;</td><td align="right" class="main">'.($quotes[$i]['methods'][$j]['cost']==1||$quotes[$i]['methods'][$j]['cost']==0?"No Service":$currencies->format(tep_add_tax($quotes[$i]['methods'][$j]['cost'], $quotes[$i]['tax']))).'</td></tr><tr><td colspan="3"></td></tr>';
              }
            }
          }
		  
		  $ShipTxt.='<td class="main" style="color:#222;border:5px">'.'<br><b>'.'Will Call: '.'<br>'.' 2300 wilbur Ave'.'<br>'.'Antioch CA 94509 '.'<br>'.'Available upon checkout.'.'&nbsp;';
		
		 $ShipTxt.= '</b>&nbsp;&nbsp;&nbsp;</td>
				<td align="right" class="main" style="color:#222;"><b>'.'$0.00'.'</b></td></tr>';
          // added to Display Message when No Shipping Options are Available
          $at_least_one_quote_printed = true;
		  
        }
		
		
				
      }
      // added to Display Message when No Shipping Options are Available
      if (!$at_least_one_quote_printed) {
	   // $ShipTxt.= '<tr><td colspan="4" class="main" align="center">'.SHIPPING_ESTIMATOR_NO_OPTIONS_MESSAGE.'</td></tr>';
	  }
    } ?><?php
  }
  $ShipTxt.= '</table></form>';

  $info_box_contents = array();
  $info_box_contents[] = array('text' => $ShipTxt);
  new infoBox($info_box_contents);

  if (CARTSHIP_SHOWOT == 'true'){
    // BOF get taxes if not logged in
    if (!tep_session_is_registered('customer_id')){
      $products = $cart->get_products();
      for ($i=0, $n=sizeof($products); $i<$n; $i++) {
        $products_tax = tep_get_tax_rate($products[$i]['tax_class_id'], $order->delivery['country_id'],$order->delivery['zone_id']);
        $products_tax_description = tep_get_tax_description($products[$i]['tax_class_id'], $order->delivery['country_id'], $order->delivery['zone_id']);
        if (DISPLAY_PRICE_WITH_TAX == 'true') {
         //Modified by Strider 42 to correct the tax calculation when a customer is not logged in
         // $tax_val = ($products[$i]['final_price']-(($products[$i]['final_price']*100)/(100+$products_tax)))*$products[$i]['quantity'];
          $tax_val = (($products[$i]['final_price']/100)*$products_tax)*$products[$i]['quantity'];
        } else {
          $tax_val = (($products[$i]['final_price']*$products_tax)/100)*$products[$i]['quantity'];
        }
		//ss
        $order->info['tax'] += $tax_val;
        $order->info['tax_groups']["$products_tax_description"] += $tax_val;
        // Modified by Strider 42 to correct the order total figure when shop displays prices with tax
        if (DISPLAY_PRICE_WITH_TAX == 'true') {
           $order->info['total'];
        } else {
        $order->info['total']+=$tax_val;
               }
      }
    }
    // EOF get taxes if not logged in (seems like less code than in order class)
    require(DIR_WS_CLASSES . 'order_total.php');?>
    <tr >
    <td height="138" align="right" class="main" style=" border-left:0px solid ; color:black ; font-size:10px; font-weight:bold;  !important;" >
	
	<?php
    $order_total_modules = new order_total;
    //echo '</td><td align="right">';
    // order total code
    $order_total_modules->process();

    $info_box_contents = array();
  $info_box_contents[] = array('text' => '<b>' . CART_OT . '</b>'); //azer version 2.20

    //new infoBoxHeading($info_box_contents, false, false);
    $otTxt='<hr />
	<table align="right" border="0" cellspacing="0" cellpadding="0"  >';
    $otTxt.=$order_total_modules->output().'</table>';

    $info_box_contents = array();
    $info_box_contents[] = array('text' => $otTxt);

    new infoBox($info_box_contents);
  }
} // Use only when cart_contents > 0

?></td>
  </tr>
<script language="JavaScript">
 
    $('#postcode').on('blur',function(){     
		 var postcode= $(this).val();
		 if(postcode.length==0){
		 $('#errormsgpostcode').html("<img src='img/iconCheckX.gif' />");
		  }
		  else
		  {
		   $('#errormsgpostcode').html("<img src='img/iconCheckOn.gif' />");
		
		   }
            
	      });$('#postcode2').on('blur',function(){     
		 var postcode= $(this).val();
		 if(postcode.length==0){
		 $('#errormsgpostcode2').html("<img src='img/iconCheckX.gif' />");
		  }
		  else
		  {
		   $('#errormsgpostcode2').html("<img src='img/iconCheckOn.gif' />");
		
		   }
            
	      });
</script>
          
</div>




</div>
