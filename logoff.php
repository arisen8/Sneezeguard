<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_LOGOFF);

  $breadcrumb->add(NAVBAR_TITLE);

  tep_session_unregister('customer_id');
  tep_session_unregister('customer_default_address_id');
  tep_session_unregister('customer_first_name');
  tep_session_unregister('customer_country_id');
  tep_session_unregister('customer_zone_id');
  tep_session_unregister('comments');
  //kgt - discount coupons
  tep_session_unregister('coupon');
  //end kgt - discount coupons 
  $wishlist->removeSession();
  session_destroy();
  unset($_SESSION['product_custom']);
  unset($_SESSION['product_final1']);
  
 
// Discount Code 2.7 - start
if (MODULE_ORDER_TOTAL_DISCOUNT_STATUS == 'true' &&
tep_session_is_registered('sess_discount_code')) {
tep_session_unregister('sess_discount_code');
}
// Discount Code 2.7 - end
  $cart->reset();


  require(DIR_WS_INCLUDES . 'header_new_design.php');
?>
<script>
	$(document).ready(function(){
		if ($.browser.msie  && parseInt($.browser.version, 10) === 7) {
   			$("#ex1").css('width',"100%");
   			$(".price_table").css("text-align","left");
		}
   	});

</script>

	<!--<td id="ex1" align=center width="190" valign="top">-->
<div class="mt-5 ">
<h1>&nbsp;</h1>
</div>
<section onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
     <div class="container mt-5 mb-5">
       <div class="text-center">
          <h1><?php echo HEADING_TITLE; ?></h1>
          <p><?php echo TEXT_MAIN; ?></p>
          <a href="<?php  echo tep_href_link('index.php'); ?>" class="btn btn-outline-dark" title="Continue">CONTINUE</a>
       </div>
     </div>
</section>
<div class="mb-5">
<h1>&nbsp;</h1>
</div>
<?php require(DIR_WS_INCLUDES . 'footer_new_design.php');?>
