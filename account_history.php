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

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ACCOUNT_HISTORY);

  $breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));
  $breadcrumb->add(NAVBAR_TITLE_2, tep_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL'));

  require(DIR_WS_INCLUDES . 'header_new_design.php');
?>


<style>
.contentText{font-size:14px;}
.account-history{margin-top:95px;text-align:center;}
.form_white h2{font-size:22px;}
.customer_order{font-size:20px;}
</style>

<div class="">
<h1>&nbsp;</h1>
</div>
<div class="container mt-5" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->





<h2 class="text-center"><?php echo HEADING_TITLE; ?></h2>
<?php
  $orders_total = tep_count_customer_orders();

  if ($orders_total > 0) {
    $history_query_raw = "select o.orders_id, o.date_purchased, o.delivery_name, o.billing_name, ot.text as order_total, s.orders_status_name from " . TABLE_ORDERS . " o, " . TABLE_ORDERS_TOTAL . " ot, " . TABLE_ORDERS_STATUS . " s where o.customers_id = '" . (int)$customer_id . "' and o.orders_id = ot.orders_id and ot.class = 'ot_total' and o.orders_status = s.orders_status_id and s.language_id = '" . (int)$languages_id . "' and s.public_flag = '1' order by orders_id DESC";
    $history_split = new splitPageResults($history_query_raw, MAX_DISPLAY_ORDER_HISTORY);
    $history_query = tep_db_query($history_split->sql_query);

    while ($history = tep_db_fetch_array($history_query)) {
      $products_query = tep_db_query("select count(*) as count from " . TABLE_ORDERS_PRODUCTS . " where orders_id = '" . (int)$history['orders_id'] . "'");
      $products = tep_db_fetch_array($products_query);

      if (tep_not_null($history['delivery_name'])) {
        $order_type = TEXT_ORDER_SHIPPED_TO;
        $order_name = $history['delivery_name'];
      } else {
        $order_type = TEXT_ORDER_BILLED_TO;
        $order_name = $history['billing_name'];
      }
?>

		
	<div class="row">
	<div class="col-md-1">
	</div>
	<div class="col-md-10">
	
	
  <h5 ><b><?php echo TEXT_ORDER_NUMBER . ' ' . $history['orders_id'] . ' <span class="contentText">(' . $history['orders_status_name'] . ')</span>'; ?></b></h5>
	<div class="row ">
	  
	  <div class="col-sm-4 col-md-4">
	 <p ><?php echo '<strong>' . TEXT_ORDER_DATE . '</strong> ' . tep_date_long($history['date_purchased']) . '<br /><strong>' . $order_type . '</strong> ' . tep_output_string_protected($order_name); ?></p>
	
	  </div>
	  
	  
	  <div class="col-sm-8 col-md-8">
	  <div class="row ">
	  <div class="col-6 col-sm-6 col-md-6 text-center">
	  <p ><?php echo '<strong>' . TEXT_ORDER_PRODUCTS . '</strong> ' . $products['count'] . '<br /><strong>' . TEXT_ORDER_COST . '</strong> ' . strip_tags($history['order_total']); ?></p>
	  </div>
	  <div class="col-6 col-sm-6 col-md-6 text-right">
	  
	  <?php echo '<p ><a href="'.tep_href_link(FILENAME_ACCOUNT_HISTORY_INFO, (isset($HTTP_GET_VARS['page']) ? 'page=' . $HTTP_GET_VARS['page'] . '&' : '') . 'order_id=' . $history['orders_id'], 'SSL').'" alt="View" title="View"  class="btn btn-outline-dark">Details
		</a></p>'; ?>
	  </div>
	  </div>
	  </div>
	  
	  
		
		
     </div>
	</div>
	<div class="col-md-1">
	</div>
	</div>

      

  <br /> 
<hr />
<?php
    }
?>


	<div class="row">
	<div class="col-md-1">
	</div>
	<div class="col-md-10">
	
  <div class="contentText">
    <p style="float: right;"><?php echo TEXT_RESULT_PAGE . ' ' . $history_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></p>

    <p><?php echo $history_split->display_count(TEXT_DISPLAY_NUMBER_OF_ORDERS); ?></p>
  </div>


	</div>
	
	<div class="col-md-1">
	</div>
	</div>
	




<?php
  } else {
?>

  <div class="contentText">
    <p><?php echo TEXT_NO_PURCHASES; ?></p>
  </div>

<?php
  }
?>




  <div class="text-center p-5">
  <?php echo '<a href="'.tep_href_link(FILENAME_ACCOUNT, '', 'SSL').'" alt="Back" title=" Back " class="btn btn-sm btn-outline-dark">Back</a>';?>
  
 
    <?php //echo '<a href="'.tep_href_link(FILENAME_ACCOUNT, '', 'SSL').'">'.tep_image_button('button_back.gif', IMAGE_BUTTON_BACK).'</a>';?>
  </div>






</div>


<?php
  require(DIR_WS_INCLUDES . 'footer_new_design.php');
  
?>
