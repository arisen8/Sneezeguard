<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  if (!tep_session_is_registered('customer_id')) {
    $navigation->set_snapshot();
    tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
  }

  if (!isset($HTTP_GET_VARS['order_id']) || (isset($HTTP_GET_VARS['order_id']) && !is_numeric($HTTP_GET_VARS['order_id']))) {
    tep_redirect(tep_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL'));
  }
  
  $customer_info_query = tep_db_query("select o.customers_id from " . TABLE_ORDERS . " o, " . TABLE_ORDERS_STATUS . " s where o.orders_id = '". (int)$HTTP_GET_VARS['order_id'] . "' and o.orders_status = s.orders_status_id and s.language_id = '" . (int)$languages_id . "' and s.public_flag = '1'");
  $customer_info = tep_db_fetch_array($customer_info_query);
  if ($customer_info['customers_id'] != $customer_id) {
    tep_redirect(tep_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL'));
  }

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ACCOUNT_HISTORY_INFO);

  $breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));
  $breadcrumb->add(NAVBAR_TITLE_2, tep_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL'));
  $breadcrumb->add(sprintf(NAVBAR_TITLE_3, $HTTP_GET_VARS['order_id']), tep_href_link(FILENAME_ACCOUNT_HISTORY_INFO, 'order_id=' . $HTTP_GET_VARS['order_id'], 'SSL'));

  require(DIR_WS_CLASSES . 'order.php');
  $order = new order($HTTP_GET_VARS['order_id']);
 
  require(DIR_WS_INCLUDES . 'header_new_design.php');
  

  
  
  
  if(isset($HTTP_POST_VARS['update']))
  {
	$errormsg='';   

$orderid=$HTTP_POST_VARS['order_id'];

$product_id = $HTTP_POST_VARS['product_id'];
$product_model = $HTTP_POST_VARS['product_model'];
$product_tax = $HTTP_POST_VARS['product_tax'];
$product_name = $HTTP_POST_VARS['product_name'];
$product_price = $HTTP_POST_VARS['product_price'];
$product_final_price = $HTTP_POST_VARS['product_final_price'];
$product_qty = $HTTP_POST_VARS['product_qty'];
$customvalue = $HTTP_POST_VARS['customvalue'];
$oldvalueface = $HTTP_POST_VARS['oldvalueface'];
$oldvalueheight = $HTTP_POST_VARS['oldvalueheight'];



$delivery_name=$HTTP_POST_VARS['delevery_name'];
$delivery_company=$HTTP_POST_VARS['delevery_company'];
$delivery_street_address=$HTTP_POST_VARS['delevery_street_address'];
$delivery_suburb=$HTTP_POST_VARS['delevery_suburb'];
$delivery_city=$HTTP_POST_VARS['delevery_city'];
$delivery_postcode=$HTTP_POST_VARS['delevery_postcode'];
$delivery_state=$HTTP_POST_VARS['delevery_state'];
$delivery_country=$HTTP_POST_VARS['delevery_country'];
if($delivery_country=='38')
{
$delivery_country='Canada';	
}
elseif($delivery_country=='172')
{
$delivery_country='Puerto Rico';
}
elseif($delivery_country=='223')
{
$delivery_country='United States';
}



$delivery_address_format_id=$HTTP_POST_VARS['delevery_format_id'];

$billing_name=$HTTP_POST_VARS['billing_name'];
$billing_company=$HTTP_POST_VARS['billing_company'];
$billing_street_address=$HTTP_POST_VARS['billing_street_address'];
$billing_suburb=$HTTP_POST_VARS['billing_suburb'];
$billing_city=$HTTP_POST_VARS['billing_city'];
$billing_postcode=$HTTP_POST_VARS['billing_postcode'];
$billing_state=$HTTP_POST_VARS['billing_state'];
$billing_country=$HTTP_POST_VARS['billing_country'];



if($billing_country=='38')
{
$billing_country='Canada';	
}
elseif($billing_country=='172')
{
$billing_country='Puerto Rico';
}
elseif($billing_country=='223')
{
$billing_country='United States';
}

$billing_address_format_id=$HTTP_POST_VARS['billing_format_id'];


//For Orders_edit Table START....
$query_checkorder = tep_db_query("select * from orders_edit where orders_id='$orderid'");
  $checkorder = tep_db_fetch_array($query_checkorder);
$orderiddd = $checkorder['orders_id']; 

if(empty($orderiddd))
{
	//insert...
  $query_data_insert_orders_edit = tep_db_query("INSERT INTO `orders_edit` (orders_id,  customers_id,  customers_name,  customers_company, customers_street_address,  customers_suburb,  customers_city,  customers_postcode,  customers_state, customers_country, customers_telephone, customers_email_address, customers_address_format_id, delivery_name, delivery_company,  delivery_street_address, delivery_suburb, delivery_city, delivery_postcode, delivery_state , delivery_country,  delivery_address_format_id,  billing_name,  billing_company, billing_street_address,  billing_suburb,  billing_city,  billing_postcode,  billing_state, billing_country, billing_address_format_id, payment_method,  cc_type, cc_owner,  cc_number, cc_expires,  last_modified, date_purchased,  orders_status, orders_date_finished,  currency,  currency_value,  shipping_module, ipaddy,  ipisp) SELECT orders_id AS '$orderid',customers_id AS'$customer_id',  customers_name AS customers_name ,  customers_company AS customers_company, customers_street_address AS customers_street_address,  customers_suburb AS customers_suburb,  customers_city AS customers_city,  customers_postcode AS customers_postcode,  customers_state AS customers_state, customers_country AS customers_country, customers_telephone AS customers_telephone, customers_email_address AS customers_email_address, customers_address_format_id AS customers_address_format_id, delivery_name AS '$delivery_name', delivery_company AS '$delivery_company',  delivery_street_address AS '$delivery_street_address', delivery_suburb AS '$delivery_suburb', delivery_city AS '$delivery_city', delivery_postcode AS '$delivery_postcode', delivery_state AS '$delivery_state',  delivery_country AS '$delivery_country',  delivery_address_format_id AS '$delivery_address_format_id',  billing_name AS '$billing_name',  billing_company AS '$billing_company', billing_street_address AS '$billing_street_address',  billing_suburb AS '$billing_suburb',  billing_city AS '$billing_city',  billing_postcode AS '$billing_postcode',  billing_state AS '$billing_state', billing_country AS '$billing_country', billing_address_format_id AS '$billing_address_format_id', payment_method AS payment_method,  cc_type AS cc_type, cc_owner AS cc_owner,  cc_number AS cc_number, cc_expires AS cc_expires,  last_modified AS last_modified, date_purchased AS date_purchased,  orders_status AS orders_status, orders_date_finished AS orders_date_finished,  currency AS currency,  currency_value AS currency_value,  shipping_module AS shipping_module, ipaddy AS ipaddy,  ipisp AS ipisp FROM `orders` WHERE orders_id = '$orderid'");

//echo'<pre>';print_r($customvalue);
  foreach ($product_id as $key => $value) {

//$customvalue[$key];
if($customvalue[$key]!='')
{
	if (strpos($customvalue[$key],'.') !== false){
	$arrss=explode(".", $customvalue[$key]);	
	//print_r($arrss);
	if($arrss[1]==25)
	{
	$fracval='1/4"';	
	}
	elseif($arrss[1]==5)
	{
	$fracval='1/2"';	
	}
	elseif($arrss[1]==75)
	{
	$fracval='3/4"';	
	}
	
	$newvall=''.$arrss[0].'-'.$fracval.'';	
	}
	else{
		$newvall=''.$customvalue[$key].'"';
	}
	
	
	if(strpos($product_name[$key],'EP5') !== false)
			{
			$modelarray= explode("EP5-",$product_name[$key]);

			$modelarray2= explode('Glass',$modelarray[1]);
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			
			//echo'<pre>';print_r($modelarray3);
			
			$dbcust=$modelarray3[1];
			
			
			
			}
	
	$cuspricdim=$customvalue[$key];
			if($cuspricdim>12 && $cuspricdim<=18)
			{
			$valueface=18;	
			}
			elseif($cuspricdim>18 && $cuspricdim<=24)
			{
			$valueface=24;	
			}
			elseif($cuspricdim>24 && $cuspricdim<=30)
			{
			$valueface=30;	
			}
			elseif($cuspricdim>30 && $cuspricdim<=36)
			{
			$valueface=36;	
			}
			elseif($cuspricdim>36 && $cuspricdim<=42)
			{
			$valueface=42;	
			}
			elseif($cuspricdim>42 && $is<=48)
			{
			$valueface=48;	
			}
			elseif($cuspricdim>48 && $cuspricdim<=54)
			{
			$valueface=54;	
			}
			else{
			$valueface=12;		
			}
	
	
	
	
	$oldval=stripslashes($oldvalueface[$key]);
	
	
	$oldvalheifht=stripslashes($oldvalueheight[$key]);
	
	$vlsheight=$sss22=rtrim($oldvalheifht,'"');
	
	if (strpos($vlsheight,'-') !== false){
	$heightarr= explode("-",$vlsheight);

	//echo'<pre>';print_r($heightarr);
	
	
	
	
	
	if($heightarr[1]=='1/4')
	{
	$deciheight=$heightarr[1]+0.25;	
	}
	elseif($heightarr[1]=='1/2')
	{
	$deciheight=$heightarr[1]+0.5;	
	}
	elseif($heightarr[1]=='3/4')
	{
	$deciheight=$heightarr[1]+0.75;	
	}
	
	
	
	
			if($deciheight<12)
			{
			$valueheight=12;	
			}
			elseif($deciheight>12 && $deciheight<=18)
			{
			$valueheight=18;	
			}
			elseif($deciheight>18 && $deciheight<=22)
			{
			$valueheight=22;	
			}
			elseif($deciheight>22)
			{
			$valueheight=26;	
			}
	
	
	
	}
	else{
		$valueheight=$vlsheight;
	}
	$valueface=''.$valueface.'"';
	
	
	
	
	//$productnameprice=
	
//	echo'<b style="color:red;">valueface--'.$valueface.'====valueheight---'.$valueheight.'</b><br />';
	
	if(strpos($product_name[$key],'EP5') !== false)
	{
	if(strpos($product_name[$key],'Square') !== false)
	{	
//EP5-22 30" Glass (Radiused Corners)
	$productname='EP5-'.$valueheight.' '.$valueface.' Glass (Squared Corners)';
	}
	else{
	$productname='EP5-'.$valueheight.' '.$valueface.' Glass (Radiused Corners)';	
	}
	}
	
	
	
	
	$getparice_query = tep_db_query("SELECT * FROM `products_description` INNER JOIN `products` 
	ON `products`.`products_id`=`products_description`.`products_id` WHERE `products_description`.`products_name` LIKE '%$productname%'");
  $getprice_product = tep_db_fetch_array($getparice_query);
	$products_ids=$getprice_product['products_id'];

//$newprice=$getprice_product['products_price'];
	//echo'<pre>'; print_r($getprice_product);
$newprice=$product_price[$key];	
	$provalll=stripslashes($product_name[$key]);
	if(strpos($product_name[$key],'ALLIN1') !== false)
	{
	if(strpos($product_name[$key],'"') !== false)
	{
		
	}	
	else{
	$provalll=''.$provalll.'"';	
	}
	}
	
	$prodname= str_replace($oldval,$newvall,$provalll);
	
	//echo'<b style="color:red;">prodname--'.$productname.'</b><br />';

}
else{
	$prodname=$product_name[$key];
	$newprice=$product_price[$key];
}

	//$query_data_insert_orders_products_edit=tep_db_query("INSERT INTO `orders_products_edit`(`orders_id`,`products_id`,`products_model`,`products_name`,`products_price`,`final_price`,`products_tax`,`products_quantity`) VALUES ('$orderid','$value','$product_model[$key]','$prodname','$product_price[$key]','$product_final_price[$key]','$product_tax[$key]','$product_qty[$key]')");
	
	$query_data_insert_orders_products_edit=tep_db_query("INSERT INTO `orders_products_edit`(`orders_id`,`products_id`,`products_model`,`products_name`,`products_price`,`final_price`,`products_tax`,`products_quantity`) VALUES ('$orderid','$value','$product_model[$key]','$prodname','$newprice','$newprice','$product_tax[$key]','$product_qty[$key]')");
  }
	
}
else{
//update...
 $query_data_update_orders_edit = tep_db_query("UPDATE `orders_edit` a INNER JOIN `orders` b ON a.orders_id = b.orders_id SET  a.customers_id='$customer_id',  a.customers_name=b.customers_name ,  a.customers_company=b.customers_company, a.customers_street_address=b.customers_street_address,  a.customers_suburb=b.customers_suburb,  a.customers_city=b.customers_city,  a.customers_postcode=b.customers_postcode,  a.customers_state=b.customers_state, a.customers_country=b.customers_country, a.customers_telephone=b.customers_telephone, a.customers_email_address=b.customers_email_address, a.customers_address_format_id=b.customers_address_format_id, a.delivery_name='$delivery_name', a.delivery_company='$delivery_company',  a.delivery_street_address='$delivery_street_address', a.delivery_suburb='$delivery_suburb', a.delivery_city='$delivery_city', a.delivery_postcode='$delivery_postcode', a.delivery_state='$delivery_state',  a.delivery_country='$delivery_country',  a.delivery_address_format_id='$delivery_address_format_id',  a.billing_name='$billing_name',  a.billing_company='$billing_company', a.billing_street_address='$billing_street_address',  a.billing_suburb='$billing_suburb',  a.billing_city='$billing_city',  a.billing_postcode='$billing_postcode',  a.billing_state='$billing_state', a.billing_country='$billing_country', a.billing_address_format_id='$billing_address_format_id', a.payment_method=b.payment_method,  a.cc_type=b.cc_type, a.cc_owner=b.cc_owner,  a.cc_number=b.cc_number, a.cc_expires=b.cc_expires,  a.last_modified=b.last_modified, a.date_purchased=b.date_purchased,  a.orders_status=b.orders_status, a.orders_date_finished=b.orders_date_finished,  a.currency=b.currency,  a.currency_value=b.currency_value,  a.shipping_module=b.shipping_module, a.ipaddy=b.ipaddy,  a.ipisp=b.ipisp WHERE a.orders_id = '$orderiddd' ");

  foreach ($product_id as $key => $value) {

//$customvalue[$key];
if($customvalue[$key]!='')
{
	if (strpos($customvalue[$key],'.') !== false){
	$arrss=explode(".", $customvalue[$key]);	
	//print_r($arrss);
	if($arrss[1]==25)
	{
	$fracval='1/4"';	
	}
	elseif($arrss[1]==5)
	{
	$fracval='1/2"';	
	}
	elseif($arrss[1]==75)
	{
	$fracval='3/4"';	
	}
	
	$newvall=''.$arrss[0].'-'.$fracval.'';	
	}
	else{
		$newvall=''.$customvalue[$key].'"';
	}
	
	
	if(strpos($product_name[$key],'EP5') !== false)
			{
			$modelarray= explode("EP5-",$product_name[$key]);

			$modelarray2= explode('Glass',$modelarray[1]);
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			
			//echo'<pre>';print_r($modelarray3);
			
			$dbcust=$modelarray3[1];
			
			
			
			}
	
	$cuspricdim=$customvalue[$key];
			if($cuspricdim>12 && $cuspricdim<=18)
			{
			$valueface=18;	
			}
			elseif($cuspricdim>18 && $cuspricdim<=24)
			{
			$valueface=24;	
			}
			elseif($cuspricdim>24 && $cuspricdim<=30)
			{
			$valueface=30;	
			}
			elseif($cuspricdim>30 && $cuspricdim<=36)
			{
			$valueface=36;	
			}
			elseif($cuspricdim>36 && $cuspricdim<=42)
			{
			$valueface=42;	
			}
			elseif($cuspricdim>42 && $is<=48)
			{
			$valueface=48;	
			}
			elseif($cuspricdim>48 && $cuspricdim<=54)
			{
			$valueface=54;	
			}
			else{
			$valueface=12;		
			}
	
	
	
	
	$oldval=stripslashes($oldvalueface[$key]);
	
	
	$oldvalheifht=stripslashes($oldvalueheight[$key]);
	
	$vlsheight=$sss22=rtrim($oldvalheifht,'"');
	
	if (strpos($vlsheight,'-') !== false){
	$heightarr= explode("-",$vlsheight);

	//echo'<pre>';print_r($heightarr);
	
	
	
	
	
	if($heightarr[1]=='1/4')
	{
	$deciheight=$heightarr[1]+0.25;	
	}
	elseif($heightarr[1]=='1/2')
	{
	$deciheight=$heightarr[1]+0.5;	
	}
	elseif($heightarr[1]=='3/4')
	{
	$deciheight=$heightarr[1]+0.75;	
	}
	
	
	
	
			if($deciheight<12)
			{
			$valueheight=12;	
			}
			elseif($deciheight>12 && $deciheight<=18)
			{
			$valueheight=18;	
			}
			elseif($deciheight>18 && $deciheight<=22)
			{
			$valueheight=22;	
			}
			elseif($deciheight>22)
			{
			$valueheight=26;	
			}
	
	
	
	}
	else{
		$valueheight=$vlsheight;
	}
	$valueface=''.$valueface.'"';
	
	
	
	
	//$productnameprice=
	
//	echo'<b style="color:red;">valueface--'.$valueface.'====valueheight---'.$valueheight.'</b><br />';
	
	if(strpos($product_name[$key],'EP5') !== false)
	{
	if(strpos($product_name[$key],'Square') !== false)
	{	
//EP5-22 30" Glass (Radiused Corners)
	$productname='EP5-'.$valueheight.' '.$valueface.' Glass (Squared Corners)';
	}
	else{
	$productname='EP5-'.$valueheight.' '.$valueface.' Glass (Radiused Corners)';	
	}
	}
	
	
	
	
	$getparice_query = tep_db_query("SELECT * FROM `products_description` INNER JOIN `products` 
	ON `products`.`products_id`=`products_description`.`products_id` WHERE `products_description`.`products_name` LIKE '%$productname%'");
  $getprice_product = tep_db_fetch_array($getparice_query);
	$products_ids=$getprice_product['products_id'];

//$newprice=$getprice_product['products_price'];
	//echo'<pre>'; print_r($getprice_product);
	$newprice=$product_price[$key];
	$provalll=stripslashes($product_name[$key]);
	
	
	//echo'<script>alert('.$oldval.');</script>';
	if(strpos($product_name[$key],'ALLIN1') !== false)
	{
	if(strpos($product_name[$key],'"') !== false)
	{
		
	}	
	else{
	$provalll=''.$provalll.'"';	
	}
	}
	//echo'<b style="color:red;">/'.$provalll.'///'.$newvall.'/'; ;echo'</b>';
	$prodname= str_replace($oldval,$newvall,$provalll);
	
	//echo'<b style="color:red;">prodname--'.$productname.'</b><br />';

}
else{
	$prodname=$product_name[$key];
	$newprice=$product_price[$key];
}
   //$query_data_update_orders_products_edit=tep_db_query("UPDATE `orders_products_edit` SET `products_model`='$product_model[$key]',`products_name`='$product_name[$key]',`products_price`='$product_price[$key]',`final_price`='$product_final_price[$key]',`products_tax`='$product_tax[$key]',`products_quantity`='$product_qty[$key]' WHERE `orders_id`='$orderiddd' AND `orders_products_id`='$value'");
   
   
   $query_data_update_orders_products_edit=tep_db_query("UPDATE `orders_products_edit` SET `products_model`='$product_model[$key]',`products_name`='$prodname',`products_price`='$newprice',`final_price`='$newprice',`products_tax`='$product_tax[$key]',`products_quantity`='$product_qty[$key]' WHERE `orders_id`='$orderiddd' AND `orders_products_id`='$value'");

  }


}

  }
  
  
  
  
  
  
  
  
  
  
  
  
?>



<?
  // if (!$detect->isMobile())
// {
?>
<style>
.delevery{width: 100%;border-radius: 6px;height: 25px;}
.billing{width: 100%;border-radius: 6px;height: 25px;}

.productqty{width:30px;border-radius: 6px;height: 25px;}
.productt{width:90%;border-radius: 6px;height: 25px;}


.edit-order-product-details{margin-top:120px;text-align:center;}

select{
	background-color:white;
	color:black;
}
.edit-order-product-details p{font-size:16px;}
.edit-order-product-details input{font-size:16px; height: 36px;margin-top: 3px;}
.edit-order-product-details textarea{font-size:16px;}
.edit-order-product-details select{font-size:16px !important; height: 36px;margin-top: 3px;}
.product-thead{font-size:16px;}

.update_button button{border:1px solid grey;font-size:13px;}

@media screen and (max-width:768px) {
.edit-order-product-details p{font-size:13px;}
.edit-order-product-details input{font-size:13px; height: 26px; margin-top: 7px;}
.edit-order-product-details textarea{font-size:13px;}
.edit-order-product-details select{font-size:13px !important; height: 26px; margin-top: 7px;}
.product-thead{font-size:13px;}	
}


</style>
<div class="container edit-order-product-details"  >
<table width="100%" cellpadding="0" cellspacing="0" style="padding:5px;"> 

<tr  >

<td >
<table width="100%" cellpadding="2" cellspacing="2">
<tr>

<td  valign="top" >
<h2><?php echo HEADING_TITLE; ?></h2>

<div class="contentContainer">
  <h2><?php echo sprintf(HEADING_ORDER_NUMBER, $HTTP_GET_VARS['order_id']) . ' <span class="contentText">(' . $order->info['orders_status'] . ')</span>'; ?></h2>

  <div class="contentText">
    <div>
     <p> <span style="float: right;"><?php echo HEADING_ORDER_TOTAL . ' ' . $order->info['total']; ?></span>
      <?php echo HEADING_ORDER_DATE . ' ' . tep_date_long($order->info['date_purchased']); ?></p>
    </div>




<div class="row">

<div class="col-md-4">

<form action="" method="post">
<?php
  if ($order->delivery != false) {
?>
       <h2><strong><?php echo HEADING_DELIVERY_ADDRESS; ?></strong></h2>
       
			<?php
	// print_r($order->delivery['suburb']);
			$query_order_datasaa = tep_db_query("select * from orders_edit where orders_id='".$HTTP_GET_VARS['order_id']."'");
  if (mysql_num_rows($query_order_datasaa)) {

			$order_datasaa = tep_db_fetch_array($query_order_datasaa);
			?>
			<input type="hidden" name="order_id" value="<?php echo$HTTP_GET_VARS['order_id'] ?>">
			
			<input type="text" name="delevery_name" id="delevery_name" class="delevery" value="<?php echo$order_datasaa['delivery_name'] ?>" placeholder="Name">
			<input type="text" name="delevery_company" id="delevery_company" class="delevery" value="<?php echo$order_datasaa['delivery_company'] ?>" placeholder="Company">
			<input type="text" name="delevery_street_address" id="delevery_street_address" class="delevery" value="<?php echo$order_datasaa['delivery_street_address'] ?>" placeholder="Street Addres ">
			<input type="hidden" name="delevery_suburb" id="delevery_suburb" class="delevery" value="<?php echo$order->delivery['suburb'] ?>" placeholder="">
			<input type="text" name="delevery_city" id="delevery_city" class="delevery" value="<?php echo$order_datasaa['delivery_city'] ?>" placeholder="City">
			<input type="text" name="delevery_postcode" id="delevery_postcode" class="delevery" value="<?php echo$order_datasaa['delivery_postcode'] ?>" placeholder="Post code">
			<input type="text" name="delevery_state" id="delevery_state" class="delevery" value="<?php echo$order_datasaa['delivery_state'] ?>" placeholder="State">

			<select name="delevery_country" class="delevery">

				<option value="38" <?php $select = ($order_datasaa['delivery_country']=='Canada') ? 'selected="selected"' : 'unselected' ; echo $select; ?> >Canada</option>

				<option value="172" <?php $select = ($order_datasaa['delivery_country']=='Puerto Rico') ? 'selected="selected"' : 'unselected' ; echo $select; ?> >Puerto Rico</option>

				<option value="223" <?php $select = ($order_datasaa['delivery_country']=='United States') ? 'selected="selected"' : 'unselected' ; echo $select; ?>>United States</option>
			</select>

			<input type="hidden" name="delevery_format_id" id="delevery_format_id" class="delevery" value="<?php echo$order->delivery['format_id'] ?>" placeholder="Format Id">
			
<?php
}else{
  ?>


      <input type="hidden" name="order_id" value="<?php echo$HTTP_GET_VARS['order_id'] ?>">
      
      <input type="text" name="delevery_name" id="delevery_name" class="delevery" value="<?php echo$order->delivery['name'] ?>" placeholder="Name">
      <input type="text" name="delevery_company" id="delevery_company" class="delevery" value="<?php echo$order->delivery['company'] ?>" placeholder="Company">
      <input type="text" name="delevery_street_address" id="delevery_street_address" class="delevery" value="<?php echo$order->delivery['street_address'] ?>" placeholder="Street Addres ">
      <input type="hidden" name="delevery_suburb" id="delevery_suburb" class="delevery" value="<?php echo$order->delivery['suburb'] ?>" placeholder="">
      <input type="text" name="delevery_city" id="delevery_city" class="delevery" value="<?php echo$order->delivery['city'] ?>" placeholder="City">
      <input type="text" name="delevery_postcode" id="delevery_postcode" class="delevery" value="<?php echo$order->delivery['postcode'] ?>" placeholder="Post code">
      <input type="text" name="delevery_state" id="delevery_state" class="delevery" value="<?php echo$order->delivery['state'] ?>" placeholder="State">
      <select name="delevery_country" class="delevery">
      <option value="38">Canada</option>
      <option value="172">Puerto Rico</option>
      <option value="223" selected="selected">United States</option>
      </select>
      <input type="hidden" name="delevery_format_id" id="delevery_format_id" class="delevery" value="<?php echo$order->delivery['format_id'] ?>" placeholder="Format Id">
    


  <?php
}
    if (tep_not_null($order->info['shipping_method'])) {
?>
        <h2><strong><?php echo HEADING_SHIPPING_METHOD; ?></strong></h2>
          
         <p><?php echo $order->info['shipping_method']; ?></p>
     
<?php
    }
?>
   
<?php
  }
?>

</div>







<div class="col-md-8">


		<table border="0" width="100%" cellspacing="0" cellpadding="2">
<?php
  if (sizeof($order->info['tax_groups']) > 1) {
?>
          <tr >
            <td colspan="2"><span class="product-thead"><strong><?php echo HEADING_PRODUCTS; ?></strong></span></td>
            <td><strong><span class="product-thead">Qty</span></strong></td>
            <td><strong><span class="product-thead">Value</span></strong></td>
            <td align="right"><strong><span class="product-thead"><?php echo HEADING_TAX; ?></span></strong></td>
          </tr>
<?php
  } else {
?>
          <tr>
		   <td><strong><span class="product-thead">Qty</span></strong></td>
		   <td><strong><span class="product-thead">Value</span></strong></td>
            <td colspan="2"><strong><span class="product-thead"><?php echo HEADING_PRODUCTS; ?></span></strong></td>
          </tr>
<?php
  }

$query_order_data = tep_db_query("select * from orders_products_edit where orders_id='$orderid'");
 $dbcust=0;
 $dbcustheight=0;
  if (mysql_num_rows($query_order_data)) {

      while ($order_data = tep_db_fetch_array($query_order_data)) {
        echo '          <tr>' . "\n" .
             '            <td align="right" valign="top" width="30">';
        
        
        echo"<input type='text' name='product_qty[]' class='productqty' value='" . $order_data['products_quantity'] . "' >";

        echo "<input type='hidden' name='product_id[]' value='".$order_data['orders_products_id']."'>";
        echo "<input type='hidden' name='product_model[]' value='".$order_data['products_model']."'>";
        echo "<input type='hidden' name='product_tax[]' value='".$order_data['products_tax']."'>";
        // echo "<input type='hidden' name='product_name[]' value='".$order_data->products[$i]['name']."'>";
        echo "<input type='hidden' name='product_price[]' value='".$order_data['products_price']."'>";
        echo "<input type='hidden' name='product_final_price[]' value='".$order_data['final_price']."'>";
        // echo "<input type='hidden' name='product_qty[]' value='".$order_data->products[$i]['qty']."'>";
        
        
    	 echo ' </td>
			 <td valign="top" width="20">';
			 
			 $productname=$order_data['products_name'];
			
			// if($modelname=='EP5' || $modelname=='Ring' || $modelname=='EP15'){
				
			// }
			// else{
				
			// }
			 
			if (strpos($productname,'Glass') !== false || strpos($productname,'GL') !== false  || strpos($productname,'TG') !== false || strpos($productname,'GCWL') !== false || strpos($productname,'ALLIN1') !== false || strpos($productname,'Light Bar') !== false || strpos($productname,'Heat Lamp') !== false){

			if (strpos($productname,'Frosted') !== false || strpos($productname,'Glass Bracket') !== false || strpos($productname,'GLASS CLIP') !== false || strpos($productname,'Plexi-Glass') !== false)
			{
				
				
				echo "<input type='hidden' name='oldvalueface[]' value='".$dbcust."'>";
				echo "<input type='hidden' name='oldvalueheight[]' value='".$dbcustheight."'>";
				
				echo'<select name="customvalue[]" id="productcustom'.$order->products[$i]['id'].'" onchange="change_name('.$order->products[$i]['id'].')">
				<option></option>
				</select>';	
			}
			else{
			if(strpos($productname,'EP5') !== false)
			{
			$modelarray= explode("EP5-",$productname);

			$modelarray2= explode('Glass',$modelarray[1]);
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			
			//echo'<pre>';print_r($modelarray3);
			
			$dbcust=$modelarray3[1];
			$dbcustheight=$modelarray3[0];
			
			
			
			}
			elseif(strpos($productname,'Ring-EP5') !== false)
			{
				
			}
			elseif(strpos($productname,'EP15') !== false)
			{
			$modelarray= explode("EP15-",$productname);
			
			if(strpos($productname,'Right End Glass') !== false)
			{
			$modelarray2= explode('Right End Glass',$modelarray[1]);	
			}
			elseif(strpos($productname,'Left End Glass') !== false)
			{
			$modelarray2= explode('Left End Glass',$modelarray[1]);	
			}
			else{
			$modelarray2= explode('Glass',$modelarray[1]);	
			}
			
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			
			//echo'<pre>';print_r($modelarray3);
			
			$dbcust=$modelarray3[1];
			$dbcustheight=$modelarray3[0];
				
			}
			
			elseif(strpos($productname,'EP11') !== false)
			{
			$modelarray= explode("EP11",$productname);

			$modelarray2= explode('Glass',$modelarray[1]);
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			$noofarr=count($modelarray3);
			//echo'<pre>';print_r($noofarr);
			
			if($noofarr>3)
			{
			$dbcust=$modelarray3[3];	
			}
			else{
			$dbcust=$modelarray3[2];	
			}
			
			
			
			$dbcustheight=$modelarray3[1];
				
			}
			
			elseif(strpos($productname,'EP12') !== false)
			{
			$modelarray= explode("EP12",$productname);

			$modelarray2= explode('Glass',$modelarray[1]);
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			$noofarr=count($modelarray3);
			//echo'<pre>';print_r($noofarr);
			
			if($noofarr>3)
			{
			$dbcust=$modelarray3[3];	
			}
			else{
			$dbcust=$modelarray3[2];	
			}
			
			
			
			$dbcustheight=$modelarray3[1];
				
			}
			elseif(strpos($productname,'EP21') !== false ||strpos($productname,'EP22') !== false ||strpos($productname,'EP36') !== false ||strpos($productname,'ES31') !== false ||strpos($productname,'ES40') !== false ||strpos($productname,'ES67') !== false ||strpos($productname,'ES73') !== false)
			{
			if(strpos($productname,'EP22') !== false)
			{
			$modelarray= explode("EP22-",$productname);	
			}
			elseif(strpos($productname,'EP36') !== false)
			{
			$modelarray= explode("EP36-",$productname);	
			}
			elseif(strpos($productname,'ES31') !== false)
			{
			$modelarray= explode("ES31-",$productname);	
			}
			elseif(strpos($productname,'ES40') !== false)
			{
			$modelarray= explode("ES40-",$productname);	
			}
			elseif(strpos($productname,'ES67') !== false)
			{
			$modelarray= explode("ES67-",$productname);	
			}
			elseif(strpos($productname,'ES73') !== false)
			{
			$modelarray= explode("ES73-",$productname);	
			}
			else{
			$modelarray= explode("EP21-",$productname);	
			}
			

			$modelarray2= explode('Glass',$modelarray[1]);
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			
			//echo'<pre>';print_r($modelarray2);
			
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			
			
			}
			
			elseif(strpos($productname,'ED20') !== false)
			{
			$modelarray= explode("ED20-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray3[1];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			elseif(strpos($productname,'ES47') !== false)
			{
			$modelarray= explode("ES47-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			elseif(strpos($productname,'ES29') !== false)
			{
			$modelarray= explode("ES29-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
				
				
				
			if(strpos($productname,'GCWL') !== false)
			{
			$modelarray2= explode('GCWL',$modelarray[1]);	
			}
			else{
			$modelarray2= explode('CWGL',$modelarray[1]);	
			}	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			elseif(strpos($productname,'ES53') !== false)
			{
			$modelarray= explode("ES53-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			elseif(strpos($productname,'ES82') !== false)
			{
			$modelarray= explode("ES82-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			if(strpos($productname,'GCWL') !== false)
			{
			$modelarray2= explode('GCWL',$modelarray[1]);	
			}
			else{
			$modelarray2= explode('CWGL',$modelarray[1]);	
			}
				
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			elseif(strpos($productname,'ES90') !== false)
			{
			$modelarray= explode("ES90-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('/TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			
			
			elseif(strpos($productname,'ES92') !== false)
			{
			$modelarray= explode("ES92-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			if(strpos($productname,'GCWL') !== false)
			{
			$modelarray2= explode('GCWL',$modelarray[1]);	
			}
			else{
			$modelarray2= explode('CWGL',$modelarray[1]);	
			}
				
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			
			
			elseif(strpos($productname,'B950') !== false)
			{
			$modelarray= explode("B950-",$productname);
			
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			
			if(strpos($productname,'B950P') !== false)
			{
			$modelarray= explode("B950P-",$productname);
			
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			
			
			
			}
			
			}
			
			
			
			
			
			
			
			elseif(strpos($productname,'ALLIN1') !== false)
			{
			$productname=rtrim($productname,' ');	
				
				
			$modelarray= explode("ALLIN1-",$productname);
			
			
			//echo'<pre>';print_r($modelarray);
			$dbcust=$modelarray[1];
			$dbcustheight='';
			if(strpos($productname,'"') !== false)
			{
				//$dbcust=rtrim($dbcust,' ');
			}
			else{
				
			$dbcust=''.$dbcust.'"';	
			//$dbcust=rtrim($dbcust,' ');
			}
			
			
			
			}
			
			
			elseif(strpos($productname,'EP950') !== false)
			{
			$modelarray= explode("EP950-",$productname);
			
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
		
			
			}
			
			elseif(strpos($productname,'Light Bar') !== false)
			{
			$modelarray= explode("Light Bar-",$productname);
			
			$modelarray2= explode('Light Bar',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
		
			
			}
			
			
			elseif(strpos($productname,'Mid Shelve') !== false)
			{
			$modelarray= explode("Face Length ",$productname);
			
			if(strpos($productname,'-RND') !== false)
			{
			$modelarray2= explode('-RND',$modelarray[1]);	
			$dbcust=$modelarray2[0];
			
			}
			else{
			$dbcust=$modelarray[1];	
			}
			
			
				
			
			//$modelarray3= explode(' ',$modelarray2[0]);
			
			
			
			//echo'<pre>';print_r($dbcust);
			
			$dbcustheight='';
			
		
			
			}
			
			
			elseif(strpos($productname,'Heat Lamp') !== false)
			{
			$modelarray= explode("Heat Lamp-",$productname);
			
			$modelarray2= explode('CL-',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
		
			
			}
			
			elseif(strpos($productname,'EP6') !== false)
			{
			$modelarray= explode("EP6-",$productname);
		
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			
			
			
			}
			elseif(strpos($productname,'EP7') !== false)
			{
			$modelarray= explode("EP7-",$productname);
		
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			
			
			
			}
			
			
			echo "<input type='hidden' name='oldvalueheight[]' value='".$dbcustheight."'>";
			echo "<input type='hidden' name='oldvalueface[]' value='".$dbcust."'>";
			echo'<select name="customvalue[]" id="productcustom'.$order->products[$i]['id'].'" onchange="change_name('.$order->products[$i]['id'].')">';
			$value=12;
			$froms=8;
			$upto=54;
			if(strpos($productname,'B950') !== false)
			{
			if(strpos($productname,'B950P') !== false)
			{
			$froms=24;
			$upto=66;
			}
			else{
			$froms=8;
			$upto=75;	
			}			
				
			}
			elseif(strpos($productname,'ALLIN1') !== false){
			$froms=24;
			$upto=96;	
			}
			elseif(strpos($productname,'EP950') !== false)
			{
			$froms=24;
			$upto=84;
			}
			elseif(strpos($productname,'Light Bar') !== false)
			{
			$froms=24;
			$upto=84;
			}
			elseif(strpos($productname,'Mid Shelve') !== false)
			{
			$froms=8;
			$upto=42;
			}
			elseif(strpos($productname,'Heat Lamp') !== false)
			{
			$froms=26;
			$upto=84;
			}
			else{
			$froms=8;
			$upto=54;	
			}
			
			
			if(strpos($productname,'Light Bar') !== false ||strpos($productname,'Heat Lamp') !== false)
			{
			$incree=1;	
			}
			else{
			$incree=0.25;	
			}
			
			
			
			for($is=$froms; $is<=$upto; $is=$is+$incree)
			{
			
			
			if($is>12 && $is<=18)
			{
			$value=18;	
			}
			elseif($is>18 && $is<=24)
			{
			$value=24;	
			}
			elseif($is>24 && $is<=30)
			{
			$value=30;	
			}
			elseif($is>30 && $is<=36)
			{
			$value=36;	
			}
			elseif($is>36 && $is<=42)
			{
			$value=42;	
			}
			elseif($is>42 && $is<=48)
			{
			$value=48;	
			}
			elseif($is>48 && $is<=54)
			{
			$value=54;	
			}
			else{
			$value=12;		
			}
			$fras1=(int)$is;
			//$dropdonval=decimal_to_fraction($is);
			
			
			$dropdonval=$fras1.decimal_to_fraction2($is).'"';;
			//echo$sss=ltrim($dropdonval,'"');
			//$sss22=rtrim($sss,'"');
			
			//echo'dbcust----'.$dbcust.'///dropdonval----'.$dropdonval.'';
			if($dbcust==$dropdonval)
			{
			echo'<option value="'.$is.'" selected>';print (int)$is; print decimal_to_fraction($is); echo'"</option>';	
			}
			else{
			echo'<option value="'.$is.'">';print (int)$is; print decimal_to_fraction($is); echo'"</option>';	
			}
			 
			 
			
			 
			}
			 echo'</select>';
			 
			 
			 
			 }	
			}
			 
			 else{
				 //non glass
				echo "<input type='hidden' name='oldvalueheight[]' value='".$dbcustheight."'>";

				 echo "<input type='hidden' name='oldvalueface[]' value='".$dbcust."'>";
				 echo'<select name="customvalue[]" id="productcustom'.$order_data['orders_products_id'].'" onchange="change_name('.$order_data['orders_products_id'].')">
				<option></option>
				</select>';	
			 }
			 
			 
			 
			echo '  </td>
			
			<td valign="top">';

        echo"<input type='text' name='product_name[]'  readonly='readonly'  class='productt' value='" . $order_data['products_name'] . "' >";     

    		

      
        echo '</td>' . "\n";

      

        echo '          </tr>' . "\n";
      }
  }else{
	  
	  $dbcust=0;
	  $dbcustheight=0;
	  
      for ($i=0, $n=sizeof($order->products); $i<$n; $i++) {
        echo '          <tr>' . "\n" .
             '            <td align="right" valign="top" width="30">';
    		
    		
    		echo"<input type='text' name='product_qty[]' class='productqty' value='" . $order->products[$i]['qty'] . "' >";

        echo "<input type='hidden' name='product_id[]' value='".$order->products[$i]['id']."'>";
        echo "<input type='hidden' name='product_model[]' value='".$order->products[$i]['model']."'>";
        echo "<input type='hidden' name='product_tax[]' value='".$order->products[$i]['tax']."'>";
        // echo "<input type='hidden' name='product_name[]' value='".$order->products[$i]['name']."'>";
        echo "<input type='hidden' name='product_price[]' value='".$order->products[$i]['price']."'>";
    		echo "<input type='hidden' name='product_final_price[]' value='".$order->products[$i]['final_price']."'>";
        // echo "<input type='hidden' name='product_qty[]' value='".$order->products[$i]['qty']."'>";
    		
    		
    	 echo ' </td>
			 <td valign="top" width="20">';
			 
			 $productname=$order->products[$i]['name'];
			
			// if($modelname=='EP5' || $modelname=='Ring' || $modelname=='EP15'){
				
			// }
			// else{
				
			// }
			 
			if (strpos($productname,'Glass') !== false || strpos($productname,'GL') !== false  || strpos($productname,'TG') !== false || strpos($productname,'GCWL') !== false || strpos($productname,'ALLIN1') !== false || strpos($productname,'Light Bar') !== false || strpos($productname,'Heat Lamp') !== false){

			if (strpos($productname,'Frosted') !== false || strpos($productname,'Glass Bracket') !== false || strpos($productname,'GLASS CLIP') !== false || strpos($productname,'Plexi-Glass') !== false)
			{
				
				
				echo "<input type='hidden' name='oldvalueface[]' value='".$dbcust."'>";
				echo "<input type='hidden' name='oldvalueheight[]' value='".$dbcustheight."'>";
				
				echo'<select name="customvalue[]" id="productcustom'.$order->products[$i]['id'].'" onchange="change_name('.$order->products[$i]['id'].')">
				<option></option>
				</select>';	
			}
			else{
			if(strpos($productname,'EP5') !== false)
			{
			$modelarray= explode("EP5-",$productname);

			$modelarray2= explode('Glass',$modelarray[1]);
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			
			//echo'<pre>';print_r($modelarray3);
			
			$dbcust=$modelarray3[1];
			$dbcustheight=$modelarray3[0];
			
			
			
			}
			elseif(strpos($productname,'Ring-EP5') !== false)
			{
				
			}
			elseif(strpos($productname,'EP15') !== false)
			{
			$modelarray= explode("EP15-",$productname);
			
			if(strpos($productname,'Right End Glass') !== false)
			{
			$modelarray2= explode('Right End Glass',$modelarray[1]);	
			}
			elseif(strpos($productname,'Left End Glass') !== false)
			{
			$modelarray2= explode('Left End Glass',$modelarray[1]);	
			}
			else{
			$modelarray2= explode('Glass',$modelarray[1]);	
			}
			
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			
			//echo'<pre>';print_r($modelarray3);
			
			$dbcust=$modelarray3[1];
			$dbcustheight=$modelarray3[0];
				
			}
			
			elseif(strpos($productname,'EP11') !== false)
			{
			$modelarray= explode("EP11",$productname);

			$modelarray2= explode('Glass',$modelarray[1]);
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			$noofarr=count($modelarray3);
			//echo'<pre>';print_r($noofarr);
			
			if($noofarr>3)
			{
			$dbcust=$modelarray3[3];	
			}
			else{
			$dbcust=$modelarray3[2];	
			}
			
			
			
			$dbcustheight=$modelarray3[1];
				
			}
			
			elseif(strpos($productname,'EP12') !== false)
			{
			$modelarray= explode("EP12",$productname);

			$modelarray2= explode('Glass',$modelarray[1]);
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			$noofarr=count($modelarray3);
			//echo'<pre>';print_r($noofarr);
			
			if($noofarr>3)
			{
			$dbcust=$modelarray3[3];	
			}
			else{
			$dbcust=$modelarray3[2];	
			}
			
			
			
			$dbcustheight=$modelarray3[1];
				
			}
			elseif(strpos($productname,'EP21') !== false ||strpos($productname,'EP22') !== false ||strpos($productname,'EP36') !== false ||strpos($productname,'ES31') !== false ||strpos($productname,'ES40') !== false ||strpos($productname,'ES67') !== false ||strpos($productname,'ES73') !== false)
			{
			if(strpos($productname,'EP22') !== false)
			{
			$modelarray= explode("EP22-",$productname);	
			}
			elseif(strpos($productname,'EP36') !== false)
			{
			$modelarray= explode("EP36-",$productname);	
			}
			elseif(strpos($productname,'ES31') !== false)
			{
			$modelarray= explode("ES31-",$productname);	
			}
			elseif(strpos($productname,'ES40') !== false)
			{
			$modelarray= explode("ES40-",$productname);	
			}
			elseif(strpos($productname,'ES67') !== false)
			{
			$modelarray= explode("ES67-",$productname);	
			}
			elseif(strpos($productname,'ES73') !== false)
			{
			$modelarray= explode("ES73-",$productname);	
			}
			else{
			$modelarray= explode("EP21-",$productname);	
			}
			

			$modelarray2= explode('Glass',$modelarray[1]);
			
			$modelarray3= explode(' ',$modelarray2[0]);
			
			
			//echo'<pre>';print_r($modelarray2);
			
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			
			
			}
			
			elseif(strpos($productname,'ED20') !== false)
			{
			$modelarray= explode("ED20-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray3[1];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			elseif(strpos($productname,'ES47') !== false)
			{
			$modelarray= explode("ES47-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			elseif(strpos($productname,'ES29') !== false)
			{
			$modelarray= explode("ES29-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
				
				
				
			if(strpos($productname,'GCWL') !== false)
			{
			$modelarray2= explode('GCWL',$modelarray[1]);	
			}
			else{
			$modelarray2= explode('CWGL',$modelarray[1]);	
			}	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			elseif(strpos($productname,'ES53') !== false)
			{
			$modelarray= explode("ES53-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			elseif(strpos($productname,'ES82') !== false)
			{
			$modelarray= explode("ES82-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			if(strpos($productname,'GCWL') !== false)
			{
			$modelarray2= explode('GCWL',$modelarray[1]);	
			}
			else{
			$modelarray2= explode('CWGL',$modelarray[1]);	
			}
				
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			elseif(strpos($productname,'ES90') !== false)
			{
			$modelarray= explode("ES90-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('/TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			
			
			elseif(strpos($productname,'ES92') !== false)
			{
			$modelarray= explode("ES92-",$productname);
			if(strpos($productname,'TG') !== false)
			{
			$modelarray2= explode('TG',$modelarray[1]);
			
			$modelarray3= explode('/CW',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray3);
			$dbcust=$modelarray3[0];
			$dbcustheight='';
			
			}
			else{
			if(strpos($productname,'GCWL') !== false)
			{
			$modelarray2= explode('GCWL',$modelarray[1]);	
			}
			else{
			$modelarray2= explode('CWGL',$modelarray[1]);	
			}
				
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			}
			
			
			}
			
			
			elseif(strpos($productname,'B950') !== false)
			{
			$modelarray= explode("B950-",$productname);
			
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			
			if(strpos($productname,'B950P') !== false)
			{
			$modelarray= explode("B950P-",$productname);
			
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			
			
			
			}
			
			}
			
			
			
			
			
			
			elseif(strpos($productname,'ALLIN1') !== false)
			{
			$productname=rtrim($productname,' ');	
				
				
			$modelarray= explode("ALLIN1-",$productname);
			
			
			//echo'<pre>';print_r($modelarray);
			$dbcust=$modelarray[1];
			$dbcustheight='';
			if(strpos($productname,'"') !== false)
			{
				//$dbcust=rtrim($dbcust,' ');
			}
			else{
				
			$dbcust=''.$dbcust.'"';	
			//$dbcust=rtrim($dbcust,' ');
			}
			
			
			
			}
			
			
			elseif(strpos($productname,'EP950') !== false)
			{
			$modelarray= explode("EP950-",$productname);
			
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
		
			
			}
			
			elseif(strpos($productname,'Light Bar') !== false)
			{
			$modelarray= explode("Light Bar-",$productname);
			
			$modelarray2= explode('Light Bar',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
		
			
			}
			
			
			elseif(strpos($productname,'Mid Shelve') !== false)
			{
			$modelarray= explode("Face Length ",$productname);
			
			if(strpos($productname,'-RND') !== false)
			{
			$modelarray2= explode('-RND',$modelarray[1]);	
			$dbcust=$modelarray2[0];
			
			}
			else{
			$dbcust=$modelarray[1];	
			}
			
			
				
			
			//$modelarray3= explode(' ',$modelarray2[0]);
			
			
			
			//echo'<pre>';print_r($dbcust);
			
			$dbcustheight='';
			
		
			
			}
			
			
			elseif(strpos($productname,'Heat Lamp') !== false)
			{
			$modelarray= explode("Heat Lamp-",$productname);
			
			$modelarray2= explode('CL-',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
		
			
			}
			
			elseif(strpos($productname,'EP6') !== false)
			{
			$modelarray= explode("EP6-",$productname);
		
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			
			
			
			}
			elseif(strpos($productname,'EP7') !== false)
			{
			$modelarray= explode("EP7-",$productname);
		
			$modelarray2= explode('GL',$modelarray[1]);	
			
			$modelarray3= explode(' ',$modelarray2[0]);
			//echo'<pre>';print_r($modelarray2);
			$dbcust=$modelarray2[0];
			$dbcustheight=$modelarray3[0];
			
			
			
			
			}
			
			
			echo "<input type='hidden' name='oldvalueheight[]' value='".$dbcustheight."'>";
			echo "<input type='hidden' name='oldvalueface[]' value='".$dbcust."'>";
			echo'<select name="customvalue[]" id="productcustom'.$order->products[$i]['id'].'" onchange="change_name('.$order->products[$i]['id'].')">';
			$value=12;
			$froms=8;
			$upto=54;
			if(strpos($productname,'B950') !== false)
			{
			if(strpos($productname,'B950P') !== false)
			{
			$froms=24;
			$upto=66;
			}
			else{
			$froms=8;
			$upto=75;	
			}			
				
			}
			elseif(strpos($productname,'ALLIN1') !== false){
			$froms=24;
			$upto=96;	
			}
			elseif(strpos($productname,'EP950') !== false)
			{
			$froms=24;
			$upto=84;
			}
			elseif(strpos($productname,'Light Bar') !== false)
			{
			$froms=24;
			$upto=84;
			}
			elseif(strpos($productname,'Mid Shelve') !== false)
			{
			$froms=8;
			$upto=42;
			}
			elseif(strpos($productname,'Heat Lamp') !== false)
			{
			$froms=26;
			$upto=84;
			}
			else{
			$froms=8;
			$upto=54;	
			}
			
			
			if(strpos($productname,'Light Bar') !== false ||strpos($productname,'Heat Lamp') !== false)
			{
			$incree=1;	
			}
			else{
			$incree=0.25;	
			}
			
			
			for($is=$froms; $is<=$upto; $is=$is+$incree)
			{
			
			if($is>12 && $is<=18)
			{
			$value=18;	
			}
			elseif($is>18 && $is<=24)
			{
			$value=24;	
			}
			elseif($is>24 && $is<=30)
			{
			$value=30;	
			}
			elseif($is>30 && $is<=36)
			{
			$value=36;	
			}
			elseif($is>36 && $is<=42)
			{
			$value=42;	
			}
			elseif($is>42 && $is<=48)
			{
			$value=48;	
			}
			elseif($is>48 && $is<=54)
			{
			$value=54;	
			}
			
			
			else{
			$value=12;		
			}
			$fras1=(int)$is;
			//$dropdonval=decimal_to_fraction($is);
			
			
			$dropdonval=$fras1.decimal_to_fraction2($is).'"';;
			//echo$sss=ltrim($dropdonval,'"');
			//$sss22=rtrim($sss,'"');
			//echo'dropdonval=='.$dropdonval.'//dbcust=='.$dbcust.'';
			
			echo'<script>alert('.$dropdonval.');alert('.$dbcust.');</script>';
			
			if($dbcust==$dropdonval)
			{
			echo'<option value="'.$is.'" selected>';print (int)$is; print decimal_to_fraction($is); echo'"</option>';	
			}
			else{
			echo'<option value="'.$is.'">';print (int)$is; print decimal_to_fraction($is); echo'"</option>';	
			}
			 
			 
			
			 
			}
			 echo'</select>';
			 
			 
			 
			 }	
			}
			 
			 else{
				 //non glass
				 echo "<input type='hidden' name='oldvalueheight[]' value='".$dbcustheight."'>";
				 echo "<input type='hidden' name='oldvalueface[]' value='".$dbcust."'>";
				 echo'<select name="customvalue[]" id="productcustom'.$order->products[$i]['id'].'" onchange="change_name('.$order->products[$i]['id'].')">
				<option></option>
				</select>';	
			 }
			 
			 
			 
			echo '  </td>
			
			<td valign="top">';

    echo"<input type='text' name='product_name[]' readonly='readonly'  id='product".$order->products[$i]['id']."' class='productt' value='" . $order->products[$i]['name'] . "' >";		 

    		

      
        echo '</td>' . "\n";

      

        echo '          </tr>' . "\n";
      }
}



// echo'<pre>';
// print_r($order->products);





function decimal_to_fraction($x)
{
	$x=$x-(int)$x;
	$heightfraction=$x;
	
		if($heightfraction==0.25)
		{
			print '-1/4';
		}
		elseif($heightfraction==0.50)
		{
			print '-1/2';
		}
		elseif($heightfraction==0.75) 
		{
			print '-3/4';
	    }
		
	
	
	}
	

function decimal_to_fraction2($x)
{
	$x=$x-(int)$x;
	$heightfraction=$x;
	
		if($heightfraction==0.25)
		{
			return '-1/4';
		}
		elseif($heightfraction==0.50)
		{
			return '-1/2';
		}
		elseif($heightfraction==0.75) 
		{
			return '-3/4';
	    }
		
	
	
	}
	
?>

<script>


function change_name(custovalue)
{
	
	var productcustmid='productcustom'+custovalue+'';
	
	var customvall=$('#'+productcustmid+' option:selected').text();
	//alert(customvall);
	
	
}
</script>
        </table>
</div>

</div>


<div class="row">
<div class="col-md-12"><h2><?php echo HEADING_BILLING_INFORMATION; ?></h2></div>
</div>


<div class="row">
<div class="col-md-4">
<table border="0" width="100%" cellspacing="0" cellpadding="2">
          <tr>
            <td><h2><strong><?php echo HEADING_BILLING_ADDRESS; ?></strong></h2></td>
          </tr>
      <?php
      $query_order_datasaazz = tep_db_query("select * from orders_edit where orders_id='".$HTTP_GET_VARS['order_id']."'");
  if (mysql_num_rows($query_order_datasaazz)) {

      $order_datasaazz = tep_db_fetch_array($query_order_datasaazz);
      ?>          
          <tr >
            <td>
			<input type="text" name="billing_name" id="billing_name" class="billing" value="<?php echo$order_datasaazz['billing_name'] ?>" placeholder="Name">
			<input type="text" name="billing_company" id="billing_company" class="billing" value="<?php echo$order_datasaazz['billing_company'] ?>" placeholder="Company">
			<input type="text" name="billing_street_address" id="billing_street_address" class="billing" value="<?php echo$order_datasaazz['billing_street_address'] ?>" placeholder="Street Addres ">
			<input type="hidden" name="billing_suburb" id="billing_suburb" class="billing" value="<?php echo$order->billing['suburb'] ?>" placeholder="">
			<input type="text" name="billing_city" id="billing_city" class="billing" value="<?php echo$order_datasaazz['billing_city'] ?>" placeholder="City">
			<input type="text" name="billing_postcode" id="billing_postcode" class="billing" value="<?php echo$order_datasaazz['billing_postcode'] ?>" placeholder="Post code">
			<input type="text" name="billing_state" id="billing_state" class="billing" value="<?php echo$order_datasaazz['billing_state'] ?>" placeholder="State">

			<select name="billing_country" class="delevery">
				
				<option value="38" <?php $selects = ($order_datasaazz['billing_country']=='Canada') ? 'selected="selected"' : 'unselected=""' ; echo $selects; ?> >Canada</option>

				<option value="172" <?php $selects = ($order_datasaazz['billing_country']=='Puerto Rico') ? 'selected="selected"' : 'unselected=""' ; echo $selects; ?> >Puerto Rico</option>

				<option value="223" <?php $selects = ($order_datasaazz['billing_country']=='United States') ? 'selected="selected"' : 'unselected=""' ; echo $selects; ?>>United States</option>
			</select>
      
			<input type="hidden" name="billing_format_id" id="billing_format_id" class="delevery" value="<?php echo$order->billing['format_id'] ?>" placeholder="Format Id">
			
			
			</td>
          </tr>
<?php
}else{
  ?>

          <tr >
            <td>
      <input type="text" name="billing_name" id="billing_name" class="billing" value="<?php echo$order->billing['name'] ?>" placeholder="Name">
      <input type="text" name="billing_company" id="billing_company" class="billing" value="<?php echo$order->billing['company'] ?>" placeholder="Company">
      <input type="text" name="billing_street_address" id="billing_street_address" class="billing" value="<?php echo$order->billing['street_address'] ?>" placeholder="Street Addres ">
      <input type="hidden" name="billing_suburb" id="billing_suburb" class="billing" value="<?php echo$order->billing['suburb'] ?>" placeholder="">
      <input type="text" name="billing_city" id="billing_city" class="billing" value="<?php echo$order->billing['city'] ?>" placeholder="City">
      <input type="text" name="billing_postcode" id="billing_postcode" class="billing" value="<?php echo$order->billing['postcode'] ?>" placeholder="Post code">
      <input type="text" name="billing_state" id="billing_state" class="billing" value="<?php echo$order->billing['state'] ?>" placeholder="State">


      <select name="billing_country" class="billing">
      <option value="38">Canada</option>
      <option value="172">Puerto Rico</option>
      <option value="223" selected="selected">United States</option>
      </select>

      <input type="hidden" name="billing_format_id" id="billing_format_id" class="delevery" value="<?php echo$order->billing['format_id'] ?>" placeholder="Format Id">
      
      
      </td>
          </tr>

  <?php }?>          
          <tr>
            <td><h2><strong><?php echo HEADING_PAYMENT_METHOD; ?></h2></strong></td>
          </tr>
          <tr>
            <td><p><?php echo $order->info['payment_method']; ?></p></td>
          </tr>
        </table>
</div>
</div>


<div class="row">

<div class="col-md-4 update_button">
<button type="submit" name="update" class="btn" >Update</button> 
</div>

<div class="col-md-8">
 <?php echo '<a href="'.tep_href_link('account_history_info.php?order_id='.$HTTP_GET_VARS['order_id'].'', '', 'SSL').'">'; ?><img src="img/new_icons/back_button.png" style="height: 50px;width: 160px;" alt="Back" title=" Back "></a>  

</div>

</div>




  </div>

  </div>


</form>
<?php
//  if (DOWNLOAD_ENABLED == 'true') include(DIR_WS_MODULES . 'downloads.php');
?>


	
	
	

	
	
	
	
	
</div>
</td></tr></table></td></tr></table>

</div>







<?php
  require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>
