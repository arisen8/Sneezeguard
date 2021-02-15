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
?>


<style>

.account-history{margin-top:95px;text-align:center;}

.contentText{font-size:15px;}
.form_white h2{font-size:22px;}
.account-history span{font-size:16px;}

@media screen and (max-width:992px) {
.contentText{font-size:13px;}
.form_white h2{font-size:20px;}
.account-history span{font-size:14px;}	
}

@media screen and (max-width:768px) {
.contentText{font-size:12px;}
.form_white h2{font-size:19px;}
.account-history span{font-size:13px;}	
}


@media screen and (max-width:480px) {
.contentText{font-size:11px;}
.form_white h2{font-size:18px;}
.account-history span{font-size:12px;}	
}
</style>
<div class="container account-history">
<div class="row">
<div class="col-md-12">
<br />
<h2><?php echo HEADING_TITLE; ?></h2>
<br />
<div class="contentContainer">
  <h2><?php echo sprintf(HEADING_ORDER_NUMBER, $HTTP_GET_VARS['order_id']) . ' <span class="contentText">(' . $order->info['orders_status'] . ')</span>'; ?></h2>
<br />
</div>



</div>
</div>


<div class="row">
<div class="col-md-12">
      <span style="float: right;"><?php echo HEADING_ORDER_TOTAL . ' ' . $order->info['total']; ?></span>
      <span><?php echo HEADING_ORDER_DATE . ' ' . tep_date_long($order->info['date_purchased']); ?></span>
    </div>
</div>



<div class="row">
<div class="col-md-4">

<?php
  if ($order->delivery != false) {
?>
<div class="row">
<div class="col-md-12">
<h2><?php echo HEADING_DELIVERY_ADDRESS; ?></h2>
<span><?php echo tep_address_format($order->delivery['format_id'], $order->delivery, 1, ' ', '<br />'); ?></span>
</div>
</div>
<?php

  }
?>

<?php  
if (tep_not_null($order->info['shipping_method'])) {
?>
<div class="row">
<div class="col-md-12">
<h2><?php echo HEADING_SHIPPING_METHOD; ?></h2>
<span><?php echo $order->info['shipping_method']; ?></span>
</div>
</div>
<?php
    }
?>

</div>

<div class="col-md-8">
<div class="row">
<div class="col-md-12">
<table border="0" width="100%" cellspacing="0" cellpadding="2">
<?php
  if (sizeof($order->info['tax_groups']) > 1) {
?>
          <tr>
            <td colspan="2"><span><strong><?php echo HEADING_PRODUCTS; ?></strong></span></td>
            <td align="right"><span><strong><?php echo HEADING_TAX; ?></strong></span></td>
            <td align="right"><span><strong><?php echo HEADING_TOTAL; ?></strong></span></td>
          </tr>
<?php
  } else {
?>
          <tr>
            <td colspan="2"><span><strong><?php echo HEADING_PRODUCTS; ?></strong></span></td>
            <td align="right"><span><strong><?php echo HEADING_TOTAL; ?></strong></span></td>
          </tr>
<?php
  }

  for ($i=0, $n=sizeof($order->products); $i<$n; $i++) {
    echo '          <tr>' . "\n" .
         '            <td align="right" valign="top" width="30"><span>' . $order->products[$i]['qty'] . '&nbsp;x&nbsp;</span></td>' . "\n" .
         '            <td valign="top"><span>' . $order->products[$i]['name'];

    if ( (isset($order->products[$i]['attributes'])) && (sizeof($order->products[$i]['attributes']) > 0) ) {
      for ($j=0, $n2=sizeof($order->products[$i]['attributes']); $j<$n2; $j++) {
        echo '<br /><nobr><small>&nbsp;<i> - ' . $order->products[$i]['attributes'][$j]['option'] . ': ' . $order->products[$i]['attributes'][$j]['value'] . '</i></small></nobr>';
      }
    }

    echo '</span></td>' . "\n";

    if (sizeof($order->info['tax_groups']) > 1) {
      echo '            <td valign="top" align="right"><span>' . tep_display_tax_value($order->products[$i]['tax']) . '%</span></td>' . "\n";
    }

    echo '            <td align="right" valign="top"><span>' . $currencies->format(tep_add_tax($order->products[$i]['final_price'], $order->products[$i]['tax']) * $order->products[$i]['qty'], true, $order->info['currency'], $order->info['currency_value']) . '</span></td>' . "\n" .
         '          </tr>' . "\n";
  }
?>
        </table>
</div>
</div>
</div>
<hr />
</div>

<div class="row">
<div class="col-md-12"> <h2><?php echo HEADING_BILLING_INFORMATION; ?></h2></div>
</div>
<div class="row">

<div class="col-md-4">
<div class="row">
<div class="col-md-12"><h2><?php echo HEADING_BILLING_ADDRESS; ?></h2>
<span><?php echo tep_address_format($order->billing['format_id'], $order->billing, 1, ' ', '<br />'); ?></span>
</div>
</div>

<div class="row">
<div class="col-md-12">
<h2><?php echo HEADING_PAYMENT_METHOD; ?></h2>
<span><?php echo $order->info['payment_method']; ?></span>
</div>
</div>
</div>

<div class="col-md-8">
<div class="row">
<div class="col-md-12">
<table border="0" width="100%" cellspacing="0" cellpadding="2">
<?php
  for ($i=0, $n=sizeof($order->totals); $i<$n; $i++) {
    echo '          <tr>' . "\n" .
         '            <td align="right" width="100%"><span>' . $order->totals[$i]['title'] . '</span></td>' . "\n" .
         '            <td align="right"><span>' . $order->totals[$i]['text'] . '</span></td>' . "\n" .
         '          </tr>' . "\n";
  }
?>
        </table>
</div>
</div>

</div>

<hr />
</div>




<div class="row">
<div class="col-md-12"> <h2><?php echo HEADING_ORDER_HISTORY; ?></h2></div>
</div>

<div class="row">
<div class="col-md-12">
<table border="0" width="100%" cellspacing="0" cellpadding="2">
<?php
  $statuses_query = tep_db_query("select os.orders_status_name, osh.date_added, osh.comments from " . TABLE_ORDERS_STATUS . " os, " . TABLE_ORDERS_STATUS_HISTORY . " osh where osh.orders_id = '" . (int)$HTTP_GET_VARS['order_id'] . "' and osh.orders_status_id = os.orders_status_id and os.language_id = '" . (int)$languages_id . "' and os.public_flag = '1' order by osh.date_added");
  while ($statuses = tep_db_fetch_array($statuses_query)) {
    echo '          <tr>' . "\n" .
         '            <td valign="top" width="70"><span>' . tep_date_short($statuses['date_added']) . '</span></td>' . "\n" .
         '            <td valign="top" width="70"><span>' . $statuses['orders_status_name'] . '</span></td>' . "\n" .
         '            <td valign="top"><span>' . (empty($statuses['comments']) ? '&nbsp;' : nl2br(tep_output_string_protected($statuses['comments']))) . '</span></td>' . "\n" .
         '          </tr>' . "\n";
  }
?>
        </table>
</div>


</div>




<?php
  if (DOWNLOAD_ENABLED == 'true') include(DIR_WS_MODULES . 'downloads.php');
?>




<div class="row">
<div class="col-md-6">
<div class="buttonSet">
    <?php echo '<a href="'.tep_href_link(FILENAME_ACCOUNT, '', 'SSL').'"'; ?> alt="Back" title=" Back " class="btn btn-outline-dark">Back</a>  </div>
</div>
<div class="col-md-6">

<?php
//echo'<pre>';


$date1 = $order->info['date_purchased'];
$date2 = date("Y-m-d h:i:sa");
$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($date2);
$hour = abs($timestamp2 - $timestamp1)/(60*60);


//print_r($hour);

//echo "Difference between two dates is " .  . " hour(s)";

?>


<?php  

if($hour<=24)
{
?>

    <?php 
	
	//tep_href_link('accoount_edit_order.php?order_id='.$HTTP_GET_VARS['order_id'].'&osCsid='.$HTTP_GET_VARS['osCsid'].'', '', 'SSL').''
	
	
	
	echo '<a href="'.tep_href_link('accoount_edit_order.php','order_id='.$HTTP_GET_VARS['order_id'].'').'" class="btn btn-outline-dark">'; ?>Edit Order</a>  </div>
	
	
	<?php
}
	?>
</div>


</div>


</div>

</div>





<?php
  require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>
