<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/
//-----------------------------------------------


//----------------------------------------------------
  
  
  
  
  require('includes/application_top.php');

  //echo $tishu;
  //exit;
  echo'<b style="color:red;"><pre>';print_r($order); echo'</pre></b>';
    include('includes/header_new_design.php'); 
  // if the customer is not logged on, redirect them to the shopping cart page
    if (!tep_session_is_registered('customer_id')) {
      tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
    }
  
    if (isset($HTTP_GET_VARS['action']) && ($HTTP_GET_VARS['action'] == 'update')) {
      $notify_string = '';
  
      if (isset($HTTP_POST_VARS['notify']) && !empty($HTTP_POST_VARS['notify'])) {
        $notify = $HTTP_POST_VARS['notify'];
  
        if (!is_array($notify)) {
          $notify = array($notify);
        }
  
        for ($i=0, $n=sizeof($notify); $i<$n; $i++) {
          if (is_numeric($notify[$i])) {
            $notify_string .= 'notify[]=' . $notify[$i] . '&';
          }
        }
  
        if (!empty($notify_string)) {
          $notify_string = 'action=notify&' . substr($notify_string, 0, -1);
        }
      }
  
      tep_redirect(tep_href_link(FILENAME_DEFAULT, $notify_string));
    }
  
    require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_CHECKOUT_SUCCESS);
  
    $breadcrumb->add(NAVBAR_TITLE_1);
    $breadcrumb->add(NAVBAR_TITLE_2);
  
    $global_query = tep_db_query("select global_product_notifications from " . TABLE_CUSTOMERS_INFO . " where customers_info_id = '" . (int)$customer_id . "'");
    $global = tep_db_fetch_array($global_query);
  
    if ($global['global_product_notifications'] != '1') {
      $orders_query = tep_db_query("select orders_id from " . TABLE_ORDERS . " where customers_id = '" . (int)$customer_id . "' order by date_purchased desc limit 1");
      $orders = tep_db_fetch_array($orders_query);
  
      $products_array = array();
      $products_query = tep_db_query("select products_id, products_name from " . TABLE_ORDERS_PRODUCTS . " where orders_id = '" . (int)$orders['orders_id'] . "' order by products_name");
      while ($products = tep_db_fetch_array($products_query)) {
        $products_array[] = array('id' => $products['products_id'],
                                  'text' => $products['products_name']);
      }
    }

?>
<script>
  $(document).ready(function(){
    if ($.browser.msie  && parseInt($.browser.version, 10) === 7) {
        $("#ex1").css('width',"100%");
        $(".price_table").css("text-align","left");
    }
    });

</script>
<style>
body{
        background-color: white;
    }
    .container .row{
        border: none ; 
        margin-top: 0px ; 
    }
     
        .form-group label{
            font-size: 13px;
        }
        
        .form-group .btn-outline-dark {
            border: 0px !important;
            border-radius: 0px !important;
            outline: 2px solid #000000c7 !important;
            font-size: 15px !important;
        }

        .cbtn .btn-outline-dark {
            border: 0px !important;
            border-radius: 0px !important;
            outline: 2px solid #000000c7 !important;
            font-size: 15px;
        }

        .cbtn a .btn-outline-dark {
            border: 0px !important;
            border-radius: 0px !important;
            outline: 2px solid #000000c7 !important;
            font-size: 15px;
        }

        .cbtn input{
            height: 40px !important;
        }
        .cbtn{
                width: 70%;
            }
        
        .form-group a:hover,
        .form-group a:focus {
            color: #d46405 !important;
        }
        
        .form-group a.color {
            color: #ed7006 !important;
            font-size: medium !important;
        }
        .g-recaptcha > div {
            width:100% !important;
        }
        .g-recaptcha > iframe{
            width: 100% !important;
        }
        
        @media screen and (max-width: 768px) {
          h3{
              font-size: 18px !important;
            }
            h4{
              font-size: 13px !important;
            }
        }
        @media screen and (max-width: 576px) {
            .col-md-6{
                border-right: none !important;
            }
            .cbtn{
                width: 100%;
            }
            h3{
              font-size: 15px !important;
            }
            h4{
              font-size: 13px !important;
            }
            h2{
              font-size: 22px !important;
              font-weight: 600;
            }
        }
    </style>
<section>
    <div class="mt-5">
        <h1>&nbsp;</h1>
    </div>
    <div class="mt-5">
        <h2>&nbsp;</h2>
    </div>
    <h2 class="text-center font-weight-bold mb-lg-5" >Thank you for your Order.</h2> 
    <h2 class="text-center font-weight-bold" >Order Receipt</h2> 
    <hr>
    <div class="container">
      <div>
<h1 style="font-size: 13px;"><?php echo HEADING_TITLE; ?></h1>
<strong  style="font-size: 14px;">Order Number :  &nbsp;<?php echo $orders['orders_id'];?></strong>
<?php echo tep_draw_form('order', tep_href_link(FILENAME_CHECKOUT_SUCCESS, 'action=update', 'SSL')); ?>

<div class="contentContainer" style="text-align: left;">
<p><?php echo TEXT_SUCCESS; ?></p>
<p>
 <b> 

<?php
  if ($global['global_product_notifications'] != '1') {
    echo TEXT_NOTIFY_PRODUCTS . '<br /><p class="productsNotifications">';

    $products_displayed = array();
    for ($i=0, $n=sizeof($products_array); $i<$n; $i++) {
      if (!in_array($products_array[$i]['id'], $products_displayed)) {
       //echo tep_draw_checkbox_field('notify[]', $products_array[$i]['id']) ;
	    echo $products_array[$i]['text'] . '<br />';
         $products_displayed[] = $products_array[$i]['id'];
      }
    }

    echo '</p>';
  }
?>
</b>
<?php
  echo TEXT_SEE_ORDERS . '<br /><br />' . TEXT_CONTACT_STORE_OWNER;
?>


  <div class="contentText">
    <h3><?php echo TEXT_THANKS_FOR_SHOPPING; ?></h3>
  </div>

<?php
  if (DOWNLOAD_ENABLED == 'true') {
    include(DIR_WS_MODULES . 'downloads.php');
  }
?>
</p>
<div class="cbtn" width="70%">
  <input type="submit" class="btn btn-outline-dark updatebutton" value="CONTINUE" onclick="javascript:document.forms['checkout_payment'].submit();">
</div>
  
</form>  
</div>

      </div>
    </div>
</section>

<script type="text/javascript">
  $(document).ready(function() {
    console.log('run...');
    news_feed_call();

  function news_feed_call(){
  $.ajax({
    type:'POST',
    url:'https://www.sneezeguard.com/news_rss.php',
    async: false,
  success: function(){
    console.log('success');
    //         setTimeout(function(){
    //   news_feed_call();
    // }, 300000);
  }
    });
}
});
</script>
<?php include('includes/footer_new_design.php');?>
