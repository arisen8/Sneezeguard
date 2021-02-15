<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/
  define("ENCRYPTION_KEY", "Esneez!@#$%^&*vIHAS1234");
  function encrypt($pure_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
    return $encrypted_string;
}
  include('includes/application_top.php');
			
			//coading for calling the custom values
			$var1=array();
			$doub_star=$trip_star=$sin_hash=$doub_hash=false;
            $i=0;
            $var=tep_db_query("select * from ".TABLE_CART_MESSAGE);
            while($row=tep_db_fetch_array($var)){
                $var1[$i]=$row['value'];
                $i++;
            }
			
  /**New Add On*/
  require_once("Mobile_Detect.php");
        $detect = new Mobile_Detect();
   $tablet = 'Tablet';
   $mobile1 = 'Mobile';
  
   
     $ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];      
	 $isp = 'PC';
      if($detect->isMobile() || $detect->isTablet()) {
			$isp = 'Mobile';
			}	 
	  
	  
	  
	  
  /**End New Add On*/
  

// if the customer is not logged on, redirect them to the login page
  if (!tep_session_is_registered('customer_id')) {
    $navigation->set_snapshot(array('mode' => 'SSL', 'page' => FILENAME_CHECKOUT_PAYMENT));
    tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
  }

// if there is nothing in the customers cart, redirect them to the shopping cart page
  if ($cart->count_contents() < 1) {
    tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
  }

// if no shipping method has been selected, redirect the customer to the shipping method selection page
  if (!tep_session_is_registered('shipping') || !tep_session_is_registered('sendto')) {
    tep_redirect(tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'));
  }

  if ( (tep_not_null(MODULE_PAYMENT_INSTALLED)) && (!tep_session_is_registered('payment')) ) {
    tep_redirect(tep_href_link(FILENAME_CHECKOUT_PAYMENT, '', 'SSL'));
 }

// avoid hack attempts during the checkout procedure by checking the internal cartID
  if (isset($cart->cartID) && tep_session_is_registered('cartID')) {
    if ($cart->cartID != $cartID) {
      tep_redirect(tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'));
    }
  }

  include(DIR_WS_LANGUAGES . $language . '/' . FILENAME_CHECKOUT_PROCESS);

// load selected payment module
  require(DIR_WS_CLASSES . 'payment.php');
  $payment_modules = new payment($payment);

// load the selected shipping module
  require(DIR_WS_CLASSES . 'shipping.php');
  $shipping_modules = new shipping($shipping);

  require(DIR_WS_CLASSES . 'order.php');
  $order = new order;

// Stock Check
  $any_out_of_stock = false;
  if (STOCK_CHECK == 'true') {
    for ($i=0, $n=sizeof($order->products); $i<$n; $i++) {
      if (tep_check_stock($order->products[$i]['id'], $order->products[$i]['qty'])) {
        $any_out_of_stock = true;
      }
    }
    // Out of Stock
    if ( (STOCK_ALLOW_CHECKOUT != 'true') && ($any_out_of_stock == true) ) {
      tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
    }
  }

  $payment_modules->update_status();

  if ( ($payment_modules->selected_module != $payment) || ( is_array($payment_modules->modules) && (sizeof($payment_modules->modules) > 1) && !is_object($$payment) ) || (is_object($$payment) && ($$payment->enabled == false)) ) {
    //tep_redirect(tep_href_link(FILENAME_CHECKOUT_PAYMENT, 'error_message=' . urlencode(ERROR_NO_PAYMENT_MODULE_SELECTED), 'SSL'));
  }

  require(DIR_WS_CLASSES . 'order_total.php');
  
  $order_total_modules = new order_total;

  $order_totals = $order_total_modules->process();
  
// load the before_process function from the payment modules
  $payment_modules->before_process();
 $encrypted_cc = encrypt($_POST['cc_number'], ENCRYPTION_KEY);
  $sql_data_array = array('customers_id' => $customer_id,
                          'customers_name' => $order->customer['firstname'] . ' ' . $order->customer['lastname'],
                          'customers_company' => $order->customer['company'],
                          'customers_street_address' => $order->customer['street_address'],
                          'customers_suburb' => $order->customer['suburb'],
                          'customers_city' => $order->customer['city'],
                          'customers_postcode' => $order->customer['postcode'], 
                          'customers_state' => $order->customer['state'], 
                          'customers_country' => $order->customer['country']['title'], 
                          'customers_telephone' => $order->customer['telephone'], 
                          'customers_email_address' => $order->customer['email_address'],
                          'customers_address_format_id' => $order->customer['format_id'], 
                          'delivery_name' => trim($order->delivery['firstname'] . ' ' . $order->delivery['lastname']),
                          'delivery_company' => $order->delivery['company'],
                          'delivery_street_address' => $order->delivery['street_address'], 
                          'delivery_suburb' => $order->delivery['suburb'], 
                          'delivery_city' => $order->delivery['city'], 
                          'delivery_postcode' => $order->delivery['postcode'], 
                          'delivery_state' => $order->delivery['state'], 
                          'delivery_country' => $order->delivery['country']['title'], 
                          'delivery_address_format_id' => $order->delivery['format_id'], 
                          'billing_name' => $order->billing['firstname'] . ' ' . $order->billing['lastname'], 
                          'billing_company' => $order->billing['company'],
                          'billing_street_address' => $order->billing['street_address'], 
                          'billing_suburb' => $order->billing['suburb'], 
                          'billing_city' => $order->billing['city'], 
                          'billing_postcode' => $order->billing['postcode'], 
                          'billing_state' => $order->billing['state'], 
                          'billing_country' => $order->billing['country']['title'], 
                          'billing_address_format_id' => $order->billing['format_id'], 
                          'payment_method' => $order->info['payment_method'], 
                          'cc_type' => $_POST['cc_type'], 
                          'cc_owner' => $_POST['cc_owner'], 
                          'cc_number' => $encrypted_cc, 
                          'cc_expires' => $_POST['cc_expires'], 
                          'date_purchased' => 'now()', 
                          'orders_status' => $order->info['order_status'], 
                          'currency' => $order->info['currency'], 
                          'currency_value' => $order->info['currency_value'],
                          'ipaddy' => $ip,
                          'ipisp' => $isp);
  tep_db_perform(TABLE_ORDERS, $sql_data_array);
  $insert_id = tep_db_insert_id();
  
  for ($i=0, $n=sizeof($order_totals); $i<$n; $i++) {
    $sql_data_array = array('orders_id' => $insert_id,
                            'title' => $order_totals[$i]['title'],
                            'text' => $order_totals[$i]['text'],
                            'value' => $order_totals[$i]['value'], 
                            'class' => $order_totals[$i]['code'], 
                            'sort_order' => $order_totals[$i]['sort_order']);
    tep_db_perform(TABLE_ORDERS_TOTAL, $sql_data_array);
  }

  $customer_notification = (SEND_EMAILS == 'true') ? '1' : '0';
  $sql_data_array = array('orders_id' => $insert_id, 
                          'orders_status_id' => $order->info['order_status'], 
                          'date_added' => 'now()', 
                          'customer_notified' => $customer_notification,
                          'comments' => $order->info['comments']);
  tep_db_perform(TABLE_ORDERS_STATUS_HISTORY, $sql_data_array);
  
  
  //kgt - discount coupons
  if( tep_session_is_registered( 'coupon' ) && is_object( $order->coupon ) ) {
	  $sql_data_array = array( 'coupons_id' => $order->coupon->coupon['coupons_id'],
                             'orders_id' => $insert_id );
	  tep_db_perform( TABLE_DISCOUNT_COUPONS_TO_ORDERS, $sql_data_array );
  }
  //end kgt - discount coupons
	
// initialized for the email confirmation
  $products_ordered = '<tr><td bgcolor="#879385" align="left" style="font-size:12px;padding:2px;color:#fff;font-weight:bold;">Item</td><td bgcolor="#879385" align="left" style="font-size:12px;padding:2px;color:#fff;font-weight:bold;">Model</td><td bgcolor="#879385" align="center" style="font-size:12px;padding:2px;color:#fff;font-weight:bold;">Quantity</td><td bgcolor="#879385" align="right" style="font-size:12px;padding:2px;color:#fff;font-weight:bold;">Total:</td></tr>';

















  for ($i=0, $n=sizeof($order->products); $i<$n; $i++) {
// Stock Update - Joao Correia
    if (STOCK_LIMITED == 'true') {
      if (DOWNLOAD_ENABLED == 'true') {
        $stock_query_raw = "SELECT products_quantity, pad.products_attributes_filename 
                            FROM " . TABLE_PRODUCTS . " p
                            LEFT JOIN " . TABLE_PRODUCTS_ATTRIBUTES . " pa
                             ON p.products_id=pa.products_id
                            LEFT JOIN " . TABLE_PRODUCTS_ATTRIBUTES_DOWNLOAD . " pad
                             ON pa.products_attributes_id=pad.products_attributes_id
                            WHERE p.products_id = '" . tep_get_prid($order->products[$i]['id']) . "'";
// Will work with only one option for downloadable products
// otherwise, we have to build the query dynamically with a loop
        $products_attributes = $order->products[$i]['attributes'];
        if (is_array($products_attributes)) {
          $stock_query_raw .= " AND pa.options_id = '" . $products_attributes[0]['option_id'] . "' AND pa.options_values_id = '" . $products_attributes[0]['value_id'] . "'";
        }
        $stock_query = tep_db_query($stock_query_raw);
      } else {
        $stock_query = tep_db_query("select products_quantity from " . TABLE_PRODUCTS . " where products_id = '" . tep_get_prid($order->products[$i]['id']) . "'");
      }
      if (tep_db_num_rows($stock_query) > 0) {
        $stock_values = tep_db_fetch_array($stock_query);
// do not decrement quantities if products_attributes_filename exists
        if ((DOWNLOAD_ENABLED != 'true') || (!$stock_values['products_attributes_filename'])) {
          $stock_left = $stock_values['products_quantity'] - $order->products[$i]['qty'];
        } else {
          $stock_left = $stock_values['products_quantity'];
        }
        tep_db_query("update " . TABLE_PRODUCTS . " set products_quantity = '" . $stock_left . "' where products_id = '" . tep_get_prid($order->products[$i]['id']) . "'");
        if ( ($stock_left < 1) && (STOCK_ALLOW_CHECKOUT == 'false') ) {
          tep_db_query("update " . TABLE_PRODUCTS . " set products_status = '0' where products_id = '" . tep_get_prid($order->products[$i]['id']) . "'");
        }
      }
    }








// Update products_ordered (for bestsellers list)
    tep_db_query("update " . TABLE_PRODUCTS . " set products_ordered = products_ordered + " . sprintf('%d', $order->products[$i]['qty']) . " where products_id = '" . tep_get_prid($order->products[$i]['id']) . "'");

 if(sizeof($_SESSION['product_final'])<1){

    $sql_data_array = array('orders_id' => $insert_id, 
                            'products_id' => tep_get_prid($order->products[$i]['id']), 
                            'products_model' => $order->products[$i]['model'], 
                            'products_name' => $order->products[$i]['name'], 
                            'products_price' => $order->products[$i]['price'], 
                            'final_price' => $order->products[$i]['final_price'], 
                            'products_tax' => $order->products[$i]['tax'], 
                            'products_quantity' => $order->products[$i]['qty']);
							
							
							//check here
							
							
							
	
							
    tep_db_perform(TABLE_ORDERS_PRODUCTS, $sql_data_array);
	
	
	
    $order_products_id = tep_db_insert_id();

//------insert customer choosen option to order--------
    $attributes_exist = '0';
    $products_ordered_attributes = '';
    if (isset($order->products[$i]['attributes'])) {
      $attributes_exist = '1';
      for ($j=0, $n2=sizeof($order->products[$i]['attributes']); $j<$n2; $j++) {
        if (DOWNLOAD_ENABLED == 'true') {
          $attributes_query = "select popt.products_options_name, poval.products_options_values_name, pa.options_values_price, pa.price_prefix, pad.products_attributes_maxdays, pad.products_attributes_maxcount , pad.products_attributes_filename 
                               from " . TABLE_PRODUCTS_OPTIONS . " popt, " . TABLE_PRODUCTS_OPTIONS_VALUES . " poval, " . TABLE_PRODUCTS_ATTRIBUTES . " pa 
                               left join " . TABLE_PRODUCTS_ATTRIBUTES_DOWNLOAD . " pad
                                on pa.products_attributes_id=pad.products_attributes_id
                               where pa.products_id = '" . $order->products[$i]['id'] . "' 
                                and pa.options_id = '" . $order->products[$i]['attributes'][$j]['option_id'] . "' 
                                and pa.options_id = popt.products_options_id 
                                and pa.options_values_id = '" . $order->products[$i]['attributes'][$j]['value_id'] . "' 
                                and pa.options_values_id = poval.products_options_values_id 
                                and popt.language_id = '" . $languages_id . "' 
                                and poval.language_id = '" . $languages_id . "'";
          $attributes = tep_db_query($attributes_query);
        } else {
          $attributes = tep_db_query("select popt.products_options_name, poval.products_options_values_name, pa.options_values_price, pa.price_prefix from " . TABLE_PRODUCTS_OPTIONS . " popt, " . TABLE_PRODUCTS_OPTIONS_VALUES . " poval, " . TABLE_PRODUCTS_ATTRIBUTES . " pa where pa.products_id = '" . $order->products[$i]['id'] . "' and pa.options_id = '" . $order->products[$i]['attributes'][$j]['option_id'] . "' and pa.options_id = popt.products_options_id and pa.options_values_id = '" . $order->products[$i]['attributes'][$j]['value_id'] . "' and pa.options_values_id = poval.products_options_values_id and popt.language_id = '" . $languages_id . "' and poval.language_id = '" . $languages_id . "'");
        }
        $attributes_values = tep_db_fetch_array($attributes);

        $sql_data_array = array('orders_id' => $insert_id, 
                                'orders_products_id' => $order_products_id, 
                                'products_options' => $attributes_values['products_options_name'],
                                'products_options_values' => $attributes_values['products_options_values_name'], 
                                'options_values_price' => $attributes_values['options_values_price'], 
                                'price_prefix' => $attributes_values['price_prefix']);
        tep_db_perform(TABLE_ORDERS_PRODUCTS_ATTRIBUTES, $sql_data_array);

        if ((DOWNLOAD_ENABLED == 'true') && isset($attributes_values['products_attributes_filename']) && tep_not_null($attributes_values['products_attributes_filename'])) {
          $sql_data_array = array('orders_id' => $insert_id, 
                                  'orders_products_id' => $order_products_id, 
                                  'orders_products_filename' => $attributes_values['products_attributes_filename'], 
                                  'download_maxdays' => $attributes_values['products_attributes_maxdays'], 
                                  'download_count' => $attributes_values['products_attributes_maxcount']);
          tep_db_perform(TABLE_ORDERS_PRODUCTS_DOWNLOAD, $sql_data_array);
        }
        $products_ordered_attributes .= "\n\t" . $attributes_values['products_options_name'] . ' ' . $attributes_values['products_options_values_name'];
      }
    }
	
//------insert customer choosen option eof ----
    $products_ordered .= '<tr><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;">'.$order->products[$i]['name'] . '</td><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;">' . $order->products[$i]['model'] . ' </td><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;" align="center">' . $order->products[$i]['qty'] . '</td><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;" align="right">' . $currencies->display_price($order->products[$i]['final_price'], $order->products[$i]['tax'], $order->products[$i]['qty']) . $products_ordered_attributes . '</td><tr>';
	
	}
    //$products_ordered .= $order->products[$i]['qty'] . ' x ' . $order->products[$i]['name'] . ' (' . $order->products[$i]['model'] . ') = ' . $currencies->display_price($order->products[$i]['final_price'], $order->products[$i]['tax'], $order->products[$i]['qty']) . $products_ordered_attributes . "\n";
  }

//for custom product array
$yog="Will Call";
$finalname2=$order_totals[1]['title'];
if (strpos($finalname2,'Ground') !== false){
		$finalname2='<div style="background:white">'.$order_totals[1]['title']. "\n".strip_tags($order_totals[1]['text']).'</div>';
	}
else if (strpos($finalname2,'Free') !== false){
		$finalname2='<div style="background:white"><font color="red" size="4"><b>'.$yog. "\n".strip_tags($order_totals[1]['text']).'</b></font></div>';
	}else{
	
	
	$finalname2='<div style="background:white"><font color="red" size="3"><b>'.$order_totals[1]['title']. "\n".strip_tags($order_totals[1]['text']).'</b></font></div>';
	}
	

$product_insert_attributes=array();
 if(sizeof($_SESSION['product_final'])>=1){
    $l=0;
  	foreach($_SESSION['product_final'] as $val){
	$finalname=$val['name'];
	if (strpos($finalname,'*') !== false){
		$finalname='<div style="background:#B7B7FF">'.$val['name'].'</div>';
	}else{
		$finalname=$val['name'];
	}
	$sql_data_array = array('orders_id' => $insert_id, 
                            'products_id' => $val['id'], 
                            'products_model' => $val['model'], 
                            'products_name' => $val['name'], 
                            'products_price' => $val['amt'], 
                            'final_price' => $val['amt'], 
                            'products_tax' => 0, 
                            'products_quantity' => $val['qty']);
							
							
							//check here
							
							
							
	
							
    tep_db_perform(TABLE_ORDERS_PRODUCTS, $sql_data_array);
	
	
	
    $order_products_id = tep_db_insert_id();
	if (strpos($finalname,'Custom Angle') !== false){
		array_push($product_insert_attributes,$order_products_id);			
	}
	$products_ordered .= '<tr><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;">'.$finalname. '</td><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;">' . $val['model'] . ' </td><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;" align="center">' . $val['qty'] . '</td><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;" align="right">' .$val['price'] . $products_ordered_attributes . '</td><tr>';
	$l++;
	}
 }






$ai=0;

 for ($i=0, $n=sizeof($order->products); $i<$n; $i++) {

//------insert customer choosen option to order--------
    $attributes_exist = '0';
    $products_ordered_attributes = '';
    if (isset($order->products[$i]['attributes'])) {
      $attributes_exist = '1';
      for ($j=0, $n2=sizeof($order->products[$i]['attributes']); $j<$n2; $j++) {
        if (DOWNLOAD_ENABLED == 'true') {
          $attributes_query = "select popt.products_options_name, poval.products_options_values_name, pa.options_values_price, pa.price_prefix, pad.products_attributes_maxdays, pad.products_attributes_maxcount , pad.products_attributes_filename 
                               from " . TABLE_PRODUCTS_OPTIONS . " popt, " . TABLE_PRODUCTS_OPTIONS_VALUES . " poval, " . TABLE_PRODUCTS_ATTRIBUTES . " pa 
                               left join " . TABLE_PRODUCTS_ATTRIBUTES_DOWNLOAD . " pad
                                on pa.products_attributes_id=pad.products_attributes_id
                               where pa.products_id = '" . $order->products[$i]['id'] . "' 
                                and pa.options_id = '" . $order->products[$i]['attributes'][$j]['option_id'] . "' 
                                and pa.options_id = popt.products_options_id 
                                and pa.options_values_id = '" . $order->products[$i]['attributes'][$j]['value_id'] . "' 
                                and pa.options_values_id = poval.products_options_values_id 
                                and popt.language_id = '" . $languages_id . "' 
                                and poval.language_id = '" . $languages_id . "'";
          $attributes = tep_db_query($attributes_query);
        } else {
          $attributes = tep_db_query("select popt.products_options_name, poval.products_options_values_name, pa.options_values_price, pa.price_prefix from " . TABLE_PRODUCTS_OPTIONS . " popt, " . TABLE_PRODUCTS_OPTIONS_VALUES . " poval, " . TABLE_PRODUCTS_ATTRIBUTES . " pa where pa.products_id = '" . $order->products[$i]['id'] . "' and pa.options_id = '" . $order->products[$i]['attributes'][$j]['option_id'] . "' and pa.options_id = popt.products_options_id and pa.options_values_id = '" . $order->products[$i]['attributes'][$j]['value_id'] . "' and pa.options_values_id = poval.products_options_values_id and popt.language_id = '" . $languages_id . "' and poval.language_id = '" . $languages_id . "'");
        }
        $attributes_values = tep_db_fetch_array($attributes);

        $sql_data_array = array('orders_id' => $insert_id, 
                                'orders_products_id' => $product_insert_attributes[$ai], 
                                'products_options' => $attributes_values['products_options_name'],
                                'products_options_values' => $attributes_values['products_options_values_name'], 
                                'options_values_price' => $attributes_values['options_values_price'], 
                                'price_prefix' => $attributes_values['price_prefix']);
        tep_db_perform(TABLE_ORDERS_PRODUCTS_ATTRIBUTES, $sql_data_array);

        if ((DOWNLOAD_ENABLED == 'true') && isset($attributes_values['products_attributes_filename']) && tep_not_null($attributes_values['products_attributes_filename'])) {
          $sql_data_array = array('orders_id' => $insert_id, 
                                  'orders_products_id' => $product_insert_attributes[$ai], 
                                  'orders_products_filename' => $attributes_values['products_attributes_filename'], 
                                  'download_maxdays' => $attributes_values['products_attributes_maxdays'], 
                                  'download_count' => $attributes_values['products_attributes_maxcount']);
          tep_db_perform(TABLE_ORDERS_PRODUCTS_DOWNLOAD, $sql_data_array);
        }
        $products_ordered_attributes .= "\n\t" . $attributes_values['products_options_name'] . ' ' . $attributes_values['products_options_values_name'];
      }
	  $ai++;
    }
	
	
//------insert customer choosen option eof ----

	
	
   $products_ordered2 .='<tr><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;">'. $order->products[$i]['qty'] . '</td><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;"> ' . $order->products[$i]['name'].'<br>'. $products_ordered_attributes  . ' </td><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;" align="center">' . $order->products[$i]['model'] . '</td><td bgcolor="#f0f0f0" style="font-size:12px;padding:2px;" align="right">' . $currencies->display_price($order->products[$i]['final_price'], $order->products[$i]['tax'], $order->products[$i]['qty']) . '</td><tr>';

}

//print_r($products_ordered2);exit;











 // Discount Code 2.6 - start
if (MODULE_ORDER_TOTAL_DISCOUNT_STATUS == 'true' && !empty($discount)) {
$discount_codes_query = tep_db_query("select discount_codes_id from discount_codes where
discount_codes = '" . tep_db_input($sess_discount_code) . "'");
$discount_codes = tep_db_fetch_array($discount_codes_query);
tep_db_perform('customers_to_discount_codes', array('customers_id' => $customer_id,
'discount_codes_id' => $discount_codes['discount_codes_id']));
tep_session_unregister('sess_discount_code');
}
// Discount Code 2.6 - end
	if(!empty($_SESSION["scr"])){
		$img=explode("-", $_SESSION["scr"]);
		//echo sizeof($img);
		$i=0;
		while($i<sizeof($img)){
			//$pth="includes/img/482d6d60ac86ba3ad9fbd4955094c358_".$img[$i].".jpg";
			//echo '<img src="'.$pth.'">';
			$res=tep_db_query("SELECT id FROM `screen_table` where img_id=".$img[$i]." AND order_no =''");//Fetching the popups from database!
			if(mysql_num_rows($res) > 0){
				while($row=tep_db_fetch_array($res)){
					$id=$row["id"];
					//echo $id;
				}
				tep_db_query("UPDATE screen_table SET order_no = '".$insert_id."' where id=".$id);
			}
			
			
			
			
			
				$res2=tep_db_query("SELECT id FROM `screen_table_banner` where img_id=".$img[$i]." AND order_no ='' AND side ='1'");//Fetching the popups from database!
			if(mysql_num_rows($res2) > 0){
				while($row2=tep_db_fetch_array($res2)){
					$id2=$row2["id"];
					//echo $id;
				}
				tep_db_query("UPDATE screen_table_banner SET order_no = '".$insert_id."' where id=".$id2);
			}
			
			
				$res3=tep_db_query("SELECT id FROM `screen_table_banner` where img_id=".$img[$i]." AND order_no ='' AND side ='2'");//Fetching the popups from database!
			if(mysql_num_rows($res3) > 0){
				while($row3=tep_db_fetch_array($res3)){
					$id3=$row3["id"];
					//echo $id;
				}
				tep_db_query("UPDATE screen_table_banner SET order_no = '".$insert_id."' where id=".$id3);
			}
			
			
			
			
			
			
			
			
			
			
			
			
			$i++;
		}  
	}
  
// lets start with the email confirmation
  $email_order = '<table><tr><td colspan="4" style="font-size:12px;padding:2px;"><a href="http://www.sneezeguards.com"><img src="https://www.sneezeguard.com/images/oscommerce.gif" border="0"></a></td></tr>' . //This is use to store name
                '<tr><td colspan="4" style="font-size:12px;padding:2px;"><strong>Dear '.$order->customer['firstname'] . ' ' . $order->customer['lastname'].'</strong></td></tr>'.
                '<tr><td colspan="4" style="font-size:12px;padding:2px;">Thank you for shopping with us today.</td></tr>'.
                '<tr><td colspan="4" style="font-size:12px;padding:2px;">Note: Your tracking information will arrive in a seperate email from FedEx Shipment Notification</td></tr>'.
                '<tr><td><br></td></tr>'.
                '<tr><td colspan="4" style="font-size:12px;padding:2px;">Please find below the details of your order:</td></tr>'.
                '<tr><td><br></td></tr>'.
                '<tr><td colspan="4" style="font-size:12px;padding:2px;">'. EMAIL_TEXT_ORDER_NUMBER . ' <storng>' . $insert_id . "</strong></td></tr>" .//This is use to order  number
                '<tr><td colspan="4" style="font-size:12px;padding:2px;">'. EMAIL_TEXT_DATE_ORDERED . ' <strong>' . strftime(DATE_FORMAT_LONG) . "</strong></td></tr>". //This is use to order Date
                '<tr><td colspan="4" style="font-size:12px;padding:2px;"><a href="'.tep_href_link(FILENAME_ACCOUNT_HISTORY_INFO, 'order_id=' . $insert_id, 'SSL', false).'">Detailed Invoice:</a></td></tr>'.
                '<tr><td><br></tr>';       
if (strpos($finalname,'Custom Angle') !== false){
                 $email_order .= '<tr><td colspan="4" style="font-size:12px;padding:2px;">'.EMAIL_TEXT_PRODUCTS . '</td></tr>' . 
                  //EMAIL_SEPARATOR . "\n" . 
				  
		 
	      $products_ordered2  ;
}else{
  $email_order .= '<tr><td colspan="4" style="font-size:12px;padding:2px;">'.EMAIL_TEXT_PRODUCTS . '</td></tr>' . 
                  //EMAIL_SEPARATOR . "\n" . 
				  
		 
	      $products_ordered  ; }
                  //EMAIL_SEPARATOR . "\n";
$email_order.='<tr><td colspan="4" style="font-size:12px;padding:2px;">';

$email_order.='<div style="text-align:right;">';

  //Previous...
    // $email_order .= strip_tags($order_totals[0]['title']). ' ' . strip_tags($order_totals[0]['text']). "\n".$finalname2. "\n".strip_tags($order_totals[2]['title']). ' ' . strip_tags($order_totals[2]['text']). "\n".strip_tags($order_totals[3]['title']) . ' ' . strip_tags($order_totals[3]['text']). "\n".strip_tags($order_totals[4]['title']) . ' ' . strip_tags($order_totals[4]['text']). "\n";

// If Discount Coupon Applied...
if(strchr($order_totals[2]['title'],"applied:")){
  	// echo "If Discount Coupon Applied...";
  	$sub_total_value = $order_totals[0]['text'];
 	$discount_value = $order_totals[2]['text'];

	$total_value = $order_totals[4]['text'];
	$total_value_a = str_replace('<strong>$','',$total_value);
	$total_value_a = str_replace('</strong>','',$total_value_a);

	$sub_t = str_replace('$','',$sub_total_value);
	$dis = str_replace('-$','',$discount_value);

	$cc = $sub_t+$dis;
	$dd = '$'.$cc.'.00';
	$ccc = $total_value_a+$dis;
	$ddd = '$'.$ccc.'.00';


    $email_order .= strip_tags($order_totals[0]['title']). ' ' . strip_tags($dd). "\n".$finalname2. "\n".strip_tags($order_totals[2]['title']). ' ' . strip_tags($order_totals[2]['text']). "\n".strip_tags($order_totals[3]['title']) . ' ' . strip_tags($order_totals[3]['text']). "\n".strip_tags($order_totals[4]['title']) . ' ' . strip_tags($ddd). "\n";


$check_fourth_index=strip_tags($order_totals[4]['title']);
if($check_fourth_index!="")
{
$email_order .="<hr style='border-top: 3px solid #000;' /><b style='background:yellow;'>Grand Total After discount: ".$order_totals[4]['text']." </b><hr style='border-top: 3px solid #000;' />";	
}
else{
$email_order .="<hr style='border-top: 3px solid #000;' /><b style='background:yellow;'>Grand Total After discount: ".$order_totals[3]['text']." </b><hr style='border-top: 3px solid #000;' />";	
}
  
  

}
// If Dealer Coupon Applied...
elseif(strchr($order_totals[2]['title'],"Discount (")){
 	// echo "If Dealer Coupon Applied..."; 	
  	$sub_total_value = $order_totals[0]['text'];

 	$discount_value = $order_totals[2]['text'];
	$discount_value_a = str_replace('<span class="productSpecialPrice">$','',$discount_value);
	$discount_value_a = str_replace('</span>','',$discount_value_a);

	$total_value = $order_totals[4]['text'];
	$total_value_a = str_replace('<strong>$','',$total_value);
	$total_value_a = str_replace('</strong>','',$total_value_a);

	$sub_t = str_replace('$','',$sub_total_value);

	// $cc = $sub_t+$discount_value_a;
	// $dd = '$'.$cc;
	$ccc = $total_value_a+$discount_value_a;
	$ddd = '$'.$ccc;


    $email_order .= strip_tags($order_totals[0]['title']). ' ' . strip_tags($sub_total_value). "\n".$finalname2. "\n".strip_tags($order_totals[2]['title']). ' ' . strip_tags($order_totals[2]['text']). "\n".strip_tags($order_totals[3]['title']) . ' ' . strip_tags($order_totals[3]['text']). "\n".strip_tags($order_totals[4]['title']) . ' ' . strip_tags($ddd). "\n";



$check_fourth_index=strip_tags($order_totals[4]['title']);
if($check_fourth_index!="")
{
$email_order .="<hr style='border-top: 3px solid #000;' /><b style='background:yellow;'>Grand Total After discount: ".$order_totals[4]['text']." </b><hr style='border-top: 3px solid #000;' />";	
}
else{
$email_order .="<hr style='border-top: 3px solid #000;' /><b style='background:yellow;'>Grand Total After discount: ".$order_totals[3]['text']." </b><hr style='border-top: 3px solid #000;' />";	
}



}
//If No Coupon Applied...
else{
  	// echo "If No Coupon Applied...";
  	     $email_order .= strip_tags($order_totals[0]['title']). ' ' . strip_tags($order_totals[0]['text']). "\n".$finalname2. "\n".strip_tags($order_totals[2]['title']). ' ' . strip_tags($order_totals[2]['text']). "\n".strip_tags($order_totals[3]['title']) . ' ' . strip_tags($order_totals[3]['text']). "\n".strip_tags($order_totals[4]['title']) . ' ' . strip_tags($order_totals[4]['text']). "\n";

}

//New...
 

$email_order.='</div>';

//print_r($email_order);exit;



	if(strpos($email_order, "(Squared Corners) Custom Products**") || 
      strpos($email_order, '(Squared Corners) 3/8" Thick Custom Products**')){
		$doub_star=true;
    }
    if(strpos($email_order, "Products***")){
        $trip_star=true;
    }
    if(strpos($email_order, "Heat Lamp")){
        $sin_hash=true;
    }
    if(strpos($email_order, "Infinite Heat Lamp Control")){
        $doub_hash=true;
    }
	if(strpos($email_order, "Frosted Glass")){
        $doub_star=true;
    }
	if($doub_star||$trip_star||$sin_hash||$doub_hash){
		$email_order.='<div align="right">';
		if($doub_star){
			$email_order.='<p><span style="background:#B7B7FF;">**for square corner glass '.$var1[2].' business days.</span></p>';
		}
		if($trip_star){
			$email_order.='<p><span style="background:#B7B7FF;">*** for radius corner glass '.$var1[3].' business days.</span></p>';
		}
		if($sin_hash){
			$email_order.='<p><span style="background:#B7B7FF;">#This products production leadtime is '.$var1[0].' business days.</span></p>';
		}
		if($doub_hash){
			$email_order.='<p><span style="background:#B7B7FF;">##This products production leadtime is '.$var1[1].' business days.</span></p>';
		}
		$email_order.='</div>';
	}
// $tis=0;
//	if(($_SESSION['product_final1'][$tis]['custom'])=='Yes'){
//	$l=0;
//	$array = explode(" ",$_SESSION['product_final1'][$l]['val']);
//	if($array[0]=='Heat'){
//	$email_order.='<div align="right"><span style="background:#B7B7FF;"> #This products production leadtime is '.$var1[0].' business days.</span><br><span style="background:#B7B7FF;">##This products production leadtime is '.$var1[1].' business days.</span></div>';}else{
//      $dis="display:none";
//	} 
//	if($array[0]!='Heat'){
//$email_order.='<div align="right"><span style="background:#B7B7FF;"> **for square corner glass '.$var1[2].' business days.</span><br><span //style="background:#B7B7FF;">*** for radius corner glass '.$var1[3].' business days.</span></div>';}else{
//}
//}
$email_order.='</td></tr>';
		
$email_order.='<tr><td><br></td></tr>';
  if ($order->info['comments']) {
    $email_order .= '<tr><td colspan="4" style="font-size:12px;padding:2px;background:yellow">Customer Comment : '.tep_db_output($order->info['comments']) . '<td></tr>';
  }
$email_order.='<tr>';
  if ($order->content_type != 'virtual') {
    $email_order .= '<td bgcolor="#879385" colspan="2" style="font-size:12px;padding:2px;color:#fff;font-weight:bold;">' . EMAIL_TEXT_DELIVERY_ADDRESS . "</td>";
  }
  $email_order .= '<td bgcolor="#879385" colspan="2" style="font-size:12px;padding:2px;color:#fff;font-weight:bold;">' . EMAIL_TEXT_BILLING_ADDRESS . '</td>';
  $email_order.='</tr>';
  $email_order.='<tr>';
  if ($order->content_type != 'virtual') {
    $email_order .= '<td bgcolor="#f0f0f0" colspan="2" style="font-size:12px;padding:2px;">' . tep_address_label($customer_id, $sendto, 0, '', "\n") . "</td>" ;
  }
  $email_order .= '<td bgcolor="#f0f0f0" colspan="2" style="font-size:12px;padding:2px;">' . tep_address_label($customer_id, $billto, 0, '', "\n") . "</td>" ;
  $email_order.='</tr>';
  
  if (is_object($$payment)) {
    $email_order.='<tr>';
        $email_order .= '<td bgcolor="#879385" colspan="4" style="font-size:12px;padding:2px;color:#fff;font-weight:bold;">'.EMAIL_TEXT_PAYMENT_METHOD . "</td>";
    $email_order.='</tr>';
    $payment_class = $$payment;
    $email_order.='<tr>';
        $email_order .= '<td bgcolor="#f0f0f0" colspan="4" style="font-size:12px;padding:2px;">'.$order->info['payment_method'] . "</td>";
    $email_order.='</tr>';
	

    if(strpos($email_order, "EP6")){
	 $email_order.='<tr><td colspan=4><img src="http://sneezeguard.com/image_new/ep6_qr_code22.png"></td></tr>';
	//ep6_qr_code
	}
	
	
	$res=tep_db_query("SELECT osc_id, img_id FROM `screen_table` where order_no='".$insert_id."'");//Fetching the popups from database!
		if(mysql_num_rows($res) > 0){
			while($row=tep_db_fetch_array($res)){
				$email_order.='<tr><td colspan=4><img width="640" src="http://sneezeguard.com/includes/img/'.$row['osc_id'].'_'.$row['img_id'].'.jpg" style="width:640px !important;"></td></tr>';
				//echo $id;
			}
		}
		$email_order.='<tr>';
    if (isset($payment_class->email_footer)) {
      $email_order .= '<td bgcolor="#f0f0f0" colspan="4" style="font-size:12px;padding:2px;">'.$payment_class->email_footer . "</td>";
    }
    $email_order.='</tr>';
    $email_order.='<tr><td colspan="4" style="font-size:12px;padding:2px;"><p>This email address was given to us by you or by one of our customers. If you feel that you <br>have received this email in error, please send an email to <a href="mailto:info@sneezeguard.com">info@sneezeguard.com</a><br />For questions about this order call 800-690-0002<br>Ships from: 2300 Wilbur Ave. Antioch CA 94509<br>Copyright &copy; '.date('Y').' <a href="http://www.sneezeguard.com">Sneezeguard.com</a></p></td></tr>';
  }
  $email_order.='</table>';
  // echo "<pre>";
  // print_r($email_order);
  tep_mail($order->customer['firstname'] . ' ' . $order->customer['lastname'],decrypt_email($order->customer['email_address'],ENCRYPTION_KEY_EMAIL) , EMAIL_TEXT_SUBJECT, $email_order, STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS);

// send emails to other people
  if (SEND_EXTRA_ORDER_EMAILS_TO != '') {
    tep_mail('', SEND_EXTRA_ORDER_EMAILS_TO, EMAIL_TEXT_SUBJECT, $email_order, STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS);
  }

// load the after_process function from the payment modules
  $payment_modules->after_process();

  $cart->reset(true);

// unregister session variables used during checkout
  tep_session_unregister('sendto');
  tep_session_unregister('billto');
  tep_session_unregister('shipping');
  tep_session_unregister('payment');
  tep_session_unregister('comments');
//kgt - discount coupons
  tep_session_unregister('coupon');
  //end kgt - discount coupons 
  tep_redirect(tep_href_link(FILENAME_CHECKOUT_SUCCESS, '', 'SSL'));

  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
