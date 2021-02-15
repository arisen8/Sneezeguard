<?php 
ini_set('display_errors', 0);
ob_start();
require("includes/application_top.php");

include('includes/header_new_design.php'); 
require('includes/classes/http_client.php');
define('FREE_SHIPPING_TITLE', ' Free Shipping');

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/
// if the customer is not logged on, redirect them to the login page
  if (!tep_session_is_registered('customer_id')) {
    $navigation->set_snapshot();
    tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
  }

// if there is nothing in the customers cart, redirect them to the shopping cart page
  if ($cart->count_contents() < 1) {
    tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
  }

// if no shipping method has been selected, redirect the customer to the shipping method selection page
  if (!tep_session_is_registered('shipping')) {
    tep_redirect(tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'));
  }

// avoid hack attempts during the checkout procedure by checking the internal cartID
  if (isset($cart->cartID) && tep_session_is_registered('cartID')) {
    if ($cart->cartID != $cartID) {
      tep_redirect(tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'));
    }
  }

// Stock Check
  if ( (STOCK_CHECK == 'true') && (STOCK_ALLOW_CHECKOUT != 'true') ) {
    $products = $cart->get_products();
    for ($i=0, $n=sizeof($products); $i<$n; $i++) {
      if (tep_check_stock($products[$i]['id'], $products[$i]['quantity'])) {
        tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
        break;
      }
    }
  }

// if no billing destination address was selected, use the customers own address as default
  if (!tep_session_is_registered('billto')) {
    tep_session_register('billto');
    $billto = $customer_default_address_id;
  } else {
// verify the selected billing address
    if ( (is_array($billto) && empty($billto)) || is_numeric($billto) ) {
      $check_address_query = tep_db_query("select count(*) as total from " . TABLE_ADDRESS_BOOK . " where customers_id = '" . (int)$customer_id . "' and address_book_id = '" . (int)$billto . "'");
      $check_address = tep_db_fetch_array($check_address_query);

      if ($check_address['total'] != '1') {
        $billto = $customer_default_address_id;
        if (tep_session_is_registered('payment')) tep_session_unregister('payment');
      }
    }
  }
$_SESSION['billto'] = $billto;
  require(DIR_WS_CLASSES . 'order.php');
  $order = new order;

  if (!tep_session_is_registered('comments')) tep_session_register('comments');
  if (isset($HTTP_POST_VARS['comments']) && tep_not_null($HTTP_POST_VARS['comments'])) {
    $comments = tep_db_prepare_input($HTTP_POST_VARS['comments']);
  }

  $total_weight = $cart->show_weight();
  $total_count = $cart->count_contents();

// load all enabled payment modules
  require(DIR_WS_CLASSES . 'payment.php');
  $payment_modules = new payment;

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_CHECKOUT_PAYMENT);

?>
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
  if (document.checkout_payment.payment[0]) {
    document.checkout_payment.payment[buttonSelect].checked=true;
  } else {
    document.checkout_payment.payment.checked=true;
  }
}

function rowOverEffect(object) {
  if (object.className == 'moduleRow') object.className = 'moduleRowOver';
}

function rowOutEffect(object) {
  if (object.className == 'moduleRowOver') object.className = 'moduleRow';
}
//--></script>
<!-- BOF Agree2Terms_v2 jQuery -->
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/osx.js'></script>
<script language="javascript"><!--
function rowOverEffect(object) {
  if (document.checkout_payment.elements[object].parentNode.parentNode.className != 'moduleRowSelected') {
    document.checkout_payment.elements[object].parentNode.parentNode.className = 'moduleRowOver';
  }
}

function rowOutEffect(object) {
  if (document.checkout_payment.elements[object].checked) {
    document.checkout_payment.elements[object].parentNode.parentNode.className = 'moduleRowSelected';
  } else {
    document.checkout_payment.elements[object].parentNode.parentNode.className = 'infoBoxContents';
  }
}

function checkboxRowEffect(object) {
  document.checkout_payment.elements[object].checked = !document.checkout_payment.elements[object].checked;
  if(document.checkout_payment.elements[object].checked) {
    document.checkout_payment.elements[object].parentNode.parentNode.className = 'moduleRowSelected';
  } else {
    document.checkout_payment.elements[object].parentNode.parentNode.className = 'moduleRowOver';
  }
}

function check_agree(TheForm) {
  if (TheForm.agree.checked) {
    return true;
  } else {
    alert(unescape('<?php echo CONDITION_AGREEMENT_ERROR; ?>'));
    return false;
  }

}
var win = null;
function NewWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}
//--></script>
<!--<link type='text/css' href='css/osx.css' rel='stylesheet' media='screen' />-->
<!-- EOF Agree2Terms_v2 jQuery -->
<script>
  $(document).ready(function(){
    if ($.browser.msie  && parseInt($.browser.version, 10) === 7) {
        $("#ex1").css('width',"100%");
        $(".price_table").css("text-align","left");
    }
    });

</script>

<body>
<section>
<?php if (isset($$payment->form_action_url)) {
    $form_action_url = $$payment->form_action_url;
  } else {
    $form_action_url = tep_href_link(FILENAME_CHECKOUT_CONFIRMATION, '', 'SSL');
  } 
  echo tep_draw_form('checkout_confirmation', $form_action_url, 'post', 'onsubmit="return check_agree(this);"');
?>
    <div class="mt-5">
        <h1>&nbsp;</h1>
    </div>
    <div class="container">
    <h3  class="text-center font-weight-bold p-2">Please enter your payment information</h3>  
    <hr>
    <div class="row">
<div class="col-md-6 col-sm-6 border-right pl-5 pr-5 pb-5 checkout-payment">
<table width="100%" cellpadding="2" cellspacing="2">
<tr>

<td width="55%">
<?php echo $payment_modules->javascript_validation(); ?>


<?php echo tep_draw_form('checkout_payment', tep_href_link(FILENAME_CHECKOUT_CONFIRMATION, '', 'SSL'), 'post', 'onsubmit="return check_form();"', true,'ie'); ?>

<div class="contentContainer" style="text-align: left;">

<?php
  if (isset($HTTP_GET_VARS['payment_error']) && is_object(${$HTTP_GET_VARS['payment_error']}) && ($error = ${$HTTP_GET_VARS['payment_error']}->get_error())) {
?>

  <div class="alert alert-danger">
    <?php echo '<strong>' . tep_output_string_protected($error['title']) . '</strong>'; ?>

    <p class="messageStackError"><?php echo tep_output_string_protected($error['error']); ?></p>
  </div>

<?php
  }
?>

  
  <div style="clear: both;"></div>

  <table> <tr><td><h4  style="color:black; text-align:left;"><?php echo TABLE_HEADING_PAYMENT_METHOD; ?></h4></td><td><img src="img/creditCards.jpg" width="156" height="50" /></td></tr></table>

<?php
  $selection = $payment_modules->selection();
// echo "<pre>";
// print_r($selection);
// die;
  if (sizeof($selection) > 1) {
?>

  <div class="contentText" style="font-size:13px;">
    <div style="float: right;">
	      <?php // echo '<strong>' . TITLE_PLEASE_SELECT . '</strong>'; ?>
    </div>

 <?php echo TEXT_SELECT_PAYMENT_METHOD; ?>
  </div>

<?php
    } elseif ($free_shipping == false) {
?>
  <div class="contentText" style="font-size:13px;">
    <?php echo TEXT_ENTER_PAYMENT_INFORMATION; ?>
  </div>

<?php
    }
?>

  <div class="contentText">

<?php
  $radio_buttons = 0;
  for ($i=0, $n=sizeof($selection); $i<$n; $i++) {
?>

    <table border="0" width="100%" cellspacing="0" >

<?php
    if ( ($selection[$i]['id'] == $payment) || ($n == 1) ) {
      echo '      <tr id="defaultSelected" class="moduleRowSelected" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" onclick="selectRowEffect(this, ' . $radio_buttons . ')" style="font-size:15px;">' . "\n";
    } else {
      echo '      <tr class="moduleRow" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" onclick="selectRowEffect(this, ' . $radio_buttons . ')" style="font-size:15px;">' . "\n";
	  
    }
?>
<!--
 <td align="Left" width="10px">
      </td>
-->
<?php
    if (sizeof($selection) > 1) {
      echo tep_draw_radio_field('payment', $selection[$i]['id'], ($selection[$i]['id'] == $payment));
    } else {
      echo tep_draw_hidden_field('payment', $selection[$i]['id']);
    }
?>

  
        <td><strong><?php echo $selection[$i]['module']; ?></strong></td>
       
      </tr>

<?php
    if (isset($selection[$i]['error'])) {
?>

      <tr>
        <td colspan="2"><?php echo $selection[$i]['error']; ?></td>
      </tr>

<?php
    } elseif (isset($selection[$i]['fields']) && is_array($selection[$i]['fields'])) {
?>

      <tr>
        <td colspan="2"><table  width="100%">

<?php
      for ($j=0, $n2=sizeof($selection[$i]['fields']); $j<$n2; $j++) {
?>

          <tr>
            <td width="40%"><?php echo $selection[$i]['fields'][$j]['title']; ?></td>
            <td width="60%"><?php echo $selection[$i]['fields'][$j]['field']; ?></td>
          </tr>

<?php
      }
?>

        </table></td>
      </tr>

<?php
    }
?>

    </table>

<?php
    $radio_buttons++;
  }
?>
  <?php
  if (is_array($payment_modules->modules)) {
    echo $payment_modules->process_button();
  }

//<!-- BOF Agree2Terms_v2 jQuery -->
		  //echo tep_draw_form('checkout_confirmation', $form_action_url, 'post', 'onsubmit="return check_agree(this);"');
		  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_CONDITIONS);
?>
			<table width="100%" class="" border="0" style="border-collapse: collapse">
				<tr>
		            <td>
						<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse: collapse">
						
						
			              <tr class="infoBoxContents" style="font-size: 13px;">
			                <td align="right" border="0" colspan="2">
			          			<b>
								<?php echo CONDITION_AGREEMENT; ?></b>
							</td>
							
							<td onclick="window.document.checkout_payment.agree.checked = !window.document.checkout_payment.agree.checked;" align="right" width="20px" >
							<!-- aler for read conditions and term-->
							
							

							
							
							<input id="myCheck" class="osx" type="checkbox" name="agree" value="true" />
							
<script>							
function check() {
    document.getElementById("myCheck").checked = true;
}
</script>

							
							</td>
			          	  </tr>
						  <tr class="infoBoxContents">
						  	<td align="right" colspan="2">
							  <a href="javascript:void(0);" class="osx">
							  	<u style="font-size: 13px;" ><?php echo CONDITIONS; ?></u>
							  </a>
							</td>
		              	  </tr>
						</table>
		            </td>
		        
		          <tr>
		            <td><table border="0" width="100%" cellspacing="1" cellpadding="2"  class="infoBox">
		              <tr class="infoBoxContents">
		                <td align="right"><?php //echo tep_image_submit('button_confirm_order.gif', IMAGE_BUTTON_CONFIRM_ORDER); ?></td>
		              </tr>
		            </table></td>
		          </tr>
		    </table></form></td>
		    </tr>
        </table>

        <style>
            #osx-modal-content, #osx-modal-data {display:none;}
            /* Overlay */
            #osx-overlay {background-color:#000; cursor:wait;}
            /* Container */
            #osx-container {background-color:#eee; color:#000; font: 16px/24px "Lucida Grande",Arial,sans-serif; padding-bottom:4px; width:600px; -moz-border-radius-bottomleft:6px; -webkit-border-bottom-left-radius:6px; -moz-border-radius-bottomright:6px; -webkit-border-bottom-right-radius:6px; border-radius:0 0 6px 6px; -moz-box-shadow:0 0 64px #000; -webkit-box-shadow:0 0 64px #000;}
            #osx-container a {color:#ddd;}
            #osx-container #osx-modal-title {color:#000; background-color:#ddd; border-bottom:1px solid #ccc; font-weight:bold; padding:6px 8px; text-shadow:0 1px 0 #f4f4f4;}
            #osx-container .close {display:none; position:absolute; right:0; top:0;}
            #osx-container .close a {display:block; color:#777; font-weight:bold; padding:6px 12px 0; text-decoration:none; text-shadow:0 1px 0 #f4f4f4;}
            #osx-container .close a:hover {color:#000;}
            #osx-container #osx-modal-data {font-size:12px; padding:6px 12px;}
            #osx-container h4 {margin:10px 0 6px;}
            #osx-container p {margin-bottom:10px;color:black;}
            #osx-container span {color:#777;}
        </style>
        <!-- OSX CSS not foud so comment done on 11june 2015 -->
		<div id="osx-modal-content">
			<div id="osx-modal-title"><?=CONDITIONS?></div>
			<div class="close"><button class="simplemodal-close"  onclick="check()">x</button></div>
			<div id="osx-modal-data" style="overflow:scroll;height:570px;">
				<?
				//=TERMSCONDITIONS
				$res=tep_db_query("select * from ".TABLE_CONDITION_AND_TERM);
                while($row=tep_db_fetch_array($res)){
                echo$msg_con_term=$row["message"];
	            }
				?>
				<p><button class="simplemodal-close"  onclick="check()"><?=TEXT_AGREE_CLOSE?></button> <span><?=TEXT_AGREE_PRESS?></span></p>
			</div>
		</div>
  <h4><?php echo TABLE_HEADING_BILLING_ADDRESS; ?></h4>

  <div class="contentText">
   <div class="col-md-12 col-sm-12">
       <p><?php echo tep_address_format($order->billing['format_id'], $order->billing, 1, ' ', '<br />'); ?></p>
   
   </div>
     <div class="cbtn" width="100%">
    <a id="tdb1" href="<?php echo tep_href_link(FILENAME_CHECKOUT_PAYMENT_ADDRESS, '', 'SSL'); ?>"><input type="button" class="btn btn-outline-dark form-control" value="CHANGE ADDRESS"> </a>
     
     </div>
   <!--
   
    <table  >
    	<tr><td rowspan="2"><?php echo tep_address_format($order->billing['format_id'], $order->billing, 1, ' ', '<br />'); ?></td></tr>
        
		<tr><td valign="top" align="center" width="200px"> <?php //echo TEXT_SELECTED_BILLING_DESTINATION; ?><br /><br /><div class="buttonAction"><?php echo tep_draw_button(IMAGE_BUTTON_CHANGE_ADDRESS, 'home', tep_href_link(FILENAME_CHECKOUT_PAYMENT_ADDRESS, '', 'SSL')); ?></td>
        </tr>
    </table>-->
    </div>

   </div>

<div class="col-md-6 col-sm-6 border-right pl-5 pr-5 pb-5">
 
 <?php
// Discount Code 2.6 - start
if (MODULE_ORDER_TOTAL_DISCOUNT_STATUS == 'true') {
?>
<h4>Dealer code <?php /*echo TEXT_DISCOUNT_CODE; */?></h4>

<table width="100%"> 
        <tr><td colspan="2"><b>Do you have a Dealer code  ? Enter dealer code here :</b></td></tr>
		<tr><td >
<?php echo tep_draw_input_field('discount_code', $sess_discount_code, 'size="10"'); ?>
<?php
}
// Discount Code 2.6 - end
?>
   </td></tr>     
    </table>

   <h4 class="mb-2"><?php echo TABLE_HEADING_COMMENTS; ?></h4>

  <div class="contentText">
    <?php echo tep_draw_textarea_field('comments', 'soft', '50', '3', $comments); ?>
    
      
	  <?php 
	  
	  /* kgt - discount coupons */
	if( MODULE_ORDER_TOTAL_DISCOUNT_COUPON_STATUS == 'true' ) {
?>
<h4 style="font-size:13px;" class="mt-2"><?php echo TABLE_HEADING_COUPON; ?></h4>

  <div class="contentText">
  	 </div>
        <div class="contentText" >
        <?php echo "<p class='font-weight-bold'>".ENTRY_DISCOUNT_COUPON."</p>".' '.tep_draw_input_field('coupon', '', 'size="15"', $coupon); ?>
  	 </div>
		
<?php
	}
/* end kgt - discount coupons */ 
?>
  <div class="contentText">
		<?php
			preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);
			if(count($matches)<2){
			  preg_match('/Trident\/\d{1,2}.\d{1,2}; rv:([0-9]*)/', $_SERVER['HTTP_USER_AGENT'], $matches);
			}
			if (count($matches)>1){
            echo '<div class="cbtn mt-4" width="50%">
            <input type="submit" class="btn btn-outline-dark" value="Continue" onclick="javascript:document.forms["checkout_payment"].submit();">
            </div>';
			//   echo '<div style="float: right;"><input type="image" class="updatebutton" src="img/new_icons/continue.png" alt="" button="" onclick="javascript:document.forms["checkout_payment"].submit();" style="width:50%"></div>';
			}else{
                echo '<div class="cbtn mt-4" width="50%">
            <input type="submit" class="btn btn-outline-dark form-control" value="Continue" onclick="javascript:document.forms["checkout_payment"].submit();">
            </div>';
			//   echo '<div style="float: right;"><input type="image" class="updatebutton" src="img/new_icons/continue.png" style="width:50%" alt="" button="" onclick="javascript:document.forms["checkout_payment"].submit();"></div>';
			}

		?>

    <!--<div style="float: right;"><?php //echo tep_image_submit("continue.gif", IMAGE_BUTTON_CONFIRM_ORDER, 'button'); ?></div>-->
  </div>
</div>

<script type="text/javascript">
$('#coProgressBar').progressbar({
  value: 66
});
</script>
</form>
</div>
        </div>
    </div>
    </div>
</section>
<style>
.checkout-payment select {
    width: 49%;
}
</style>
<script>
    $(document).ready(function(){
        $("input[name='cc_owner']").attr('class','form-control');
        $("input[name='cc_number']").attr('class','form-control');
        $("input[name='discount_code']").attr('class','form-control');
        $("input[name='coupon']").attr('class','form-control');
        $("textarea[name='comments']").attr('class','form-control');
    })
</script>
</body>
</html>
<?php include('includes/footer_new_design.php');?>
