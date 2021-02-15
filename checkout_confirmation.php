<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  // if the customer is not logged on, redirect them to the login page
    if (!tep_session_is_registered('customer_id')) {
      $navigation->set_snapshot(array('mode' => 'SSL', 'page' => FILENAME_CHECKOUT_PAYMENT));
      tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
    }
  
  // if there is nothing in the customers cart, redirect them to the shopping cart page
    if ($cart->count_contents() < 1) {
      tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
    }
  
  // avoid hack attempts during the checkout procedure by checking the internal cartID
    if (isset($cart->cartID) && tep_session_is_registered('cartID')) {
      if ($cart->cartID != $cartID) {
        tep_redirect(tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'));
      }
    }
  
  // if no shipping method has been selected, redirect the customer to the shipping method selection page
    if (!tep_session_is_registered('shipping')) {
      tep_redirect(tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'));
    }
  
    if (!tep_session_is_registered('payment')) tep_session_register('payment');
    if (isset($HTTP_POST_VARS['payment'])) $payment = $HTTP_POST_VARS['payment'];
    
    if (!tep_session_is_registered('comments')) tep_session_register('comments');
    if (tep_not_null($HTTP_POST_VARS['comments'])) {
      $comments = tep_db_prepare_input($HTTP_POST_VARS['comments']);
    }
    
    //kgt - discount coupons
    if (!tep_session_is_registered('coupon')) tep_session_register('coupon');
    //this needs to be set before the order object is created, but we must process it after
    $coupon = tep_db_prepare_input($HTTP_POST_VARS['coupon']);
    //end kgt - discount coupons
  
  // load the selected payment module
    require(DIR_WS_CLASSES . 'payment.php');
    $payment_modules = new payment($payment);
  
    require(DIR_WS_CLASSES . 'order.php');
    $order = new order;
  
    $payment_modules->update_status();
  
    if ( ($payment_modules->selected_module != $payment) || ( is_array($payment_modules->modules) && (sizeof($payment_modules->modules) > 1) && !is_object($$payment) ) || (is_object($$payment) && ($$payment->enabled == false)) ) {
      tep_redirect(tep_href_link(FILENAME_CHECKOUT_PAYMENT, 'error_message=' . urlencode(ERROR_NO_PAYMENT_MODULE_SELECTED), 'SSL'));
    }
  
    if (is_array($payment_modules->modules)) {
      $payment_modules->pre_confirmation_check();
    }
    
    //kgt - discount coupons
    if( tep_not_null( $coupon ) && is_object( $order->coupon ) ) { //if they have entered something in the coupon field
      $order->coupon->verify_code();
      if( MODULE_ORDER_TOTAL_DISCOUNT_COUPON_DEBUG != 'true' ) {
        if( !$order->coupon->is_errors() ) { //if we have passed all tests (no error message), make sure we still meet free shipping requirements, if any
          if( $order->coupon->is_recalc_shipping() ) tep_redirect( tep_href_link( FILENAME_CHECKOUT_SHIPPING, 'error_message=' . urlencode( ENTRY_DISCOUNT_COUPON_SHIPPING_CALC_ERROR ), 'SSL' ) ); //redirect to the shipping page to reselect the shipping method
        } else {
          if( tep_session_is_registered('coupon') ) tep_session_unregister('coupon'); //remove the coupon from the session
          tep_redirect( tep_href_link( FILENAME_CHECKOUT_PAYMENT, 'error_message=' . urlencode( implode( ' ', $order->coupon->get_messages() ) ), 'SSL' ) ); //redirect to the payment page
        }
      }
    } else { //if the coupon field is empty, unregister the coupon from the session
      if( tep_session_is_registered('coupon') ) { //we had a coupon entered before, so we need to unregister it
        tep_session_unregister('coupon');
        //now check to see if we need to recalculate shipping:
        require_once( DIR_WS_CLASSES.'discount_coupon.php' );
        if( discount_coupon::is_recalc_shipping() ) tep_redirect( tep_href_link( FILENAME_CHECKOUT_SHIPPING, 'error_message=' . urlencode( ENTRY_DISCOUNT_COUPON_SHIPPING_CALC_ERROR ), 'SSL' ) ); //redirect to the shipping page to reselect the shipping method
      }
    }
    //end kgt - discount coupons
    
  
  // load the selected shipping module
    require(DIR_WS_CLASSES . 'shipping.php');
    
    $shipping_modules = new shipping($shipping);
  
    require(DIR_WS_CLASSES . 'order_total.php');
    $order_total_modules = new order_total;
    $order_total_modules->process();
  
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
  
    require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_CHECKOUT_CONFIRMATION);
    include('includes/header_new_design.php'); 
  
?>
<script>
  $(document).ready(function(){
    if ($.browser.msie  && parseInt($.browser.version, 10) === 7) {
        $("#ex1").css('width',"100%");
        $(".price_table").css("text-align","left");
    }
    });

</script>

<section>
    <div class="mt-5">
        <h1>&nbsp;</h1>
    </div>
    
    <h4 class="font-weight-bold text-center">Please review your order for accuracy.</h4> 
    <hr>
    <div class="container">

      <div class="row">
        <div class="col-md-8 col-sm-8 border-right pl-5 pr-5 pb-5">
        <h5 class="font-weight-bold text-center mb-3"> Product Summary</h5>
        <table  width="100%" cellpadding="0" cellspacing="1">
 <tr>
 <td>
 <!-- <table width="97%" border="0">
  <tr>
    <th width="73%" align="left"><strong >Product Discription</strong></th>
    <th width="10%"><strong >Quantity</strong></th>
    <th width="17%" align="right"><strong>Iteam Total</strong></th>
  </tr>
</table> -->
</td>
</tr>
<tr>
<td>

<table  width="97%" cellspacing="0" cellpadding="6" style="border-bottom:1px solid #ccc;">
<thead style="padding-bottom: 10px; border-bottom:1px solid #ccc;">
<tr>
    <th ><strong >Product Discription</strong></th>
    <th class="text-left"><strong >Quantity</strong></th>
    <th class="text-right"><strong>Iteam Total</strong></th>
  </tr>
</thead>
<?php

if(sizeof($_SESSION['product_final'])>=1){
    $l=0;
  	foreach($_SESSION['product_final'] as $val){
	
	
	echo '          <tr>' . "\n" .
         '            <td valign="top"><b>' . $val['name'];

    if (STOCK_CHECK == 'true') {
      echo tep_check_stock($order->products[$i]['id'], $order->products[$i]['qty']);
    }


    if ( (isset($order->products[$i]['attributes'])) && (sizeof($order->products[$i]['attributes']) > 0) ) {
      for ($j=0, $n2=sizeof($order->products[$i]['attributes']); $j<$n2; $j++) {
        echo '<br /><nobr><small>&nbsp;<i> - ' . $order->products[$i]['attributes'][$j]['option'] . ': ' . $order->products[$i]['attributes'][$j]['value'] . '</i></small></nobr>';
      }
    }

    echo '</b></td>' . "\n";
    echo'            <td align="Left" valign="top" ><b>' . $val['qty'] . '&nbsp;</b></td>' . "\n";
    if (sizeof($order->info['tax_groups']) > 1) 
    echo '<td valign="top" align="right">' . tep_display_tax_value($order->products[$i]['tax']) . '%</td>' . "\n";

    echo '            <td align="right" valign="top"> <b>' . $val['price'] . '</b></td>' . "\n" .
         '          </tr>' . "\n";
	
	
	
	
	
	 $l++;
  }
  }
  else{
  for ($i=0, $n=sizeof($order->products); $i<$n; $i++) {
    echo '          <tr>' . "\n" .
         '            <td valign="top"><b>' . $order->products[$i]['name'];

    if (STOCK_CHECK == 'true') {
      echo tep_check_stock($order->products[$i]['id'], $order->products[$i]['qty']);
    }

    if ( (isset($order->products[$i]['attributes'])) && (sizeof($order->products[$i]['attributes']) > 0) ) {
      for ($j=0, $n2=sizeof($order->products[$i]['attributes']); $j<$n2; $j++) {
        echo '<br /><nobr><small>&nbsp;<i> - ' . $order->products[$i]['attributes'][$j]['option'] . ': ' . $order->products[$i]['attributes'][$j]['value'] . '</i></small></nobr>';
      }
    }

    echo '</b></td>' . "\n";
    echo'            <td align="Left" valign="top" width="40">' . $order->products[$i]['qty'] . '&nbsp;</td>' . "\n";
    if (sizeof($order->info['tax_groups']) > 1) 
    echo '<td valign="top" align="right">' . tep_display_tax_value($order->products[$i]['tax']) . '%</td>' . "\n";

    echo '            <td align="right" valign="top" width="15%"   style=" border-left:1px solid #ccc; color:#AA471C ; font-size:12px; font-weight:bold; "   >' . $currencies->display_price($order->products[$i]['final_price'], $order->products[$i]['tax'], $order->products[$i]['qty']) . '</td>' . "\n" .
         '          </tr>' . "\n";
  }
  }
  
?>
</table>

</td>
</tr>
<tr><td width="97%">
<table border="0"  width="97%" cellspacing="0" cellpadding="4" >

<?php
  if (MODULE_ORDER_TOTAL_INSTALLED) {
    echo $order_total_modules->output();
  }
?>

        </table>
		</td>
      </tr>
    </table>
    <div class="text-center mt-5">
    <?php
			// include('Mobile_Detect.php');
   
			   $mobile = new Mobile_Detect;
			   $tablet = 'Tablet';
			   $mobile = 'Mobile';
		?>
        <?php echo 
        		HEADING_IPRECORDED_1;
        		$ip_iprecorded = YOUR_IP_IPRECORDED;
        		$isp_iprecorded = YOUR_ISP_IPRECORDED;
         		$ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];
        		$client = gethostbyaddr($HTTP_SERVER_VARS["REMOTE_ADDR"]).' Device : ' .($mobile->isMobile ? $mobile : 'MOBILE');
        		$str = preg_split("/\./", $client);
        		$i = count($str);
        		$x = $i - 1;
        		$n = $i - 2;
        		 $isp = $str[$n] . "." . $str[$x] ;
        ?>
        <?php echo "
        <div><strong><B><font color='blue'>$ip_iprecorded: $ip
        <Br>$isp_iprecorded: $client</B></font><Br><Br></strong></div>"; 
        ?>
    </div>
        </div>

        <div class="col-md-4 col-sm-4  pl-5" >
        <?php
  if (isset($$payment->form_action_url)) {
    $form_action_url = $$payment->form_action_url;
  } else {
    $form_action_url = tep_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL');
  }

  echo tep_draw_form('checkout_confirmation', $form_action_url, 'post');
?>
        <h5 class="font-weight-bold"><?php echo HEADING_SHIPPING_INFORMATION; ?></h3>
        <table border="0" width="100%" cellspacing="1" cellpadding="2">
      <tr>

<?php
  if ($sendto != false) {
?>

        <td  valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="2">
          <tr>
            <td><?php echo '<strong>' . HEADING_DELIVERY_ADDRESS . '</strong> <a href="' . tep_href_link(FILENAME_CHECKOUT_SHIPPING_ADDRESS, '', 'SSL') . '"><span class="orderEdit">(' . TEXT_EDIT. ')</span></a>'; ?></td>
          </tr>
          <tr>
            <td><?php echo tep_address_format($order->delivery['format_id'], $order->delivery, 1, ' ', '<br />'); ?></td>
          </tr>

<?php
    if ($order->info['shipping_method']) {
?>

          <tr>
            <td><?php echo '<strong>' . HEADING_SHIPPING_METHOD . '</strong> <a href="' . tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL') . '"><span class="orderEdit">(' . TEXT_EDIT . ')</span></a>'; ?></td>
          </tr>
          <tr>
            <td><?php echo $order->info['shipping_method']; ?></td>
          </tr>
<?php
    }
?>

        </table></td>

<?php
  }
?>

             </tr>
    </table>
    <h5 class="font-weight-bold"><?php echo HEADING_BILLING_INFORMATION; ?></h5>

  <div class="contentText">
    <table border="0" width="100%" cellspacing="1" cellpadding="2">
      <tr>
        <td width="30%" valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="2">
          <tr>
            <td><?php echo '<strong>' . HEADING_BILLING_ADDRESS . '</strong> <a href="' . tep_href_link(FILENAME_CHECKOUT_PAYMENT_ADDRESS, '', 'SSL') . '"><span class="orderEdit">(' . TEXT_EDIT . ')</span></a>'; ?></td>
          </tr>
          <tr>
            <td><?php echo tep_address_format($order->billing['format_id'], $order->billing, 1, ' ', '<br />'); ?></td>
          </tr>
          <tr>
            <td><?php echo '<strong>' . HEADING_PAYMENT_METHOD . '</strong> <a href="' . tep_href_link(FILENAME_CHECKOUT_PAYMENT, '', 'SSL') . '"><span class="orderEdit">(' . TEXT_EDIT . ')</span></a>'; ?></td>
          </tr>
          <tr>
            <td><?php echo $order->info['payment_method']; ?></td>
          </tr>
        </table></td>
        
        </table>
  </div>

<?php
  if (is_array($payment_modules->modules)) {
    if ($confirmation = $payment_modules->confirmation()) {
?>

  <h5 class="font-weight-bold"><?php echo HEADING_PAYMENT_INFORMATION; ?></h5>

  <div class="contentText">
    <table border="0" cellspacing="0" cellpadding="2">
      <tr>
        <td colspan="4"><?php echo $confirmation['title']; ?></td>
      </tr>
 <?php 
   // echo'<pre>';
   // print_r($confirmation['title']); echo'<br />';
    // print_r($confirmation['fields'][1]['field']);echo'<br />';
    // print_r($confirmation['fields'][2]['field']);echo'<br />';
   // echo'</pre>';
	
	$cctypeee=explode(':',$confirmation['title']);
	
	$expireee=date('my',strtotime($confirmation['fields'][2]['field']));
//	echo'<input type="hidden" name="cc_type" value="'.$cctypeee[1].'">';
	//echo'<input type="hidden" name="cc_owner" value="'.$confirmation['fields'][0]['field'].'">';
	//echo'<input type="hidden" name="cc_number" value="'.$confirmation['fields'][1]['field'].'">';
	//echo'<input type="hidden" name="cc_expires" value="'.$expireee.'">';
	
	
	?>	<?php  if (is_array($payment_modules->modules)) {    echo $payment_modules->process_button();  }?>
<?php
      for ($i=0, $n=sizeof($confirmation['fields']); $i<$n; $i++) {
?>

      <tr>
        
        <td class="main"><?php echo $confirmation['fields'][$i]['title']; ?></td>

        <td class="main"><?php echo $confirmation['fields'][$i]['field']; ?></td>
      </tr>

<?php
      }
?>

    </table>
  </div>

<?php
    }
  }

  if (tep_not_null($order->info['comments'])) {
?>

  <h5 class="font-weight-bold"><?php echo '<strong>' . HEADING_ORDER_COMMENTS . '</strong> <a href="' . tep_href_link(FILENAME_CHECKOUT_PAYMENT, '', 'SSL') . '"><span class="orderEdit">(' . TEXT_EDIT . ')</span></a>'; ?></h5>

  <div class="contentText">
    <?php echo nl2br(tep_output_string_protected($order->info['comments'])) . tep_draw_hidden_field('comments', $order->info['comments']); ?>
  </div>

<?php
  }
?>

  

</td></tr></table></td></tr></table>

<div class="contentText">
      <div id="coProgressBar" style="height: 5px;"></div>
    <div class="cbtn text-right"  >
    <input type="submit" class="btn btn-outline-dark form-control" value="Place Your Order" onclick="javascript:document.forms['checkout_payment'].submit();" class="updatebutton" alt="Continue" title=" Continue " >
    </div>
      </div>
    </div>
</form>
</section>

<script type="text/javascript">
$('#coProgressBar').progressbar({
  value: 100
});
</script>

</form>
</td></tr></table>
</div>	

<?php
include('includes/footer_new_design.php');
?>
